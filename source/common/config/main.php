<?php
return [
    'language' => 'vi-Vi',
    'timeZone' => 'Asia/Ho_Chi_Minh',
	'homeUrl' => 'http://hoidap.dev',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'extensions' => require(__DIR__ . '/../../vendor/yiisoft/extensions.php'),
    'components' => [
       'cache' => [
           'class' => 'yii\caching\FileCache',
        ],
//         'cache' => [
//             'class' => 'yii\redis\Cache',
//             'redis' => [
//                 'hostname' => 'localhost',
//                 'port' => 6379,
//                 'database' => 0,
//             ]
//         ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest'],
        ],
		'sphinx' => [
            'class' => 'yii\sphinx\Connection',
            'dsn' => 'mysql:host=127.0.0.1;port=9306;',
            'username' => 'root',
            'password' => '',
        ],
        'formatter' => [
            'class' => 'yii\i18n\Formatter',
            'nullDisplay' => '',
            'defaultTimeZone' => 'Asia/Saigon',
            'timeZone' => 'Asia/Saigon'
        ],
        'i18n' => [
            'translations' => [
                'frontend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'backend*' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],
    ],
    'modules' => [
        'auth' => [
            'class' => 'common\modules\auth\Module',
        ],
//         'gridview' => [
//             'class' => '\kartik\grid\Module'
//         ],
    ],
];
