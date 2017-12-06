<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetNavbar extends Widget
{
    public $view = "widget-navbar";

    public function run()
    {
        return $this->render($this->view);
    }
}
