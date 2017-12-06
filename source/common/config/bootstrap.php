<?php
Yii::setAlias('common', dirname(__DIR__));
Yii::setAlias('@rootWeb', dirname(dirname(__DIR__)));
Yii::setAlias('frontend', dirname(dirname(__DIR__)) . '/frontend');
Yii::setAlias('backend', dirname(dirname(__DIR__)) . '/backend');
Yii::setAlias('partner', dirname(dirname(__DIR__)) . '/partner');
Yii::setAlias('crawldata', dirname(dirname(__DIR__)) . '/crawldata');
Yii::setAlias('console', dirname(dirname(__DIR__)) . '/console');
Yii::setAlias('api', dirname(dirname(__DIR__)) . '/api');
Yii::setAlias('tests', dirname(dirname(__DIR__)) . '/tests/codeception/console');

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') {
    $htp = "https://";
} else {
    $htp = "http://";
}
Yii::setAlias('webDomain', "$htp$_SERVER[HTTP_HOST]");
Yii::setAlias('baseDomain', "https://quickrep.vn");
