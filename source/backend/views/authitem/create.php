<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AuthItem */

$this->title = 'Thêm mới Role hoặc Permission';
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Role và Permission', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php
    if (isset($msg) && !empty($msg)) {
    ?>
    <p style="color: green; font-weight: bold;text-align: center;"><?= $msg ?></p>
    <?php
    }
    ?>
    
    <?= $this->render('_form', [
        'model' => $model
    ]) ?>
    
</div>
