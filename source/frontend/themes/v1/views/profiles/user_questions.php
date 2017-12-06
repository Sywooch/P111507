<?php
   use yii\helpers\Html;
   use yii\helpers\Url;
   use yii\widgets\ListView;
   use kop\y2sp\ScrollPager;
   use yii\web\View;
   use frontend\widget\WidgetProfilesUserActivity;
   $home_url = Yii::$app->HomeUrl;
   $base_url = $this->theme->baseUrl;
   use frontend\widget\WidgetProfilesCredential;
?>
<style>
/* highlight results */
.ui-autocomplete span.hl_results {
    background-color: #ffff66;
}
 
/* loading - the AJAX indicator */
.ui-autocomplete-loading {
    background: white url('<?=$base_url ?>/images/indicator.gif') right center no-repeat;
}
 
/* scroll results */
.ui-autocomplete {
    max-height: 250px;
    overflow-y: auto;
    /* prevent horizontal scrollbar */
    overflow-x: hidden;
    /* add padding for vertical scrollbar */
    padding-right: 5px;
}
 
.ui-autocomplete li {
    font-size: 16px;
}
 
/* IE 6 doesn't support max-height
* we use height instead, but this forces the menu to always be this tall
*/
* 
html .ui-autocomplete {
    height: 250px;
}
</style>
<div class="container profile-content">
   <div class="row">
      <div class="col-lg-9 col-sm-9 col-md-9 col-xs-12">
         <!-- BEGIN PROFILES -->
			<?php if($model->id == \Yii::$app->user->identity->id){?>
			<div class="profile-main">
				<div class="profile-header">
					<div class="profile-photo">
						<div class="profile-images">
							<img src="<?php echo Html::encode($model->getAvatar()); ?>">
						</div>
						<a href="#" class="remove-photo"></a>
						<div class="edit-photo">
							<a href="#" data-toggle="modal" data-target="#modalFormAvatar"> <?=Yii::t('frontend', 'Chỉnh sửa hình ảnh')?> </a>
						</div>
					</div>
					<div class="profile-content">
					  <div class="title-content">
						 <div class="name-title">
							<h2 class="user"><a href="javascript:;"> <?=Html::encode($model->getUsername())?> </a></h2>
							<a href="javascript:;" class="edit text-link"> <?=Yii::t('frontend', 'Edit')?> </a>
						 </div>
						 <div class="add-profile-credential">
							<a href="javascript:;" class="text-link"> <?=Yii::t('frontend', 'Thêm thông tin hồ sơ')?> </a>
						 </div>
					  </div>
					  <div class="write-description-profile">
						 <div class="profile-section">
							<a href="javascript:;" class="text-link"> <?=Yii::t('frontend', 'Viết mô tả về bản thân bạn')?> </a>
						 </div>
					  </div>
					  <div class="profile-action-bar">
						 <div class="action-bar">
							<div class="primary_item">
							   <a href="#"> <?=Yii::t('frontend', 'Followers')?> </a>
							</div>
							<div class="action_item">
							   <a href="#" class="text-link"> <?=Yii::t('frontend', 'Facebook')?> </a>
							</div>
						 </div>
					  </div>
					</div>
				</div>
			</div>
			<?php }else{?>
			<div class="profile-main">
				<div class="profile-header">
					<div class="profile-photo">
						<div class="profile-images">
							<img src="<?php echo Html::encode($model->getAvatar()); ?>">
						</div>
					</div>
					<div class="profile-content">
						<div class="title-content">
							<div class="name-title">
								<h2 class="user"><a href="javascript:;"> <?=Html::encode($model->getUsername())?> </a></h2>
							</div>
							<!--
							<div class="add-profile-credential">
								<a href="javascript:;" class="text-link"> <?=Yii::t('frontend', 'Add profile credential')?> </a>
							</div>
							-->
						</div>
						<!--
						<div class="write-description-profile">
							<div class="profile-section">
								<a href="javascript:;" class="text-link"> <?=Yii::t('frontend', 'Write a description about yourself')?> </a>
							</div>
						</div>
						-->
						
						<div class="profile-action-bar">
							<div class="action-bar">
								<div class="primary_item">
								   <a href="#"> <?=Yii::t('frontend', 'Followers')?> </a>
								</div>
								<!--
								<div class="action_item">
								   <a href="#" class="text-link"> <?=Yii::t('frontend', 'Facebook')?> </a>
								</div>
								-->
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<?php } ?>
			<!-- END PROFILES -->
         <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
               <?=WidgetProfilesUserActivity::widget(["uid"=>$model->id])?>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
               <div class="profile-content-center">
                  <div class="header">
                     <h3 class="title border-bottom"> <?=Yii::t('frontend', 'Answer')?> </h3>
                  </div>
                  <div class="user-answer-profile">
                     <div class="content">
						<?php
							echo ListView::widget([
								'summary'=>'',
								'dataProvider' => $dataProvider,
								'itemOptions' => ['class' => 'item'],
								'itemView' => function ($model, $key, $index, $widget) {
									return $this->render('_item_view', ['model' => $model]);
									// or just do some echo
									// return $model->title . ' posted by ' . $model->author;
								},
								'pager' => [
									'class' => ScrollPager::className(),
									'enabledExtensions' => [
										ScrollPager::EXTENSION_TRIGGER,
										ScrollPager::EXTENSION_SPINNER,
										ScrollPager::EXTENSION_NONE_LEFT,
										ScrollPager::EXTENSION_PAGING,
										//ScrollPager::EXTENSION_HISTORY
									],
									'triggerOffset' =>  20
								],
							]);
						?>
                        <!--
						<div class="user-no-answer">
                           You haven't written any answers yet. 
                           <a href="#"> Answer your first question </a>
                        </div>
						-->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-lg-3 col-sm-3 col-md-3 col-xs-12">
         <div class="sidebar-right-profile">
            <div class="sidebar-top">
               <div class="sidebar-title">
					<h3 class="title border-bottom"> 
						<?=Yii::t('frontend', 'Credentials &amp; Highlights')?> 
					</h3>
                  <a href="#" class="text-link"> <?=Yii::t('frontend', 'Edit')?> </a>
               </div>
               <div class="content-siderbar">
					<?=WidgetProfilesCredential::widget(["uid"=>$model->id])?>
               </div>
            </div>
			
            <!--
            <div class="sidebar-bottom">
               <div class="sidebar-title">
					<h3 class="title border-bottom"> <?=Yii::t('frontend', 'Knows About')?> </h3>
					<a href="#" class="text-link"> 
						<?=Yii::t('frontend', 'Edit')?> 
					</a>
               </div>
               <div class="content-sidebar">
                  <a href="#">
                     <div class="icon_frame">
                        <span class="icon-plus"></span>
                     </div>
					 <?=Yii::t('frontend', 'What topics do you know about?')?>
                  </a>
               </div>
            </div>
			-->
         </div>
      </div>
   </div>
</div>
