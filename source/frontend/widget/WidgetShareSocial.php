<?php
namespace frontend\widget;

use Yii;
use yii\base\Widget;
use common\models\Topics;

class WidgetShareSocial extends Widget
{
    public $view 	= "widget-share-social";
    public $model;
	public $siteUrl;
    public function run()
    {
        return $this->render($this->view, ['model' => $this->model,'siteUrl'=>$this->siteUrl]);
    }
}
