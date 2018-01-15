<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
use common\models\User;
class WidgetUserV2HeaderInfo extends Widget
{
	public $uid;
	public $model;
    public function run()
    {
		if($this->isPrimaryAccount()) // this account user
		{
			return $this->render('widget-user-v2-header-info',[
				"model"		=> $this->model
			]);
		}
		else
		{
			return $this->render('widget-user-v2-header-info-guest',[
				"model"		=> $this->model
			]);
		}
        
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
