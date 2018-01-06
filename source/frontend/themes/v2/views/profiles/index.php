<?php
   use yii\helpers\Html;
   use yii\helpers\Url;
   use yii\widgets\ListView;
   use kop\y2sp\ScrollPager;
   use yii\web\View;
   use frontend\widget\WidgetProfilesUserActivity;
   $home_url = Yii::$app->HomeUrl;
   $base_url = $this->theme->baseUrl;
   use frontend\widget\WidgetProfilesCredential;
   use frontend\widget\WidgetUserV2HeaderInfo;
?>
<main id="main" class="site-main site-profie">
			<div class="container">
				<div class="m-menu-top">
					<ul>
						<li class="active"><a href="profile.html">Hồ sơ</a></li>
						<li><a href="stats.html">Thống kê</a></li>
						<li><a href="content.html">Nội dung của bạn</a></li>
						<li><a href="settings.html">Tài khoản</a></li>
						<li><a href="messages.html">Tin nhắn</a></li>
						<li><a href="privacy.html">Riêng tư</a></li>
						<li><a href="emal&notification.html">Email và thông báo</a></li>
						<li><a href="language.html">Ngôn ngữ</a></li>
						<li><a href="blogs.html">Blogs</a></li>
					</ul>
				</div>
				<div class="profile-wrapper">
					
					<?php 
					if(!Yii::$app->user->isGuest){	
					if($model->id == \Yii::$app->user->identity->id){?>
						<?=WidgetUserV2HeaderInfo::widget(["model"=>$model])?>
					<?php }else{?>
					<div class="pf-top">
						<div class="pf-avatar">
							<img src="<?php echo Html::encode($model->getAvatar()); ?>" 
							alt="<?=Html::encode($model->getUsername())?>">
						</div>
						<div class="pf-info">
							<h1><?=Html::encode($model->getUsername())?></h1>
							<a href="#" class="btn-accept followers">Theo dõi</a>
						</div>
					</div><!-- .pf-top -->	
					<?php } 
					} else {
					?>
					<div class="pf-top">
						<div class="pf-avatar">
							<img src="<?php echo Html::encode($model->getAvatar()); ?>" 
							alt="<?=Html::encode($model->getUsername())?>">
						</div>
						<div class="pf-info">
							<h1><?=Html::encode($model->getUsername())?></h1>
							<a href="#" class="btn-accept followers">Theo dõi</a>
						</div>
					</div><!-- .pf-top -->
					<?php } ?>
					
					<div class="pf-content">
						<div class="pf-left">
							<aside class="widget widget-question">
								<h3 class="widget-title"><i class="nc-icon-outline files_question"></i>Nguồn cấp dữ liệu</h3>
								<div class="widget-content">
									<ul>
										<li class="active"><a href="#">Trả lời<span>2</span></a></li>
										<li><a href="#">Câu hỏi<span>0</span></a></li>
										<li><a href="#">Hoạt động<span>0</span></a></li>
										<li><a href="#">Bài viết<span>0</span></a></li>
										<li><a href="#">Blogs<span>0</span></a></li>
										<li><a href="#">Người theo dõi<span>0</span></a></li>
										<li><a href="#">Đang theo dõi<span>0</span></a></li>
										<li><a href="#">Chủ đề<span>0</span></a></li>
										<li><a href="#">Chỉnh sửa<span>4</span></a></li>
									</ul>
								</div>
							</aside><!-- .widget-question -->
						</div><!-- .pf-left -->
						<div class="pf-right">
							<div class="list-answers">
								<div class="answers-title">
									<p>2 câu trả lời</p>
									<ul>
										<li class="active"><a href="#">Gần đây</a><span>/</span></li>
										<li><a href="#">Lượt xem 30 ngày</a></li>
									</ul>
								</div>
								<div class="m-profile">
									<aside class="widget widget-credentials">
										<h3 class="widget-title">Công việc & Học vấn<a href="#">Sửa</a></h3>
										<div class="widget-content">
											<ul>
												<li class="widget-employment"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i>Nhặt bóng tại Stamford Bridge</a></li>
												<li class="widget-education"><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Từng học Graphic Design tại FPT University</a></li>
												<li class="widget-location"><a href="#"><i class="nc-icon-mini location_pin"></i>Sống tại Vinh</a></li>
											</ul>
											<div class="popup-employment-bg"></div>
											<div class="popup-employment">
												<div class="employment-title">
													<h3>Chỉnh sửa thông tin đăng nhập</h3>
													<p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
												</div>
												<div class="item-credential item-employment">
													<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm thông tin việc làm</h3>
													<form action="#">
														<p>
															<label for="">Chức vụ</label>
															<input type="text" placeholder="Software Engineer">
														</p>
														<p>
															<label for="">Công ty / Tổ chức</label>
															<input type="text" placeholder="Software Engineer">
														</p>
														<p>
															<label for="">Năm bắt đầu</label>
															<select name="s" id="">
																<option value=""></option>
																<option value="">2017</option>
																<option value="">2016</option>
																<option value="">2015</option>
																<option value="">2014</option>
																<option value="">2013</option>
															</select>
														</p>
														<p>
															<label for="">Năm kết thúc</label>
															<select name="s" id="">
																<option value=""></option>
																<option value="">2017</option>
																<option value="">2016</option>
																<option value="">2015</option>
																<option value="">2014</option>
																<option value="">2013</option>
															</select>
														</p>
														<p>
															<label for="">Tôi hiện đang làm việc tại đây</label>
															<input type="checkbox">
														</p>
														<p class="credential-btn">
															<span class="btn">
																<a href="#" class="btn-cancel btn-widget-employment">Hủy</a>
																<a href="#" class="btn-accept">Lưu</a>
															</span>
														</p>
													</form>
												</div>
											</div>
											<div class="popup-education-bg"></div>
											<div class="popup-education">
												<div class="education-title">
													<h3>Chỉnh sửa thông tin đăng nhập</h3>
													<p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
												</div>
												<div class="item-credential item-education">
													<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm thông tin giáo dục</h3>
													<form action="#">
														<p>
															<label for="">Trường học</label>
															<input type="text">
														</p>
														<p>
															<label for="">Sự tập trung</label>
															<input type="text">
														</p>
														<p>
															<label for="">Nồng độ trung học</label>
															<input type="text">
														</p>
														<p>
															<label for="">Loại bằng cấp</label>
															<input type="text">
														</p>
														<p>
															<label for="">Năm tốt nghiệp</label>
															<select name="s" id="">
																<option value=""></option>
																<option value="">2017</option>
																<option value="">2016</option>
																<option value="">2015</option>
																<option value="">2014</option>
																<option value="">2013</option>
															</select>
														</p>
														<p class="credential-btn">
															<span class="btn">
																<a href="#" class="btn-cancel btn-widget-education">Hủy</a>
																<a href="#" class="btn-accept">Lưu</a>
															</span>
														</p>
													</form>
												</div>
											</div>
											<div class="popup-location-bg"></div>
											<div class="popup-location">
												<div class="location-title">
													<h3>Chỉnh sửa thông tin đăng nhập</h3>
													<p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
												</div>
												<div class="item-credential item-location">
													<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm chứng chỉ vị trí</h3>
													<form action="#">
														<p>
															<label for="">Địa điểm (yêu cầu)</label>
															<input type="text" placeholder="Địa điểm">
														</p>
														<p>
															<label for="">Năm bắt đầu</label>
															<select name="s" id="">
																<option value=""></option>
																<option value="">2017</option>
																<option value="">2016</option>
																<option value="">2015</option>
																<option value="">2014</option>
																<option value="">2013</option>
															</select>
														</p>
														<p>
															<label for="">Năm kết thúc</label>
															<select name="s" id="">
																<option value=""></option>
																<option value="">2017</option>
																<option value="">2016</option>
																<option value="">2015</option>
																<option value="">2014</option>
																<option value="">2013</option>
															</select>
														</p>
														<p>
															<label for="">Tôi hiện đang làm việc tại đây</label>
															<input type="checkbox">
														</p>
														<p class="credential-btn">
															<span class="btn">
																<a href="#" class="btn-cancel btn-widget-location">Hủy</a>
																<a href="#" class="btn-accept">Lưu</a>
															</span>
														</p>
													</form>
												</div>
											</div>
										</div>
									</aside><!-- .widget-question -->
								</div>
								
								<?php
									echo ListView::widget([
										'summary'=>'',
										'dataProvider' => $dataProvider,
										'itemOptions' => ['class' => 'item'],
										'itemView' => function ($model, $key, $index, $widget) {
											
											if(!empty($model->answer->answers_text)){
												return $this->render('_question_premium', ['model' => $model]);
											}
											else
											{
												return $this->render('_question_basic', ['model' => $model]);
											}
											// or just do some echo
											// return $model->title . ' posted by ' . $model->author;
										},
										'pager' => [
											'class' => ScrollPager::className(),
											'enabledExtensions' => [
												ScrollPager::EXTENSION_TRIGGER,
												ScrollPager::EXTENSION_SPINNER,
												ScrollPager::EXTENSION_NONE_LEFT,
												ScrollPager::EXTENSION_PAGING,
												//ScrollPager::EXTENSION_HISTORY
											],
											'triggerOffset' =>  20
										],
									]);
								?>
							</div>
						</div><!-- .pf-right -->
					</div><!-- .pf-content -->
				</div><!-- .profile-content -->
				<div class="profile-sidebar">
					<aside class="widget widget-credentials">
						<h3 class="widget-title">Công việc & Học vấn<a href="#">Sửa</a></h3>
						<div class="widget-content">
							<ul>
								<li class="widget-employment"><a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i>Nhặt bóng tại Stamford Bridge</a></li>
								<li class="widget-education"><a href="#"><i class="fa fa-graduation-cap" aria-hidden="true"></i>Từng học Graphic Design tại FPT University</a></li>
								<li class="widget-location"><a href="#"><i class="nc-icon-mini location_pin"></i>Sống tại Vinh</a></li>
							</ul>
							<div class="popup-employment-bg"></div>
							<div class="popup-employment">
								<div class="employment-title">
									<h3>Chỉnh sửa thông tin đăng nhập</h3>
									<p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
								</div>
								<div class="item-credential item-employment">
									<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm thông tin việc làm</h3>
									<form action="#">
										<p>
											<label for="">Chức vụ</label>
											<input type="text" placeholder="Software Engineer">
										</p>
										<p>
											<label for="">Công ty / Tổ chức</label>
											<input type="text" placeholder="Software Engineer">
										</p>
										<p>
											<label for="">Năm bắt đầu</label>
											<select name="s" id="">
												<option value=""></option>
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
												<option value="">2014</option>
												<option value="">2013</option>
											</select>
										</p>
										<p>
											<label for="">Năm kết thúc</label>
											<select name="s" id="">
												<option value=""></option>
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
												<option value="">2014</option>
												<option value="">2013</option>
											</select>
										</p>
										<p>
											<label for="">Tôi hiện đang làm việc tại đây</label>
											<input type="checkbox">
										</p>
										<p class="credential-btn">
											<span class="btn">
												<a href="#" class="btn-cancel btn-widget-employment">Hủy</a>
												<a href="#" class="btn-accept">Lưu</a>
											</span>
										</p>
									</form>
								</div>
							</div>
							<div class="popup-education-bg"></div>
							<div class="popup-education">
								<div class="education-title">
									<h3>Chỉnh sửa thông tin đăng nhập</h3>
									<p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
								</div>
								<div class="item-credential item-education">
									<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm thông tin giáo dục</h3>
									<form action="#">
										<p>
											<label for="">Trường học</label>
											<input type="text">
										</p>
										<p>
											<label for="">Sự tập trung</label>
											<input type="text">
										</p>
										<p>
											<label for="">Nồng độ trung học</label>
											<input type="text">
										</p>
										<p>
											<label for="">Loại bằng cấp</label>
											<input type="text">
										</p>
										<p>
											<label for="">Năm tốt nghiệp</label>
											<select name="s" id="">
												<option value=""></option>
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
												<option value="">2014</option>
												<option value="">2013</option>
											</select>
										</p>
										<p class="credential-btn">
											<span class="btn">
												<a href="#" class="btn-cancel btn-widget-education">Hủy</a>
												<a href="#" class="btn-accept">Lưu</a>
											</span>
										</p>
									</form>
								</div>
							</div>
							<div class="popup-location-bg"></div>
							<div class="popup-location">
								<div class="location-title">
									<h3>Chỉnh sửa thông tin đăng nhập</h3>
									<p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
								</div>
								<div class="item-credential item-location">
									<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm chứng chỉ vị trí</h3>
									<form action="#">
										<p>
											<label for="">Địa điểm (yêu cầu)</label>
											<input type="text" placeholder="Địa điểm">
										</p>
										<p>
											<label for="">Năm bắt đầu</label>
											<select name="s" id="">
												<option value=""></option>
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
												<option value="">2014</option>
												<option value="">2013</option>
											</select>
										</p>
										<p>
											<label for="">Năm kết thúc</label>
											<select name="s" id="">
												<option value=""></option>
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
												<option value="">2014</option>
												<option value="">2013</option>
											</select>
										</p>
										<p>
											<label for="">Tôi hiện đang làm việc tại đây</label>
											<input type="checkbox">
										</p>
										<p class="credential-btn">
											<span class="btn">
												<a href="#" class="btn-cancel btn-widget-location">Hủy</a>
												<a href="#" class="btn-accept">Lưu</a>
											</span>
										</p>
									</form>
								</div>
							</div>
						</div>
					</aside><!-- .widget-question -->
					<aside class="widget widget-credentials">
						<h3 class="widget-title">Chủ đề bạn biết<a href="#">Sửa</a></h3>
						<div class="widget-content">
							<div class="what-topic">
								<i class="nc-icon-mini ui-1_circle-add"></i>
								<p>Bạn biết những chủ đề nào?</p>
							</div>
							<div class="what-topic-bg"></div>
							<div class="what-topic-popup">
								<div class="popup-title">
									<h3>Edit Knows About Topics</h3>
									<p>Add and remove topics</p>
								</div>
								<div class="popup-content">
									<input type="text" placeholder="Bạn biết những chủ đề nào?">
								</div>
								<div class="popup-bottom">
									<div class="btn">
										<a href="#" class="btn-accept">Xong</a>
									</div>
								</div>
							</div>
						</div>
					</aside><!-- .widget-question -->
				</div><!-- .profile-sidebar -->
			</div><!-- .container -->
		</main><!-- .site-main -->
		
		