<?php 
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
    use frontend\widget\WidgetFormComment;
    use frontend\widget\WidgetRightAction;
    use frontend\widget\WidgetFavoriteAnswer;
    use frontend\widget\WidgetAnswerReport;
    use frontend\widget\WidgetAnswerFollow;
    use frontend\widget\WidgetAuthor;
    use frontend\widget\WidgetAnswerComment;
    use common\models\Comments;
    use yii\helpers\Url;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
?>
<div class="question-premium section">
    <div class="qp-topic">
        <p>Câu trả lời<a href="#" class="qp-hover">Du lịch</a><a href="#">Chủ đề có thể bạn thích</a></p>
        <!-- <div class="profile">
            <div class="profile-content">
                <div class="profile-title">
                    <a href="#"><img src="<?=$base_url?>/images/profile-cat.png" alt=""></a>
                    <div class="profile-name"><a href="#">Du lịch</a></div>
                </div>
                <div class="profile-info">
                    <p>Following recent terror attacks, the mayor's office has released a 59-point plan to lure tourists back to Paris, and the city is investing millions of euros into its ...</p>
                </div>
            </div>
            <div class="profile-track">
                <div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
                <a class="on-notice" href="#">Thêm vào yêu thích</a>
            </div>
        </div> -->
    </div>
    <h3 class="qp-title"><a href="<?=Url::to(['/cau-hoi/'.$model->slug])?>"><?=Html::encode($model->title)?></a></h3>
    <?= WidgetAuthor::widget(['model' => $model->answers[0]->user]) ?>
    <div class="qp-content">
        <div class="qp-text">
            <?= \yii\helpers\HtmlPurifier::process(word_limit($model->answers[0]->answers_text, 150, '...<p><a href="javascript:void(0)" class="qp-readmore">(Xem thêm)</a></p>')) ?>
        </div>
        <!-- TODO -->
        <!-- <div><p><a href="#" class="qp-readmore"><img src="<?=$base_url?>/images/qp-img.jpg" alt=""></a></p></div> -->
    </div>
    <div class="qp-full-content">
        <div class="qp-text">
        <?= HtmlPurifier::process($model->answers[0]->answers_text); ?>
        </div>
    </div>
    <div class="qp-action">
        <div class="action-left">
            <ul>
                <?php
                    echo WidgetFavoriteAnswer::widget([
                        'id' => $model->answers[0]->id,
                        'count' => count($model->answers[0]->favorite),
                        'isFavorite' => $model->answers[0]->isFavorite
                    ]);
                ?>
                <?= WidgetAnswerReport::widget([
                    'id' => $model->answers[0]->id
                ]) ?>
                <?= WidgetAnswerFollow::widget([
                    'id' => $model->answers[0]->id,
                    'count' => count($model->answers[0]->follow),
                    'isFollow' => $model->answers[0]->isFollow
                    ]) ?>
            </ul>
        </div>
        <?= WidgetRightAction::widget(['link' => Url::toRoute('/cau-hoi/'.$model->slug, true)]);?>
    </div>

    <?php
        if (!empty($model->answers[0]->comments)) {
            echo WidgetAnswerComment::widget(['model' => $model->answers[0]]);
            // echo $this->render('_comment_previews', ['model' => $model]);
        } else {
            echo '<div class="qp-comment">';
            echo WidgetFormComment::widget([
                'id' => $model->answers[0]->id,
                'type' => Comments::TYPE_ANSWER
            ]);
            echo '<div class="comment-content">';
            echo '</div>';
            echo '</div>';
        }
    ?>
</div><!-- .question-premium -->
