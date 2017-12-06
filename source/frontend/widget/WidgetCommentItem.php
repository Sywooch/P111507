<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetCommentItem extends Widget
{
    public $view = "widget-comment-item";

    public $model;
    public function run()
    {
        return $this->render($this->view, ['model' => $this->model]);
    }
}
