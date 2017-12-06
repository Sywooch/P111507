<?php

/* @var $this \yii\web\View */
/* @var $content string */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SearchForm */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\assets\FontAwesomeAsset;
use yii\bootstrap\ActiveForm;
use frontend\models\SearchForm;
use frontend\models\Config;
use kartik\social\FacebookPlugin;
use kartik\social\GooglePlugin;
use frontend\models\References;
use frontend\models\Rating;

AppAsset::register($this);
FontAwesomeAsset::register($this);

$sum = Rating::find()->sum('value');
$sum = intval($sum);
$count = Rating::find()->count();
$avg = ($sum > 0 && $count > 0) ? $sum / $count : 0;
$avg = round($avg, 1);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <link href="/images/logo.sm.png" type="image/x-ico" rel="shorcut icon" />
    
    <?= $this->registerCssFile("/css/bootstrap.min.css") ?>
    <?= $this->registerCssFile("/css/jquery.bxslider.css") ?>
    <?= $this->registerCssFile("/css/jquery.datetimepicker.css") ?>
    <?= $this->registerCssFile("/css/animate.min.css") ?>
    <?= $this->registerCssFile("/css/style.css") ?>
    <?= $this->registerCssFile("/css/smart.css") ?>
    <?= $this->registerCssFile("/css/jquery-ui.css") ?>
    
</head>
<body>
<?php $this->beginBody() ?>
<div class="guide-post"><a href="https://taichua.com/huong-dan-tu-tai-chua">Hướng Dẫn Đăng Bài</a></div>
<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "Thing",
  "name": "Tải chùa - taichua.com",
  "description": "Tải miễn phí, tìm kiếm, tìm nhanh, download, video, free , crack, bản quyền, serial , key , full crack, mới nhất 2016, full key.",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "<?= $avg ?>",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "<?= $count ?>"
  }
}
</script>

<div id="hidpopup" style="display:none;"></div>
<div id="loading"></div>

<style>
.social {
    position: fixed;
    top: 50%;
    right: 0;
    transform: translate(0,-50%);
	z-index: 9;
}
.fb_iframe_widget iframe {
    position: absolute;
    right: 0;
}
</style>
<div class="social">
    <div style="margin-bottom: 10px;"><?php echo FacebookPlugin::widget(['type'=>FacebookPlugin::LIKE, 'settings' => [
        'layout' => 'box_count',
        'width' => '100',
    ]]);?></div>
    <div><?php echo GooglePlugin::widget(['type'=>GooglePlugin::PLUS_ONE, 'settings' => [
        'size' => 'tall',
    ]]); ?></div>
</div>

<div id="wrap">
    
    <header id="header">
        
        <?php if(Yii::$app->controller->id != 'link' || Yii::$app->controller->action->id != 'detail'){ ?>
        <h1 class="h1TitleSeo">
        <?php 
        $setting = Config::findOne(7);
        $val = !empty($setting->value) ? trim($setting->value) : 'Chia sẽ link nhanh';
        echo $val;
        ?>
        </h1>
        <?php }?>
        <h2 class="h2TitleSeo">
        <?php 
        $setting = Config::findOne(8);
        $val = !empty($setting->value) ? trim($setting->value) : 'Chia sẽ link nhanh';
        echo $val;
        ?>
        </h2>
        <h3 class="h3TitleSeo">
        <?php 
        $setting = Config::findOne(9);
        $val = !empty($setting->value) ? trim($setting->value) : 'Chia sẽ link nhanh';
        echo $val;
        ?>
        </h3>
        <h4 class="h4TitleSeo">
        <?php 
        $setting = Config::findOne(10);
        $val = !empty($setting->value) ? trim($setting->value) : 'Chia sẽ link nhanh';
        echo $val;
        ?>
        </h4>
        <h5 class="h5TitleSeo">
        <?php 
        $setting = Config::findOne(11);
        $val = !empty($setting->value) ? trim($setting->value) : 'Chia sẽ link nhanh';
        echo $val;
        ?>
        </h5>
        <h6 class="h6TitleSeo">
        <?php 
        $setting = Config::findOne(12);
        $val = !empty($setting->value) ? trim($setting->value) : 'Chia sẽ link nhanh';
        echo $val;
        ?>
        </h6>
        
        <nav class="navbar navbar-default navbar-bg">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed bar" data-toggle="collapse" data-target="#navbar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar icon-color"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbar" class="navbar-collapse collapse" aria-expanded="false" style="height: 1px;">
                    <ul class="nav navbar-nav navbarUL">
                        <li><?= Html::a('Tìm kiếm', ['site/search'], ['class' => 'url']) ?></li>
                        <li><?= Html::a('Blog', ['news/list', 'id' => 3, 'title' => 'tin-tuc'], ['class' => 'url']) ?></li>
                        <li><?= Html::a('Mới nhất', ['link/latest'], ['class' => 'url']) ?></li>
                        <li><?= Html::a('Video', ['link/catalog', 'id' => 18, 'name' => 'video'], ['class' => 'url']) ?></li>
                        <li><?= Html::a('Phần mềm', ['link/catalog', 'id' => 19, 'name' => 'phan-mem'], ['class' => 'url']) ?></li>
                        <li><?= Html::a('Top 100', ['link/top'], ['class' => 'url']) ?></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right action">
                        <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->is_bloger == 1) { ?>
                        <li><?= Html::a('Viết Blog', ['member/post'], ['class' => 'nav-post']) ?></li>
                        <?php } ?>
                        <li><?= Html::a('Đăng bài', ['link/post'], ['class' => 'nav-post']) ?></li>
                        <?php if (Yii::$app->user->isGuest) { ?>
                        <li><?= Html::a('Đăng nhập', ['site/login'], ['class' => 'url']) ?></li>
                        <li><?= Html::a('Đăng ký', ['site/signup'], ['class' => 'url']) ?></li>
                        <?php } else { ?>
                        <li class="avata-small">
                            <a href="<?= \yii\helpers\Url::to(['member/info']) ?>">
                                <?= Html::img(Yii::$app->user->identity->avatar, ['alt' => '', 'class' => 'per-avata', 'height'=>'25px']) ?>
                                <?= !empty(Yii::$app->user->identity->fullname) ? Html::encode(Yii::$app->user->identity->fullname) : Html::encode(Yii::$app->user->identity->email) ?>
                            </a>
                        </li>
                        <li class="menudrop">
                            <span class="glyphicon glyphicon-cog"></span>
                            <ul class="small-menu">
                                <li>
                                    <?= Html::a('Thông tin cá nhân', ['member/info']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Chuyển VND', ['member/transaction']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Cấu hình thanh toán', ['member/payment']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Quản lý bài viết', ['member/manage']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Đổi mật khẩu', ['member/changepass']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Quên mật khẩu', ['site/request-password-reset']) ?>
                                </li>
                                <li>
                                   <?= Html::a('Số điểm : ' . Html::encode(number_format(Yii::$app->user->identity->point)) . ' đ', null, ['href' => 'javascript:void(0)']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Thoát', ['site/logout'], ['data-method' => 'post']) ?>
                                </li>
                                <li>
                                    <?= Html::a('Lịch sử giao dịch', ['member/managetransaction']) ?>
                                </li>
                                <?php if (!Yii::$app->user->isGuest && Yii::$app->user->identity->is_bloger == 1) { ?>
                                <li>
                                    <?= Html::a('Quản lý Blog', ['member/manageblog']) ?>
                                </li>
                                <?php } ?>
                            </ul>
                        </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="ld-banner">
            <div class="container">
                <div class="ld-banner-box">
                    <h2 class="ld-h2title">Tăng thu nhập với Taichua.com</h2>
                    <p class="ld-notetitle">1 bài đăng = <strong>5000vnd</strong> 1 lượt tải = <strong>10vnd</strong></p>
                    <p class="ld-register"><?= Html::a('Đăng ký', ['site/signup'], ['class' => 'url']) ?></p>
                </div>
            </div>
        </div>
    </header>
    
    <?= $content ?>
    
    <?php if (Yii::$app->controller->id != 'site' || Yii::$app->controller->action->id != 'search') { ?> 
    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <img src="images/logo.png" alt="" />
                    <div class="small-menu">
                        <p>Đơn vị chủ quản: CÔNG TY TNHH GOS<p>
                        <p>Email: <a href="mailto:Contact@vngos.com">Contact@vngos.com</a></p>
                        <ul>
                            <li><a href="/gioi-thieu">Giới thiệu</a></li>
                            <li><a href="/chinh-sach">Chính sách</a></li>
                            <li><a href="/quang-cao">Quảng cáo</a></li>
                        </ul>
                    </div>

                </div>

                <div class="col-sm-4">
                    <h1>Hỗ trợ</h1>
                    <p>Địa chỉ: 36 Thống Nhất P.10 Gò Vấp<p>
                    <p>Email: <a href="mailto:hotro@vngos.com">hotro@vngos.com</a></p>
					<p>Hotline: <span style="color:#1198b6">08.6890.0837</span></p>
                </div>
                
                <div class="col-sm-4">
                    <?php
                    $references = References::find()->all();
                    if (isset($references) && is_array($references) && count($references) > 0) {
                        $cla = count($references);
                        $numonelist = 5;
                        $num = ceil($cla/$numonelist);
                    ?>
                    <h1>Liên kết</h1>
                    <?php 
                    for($i = 1; $i <= $num; $i++){
                        $numsv = $i * $numonelist;
                        $numst = (($i - 1) * $numonelist) + 1;
                        if ($cla < $numsv){
                            $numsv = $cla;
                        }
                    ?>
                    <ul class="col-sm-6">
                        <?php 
                        for($j = $numst; $j <= $numsv; $j++){
                            echo '<li>' . Html::a($references[$j-1]->keyword, $references[$j-1]->link) . '</li>';
                        }
                        ?>
                    </ul>
                    <?php
                    }
                    ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </footer><!-- end #footer -->
    <?php } ?>

</div>

<?php $this->endBody() ?>

<?= $this->registerJsFile("/js/jqueryui.js") ?>
<?= $this->registerJsFile("/js/bootstrap.min.js") ?>
<?= $this->registerJsFile("/js/jquery.bxslider.min.js") ?>

<?= $this->registerJsFile("/js/countdown.js") ?>
<?= $this->registerJsFile("/js/wow.min.js") ?>
<?= $this->registerJsFile("/js/appear.js") ?>
<?= $this->registerJsFile("/js/jscroll.js") ?>
<?= $this->registerJsFile("/js/scroll.js") ?>
<?= $this->registerJsFile("/js/jquery.datetimepicker.js") ?>
<?= $this->registerJsFile("/js/core.js") ?>

<script type="text/javascript">
    $(document).ready(function () {
        new WOW().init();
        var isMobile = false;
        function is_mobile() {
            var agents = ['android', 'webos', 'iphone', 'ipad', 'blackberry', 'Android', 'webos', , 'iPod', 'iPhone', 'iPad', 'Blackberry', 'BlackBerry'];
            var ismobile = false;
            for (i in agents) {
                if (navigator.userAgent.split(agents[i]).length > 1)
                    ismobile = true;
            }
            return ismobile;
        }
        function number(num, content, target, duration) {
            if (duration) {
                var count = 0;
                var speed = parseInt(duration / num);
                var interval = setInterval(function () {
                    if (count - 1 < num) {
                        target.html(count);
                    } else {
                        target.html(content);
                        clearInterval(interval);
                    }
                    count++;
                }, speed);
            } else {
                target.html(content);


            }
        }

        function stats(duration) {
            jQuery('.stats .num, .stats-alt .num').each(function () {
                var container = jQuery(this);
                var num = container.attr('data-num');
                var content = container.attr('data-content');
                number(num, content, container, duration);
            });
        }
        if (isMobile == false) {
            var $i = 1;
            $('.stats, .stats-alt').appear().on('appear', function () {
                if ($i === 1) {
                    stats(300);
                }
                $i++;
            });
        }
    });
</script>

<script type="text/javascript">
if (window.location.hash == '#_=_'){
    window.location.hash = '';
}   
    
$(document).ready(function(){
    $('.slider4').bxSlider({
        slideWidth: 188,
        minSlides: 2,
        maxSlides: 6,
        moveSlides: 1,
        slideMargin: 8,
        pager: false,
        auto: true
    });
    
    $('#member-birthday, #member-identity_day, #manageform-from, #manageform-to, \n\
        #manageblogform-from, #manageblogform-to, #managetransactionform-from, #managetransactionform-to')
        .datetimepicker({
    	lang: 'vi',
        timepicker: false,
    	format:'Y-m-d',
        scrollMonth: false,
        scrollTime: false,
        scrollInput: false,
    });
    
    var mintime = function(currentDateTime) {
        var now = new Date();
        // 'this' is jquery object datetimepicker
        this.setOptions({
            minTime: now.getHours() + ':' + now.getMinutes()
        });
    };
    
    $('.taichua-timepicker').datetimepicker({
    	lang: 'vi',
        timepicker: true,
    	format:'Y-m-d H:i',
        formatDate: 'Y-m-d',
        formatTime: 'H:i',
        step: 5,
        scrollMonth: false,
        scrollTime: true,
        scrollInput: false,
        minDate: '-1970/01/02',
        onChangeDateTime: mintime,
        onShow: mintime,
        validateOnBlur: false,
    });
    
    $('ul.rating li').mouseenter(function(){
        var $lis = $(this).siblings("li").andSelf();
        var id   = $(this).index();
        $lis.slice(0, id + 1).addClass("starchose");
    });
    
    $('ul.rating li').mouseleave(function(){
        var $lis = $(this).siblings("li").andSelf();
        var id   = $(this).index();

        $lis.removeClass("starchose");
    });
    
    $('ul.rating li').on('click', function(){
        var $lis = $(this).siblings("li").andSelf();
        var id   = $(this).index();
        var value = id + 1;
        var link_id = $(this).data('link');
        $.ajax({
            type: "POST",
            url: "/link/rating",
            data: {
                value: value,
                link_id: link_id
            },
            dataType: "json",
            timeout: 30000,
            beforeSend: function (xhr) {
                showLoading();
            },
            success: function (response) {
                if (response.status === 1) {
                    $lis.removeClass("starchosed");
                    $lis.slice(0, id + 1).addClass("starchosed");
                    finishAjax('show-rating-'+link_id, response.show);
                    finishAjax('count-rating-'+link_id, response.msg);
                    return true;
                } else {
                    alert(response.msg);
                    return false;
                }
            },
            complete: function (jqXHR, textStatus ) {
                hideLoading();
            }
        });
    });
   
});

window.fbAsyncInit = function() {
FB.init({
  appId      : '934941633244094',
  xfbml      : true,
  version    : 'v2.5'
});
};

(function(d, s, id){
 var js, fjs = d.getElementsByTagName(s)[0];
 if (d.getElementById(id)) {return;}
 js = d.createElement(s); js.id = id;
 js.src = "//connect.facebook.net/en_US/sdk.js";
 fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-69574368-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
<?php $this->endPage() ?>
