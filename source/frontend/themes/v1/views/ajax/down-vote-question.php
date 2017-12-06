<?php
    use yii\helpers\Html;
?>
<div class="feedback_text">
    <div class="msg">
        <h4><?=Yii::t('frontend', 'You downvoted this question')?></h4>
        <p>
            <?=Yii::t('frontend', 'Downvoting low-quality content improves Quora for everyone.')?>
        </p>
    </div>
    <a class="undo" href="javascript:;" data-ajax="<?=$model->id?>">
        <?=Yii::t('frontend', 'Undo')?>
    </a>
    <span class="bullet"> · </span>
    <span>
        <a class="report_feed" href="#" data-ajax="<?=$model->id?>">
            <?=Yii::t('frontend', 'Report')?>
        </a>
    </span>
    <span class="bullet"> · </span>
    <span>
        <a class="action_item mute_feed" href="#">
            <?=Yii::t('frontend', 'Mute').' '.Html::encode($model->question->user->username)?>
        </a>
    </span>
</div>