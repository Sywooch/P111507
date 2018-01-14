<?php
	use yii\helpers\Html;
	use frontend\assets\AppAsset;
	use frontend\widget\WidgetNavbar;
	use yii\helpers\Url;
	use frontend\widget\WidgetCompleteRegister;

	/* @var $this yii\web\View */
	/* @var $content string */
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Quickrep.vn">
	<meta name="msvalidate.01" content="47C45FBF78303C8A8BF135873333B196" />
	<meta name="p:domain_verify" content="3d28a857bbf14ad385268927187f8a1d"/>
    <?php
        AppAsset::register($this);
        $theme = $this->theme;
        $base_url = $theme->baseUrl;
		$home_url = Yii::$app->homeUrl;
    ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	
	<!-- Start Alexa Certify Javascript -->
	<script type="text/javascript">
	_atrk_opts = { atrk_acct:"dKazp1IWh910mh", domain:"quickrep.vn",dynamic: true};
	(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
	</script>
	<!-- <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=dKazp1IWh910mh" style="display:none" height="1" width="1" alt="" /></noscript> -->
	<?= $this->render('fb-script') ?>
	<?= $this->render('tw-script') ?>
	<!-- End Alexa Certify Javascript -->  
	
	<!-- Style CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/style-dev.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/tooltipster.bundle.css" />
	<link href="<?=$base_url?>/css/jquery.qtip.css" rel="stylesheet" type="text/css">

    <!-- jQuery -->    
    <script type="text/javascript" src="<?=$base_url?>/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/js/popper.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/jscroll/jquery.jscroll.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/froala/js/froala_editor.js"></script>

    <!-- orther script -->
    <script  type="text/javascript" src="<?=$base_url?>/js/main.js"></script>
    <script  type="text/javascript" src="<?=$base_url?>/js/ajax.js"></script>
    <script  type="text/javascript" src="<?=$base_url?>/js/lodash.core.min.js"></script>
	<script type="text/javascript" src="<?=$base_url?>/js/tooltipster.bundle.js"></script>
</head>
<body>
	<?php $this->beginBody() ?>
	<div id="wrapper">
		<?= $this->render('header'); ?>
		<main id="main" class="site-main questions-details">
			<div class="container">
				<?= $content ?>
				<div class="sidebar-right">
					<div class="sidebar-fixed">
						<?php 
						// echo WidgetCompleteRegister::widget();
						 ?>
						<aside class="widget widget-question">
							<h3 class="widget-title"><i class="nc-icon-outline files_question"></i>Câu hỏi liên quan</h3>
							<div class="widget-content">
								<ul>
									<li class="active"><a href="#">Xin địa chỉ homestay tại thành phố Đà Lạt?</a></li>
									<li><a href="#">Xin địa chỉ trung tâm luyện thi IELTS đảm bảo, uy tín ở TP.HCM?</a></li>
									<li><a href="#">Perception và awareness khác nhau như thế nào ?</a></li>
									<li><a href="#">Xin địa điểm hẹn hò lãng mạn ở TP Hồ Chí Minh?</a></li>
									<li><a href="#">Xin địa điểm hẹn hò?</a></li>
								</ul>
							</div>
						</aside><!-- .widget-question -->
						<aside class="widget widget-question">
							<h3 class="widget-title"><i class="nc-icon-outline arrows-1_trend-up"></i>Thống kê câu hỏi</h3>
							<div class="widget-content">
								<ul>
									<li><a href="#" class="click-follow"><i class="nc-icon-mini users_multiple-19"></i>Người theo dõi công khai</a></li>
									<li><a href="#"><i class="nc-icon-mini ui-1_eye-19"></i>665 Lượt xem</a></li>
									<li><a href="#"><i class="nc-icon-mini arrows-1_refresh-69"></i>Được hỏi lần cuối</a></li>
									<li><a href="#"><i class="nc-icon-mini ui-2_menu-35"></i>Edits</a></li>
								</ul>
								<div class="public-follow-bg"></div>
								<div class="public-follow-popup">
									<div class="popup-title">
										<h3>2 Public Followers</h3>
									</div>
									<div class="popup-content">
										<ul>
											<li>
												<img src="<?=$base_url?>/images/ava-comment.png" alt="">
												<div class="public-follow-info">
													<h4><a href="#">Joy D</a></h4>
													<div class="public-follow-desc"><p>Học sinh</p></div>
												</div>
												<div class="follow">
													<a href="#" class="btn-follow btn-accept">Follow</a>
												</div>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</aside><!-- .widget-question -->
						<div class="sidebar-footer">
							<nav class="menu-footer">
								<ul>
									<li><a href="#">Liên hệ</a></li>
									<li><a href="#">Điểm</a></li>
									<li><a href="#">Về Quickrep</a></li>
									<li><a href="#">Bảo mật</a></li>
									<li><a href="#">Điều Khoản</a></li>
									<li><a href="#">Leaderboard</a></li>
									<li><a href="#">Chủ đề</a></li>
								</ul>
							</nav>
							<div class="copyright"><p>Copyright © 2017 by <a href="#">quickrep.vn</a></p></div>
						</div><!-- .sidebar-footer -->
					</div>
				</div><!-- .sidebar-right -->
			</div><!-- .container -->
		</main><!-- .site-main -->
		<footer id="footer" class="site-footer">
			<div class="container">
			</div><!-- .container -->
		</footer><!-- site-footer -->
	</div><!-- #wrapper -->
	<?= $this->render('popup-report') ?>
	<?php $this->endBody() ?>
	<script type="text/javascript">
       $.ajaxSetup({
          data: <?= \yii\helpers\Json::encode([
              \yii::$app->request->csrfParam => \yii::$app->request->csrfToken,
          ]) ?>
      });
    </script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
	<script  type="text/javascript" src="<?=$base_url?>/js/qtip-main.js"></script>
</body>
</html>