<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\web\View;
    use frontend\widget\WidgetPeopleAnswers;
    use common\models\User;
    use yii\jui\Dialog;
    use frontend\widget\WidgetChooseTopics;
    use frontend\widget\WidgetTopicsKnow;
    use frontend\widget\WidgetUserStatus;
    use frontend\widget\WidgetFeeds;
    use frontend\widget\WidgetImprove;
    use yii\widgets\ListView;
    use kop\y2sp\ScrollPager;

    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    $url_set_follow_topics = Url::to(['/ajax/follow']);
?>
<main id="main" class="site-main">
			<div class="container">
				<div class="sidebar-left">
					<aside class="widget widget-question">
						<h3 class="widget-title"><i class="nc-icon-outline files_question"></i>Câu hỏi</h3>
						<div class="widget-content">
							<ul>
								<li class="active"><a href="questions.html">Tất cả câu hỏi</a></li>
								<li><a href="top-question.html">Theo dõi</a></li>
								<li><a href="#">Phổ biến</a></li>
								<li><a href="#">Chưa trả lời</a></li>
								<li><a href="bookmarked-answers.html">Đã trả lời</a></li>
							</ul>
						</div>
					</aside><!-- .widget-question -->
					<aside class="widget widget-topic">
						<h3 class="widget-title"><i class="nc-icon-outline ui-3_signal"></i>Chủ đề<a href="#" class="we-topic">Sửa</a></h3>
						<div class="widget-content">
							<ul class="wt-list">
								<li>
									<a href="#">Âm nhạc</a>
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
								</li>
								<li>
									<a href="#">Công nghệ</a>
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
								</li>
								<li>
									<a href="#">Du lịch</a>
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
								</li>
								<li>
									<a href="#">Đời sống</a>
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
								</li>
								<li>
									<a href="#">Giới tính</a>
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
								</li>
								<li>
									<a href="#">Sức khỏe</a>
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
								</li>
							</ul>
						</div>
						<div class="we-topic-popup" tabindex="-1">
							<div class="popup-title">
								<form class="wtp-form">
									<input type="text" placeholder="Tìm kiếm một chủ đề">
								</form>
							</div>
							<div class="popup-content">
								<div class="list-topic">
									<ul>
										<li>
											<a href="#">Âm nhạc <img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										</li>
										<li>
											<a href="#">Công nghệ <img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										</li>
										<li>
											<a href="#">Du lịch <img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										</li>
										<li>
											<a href="#">Đời sống <img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										</li>
										<li>
											<a href="#">Giới tính <img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										</li>
										<li>
											<a href="#">Sức khỏe <img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</aside><!-- .widget-topic -->
				</div><!-- .sidebar-left -->
				
				<div class="main-content scroll" data-ui="jscroll-default">
					<div class="m-menu-top">
						<ul>
							<li class="active"><a href="index.html">Tin tức</a></li>
							<li><a href="bookmarked-answers.html">Đánh dấu</a></li>
							<li><a href="questions.html">Câu hỏi mới</a></li>
						</ul>
					</div>
					<div class="m-complete-profile">
						<div class="mcp-process">
							<div class="m-process"><span></span></div>
							<div class="mp-close"><i class="nc-icon-outline ui-2_small-remove"></i></div>
						</div>
						<div class="m-process-content">
							<h3>Hoàn tất hồ sơ của bạn</h3>
							<p>Chia sẻ nơi bạn sống, làm việc hoặc nghiên cứu để tìm câu hỏi lớn và câu trả lời.</p>
						</div>
						<a href="#" class="m-process-btn">Bắt đầu</a>
					</div>
					<div class="m-credentials">
						<div class="m-popup-title">
							<i class="nc-icon-outline arrows-1_minimal-left"></i>
							<h3>Chỉnh sửa thông tin đăng nhập</h3>
							<a href="#" class="m-accept-popup">Xong</a>
						</div>
						<div class="m-popup-content">
							<a href="#" class="m-select-credential"><i class="nc-icon-outline ui-1_simple-add"></i>Thêm một thông tin</a>
							<div class="m-bg-credential"></div>
							<div class="m-add-credential">
								<ul>
									<li>
										<i class="nc-icon-outline ui-2_small-remove"></i>
										<p>Chọn một chủ đề</p>
									</li>
									<li class="m-employment-click">
										<a href="#">Việc làm</a>
									</li>
									<li class="m-education-click">
										<a href="#">Học vấn</a>
									</li>
									<li class="m-location-click">
										<a href="#">Địa điểm</a>
									</li>
									<li class="m-topic-click">
										<a href="#">Chủ đề</a>
									</li>
									<li class="m-language-click">
										<a href="#">Ngôn ngữ</a>
									</li>
								</ul>
							</div>
							<div class="m-employment m-choose-credential">
								<form action="#">
									<div class="field">
										<input type="text" placeholder="Địa chỉ">
									</div>
									<div class="field">
										<input type="text" placeholder="Công ty/tổ chức">
									</div>
									<div class="field field-label">
										<label for="sy">Năm bắt đầu</label>
										<div class="select-down">
											<select name="s" id="sy">
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
											</select>
										</div>
									</div>
									<div class="field field-label">
										<label for="ey">Năm kết thúc</label>
										<div class="select-down">
											<select name="s" id="ey">
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
											</select>
										</div>
									</div>
									<div class="field field-label">
										<label for="ea">Tôi hiện đang làm việc ở đây</label>
										<input type="checkbox" id="ea">
									</div>
								</form>
							</div>
							<div class="m-education m-choose-credential">
								<form action="#">
									<div class="field">
										<input type="text" placeholder="Trường học">
									</div>
									<div class="field">
										<input type="text" placeholder="Concentration">
									</div>
									<div class="field">
										<input type="text" placeholder="Secondary Concentration">
									</div>
									<div class="field">
										<input type="text" placeholder="Trình độ học vấn">
									</div>
									<div class="field field-label">
										<label for="gy">Năm tốt nghiệp</label>
										<div class="select-down">
											<select name="s" id="gy">
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
											</select>
										</div>
									</div>
								</form>
							</div>
							<div class="m-location m-choose-credential">
								<form action="#">
									<div class="field">
										<input type="text" placeholder="Vị trí">
									</div>
									<div class="field field-label">
										<label for="sy">Năm bắt đầu</label>
										<div class="select-down">
											<select name="s" id="sy">
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
											</select>
										</div>
									</div>
									<div class="field field-label">
										<label for="ey">Năm kết thúc</label>
										<div class="select-down">
											<select name="s" id="ey">
												<option value="">2017</option>
												<option value="">2016</option>
												<option value="">2015</option>
											</select>
										</div>
									</div>
									<div class="field field-label">
										<label for="ea">Tôi hiện đang làm việc ở đây</label>
										<input type="checkbox" id="ea">
									</div>
								</form>
							</div>
							<div class="m-topic m-choose-credential">
								<form action="#">
									<div class="field">
										<input type="text" placeholder="Chọn chủ đề">
									</div>
									<div class="field">
										<input type="text" placeholder="Mô tả một kinh nghiệm">
									</div>
								</form>
							</div>
							<div class="m-language m-choose-credential">
								<form action="#">
									<div class="field">
										<input type="text" placeholder="Chọn ngôn ngữ">
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="today-question section">
						<div class="hello-user">
							<a href="#"><img src="<?=$base_url?>/images/ava-user.png" alt=""></a>
							<span>Xin chào, <a href="#">Nguyễn Xuân Trường</a></span>
						</div>
						<a class="today-ask" href="#">Đặt câu hỏi ngay hôm nay!</a>
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
					<div class="question-basic section">
						<div class="qb-topic">
							<p>Câu hỏi<a class="qbt-hover" href="#">Sức khỏe</a></p>
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
						</div>
						<h3 class="qb-title"><a href="#">Hỏi cách xử lý mốc, rêu bám trên máy rửa mặt?</a></h3>
						<div class="qb-time"><span class="time-update">Cập nhật 21 giờ trước</span><a href="#">2 câu trả lời</a></div>
						<div class="qb-action">
							<div class="action-left">
								<ul>
									<li>
										<a href="#" class="textarea-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Trả lời</a>
									</li>
									<li><a href="#">Ẩn</a></li>
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
									<li class="action-follow"><a href="#">Theo dõi <span>2</span></a></li>
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
					
					<div class="question-premium section">
						<div class="qp-topic">
							<p>Câu trả lời<a href="#" class="qp-hover">Du lịch</a><a href="#">Chủ đề có thể bạn thích</a></p>
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
						</div>
						<h3 class="qp-title"><a href="#">Xin địa chỉ homestay tại thành phố Đà Lạt?</a></h3>
						<div class="qp-author">
							<a href="#" class="qp-ava"><img src="<?=$base_url?>/images/ava-qp.png" alt=""></a>
							<div class="author-info">
								<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
								<div class="profile">
									<div class="profile-content">
										<div class="profile-title">
											<a href="#"><img src="<?=$base_url?>/images/connect-ava-02.png" alt=""></a>
											<div class="profile-name"><a href="#">Sói Ăn Chay</a></div>
										</div>
										<div class="profile-info">
											<ul>
												<li><i class="fa fa-briefcase" aria-hidden="true"></i>Làm việc tại SpaceLab</li>
												<li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Từng học tại Đại học FPT</li>
												<li><i class="fa fa-home" aria-hidden="true"></i>Sống tại Vinh</li>
												<li><i class="fa fa-eye" aria-hidden="true"></i>57.8k lượt xem câu hỏi - 1.6k trong tháng này</li>
											</ul>
										</div>
									</div>
									<div class="profile-track">
										<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
										<a class="on-notice" href="#">Nhận thông báo</a>
									</div>
								</div>
								<p class="info-bottom">Được yêu thích bởi <a href="#">Nguyễn Xuân Trường</a>, Designer tại Riseup Agency</p>
							</div>
						</div>
						<div class="qp-content">
							<div class="qp-text">
								<p>Tất tần tật những Hostel, Homestay đẹp ở Đà Lạt cho các bạn mê khám phá, lánh xa trung tâm Đà Lạt để thưởng thức thiên nhiên trong lành nè! Nếu có dịp đi Đà Lạt thì phải tham khảo bài viết này nhé. Đa phần các hostel và homestay bạn phải đặt phòng trước 1 - 2 tháng để có chỗ ở ưng ý nhất nhé.</p>
								<p>Tại Beepub có tổng cộng hai dạng phòng cơ bản đó là phòng Dorm (phòng ngủ chung với nhiều người) và phòng đơn...<a href="#" class="qp-readmore">(Xem thêm)</a></p>
							</div>
							<div><p><a href="#" class="qp-readmore"><img src="<?=$base_url?>/images/qp-img.jpg" alt=""></a></p></div>
						</div>
						<div class="qp-full-content">
							<div class="qp-text">
								<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình.</p>
								<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè.</p>
								<h4>1. Cafe/ Nhà hàng trên cao</h4>
								<p>Nếu quá chán ngán với cảnh đông đúc nhộn nhịp của trung tâm Sài Gòn và muốn “chạy” xa khỏi cái không khí ấy, những quán cà phê trên tòa nhà chọc trời ở Sài Gòn quả là gợi ý đáng để thử phải không nào.</p>
								<img src="<?=$base_url?>/images/full-content.jpg" alt="">
								<p>Những quán cà phê này ở tít trên cao nên gió mát lồng lộng và không khí vô cùng thoáng mát, lại có thể ngắm toàn cảnh thành phố lung linh về đêm. Duy có điểm cần lưu ý là chi phí hò hẹn ở những nơi này khá là tốn kém (khoảng 500.000 VND trở lên). Ảnh: Chill Sky Bar</p>
								<h4>2. Rooftop Pool Bar</h4>
								<p>Bạn có bao giờ tưởng tượng đang nằm thong thả bên dòng nước mát lạnh, bên cạnh là ly nước yêu thích của mình không? Hay nhìn những người yêu thương đang nô đùa dưới nước, ta lại thưởng thức ly cafe bên hồ? Hoặc chỉ đơn giản là nhìn dòng nước chảy, yên tĩnh và khoáng đãng để ta có thể thả hồn theo dòng nước, cuốn đi mọi mệt mỏi, buồn phiền, suy tư của cuộc sống.</p>
								<h4>3. Nhà hàng/ cafe ven sông</h4>
								<p>Bạn có muốn thưởng thức những bữa tối lãng mạng bên bờ sông Sài Gòn? Hay chỉ đơn giản là ngắm hòang hôn trên sông bên ly cafe sữa đá quen thuộc? Hãy thử khám phá những địa điểm hẹn hò lãng mạng bên sông được khá nhiều người yêu thích ở sài Gòn.</p>
							</div>
						</div>
						<div class="qp-action">
							<div class="action-left">
								<ul>
									<li><a class="like-btn" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Yêu thích | <span class="like-number">16</span></a></li>
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
									<li class="action-follow"><a href="#">Theo dõi <span>1</span></a></li>
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
						<div class="comment-previews">
							<div class="comment-item">
								<img src="<?=$base_url?>/images/ava-comment-02.png" alt="">
								<div class="comment-info">
									<h4 class="comment-name">Sói Ăn Chay</h4>
									<div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
								</div>
							</div>
							<div class="more-comment">
								<p>3 more comments from Nguyễn Xuân Trường</p>
							</div>
						</div>
						<div class="qp-comment">
							<img src="<?=$base_url?>/images/ava-comment.png" alt="">
							<form action="#">
								<input type="text" placeholder="Viết bình luận của bạn...">
								<input type="submit" value="Bình luận">
							</form>
							<div class="comment-content">
								<div class="comment-item">
									<a href="#"><img src="<?=$base_url?>/images/ava-comment-01.png" alt=""></a>
									<div class="comment-info">
										<h4 class="comment-name"><a href="#">Nguyễn Xuân Trường</a></h4>
										<div class="comment-time"><span class="time">8 giờ trước</span><span class="like">6 yêu thích</span></div>
										<div class="comment-para"><p>Giữa sông nước mênh mông, Boat House nổi lên như một ốc đảo xinh đẹp, gần gũi với thiên nhiên. Nhà hàng tọa lạc ngay bên sông Sài Gòn trong khuôn viên khu biệt thự Thảo Điền, An Phú, là điểm hẹn hò lý tưởng cho những ai yêu thích cảnh sông nước, thiên nhiên.</p></div>
										<div class="comment-action">
											<ul>
												<li><a href="#" class="sub-reply-click">Trả lời</a></li>
												<li><a href="#">Yêu thích</a></li>
												<li><a href="#">Theo dõi</a></li>
												<li><a href="#">Báo cáo</a></li>
											</ul>
										</div>
										<div class="sub-reply-comment">
											<img src="<?=$base_url?>/images/ava-comment.png" alt="">
											<form action="#">
												<input type="text" placeholder="Viết bình luận của bạn...">
												<input type="submit" value="Bình luận">
											</form>
										</div>
									</div>
									<div class="sub-comment comment-content">
										<div class="comment-item">
											<a href="#"><img src="<?=$base_url?>/images/ava-comment-02.png" alt=""></a>
											<div class="comment-info">
												<h4 class="comment-name"><a href="#">Ken</a></h4>
												<div class="comment-time"><span class="time">1 giờ trước</span><span class="like">9 yêu thích</span></div>
												<div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
												<div class="comment-action">
													<ul>
														<li><a href="#" class="sub-reply-click">Trả lời</a></li>
														<li><a href="#">Yêu thích</a></li>
														<li><a href="#">Theo dõi</a></li>
														<li><a href="#">Báo cáo</a></li>
													</ul>
												</div>
												<div class="sub-reply-comment">
													<img src="<?=$base_url?>/images/ava-comment.png" alt="">
													<form action="#">
														<input type="text" placeholder="Viết bình luận của bạn...">
														<input type="submit" value="Bình luận">
													</form>
												</div>
											</div>
											<div class="sub-comment comment-content">
												<div class="comment-item">
													<a href="#"><img src="<?=$base_url?>/images/ava-comment-01.png" alt=""></a>
													<div class="comment-info">
														<h4 class="comment-name"><a href="#">Gấu</a></h4>
														<div class="comment-time"><span class="time">10 giờ trước</span><span class="like">15 yêu thích</span></div>
														<div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
														<div class="comment-action">
															<ul>
																<li><a href="#" class="sub-reply-click">Trả lời</a></li>
																<li><a href="#">Yêu thích</a></li>
																<li><a href="#">Theo dõi</a></li>
																<li><a href="#">Báo cáo</a></li>
															</ul>
														</div>
														<div class="sub-reply-comment">
															<img src="<?=$base_url?>/images/ava-comment.png" alt="">
															<form action="#">
																<input type="text" placeholder="Viết bình luận của bạn...">
																<input type="submit" value="Bình luận">
															</form>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="comment-item">
									<a href="#"><img src="<?=$base_url?>/images/ava-comment-02.png" alt=""></a>
									<div class="comment-info">
										<h4 class="comment-name"><a href="#">Sói Ăn Chay</a></h4>
										<div class="comment-time"><span class="time">12 giờ trước</span><span class="like">19 yêu thích</span></div>
										<div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
										<div class="comment-action">
											<ul>
												<li><a href="#" class="sub-reply-click">Trả lời</a></li>
												<li><a href="#">Yêu thích</a></li>
												<li><a href="#">Theo dõi</a></li>
												<li><a href="#">Báo cáo</a></li>
											</ul>
										</div>
										<div class="sub-reply-comment">
											<img src="<?=$base_url?>/images/ava-comment.png" alt="">
											<form action="#">
												<input type="text" placeholder="Viết bình luận của bạn...">
												<input type="submit" value="Bình luận">
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- .question-premium -->
					
					<div class="connect section">
						<p class="c-title"><i class="nc-icon-outline users_multiple-11"></i> Kết nối với mọi người</p>
						<div class="connect-slider-width">
							<div class="connect-slider owl-carousel">
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/connect-ava-01.png" alt=""></a>
									</div>
									<h3 class="connect-title">Ken is Gay</h3>
									<div class="connect-job">PHP Developer</div>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/connect-ava-02.png" alt=""></a>
									</div>
									<h3 class="connect-title">Gấu Đại Đế</h3>
									<div class="connect-job">UI/UX Designer</div>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/connect-ava-03.png" alt=""></a>
									</div>
									<h3 class="connect-title">Ken Mộng Mơ</h3>
									<div class="connect-job">Nhà thơ</div>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/connect-ava-04.png" alt=""></a>
									</div>
									<h3 class="connect-title">Sói Ăn Chay</h3>
									<div class="connect-job">PHP Developer</div>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/connect-ava-01.png" alt=""></a>
									</div>
									<h3 class="connect-title">Ken is Gay</h3>
									<div class="connect-job">PHP Developer</div>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
							</div>
						</div>
					</div><!-- .connect -->
					

					
					<div class="question-basic section">
						<div class="qb-topic">
							<p>Câu hỏi<a class="qbt-hover" href="#">Giáo dục</a></p>
							<div class="profile">
								<div class="profile-content">
									<div class="profile-title">
										<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										<div class="profile-name"><a href="#">Giáo dục</a></div>
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
						</div>
						<h3 class="qb-title"><a href="#">Xin địa chỉ trung tâm luyện thi IELTS đảm bảo, uy tín ở TP.HCM?</a></h3>
						<div class="qb-time"><span class="time-update">Cập nhật 21 giờ trước</span><a href="#">2 câu trả lời</a></div>
						<div class="qb-action">
							<div class="action-left">
								<ul>
									<li><a href="#" class="textarea-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Trả lời</a></li>
									<li><a href="#">Ẩn</a></li>
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
									<li class="action-follow"><a href="#">Theo dõi <span>2</span></a></li>
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
					<div class="question-basic section">
						<div class="qb-topic">
							<p>Câu hỏi<a class="qbt-hover" href="#">Ngoại ngữ</a></p>
							<div class="profile">
								<div class="profile-content">
									<div class="profile-title">
										<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										<div class="profile-name"><a href="#">Ngoại ngữ</a></div>
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
						</div>
						<h3 class="qb-title"><a href="#">Perception và awareness khác nhau như thế nào ?</a></h3>
						<div class="qb-time"><span class="time-update">Cập nhật 21 giờ trước</span><a href="#">2 câu trả lời</a></div>
						<div class="qb-action">
							<div class="action-left">
								<ul>
									<li><a href="#" class="textarea-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Trả lời</a></li>
									<li><a href="#">Ẩn</a></li>
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
									<li class="action-follow"><a href="#">Theo dõi <span>0</span></a></li>
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
					<div class="question-premium section">
						<div class="qp-topic">
							<p>Câu trả lời<a href="#" class="qp-hover">Du lịch</a><a href="#">Chủ đề có thể bạn thích</a></p>
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
						</div>
						<h3 class="qp-title"><a href="#">Xin địa điểm hẹn hò lãng mạn ở TP Hồ Chí Minh?</a></h3>
						<div class="qp-author">
							<a href="#" class="qp-ava"><img src="<?=$base_url?>/images/ava-qp.png" alt=""></a>
							<div class="author-info">
								<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
								<div class="profile">
									<div class="profile-content">
										<div class="profile-title">
											<a href="#"><img src="<?=$base_url?>/images/connect-ava-02.png" alt=""></a>
											<div class="profile-name"><a href="#">Sói Ăn Chay</a></div>
										</div>
										<div class="profile-info">
											<ul>
												<li><i class="fa fa-briefcase" aria-hidden="true"></i>Làm việc tại SpaceLab</li>
												<li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Từng học tại Đại học FPT</li>
												<li><i class="fa fa-home" aria-hidden="true"></i>Sống tại Vinh</li>
												<li><i class="fa fa-eye" aria-hidden="true"></i>57.8k lượt xem câu hỏi - 1.6k trong tháng này</li>
											</ul>
										</div>
									</div>
									<div class="profile-track">
										<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
										<a class="on-notice" href="#">Nhận thông báo</a>
									</div>
								</div>
								<p class="info-bottom">Được yêu thích bởi <a href="#">Nguyễn Xuân Trường</a>, Designer tại Riseup Agency</p>
							</div>
						</div>
						<div class="qp-content">
							<div class="qp-text">
								<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình. </p>
								<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè...<a href="#" class="qp-readmore">(Xem thêm)</a></p>
							</div>
							<div><p><a href="#" class="qp-readmore"><img src="<?=$base_url?>/images/qp-img-01.jpg" alt=""></a></p></div>
						</div>
						<div class="qp-full-content">
							<div class="qp-text">
								<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình.</p>
								<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè.</p>
								<h4>1. Cafe/ Nhà hàng trên cao</h4>
								<p>Nếu quá chán ngán với cảnh đông đúc nhộn nhịp của trung tâm Sài Gòn và muốn “chạy” xa khỏi cái không khí ấy, những quán cà phê trên tòa nhà chọc trời ở Sài Gòn quả là gợi ý đáng để thử phải không nào.</p>
								<img src="<?=$base_url?>/images/full-content.jpg" alt="">
								<p>Những quán cà phê này ở tít trên cao nên gió mát lồng lộng và không khí vô cùng thoáng mát, lại có thể ngắm toàn cảnh thành phố lung linh về đêm. Duy có điểm cần lưu ý là chi phí hò hẹn ở những nơi này khá là tốn kém (khoảng 500.000 VND trở lên). Ảnh: Chill Sky Bar</p>
								<h4>2. Rooftop Pool Bar</h4>
								<p>Bạn có bao giờ tưởng tượng đang nằm thong thả bên dòng nước mát lạnh, bên cạnh là ly nước yêu thích của mình không? Hay nhìn những người yêu thương đang nô đùa dưới nước, ta lại thưởng thức ly cafe bên hồ? Hoặc chỉ đơn giản là nhìn dòng nước chảy, yên tĩnh và khoáng đãng để ta có thể thả hồn theo dòng nước, cuốn đi mọi mệt mỏi, buồn phiền, suy tư của cuộc sống.</p>
								<h4>3. Nhà hàng/ cafe ven sông</h4>
								<p>Bạn có muốn thưởng thức những bữa tối lãng mạng bên bờ sông Sài Gòn? Hay chỉ đơn giản là ngắm hòang hôn trên sông bên ly cafe sữa đá quen thuộc? Hãy thử khám phá những địa điểm hẹn hò lãng mạng bên sông được khá nhiều người yêu thích ở sài Gòn.</p>
							</div>
						</div>
						<div class="qp-action">
							<div class="action-left">
								<ul>
									<li><a class="like-btn" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Yêu thích | <span class="like-number">16</span></a></li>
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
									<li class="action-follow"><a href="#">Theo dõi <span>7</span></a></li>
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
						<div class="qp-comment">
							<img src="<?=$base_url?>/images/ava-comment.png" alt="">
							<form action="#">
								<input type="text" placeholder="Viết bình luận của bạn...">
								<input type="submit" value="Bình luận">
							</form>
						</div>
					</div><!-- .question-premium -->
					<div class="connect section explore">
						<p class="c-title"><i class="nc-icon-outline users-2_voice-record"></i> Khám phá chủ đề mới</p>
						<div class="connect-slider-width">
							<div class="connect-slider owl-carousel">
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/explore-01.png" alt=""></a>
									</div>
									<h3 class="connect-title">APEC 2017</h3>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/explore-02.png" alt=""></a>
									</div>
									<h3 class="connect-title">Du lịch bụi</h3>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/explore-03.png" alt=""></a>
									</div>
									<h3 class="connect-title">Săn vé máy bay</h3>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/explore-04.png" alt=""></a>
									</div>
									<h3 class="connect-title">Giới tính thứ 3</h3>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
								<div class="connect-item">
									<div class="connect-avatar">
										<a href="#"><img src="<?=$base_url?>/images/explore-01.png" alt=""></a>
									</div>
									<h3 class="connect-title">APEC 2017</h3>
									<div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 162</a></div>
									<div class="connect-track-people">Theo dõi bởi <a href="#">soianchay</a></div>
								</div>
							</div>
						</div>
					</div><!-- .connect -->
					<div class="question-basic section">
						<div class="qb-topic">
							<p>Câu hỏi<a class="qbt-hover" href="#">Sức khỏe</a></p>
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
						</div>
						<h3 class="qb-title"><a href="#">Hỏi cách xử lý mốc, rêu bám trên máy rửa mặt?</a></h3>
						<div class="qb-time"><span class="time-update">Cập nhật 21 giờ trước</span><a href="#">2 câu trả lời</a></div>
						<div class="qb-action">
							<div class="action-left">
								<ul>
									<li><a href="#" class="textarea-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Trả lời</a></li>
									<li><a href="#">Ẩn</a></li>
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
									<li class="action-follow"><a href="#">Theo dõi <span>12</span></a></li>
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
					<div class="question-basic section">
						<div class="qb-topic">
							<p>Câu hỏi<a class="qbt-hover" href="#">Giáo dục</a></p>
							<div class="profile">
								<div class="profile-content">
									<div class="profile-title">
										<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
										<div class="profile-name"><a href="#">Giáo dục</a></div>
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
						</div>
						<h3 class="qb-title"><a href="#">Xin địa chỉ trung tâm luyện thi IELTS đảm bảo, uy tín ở TP.HCM?</a></h3>
						<div class="qb-time"><span class="time-update">Cập nhật 21 giờ trước</span><a href="#">2 câu trả lời</a></div>
						<div class="qb-action">
							<div class="action-left">
								<ul>
									<li><a href="#" class="textarea-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Trả lời</a></li>
									<li><a href="#">Ẩn</a></li>
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
									<li class="action-follow"><a href="#">Theo dõi <span>0</span></a></li>
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
				</div><!-- .main-content -->
				<div class="sidebar-right">
					<div class="sidebar-fixed">
						<div class="complete-register">
							<h3>Hoàn tất đăng ký</h3>
							<div class="complete-content">
								<ul>
									<li class="active check-topic"><a href="#">Theo dõi 8 chủ đề mà bạn quan tâm.</a></li>
									<li class="active"><a href="#">Thích một câu trả lời mà bạn ưng ý.</a></li>
									<li class="active"><a href="#">Hãy đặt một câu hỏi đầu tiên của bạn.</a></li>
									<li class="active"><a href="#">Vui lòng cung cấp thêm thông tin về bạn.</a></li>
									<li><a href="#">Trả lời một câu hỏi trong lĩnh vực của bạn.</a></li>
								</ul>	
							</div>
						</div><!-- .complete-register -->
						<div class="sidebar-footer">
							<nav class="menu-footer">
								<ul>
									<li><a href="#">Liên hệ</a></li>
									<li><a href="#">Điểm</a></li>
									<li><a href="#">Về Quickrep</a></li>
									<li><a href="#">Bảo mật</a></li>
									<li><a href="about.html">Điều Khoản</a></li>
									<li><a href="#">Leaderboard</a></li>
									<li><a href="#">Chủ đề</a></li>
								</ul>
							</nav>
							<div class="copyright"><p>Copyright © 2017 by <a href="#">quickrep.vn</a></p></div>
						</div><!-- .sidebar-footer -->
					</div>
					<div class="process">
						<div class="container">
							<div class="site-brand">
								<a href="#"><img src="<?=$base_url?>/images/assets/logo.png" alt=""></a>
							</div>
							<div class="process-bar">
								<p>Bắt đầu</p>
								<p class="bar"><span class="percent"></span></p>
								<p>Kết thúc</p>
							</div>
						</div>
					</div>
					<div class="topic-bg"></div>
					<div class="topic-popup">
						<div class="topic-title">Lựa chọn chủ đề yêu thích của bạn</div>
						<div class="topic-content">
							<ul>
								<li>
									<input id="tc1" type="checkbox">
									<label for="tc1">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc2" type="checkbox">
									<label for="tc2">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc3" type="checkbox">
									<label for="tc3">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc4" type="checkbox">
									<label for="tc4">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc5" type="checkbox">
									<label for="tc5">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc6" type="checkbox">
									<label for="tc6">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc7" type="checkbox">
									<label for="tc7">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc8" type="checkbox">
									<label for="tc8">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc9" type="checkbox">
									<label for="tc9">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc10" type="checkbox">
									<label for="tc10">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc11" type="checkbox">
									<label for="tc11">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc12" type="checkbox">
									<label for="tc12">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc13" type="checkbox">
									<label for="tc13">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc14" type="checkbox">
									<label for="tc14">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc15" type="checkbox">
									<label for="tc15">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc16" type="checkbox">
									<label for="tc16">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc17" type="checkbox">
									<label for="tc17">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
								<li>
									<input id="tc18" type="checkbox">
									<label for="tc18">
									<img src="<?=$base_url?>/images/check-topic.jpg" alt="">
									<h4>Công nghệ</h4>
									</label>
								</li>
							</ul>
						</div>
						<a href="#" class="topic-btn">Lựa chọn 9 chủ đề nữa và tiếp tục</a>
					</div>
				</div><!-- .sidebar-right -->
			</div><!-- .container -->
		</main><!-- .site-main -->