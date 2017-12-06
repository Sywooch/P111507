<?php
    use yii\helpers\Html;
    use yii\helpers\Url;

    $base_url = $this->theme->baseUrl;
?>
<div class="news-feed">
   <div class="status-user-questions">
      <div class="status-content-questions">
         <div class="status-address">
            <p> Phổ biến trên Quickrep </p>
            <span class="bullet"> . </span>
            <p><a href="" class="text-link"> Điện thoại di động </a></p>
            <span class="bullet"> . </span>
            <p>
				<a href="" class="text-link"> 
					<?= CTimestamp::formatDate(
                                cparams('questionCreateDateFomat'),
                                $model->create_time
                     )?> 
				</a>
			</p>
         </div>
         <div class="status-title-questions">
            <h3>
				<a href="javascript:;">
					<?=Html::encode($model->title)?>
				</a>
			</h3>
         </div>
         <div class="status-body">
            <div class="user-description-question">
               <div class="text-description-questions">
					<p> 
                        <?php  $strAnswers = !empty($model->answerbyuser->answers_text)
                                ? strip_tags($model->answerbyuser->answers_text) : ''?>
						<?=word_limit($strAnswers,400)?>	
						<!--<a class="modal-more" href=""> (more) </a>-->
                    </p>
               </div>
			   <?php if(count($model->answers) >0){?>
               <div class="read-answer">
                  <a href="#" class="text-link">Xem  
					<span class="count"> <?=count($model->answers)?> </span> câu trả lời 
				  </a>
               </div>
			   <?php } ?>
            </div>
         </div>
         <div class="status-footer">
            <div class="row">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 user-interactive">
					<a href="javascript:;" 
						data-ajax="<?=$model->id?>" 
						class="questions answer-question"> 
						<?=Yii::t('frontend', 'Answer')?> 
					</a>
					<a href="javascript:;"
					data-ajax="<?=$model->id?>"
					class="pass"> <?=Yii::t('frontend', 'Pass')?> </a>
					<!-- BEGIN Follow -->
					<?php if(count($model->questionfollowflag)==0){?>
					<a href="javascript:;" 
					data-ajax="<?=$model->id?>"
					class="follow text-link follow-question">
						<?=Yii::t('frontend', 'Follow')?>
						<span class="label label-default count"> 
							<?=count($model->numfollow)?> 
						</span>
					</a>
					<?php } else {?>
					<a href="javascript:;" 
					data-ajax="<?=$model->id?>"
					class="follow text-link unfollow-question">
						<?=Yii::t('frontend', 'Following')?>
						<span class="label label-default count"> 
							<?=count($model->numfollow)?> 
						</span>
					</a>
					<?php } ?>
					<!-- END Follow -->
					<a href="javascript:;" 
                            class="downvote text-link" 
                            data-ajax="<?=$model->id?>"> 
                            <?= Yii::t('frontend', 'Downvote') ?>
					</a>
					<!--
					<a href="#" class="more-icon has-qtip-menu-action show_nub pull-right" data-feed-id="6">
						<span class="dots"></span>
					</a>
					-->
               </div>
            </div>
         </div>
      </div>
   </div>
</div>