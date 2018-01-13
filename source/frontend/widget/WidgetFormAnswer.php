<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetFormAnswer extends Widget
{
    public $view = "form-answer";
    public $model;
    public function run()
    {
        return $this->render($this->view, ['model' => $this->model]);
    }
}
