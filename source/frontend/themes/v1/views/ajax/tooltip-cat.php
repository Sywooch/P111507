<?php
use yii\helpers\Html;

    $base_url = $this->theme->baseUrl;
?>
<div class="ct-wrapper ">
    <div class="ct-header">
        <div class="ct-img col-md-3">
            <img class="img-responsive" src="<?=$base_url?>/images/main-thumb-t-801-200-Sf8h894FXbQZQit0TeqDrrqS6xw6dwCQ.jpeg">
        </div>
        <div class="ct-title col-md-9">
            <a href="#"><?=Html::encode($model->title)?></a>
        </div>
        <div class="ct-content col-md-12">
            <span class="rendered_qtext"><?=Html::encode($model->body)?></span>
        </div>
    </div>
    <div class="ct-actions user-interactive col-md-12">
        <a href="javascript:;" data-href="<?=$model->id?>" class="btn-action btn-action-follow unfollow no-icon"> <span class="follow-text">Unfollow</span> <span class="count"> | <strong><?=Html::encode($count)?>m</strong> <span></span></span></a>
        <a href="#" class="downvote text-link"> Remove Bookmark </a>
    </div>
</div>