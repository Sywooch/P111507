<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetBelongTopic extends Widget
{
    public $view = "belong-topic";
    public $model;
    public function run()
    {
        return $this->render($this->view, ['model' => $this->model]);
    }
}
