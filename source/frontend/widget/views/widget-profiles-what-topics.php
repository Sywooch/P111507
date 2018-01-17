<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
 
$home_url = Yii::$app->HomeUrl;
$base_url = $this->theme->baseUrl;
?>
<style>
.suggest-topic-search{
	position: absolute;
	background-color: #fff;
	z-index: 11;
	top: 124px;
	left: 0;
	right: 0;
	line-height: normal;
	width: 560px;
	border-radius: 3px;
	border: 1px solid #e4e4e4;
	box-shadow: 0px 2px 5px 0px rgba(0, 0, 0, 0.08);
	display: none;
	left: 20px;
	overflow-y: scroll;
	max-height:300px;
}
.suggest-topic-search .suggest-title,
.suggest-topic-search .suggest-footer{
	background: #f2f4f6;
	padding: 12px 20px;
}
.suggest-topic-search .suggest-title i,
.suggest-topic-search .suggest-footer i{
	margin-right: 10px;
}
.suggest-topic-search li{
	list-style: none;
	cursor: pointer;
    position: relative;
    padding: 8px 12px;
}
.suggest-topic-search li:hover{
	background-color: #f1f1f1;
}
.suggest-topic-search li a{
	display: block;
	padding: 7px 0;
	color: #777;
	border-bottom: 1px solid #e4e4e4;
}
.suggest-topic-search li a span{
	color: #222;
	font-weight: 500;
}
.suggest-topic-search li:last-child a{
	border-bottom: 0;
}
.suggest-topic-search li img{
	margin-right: 15px;
	margin-left: 10px;
}
.widget-related-topic .suggest-topic-search li img{
	float:none;
}
.suggest-topic-search li i{
	margin-right: 10px;
}
.suggest-topic-search:before
	left: 10px;
	border-color: rgb(228, 228, 228,0);
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 6px solid #000;
}
.suggest-topic-search:before{
	content: '';
	width: 0;
	height: 0;
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 6px solid #f2f4f6;
	position: absolute;
	top: -6px;
	right: 20px;
}
.suggest-topic-search:after{
	content: '';
	width: 0;
	height: 0;
	border-color: rgb(228, 228, 228,0);
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 6px solid #fff;
	position: absolute;
	left: 10px;
	top: -6px;
}
.suggest-topic-search .submit_button, .primary_button {
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    transition: opacity ease-in-out 100ms,color ease-in-out 100ms,background-color ease-in-out 100ms,border-color ease-in-out 100ms;
    border-radius: 3px;
    box-shadow: 0 1px 1px 0 rgba(200,200,200,0.2);
    display: inline-block;
    font-weight: 500;
    outline: 0;
    padding: 3px 7px 4px 7px;
    text-align: center;
    text-decoration: none;
    cursor: pointer;
    background-color: #3e78ad !important;
    color: #fff;
    border: 1px solid #3a66ad !important;
    box-shadow: 0 1px 1px 0 rgba(200,200,200,0.6);
}
.suggest-topic-search .submit_button {
    float: right;
}
</style>
<aside class="widget widget-credentials widget-topic widget-related-topic">
	<h3 class="widget-title">Chủ đề bạn biết<a href="#">Sửa</a></h3>
	<?php if(count($models)<=0){?>
		<div class="widget-content">
			<div class="what-topic">
				<i class="nc-icon-mini ui-1_circle-add"></i>
				<p>Bạn biết những chủ đề nào?</p>
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


<div class="choose-topic-bg"></div>
<div class="choose-topic-popup what-topic-popup">
   <div class="ct-popup-close"><i class="nc-icon-mini ui-1_simple-remove"></i></div>
   <div class="popup-title">
      <h3>Chỉnh sửa chủ đề</h3>
      <p>Các chủ đề được sử dụng để tìm các chuyên gia giỏi nhất để trả lời câu hỏi.</p>
   </div>
   <div class="popup-content">
		<form action="#">
			<input type="text" placeholder="Chọn chủ đề">
			<div class="suggest-topic-search">
			</div>
		</form>
		<ul class="list-choose-topic">
			<!--
			<li>
				<a href="javascript:void(0)">
					<i class="nc-icon-mini ui-1_simple-remove"></i>
				</a>
				<span>FPT Aptech</span>
			</li>
			-->
		</ul>
   </div>
   <div class="popup-bottom">
      <div class="btn">
         <a href="javascript:void(0)" class="btn-accept">Xong</a>
      </div>
   </div>
</div>