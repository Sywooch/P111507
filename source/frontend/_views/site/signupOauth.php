<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

use frontend\assets\AppAsset;
use frontend\assets\FontAwesomeAsset;

AppAsset::register($this);
FontAwesomeAsset::register($this);

$this->title = Yii::$app->name . ' | Thành viên đăng nhập lần đầu bằng mạng xã hội';
?>

<?php $this->beginPage() ?>

<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <?= $this->registerCssFile("/css/bootstrap.min.css") ?>
    <?= $this->registerCssFile("/css/style.css") ?>
    <?= $this->registerCssFile("/css/smart.css") ?>
    <?= $this->registerCssFile("/css/jquery-ui.css") ?>
</head>
<body>

<?php $this->beginBody() ?>

<?php 
if (!Yii::$app->user->isGuest) {
?>
<script type="text/javascript">
window.close();
window.opener.location.reload();
</script>
<?php
}
?>

<section id="content" class="register">
    <div class="container">
        <div class="form-register">
            <h2>Thành viên đăng nhập lần đầu bằng mạng xã hội</h2>
            
            <p>Việc điền mật khẩu này giúp bạn có thể đăng nhập bằng email khi không sử dụng đăng nhập bằng mạng xã hội. 
            Chỉ phải điền vào lần đầu đăng nhập bằng tài khoản mạng xã hội.</p>

            <?php $form = ActiveForm::begin(['id' => 'form-signup', 'class'=>'main-form']); ?>
                
                <?= $form->field($model, 'email', [
                      'template' => "<span class=\"glyphicon glyphicon-envelope\"></span>\n{input}\n{hint}\n{error}"
                    ])->textInput(['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('email')]) ?>
                
                <?= $form->field($model, 'password', [
                      'template' => "<span class=\"glyphicon glyphicon-lock\"></span>\n{input}\n{hint}\n{error}"
                    ])->passwordInput(['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('password')]) ?>
                    
                <?= $form->field($model, 'repassword', [
                      'template' => "<span class=\"glyphicon glyphicon-lock\"></span>\n{input}\n{hint}\n{error}"
                    ])->passwordInput(['class' => 'form-control', 'placeholder' => $model->getAttributeLabel('repassword')]) ?>
                    
                <p>Chọn đăng ký là bạn đã đồng ý với <a href="javascript:void(0)">Điều khoản dịch vụ</a> và <a href="javascript:void(0)">Chính sách bảo mật</a> của <?= $_SERVER['HTTP_HOST'] ?>.</p>
                
                <?= Html::submitButton('Đăng nhập', ['class' => 'btn btn-default btn-register', 'name' => 'signup-button']) ?>
                
            <?php ActiveForm::end(); ?>
        </div><!-- end .form-register -->
    </div>
</section>

<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>
