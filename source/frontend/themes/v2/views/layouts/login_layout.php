<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\widget\WidgetNavbar;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

    <!-- Style CSS -->
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/style-dev.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/responsive.css" />

    <!-- jQuery -->    
    <script type="text/javascript" src="<?=$base_url?>/js/jquery-1.10.2.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/js/popper.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/owl-carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/jscroll/jquery.jscroll.min.js"></script>
    <script type="text/javascript" src="<?=$base_url?>/libs/froala/js/froala_editor.js"></script>
    <!-- orther script -->
    <script  type="text/javascript" src="<?=$base_url?>/js/main.js"></script>
    <script  type="text/javascript" src="<?=$base_url?>/js/ajax.js"></script>
</head>

<body>
    <?= $content ?>
</body>
</html>
