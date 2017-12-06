<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<section id="content" class="register">
    <div class="container">
        <div class="form-register">
            <h2>Yêu cầu đặt lại mật khẩu</h2>
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form', 'class'=>'main-form']); ?>
            
                <p style="color: green; font-weight: bold;"><?= Yii::$app->session->getFlash('rq-resetpass-success'); ?></p>
                <p style="color: green; font-weight: red;"><?= Yii::$app->session->getFlash('rq-resetpass-error'); ?></p>
                
                <?= $form->field($model, 'email', [
                      'template' => "<span class=\"glyphicon glyphicon-envelope\"></span>\n{input}\n{hint}\n{error}"
                    ])->textInput(['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('email')]) ?>
                
                <div class="formpos">
                    <?= Html::submitButton('Gửi', ['class' => 'btn btn-default btn-register', 'name' => 'request-password-reset-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div><!-- end .form-register -->
    </div>
</section>