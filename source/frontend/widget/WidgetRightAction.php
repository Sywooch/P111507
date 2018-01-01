<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetRightAction extends Widget
{
    public $view = "right-action";
    public $link;
    public function run()
    {
        return $this->render($this->view, ['link' => $this->link]);
    }
}
