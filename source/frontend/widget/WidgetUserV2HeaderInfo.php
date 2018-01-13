<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
use common\models\User;
class WidgetUserV2HeaderInfo extends Widget
{
    public $view = "widget-user-v2-header-info";
	public $uid;
	public $model;
    public function run()
    {
		//$model = User::findOne($this->uid);
        return $this->render($this->view,[
			//"userInfo"	=> $userInfo,
			"model"		=> $this->model
		]);
    }
}
