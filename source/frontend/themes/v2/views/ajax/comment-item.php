<?php 
    use yii\widgets\ListView;
    use yii\helpers\Html;
    use common\models\Comments;
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
            <img src="<?=$base_url?>/images/ava-comment.png" alt="">
            <form action="#">
                <input type="text" placeholder="Viết bình luận của bạn...">
                <input type="submit" value="Bình luận">
            </form>
        </div>
    </div>
    <?php if (!empty($model->childs)) {
        foreach ($model->childs as $model) {
            echo $this->render('sub-comment', ['model' => $model]);
        }
    } ?>
</div>