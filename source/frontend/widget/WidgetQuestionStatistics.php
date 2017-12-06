<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Questions;
use common\models\UserQuestionFollow;

date_default_timezone_set('Asia/Ho_Chi_Minh');
class WidgetQuestionStatistics extends Widget
{
    public $view = "widget-question-statistics";
	public $id;
    public function run()
    {
		$modelQuestion 			= Questions::findOne($this->id);
		$numberQuestionFollow 	= UserQuestionFollow::find()->where(["question_id"=>$modelQuestion->id])->count();
		$dateLastAsked			= time_elapsed_string('@'.$modelQuestion->create_time);
		return $this->render($this->view,[
			"modelQuestion" 		=> $modelQuestion,
			"numberQuestionFollow"	=> $numberQuestionFollow,
			"dateLastAsked"			=> $dateLastAsked
		]);
    }
}
