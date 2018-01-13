<?php 
use yii\helpers\Url;
?>
<style>
.profile .profile-title img{
	float:left;
}
.profile-name{
	margin-left: 55px;
	font-size: 16px;
	font-weight: 600;
	line-height: 45px;
}
</style>
<div class="profile">
	<div class="profile-content">
		<div class="profile-title">
			<a href="<?=Url::to(["topic/detail","id" =>$model->id])?>">
				<img style="height:40px" src="<?=$model->getImages()?>" alt="<?=$model->title?>">
			</a>
			<div class="profile-name">
				<a href="<?=Url::to(["topic/detail","id" =>$model->id])?>">
					<?=$model->title?>
				</a>
			</div>
		</div>
		<?php if($model->body != ""){?>
		<div class="profile-info">
			<p>
				<?=word_limit($model->body,250,'...')?>
			</p>
		</div>
		<?php } ?>
	</div>
	<div class="profile-track">
		<div class="connect-track">
			<a href="#">
				<i class="nc-icon-outline users_add-29"></i> 
				Theo dõi | <?=$model->getNumberUserFollows()?>
			</a>
		</div>
		<a class="on-notice" href="#">Thêm vào yêu thích</a>
	</div>
</div>