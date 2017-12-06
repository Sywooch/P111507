<?php
    use yii\helpers\Html;
    use common\components\DateSetup;
    use yii\helpers\Url;
    use yii\web\View;
    use yii\helpers\HtmlPurifier;

    use frontend\widget\WidgetCommentItem;

    $base_url = $this->theme->baseUrl;
?>
<!-- Comment Item--> 
<div class="media comment-wraper">
    <!-- USER COMMENT INFO-->
    <div class="media-left"> 
        <a href="/profile/<?=$model->id?>">  
            <img  
                class="media-object has-qtip-profile" 
                data-ajax="<?=$model->user->id?>"   
                src="<?=$model->user->getAvatar()?>" > 
        </a> 
    </div>
    <div class="media-body">
        <h4 class="media-heading">
            <a href="#"><?=Html::encode($model->user->username)?></a>
            <!-- Ken update sau
			<span class="comments-upvotes">
                <a href="#">14 <?=Yii::t('frontend', 'upvotes')?></a>
            </span>
			-->
        </h4>
        <!-- <div class="status-address comment-info">
            <p>
                <a href="" class="text-link"> 9 
                    <?=Yii::t('frontend', 'upvotes')?>
                </a>
            </p>
            <span class="bullet"> · </span>
            <p>
                <?=Yii::t('frontend', 'Upvoted by')?> 
                <a href="" class="text-link"> Clare Celea </a>
            </p>
        </div> -->
    <!-- END USER COMMENT INFOR -->
    <div class="comment-body">
        <?= HtmlPurifier::process($model->comment) ?> 
    </div>
    <!-- FORM COMMENT FOR SUB COMMENT -->
    <div class="status-address comment-actions">
        <div class="reply-form hide">
            <div class="media form-reply">
                <div class="media-body">
                    <input
                        type="text"
                        style="width: 100%"
                        placeholder="<?=Yii::t('frontend', 'Reply...')?>"
                        class="form-control show_reply_box_link">
                </div>
                <div class="media-right">
                    <button 
                        type="button" data-ajax="<?=$model->id?>" 
                        class="btn btn-primary btn-reply">
                        <?=Yii::t('frontend', 'Reply')?>
                    </button>
                </div>
            </div>
        </div>
        <p class="comment-meta">
            <input 
                type="text" 
                placeholder="Trả lời..." 
                style="width: 55px;" 
                class="show_reply_box_link show_reply_box_toggle">
        </p>
        <p class="comment-meta">
            <a 
                href="javascript:;" 
                class="upvote no-icon no-bg" 
                data-ajax="<?=$model->id?>" 
                data-ajax-type="comment" > 
                <span class="upvote-text">
                    <?= !(empty($model->voted)) ? Yii::t('frontend', 'Upvoted') : Yii::t('frontend', 'Upvote')?>
                </span> 
            </a>
        </p>
        <span class="bullet"> · </span>
        <p class="comment-meta">
            <a 
                href="javascript:;" 
                class="text-link downvote_inline"
                data-ajax="<?=$model->id?>" 
                data-ajax-type="comment"
                >
                <span class="downvote-text">
                    <?= !empty($model->downVoted) ? Yii::t('frontend', 'Downvoted') : Yii::t('frontend', 'Downvote')?>
                </span>
            </a>
        </p>
		<!--
        <span class="bullet"> · </span>
        <p class="comment-meta">
            <a href="" class="text-link report_comment">
                <span class="report-text">
                    <?= Yii::t('frontend', 'Report')?>
                </span>
            </a>
        </p>
		
        <span class="bullet"> · </span>
        <p class="comment-meta">
            <a href="" class="text-link"> 
                <?=CTimestamp::formatDate('d-m-Y', $model->create_time)?>
            </a>
        </p>
		-->
    </div>
    <!-- END FORM COMMENT-->
    
    <!-- LOAD MORE COMMENT -->
    <?php if (!empty($model->childs)) { ?>
    <a class="load-more-comments">
        <span class="light">
            <strong>
                <div class="hidden white_bg show_nub">
                    <div class="hover_menu_contents"> </div>
                </div>
                <span class="user has-qtip-profile" 
                    data-ajax="<?=$model->childs[0]->user->id?>"
                >
                    <?=Html::encode($model->childs[0]->user->username)?>
                </span>
            </strong>
            <?=Html::encode($model->childs[0]->comment)?>
        </span>
    </a>
    <?php } ?>
    
    <!-- SUB COMMENT -->
    <?php foreach ($model->childs as $key => $value) { ?>
        <div class="comments-child  hide">
            <div class="media">
            <div class="media-left">
                <a href="#">
                    <img
                        class="media-object has-qtip-profile"
                        data-ajax="<?=$value->user->id?>"   
                        src="<?=$value->user->getAvatar()?>">
                </a>
            </div>
            <div class="media-body">
                <h4 class="media-heading">
                    <a href="#">
                        <?=Html::encode($value->user->username)?>
                    </a>
					<!-- update sau
                    <span class="comments-upvotes">
                        <a href="#">14 <?=Yii::t('frontend', 'upvotes')?></a>
                    </span>
					-->
                </h4>
				<!--
                <div class="status-address comment-info">
                    <p><a href="" class="text-link"> 9 upvotes </a></p>
                    <span class="bullet"> · </span>
                    <p>
                        <?=Yii::t('frontend', 'Upvoted by')?>
                        <a href="" class="text-link"> Clare Celea </a>
                    </p>
                </div>
				-->
				
                <?= HtmlPurifier::process($value->comment) ?> 
                <div class="status-address comment-actions">
                    <!-- REPLY FOR CHILD COMMENT -->
                    <!-- <div class="reply-form hide">
                        <div class="media form-reply">
                            <div class="media-body">
                                <input type="text" style="width: 100%" placeholder="Reply..." class="form-control show_reply_box_link">
                            </div>
                            <div class="media-right">
                                <button type="button" class="btn btn-primary btn-reply">
                                    <?=Yii::t('frontend', 'Reply')?>
                                </button>
                            </div>
                        </div>
                    </div>
                    <p class="comment-meta">
                        <input type="text" placeholder="Reply..." style="width: 55px;" class="show_reply_box_link show_reply_box_toggle">
                    </p> -->

                    <!-- CHILD COMMENT INFOR -->
                    <p class="comment-meta">
                        <a href="javascript:;" class="upvote no-icon no-bg" data-ajax="<?=$value->id?>"
                                data-ajax-type="comment"> 
                            <span class="upvote-text">
                                <?= !(empty($value->voted)) ? Yii::t('frontend', 'Upvoted') : Yii::t('frontend', 'Upvote')?>
                            </span> 
                        </a>
                    </p>
                    <span class="bullet"> · </span>
                    <p class="comment-meta">
                        <a 
                            href="" 
                            class="text-link downvote_inline"
                            data-ajax="<?=$value->id?>" 
                            data-ajax-type="comment"
                            >
                            <span class="downvote-text">
                                <?= !empty($value->downVoted) ? Yii::t('frontend', 'Downvoted') : Yii::t('frontend', 'Downvote')?>
                            </span>
                        </a>
                    </p>
					<!--
                    <span class="bullet"> · </span>
                    <p class="comment-meta">
                        <a href="" class="text-link report_comment">
                            <span class="report-text">
                                <?=Yii::t('frontend', 'Report')?>
                            </span>
                        </a>
                    </p>
                    <span class="bullet"> · </span>
                    <p class="comment-meta">
                        <a href="" class="text-link"> 
                        <?=
                            CTimestamp::formatDate(
                                cparams('questionCreateDateFomat'),
                                $value->create_time
                            );
                        ?> 
                        </a>
                    </p>
					-->
                    <!--END CHILD COMMENT INFOR-->
                </div>
                <!-- SUB OF SUB COMMENT -->
               
            </div>
            </div>
        </div> 
    <?php } ?>
</div>
</div>
<!-- ENd Comment Item--> 
<?php
    $js = <<<Js
    $('.btn.btn-primary.btn-reply').click(function() {
        var obj = $(this);
        var comment = obj.closest('.form-reply').find('.show_reply_box_link').val();
        var dta = {
            action: 'add-sub-comment',
            id: $(this).attr('data-ajax'),
            comment: comment
        };
        $.ajax({
            url: '/ajax/add-sub-comment',
            type: 'post',
            data: dta,
            dataType: 'html',
            success: function (result) {
                obj.closest('.form-reply').find('.show_reply_box_link').val('');
                var loadmore = obj.closest('.media-body').find('.status-address.comment-actions:first');
                loadmore.after(result);
                do_qtip_profile();
            }
        });
    });
Js;
$this->registerJs($js, View::POS_READY);
?>
