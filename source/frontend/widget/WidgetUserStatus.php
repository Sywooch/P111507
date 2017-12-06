<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetUserStatus extends Widget
{
    public $view = "widget-user-status";

    public function run()
    {
        return $this->render($this->view);
    }
}
