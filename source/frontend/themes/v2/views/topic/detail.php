<?php 
use yii\helpers\Url;
use yii\widgets\ListView;
use kop\y2sp\ScrollPager;
use yii\helpers\Html;
$theme = $this->theme;
$base_url = $theme->baseUrl;
$home_url = Yii::$app->homeUrl;
?>
<main id="main" class="site-main topic-child">
			<div class="container">
				<div class="topic">
					<div class="question-basic section">
						<h3 class="qb-title">
							<a href="#">
								<img src="<?=$model->getImages()?>" alt="<?=$model->title?>">
							</a>
							<a class="qb-title-info" href="#"><?=$model->title?></a>
						</h3>
						<div class="qb-desc"><p><?=$model->body?>.</p></div>
						<div class="qb-action">
							<div class="action-left">
								<ul>
									<li>
										<a href="#" class="follow-click">Theo dõi | <span>10</span></a>
										<a href="#" class="unfollow-click">Đang theo dõi | <span>10</span></a>
									</li>
									<!--
									<li>
										<a href="#" class="bookmark-click">Đánh dấu</a>
										<a href="#" class="unbookmark-click">Bỏ đánh dấu</a>
									</li>
									
									<li class="action-report">
										<a href="#">Báo cáo</a>
										<div class="report-bg"></div>
										<div class="report-popup">
											<div class="report-title">
												<h3>Báo cáo vi phạm</h3>
												<i class="nc-icon-outline ui-2_small-remove"></i>
											</div>
											<div class="report-content">
												<form action="#">
													<label for="r1">
														<input type="radio" name="report" id="r1">Nội dung này gây khó chịu hoặc không thú vị
													</label>
													<label for="r2">
														<input type="radio" name="report" id="r2">Tôi nghĩ nội dung này không nên xuất hiện trên Quickrep
													</label>
													<label for="r3">
														<input type="radio" name="report" id="r3">Quấy rối: Phân biệt hoặc đối nghịch với một người hoặc một nhóm
													</label>
													<label for="r4">
														<input type="radio" name="report" id="r4">Đó là nội dung spam
													</label>
												</form>
											</div>
											<div class="report-bottom">
												<div class="report-model">
													<a href="#" class="report-cancel">Hủy bỏ</a>
													<a href="#" class="report-send">Gửi báo cáo</a>
												</div>
											</div>
										</div>
									</li>
									-->
								</ul>
							</div>
							<div class="action-right">
								<ul>
									<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="qb-textarea">
							<textarea id="froala-editor"></textarea>
						</div>
					</div><!-- .question-basic -->
				</div>
				<div class="topic-bar">
					<ul>
						<li class="active"><a href="topic.html">Đọc</a></li>
						<li><a href="topic-question.html">Trả lời</a></li>
						<li><a href="topic-faq.html">FAQ</a></li>
					</ul>
				</div>
				<div class="main-content">
					<h3 class="widget-title">Tin tức</h3>
					<div class="question-form">
						<div class="ask-popup-bg"></div>
						<div class="ask-popup">
							<div class="m-ask-title"><a href="#" class="ask-popup-close"><i class="nc-icon-outline arrows-1_minimal-left"></i></a>Thêm một câu hỏi</div>
							<div class="ask-popup-content">
								<div class="ask-popup-close"><i class="nc-icon-mini ui-1_simple-remove"></i></div>
								<div class="hello-user">
									<a href="#"><img src="<?=$base_url?>/images/ava-user.png" alt=""></a>
									<span>Xin chào, <a href="#">Nguyễn Xuân Trường</a></span>
								</div>
								<textarea name="s" id="" placeholder="Câu hỏi của bạn là gì?"></textarea>
								<div class="source">
									<span><i class="nc-icon-outline ui-2_link-69"></i> Tùy chọn:</span>
									<input type="text" placeholder="Nhập đường dẫn">
								</div>
							</div>
							<div class="ask-bottom">
								<div class="ask-modal">
									<a href="#" class="ask-cancel">Hủy bỏ</a>
									<input type="checkbox" id="subscribeNews"><label for="subscribeNews">Đặt câu hỏi ẩn danh</label>
									<a href="#" class="ask-btn">Đặt câu hỏi</a>
								</div>
							</div>
						</div>
					</div><!-- .today-question -->
					
					<?php
						echo ListView::widget([
							'summary'=>'',
							'dataProvider' => $dataProvider,
							'itemOptions' => ['class' => 'item'],
							'itemView' => function ($model, $key, $index, $widget) {
								if(!empty($model->answer->answers_text)){
									return $this->render('_item_premium_view', ['model' => $model]);
								}
								else
								{
									return $this->render('_item_view', ['model' => $model]);
								}
							},
							'pager' => [
								'class' => ScrollPager::className(),
								'enabledExtensions' => [
									ScrollPager::EXTENSION_TRIGGER,
									ScrollPager::EXTENSION_SPINNER,
									ScrollPager::EXTENSION_NONE_LEFT,
									ScrollPager::EXTENSION_PAGING,
									ScrollPager::EXTENSION_HISTORY
								],
								'triggerOffset' =>  20,
								'eventOnRendered' => 'function(){
									do_qtip_profile();
								}'
							],
						]);
					?>
					
				</div><!-- .main-content -->
				<div class="sidebar-right">
					<div class="sidebar-fixed">
						<aside class="widget topic-count">
							<h3 class="widget-title">About</h3>
							<div class="tc-desc"><p>Chủ đề này đề cập đến khách sạn</p></div>
							<div class="tc-content">
								<ul>
									<li><a href="#">73.8k</a><span>Câu hỏi</span></li>
									<li><a href="#">509k</a><span>Lượt theo dõi</span></li>
									<li><a href="#">138</a><span>Chỉnh sửa</span></li>
								</ul>	
							</div>
						</aside><!-- .complete-register -->
						<aside class="widget widget-topic widget-related-topic">
							<h3 class="widget-title">Chủ đề liên quan</h3>
							<div class="widget-content">
								<ul class="wt-list wr-wt-list">
									<li>
										<img src="<?=$base_url?>/images/profile-cat.png" alt="">
										<div class="wtl-info">
											<a href="#" class="wtli-name">Âm nhạc</a>
											<div class="profile">
												<div class="profile-content">
													<div class="profile-title">
														<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
														<div class="profile-name"><a href="#">Âm nhạc</a></div>
													</div>
													<div class="profile-info">
														<p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
													</div>
												</div>
												<div class="profile-track">
													<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
													<a class="on-notice" href="#">Thêm vào yêu thích</a>
												</div>
											</div>
											<span>245 Người theo dõi</span>
										</div>
									</li>
									<li>
										<img src="<?=$base_url?>/images/profile-cat.png" alt="">
										<div class="wtl-info">
											<a href="#" class="wtli-name">Công nghệ</a>
											<div class="profile">
												<div class="profile-content">
													<div class="profile-title">
														<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
														<div class="profile-name"><a href="#">Công nghệ</a></div>
													</div>
													<div class="profile-info">
														<p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
													</div>
												</div>
												<div class="profile-track">
													<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
													<a class="on-notice" href="#">Thêm vào yêu thích</a>
												</div>
											</div>
											<span>245k Người theo dõi</span>
										</div>
									</li>
									<li>
										<img src="<?=$base_url?>/images/profile-cat.png" alt="">
										<div class="wtl-info">
											<a href="#" class="wtli-name">Du lịch</a>
											<div class="profile">
												<div class="profile-content">
													<div class="profile-title">
														<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
														<div class="profile-name"><a href="#">Du lịch</a></div>
													</div>
													<div class="profile-info">
														<p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
													</div>
												</div>
												<div class="profile-track">
													<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
													<a class="on-notice" href="#">Thêm vào yêu thích</a>
												</div>
											</div>
											<span>25k Người theo dõi</span>
										</div>
									</li>
									<li>
										<img src="<?=$base_url?>/images/profile-cat.png" alt="">
										<div class="wtl-info">
											<a href="#" class="wtli-name">Đời sống</a>
											<div class="profile">
												<div class="profile-content">
													<div class="profile-title">
														<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
														<div class="profile-name"><a href="#">Đời sống</a></div>
													</div>
													<div class="profile-info">
														<p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
													</div>
												</div>
												<div class="profile-track">
													<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
													<a class="on-notice" href="#">Thêm vào yêu thích</a>
												</div>
											</div>
											<span>24k Người theo dõi</span>
										</div>
									</li>
									<li>
										<img src="<?=$base_url?>/images/profile-cat.png" alt="">
										<div class="wtl-info">
											<a href="#" class="wtli-name">Giới tính</a>
											<div class="profile">
												<div class="profile-content">
													<div class="profile-title">
														<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
														<div class="profile-name"><a href="#">Giới tính</a></div>
													</div>
													<div class="profile-info">
														<p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
													</div>
												</div>
												<div class="profile-track">
													<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
													<a class="on-notice" href="#">Thêm vào yêu thích</a>
												</div>
											</div>
											<span>2k Người theo dõi</span>
										</div>
									</li>
									<li>
										<img src="<?=$base_url?>/images/profile-cat.png" alt="">
										<div class="wtl-info">
											<a href="#" class="wtli-name">Sức khỏe</a>
											<div class="profile">
												<div class="profile-content">
													<div class="profile-title">
														<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
														<div class="profile-name"><a href="#">Sức khỏe</a></div>
													</div>
													<div class="profile-info">
														<p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
													</div>
												</div>
												<div class="profile-track">
													<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
													<a class="on-notice" href="#">Thêm vào yêu thích</a>
												</div>
											</div>
											<span>5k Người theo dõi</span>
										</div>
									</li>
								</ul>
							</div>
						</aside><!-- .widget-topic -->
					</div>
				</div><!-- .sidebar-right -->
			</div><!-- .container -->
		</main><!-- .site-main -->