<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthItemChild */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-item-child-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'parent')->dropDownList(ArrayHelper::map(\backend\models\AuthItem::find()->where('type = 1')->orderBy('name asc')->all(), 'name', 'description'), ['prompt' => '']) ?>
    
    <div style="max-height: 300px; overflow-y: scroll;">
        <?= $form->field($model, 'child')->checkboxList(ArrayHelper::map(\backend\models\AuthItem::find()->orderBy('type asc, name asc')->all(), 'name', 'description'), ['separator' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;']) ?>
    </div>
    
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
