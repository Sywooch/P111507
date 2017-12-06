<?php 
namespace frontend\components\seo;
use yii\base\BootstrapInterface;

class SeoUrlBootstrap implements BootstrapInterface {
	
	public function bootstrap($app){
		$app->getUrlManager()->addRules(
            [
                [
                  'class' => 'frontend\components\seo\UrlRule',
                ],
            ]
        );
	}
}