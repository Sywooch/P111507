<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-item-form">
    <p>Example ROLE name: admin</p>
    <p>Example PERMISSION name (module_id/controller_id/action_id): app-backend/site/index</p>
    
    <?php $form = ActiveForm::begin(); ?>
    
    <?php
    if ($model->isNewRecord) {
    ?>
    <?= $form->field($model, 'type')->dropDownList([1 => 'ROLE', 2 => 'PERMISSION'], ['prompt' => '']) ?>
    <?php
    } else {
    ?>
    <?= $form->field($model, 'type')->dropDownList([1 => 'ROLE', 2 => 'PERMISSION'], ['prompt' => '', 'disabled' => 'disabled']) ?>
    <?php
    }
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
