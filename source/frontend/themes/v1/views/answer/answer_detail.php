<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use kop\y2sp\ScrollPager;
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
                                        <li>
                                            <a href="#" class="has-qtip-cat">
                                                <?=Yii::t('frontend', 'Customer Service')?>
                                            </a>
                                        </li>
                                            <li>
                                            <a href="#" class="has-qtip-cat">
                                                <?=Yii::t('frontend', 'Experiences in Life')?>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="has-qtip-cat"><?=Yii::t('frontend', 'Life Advice')?></a>
                                        </li>
                                        <a href="#" class="edit-topic-link"></a>
                                    </ul>
                                </div>
                                <div class="questions-title">
                                    <h2>
										<a style="color:black" title="<?= Html::encode($model->question->title)?>" href="<?=Url::to([$model->question->modulehadanswer,'id'=>$model->question->id])?>">
											<?= Html::encode($model->question->title)?>
										</a>
									</h2>
									<div class="qtext_para" style="color:#333">
										<?=$model->question->body?>
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
                                            <a href="#" class="inline-action-follow follow text-link no-bg no-padding-left">
                                            <span class="follow-text">
                                                <?=Yii::t('frontend', 'Follow')?>
                                            </span>
                                            <span class="label label-default count"> 7 </span>
                                            </a>
                                            <a href="#" class="comments text-link"> <?=Yii::t('frontend', 'Comments')?> 
                                                <span class="label label-default count"> 7 + </span>
                                            </a>
                                            <a href="#" class="downvote text-link has-qtip-menu-share"> Share 
                                                <span class="label label-default count"> 1 </span>
                                            </a>
                                            <a href="#" class="text-link downvote_inline">
                                                <span class="downvote-text">
                                                    <?=Yii::t('frontend', 'Downvote')?>
                                                </span>
                                            </a>
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
                                <h3>Request Answers:</h3>
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
					<!-- ANSWER -->
					<div class="news-feed-anwser">
					   <div class="status-user-answer">
						  <div class="status-body">
							 <div class="status-info-user-answer pt-relative">
								<a href="#">
									<img class="img-user-answer has-qtip-profile" src="<?=$model->user->getAvatar()?>">
								</a>
								<div class="user-info-answer">
								   <a href="#" class="user-name text-link"> <?= Html::encode($model->user->username) ?> </a>
								   <a href="<?=Url::to(["answer/detail","id"=>$model->id])?>" class="date-answer text-link"> 
										Written 
										<?= CTimestamp::formatDate(
											cparams('questionCreateDateFomat'),
											$model->create_time
										)?>  
									</a>
								</div>
								<div class="follow-user">
								   <a href="#" class="button-follow">
								   <span></span>
								   </a>
								</div>
							 </div>
							 <div class="user-description-answer">
								<div class="text-description-answer">
								   <?=$model->answers_text?>
								</div>
							 </div>
						  </div>
						  <div class="status-footer">
							 <div class="row">
								<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 user-interactive">
								   <a href="#" class="upvote no-icon"> <span class="upvote-text">Upvote</span>  | <span class="count"> 3 <span></a>
								   <a href="#" class="text-link downvote_inline">  <span class="downvote-text">Downvote</span></a>
								   <a href="#" class="comments text-link"> Comments <span class="label label-default count"> 7 + </span></a>
								</div>
								<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 connect-social text-right">
								   <a href="#" class="fb-icon"></a>
								   <a href="#" class="tt-icon"></a>
								   <a href="#" class="share-icon"></a>
								   <a href="#" class="more-icon has-qtip-menu-action">
								   <span class="dots"></span>
								   </a>
								</div>
							 </div>
						  </div>
					   </div>
					</div>
					<!-- END ANSWER -->		
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
                            <div class="sidebar-title">
                                <h3 class="title border-bottom"> Question Stats </h3>
                            </div>
                            <div class="sidebar-content ">
                                <div class="contact-recent-post">
                                    <ul class="list-contact">
                                        <li class="icon-followers"><span class="icon"></span><a href="#" target="_blank" class="text-link">181 Followers</a></li>
                                        <li class="icon-views"><span class="icon"></span><p class="number-views">2,541.387 number-views</p></li>
                                        <li class="icon-last"><span class="icon"></span><p class="date">Last Asked Feb 15</p></li>
                                        <li class="icon-edit"><span class="icon"></span><a href="#" target="_blank" class="edit text-link">Edits</a></li>
                                    </ul>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
            </div>      
        </div>