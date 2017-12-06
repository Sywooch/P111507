<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<section id="content" class="register">
    <div class="container">
        <div class="form-register">
            <h2>Đặt lại mật khẩu</h2>
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form', 'class'=>'main-form']); ?>
            
                <p style="color: green; font-weight: bold;"><?= Yii::$app->session->getFlash('resetpass-success'); ?></p>
                
                <?= $form->field($model, 'password', [
                      'template' => "<span class=\"glyphicon glyphicon-lock\"></span>\n{input}\n{hint}\n{error}"
                    ])->passwordInput(['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('password')]) ?>
                    
                <?= $form->field($model, 'repassword', [
                      'template' => "<span class=\"glyphicon glyphicon-lock\"></span>\n{input}\n{hint}\n{error}"
                    ])->passwordInput(['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('repassword')]) ?>
                
                <div class="formpos">
                    <?= Html::submitButton('Cập nhật', ['class' => 'btn btn-default btn-register', 'name' => 'reset-password-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div><!-- end .form-register -->
    </div>
</section>