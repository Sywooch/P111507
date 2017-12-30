<?php
namespace frontend\controllers;

use frontend\components\FrontendController;

use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Questions;
use common\models\Answers;
use common\models\Topics;
use frontend\models\QuestionModel;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use common\models\QuestionTopic;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use Yii;
/**
 * Site controller
 */
class QuestionController extends FrontendController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            // 'access' => [
            //     'class' => AccessControl::className(),
            //     'only' => ['unanswered'],
            //     'rules' => [
            //         [
            //             'actions' => ['unanswered'],
            //             'allow' => true,
            //             'roles' => ['?'],
            //         ],
            //         [
            //             'actions' => ['unanswered'],
            //             'allow' => true,
            //             'roles' => ['@'],
            //         ],
            //     ],
            // ],
            // 'verbs' => [
            //     'class' => VerbFilter::className(),
            //     /*'actions' => [
            //         'logout' => ['post'],
            //     ],*/
            // ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
            'auth' => [
                'class' => 'yii\authclient\AuthAction',
                'successCallback' => [$this, 'oAuthSuccess'],
            ],
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionUnanswered($slug)
    {
        $model = Questions::find()->where(['slug' => $slug])->one();
        if (empty($model)) {
            throw new NotFoundHttpException();
        }
        /** LAY CAU TRA LOI**/
        $questionAnswerCount = Answers::find()
        ->where([
            "question_id"=>$model->id,
            "status"     => Answers::IS_ACTIVE
        ])->count();
		if($questionAnswerCount>0)
		{
			return $this->redirect([$model->modulehadanswer,'id'=>$model->id]);
			//$url = Yii::$app->urlManager->createUrl([$model->modulehadanswer,'id'=>$model->id]);
			//return Yii::$app->response->redirect($url, 301);
		}
		
        /** LAY TOPIC CUNG CAU HOI **/
        $dataIdQuestionTopic    =   QuestionTopic::find()
            ->select('topic_id')
            ->where(["question_id"=>$model->id])
            ->all();
        $dataIdQuestionRelation =   QuestionTopic::find()
            ->select('question_id')
            ->where(['topic_id' => ArrayHelper::getColumn($dataIdQuestionTopic, "topic_id")])
            ->all();
        $dataQuestionRelation = Questions::find()
            ->where(["id" => ArrayHelper::getColumn($dataIdQuestionRelation, "question_id")])
            ->limit(10)
            ->orderBy(["id"=>SORT_DESC])
            ->all();
		$dataTopics	= Topics::find()
			->where(["id"=>ArrayHelper::getColumn($dataIdQuestionTopic, "topic_id")])
			->all();
		
		/** SEO META **/
		$metaTitle			= "";
		$metaDescription 	= "";
		$metaImgage			= "";
		if(!empty($model->social_description)){
			$metaDescription = trim($model->social_description);
		}
		else{
			$metaDescription = "Hãy là người đầu tiên trả lời câu hỏi này";
		}
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'description',
			'content' 	=> $metaDescription
		]);	
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'og:description',
			'content'	=> $metaDescription
		]);	
		
		if(!empty($model->social_title)){
			$metaTitle = $model->social_title;
		}
		else{
			$metaTitle = $model->title;
		}
		$this->view->title 	= $metaTitle;
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:title',
			'content'	=> $metaTitle.' - Quickrep',	
		]);
		
		if(!empty($model->social_images)){
			$metaImages = \Yii::$app->homeUrl.'/uploads/questions/'.$model->social_images;
			\Yii::$app->view->registerMetaTag([
				'property'	=> 'og:image',
				'content'	=> $metaImages,	
			]);
		}else{
			$metaImages = \Yii::$app->homeUrl.'/v1/images/safe_aimage.jpg';
			\Yii::$app->view->registerMetaTag([
				'property'	=> 'og:image',
				'content'	=> $metaImages,	
			]);
		}
		/*
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:url',
			'content'	=> \Yii::$app->homeUrl.Url::to(["question/unanswered","id"=>$model->id]),
		]);
		
		$this->view->registerLinkTag([
                'rel'  	=> 'canonical',
                'href' 	=> \Yii::$app->homeUrl.Url::to(["question/unanswered","id"=>$model->id]),
        ]);	
		*/
		$this->view->registerMetaTag([
				'name'  	=> 'robots',
                'content'   => 'NOINDEX, NOFOLLOW',
			]);
		
		/** END SEO META **/	
        
        return $this->render('unanswered', [
            'model' => $model,
            'dataQuestionRelation' => $dataQuestionRelation,
			'dataTopics'	=> $dataTopics
        ]);
    }
	
	public function actionAnswered($slug)
    {
    	$this->layout = 'question_layout';
    	try {
            $model = new QuestionModel;
            $model->slug = crequest()->get('slug');
            if ($model->validate()) {
                $result = $model->getQuestionBySlug();
                return $this->render('question-answered', ['model' => $result]);
            } else {
                Yii::$app->session->setFlash(
	                'danger',
	                $model->getErrors()
	            );
            	return $this->goHome();
            }
        } catch (\Exception $e) {
        	dd($e->getMessage());
        	Yii::$app->session->setFlash(
                'danger',
                $e->getMessage()
            );
            return $this->goHome();
        }
  //       $model = Questions::find()->where(['slug' => $slug])->one();
  //       if (empty($model)) {
  //           throw new NotFoundHttpException();
  //       }
  //       /** LAY CAU TRA LOI**/
  //       $sqlAnswerQuestion = Answers::find()
  //       ->where([
  //           "question_id"=>$model->id,
  //           "status"     => Answers::IS_ACTIVE
  //       ]);
  //       $dataProviderAnswerQuestion = new ActiveDataProvider([
  //           'query' => $sqlAnswerQuestion,
  //           'pagination' => [
  //               'pageSize' => 5,
  //           ],
  //           'sort'=> [
  //               'defaultOrder' => ['id' => SORT_DESC]
  //           ]
  //       ]);
  //       $totalAnswer = clone $sqlAnswerQuestion;
  //       /** LAY TOPIC CUNG CAU HOI **/
  //       $dataIdQuestionTopic    =   QuestionTopic::find()
  //           ->select('topic_id')
  //           ->where(["question_id"=>$model->id])
  //           ->all();
  //       $dataIdQuestionRelation =   QuestionTopic::find()
  //           ->select('question_id')
  //           ->where(['topic_id' => ArrayHelper::getColumn($dataIdQuestionTopic, "topic_id")])
  //           ->all();
  //       $dataQuestionRelation = Questions::find()
  //           ->where(["id" => ArrayHelper::getColumn($dataIdQuestionRelation, "question_id")])
  //           ->limit(10)
  //           ->orderBy(["id"=>SORT_DESC])
  //           ->all();
  //       $dataTopics	= Topics::find()
		// 	->where(["id"=>ArrayHelper::getColumn($dataIdQuestionTopic, "topic_id")])
		// 	->all();
			
		// $this->addSeoDataQuestion();

        // return $this->render('question-answered', [
   //          'model' 		=> $model,
   //          'totalAnswer' 	=> $totalAnswer->count(),
   //          'dataProviderAnswerQuestion' 	=> $dataProviderAnswerQuestion,
   //          'dataQuestionRelation' 			=> $dataQuestionRelation,
			// 'dataTopics'	=> $dataTopics
        // ]);
    }

    private function addSeoDataQuestion()
    {
    	/** SEO META **/
		$metaTitle			= "";
		$metaDescription 	= "";
		$metaImgage			= "";
		if(!empty($model->social_description)){
			$metaDescription = trim($model->social_description);
		}
		else{
			$modelAnswer 	= $dataProviderAnswerQuestion->getModels();
			$strAnswers  	= !empty($modelAnswer[0]["answers_text"]) ? strip_tags($modelAnswer[0]["answers_text"]) : '';
			$strAnswers 	= word_limit($strAnswers,155);
			$metaDescription 	= "Có (".$totalAnswer->count().") câu trả lời: ".trim($strAnswers);
		}
		
		
		if(!empty($model->social_title)){
			$metaTitle = $model->social_title;
		}
		else{
			$metaTitle = trim($model->title);
		}
		
		
		if(!empty($model->social_images)){
			$metaImages = \Yii::$app->homeUrl.'/uploads/questions/'.$model->social_images;
			\Yii::$app->view->registerMetaTag([
				'property'	=> 'og:image',
				'content'	=> $metaImages,	
			]);
		}else{
			$metaImages = \Yii::$app->homeUrl.'/v1/images/safe_aimage.jpg';
			\Yii::$app->view->registerMetaTag([
				'property'	=> 'og:image',
				'content'	=> $metaImages,	
			]);
		}
		
		$this->view->title 	= $metaTitle.' - Quickrep';
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:title',
			'content'	=>  $metaTitle.' - Quickrep',
		]);
		
		\Yii::$app->view->registerMetaTag([
			'name' => 'description',
			'content' => $metaDescription
		]);	
		\Yii::$app->view->registerMetaTag([
			'name' => 'og:description',
			'content' => $metaDescription
		]);	
		
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:url',
			'content'	=> \Yii::$app->homeUrl.Url::to(["question/answered","id"=>$model->id]),
		]);
		$this->view->registerLinkTag([
                'rel'  	=> 'canonical',
                'href' 	=> \Yii::$app->homeUrl.Url::to(["question/answered","id"=>$model->id]),
        ]);	
		
		if($model->censor_flag == 0){
			$this->view->registerMetaTag([
				'name'  	=> 'robots',
                'content'   => 'NOINDEX, NOFOLLOW',
			]);
		}else{
			$this->view->registerMetaTag([
				'name'  	=> 'robots',
                'content'   => 'index,follow',
			]);
		}
		/** END SEO META **/
    }
}
