<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetCompleteRegister extends Widget
{
    public $view = "complete-register";

    public function run()
    {
        return $this->render($this->view, []);
    }
}
