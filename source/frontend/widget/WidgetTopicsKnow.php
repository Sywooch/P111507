<?php 
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;
class WidgetTopicsKnow extends Widget 
{
	 public $view = "widget-topics-know";
	 
	 public function run()
	 {
	 	$data = Topics::find()
	 	->select(['title as value', 'title as  label','id as id'])
        ->asArray()
	 	->where(['status' => Topics::STATUS_ACTIVE])
	 	->all();
		return $this->render($this->view, ['data' => $data]);
	 }
	 
}

?>