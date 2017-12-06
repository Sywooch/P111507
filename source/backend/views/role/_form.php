<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use backend\models\AuthItem;
/* @var $this yii\web\View */
/* @var $model backend\models\AuthItem */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="box box-default">
	<div class="box-header with-border">
          <h3 class="box-title">THÊM MỚI ROLE</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
    </div>
	<div class="box-body">
				<p class="text-red">
					<b>
						Ví dụ : <br/> 
						Name : Admin	<br/> 
						Description : Cấp quản lý admin
					</b>
				</p>
				<?php $form = ActiveForm::begin(); ?>
				
				<?php
				if ($model->isNewRecord) 
				{
				?>
				<?= $form->field($model, 'type')->dropDownList([1 => 'ROLE']) ?>
				<?php
				} else {
				?>
				<?= $form->field($model, 'type')->dropDownList([1 => 'ROLE'], ['prompt' => '', 'disabled' => 'disabled']) ?>
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
</div>
