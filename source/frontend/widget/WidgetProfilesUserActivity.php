<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
use common\models\Questions;
use common\models\Answers;
class WidgetProfilesUserActivity extends Widget
{
    public $view = "widget-profiles-user-activity";
	public $uid;
    public function run()
    {
		$countQuetionsByUser = Questions::find()
		->where(["questions.user_id"=>Yii::$app->user->getId()])->count();
		
		$countAnswersByUser = Answers::find()
		->where(["user_id"=>Yii::$app->user->getId()])->count();
		
        return $this->render($this->view,[
			"countQuetionsByUser"	=> $countQuetionsByUser,
			"countAnswersByUser"	=> $countAnswersByUser,
			"uid"					=> $this->uid,
		]);
    }
}
