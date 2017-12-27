<?php

$params = array_merge(
	require (__DIR__ . '/../../common/config/params.php'),
	require (__DIR__ . '/../../common/config/params-local.php'),
	require (__DIR__ . '/params.php'),
	require (__DIR__ . '/params-local.php')
);

return [
	//'bootstrap'    => ['assetsAutoCompress'],
	'bootstrap' => [
		'class' => 'frontend\components\seo\SeoUrlBootstrap',
	],
	'id' => 'app-frontend',
	'basePath' => dirname(__DIR__),
	'controllerNamespace' => 'frontend\controllers',
	'params' => $params,
	'defaultRoute' => 'site',
	'charset' => 'utf-8',
	'on beforeRequest' => function ($event) {
		$actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		if ($actual_link == "https://quickrep.vn/unanswered/cach-tinh-phan-tram-nhu-the-nao-la-chinh-xac-nhat") {
			$url = "https://quickrep.vn/cach-tinh-phan-tram-nhu-the-nao-nhanh-va-chinh-xac-nhat";
			Yii::$app->response->redirect($url, 301);
			Yii::$app->end();
		}
	},
	'components' => [
		'view' => [
			'theme' => [
				'basePath' => '@frontend/themes/v2',
				'baseUrl' => '@web/v2',
				'pathMap' => [
					'@frontend/views' => '@frontend/themes/v2/views',
				],
			],
		],
		'user' => [
			'identityClass' => 'common\models\User',
			'enableAutoLogin' => true,
		],
		'log' => [
			'traceLevel' => YII_DEBUG ? 3 : 0,
			'targets' => [
				[
					'class' => 'yii\log\FileTarget',
					'levels' => ['error', 'warning'],
				],
			],
		],
		'errorHandler' => [
			'errorAction' => 'site/error',
		],
		'urlManager' => [
			'class' => 'yii\web\UrlManager',
			//  Disable index.php
			'enablePrettyUrl' => true,
			'showScriptName' => false,
			'enableStrictParsing' => true,
			'rules' => [
				//'unanswered/<slug:[A-Za-z0-9 -_.]+>' 	=> 'question/unanswered',
				#cauhoi
				'/' => 'site/index',
                'dang-nhap' => 'site/login',
				'dang-xuat' => 'site/logout',
				'dang-ki' => 'site/signup',
				'facebook-dang-ki' => 'site/facebook-signup',
				'cau-hoi' => 'answer/index',
				'cau-hoi/<page:\d+>' => 'answer/index',
				'binh-luan' => 'ajax/comment',
				#content
				//'tai-khoan' 			=> 'profiles/index',
				// 'tai-khoan/<slug:[A-Za-z0-9 -_.]+>' => 'profiles/index',
			],
		],
		'assetManager' => [
			'class' => 'yii\web\AssetManager',
			'bundles' => [
				'yii\web\JqueryAsset' => [
					'js' => [
						//YII_ENV_DEV ? 'jquery.js' : 'jquery.min.js'
					],
					'css' => [
					],
				],
			],
		],
		'cache' => [
			'class' => 'yii\caching\FileCache',
		],
		'assetsAutoCompress' =>
		[
			'class' => '\skeeks\yii2\assetsAuto\AssetsAutoCompressComponent',
			'enabled' => false,

			'readFileTimeout' => 3, //Time in seconds for reading each asset file

			'jsCompress' => true, //Enable minification js in html code
			'jsCompressFlaggedComments' => true, //Cut comments during processing js

			'cssCompress' => true, //Enable minification css in html code

			'cssFileCompile' => true, //Turning association css files
			'cssFileRemouteCompile' => false, //Trying to get css files to which the specified path as the remote file, skchat him to her.
			'cssFileCompress' => true, //Enable compression and processing before being stored in the css file
			'cssFileBottom' => false, //Moving down the page css files
			'cssFileBottomLoadOnJs' => false, //Transfer css file down the page and uploading them using js

			'jsFileCompile' => true, //Turning association js files
			'jsFileRemouteCompile' => false, //Trying to get a js files to which the specified path as the remote file, skchat him to her.
			'jsFileCompress' => true, //Enable compression and processing js before saving a file
			'jsFileCompressFlaggedComments' => true, //Cut comments during processing js

			'htmlCompress' => true, //Enable compression html
			'htmlCompressOptions' => //options for compressing output result
			[
				'extra' => true, //use more compact algorithm
				'no-comments' => true, //cut all the html comments
			],
		],
	],
	'modules' => [
		'social' => [
			// the module class
			'class' => 'kartik\social\Module',
			'facebook' => [
				'appId' => '962171950485607',
				'secret' => '3ccbad9365fb0fe48b3ccc38212c6b82',
			],
			// the global settings for the google plugins widget
			'google' => [
				'clientId' => '225459956798-iquj1b1halajbbgabh0402th3b8faabj.apps.googleusercontent.com ',
				'pageId' => '108940536677568216255',
			],
			// the global settings for the google analytic plugin widget
			'googleAnalytics' => [
				'id' => 'TRACKING_ID',
				'domain' => 'TRACKING_DOMAIN',
			],
			// the global settings for the twitter plugins widget
			'twitter' => [
				'screenName' => 'huynv1011',
			],
		],
	],
];
