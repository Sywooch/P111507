<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\web\View;
    use frontend\widget\WidgetPeopleAnswers;
    use common\models\User;
    use yii\jui\Dialog;
    use frontend\widget\WidgetChooseTopics;
    use frontend\widget\WidgetTopicsKnow;
    use frontend\widget\WidgetUserStatus;
    use frontend\widget\WidgetFeeds;
    use frontend\widget\WidgetImprove;
    use yii\widgets\ListView;
    use kop\y2sp\ScrollPager;

    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    $url_set_follow_topics = Url::to(['/ajax/follow']);
?>
<div class="container home-content">
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tab-mobile-home hide_desktop">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#feed">Feed</a></li>
                <li><a data-toggle="tab" href="#bookmarks">Bookmarks</a></li>
            </ul>
            <div class="tab-content page-bookmarks">
                <div id="feed" class="tab-pane fade in active">
                    <div id="myProgress">
                        <div id="myBar">
                            <div id="label">10%</div>
                        </div>
                    </div>
                    <h3>Improve Your Feed</h3>
                    <p>Follow more topics and see the best answers on Quickrep.</p>
                    <p><a href="#" class="follow-more-topics">Follow More Topics</a></p>
                </div>
                <div id="bookmarks" class="tab-pane fade">
                    <h3 class="title-bookmarks">BOOKMARKED TOPICS<a href="#">Edit</a></h3>
                    <ul class="list-bookmarks">
                        <li><a href="#"><img src="<?=$base_url?>/images/images1.jpeg" alt="Journalism"/><span>Journalism</span></a></li>
                        <li><a href="#"><img src="<?=$base_url?>/images/images2.jpeg" alt="Politics"/><span>Politics</span></a></li>
                        <li><a href="#"><img src="<?=$base_url?>/images/images3.jpeg" alt="Marketing"/><span>Marketing</span></a></li>
                        <li><a href="#"><img src="<?=$base_url?>/images/images4.jpeg" alt="Visiting and Travel"/><span>Visiting and Travel</span></a></li>
                        <li><a href="#"><img src="<?=$base_url?>/images/images5.jpeg" alt="Food"/><span>Food</span></a></li>
                    </ul>
                    <h3 class="title-bookmarks have-bg-bookmarks">BOOKMARKED ANSWERS</h3>
                    <div class="empty_state_content">
                        <div class="empty_icon"><img src="<?=$base_url?>/images/-3-images.icons.bookmark.svg-26-88d6a562ad0a132d.svg"/></div>
                        <div class="title">No Bookmarked Answers</div>
                        <div class="description">Bookmark answers from the more menu</div>
                        <a class="open-app" href="#">Open in app</a>
                    </div>
                </div>
            </div>
        </div>
        <?= WidgetFeeds::widget() ?>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
            <div class="main-news-feed">
                <?php echo WidgetUserStatus::widget() ?>
            </div>
            <div class="news-feed content-message-downvote hide">
            </div>
            <?php
                echo ListView::widget([
                    'summary'=>'',
                    'dataProvider' => $dataProvider,
                    'itemOptions' => ['class' => 'item'],
                    'itemView' => function ($model, $key, $index, $widget) {
                        return $this->render('_item_view', ['model' => $model]);
                        // or just do some echo
                        // return $model->title . ' posted by ' . $model->author;
                    },
                    'pager' => [
                        'class' => ScrollPager::className(),
                        'enabledExtensions' => [
                            ScrollPager::EXTENSION_TRIGGER,
                            ScrollPager::EXTENSION_SPINNER,
                            ScrollPager::EXTENSION_NONE_LEFT,
                            ScrollPager::EXTENSION_PAGING,
                            //ScrollPager::EXTENSION_HISTORY
                        ],
                        'triggerOffset' =>  20,
                        'eventOnRendered' => 'function(){
                            do_qtip_profile();
                        }'
                    ],
                ]);
            ?>
        </div>
        <!--<?= WidgetImprove::widget() ?>-->
    </div>
</div>
<?php
$js = <<< JS
    $('#modal-your-interests').modal('show');
    var data_action = 'modal_your_interests';
    var dta = {
        action  : data_action
    };
     $.ajax({ 
        url: '/ajax/your-interest',
        type: 'POST',
        data: dta
    }).done(function(html) {
        $('#modal-your-interests .modal-body').addClass('modal-scroll');
        $('#modal-your-interests .modal-footer').removeClass('hide');
        $('#modal-your-interests .modal-body').html(html);
    });
JS;
$js_2 = <<< JS
    $('#modal-your-selector').modal('show');
    var data_action = 'modal_your_interests';
    var dta = {
        action  : data_action
    };
     $.ajax({ 
        url: '/ajax/your-selector',
        type: 'POST',
        data: dta
    }).done(function(html) {
        $('#modal-your-selector .modal-body').addClass('modal-scroll');
        $('#modal-your-selector .modal-footer').removeClass('hide');
        $('#modal-your-selector .modal-body').html(html);
    });
JS;
if (Yii::$app->user->identity->register_status == User::REGISTER_STATUS_STEP1) {
    $this->registerJS($js, View::POS_READY);
}
if (Yii::$app->user->identity->register_status == User::REGISTER_STATUS_STEP2) {
    $this->registerJS($js_2, View::POS_READY);
}
?>
<style type="text/css">
.submit_button_disabled{
    opacity: .5;
    pointer-events: none;
}
</style>