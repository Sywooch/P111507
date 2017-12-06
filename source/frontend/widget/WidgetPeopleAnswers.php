<?php 
namespace frontend\widget;

use Yii;
use yii\base\Widget;
class WidgetPeopleAnswers extends Widget 
{
	 public $view = "widget-people-answers";
	 
	 public function run()
	 {
		 return $this->render($this->view);
	 }
	 
}

?>