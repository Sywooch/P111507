<?php
namespace frontend\controllers;

use frontend\components\FrontendController;
use Yii;
use yii\filters\AccessControl;
use common\models\Questions;
use common\models\Upvotes;
use yii\data\ActiveDataProvider;
use common\models\UserQuestionPass;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use common\models\Answers;
use yii\helpers\Url;
class AnswerController extends FrontendController
{
    
    
    public function actionIndex()
    {
        $question_pass = UserQuestionPass::find()
        ->select('question_id')
        ->all();
        
        $query = Questions::find()
            ->where(['questions.status' => 1])
            ->andWhere(['NOT IN', 'questions.id',ArrayHelper::getColumn($question_pass, "question_id")])
        ;
        /*debug($query->createCommand()->getRawSql());*/
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ],
            'sort'=> [
                'defaultOrder' => ['id' => SORT_DESC]
            ]
        ]);
        
        return $this->render("index", [
            "dataProvider"  => $dataProvider
        ]);
    }
    
    public function actionDetail($id)
    {
		$id = intval($id) < 0 ? 0 : intval($id);
		if($id==0)
		{
			throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
		}
		$model = Answers::findOne($id);
		if(empty($model)){
			throw new \yii\web\NotFoundHttpException('The requested page does not exist.');
		}
		
		
		/** SEO META **/
		$metaTitle			= "";
		$metaDescription 	= "";
		$metaImgage			= "";
		
		$strAnswers = !empty($model->answers_text) ? strip_tags($model->answers_text) : '';
		$strAnswers = word_limit($strAnswers,155);
		$metaDescription = $model->user->username." trả lời: ".$strAnswers."...";
		
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'description',
			'content' 	=> htmlspecialchars_decode($metaDescription)
		]);	
		\Yii::$app->view->registerMetaTag([
			'name' 		=> 'og:description',
			'content'	=> htmlspecialchars_decode($metaDescription)
		]);	
		
		if(!empty($model->question->social_title)){
			$metaTitle = $model->question->social_title;
		}
		else{
			$metaTitle = $model->question->title;
		}
		$this->view->title 	= $metaTitle;
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:title',
			'content'	=> $metaTitle.' - Quickrep',	
		]);
		
		if(!empty($model->question->social_images)){
			$metaImages = \Yii::$app->homeUrl.'/uploads/questions/'.$model->question->social_images;
			\Yii::$app->view->registerMetaTag([
				'property'	=> 'og:image',
				'content'	=> $metaImages,	
			]);
		}
		else{
			$metaImages = \Yii::$app->homeUrl.'/v1/images/safe_aimage.jpg';
			\Yii::$app->view->registerMetaTag([
				'property'	=> 'og:image',
				'content'	=> $metaImages,	
			]);
		}
		
		
		\Yii::$app->view->registerMetaTag([
			'property'	=> 'og:url',
			'content'	=> \Yii::$app->homeUrl.Url::to(["question/answered","id"=>$model->question->id]),
		]);
		$this->view->registerLinkTag([
                'rel'  	=> 'canonical',
                'href' 	=> \Yii::$app->homeUrl.Url::to(["question/answered","id"=>$model->question->id])
        ]);	
		
		$this->view->registerMetaTag([
				'name'  	=> 'robots',
                'content'   => 'noindex, follow',
			]);
		/** END SEO META **/
		
        return $this->render("answer_detail",[
			"model"	=> $model
		]);
    }

    public function actionUnanswered($slug)
    {
        return $this->render('un-answered');
    }
}
