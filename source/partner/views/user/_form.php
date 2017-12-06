<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use backend\models\AuthItem;
use yii\web\View;
$roleArray  = $this->params['roleArray'];
/* @var $this yii\web\View */
/* @var $model backend\models\User */
/* @var $form yii\widgets\ActiveForm */
?>
<div class="box box-default">
	<div class="box-body">
		<?php $form = ActiveForm::begin(); ?>
		<div class="col-md-8">
			<div class="user-form">

				

				<?= $form->field($model, 'username')->textInput(['maxlength' => true, 'readonly' => 'readonly']) ?>

				<?= $form->field($model, 'password')->passwordInput()->label('New password') ?>
				
				<?= $form->field($model, 'repassword')->passwordInput()->label('New password repeat') ?>

				<?= $form->field($model, 'email') ?>

				<?= $form->field($model, 'status')
				->radioList(array(10 => 'ACTIVE', 0 => 'NOT ACTIVE'),['separator' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;']); ?>

				<div class="form-group">
					<?= Html::submitButton($model->isNewRecord ? 'Thêm mới' : 'Cập nhật', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
				</div>

				

			</div>
		</div>
		<div class="col-md-4">
				<label class="control-label" for="user-username">Role</label>
				<?php
					echo Html::checkboxList("role",$roleArray,ArrayHelper::map(AuthItem::find()->where("type = 1")->orderBy('name asc')->all(),'name','description'),['prompt'=>'Chọn Role','class' => 'form-control minimal','separator' => '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;']);
				?>
		</div>
		<?php ActiveForm::end(); ?>
	</div>
</div>
<?php 
$jsLoadEnd = <<<JS
	//iCheck for checkbox and radio inputs
        $('input[type="checkbox"], input[type="radio"]').iCheck({
          checkboxClass: 'icheckbox_minimal-green',
          radioClass: 'iradio_minimal-green'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });
		
		$("#parent-id").change(function(){
			var name = $("#parent-id option:selected").val();
			
			window.location = "/permission/auth-item?parent="+name;
		});
JS;
$this->registerJS($jsLoadEnd,View::POS_END);
?>