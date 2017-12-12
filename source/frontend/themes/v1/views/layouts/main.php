<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\widget\WidgetNavbar;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Quickrep.vn">
	<meta name="msvalidate.01" content="47C45FBF78303C8A8BF135873333B196" />
	<meta name="p:domain_verify" content="3d28a857bbf14ad385268927187f8a1d"/>
    <?php
        AppAsset::register($this);
        $theme = $this->theme;
        $base_url = $theme->baseUrl;
		$home_url = Yii::$app->homeUrl;
    ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <!-- Start Alexa Certify Javascript -->
	<script type="text/javascript">
	_atrk_opts = { atrk_acct:"dKazp1IWh910mh", domain:"quickrep.vn",dynamic: true};
	(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
	</script>
	<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=dKazp1IWh910mh" style="display:none" height="1" width="1" alt="" /></noscript>
	<!-- End Alexa Certify Javascript -->  

    <!-- <title>Modern Business - Start Bootstrap Template</title> -->
    <!-- Bootstrap Core CSS -->
    <link href="<?=$base_url?>/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?=$base_url?>/css/helper.css" rel="stylesheet">
    <link href="<?=$base_url?>/css/styles.css" rel="stylesheet">
    <link href="<?=$base_url?>/css/jquery.bxslider.css" rel="stylesheet" />
    <!--Tam add-->
    <link href="//cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css" rel="stylesheet" type="text/css">
    <link href="<?=$base_url?>/css/keyframes.css" rel="stylesheet" type="text/css">
    <link href="<?=$base_url?>/css/tam.css" rel="stylesheet" type="text/css">
    <link href="<?=$base_url?>/css/tinh.css" rel="stylesheet" type="text/css">
    <link href="<?=$base_url?>/css/responsive.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/css/base/jquery-ui.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="<?=$base_url?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="<?=$base_url?>/css/select2.css">
	<link href="https://select2.github.io/css/s2-docs.css" type="text/css" rel="stylesheet" >
	<link rel="stylesheet" href="<?=$base_url?>/css/token-input.css" type="text/css" />
    <link rel="stylesheet" href="<?=$base_url?>/css/token-input-facebook.css" type="text/css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.css">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <?php $this->beginBody() ?>
    <!-- Navigation -->
    <?= WidgetNavbar::widget() ?>

    <nav class="tab-mobile-home hide_desktop">
        <div class="nav-mobile">
            <div class="nav-header">
                <form class="form-search-mobile" id="form-search-mobile">
                    <div class="input-group search-bar-mobile">
                        <a href="index.php" class="input-group-addon"><img src="<?=$base_url?>/images/logo-quora-mobile.svg"></a>     
                        <input id="search" type="text" class="form-control" name="search" placeholder="Đặt câu hỏi cùng Quickrep" data-toggle="dropdown">
                    </div>
                </form>
                <ul class="nav-list-mobile">
                    <li class="active"><a href="<?=$home_url?>">Mới nhất</a></li>
                    <li><a href="<?=Url::to(["answer/index"])?>"><?=Yii::t('frontend', 'Answer')?></a></li>
                    <li><a href="#">Thông báo</a></li>
                    <li><a href="#">Cá nhân</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="main-content">
        <?=$content?>
    </section>

    <!--MODAL DEFAULT -->

    <div class="modal custom-modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title"></h4>
        </div>
        <div class="modal-body">
          <div class="LoadingDots small">
              <div class="dot first"></div>
              <div class="dot second"></div>
              <div class="dot third"></div>
           </div>
        </div>
        <div class="modal-footer">
          <div class="modal_actions">
            <span class="text_links">
              <a class="modal_cancel modal_action" data-dismiss="modal" href="#"> Cancel</a>
            </span>
            <button type="button" class="btn btn-primary" style="margin-left: 10px;">Confirm</button></div>
          </div>
        </div>
      </div><!-- /.modal-content -->
      </div>
    </div>  

     <!-- Modal notifications -->
    <div class="modal custom-modal fade" id="modal-turn-on-notifications" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog " role="document">
        <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Turn On Notifications</h4>
        </div>
        <div class="modal-body">
          <div class="LoadingDots small hide">
              <div class="dot first"></div>
              <div class="dot second"></div>
              <div class="dot third"></div>
           </div>
           <p>You will receive notifications about new answers from this person. Are you sure you want to turn on notifications?</p>
        </div>
        <div class="modal-footer">
          <div class="modal_actions">
            <span class="text_links">
              <a class="modal_cancel modal_action" data-dismiss="modal" href="#"> Cancel</a>
            </span>
            <button type="button" class="btn btn-primary" style="margin-left: 10px;">Confirm</button></div>
          </div>
        </div>
      </div><!-- /.modal-content -->
      </div>
    </div>   

     <!-- Modal More -->
    <div class="modal fade" id="modal-read-more" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog  modal-lg" role="document">

        <div class="modal-content">
          <button type="button" class="btn btn-default modal-close" data-dismiss="modal">X</button>
          <div class="modal-body">
             <div class="LoadingDots small">
                <div class="dot first"></div>
                <div class="dot second"></div>
                <div class="dot third"></div>
             </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal What are your interests? -->
    <div class="modal fade" id="modal-your-interests" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog  modal-lg" role="document">

        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">What are your interests?</h4>
          </div>
          <div class="modal-body">
                <div class="selector_spinner fade-out">
                    <div class="LoadingDots tiny">
                        <div class="dot first"></div>
                        <div class="dot second"></div>
                        <div class="dot third"></div>
                    </div>
                </div>
          </div>
          <div class="modal-footer no-border-bottom hide">
            <button type="button" id="topic_interest_button" class="btn btn-primary 
            submit_button_disabled button-disable">10 More Topics to Continue</button>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal What are your interests? -->
    <div class="modal fade" id="modal-your-selector" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog  modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">What topics do you know about? </h4>
                    <h5>Add your area of study, hobbies, skills and other interests.</h5>
                </div>
                <div class="modal-body">
                    <div class="selector_spinner fade-out">
                        <div class="LoadingDots tiny">
                        <div class="dot first"></div>
                        <div class="dot second"></div>
                        <div class="dot third"></div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer no-border-bottom hide">
                    <button type="button" id="topic_selector_button" 
                    class=" btn btn-primary ">
                    Continue
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!--AJAX CALLING-->
    <div class="ajax-spiner fade-out hide" >
        <div class="ajax-spiner_indicator" >
            <div class="LoadingDots small">
                <div class="dot first"> </div>
                <div class="dot second"></div>
                <div class="dot third"></div>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="<?=$base_url?>/js/jquery.js"></script>
    <script type="text/javascript">
       $.ajaxSetup({
          data: <?= \yii\helpers\Json::encode([
              \yii::$app->request->csrfParam => \yii::$app->request->csrfToken,
          ]) ?>
      });
    </script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-99294926-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-99294926-1');
</script>


        <!-- Bootstrap Core JavaScript -->
    <script src="<?=$base_url?>/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        var btn = $.fn.button.noConflict(); // reverts $.fn.button to jqueryui btn
        $.fn.btn = btn ;
    </script>
    <script src="<?=$base_url?>/js/main.js"></script>
    <script src="<?=$base_url?>/js/jquery.bxslider.min.js"></script>
    <script src="//cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
    <script src="<?=$base_url?>/js/qtip-main.js"></script>
    <script src="<?=$base_url?>/js/custom-main.js"></script>
    <script src="<?=$base_url?>/js/tinh.js"></script>
	<script src="<?=$base_url?>/js/jquery.tokeninput.js"></script>
	<link rel="stylesheet" href="http://cdn.quilljs.com/1.2.4/quill.snow.css"/>
	<script src="https://cdn.rawgit.com/jackmu95/52b82e3ec79a2e2a30ddf37e71846711/raw/e1742e6e1b7ab73807c313c04e7b63f96f15c43b/quill.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/KaTeX/0.7.1/katex.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>
	<script>hljs.initHighlightingOnLoad();</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.2.0/jquery-confirm.min.js"></script>
</body>
<?php $this->endBody() ?>
</html>
<?php $this->endPage() ?>