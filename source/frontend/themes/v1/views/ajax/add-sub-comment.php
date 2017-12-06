<?php
        use yii\helpers\Html;
        use common\components\DateSetup;
        use yii\helpers\Url;
        use yii\web\View;

        use frontend\widget\WidgetCommentItem;

        $base_url = $this->theme->baseUrl;
    ?>
<div class="comments-child">
    <div class="media">
        <div class="media-left">
            <a href="#">
                <img 
                    class="media-object has-qtip-profile"
                    data-ajax="<?=$model->user->id?>"
                    src="<?=$model->user->getAvatar()?>">
            </a>
        </div>
        <div class="media-body">
            <h4 class="media-heading">
                <a href="#">
                    <?=Html::encode($model->user->username)?>                    
                </a>
                <!-- <span class="comments-upvotes">
                    <a href="#">14 upvotes</a>
                </span> -->
            </h4>
            <!-- <div class="status-address comment-info">
                <p><a href="" class="text-link"> 9 upvotes </a></p>
                <span class="bullet"> · </span>
                <p>
                    Upvoted by                        
                    <a href="" class="text-link"> Clare Celea </a>
                </p>
                
            </div> -->
            <div class="comment-body">
                <?=Html::encode($model->comment)?>
            </div>

            <div class="status-address comment-actions">
                <p class="comment-meta hide">
                    <a href="#" class="upvote no-icon no-bg"> 
                        <span class="upvote-text">
                            Tốt                            
                        </span> 
                    </a>
                </p>
                <span class="bullet hide"> · </span>
                <p class="comment-meta hide">
                    <a href="" class="text-link downvote_inline">
                        <span class="downvote-text">
                            Không tốt                            
                        </span>
                    </a>
                </p>
                <span class="bullet hide"> · </span>
                <p class="comment-meta hide">
                    <a href="" class="text-link report_comment">
                    <span class="report-text">
                    Báo cáo                            
                    </span>
                    </a>
                </p>
                <span class="bullet hide"> · </span>
                <p class="comment-meta hide">
                    <a href="" class="text-link"> 
                        04-05-17 
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>