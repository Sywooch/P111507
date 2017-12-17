<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\widget\WidgetNavbar;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
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
	<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=dKazp1IWh910mh" style="display:none" height="1" width="1" alt="" /></noscript>
	<!-- End Alexa Certify Javascript -->  
	
	<!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/style-dev.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/responsive.css" />

    <!-- jQuery -->    
    <script type="text/javascript" src="<?=$base_url?>/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/js/popper.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/jscroll/jquery.jscroll.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/froala/js/froala_editor.js"></script>

    <!-- orther script -->
    <script  type="text/javascript" src="<?=$base_url?>/js/main.js"></script>
</head>

<body>
	<div id="wrapper">
		<header id="header" class="site-header">
			<div class="container">
				<div class="search-mobile">
					<div class="m-search-click"><i class="nc-icon-outline ui-1_zoom"></i>Search</div>
				</div>
				<div class="site-brand">
					<a href="index.html"><img src="<?=$base_url?>/images/assets/logo.png" alt=""></a>
				</div><!-- .site-brand -->
				<div class="search-form">
					<a href="#" class="search-back"><i class="nc-icon-outline arrows-1_minimal-left"></i></a>
					<form action="#" method="POST">
						<input type="text" value="" name="s" placeholder="Tìm kiếm...">
						<button type="submit" value=""><img src="<?=$base_url?>/images/assets/search-icon.png" alt=""></button>
					</form>
					<div class="suggest-search">
						<div class="suggest-title">
							<p><i class="nc-icon-outline ui-1_zoom"></i>Tìm kiếm cho:</p>
						</div>
						<ul>
							<li><a href="#"><img src="<?=$base_url?>/images/ava-comment.png" alt="">Tài khoản:<span>Andrew</span></a></li>
							<li><a href="#"><img src="<?=$base_url?>/images/ava-comment-02.png" alt="">Tài khoản:<span>Sói Ăn Chay</span></a></li>
							<li><a href="#"><img src="<?=$base_url?>/images/ava-comment-01.png" alt="">Chủ đề:<span>Âm nhạc</span></a></li>
							<li><a href="#"><img src="<?=$base_url?>/images/ava-comment.png" alt="">Câu hỏi:<span>Ăn kiêng cho người giảm béo</span></a></li>
						</ul>
						<div class="suggest-footer"><a href="#" class="today-ask"><i class="fa fa-plus-circle" aria-hidden="true"></i>Đặt câu hỏi</a></div>
					</div>
				</div><!-- .search-form -->

				<div class="header-right">
					<div class="question">
						<a href="#" class="today-ask"><i class="nc-icon-outline location_bookmark-add"></i>Đặt câu hỏi</a>
					</div><!-- .question -->
					<div class="notice">
						<a href="#"><span class="bell"><i class="fa fa-bell-o" aria-hidden="true"></i><span class="notice-number">5</span></span>Thông báo</a>
						<div class="notice-popup" tabindex="-1">
							<div class="np-title">
								<a class="np-views" href="notifications.html">Xem tất cả thông báo<i class="nc-icon-outline arrows-2_small-right"></i></a>
								<a class="np-check" href="#"><i class="nc-icon-outline ui-1_check-small"></i>Đánh dấu đã đọc</a>
							</div>
							<div class="np-content">
								<ul>
									<li>
										<img src="<?=$base_url?>/images/notice-popup.png" alt="">
										<div class="np-info">
											<p>Ken Phạm vừa trả lời câu hỏi: <a href="#">Xin địa chỉ homestay tại thành phố Đà Lạt?</a> của bạn - <span class="time">2 phút trước</span></p>
										</div>
									</li>
									<li>
										<img src="<?=$base_url?>/images/notice-popup.png" alt="">
										<div class="np-info">
											<p>Ken Phạm vừa trả lời câu hỏi: <a href="#">Xin địa chỉ homestay tại thành phố Đà Lạt?</a> của bạn - <span class="time">2 phút trước</span></p>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div><!-- .notice -->
					<div class="account">
						<a class="account-ava" href="#"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></a>
						<div class="account-popup" tabindex="-1">
							<ul>
								<li><a href="profile.html">Thông tin cá nhân</a></li>
								<li><a href="profile-blogs.html">Blogs</a></li>
								<li><a href="messages.html">Tin nhắn</a></li>
								<li><a href="content.html">Nội dung của bạn</a></li>
								<li><a href="stats.html">Thống kê</a></li>
								<li><a href="settings.html">Cài đặt</a></li>
								<li><a href="#">Đăng xuất</a></li>
							</ul>
						</div>
					</div><!-- .account -->
				</div><!-- .header-right -->
			</div><!-- .container -->
			<nav class="main-menu">
				<ul>
					<li class="active"><a href="index.html">Trang chủ</a></li>
					<li><a href="answer.html">Trả lời</a></li>
					<li><a href="notifications.html">Thông báo</a></li>
					<li><a href="profile.html">Hồ sơ</a></li>
				</ul>
			</nav><!-- .main-menu -->
		</header><!-- .site-header -->

		<?=$content?>

		<footer id="footer" class="site-footer">
			<div class="container">
				
			</div><!-- .container -->
		</footer><!-- site-footer -->
	</div><!-- #wrapper -->
</body>
</html>