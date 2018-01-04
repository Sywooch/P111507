<?php 
    use yii\helpers\Html;
    use frontend\widget\WidgetRightAction;
    use frontend\widget\WidgetAnswerReport;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    use yii\helpers\Url;
    // dd($model->answers->user);
?>
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
	<h3 class="qb-title"><a href="<?=Url::to(['/cau-hoi-chua-tra-loi/'.$model->slug])?>"><?=Html::encode($model->title)?></a></h3>
	<div class="qb-time"><span class="time-update">Cập nhật 21 giờ trước</span><a href="#">2 câu trả lời</a></div>
	<div class="qb-action">
		<div class="action-left">
			<ul>
				<li><a href="#" class="textarea-click"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Trả lời</a></li>
				<li><a href="#">Ẩn</a></li>
				<!-- <?= WidgetAnswerReport::widget() ?> -->
				<li class="action-follow"><a href="#">Theo dõi <span>2</span></a></li>
			</ul>
		</div>
		<?= WidgetRightAction::widget(['link' => Url::toRoute('/cau-hoi/'.$model->slug, true)]);?>
	</div>
	<div class="qb-textarea">
		<textarea id="froala-editor"></textarea>
	</div>
</div><!-- .question-basic -->