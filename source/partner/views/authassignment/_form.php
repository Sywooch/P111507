<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php
        $strwhere = 'type = 1';
        if ($uid != 2) {
            $strwhere .= ' and name != "admin"';
        } 
        echo $form->field($model, 'item_name')->dropDownList(ArrayHelper::map(\backend\models\AuthItem::find()->where($strwhere)->orderBy('name asc')->all(), 'name', 'description'), ['prompt' => '']); 
    ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm Role' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
