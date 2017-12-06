<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use kop\y2sp\ScrollPager;
use frontend\widget\WidgetQuestionStatistics;
$base_url = $this->theme->baseUrl;
?>
        <div class="container single-post-content">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="main-news-feed single-post">
                        <div class="header">
                            <div class="questions-area">
                                <div class="list-question-topic">
                                    <ul class="list-topic">
                                        <?php foreach($dataTopics as $topic):?>
										<li>
                                            <a 
                                                href="<?=Url::to(["topic/detail","id"=>$topic->id])?>"
                                                data-cat="<?=$topic->id?>"
                                                class="has-qtip-cat">
                                                <?=$topic->title?>
                                            </a>
                                        </li>
										<?php endforeach; ?>
                                    </ul>
                                </div>
                                <div class="questions-title">
                                    <h2><?= Html::encode($model->title)?></h2>
									<div class="qtext_para" style="color:#333">
										<?=$model->body?>
									</div>
                                </div>
                                <div class="action-bar-questions">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 user-interactive">
                                            <a href="#" class="questions answer-question" data-ajax="<?=$model->id?>">
                                                <?=Yii::t('frontend', 'Answer')?>
                                            </a>
                                            <a href="#" class="respect">
                                                <?=Yii::t('frontend', 'Respect')?>
                                                <span class="caret"></span>
                                            </a>
                                            <!--<a href="#" class="inline-action-follow follow text-link no-bg no-padding-left">-->
											<!-- USER FOLLOW & UNFOLLOW QUESTION -->
											<?php if(!empty($model->questionfollowflag)){?>
											<a href="javascrip:;" data-ajax="<?=$model->id?>" class="unfollow-question follow text-link no-bg no-padding-left">
												<span class="follow-text">
													<?=Yii::t('frontend', 'Bỏ theo dõi')?>
												</span>
												<span class="label label-default count"> <?=count($model->numfollow)?> </span>
                                            </a>
											<?php }else{?>
											<a href="javascrip:;" data-ajax="<?=$model->id?>" class="follow-question follow text-link no-bg no-padding-left">
												<span class="follow-text">
													<?=Yii::t('frontend', 'Follow')?>
												</span>
												<span class="label label-default count"> <?=count($model->numfollow)?> </span>
                                            </a>
											<?php } ?>
											<!-- END USER FOLLOW & UNFOLLOW QUESTION -->
											
                                            <a href="javascript:;" data-ajax="<?=$model->id?>" class="comments text-link"> <?=Yii::t('frontend', 'Comments')?> 
                                                <span class="label label-default count"> <?=count($model->comments)?> </span>
                                            </a>
											
											<!--
                                            <a href="#" class="downvote text-link has-qtip-menu-share"> Chia sẻ 
                                                <span class="label label-default count"> 0 </span>
                                            </a>
                                            <a href="#" class="text-link downvote_inline">
                                                <span class="downvote-text">
                                                    <?=Yii::t('frontend', 'Downvote')?>
                                                </span>
                                            </a>
											-->
                                            <a href="#" class="more-icon pull-right has-qtip-menu-action">
                                                <span class="dots"></span>
                                            </a>
											
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="single-feed-requests-wrapper" style="display: none;">
                            <div class="single-feed-requests">
                                <h3>Yêu cầu Trả lời:</h3>
                                <?php for ($i=1; $i < 5 ; $i++): ?>
                                 <div class="single-feed-requests-items">
                                    <div class="media single-feed-requests-item">
                                        <div class="media-left"> 
                                            <a href="#"> 
                                                <img class="media-object has-qtip-profile" src="<?=$base_url?>/images/user2.jpg"> 
                                            </a> 
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                Requested answer from <a href="#">Ronald Leach</a>
                                            </h4>
                                            <div class="comment-body">
                                             We will distribute this question to writers, and notify you about new answers.
                                             </div>
                                        </div>
                                         <div class="media-right"> 
                                            <a class="request_answers_button"></a>
                                        </div>
                                    </div>
                                 </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                        <div class="single-feed-comments-wrapper"></div>
                        <div class="number-user-answer">
                            <div class="number-count"> <?=$totalAnswer?>+ Câu trả lời </div>
                        </div>
                    </div>
					
                    <?php
						echo ListView::widget([
							'summary'=>'',
							'dataProvider' => $dataProviderAnswerQuestion,
							'itemOptions' => ['class' => 'item'],
							'itemView' => function ($model, $key, $index, $widget) {
								return $this->render('_item_answer_question', ['model' => $model]);
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
									ScrollPager::EXTENSION_HISTORY
								],
								'triggerOffset' =>  20
							],
						]);
					?>
					
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar-right-recent-post">
						<!-- Question Relation -->
                        <?php if(!empty($dataQuestionRelation)){?>
						<div class="sidebar-top">
                            <div class="sidebar-title">
                                <h3 class="title border-bottom"> 
									<?=Yii::t('frontend', 'Related Questions')?> 
								</h3>
                            </div>
                            <div class="sidebar-content ">
                                <div class="link-recent-post">
                                    <ul class="list-link-recent-post">
										<?php foreach($dataQuestionRelation as $model){?>		
										<li>
                                            <a href="<?=Url::to(['/unanswered/'.$model->slug])?>" target="_blank"><?=$model->title?></a>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>        
                            </div>
                        </div>
						<?php } ?>
						<!-- End Question Relation -->
                        <div class="sidebar-bottom">
							<?=WidgetQuestionStatistics::widget(["id"=>$model->id])?> 
                        </div>
                    </div>
                </div>
            </div>      
        </div>
    </section>
	<!--
    <section class="footer-single-post">
        <div class="container content-footer-recent-post">
            <div class="row">
                <a class="title" href="index.php"> Top Stories from Your Feed </a>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="column-recent-post">
                        <div class="recent-post-simple">
                            <a href="single-post.php" class="read-more-link text-link">
                                <p>Read In Feed</p>
                            </a>
                            <div class="recent-post-content">
                                <div class="recent-post-info">
                                    <div class="status-address">
                                        <p> Popular on Quora </p><span class="bullet"> . </span>
                                        <p> Mobile Phones </a></p><span class="bullet"> . </span>
                                        <p> Mon </a></p>
                                    </div>
                                    <div class="status-title-answer">
                                        <h3><a href="single-post.php"> What makes Google and Facebook pages load so quickly? </a></h3>
                                    </div>
                                    <div class="status-body">
                                        <div class="status-info-user-answer pt-relative">
                                            <a href="profile.php"><img class="img-user-answer has-qtip-profile" src="<?=$base_url?>/images/user2.jpg"></a>
                                            <div class="user-info-answer">
                                                <a href="profile.php" class="user-name text-link"> Business man </a> <span class="user-office"> , Former p/pilot, worked in various airline operations. Writer on MH370 </span>
                                                <a href="single-post.php" class="date-answer text-link"> Written Nov 27 </a> 
                                            </div>
                                        </div>
                                        <div class="user-description-answer">
                                            <div class="text-description-answer">
                                                <p> 
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
                                                </p>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="column-recent-post">
                        <div class="recent-post-simple">
                            <a href="single-post.php" class="read-more-link text-link">
                                <p>Read In Feed</p>
                            </a>
                            <div class="recent-post-content">
                                <div class="recent-post-info">
                                    <div class="status-address">
                                        <p> Popular on Quora </p><span class="bullet"> . </span>
                                        <p> Mobile Phones </a></p><span class="bullet"> . </span>
                                        <p> Mon </a></p>
                                    </div>
                                    <div class="status-title-answer">
                                        <h3><a href="single-post.php"> What makes Google and Facebook pages load so quickly? </a></h3>
                                    </div>
                                    <div class="status-body">
                                        <div class="status-info-user-answer pt-relative">
                                            <a href="profile.php"><img class="img-user-answer has-qtip-profile" src="<?=$base_url?>/images/user2.jpg"></a>
                                            <div class="user-info-answer">
                                                <a href="profile.php" class="user-name text-link"> Business man </a> <span class="user-office"> , Former p/pilot, worked in various airline operations. Writer on MH370 </span>
                                                <a href="single-post.php" class="date-answer text-link"> Written Nov 27 </a> 
                                            </div>
                                        </div>
                                        <div class="user-description-answer">
                                            <div class="text-description-answer">
                                                <p> 
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
                                                </p>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="column-recent-post">
                        <div class="recent-post-simple">
                            <a href="single-post.php" class="read-more-link text-link">
                                <p>Read In Feed</p>
                            </a>
                            <div class="recent-post-content">
                                <div class="recent-post-info">
                                    <div class="status-address">
                                        <p> Popular on Quora </p><span class="bullet"> . </span>
                                        <p> Mobile Phones </a></p><span class="bullet"> . </span>
                                        <p> Mon </a></p>
                                    </div>
                                    <div class="status-title-answer">
                                        <h3><a href="single-post.php"> What makes Google and Facebook pages load so quickly? </a></h3>
                                    </div>
                                    <div class="status-body">
                                        <div class="status-info-user-answer pt-relative">
                                            <a href="profile.php"><img class="img-user-answer has-qtip-profile" src="<?=$base_url?>/images/user2.jpg"></a>
                                            <div class="user-info-answer">
                                                <a href="profile.php" class="user-name text-link"> Business man </a> <span class="user-office"> , Former p/pilot, worked in various airline operations. Writer on MH370 </span>
                                                <a href="single-post.php" class="date-answer text-link"> Written Nov 27 </a> 
                                            </div>
                                        </div>
                                        <div class="user-description-answer">
                                            <div class="text-description-answer">
                                                <p> 
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s 
                                                </p>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	-->