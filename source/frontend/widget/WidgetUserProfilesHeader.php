<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
use common\models\User;
class WidgetUserProfilesHeader extends Widget
{
    public $view = "widget-user-profiles-header";
	public $uid;
    public function run()
    {
		$userInfo = User::findOne($this->uid);
        return $this->render($this->view,[
			"userInfo"	=> $userInfo,
		]);
    }
}
