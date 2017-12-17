<?php
	$theme = $this->theme;
	$base_url = $theme->baseUrl;
	$home_url = Yii::$app->homeUrl;
	use yii\widgets\ActiveForm;
    use yii\web\View;
    use yii\helpers\Url;
?>
<div id="wrapper">
	<div class="form-content register-content">
		<p class="no-account">Bạn đã có tài khoản Quickrep? <a href="<?=Url::to(['/dang-nhap'])?>">Đăng nhập</a></p>
		<div class="form">
			<div class="form-box">
				<div class="login-title"><a href="#"><img src="<?=$base_url?>/images/assets/logo_form.png" alt=""></a></div>
				<div class="login-desc">Cộng đồng Hỏi Đáp lớn nhất Việt Nam</div>
				<!-- <form action="#" method="POST"> -->
		            <?php
						$signup_form = ActiveForm::begin([
							'method' => 'post',
							'action' => ['/dang-ki'],
							'fieldConfig' => [
								'template' => "{input}",
								'options' => [
									'tag' => 'p',
								],
							],
							'options' => [
								'class' => 'form-register',
								'id' => 'form-register',
							],
						]);
					?>
					<legend>Đăng ký tài khoản</legend>
					<?php if(Yii::$app->session->hasFlash('error')): ?>
	                    <div class="alert alert-danger" role="alert">
	                        <?= Yii::$app->session->getFlash('error') ?>
	                    </div>
                	<?php endif; ?>
					<?= $signup_form->field($model,'fullname',[ 'template' => "{label}{input}{hint}{error} "])->textInput(['id' => 'fullname', 'class' => '']); ?>

					<?= $signup_form->field($model,'email',[ 'template' => "{label}{input}{hint}{error} "])->textInput(['id' => 'email', 'class' => '']); ?>

					<?= $signup_form->field($model,'password',[ 'template' => "{label}{input}{hint}{error} "])->passwordInput(['id' => 'password', 'class' => '', 'autocomplete' => 'off']); ?>	
					<!-- <p class="captcha">
						<img src="images/captcha.png" alt="">
					</p> -->

                    <script src='https://www.google.com/recaptcha/api.js?hl=en'></script>
                    <p
                    	class="g-recaptcha captcha"
                    	data-sitekey="<?=Yii::$app->params['google_sitekey']?>"
                    	data-callback='activeSubmitButton'
                    	></p>
					<input type="submit" value="Đăng ký">
				<!-- </form> -->
				<?php ActiveForm::end() ?>
				<a href="#" class="form-cancel">Hủy bỏ</a>
				<div class="orther-account">
					<p>Hoặc đăng nhập bằng tài khoản</p>
					<div class="account-fb"><a href="<?=$fb_login_url?>" id=""><i class="fa fa-facebook" aria-hidden="true"></i>Facebook</a></div>
					<div class="account-gg"><a href="<?=$gg_login_url?>"><i class="fa fa-google" aria-hidden="true"></i>Google</a></div>
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

