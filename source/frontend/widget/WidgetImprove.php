<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
use common\models\TopicBookmarks;

class WidgetImprove extends Widget
{
    public $view = "widget-improve";
    public function run()
    {
        return $this->render($this->view);
    }
}
