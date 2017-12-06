<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'Đổi mật khẩu';
$this->params['breadcrumbs'][] = ['label' => 'Đổi mật khẩu', 'url' => ['password']];
?>
<div class="user-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php 
    if (isset($success) && !empty($success)) {
    ?>
    <p style="font-weight: bold; color: green;">
        <?= $success ?>
    </p>
    <?php
    }
    ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'oldpassword')->passwordInput()->label('Password') ?>

    <?= $form->field($model, 'password')->passwordInput()->label('New password') ?>

    <?= $form->field($model, 'repassword')->passwordInput()->label('New password repeat') ?>

    <div class="form-group">
        <?= Html::submitButton('Cập nhật', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>