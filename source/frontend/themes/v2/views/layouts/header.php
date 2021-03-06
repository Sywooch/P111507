<?php
use yii\helpers\Url;
$theme = $this->theme;
$base_url = $theme->baseUrl;
$home_url = Yii::$app->homeUrl;
?>
<header id="header" class="site-header">
	<div class="container">
		<div class="search-mobile">
			<div class="m-search-click"><i class="nc-icon-outline ui-1_zoom"></i>Search</div>
		</div>
		<div class="site-brand">
			<a href="<?=$home_url?>"><img src="<?=$base_url?>/images/assets/logo.png" alt=""></a>
		</div><!-- .site-brand -->
		<div class="search-form">
			<a href="#" class="search-back"><i class="nc-icon-outline arrows-1_minimal-left"></i></a>
			<form >
				<input type="text" value="" name="s" class="main-search" placeholder="Tìm kiếm...">
				<button type="button" value="">
					<img src="<?=$base_url?>/images/assets/search-icon.png" alt="">
				</button>
			</form>
			<div class="suggest-search">
				
			</div>
		</div><!-- .search-form -->

		<?php if (cuser()) { ?>
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
				<a class="account-ava" href="<?=Url::to(["profiles/index","id"=>cuser()->id,"slug"=>cuser()->slug])?>">
					<img src="<?=cuser()->getAvatar();?>" alt="" class="img-header-avatar">
				</a>
				<div class="account-popup" tabindex="-1">
					<ul>
						<li>
							<a href="<?=Url::to(["profiles/index","id"=>cuser()->id,"slug"=>cuser()->slug])?>">
								Thông tin cá nhân
							</a>
						</li>
						<!-- <li><a href="profile-blogs.html">Blogs</a></li>
						<li><a href="messages.html">Tin nhắn</a></li>
						<li><a href="content.html">Nội dung của bạn</a></li>
						<li><a href="stats.html">Thống kê</a></li>
						<li><a href="settings.html">Cài đặt</a></li> -->
						<li><a href="/dang-xuat">Đăng xuất</a></li>
					</ul>
				</div>
			</div><!-- .account -->
		</div>
		<?php }else{ ?>
		<div class="header-right">
			<div class="question">
				<a href="#" class="today-ask">
					<i class="nc-icon-outline location_bookmark-add"></i>
					Đặt câu hỏi
				</a>
			</div><!-- .question -->
			<div class="account">
				<a class="account-ava" onclick="window.location='<?=Url::to(["site/login"])?>'" href="<?=Url::to(["site/login"])?>">Đăng nhập</a> 
				/ 
				<a class="account-ava" onclick="window.location='<?=Url::to(["site/signup"])?>'" href="<?=Url::to(["site/signup"])?>">Đăng ký</a>
			</div><!-- .account -->
		</div>	
		<?php }?>
		<!-- .header-right -->
	</div><!-- .container -->
	<nav class="main-menu">
		<ul>
			<li class="active">
				<a href="<?=$home_url?>">Trang chủ</a>
			</li>
			<li><a href="answer.html">Trả lời</a></li>
			<li><a href="notifications.html">Thông báo</a></li>
			<li><a href="profile.html">Hồ sơ</a></li>
		</ul>
	</nav><!-- .main-menu -->
</header>