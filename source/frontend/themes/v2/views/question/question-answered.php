<?php 
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
    use yii\helpers\Url;
    use common\models\Comments;
    use frontend\widget\WidgetFormComment;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
?>
<div class="main-content">
	<div class="question-form">
		<div class="ask-popup-bg"></div>
		<div class="ask-popup">
			<div class="m-ask-title"><a href="#" class="ask-popup-close"><i class="nc-icon-outline arrows-1_minimal-left"></i></a>Thêm một câu hỏi</div>
			<div class="ask-popup-content">
				<div class="ask-popup-close"><i class="nc-icon-mini ui-1_simple-remove"></i></div>
				<div class="hello-user">
					<a href="#"><img src="images/ava-user.png" alt=""></a>
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
			<ul class="wt-list qd-wt-list">
				<li>
					<a href="#">Âm nhạc</a>
					<div class="profile">
						<div class="profile-content">
							<div class="profile-title">
								<a href="#"><img src="images/profile-cat.png" alt=""></a>
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
								<a href="#"><img src="images/profile-cat.png" alt=""></a>
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
								<a href="#"><img src="images/profile-cat.png" alt=""></a>
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
								<a href="#"><img src="images/profile-cat.png" alt=""></a>
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
								<a href="#"><img src="images/profile-cat.png" alt=""></a>
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
								<a href="#"><img src="images/profile-cat.png" alt=""></a>
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
				<li>
					<a href="#" class="choose-topic"><i class="nc-icon-mini design_pen-01"></i></a>
				</li>
			</ul>
			<div class="choose-topic-bg"></div>
			<div class="choose-topic-popup">
				<div class="ct-popup-close"><i class="nc-icon-mini ui-1_simple-remove"></i></div>
				<div class="popup-title">
					<h3>Chỉnh sửa chủ đề</h3>
					<p>Các chủ đề được sử dụng để tìm các chuyên gia giỏi nhất để trả lời câu hỏi.</p>
				</div>
				<div class="popup-content">
					<form action="#">
						<input type="text" placeholder="Chọn chủ đề">
					</form>
					<ul class="list-choose-topic">
						<li><a href="#"><i class="nc-icon-mini ui-1_simple-remove"></i></a><span>Sức khỏe</span></li>
						<li><a href="#"><i class="nc-icon-mini ui-1_simple-remove"></i></a><span>Du lịch</span></li>
						<li><a href="#"><i class="nc-icon-mini ui-1_simple-remove"></i></a><span>Công nghệ</span></li>
					</ul>
				</div>
				<div class="popup-bottom">
					<div class="btn">
						<a href="#" class="btn-accept">Xong</a>
					</div>
				</div>
			</div>
			<div class="profile">
				<div class="profile-content">
					<div class="profile-title">
						<a href="#"><img src="images/profile-cat.png" alt=""></a>
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
		<h3 class="qb-title"><a href="#"><?=Html::encode($model->title)?></a></h3>
		<div class="qb-time"><span class="time-update">Cập nhật 21 giờ trước</span><a href="#">2 câu trả lời</a></div>
		<div class="qb-action">
			<div class="action-left">
				<ul>
					<li><a href="#" class="textarea-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Trả lời</a></li>
					<li class="request">
						<a href="#" class="request-click">Yêu cầu</a>
					</li>
					<li><a href="#">Theo dõi <span class="count-number">3</span></a></li>
					<li><a href="#" class="comment-click">Bình luận <span class="count-number">4</span></a></li>
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
		<div class="qb-request">
			<h3 class="qb-request-title">Yêu cầu trả lời</h3>
			<div class="request-item">
				<img src="images/account-avatar.png" alt="">
				<div class="request-info">
					<h3>Yêu cầu từ Quickrep</h3>
					<p>Chúng tôi sẽ phân phối các câu hỏi này đến các nhà văn, và thông báo cho bạn về câu trả lời mới.</p>
				</div>
				<div class="unrequest-info">
					<h3>Đang yêu cầu từ Quickrep</h3>
					<p>Chúng tôi thấy các nhà văn để trả lời, và sẽ thông báo cho bạn về câu trả lời mới.</p>
				</div>
				<a href="#" class="ar-btn ar-click"><i class="nc-icon-outline ui-1_simple-add"></i></a>
				<a href="#" class="ar-btn ar-back-click"><i class="nc-icon-outline arrows-1_curved-previous"></i></a>
			</div>
			<ul class="request-list">
				<li>
					<div class="r-item">
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
								<div class="profile">
									<div class="profile-content">
										<div class="profile-title">
											<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
								<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
									<div class="profile-request">
										<div class="profile-content">
											<div class="profile-title">
												<a href="#"><img src="images/profile-cat.png" alt=""></a>
												<div class="profile-name"><a href="#">Khách sạn</a></div>
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
							</div>
						</div>
					</div>
					<div class="ur-item">
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
								<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
							</div>
						</div>
					</div>
					<a href="#" class="ar-btn ar-click"><i class="nc-icon-outline ui-1_simple-add"></i></a>
					<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
				</li>
				<li>
					<div class="r-item">
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
								<div class="profile">
									<div class="profile-content">
										<div class="profile-title">
											<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
								<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
									<div class="profile-request">
										<div class="profile-content">
											<div class="profile-title">
												<a href="#"><img src="images/profile-cat.png" alt=""></a>
												<div class="profile-name"><a href="#">Khách sạn</a></div>
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
							</div>
						</div>
					</div>
					<div class="ur-item">
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
								<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
							</div>
						</div>
					</div>
					<a href="#" class="ar-btn ar-click"><i class="nc-icon-outline ui-1_simple-add"></i></a>
					<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
				</li>
				<li>
					<div class="r-item">
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
								<div class="profile">
									<div class="profile-content">
										<div class="profile-title">
											<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
								<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
									<div class="profile-request">
										<div class="profile-content">
											<div class="profile-title">
												<a href="#"><img src="images/profile-cat.png" alt=""></a>
												<div class="profile-name"><a href="#">Khách sạn</a></div>
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
							</div>
						</div>
					</div>
					<div class="ur-item">
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
								<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
							</div>
						</div>
					</div>
					<a href="#" class="ar-btn ar-click"><i class="nc-icon-outline ui-1_simple-add"></i></a>
					<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
				</li>
			</ul>
			<div class="request-more">
				<ul class="request-thumb">
					<li>
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<div class="profile">
									<div class="profile-content">
										<div class="profile-title">
											<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
							</div>
						</div>
					</li>
					<li>
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<div class="profile">
									<div class="profile-content">
										<div class="profile-title">
											<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
							</div>
						</div>
					</li>
					<li>
						<div class="qp-author">
							<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
							<div class="author-info">
								<div class="profile">
									<div class="profile-content">
										<div class="profile-title">
											<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
							</div>
						</div>
					</li>
				</ul>
				<a href="#" class="request-view">Xem nhiều hơn hoặc tìm kiếm</a>
				<div class="request-popup-bg"></div>
				<div class="request-popup">
					<div class="popup-title">
						<h3><span class="unrequest-review">Yêu cầu trả lời </span><span class="request-review">(3/15 Yêu cầu)</span></h3>
					</div>
					<div class="request-review-content">
						<ul class="request-list">
							<li>
								<div class="ur-item">
									<div class="qp-author">
										<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
										<div class="author-info">
											<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
											<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
										</div>
									</div>
								</div>
								<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
							</li>
							<li>
								<div class="ur-item">
									<div class="qp-author">
										<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
										<div class="author-info">
											<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
											<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
										</div>
									</div>
								</div>
								<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
							</li>
							<li>
								<div class="ur-item">
									<div class="qp-author">
										<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
										<div class="author-info">
											<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
											<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
										</div>
									</div>
								</div>
								<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
							</li>
						</ul>
					</div>
					<div class="popup-content">
						<form action="#">
							<input type="text" placeholder="Tìm kiếm">
							<button><i class="nc-icon-outline ui-1_zoom"></i></button>
						</form>
						<div class="request-popup-content">
							<div class="left">
								<div class="title">
									<h4>Chủ đề</h4>
									<a href="#" class="pre-click"><span class="pre-click-edit">Sửa</span><span class="pre-click-done">Xong</span></a>
								</div>
								<ul>
									<li class="active"><a href="#">Tất cả</a></li>
									<li><a href="#">Du lịch</a><span class="r-remove"><i class="nc-icon-outline ui-2_small-remove"></i></span></li>
									<li><a href="#">Sức khỏe</a><span class="r-remove"><i class="nc-icon-outline ui-2_small-remove"></i></span></li>
								</ul>
								<form action="#">
									<input type="text" placeholder="Chọn chủ đề">
								</form>
							</div>
							<div class="right">
								<ul class="request-list">
									<li>
										<div class="r-item">
											<div class="qp-author">
												<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
												<div class="author-info">
													<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
													<div class="profile">
														<div class="profile-content">
															<div class="profile-title">
																<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
													<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
														<div class="profile-request">
															<div class="profile-content">
																<div class="profile-title">
																	<a href="#"><img src="images/profile-cat.png" alt=""></a>
																	<div class="profile-name"><a href="#">Khách sạn</a></div>
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
												</div>
											</div>
										</div>
										<div class="ur-item">
											<div class="qp-author">
												<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
												<div class="author-info">
													<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
													<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
												</div>
											</div>
										</div>
										<a href="#" class="ar-btn ar-click"><i class="nc-icon-outline ui-1_simple-add"></i></a>
										<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
									</li>
									<li>
										<div class="r-item">
											<div class="qp-author">
												<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
												<div class="author-info">
													<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
													<div class="profile">
														<div class="profile-content">
															<div class="profile-title">
																<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
													<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
														<div class="profile-request">
															<div class="profile-content">
																<div class="profile-title">
																	<a href="#"><img src="images/profile-cat.png" alt=""></a>
																	<div class="profile-name"><a href="#">Khách sạn</a></div>
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
												</div>
											</div>
										</div>
										<div class="ur-item">
											<div class="qp-author">
												<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
												<div class="author-info">
													<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
													<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
												</div>
											</div>
										</div>
										<a href="#" class="ar-btn ar-click"><i class="nc-icon-outline ui-1_simple-add"></i></a>
										<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
									</li>
									<li>
										<div class="r-item">
											<div class="qp-author">
												<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
												<div class="author-info">
													<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
													<div class="profile">
														<div class="profile-content">
															<div class="profile-title">
																<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
													<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
														<div class="profile-request">
															<div class="profile-content">
																<div class="profile-title">
																	<a href="#"><img src="images/profile-cat.png" alt=""></a>
																	<div class="profile-name"><a href="#">Khách sạn</a></div>
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
												</div>
											</div>
										</div>
										<div class="ur-item">
											<div class="qp-author">
												<div class="qp-ava"><img src="images/account-avatar.png" alt=""></div>
												<div class="author-info">
													<p class="info-top">Câu trả lời được yêu cầu từ <a href="#">soianchay</a></p>
													<div class="info-bottom"><p>Chúng tôi sẽ thông báo cho bạn khi họ trả lời.</p></div>
												</div>
											</div>
										</div>
										<a href="#" class="ar-btn ar-click"><i class="nc-icon-outline ui-1_simple-add"></i></a>
										<a href="#" class="ar-btn ar-un-click"><i class="nc-icon-outline ui-1_check"></i></a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="qb-textarea">
			<textarea id="froala-editor"></textarea>
		</div>
		<div class="qp-comment qd-qp-comment">
			<?= WidgetFormComment::widget([
					'id' => $model->id,
					'type' => Comments::TYPE_QUESTIONS,
					'parent_id' => null
				]); ?>
			<!-- <img src="images/ava-comment.png" alt="">
			<form action="#">
				<input type="text" placeholder="Viết bình luận của bạn...">
				<input type="submit" value="Bình luận">
			</form> -->
		</div>
	</div><!-- .question-basic -->
	<div class="sum-question">3 Câu trả lời</div>
	<div class="list-answered">
		<div class="question-premium section">
			<div class="qp-author">
				<a href="#" class="qp-ava"><img src="images/ava-qp.png" alt=""></a>
				<div class="author-info">
					<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
					<div class="profile">
						<div class="profile-content">
							<div class="profile-title">
								<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
					<p class="info-bottom"><a href="#">13h ago</a></p>
				</div>
			</div>
			<div class="qp-content">
				<div class="qp-text">
					<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình. </p>
					<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè...<a href="#" class="qp-readmore">(Xem thêm)</a></p>
				</div>
				<a href="#"><img src="images/qp-img-01.jpg" alt=""></a>
			</div>
			<div class="qp-full-content">
				<div class="qp-text">
					<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình.</p>
					<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè.</p>
					<h4>1. Cafe/ Nhà hàng trên cao</h4>
					<p>Nếu quá chán ngán với cảnh đông đúc nhộn nhịp của trung tâm Sài Gòn và muốn “chạy” xa khỏi cái không khí ấy, những quán cà phê trên tòa nhà chọc trời ở Sài Gòn quả là gợi ý đáng để thử phải không nào.</p>
					<img src="images/full-content.jpg" alt="">
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
						<li><a href="#">Theo dõi</a></li>
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
					<img src="images/ava-comment-02.png" alt="">
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
				<img src="images/ava-comment.png" alt="">
				<form action="#">
					<input type="text" placeholder="Viết bình luận của bạn...">
					<input type="submit" value="Bình luận">
				</form>
				<div class="comment-content">
					<div class="comment-item">
						<a href="#"><img src="images/ava-comment-01.png" alt=""></a>
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
								<img src="images/ava-comment.png" alt="">
								<form action="#">
									<input type="text" placeholder="Viết bình luận của bạn...">
									<input type="submit" value="Bình luận">
								</form>
							</div>
						</div>
						<div class="sub-comment comment-content">
							<div class="comment-item">
								<a href="#"><img src="images/ava-comment-02.png" alt=""></a>
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
										<img src="images/ava-comment.png" alt="">
										<form action="#">
											<input type="text" placeholder="Viết bình luận của bạn...">
											<input type="submit" value="Bình luận">
										</form>
									</div>
								</div>
								<div class="sub-comment comment-content">
									<div class="comment-item">
										<a href="#"><img src="images/ava-comment-01.png" alt=""></a>
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
												<img src="images/ava-comment.png" alt="">
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
						<a href="#"><img src="images/ava-comment-02.png" alt=""></a>
						<div class="comment-info">
							<h4 class="comment-name"><a href="#">Sói Ăn Chay</a></h4>
							<div class="comment-time"><span class="time">12 giờ trước</span><span class="like">19 yêu thích</span></div>
							<div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
							<div class="comment-action">
								<ul>
									<li><a href="#">Trả lời</a></li>
									<li><a href="#">Yêu thích</a></li>
									<li><a href="#">Theo dõi</a></li>
									<li><a href="#">Báo cáo</a></li>
								</ul>
							</div>
							<div class="sub-reply-comment">
								<img src="images/ava-comment.png" alt="">
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
		<div class="question-premium section">
			<div class="qp-author">
				<a href="#" class="qp-ava"><img src="images/ava-qp.png" alt=""></a>
				<div class="author-info">
					<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
					<div class="profile">
						<div class="profile-content">
							<div class="profile-title">
								<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
					<p class="info-bottom"><a href="#">13h ago</a></p>
				</div>
			</div>
			<div class="qp-content">
				<div class="qp-text">
					<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình. </p>
					<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè...<a href="#" class="qp-readmore">(Xem thêm)</a></p>
				</div>
				<a href="#"><img src="images/qp-img-01.jpg" alt=""></a>
			</div>
			<div class="qp-full-content">
				<div class="qp-text">
					<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình.</p>
					<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè.</p>
					<h4>1. Cafe/ Nhà hàng trên cao</h4>
					<p>Nếu quá chán ngán với cảnh đông đúc nhộn nhịp của trung tâm Sài Gòn và muốn “chạy” xa khỏi cái không khí ấy, những quán cà phê trên tòa nhà chọc trời ở Sài Gòn quả là gợi ý đáng để thử phải không nào.</p>
					<img src="images/full-content.jpg" alt="">
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
						<li><a href="#">Theo dõi</a></li>
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
				<img src="images/ava-comment.png" alt="">
				<form action="#">
					<input type="text" placeholder="Viết bình luận của bạn...">
					<input type="submit" value="Bình luận">
				</form>
			</div>
		</div><!-- .question-premium -->
		<div class="question-premium section">
			<div class="qp-author">
				<a href="#" class="qp-ava"><img src="images/ava-qp.png" alt=""></a>
				<div class="author-info">
					<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
					<div class="profile">
						<div class="profile-content">
							<div class="profile-title">
								<a href="#"><img src="images/connect-ava-02.png" alt=""></a>
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
					<p class="info-bottom"><a href="#">13h ago</a></p>
				</div>
			</div>
			<div class="qp-content">
				<div class="qp-text">
					<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình. </p>
					<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè...<a href="#" class="qp-readmore">(Xem thêm)</a></p>
				</div>
				<a href="#"><img src="images/qp-img-01.jpg" alt=""></a>
			</div>
			<div class="qp-full-content">
				<div class="qp-text">
					<p>TP.HCM là một thành phố rộng lớn nhưng không hẳn là một thành phố thơ mộng với nhiều địa điểm lãng mạn thích hợp cho những buổi hẹn hò. Foody sẽ đưa ra một vài gợi ý thú vị nhất cho những cặp đôi cho buổi hò hẹn sắp tới, giúp các bạn có thể tùy ý lựa chọn địa điểm sao cho phù hợp với túi tiền của mình.</p>
					<p>Các bạn có thể screenshot màn hình lại để dành trong điện thoại, rãnh rỗi cùng người yêu hẹn hò 2 người nè.</p>
					<h4>1. Cafe/ Nhà hàng trên cao</h4>
					<p>Nếu quá chán ngán với cảnh đông đúc nhộn nhịp của trung tâm Sài Gòn và muốn “chạy” xa khỏi cái không khí ấy, những quán cà phê trên tòa nhà chọc trời ở Sài Gòn quả là gợi ý đáng để thử phải không nào.</p>
					<img src="images/full-content.jpg" alt="">
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
						<li><a href="#">Theo dõi</a></li>
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
				<img src="images/ava-comment.png" alt="">
				<form action="#">
					<input type="text" placeholder="Viết bình luận của bạn...">
					<input type="submit" value="Bình luận">
				</form>
			</div>
		</div><!-- .question-premium -->
	</div>
</div><!-- .main-content -->