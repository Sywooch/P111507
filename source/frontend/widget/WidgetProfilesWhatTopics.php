<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
use common\models\User;
use common\models\UserTopicFollow;
class WidgetProfilesWhatTopics extends Widget
{
	public $uid;
    public function run()
    {
		$userInfo = User::findOne($this->uid);
		if(!empty($userInfo)){
			$fullName = $userInfo->first_name.' '.$userInfo->last_name;
		}
		
		$models = UserTopicFollow::find()
		->innerJoinWith('topics','user_topic_follow.topic_id = topics.id')
		->where(["user_id"=>$this->uid])->all();
		
		return $this->render('widget-profiles-what-topics',[
			'models' => $models
		]);
		
		
    }
	
	function isPrimaryAccount()
	{
		if(Yii::$app->user->isGuest)
		{
			return false;
		}
		else
		{
			if($this->uid == \Yii::$app->user->identity->id)
			{
				return true;
			}
			return false;
		}
	}
}
