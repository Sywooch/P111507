<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetFormComment extends Widget
{
    public $view = "comment-form";
    public $id;
    public $type;
    public $parent_id;

    public function run()
    {
        if(cuser()) {
        	return $this->render($this->view, ['id' => $this->id, 'type' => $this->type, 'parent_id' => $this->parent_id]);
        }
    }
}
