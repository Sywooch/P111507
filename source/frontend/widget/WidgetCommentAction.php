<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetCommentAction extends Widget
{
    public $view = "comment-action";

    public $model;
    public function run()
    {
        return $this->render($this->view, ['model' => $this->model]);
    }
}
