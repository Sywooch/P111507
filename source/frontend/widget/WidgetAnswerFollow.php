<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetAnswerFollow extends Widget
{
    public $view = "answer-follow";
    public $id;
    public $count;
    public $isFollow;
    public function run()
    {
        return $this->render($this->view, ['id' => $this->id, 'count' => $this->count, 'isFollow' => $this->isFollow]);
    }
}
