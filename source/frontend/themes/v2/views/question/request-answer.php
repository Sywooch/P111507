<?php 
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
    use yii\helpers\Url;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
?>
<div class="qb-request">
	<h3 class="qb-request-title">Yêu cầu trả lời</h3>
	<div class="request-item">
		<img src="<?=$base_url?>/images/account-avatar.png" alt="">
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
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
					<div class="author-info">
						<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
						<!-- <div class="profile">
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
						</div> -->
						<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
							<div class="profile-request">
								<div class="profile-content">
									<div class="profile-title">
										<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
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
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
					<div class="author-info">
						<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
						<!-- <div class="profile">
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
						</div> -->
						<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
							<div class="profile-request">
								<div class="profile-content">
									<div class="profile-title">
										<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
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
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
					<div class="author-info">
						<p class="info-top"><a href="#">soianchay</a>, Designer tại SpaceLab</p>
						<!-- <div class="profile">
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
						</div> -->
						<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
							<div class="profile-request">
								<div class="profile-content">
									<div class="profile-title">
										<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
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
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
					<div class="author-info">
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
					</div>
				</div>
			</li>
			<li>
				<div class="qp-author">
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
					<div class="author-info">
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
					</div>
				</div>
			</li>
			<li>
				<div class="qp-author">
					<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
					<div class="author-info">
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
								<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
								<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
								<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
										<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
											<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
												<div class="profile-request">
													<div class="profile-content">
														<div class="profile-title">
															<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
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
										<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
										<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
											<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
												<div class="profile-request">
													<div class="profile-content">
														<div class="profile-title">
															<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
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
										<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
										<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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
											<div class="info-bottom"><p>38 trả lời tử <a class="qbt-hover r-qbt-hover" href="#">Khách sạn</a></p>
												<div class="profile-request">
													<div class="profile-content">
														<div class="profile-title">
															<a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
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
										<div class="qp-ava"><img src="<?=$base_url?>/images/account-avatar.png" alt=""></div>
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