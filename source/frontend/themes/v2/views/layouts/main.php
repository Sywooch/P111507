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
	<?= $this->render('fb-script') ?>
	<?= $this->render('tw-script') ?>
    
	<!-- <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=dKazp1IWh910mh" style="display:none" height="1" width="1" alt="" /></noscript> -->
	<!-- End Alexa Certify Javascript -->  
	
	<!-- Style CSS -->
    <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" /> -->
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/style.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/style-dev.css" />
    <link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/responsive.css" />
	<link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/token-input.css" />
	<link rel="stylesheet" type="text/css" href="<?=$base_url?>/css/tooltipster.bundle.css" />
	<link href="<?=$base_url?>/css/jquery.qtip.css" rel="stylesheet" type="text/css">
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
    <script  type="text/javascript" src="<?=$base_url?>/js/lodash.core.min.js"></script>
    <script  type="text/javascript" src="<?=$base_url?>/js/jquery.tokeninput.js"></script>
	<script type="text/javascript" src="<?=$base_url?>/js/tooltipster.bundle.js"></script>
	
</head>

<body>
	<?php $this->beginBody() ?>
	<div id="wrapper">
		<?= $this->render('header'); ?>
		<?=$content?>

		<footer id="footer" class="site-footer">
			<div class="container">
				
			</div><!-- .container -->
		</footer><!-- site-footer -->
	</div><!-- #wrapper -->

	<!-- POPUP -->
	<?= $this->render('popup-report')?>
	<?php $this->endBody() ?>
	<script type="text/javascript">
       $.ajaxSetup({
          data: <?= \yii\helpers\Json::encode([
              \yii::$app->request->csrfParam => \yii::$app->request->csrfToken,
          ]) ?>
      });
    </script>
	<script type="text/javascript" src="//cdn.jsdelivr.net/qtip2/3.0.3/jquery.qtip.min.js"></script>
	<script  type="text/javascript" src="<?=$base_url?>/js/qtip-main.js"></script>
</body>
</html>
<?php $this->endPage() ?>