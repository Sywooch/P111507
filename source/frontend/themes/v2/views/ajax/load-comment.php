
<?php
    use yii\helpers\Html;
    use common\components\DateSetup;
    use yii\helpers\Url;
    use yii\web\View;
    use frontend\widget\WidgetCommentItem;
    
    $base_url = $this->theme->baseUrl;
    $offset === 0 ?  $offset = cparams('limitLoadComment') : $offset += cparams('limitLoadComment');
?>
    <!--FORM COMMENT -->
    <div class="meidas-commets" data-example-id="default-media">
        <?php if ($offset === cparams('limitLoadComment') && !empty(cuser())) { ?>
            <div class="media form-comment">
                <div class="media-left"> 
                    <a href="#">
                        <img
                        data-ajax = "<?=cuser()->id?>"
                        class="media-object has-qtip-profile"
                        src="<?=cuser()->getAvatar()?>" > 
                    </a> 
                </div>
                <div class="media-body">
                    <input type="text" 
                    style="width: 100%" 
                    placeholder="Add a comment" 
                    class="form-control show_reply_box_link">
                </div>
                <div class="media-right">
                    <button 
                        data-ajax="<?= isset($model->id) ? $model->id: null?>" 
                        type="button" 
                        class="btn btn-primary btn-comment"
                        >
                        <?= Yii::t('frontend', 'Comment')?></button>
                </div>
            </div>
        <?php }
//ALL PARENT COMMENT
if (!empty($model->comments)) {
    foreach ($model->comments as $key => $comment) {
        if (empty($comment->comment_parent_id)) {
            echo WidgetCommentItem::widget(['model' => $comment]);
        }
    }
}
//BUTTON LOAD MORE
if (!empty($model->comments) && count($model->comments) === cparams('limitLoadComment')) { ?>
        <a class="load-more-parrent-comments" 
            data-ajax="<?=$model->id?>" 
            data-offset="<?=$offset?>">
        <span class="light">
            <strong><?= Yii::t('frontend', 'More Comments')?></strong>
        </span>
        </a>
        <?php } ?>
    </div>
    <?php
    $js = <<<Js
    //Add Comment
    $('.media-right button.btn-comment').click(function() {
        var obj = this;
        var id = $(this).attr('data-ajax');
        var el = $(this).closest('.media.form-comment').find('input.show_reply_box_link');
        var data = {question_id: id, comment: el.val()};
            $.ajax({
            url: '/ajax/add-comment-question',
            data: data,
            type: 'post',
            success: function(result) {
                console.log(result);
                el.val('');
                $('#btn_comment_'+id).trigger('click');
                //update number comment
                var count =  parseInt($('#c_q_count_'+ id).attr('data-ajax')) + 1
                $('#c_q_count_'+id).text(count + "+");
            }
        });
    });
Js;
    $this->registerJs($js, View::POS_READY);
    ?>

