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
		<?php
		echo $this->render('//question/belong-topic') ?>
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
		<?php
		  echo $this->render('//question/request-answer'); ?>
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
		<?= $this->render('//question/item-anwer', ['model' => $model->answer, 'question' => $model]); ?>
	</div>
</div><!-- .main-content -->
