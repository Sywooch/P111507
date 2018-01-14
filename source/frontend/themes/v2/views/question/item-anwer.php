<?php 
	use frontend\widget\WidgetAuthor;
	use frontend\widget\WidgetAnswerComment;
	use frontend\widget\WidgetFormComment;
	use common\models\Comments;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    ?>
<div class="question-premium section">
	<?= WidgetAuthor::widget(['model' => $model->user]) ?>
	<div class="qp-content">
		<div class="qp-text">
			<p>
			<?= \yii\helpers\HtmlPurifier::process(word_limit($model->answers_text, 150, '</p>...<p><a href="javascript:void(0)" class="qp-readmore">(Xem thêm)</a></p>')) ?>
		</div>
		<a href="#"><img src="<?=$base_url?>/images/qp-img-01.jpg" alt=""></a>
	</div>
	<div class="qp-full-content">
		<div class="qp-text">
			<?= \yii\helpers\HtmlPurifier::process($model->answers_text) ?>
		</div>
	</div>
	<div class="qp-action">
		<div class="action-left">
			<ul>
				<li><a class="like-btn" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Yêu thích | <span class="like-number">16</span></a></li>
				<li class="action-report">
					<a href="#">Báo cáo</a>
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
	<?php 
	    if (!empty($model->comments)) {
            echo WidgetAnswerComment::widget(['model' => $model]);
            // echo $this->render('_comment_previews', ['model' => $model]);
        } else {
            echo '<div class="qp-comment">';
            echo WidgetFormComment::widget([
                'id' => $model->id,
                'type' => Comments::TYPE_ANSWER
            ]);
            echo '<div class="comment-content">';
            echo '</div>';
            echo '</div>';
        }
	?>
<!-- 	<div class="comment-previews">
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
							<li><a href="#">Trả lời</a></li>
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
	</div> -->
</div><!-- .question-premium -->
