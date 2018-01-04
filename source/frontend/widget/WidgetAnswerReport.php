<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetAnswerReport extends Widget
{
    public $view = "answer-report";
    public $id;
    public function run()
    {
        return $this->render($this->view, ['id' => $this->id]);
    }
}
