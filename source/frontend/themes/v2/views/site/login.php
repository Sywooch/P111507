<?php 
    use yii\helpers\Url;
    use yii\widgets\ActiveForm;
    use yii\web\View;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    $home_url = Yii::$app->homeUrl;
?>
<div id="wrapper">
    <div class="form-content">
        <p class="no-account">Bạn chưa có tài khoản Quickrep? <a href="<?=Url::to(['/dang-ki'])?>">Đăng ký</a></p>
        <div class="form">
            <div class="form-box">
                <div class="login-title"><a href="#"><img src="<?=$base_url?>/images/assets/logo_form.png" alt=""></a></div>
                <div class="login-desc">Cộng đồng Hỏi Đáp lớn nhất Việt Nam</div>
                <form action="#" method="POST">
                    <?php
                        $signin_form = ActiveForm::begin([
                            'method' => 'post',
                            'action' => ['/dang-nhap'],
                            'fieldConfig' => [
                                'template' => "{input}",
                                'options' => [
                                    'tag' => 'p',
                                ],
                            ],
                            'options' => [
                                'class' => 'form-login',
                                'id' => 'form-login',
                            ],
                        ]);
                    ?>
                    <legend>Đăng nhập</legend>
                    <!-- <p>
                        <label for="mail">Địa chỉ Email</label>
                        <input type="text" id="mail">
                    </p>
                    <p>
                        <label for="pass">Mật khẩu</label>
                        <input type="text" id="pass">
                    </p> -->
                    <?= $signin_form->field($model,'email',[ 'template' => "{label}{input}{hint}{error} "])->textInput(['id' => 'email', 'class' => '']); ?>

                    <?= $signin_form->field($model,'password',[ 'template' => "{label}{input}{hint}{error} "])->passwordInput(['id' => 'password', 'class' => '']); ?> 
                    <input type="submit" value="Đăng nhập">
                <?php ActiveForm::end() ?>
                <a href="#" class="form-cancel">Hủy bỏ</a>
                <div class="orther-account">
                    <p>Hoặc đăng nhập bằng tài khoản</p>
                    <div class="account-fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></div>
                    <div class="account-gg"><a href="#"><i class="fa fa-google" aria-hidden="true"></i>Google</a></div>
                </div>
                <p class="meta">Bằng cách nhấp vào "Đăng ký", bạn cho biết rằng bạn đã đọc và đồng ý với Điều khoản Dịch vụ và Chính sách Bảo mật của chúng tôi.</p>
            </div>
            <div class="menu-form">
                <ul>
                    <li><a href="#">Về chúng tôi</a></li>
                    <li><a href="#">Giải thưởng</a></li>
                    <li><a href="#">Điều khoản sử dụng</a></li>
                    <li><a href="#">Chính sách bảo mật</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>
    </div><!-- .login-content -->
</div><!-- #wrapper -->
