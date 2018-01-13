<?php 
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
    use yii\helpers\Url;
    use common\models\Comments;
    use frontend\widget\WidgetFormComment;
    use frontend\widget\WidgetFormAnswer;
    use frontend\widget\WidgetRightAction;
    use yii\widgets\ListView;
    use kop\y2sp\ScrollPager;
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
					<li>
						<a
							data-ajax-id="<?=$model->id?>"
							data-ajax-type="<?=Comments::TYPE_QUESTIONS?>"
							href="javascript:void(0)"
							class="comment-click"> Bình luận <span class="count-number"><?=count($model->comments)?></span></a>
					</li>
					<li class="action-report">
						<a href="#">Báo cáo</a>
					</li>
				</ul>
			</div>
			<?= WidgetRightAction::widget(['link' => Url::toRoute('/cau-hoi/'.$model->slug, true)]); ?>
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
		<?= WidgetFormAnswer::widget(['model' => $model]) ?>
		<div class="qp-comment qd-qp-comment">
			<?= WidgetFormComment::widget([
					'id' => $model->id,
					'type' => Comments::TYPE_QUESTIONS,
					'parent_id' => null
				]); ?>
			<div class="comment-content">
		    	<img class="comment-loading-img" src="<?=$base_url?>/images/spin.gif">
		    </div>
		</div>
	</div><!-- .question-basic -->
	<div class="sum-question">3 Câu trả lời</div>
	<div class="list-answered">
		<?php
            echo ListView::widget([
                'summary'=>'',
                'dataProvider' => $answerProvider,
                'itemOptions' => ['class' => 'item'],
                'itemView' => function ($model, $key, $index, $widget) {
                    return $this->render('item-anwer', ['model' => $model]);
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
                    'triggerOffset' =>  20,
                    'eventOnRendered' => 'function() {
                        console.log("eventOnRendered");
                    }'
                ],
            ]);
        ?>
	</div>
</div><!-- .main-content -->