<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
 
$home_url = Yii::$app->HomeUrl;
$base_url = $this->theme->baseUrl;
?>
<aside class="widget widget-credentials widget-topic widget-related-topic">
	<h3 class="widget-title">Chủ đề bạn biết<a href="#">Sửa</a></h3>
	<?php if(count($models)<=0){?>
	<div class="widget-content">
      <div class="what-topic">
         <i class="nc-icon-mini ui-1_circle-add"></i>
         <p>Bạn biết những chủ đề nào?</p>
      </div>
      <div class="what-topic-bg"></div>
      <div class="what-topic-popup">
         <div class="popup-title">
            <h3>Chỉnh Sửa Chủ Đề Bạn Quan Tâm</h3>
            <p>Thêm và xóa chủ để</p>
         </div>
         <div class="popup-content">
            <input type="text" placeholder="Bạn biết những chủ đề nào?">
         </div>
         <div class="popup-bottom">
            <div class="btn">
               <a href="#" class="btn-accept">Xong</a>
            </div>
         </div>
      </div>
	</div>
	<?php } else { ?>
	<div class="widget-content">
		<ul class="wt-list wr-wt-list">
			<?php foreach($models as $model){?>
			<li data-ajax="<?=$model->topic_id?>" class="topicHover">
				<a href="javascript:;">
					<img src="<?=$model->topics->getImages()?>" style="height:40px" alt="<?=$model->topics->title?>">
				</a>
				<div class="wtl-info">
				   <a href="#" class="wtli-name"><?=$model->topics->title?></a>
					<span><?=$model->topics->getNumberUserFollows()?> Người theo dõi</span>
				</div>
			</li>
			<?php } ?>
		</ul>
	</div>
	<?php } ?>
</aside>
<!-- .widget-question -->