<?php
   use yii\helpers\Html;
   use yii\helpers\Url;
   use yii\widgets\ListView;
   use kop\y2sp\ScrollPager;
   use yii\web\View;
   use frontend\widget\WidgetProfilesUserActivity;
   use frontend\widget\WidgetProfilesCredential;
   use frontend\widget\WidgetUserV2HeaderInfo;
   use frontend\widget\WidgetProfilesWhatTopics;
   
   $home_url = Yii::$app->HomeUrl;
   $base_url = $this->theme->baseUrl;
?>
<main id="main" class="site-main site-profie">
			<div class="container">
				<div class="m-menu-top">
					<ul>
						<li class="active"><a href="profile.html">Hồ sơ</a></li>
						<li><a href="stats.html">Thống kê</a></li>
						<li><a href="content.html">Nội dung của bạn</a></li>
						<li><a href="settings.html">Tài khoản</a></li>
						<li><a href="messages.html">Tin nhắn</a></li>
						<li><a href="privacy.html">Riêng tư</a></li>
						<li><a href="emal&notification.html">Email và thông báo</a></li>
						<li><a href="language.html">Ngôn ngữ</a></li>
						<li><a href="blogs.html">Blogs</a></li>
					</ul>
				</div>
				<div class="profile-wrapper">
					
					<?=WidgetUserV2HeaderInfo::widget(["model"=>$model,'uid'=>$model->id])?>
					
					<div class="pf-content">
						<?=$this->render('_slidebar_left')?>
						<div class="pf-right">
							<div class="list-answers">
								<div class="answers-title">
									<p>2 câu trả lời</p>
									<ul>
										<li class="active"><a href="#">Gần đây</a><span>/</span></li>
										<li><a href="#">Lượt xem 30 ngày</a></li>
									</ul>
								</div>
								
								<?=WidgetProfilesCredential::widget(["uid"=>$model->id,'typeDevice'=>2])?>
								
								<?php
									echo ListView::widget([
										'summary'=>'',
										'dataProvider' => $dataProvider,
										'itemOptions' => ['class' => 'item'],
										'itemView' => function ($model, $key, $index, $widget) {
											
											if(!empty($model->answer->answers_text)){
												return $this->render('_question_premium', ['model' => $model]);
											}
											else
											{
												return $this->render('_question_basic', ['model' => $model]);
											}
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
							</div>
						</div><!-- .pf-right -->
					</div><!-- .pf-content -->
				</div><!-- .profile-content -->
					<?=WidgetProfilesCredential::widget(["uid"=>$model->id,'typeDevice'=>1])?>
					
					<?=WidgetProfilesWhatTopics::widget(["uid"=>$model->id])?>
					
				</div><!-- .profile-sidebar -->
			</div><!-- .container -->
		</main><!-- .site-main -->
		
		