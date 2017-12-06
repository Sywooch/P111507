<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="login-box">
  <div class="login-logo">
    <b>PARTNER </b>MANAGE
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Vui lòng đăng nhập để quản lý bài viết của bạn</p>
     <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
	 
		<?= $form->field($model, 'email',['template'=>'
			<div class="form-group has-feedback">
				{input}
				<span class="glyphicon glyphicon-user form-control-feedback text-green"></span>
			</div>
		'])->textInput(['placeholder'=>'Tài khoản','class'=>'form-control']) ?>
      
		<?= $form->field($model, 'password',[
			'template' => ' 
			<div class="form-group has-feedback">
				{input}
				<span class="glyphicon glyphicon-lock form-control-feedback text-green"></span>
			</div>'
		])->passwordInput(['placeholder'=>'Mật khẩu','class'=>'form-control']) ?>
      
	  
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <?= $form->field($model, 'rememberMe')->checkbox() ?>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
		   <?= Html::submitButton('Login', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
        </div>
        <!-- /.col -->
      </div>
    <?php ActiveForm::end(); ?>

    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
