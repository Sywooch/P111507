<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetAuthor extends Widget
{
    public $view = "author";
    public $model;
    public $answer;
    public $question;

    public function run()
    {
        return $this->render(
        	$this->view,
        	[
        		'model' => $this->model,
        		'answer' => $this->answer,
        		'question' => $this->question
        	]
        );
    }
}
