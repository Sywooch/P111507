<?php 
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
    use frontend\widget\WidgetFormComment;
    use frontend\widget\WidgetRightAction;
    use frontend\widget\WidgetFavoriteAnswer;
    use common\models\Comments;
    use yii\helpers\Url;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
?>
<div class="question-premium section">
    <div class="qp-topic">
        <p>Câu trả lời<a href="#" class="qp-hover">Du lịch</a><a href="#">Chủ đề có thể bạn thích</a></p>
        <div class="profile">
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
        </div>
    </div>
    <h3 class="qp-title"><a href="<?=Url::to(['/cau-hoi/'.$model->slug])?>"><?=Html::encode($model->title)?></a></h3>
    <div class="qp-author">
        <a href="#" class="qp-ava"><img src="<?=$model->answers[0]->user->getAvatar()?>" class="img-header-avatar" alt=""></a>
        <div class="author-info">
            <p class="info-top"><a href="#"><?= $model->answers[0]->user->fullname ?><!--TODO </a>, Designer tại SpaceLab</p> -->
            <div class="profile">
                <div class="profile-content">
                    <div class="profile-title">
                        <a href="#"><img class="avatar" src="<?=$model->answers[0]->user->getAvatar()?>" alt=""></a>
                        <div class="profile-name"><a href="#"><?= $model->answers[0]->user->fullname ?></a></div>
                    </div>
                    <!-- TODO -->
                    <!-- <div class="profile-info">
                        <ul>
                            <li><i class="fa fa-briefcase" aria-hidden="true"></i>Làm việc tại SpaceLab</li>
                            <li><i class="fa fa-graduation-cap" aria-hidden="true"></i>Từng học tại Đại học FPT</li>
                            <li><i class="fa fa-home" aria-hidden="true"></i>Sống tại Vinh</li>
                            <li><i class="fa fa-eye" aria-hidden="true"></i>57.8k lượt xem câu hỏi - 1.6k trong tháng này</li>
                        </ul>
                    </div> -->
                </div>
                <div class="profile-track">
                    <div class="connect-track"><a href="#"><i class="nc-icon-outline users_add-29"></i> Theo dõi | 136k</a></div>
                    <a class="on-notice" href="#">Nhận thông báo</a>
                </div>
            </div>
            <!-- TODO -->
            <!-- <p class="info-bottom">Được yêu thích bởi <a href="#">Nguyễn Xuân Trường</a>, Designer tại Riseup Agency</p> -->
        </div>
    </div>
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
                <li class="action-report">
                    <a href="#">Báo cáo</a>
                    <div class="report-bg"></div>
                    <div class="report-popup">
                        <div class="report-title">
                            <h3>Báo cáo vi phạm</h3>
                            <i class="nc-icon-outline ui-2_small-remove"></i>
                        </div>
                        <div class="report-content">
                            <form action="#">
                                <label for="r1">
                                    <input type="radio" name="report" id="r1">Nội dung này gây khó chịu hoặc không thú vị
                                </label>
                                <label for="r2">
                                    <input type="radio" name="report" id="r2">Tôi nghĩ nội dung này không nên xuất hiện trên Quickrep
                                </label>
                                <label for="r3">
                                    <input type="radio" name="report" id="r3">Quấy rối: Phân biệt hoặc đối nghịch với một người hoặc một nhóm
                                </label>
                                <label for="r4">
                                    <input type="radio" name="report" id="r4">Đó là nội dung spam
                                </label>
                            </form>
                        </div>
                        <div class="report-bottom">
                            <div class="report-model">
                                <a href="#" class="report-cancel">Hủy bỏ</a>
                                <a href="#" class="report-send">Gửi báo cáo</a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="action-follow"><a href="#">Theo dõi <span>1</span></a></li>
            </ul>
        </div>
        <?= WidgetRightAction::widget(['link' => Url::toRoute('/cau-hoi/'.$model->slug, true)]);?>
    </div>

    <?php
        if (!empty($model->answers[0]->comments)) {
            echo $this->render('_comment_previews', ['model' => $model]);
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
