<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetChooseTopics extends Widget
{
    public $view = "widget-choose-topics";

    public function run()
    {
        $data = Topics::find()->where(['status' => Topics::STATUS_ACTIVE])->all();
        return $this->render($this->view, ['data' => $data]);
    }
}
