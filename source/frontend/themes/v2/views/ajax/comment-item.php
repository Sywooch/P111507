<?php 
    use yii\widgets\ListView;
    use yii\helpers\Html;
    use common\models\Comments;
    use frontend\widget\WidgetFormComment;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
?>
<div class="comment-item">
    <a href="#"><img class="comment-avatar avatar" src="<?=$model->user->getAvatar()?>" alt=""></a>
    <div class="comment-info">
        <h4 class="comment-name"><a href="#"><?=Html::encode($model->user->fullname)?></a></h4>
        <div class="comment-time"><span class="time">8 giờ trước</span><span class="like">6 yêu thích</span></div>
        <div class="comment-para"><p><?=Html::encode($model->comment)?></p></div>
        <div class="comment-action">
            <ul>
                <li><a href="#" class="sub-reply-click">Trả lời</a></li>
                <li><a href="#">Yêu thích</a></li>
                <li><a href="#">Theo dõi</a></li>
                <li><a href="#">Báo cáo</a></li>
            </ul>
        </div>
        <div class="sub-reply-comment">
            <?= WidgetFormComment::widget([
                'id' => $model->post_id,
                'type' => $model->comment_type,
                'parent_id' => $model->id,
            ]) ?>
        </div>
    </div>
    <?php if (!empty($model->childs)) {
        foreach ($model->childs as $model) {
            echo $this->render('sub-comment', ['model' => $model]);
        }
    } ?>
</div>