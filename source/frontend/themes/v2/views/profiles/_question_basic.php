<?php 
    use yii\helpers\Html;
    use frontend\widget\WidgetRightAction;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    use yii\helpers\Url;
    // dd($model->answers->user);
?>
<div class="question-basic section">
	<div class="qb-topic">
		<p>Câu hỏi<a class="qbt-hover" href="#">Giáo dục</a></p>
	</div>
	<h3 class="qb-title"><a href="<?=Url::to(['/cau-hoi-chua-tra-loi/'.$model->slug])?>"><?=Html::encode($model->title)?></a></h3>
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
		<?= WidgetRightAction::widget(['link' => Url::toRoute('/cau-hoi/'.$model->slug, true)]);?>
	</div>
	<div class="qb-textarea">
		<textarea id="froala-editor"></textarea>
	</div>
</div><!-- .question-basic -->