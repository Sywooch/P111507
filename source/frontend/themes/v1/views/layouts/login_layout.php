<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $content string */
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        $theme = $this->theme;
        $base_url = $theme->baseUrl;
    ?>
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<meta name="p:domain_verify" content="3d28a857bbf14ad385268927187f8a1d"/>
    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?=$base_url?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?=$base_url?>/css/helper.css" rel="stylesheet">
    <link href="<?=$base_url?>/css/styles.css" rel="stylesheet">
    
    <!--Tam add-->
    <link href="//cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.css" rel="stylesheet" type="text/css">
    <link href="<?=$base_url?>/css/keyframes.css" rel="stylesheet" type="text/css">
    <link href="<?=$base_url?>/css/tam.css" rel="stylesheet" type="text/css">
    <link href="<?=$base_url?>/css/tinh.css" rel="stylesheet" type="text/css">
    <link href="<?=$base_url?>/css/responsive.css" rel="stylesheet">

	<!-- Start Alexa Certify Javascript -->
<script type="text/javascript">
_atrk_opts = { atrk_acct:"dKazp1IWh910mh", domain:"quickrep.vn",dynamic: true};
(function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
</script>
<noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=dKazp1IWh910mh" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript --> 

    <!-- Custom Fonts -->
    <link href="<?=$base_url?>/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
<?php $this->beginBody() ?>
    <section class="bg-login">
        <div class="container content-login">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-quora"></div>
                    <h2 class="title-login">Nơi chia sẻ kiến ​​thức và hiểu rõ hơn về thế giới</h2>
                </div>
            </div>
            <?=$content?>
        </div>
    </section>
    <script src="<?=$base_url?>/js/jquery.js"></script>
    <script src="<?=$base_url?>/js/main.js"></script>
    <script src="<?=$base_url?>/js/jquery.bxslider.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?=$base_url?>/js/bootstrap.min.js"></script>

    <!--tam add-->
    <script src="//cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
    <script src="<?=$base_url?>/js/qtip-main.js"></script>
    <script src="<?=$base_url?>/js/custom-main.js"></script>
<?php
    $this->endBody() ?>
</body>

</html>
<?php $this->endPage() ?>