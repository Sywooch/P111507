<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
	use frontend\widget\WidgetShareSocial;
    $base_url = $this->theme->baseUrl;
	$total_comment = count($model->comments);
    $total_vote = count($model->votes);
	if (!Yii::$app->user->isGuest){
		$voted = cuser()->votedQuestion($model->id);
	}
    
?>
<div class="news-feed-anwser">
   <div class="status-user-answer">
      <div class="status-body">
         <div class="status-info-user-answer pt-relative">
            <a href="<?=Url::to(["profiles/index","id"=>$model->user->id,"slug"=>$model->user->slug])?>">
				<img class="img-user-answer has-qtip-profile" src="<?=$model->user->getAvatar()?>">
			</a>
            <div class="user-info-answer">
               <a href="<?=Url::to(["profiles/index","id"=>$model->user->id,"slug"=>$model->user->slug])?>" class="user-name text-link"> <?= Html::encode($model->user->username) ?> </a>
               <a href="<?=Url::to(["answer/detail","id"=>$model->id])?>" class="date-answer text-link"> 
					<!--Written-->
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
            </div>
            <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 connect-social text-right">
               <?=WidgetShareSocial::widget([
					'model' => $model,
					'siteUrl'=>Yii::$app->urlManager->createAbsoluteUrl(["answer/detail","id"=>$model->id])
				]) ?>
               <a href="#" class="more-icon has-qtip-menu-action">
				<span class="dots"></span>
               </a>
            </div>
         </div>
      </div>
   </div>
</div>