<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>

<div class="inner">
    <div class="mainContent">
        <div class="login">
            <?php $form = ActiveForm::begin(['id' => 'contact-signup']); ?>
            
                <h3 class="titleForm">Liên hệ quảng cáo</h3>
                
                <p style="color: green; font-weight: bold;"><?= Yii::$app->session->getFlash('contact-success'); ?></p>
                <p style="color: red; font-weight: bold;"><?= Yii::$app->session->getFlash('contact-error'); ?></p>
                
                <?= $form->field($model, 'name', [
                      'template' => "<span class=\"icocommon iconame\"></span>\n{input}\n{hint}\n{error}"
                    ])->textInput(['class' => 'form-control-field', 'placeholder' => $model->getAttributeLabel('name')]) ?>
                
                <?= $form->field($model, 'email', [
                      'template' => "<span class=\"icocommon icoemail\"></span>\n{input}\n{hint}\n{error}"
                    ])->textInput(['class' => 'form-control-field', 'placeholder' => $model->getAttributeLabel('email')]) ?>
                
                <?= $form->field($model, 'subject', [
                      'template' => "<span class=\"icocommon iconame\"></span>\n{input}\n{hint}\n{error}"
                    ])->textInput(['class' => 'form-control-field', 'placeholder' => $model->getAttributeLabel('subject')]) ?>
                    
                <?= $form->field($model, 'body', [
                      'template' => "<span class=\"icocommon iconame\"></span>\n{input}\n{hint}\n{error}"
                    ])->textArea(['class' => 'form-control-field', 'placeholder' => $model->getAttributeLabel('body'), 'rows' => 6, 'style' => 'height:auto;']) ?>

                <?= $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="confirm"><p class="codeCF left">{image}</p><div class="import right">{input}</div></div>',
                ]) ?>
                
                <div class="formpos">
                    <?= Html::submitButton('Gửi liên hệ', ['class' => 'buttonLogin', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="textCenter">
            <?php 
            if(!empty($this->params['banners'][17]->image)) {
                echo Html::a(Html::img('http://img2.taichua.com' . $this->params['banners'][17]->image, ['alt'=>'']), $this->params['banners'][17]->link, ['target'=>'_blank']);
            } 
            ?>
        </div>
    </div><!--mainContent-->
</div>
