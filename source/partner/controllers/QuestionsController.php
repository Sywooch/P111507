<?php

namespace partner\controllers;

use Yii;
use common\models\Questions;
use partner\models\QuestionsSearch;
use common\models\Topics;
use common\models\QuestionTopic;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * QuestionsController implements the CRUD actions for Questions model.
 */
class QuestionsController extends Controller
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
                    'delete' => ['POST','GET'],
                ],
            ],
        ];
    }

    /**
     * Lists all Questions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new QuestionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Questions model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Questions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Questions();
        if ($model->load(Yii::$app->request->post())) {
			$old_question = Questions::find()->where(['title' => trim($model->title)])->asArray()->one();
            if (!empty($old_question)) {
				$model->addError("title","Câu hỏi đã tồn tại");
				return $this->render('create', [
                    'model' => $model,
                ]);
            }
            $model->user_id 	= Yii::$app->user->identity->id;
			$model->status		= $model::DEFAULT_STATUS;
			$model->censor_flag = $model::DEFAULT_CENSOR_FAG;
            if ($model->save()) 
			{
					/**KEN ADD TOPIC FOR QUESTIONS**/
					
					//$modelTopic 	= new Topics();
					//$objectTopcis 	= $modelTopic->suggetTopics($model->title);
					//$modelQuestion 	= new Questions();
					//$object 		= json_decode($objectTopcis);
					//$modelQuestion->addQuestionToTopics($model->id,$object->data);
					
					/**END ADD TOPIC FOR QUESTION**/
					
					return $this->redirect(['view', 'id' => $model->id]);
            } else {
                return $this->render('create', [
                    'model' => $model,
                ]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Questions model.
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
     * Deletes an existing Questions model.
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
     * Finds the Questions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Questions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Questions::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
