<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetAnswerComment extends Widget
{
    public $view = "answer-comment";
    public $model;
    public function run()
    {
        return $this->render($this->view, ['model' => $this->model]);
    }
}
