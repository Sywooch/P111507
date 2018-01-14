<?php 
use yii\helpers\Url;
use yii\helpers\Html;
?>
<div class="ajax-qp-author">
<div class="profile">
   <div class="profile-content">
      <div class="profile-title">
        <a href="<?=Url::to(["profiles/index","id"=>$model->id,"slug"=>$model->slug])?>">
			<img width="50px" src="<?php echo Html::encode($model->getAvatar()); ?>" alt="">
		</a>
        <div class="profile-name">
			<a href="<?=Url::to(["profiles/index","id"=>$model->id,"slug"=>$model->slug])?>">
				<?=Html::encode($model->getUsername())?>
			</a>
		</div>
      </div>
      <div class="profile-info">
        <ul>
			<?php if(!empty($model->company->title)){?>
				<li>
					<i class="fa fa-briefcase" aria-hidden="true"></i>
					Làm việc tại <?=!empty($model->company->title) ? Html::encode($model->company->title) : null?>
				</li>
			<?php } ?>
			
			<?php if(!empty($model->school->title)){?>
            <li>
				<i class="fa fa-graduation-cap" aria-hidden="true"></i>
				Từng học tại <?=!empty($model->school->title) ? Html::encode($model->school->title) : null ?>
			</li>
			<?php } ?>
			
			<?php if(!empty($model->location->title)){?>
				<li>
					<i class="fa fa-home" aria-hidden="true"></i>
					Sống tại <?=!empty($model->location->title) ? $model->location->title : null ?>
				</li>
			<?php } ?>
			<!-- wating
			<li><i class="fa fa-eye" aria-hidden="true"></i>57.8k lượt xem câu hỏi - 1.6k trong tháng này</li>
			-->
        </ul>
      </div>
   </div>
   <div class="profile-track">
		<div class="connect-track">
			<a href="#">
				<i class="nc-icon-outline users_add-29"></i> 
				Theo dõi | 136k
			</a>
		</div>
		<a class="on-notice" href="#">Nhận thông báo</a>
   </div>
</div>
</div>