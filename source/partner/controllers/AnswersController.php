<?php

namespace partner\controllers;

use Yii;
use common\models\Answers;
use partner\models\AnswersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Questions;
use yii\data\ActiveDataProvider;
use yii\data\SqlDataProvider;
use yii\db\Query;
use garyjl\simplehtmldom\SimpleHtmlDom;
use yii\helpers\HtmlPurifier;
/**
 * AnswersController implements the CRUD actions for Answers model.
 */
class AnswersController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Answers models.
     * @return mixed
     */
    public function actionIndex()
    {
		$sql = "SELECT * FROM questions WHERE questions.id NOT IN (
			select DISTINCT(question_id) from answers
		) AND status = 1  ORDER BY id DESC";
		$count = Yii::$app->db->createCommand('SELECT count(*) FROM questions WHERE questions.id NOT IN (
			select DISTINCT(question_id) from answers
		) AND status = 1')->queryScalar();
		$query = \Yii::$app->db->createCommand($sql);
		$dataProvider = new SqlDataProvider([
			"sql"	=> $sql,
			'totalCount' => $count,
		]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Answers model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
		$model = Answers::findOne($id);
		$modelQuestion = Questions::findOne($model->question_id);	
        return $this->render('view', [
            'model' => $model,
			'modelQuestion' => $modelQuestion
        ]);
    }
	
	public function actionAnswerbyuser()
    {
		$query = Answers::find()->where([
			"user_id"	=> Yii::$app->user->identity->getId(),
			//"status"	=> Answers::IS_ACTIVE,
		]);
		$dataProvider = new ActiveDataProvider([
			"query"	=> $query,
			"sort"	=> [
				"defaultOrder" => [
					"id" => SORT_DESC
				]
			]
		]);	
        return $this->render('answerbyuser', [
            'dataProvider' => $dataProvider
        ]);
    }
	
	public function actionViewquestion($id)
    {
		$model = Questions::findOne($id); 
        return $this->render('view_question', [
            'model' => $model,
        ]);
    }
	
	public function actionViewanswerbyuser($id)
    {
		$model= Answers::find()->where([
			"id"		=> $id,
			"user_id"	=> Yii::$app->user->identity->getId()
		])->one();
		if(empty($model)){
			return "Errors";
		}
		$modelQuestion = Questions::findOne($model->question_id); 
        return $this->render('view_answerbyuser', [
            'model' => $model,
			'modelQuestion'	=> $modelQuestion
        ]);
    }
    /**
     * Creates a new Answers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionReply($id)
    {
        $model = new Answers();
		
        if ($model->load(Yii::$app->request->post())) 
		{
			/** Add images first **/
			$domHtml = SimpleHtmlDom::str_get_html($model->answers_text);
			$strFirstImgSrc = $domHtml->find("img",0);
			if($strFirstImgSrc !== null)
			{
				$model->images = $strFirstImgSrc->src;
			}
			$model->censor_flag = $model::DEFAULT_CENSOR_FAG;
			$model->status 		= 1;
			/** End add images first **/
			if($model->save()){
				return $this->redirect(['view', 'id' => $model->id]);
			}
            else
			{
				 return $this->render('create', [
					'model' 		=> $model
				]);
			}
        } else {				
            return $this->render('create', [
                'model' 		=> $model
            ]);
        }
    }
	
	
	public function actionEditanswer($id)
    {
        $model= Answers::find()->where([
			"id"		=> $id,
			"user_id"		=> Yii::$app->user->identity->getId(),
			"censor_flag"   => 0
		])->one();
		if(empty($model)){
			throw new NotFoundHttpException('Có lỗi xảy ra vui lòng báo cáo với BQT website. ');
		}
		$modelQuestion = Questions::findOne($model->question_id); 
        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {				
            return $this->render('update_answerbyuser', [
                'model' 		=> $model,
				'modelQuestion' => $modelQuestion
            ]);
        }
    }
    /**
     * Updates an existing Answers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Answers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
		$model = $this->findModel($id);
		if($model->status ==1){
			throw new NotFoundHttpException('Có lỗi xảy ra vui lòng báo cáo với BQT website. ');
		}
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Answers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Answers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Answers::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
