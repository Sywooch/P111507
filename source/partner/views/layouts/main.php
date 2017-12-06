<?php

/* @var $this \yii\web\View */
/* @var $content string */

use partner\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
$asset = partner\assets\AppAsset::register($this);
$baseUrl = $asset->baseUrl;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="skin-blue sidebar-mini">
<?php $this->beginBody() ?>

<div class="wrap wrapper">
    <?= $this->render('header',['baseUrl'=>$baseUrl])?>
    <?= $this->render('leftmenu',['baseUrl'=>$baseUrl])?>
    <?= $this->render('contents',['content'=>$content])?>
    <?= $this->render('footer',['baseUrl'=>$baseUrl])?>
    <?= $this->render('rightside',['baseUrl'=>$baseUrl])?>
    
    <div class="control-sidebar-bg"></div>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
