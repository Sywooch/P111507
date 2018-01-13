<?php 
 use yii\helpers\Html;
 use yii\helpers\Url;
 use yii\web\View;
 use frontend\widget\WidgetProfilesEmployment;
 use frontend\widget\WidgetProfilesEducation;
 use frontend\widget\WidgetProfilesLocation;
?>
<div class="profile-sidebar">
<aside class="widget widget-credentials">
	<h3 class="widget-title">Công việc & Học vấn <?php if($primaryFlag){?><a href="#">Sửa</a><?php } ?></h3>
	<div class="widget-content">
		<ul>
			<li class="widget-employment" data-device='profile-sidebar'>
				<?php if(empty($profilesEmployment) && $primaryFlag ){?>
					<a href="javascript:;">
						<i class="fa fa-briefcase" aria-hidden="true"></i>
						Thêm một nơi làm việc 
					</a>
				<?php } elseif(!empty($profilesEmployment)) {?>
					<a href="javascript:;">
						<i class="fa fa-briefcase" aria-hidden="true"></i>
						<?=$profilesEmployment->position?> tại <?=$profilesEmployment->topics->title?>
						
					</a>
				<?php }?>
			</li>
			
			<li class="widget-education" data-device='profile-sidebar'>
				<?php if(empty($profilesEducation)  && $primaryFlag ){?>
					<a href="javascript:;">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						Thêm một kỹ năng nghề nghiệp 
					</a>
				<?php } elseif(!empty($profilesEducation)) {?>
					<a href="javascript:;">
						<i class="fa fa-graduation-cap" aria-hidden="true"></i>
						<?=$profilesEducation->degree_type?>; 
						<?php if(!empty($profilesEducation->concentration)){ 
							echo $profilesEducation->topicsconcentration->title.' ,';}
						?>
						<?php if(!empty($profilesEducation->secondary_concentration)){ 
							echo $profilesEducation->topicsecondaryconcentration->title.' ,';}
						?>
						<?php if(!empty($profilesEducation->school)){ 
							echo $profilesEducation->topicsschool->title;}
						?>
					</a>		
				<?php }?>
			</li>
			
			<li class="widget-location" data-device='profile-sidebar'>
				<?php if(empty($profilesLocation)  && $primaryFlag  ){?>
				<a href="javascript:;">
					<i class="nc-icon-mini location_pin"></i>
					Thêm một địa chỉ của bạn
				</a>
				<?php } elseif(!empty($profilesLocation)) {?>
				<a href="javascript:;">
					<i class="nc-icon-mini location_pin"></i>
					Sống tại <?=$profilesLocation->topics->title?>
				</a>	
				<?php }?>
			</li>
		</ul>
		
		<div class="popup-employment-bg"></div>
		<div class="popup-employment loading"></div>
		
		<!-- .profiles Education -->
		<div class="popup-education-bg"></div>
		<div class="popup-education loading"></div>
		
		<!-- .profiles Location -->
		<div class="popup-location-bg"></div>
		<div class="popup-location loading"></div>
		
   </div>
</aside>
<!-- .widget-question -->
<?php
if($primaryFlag){
$url_create_topics 	= Url::to(['/ajax/create-topics']); 
$url_search_topics 	= Url::to(['/ajax/search-topics-profiles']);
$url_ajax_location 	= Url::to(['/ajax/user-load-location-form']);
$url_load_form_education 	= Url::to(['/ajax/user-load-education-form']);
$url_load_form_employment 	= Url::to(['/ajax/user-load-employment-form']); 
$url_add_location 	= Url::to(['/ajax/add-user-location']);
$url_add_education	= Url::to(['/ajax/add-user-education']); 
$url_add_employment = Url::to(['/ajax/add-user-employment']);

/** .Json Data Location **/
$dataJsonLocation = "";
if(!empty($dataChoosedLocation))
{
	$dataJsonLocation = json_encode($dataChoosedLocation);
}

/** .Json Data Education **/
$dataJsonEducationSchool = "";
if(!empty($dataChoosedEducationSchool))
{
	$dataJsonEducationSchool = json_encode($dataChoosedEducationSchool);
}

$dataJsonEducationConcentration = "";
if(!empty($dataChoosedEducationConcentration))
{
	$dataJsonEducationConcentration= json_encode($dataChoosedEducationConcentration);
}

$dataJsonEducationSecondaryConcentration = "";
if(!empty($dataChoosedEducationSecondaryConcentration))
{
	$dataJsonEducationSecondaryConcentration = json_encode($dataChoosedEducationSecondaryConcentration);
}

/** .Json Data Employment **/
$dataJsonEmploymentCompany = "";
if(!empty($dataChoosedEmploymentCompany))
{
	$dataJsonEmploymentCompany = json_encode($dataChoosedEmploymentCompany);
}

$js = <<<js
	$('body').on('click','.btn-widget-employment',function(e){
		e.preventDefault();
	    $('.popup-employment-bg').fadeToggle();
	    $('.popup-employment').fadeToggle();
	});
	$('body').on('click','.btn-widget-education',function(e){
		e.preventDefault();
	    $('.popup-education-bg').fadeToggle();
	    $('.popup-education').fadeToggle();
	});
	$('body').on('click','.btn-widget-location',function(e){
		e.preventDefault();
	    $('.popup-location-bg').fadeToggle();
	    $('.popup-location').fadeToggle();
	});
	
	function callTokenInput(idInput,urlAjax,jsonPrePopulate,deviceClass='profile-sidebar')
	{
		$("body").find("."+deviceClass).find("#"+idInput).tokenInput(urlAjax,{
			onResult: function (results) {
				$.each(results, function (index, value) {
					value.name = value.title;
				});
				return results;
			},
			tokenLimit: 1,
			prePopulate: jsonPrePopulate,
			noResultsText: " <a id='add-topic' data-ajax-addtopic='"+idInput+"' href='javascript:;'> Thêm topic</a>",
			resultsFormatter: function(item){ return "<li>" + "<img src='" + item.images + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.title + "</div><div class='email'>(" + item.user_follow + ")</div></div></li>" },			
		});	
	}
	
	$("body").on("click","#add-topic", function(){
		var element = $(this).data("ajax-addtopic");
		var topic 	= document.getElementById("token-input-"+element+"").value;
		var dta 	= {
			action  : 'no-action', 
			key 	: topic
		};
		$.ajax({ 
            url: '$url_create_topics',
            type: 'POST',
            data: dta
        }).done(function(result) 
		{
			var rs = $.parseJSON(result);
        	$('#'+element+'').tokenInput("add", {id: rs.id, name: rs.title});
            return false;
        });
        return false;
	});

        $('.widget-location').on('click', function () {
			var deviceClass  = $(this).data("device");	
			$.ajax({ 
				url : '$url_ajax_location',
				type: 'POST',
				data: {}
			}).done(function(response) 
			{
				$('body').find('.'+deviceClass).find('.popup-location-bg').fadeToggle();
				$('body').find('.'+deviceClass).find('.popup-location').fadeToggle();
				delay(function() {
					$('body').find('.'+deviceClass).find('.popup-location').removeClass('loading');
					$('body').find('.'+deviceClass).find('.popup-location').html(response);
					callTokenInput(
						'location_position',
						'$url_search_topics',
						[$dataJsonLocation],
						deviceClass
					);
					
				}, 2000 );
			});
	    });
		
		
	$("body").on("click","#add-location", function(){
		var location_position 			=  $('#location_position').tokenInput("get");
		if(!jQuery.isEmptyObject(location_position))
		{
			var location_id_position 		= location_position[0].id;
		}
		var location_startyear 				= $('#location_startyear option:selected').val();
		var location_endyear 				= $('#location_endyear option:selected').val();
		var location_current 				= 0;
		
		if(location_endyear < location_startyear)
		{
			alert("Ngày kết thúc không thể nhỏ hơn ngày bắt đầu.");
			return false;
		}
		if($('#location_current').is(":checked"))
		{
			location_current = 1;
		}
		var dta 	= {
			action  : 'no-action', 
			location_id_position 		: location_id_position,
			location_startyear			: location_startyear,
			location_endyear			: location_endyear,
			location_current			: location_current
		};
		$.ajax({ 
            url: '$url_add_location',
            type: 'POST',
            data: dta
        }).done(function(result) 
		{
			var rs = $.parseJSON(result);
			location.reload();
        });
        return false;
	});
	
	// JQUEYR FOR EDUCATION
	
	 /*  [ Widget Education ] - - - - - - - - - - - - - - - - - - -  */
    $('.widget-education').on('click', function () {
		var deviceClass  = $(this).data("device");	
		$.ajax({ 
			url : '$url_load_form_education',
			type: 'POST',
			data: {}
		}).done(function(response) 
		{
			$('body').find('.'+deviceClass).find('.popup-education-bg').fadeToggle();
			$('body').find('.'+deviceClass).find('.popup-education').fadeToggle();
			delay(function() {
				$('body').find('.'+deviceClass).find('.popup-education').removeClass('loading');
				$('body').find('.'+deviceClass).find('.popup-education').html(response);
				callTokenInput(
					'education_school',
					'$url_search_topics',
					[$dataJsonEducationSchool],
					deviceClass
				);
				callTokenInput(
					'education_concentration',
					'$url_search_topics',
					[$dataJsonEducationConcentration],
					'deviceClass'
				);
				callTokenInput(
					'education_secondary_concentration',
					'$url_search_topics',
					[$dataJsonEducationSecondaryConcentration],
					deviceClass
				);
			}, 2000 );
		});
	    
	});

	$("body").on("click","#add-education", function(){
			var education_school 			=  $('#education_school').tokenInput("get");
			var education_concentration		=  $('#education_concentration').tokenInput("get");
			var education_secondary_concentration	=  $('#education_secondary_concentration').tokenInput("get");
			var education_degree_type		=  $('#education_degree_type').val();
			var education_graduation_year	=  $('#education_graduation_year').val();
			if(!jQuery.isEmptyObject(education_school))
			{
				var education_id_school = education_school[0].id;
			}
			if(!jQuery.isEmptyObject(education_concentration))
			{
				var education_id_concentration = education_concentration[0].id;
			}
			if(!jQuery.isEmptyObject(education_secondary_concentration))
			{
				var education_id_secondary_concentration = education_secondary_concentration[0].id;
			}
			var dta 	= {
				action  : 'no-action', 
				education_school 			: education_id_school,
				education_concentration		: education_id_concentration,
				education_secondary_concentration	: education_id_secondary_concentration,
				education_degree_type				: education_degree_type,
				education_graduation_year	: education_graduation_year
			};
			$.ajax({ 
				url: '$url_add_education',
				type: 'POST',
				data: dta
			}).done(function(result) 
			{
				var rs = $.parseJSON(result);
				location.reload();
			});
			return false;
	});	
	
	
	// EMPLOYMENT 
		$('.widget-employment').on('click', function () {
			var deviceClass  = $(this).data("device");
			$.ajax({ 
				url : '$url_load_form_employment',
				type: 'POST',
				data: {}
			}).done(function(response) 
			{
				console.log($dataJsonEmploymentCompany);
				$('body').find('.'+deviceClass).find('.popup-employment-bg').fadeToggle();
				$('body').find('.'+deviceClass).find('.popup-employment').fadeToggle();
				delay(function() {
					$('body').find('.'+deviceClass).find('.popup-employment').removeClass('loading');
					$('body').find('.'+deviceClass).find('.popup-employment').html(response)
					callTokenInput(
						'employment_company',
						'$url_search_topics',
						[$dataJsonEmploymentCompany],
						deviceClass
					);
				}, 2000 );
			});
	    });
	
	$("body").on("click","#add-employment", function(){
		var employment_position 	= $('#employment_position').val();
		var toki 					=  $('#employment_company').tokenInput("get");
		if(!jQuery.isEmptyObject(toki))
		{
			var employment_company 	= toki[0].id;
		}		
		var employment_startyear 	= $('#employment_startyear').val();
		var employment_endyear 		= $('#employment_endyear').val();
		var employment_i_current_work_here 	= 0;
		if(employment_endyear < employment_startyear)
		{
			alert("Ngày kết thúc không thể nhỏ hơn ngày bắt đầu.");
		}
		if($('#employment_i_current_work_here').is(":checked"))
		{
			employment_i_current_work_here = 1;
		}
		var dta 	= {
			action  : 'no-action', 
			employment_position 			: employment_position,
			employment_company				: employment_company,
			employment_startyear			: employment_startyear,
			employment_endyear				: employment_endyear,
			employment_i_current_work_here	: employment_i_current_work_here
		};
		$.ajax({ 
            url: '$url_add_employment',
            type: 'POST',
            data: dta
        }).done(function(result) 
		{
			location.reload();
        });
        return false;
	});	
js;
$this->registerJs($js);
}
?>