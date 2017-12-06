<?php
namespace frontend\controllers;

use frontend\components\FrontendController;

use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\Questions;
use common\models\Answers;
use common\models\Topics;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use common\models\QuestionTopic;
use yii\helpers\ArrayHelper;
/**
 * Site controller
 */
class TopicController extends FrontendController
{
	public function actionIndex()
	{
		//
	}
	
	public function actionDetail($id)
	{
		$model = Topics::findOne($id);
		if(empty($model)){
			throw new NotFoundHttpException();
		}
		
		$dataIdQuestionTopic    =   QuestionTopic::find()
            ->select('question_id')
            ->where(["topic_id"=>$model->id])
            ->all();
			
		$queryQuestion = Questions::find()
            ->where(["id" 	=> 	ArrayHelper::getColumn($dataIdQuestionTopic, "question_id")]);
			
		$dataProvider = new ActiveDataProvider([
            'query' => $queryQuestion,
            'pagination' => [
                'pageSize' => 5,
            ],
            'sort'=> [
                'defaultOrder' => ['id' => SORT_DESC]
            ]
        ]);	
			
		return $this->render("detail",[
			"model"	=> $model,
			"dataProvider" => $dataProvider
		]);
	}
	
}
