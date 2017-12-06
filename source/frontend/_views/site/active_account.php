<?php
/* @var $this yii\web\View */

?>

<section id="content" class="register">
    <div class="container">
        <div class="form-register">
            <h2>Kích hoạt tài khoản</h2>
            
            <p style="color: green; font-weight: bold;"><?= Yii::$app->session->getFlash('success'); ?></p>
            <p style="color: red; font-weight: bold;"><?= Yii::$app->session->getFlash('error'); ?></p>

        </div>
    </div>
</section>