<?php
/* @var $this yii\web\View */
/* @var $model \frontend\models\SearchForm */

use yii\helpers\Html;
use yii\web\View;
use frontend\assets\AppAsset;
AppAsset::register($this);
$baseUrl = Yii::getAlias('@webDomain');
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-language" content="vi,en" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
	<link href="<?=$baseUrl?>/skins/css/-3-main.css9c3c9b20d440fb22.css" rel="stylesheet" type="text/css" />
	<title>Fine Art - Quora</title>
	<meta name="robots" content="noindex, follow"/>
<?php 
$jsOnpage = <<<JS
	$( "#__w2_GtfSUcI_input" ).focus(function() {	
		$("#__w2_CyYKd0m_header").addClass("search_focused");
		$("#__w2_gmGYcKO_body_blur").addClass("lookup_bar_modal_overlay");
	});
	$( "#__w2_CyYKd0m_header").blur(function() {	
		$("#__w2_CyYKd0m_header").removeClass("search_focused");
		$("#__w2_gmGYcKO_body_blur").removeClass("lookup_bar_modal_overlay");
	});
	$("#__w2_X9OPf4c_add_details").click(function(){
		$("#__w2_GtfSUcI_details_wrapper").removeClass("hidden");
		$("#__w2_X9OPf4c_add_details").addClass("hidden");
		$("#__w2_X9OPf4c_remove_details").removeClass("hidden");
	});
	$("#__w2_gmGYcKO_body_blur").click(function(){
		$("#__w2_gmGYcKO_body_blur").removeClass("lookup_bar_modal_overlay");
		$("#__w2_CyYKd0m_header").removeClass("search_focused");
		$("#__w2_X9OPf4c_add_details").removeClass("hidden");
		$("#__w2_X9OPf4c_remove_details").addClass("hidden");
	});
	$("#__w2_X9OPf4c_remove_details").click(function(){
		$("#__w2_GtfSUcI_details_wrapper").addClass("hidden");
		$("#__w2_X9OPf4c_add_details").removeClass("hidden");
		$("#__w2_X9OPf4c_remove_details").addClass("hidden");
	});
	
	$("#__w2_Aq3Rqgn_doc .doc").focus(function(){
		$("#__w2_IpTXDsG_editor").addClass("focused");
	}).blur(function(){
		$("#__w2_IpTXDsG_editor").removeClass("focused");
	});
	$("#__w2_Aq3Rqgn_doc .doc").keypress(function(){
		$("#__w2_Aq3Rqgn_doc .doc").removeClass("empty");
	});
	
	
	
	$( document ).ready(function() 
	{
		var options = {
			placement: function (context, element) {
				var position = $(element).position();
				console.log(position.top - $(window).scrollTop());
				if (position.top - $(window).scrollTop() < 110){
					return "bottom";
				}
				return "top";
			}, trigger: "hover"
		};
		
		var originalLeave = $.fn.popover.Constructor.prototype.leave;
		$.fn.popover.Constructor.prototype.leave = function(obj){
		  var self = obj instanceof this.constructor ?
			obj : $(obj.currentTarget)[this.type](this.getDelegateOptions()).data('bs.' + this.type)
		  var container, timeout;

		  originalLeave.call(this, obj);

		  if(obj.currentTarget) {
			container = $(obj.currentTarget).siblings('.popover')
			timeout = self.timeout;
			container.one('mouseenter', function(){
			  //We entered the actual popover – call off the dogs
			  clearTimeout(timeout);
			  //Let's monitor popover content instead
			  container.one('mouseleave', function(){
				$.fn.popover.Constructor.prototype.leave.call(self, self);
			  });
			})
		  }
		};
		$('body').popover({ 
			selector: '[data-popover]', 
			trigger: 'hover', 
			placement: 'auto',
			delay: {show: 50, hide: 400},
			content: function() {	
			  return $('#' + $(this).data('tip')).html();
			}
		})
		
	});
	
JS;
$this->registerJS($jsOnpage,View::POS_END);
?>
</head>

<body class='web_page pretty_blogs lang_en custom_type_15 gating-comment_bios-off gating-comment_upvoters-off gating-qtext2_beta_group-off gating-feed_desktop_modal-off'>
<?php $this->beginBody() ?>
   
    <div class="InteractionModeBanner" id="__w2_nsvnbcD_banner">
        <div id="__w2_nsvnbcD_message">This page may be out of date. 
		<span class="hidden" id="__w2_nsvnbcD_draftable">
			<a href="#" id="__w2_nsvnbcD_resume">Save your draft</a> before refreshing this page.
		</span>
		<span id="__w2_nsvnbcD_not_draftable">Submit any pending changes before refreshing this page.</span>
        </div>
    </div>
    <div class="ErrorBanner" id="__w2_iNNqX4h_banner">
        <div id="__w2_iNNqX4h_message">
			<span id="__w2_iNNqX4h_text"></span> 
			<a href="#" id="__w2_iNNqX4h_hide">Hide this message</a>.
		</div>
    </div>
    <div id="__w2_modal_container_">
        <a class="modal_fixed_close hidden" id="__w2_modal_close_"></a>
        <div class="modal_overlay hidden" id="__w2_modal_overlay_">
            <div class="modal_wrapper normal" id="__w2_modal_wrapper_"></div>
        </div>
    </div>
    <div id="pYYxyi"></div>
	<!--BEGIN CONTENT -->
    <?=$content?>
	<!--END CONTENT -->
        <div class="__live_spinner hidden" id="__w2_UGrGqzj_loading">
			<div class="__live_spinner_indicator" id="__w2_UGrGqzj_spinner"></div>
		</div>
		<div class="PMsgContainer" id="__w2_UvgzxIM_pmsg_container"></div>
		<div id="PzZlvP"></div>
		<div class="tiny_swf">
			<div id="__w2_ljI2UxY_flash"></div>
		</div>
		<?php $this->endBody();?>
   </body>
</html>
<?php $this->endPage() ?>
<!--perf-->

