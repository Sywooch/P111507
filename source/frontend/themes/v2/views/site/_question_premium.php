<?php 
    use yii\helpers\Html;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    // dd($model->answers[0]->user->first_name);
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
    <h3 class="qp-title"><a href="#"><?=Html::encode($model->title)?></a></h3>
    <div class="qp-author">
        <a href="#" class="qp-ava"><img src="<?=$model->answers[0]->user->getAvatar()?>" class="img-header-avatar" alt=""></a>
        <div class="author-info">
            <p class="info-top"><a href="#"><?= $model->answers[0]->user->last_name .' '. $model->answers[0]->user->first_name ?><!--TODO </a>, Designer tại SpaceLab</p> -->
            <div class="profile">
                <div class="profile-content">
                    <div class="profile-title">
                        <a href="#"><img class="avatar" src="<?=$model->answers[0]->user->getAvatar()?>" alt=""></a>
                        <div class="profile-name"><a href="#"><?= $model->answers[0]->user->last_name .' '. $model->answers[0]->user->first_name ?></a></div>
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
        <?= \yii\helpers\HtmlPurifier::process($model->answers[0]->answers_text); ?>
        </div>
    </div>
    <div class="qp-action">
        <div class="action-left">
            <ul>
                <li><a class="like-btn" href="#"><i class="fa fa-heart-o" aria-hidden="true"></i>Yêu thích | <span class="like-number">16</span></a></li>
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
        <div class="action-right">
            <ul>
                <li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="comment-previews">
        <div class="comment-item">
            <img src="<?=$base_url?>/images/ava-comment-02.png" alt="">
            <div class="comment-info">
                <h4 class="comment-name">Sói Ăn Chay</h4>
                <div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
            </div>
        </div>
        <div class="more-comment">
            <p>3 more comments from Nguyễn Xuân Trường</p>
        </div>
    </div>
    <div class="qp-comment">
        <img src="<?=$base_url?>/images/ava-comment.png" alt="">
        <form action="#">
            <input type="text" placeholder="Viết bình luận của bạn...">
            <input type="submit" value="Bình luận">
        </form>
        <div class="comment-content">
            <div class="comment-item">
                <a href="#"><img src="<?=$base_url?>/images/ava-comment-01.png" alt=""></a>
                <div class="comment-info">
                    <h4 class="comment-name"><a href="#">Nguyễn Xuân Trường</a></h4>
                    <div class="comment-time"><span class="time">8 giờ trước</span><span class="like">6 yêu thích</span></div>
                    <div class="comment-para"><p>Giữa sông nước mênh mông, Boat House nổi lên như một ốc đảo xinh đẹp, gần gũi với thiên nhiên. Nhà hàng tọa lạc ngay bên sông Sài Gòn trong khuôn viên khu biệt thự Thảo Điền, An Phú, là điểm hẹn hò lý tưởng cho những ai yêu thích cảnh sông nước, thiên nhiên.</p></div>
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
                <div class="sub-comment comment-content">
                    <div class="comment-item">
                        <a href="#"><img src="<?=$base_url?>/images/ava-comment-02.png" alt=""></a>
                        <div class="comment-info">
                            <h4 class="comment-name"><a href="#">Ken</a></h4>
                            <div class="comment-time"><span class="time">1 giờ trước</span><span class="like">9 yêu thích</span></div>
                            <div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
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
                        <div class="sub-comment comment-content">
                            <div class="comment-item">
                                <a href="#"><img src="<?=$base_url?>/images/ava-comment-01.png" alt=""></a>
                                <div class="comment-info">
                                    <h4 class="comment-name"><a href="#">Gấu</a></h4>
                                    <div class="comment-time"><span class="time">10 giờ trước</span><span class="like">15 yêu thích</span></div>
                                    <div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="comment-item">
                <a href="#"><img src="<?=$base_url?>/images/ava-comment-02.png" alt=""></a>
                <div class="comment-info">
                    <h4 class="comment-name"><a href="#">Sói Ăn Chay</a></h4>
                    <div class="comment-time"><span class="time">12 giờ trước</span><span class="like">19 yêu thích</span></div>
                    <div class="comment-para"><p>Phố đi bộ được xem là trung tâm giải trí quận 1 hiện nay, xung quanh phố đi bộ là hàng chục quán cafe và các món ăn vặt phục vụ đúng nhu cầu của giới trẻ.</p></div>
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
            </div>
        </div>
    </div>
</div><!-- .question-premium -->
