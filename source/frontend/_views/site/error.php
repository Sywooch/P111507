<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;
use yii\web\View;
use frontend\widget\TopbarWidget;
use frontend\widget\HeaderWidget;
use frontend\widget\TopwindownmenuWidget;
$baseUrl = Yii::getAlias('@webDomain');
if ($exception->statusCode === 403) 
{
    $name = 'Cảnh báo';
    $message = 'Bạn không có đủ quyền để truy cập trang này.';
}

$this->title = Yii::$app->name . ' | ' . $name;
Yii::$app->layout = false;
$this->registerCssFile($baseUrl."/skins/css/bootstrap.min.css");
$this->registerCssFile($baseUrl."/skins/css/optimized.css");

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
	<head>
		<meta content="" name="keywords">
		<meta content="" name="description">
		<meta content="" name="copyright">
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<meta content="ja" http-equiv="Content-Language">
		<meta content="text/css" http-equiv="Content-Style-Type">
		<meta content="text/javascript" http-equiv="Content-Script-Type">
		<meta content="width=device-width; initial-scale=1.0" name="viewport">
		<title>Tai Chua | <?=$this->title?></title>
		<?php $this->head() ?>
	</head>
	<body class="error_page">
		<?php $this->beginBody() ?>
			ERROR
		<?php $this->endBody() ?>
	</body>
</html>
<?php $this->endPage() ?>