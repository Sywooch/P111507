<?php 
	use yii\helpers\Html; 
?>
<div class="qb-topic">
	<ul class="wt-list qd-wt-list">
		<?php foreach ($model->topics as $topic) { ?>
			<li>
				<a 
					data-ajax="<?=$topic->id?>"
        			class="topicHover"
        			href="javascript:void(0)"><?= Html::encode($topic->title) ?></a>
			</li>
		<?php } ?>
		<li>
			<a href="javascript:void(0)" class="choose-topic"><i class="nc-icon-mini design_pen-01"></i></a>
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
				<?php foreach ($model->topics as $topic) { ?>
				<li>
					<a href="javascript:void(0)">
						<i class="nc-icon-mini ui-1_simple-remove"></i>
					</a>
					<span><?= Html::encode($topic->title) ?></span>
				</li>
				<?php } ?>
			</ul>
		</div>
		<div class="popup-bottom">
			<div class="btn">
				<a href="javascript:void(0)" class="btn-accept">Xong</a>
			</div>
		</div>
	</div>
	<!-- <div class="profile">
		<div class="profile-content">
			<div class="profile-title">
				<a href="javascript:void(0)"><img src="images/profile-cat.png" alt=""></a>
				<div class="profile-name"><a href="javascript:void(0)">Sức khỏe</a></div>
			</div>
			<div class="profile-info">
				<p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
			</div>
		</div>
		<div class="profile-track">
			<div class="connect-track"><a href="javascript:void(0)"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
			<a class="on-notice" href="javascript:void(0)">Thêm vào yêu thích</a>
		</div>
	</div> -->
</div>