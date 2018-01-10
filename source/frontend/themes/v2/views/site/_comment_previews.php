<?php 
    use yii\helpers\Html;
    use common\models\Comments;
    use frontend\widget\WidgetFormComment;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
?>
<div
    class="comment-previews"
    data-ajax-id="<?=$model->answers[0]->id?>"
    data-ajax-type="<?=Comments::TYPE_ANSWER?>">
    <div class="comment-item">
        <img class="avatar comment-avatar" src="<?=$model->answers[0]->comments[0]->user->getAvatar()?>" alt="">
        <div class="comment-info">
            <h4 class="comment-name"><?= $model->answers[0]->comments[0]->user->fullname ?></h4>
            <div class="comment-para"><p><?=Html::encode($model->answers[0]->comments[0]->comment)?></p></div>
        </div>
    </div>
    <div class="more-comment">
        <p>3 more comments from Nguyễn Xuân Trường</p>
    </div>
</div>

<div class="qp-comment">
    <?= WidgetFormComment::widget([
        'id' => $model->answers[0]->id,
        'type' => Comments::TYPE_ANSWER,
    ]) ?>
    <div class="comment-content">
        <img class="comment-loading-img" src="<?=$base_url?>/images/spin.gif">
    </div>
</div>