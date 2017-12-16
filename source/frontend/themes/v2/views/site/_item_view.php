<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use frontend\widget\WidgetShareSocial;
    use yii\helpers\HtmlPurifier;

    $base_url = $this->theme->baseUrl;
    $total_comment = count($model->comments);
    $total_vote = count($model->votes);
    $voted = cuser()->votedQuestion($model->id);
?>
<div class="news-feed">
    <div class="status-user-answer">
        <div class="status-content-answer">
            <div class="status-address">
                <p> <?=Yii::t('frontend', 'Phổ biến trên Quickrep')?> </p>
            </div>
            <div class="status-title-answer">
                <h3>
                    <a title="<?=Html::encode($model->title)?>" href="<?=Url::to([$model->modulehadanswer,'id'=>$model->id])?>">
                        <?=Html::encode($model->title)?>
                    </a>
                </h3>
            </div>
            <div class="status-body">
                <div class="status-info-user-answer pt-relative">
                    <a href="<?=Url::to(["profiles/index","id"=>$model->user->id,"slug"=>$model->user->slug])?>">
                        <img 
                        class="img-user-answer has-qtip-profile" 
                        data-ajax="<?=$model->user->id?>" 
                        src="<?=$model->user->getAvatar()?>">
                    </a>
                    <div class="user-info-answer">
                        <a href="<?=Url::to(["profiles/index","id"=>$model->user->id,"slug"=>$model->user->slug])?>" class="user-name text-link">
                            <?= Html::encode($model->user->username) ?>
                        </a>
                        <a href="single-post.php" class="date-answer text-link">
                            <?= Yii::t('frontend', 'Written')?> 
                            <?= CTimestamp::formatDate(
                                cparams('questionCreateDateFomat'),
                                $model->create_time
                            )?>
                        </a>
                    </div>
                </div>
                <div class="user-description-answer">
					<?php if(!empty($model->answer->images)):?>
                    <div class="image-description pull-right">
                        <img class="modal-more" src="<?=$model->answer->images?>">
                    </div>
					<?php endif;?>
                    <div class="text-description-answer">
                        <!-- limit 200 character -->
						<p> 
                            <?php  $strAnswers = !empty($model->answer->answers_text)
                                ? strip_tags($model->answer->answers_text) : ''?>
							<?=word_limit($strAnswers,400)?>	
							<!--<a class="modal-more" href=""> (more) </a>-->
                        </p>
                    </div>   
                </div>
            </div>
            <div class="status-footer border-bottom">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 user-interactive">
                        <!--vote-->
                        <a href="#" 
                        class="<?=$voted ? 'upvoted' : ''?> upvote no-icon"
                        data-ajax="<?=$model->id?>">
                            <span class="upvote-text"><?= Yii::t('frontend', 'Upvote') ?></span>
                            <span class="count" data-ajax="<?=$total_vote?>"> | <?=$total_vote?> <span>
                        </a>
            
                        <a href="#" 
                            class="downvote text-link" 
                            data-ajax="<?=$model->id?>"> 
                            <?= Yii::t('frontend', 'Downvote') ?>
                        </a>
                        <!--end vote-->
                        <a href="javascript:;" 
                        class="comments text-link" 
                        data-ajax="<?=$model->id?>"  
                        id="btn_comment_<?=$model->id?>"> <?= Yii::t('frontend', 'Comments') ?> 
                            <span 
                            class="label label-default count" 
                            data-ajax="<?=$total_comment?>" 
                            id="c_q_count_<?=$model->id?>">
                                <?=$total_comment?> + 
                            </span>
                        </a>
                        <div class=" connect-social pull-right">
							<!-- BEGIN SOCIAL SHARE -->
							<?php if(!empty($model->answer)){?>
							<?php if(!empty($model->answer)){?>
								<?=WidgetShareSocial::widget([
									'model' => $model,
									'siteUrl'=>Yii::$app->urlManager->createAbsoluteUrl(["answer/detail","id"=>$model->answer->id])
								]) ?>
							<?php } }?>
							<!-- END SOCIAL SHARE -->
                            <a href="#" class="more-icon has-qtip-menu-action show_nub" data-feed-id="6">
                                <span class="dots"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>