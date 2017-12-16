<?php 
    use yii\widgets\ActiveForm;
    use yii\web\View;
?>
<div class="row mw-form-login">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bg-white">
        <div class="form-main">
            <div class="form-content">
                <?php if(Yii::$app->session->hasFlash('error')): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= Yii::$app->session->getFlash('error') ?>
                    </div>
                <?php endif; ?>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12 border-right">
                        <div class="tab-content">
                            <div class="login-social tab-pane <?= !isset($error) || !$error === 'signup' ? 'fade in active' : '' ?>" id="tab-form-login">
                                <div class="social-google">
                                    <a href="<?=htmlspecialchars($gg_login_url)?>">Đăng nhập bằng Google</a>
                                </div>
                                <div class="social-facebook">
                                    <a href="<?=htmlspecialchars($fb_login_url)?>">Đăng nhập bằng Facebook</a>
                                </div>
                                <p class="font-size-13">
                                    <a href="#tab-form-register" data-toggle="tab" id="link-register">Đăng ký bằng Email.</a> 
									Bằng cách " Đăng ký " bạn cho biết rằng bạn đã đọc và hiểu và đồng ý với 
									<a href="javascript:;" class="text-gray">Điều khoản</a> và <a href="javascript:;" class="text-gray">Chính sách bảo mật</a>
									của chúng tôi.
                                </p>
                            </div>
                            <div class="login-social tab-pane <?= isset($error) && $error === 'signup' ? 'fade in active' : '' ?>" id="tab-form-register">
                                <?php 
                                    $signup_form = ActiveForm::begin([
                                        'method' => 'post',
                                        'action' => ['site/login'],   
                                        'fieldConfig' => [
                                        'template' => "{input}",
                                            'options' => [
                                                'tag'=>'div'
                                            ]
                                        ],
                                        'options' => [
                                            'class' => 'form-register',
                                            'id' => 'form-register',
                                        ]
                                    ]);
                                ?>
                                    <div class="form-group">
                                        <label for="email">Đăng Ký</label>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <label for="firstname-register" class="text-uppcase font-size-11">First Name</label>
                                                <?= $signup_form->field($signup_model,'firstname',[ 'template' => "{input}{hint}{error} "])->textInput(['id' => 'firstname', 'class' => 'form-control']); ?>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <label for="lastname-register" class="text-uppcase font-size-11">Last Name</label>
                                                <?= $signup_form->field($signup_model,'lastname',[ 'template' => "{input}{hint}{error} "])->textInput(['id' => 'lastname', 'class' => 'form-control']); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass-register" class="text-uppcase font-size-11">Email</label>
                                        <?= $signup_form->field($signup_model,'email',[ 'template' => "{input}{hint}{error} "])->textInput(['class' => 'form-control']); ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="pass-register" class="text-uppcase font-size-11">Password</label>
                                        <?= $signup_form->field($signup_model,'password',[ 'template' => "{input}{hint}{error} "])->passwordInput(['id' => 'password', 'class' => 'form-control']); ?>
                                    </div>
                                    <div class="form-group">
                                        <div class="captcha_container">
                                            <div class="CaptchaInput">
                                                <script src='https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>'></script>
                                                <div class="g-recaptcha" data-sitekey="<?=Yii::$app->params['google_sitekey']?>" data-callback='activeSubmitButton'></div>
                                              </div>
                                       </div>
                                    </div>
                                    <div class="form-group">
                                        <p class="font-size-13">
											Bằng cách " Đăng ký " bạn cho biết rằng bạn đã đọc và hiểu và đồng ý với 
											<a href="javascript:;" class="text-gray">Điều khoản</a> và <a href="javascript:;" class="text-gray">Chính sách bảo mật</a>
											của chúng tôi.
										</p>   
                                    </div>
                                    <div class="form-group pull-right">
                                        <a href="#tab-form-login" class="mg-right" data-toggle="tab">Cancel</a>
                                        <button type="submit" class="btn btn-default btn-login pull-right" value="signup" name="btn_signup">Đăng ký</button>    
                                    </div>
                                    <?php //var_dump($signup_model->getErrors())?>
                                <?php ActiveForm::end() ?>
                            </div>
                        </div>    
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12 hide_mobile">
                        <div class="submit-form-login">
                            <?php 
                                $form = ActiveForm::begin([
                                    'action' => ['site/login'],
                                    'method' => 'post',
                                    'options' => [
                                        'class' => 'form-login',
                                        'id' => 'form-login'
                                    ]
                                ]);
                            ?>
                                <div class="form-group">
                                    <label for="email">Đăng Nhập</label>
                                </div>
                                <div class="form-group">
                                    <?= $form->field($model,'email',[ 'template' => "{input}{hint}{error} "])->textInput(['class' => 'form-control', 'placeholder' => 'Email', 'id' => 'email']); ?>
                                </div>

                                <div class="form-group">
                                    <?= $form->field($model,'password',[ 'template' => "{input}{hint}{error} "])->passwordInput(['class' => 'form-control', 'placeholder' => 'Password', 'id' => 'pwd']); ?>
                                </div>
                                <div class="form-group">
                                    <a href="#" class="font-size-13 text-gray">Quên mật khẩu?</a>
                                    <button type="submit" name="btn_login" value="login" class="btn btn-default btn-login pull-right">Đăng nhập</button>    
                                </div>
                            <?php ActiveForm::end(); ?>
                        </div>
                    </div>
                </div>
            </div>
           <!-- <a href="#" class="signup-redirect-link">¿Buscas Quora en Español? <i class="fa fa-angle-right"></i></a>-->
            <div class="footer-form-login">
                <ul class="nav_list">
                    <li class="about"><a href="#">Về chúng tôi</a></li>
                    <li class="prizes"><a href="#">Giải thưởng</a></li>
                    <li class="careers"><a href="#">Tuyển dụng</a></li>
                    <li class="sitemap"><a href="#">Sitemap</a></li>
                    <li class="privacy"><a href="#">Chính sách bảo mật</a></li>
                    <li class="tos"><a href="#">Điều khoản sử dụng</a></li>
                    <li class="feedback"><a href="#">Liên hệ</a></li>
					<li>
						<a href="//www.dmca.com/Protection/Status.aspx?ID=457d41de-b121-4e96-8c3b-198873461d02" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120b.png?ID=457d41de-b121-4e96-8c3b-198873461d02" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script>
					</li>
                </ul>
            </div>
        </div>   
    </div>
</div>
