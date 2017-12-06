<?php 
namespace frontend\controllers;
use frontend\components\FrontendController;
use Yii;
use yii\filters\AccessControl;
class SiteController extends FrontendController
{
	public function actionLogErrors3rdPartyPost()
	{
		$arrayResult = array(
			"value" => null,
			"pmsg" 	=> null
		);
		return json_encode($arrayResult);
	}
	
	public function actionBatchedLogPost()
	{
		$arrayResult = array(
			"value" => null,
			"pmsg" 	=> null
			
		);
		return json_encode($arrayResult);
	}
}
?>