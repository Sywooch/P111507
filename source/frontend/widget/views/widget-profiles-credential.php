<?php 
 use yii\helpers\Html;
 use yii\helpers\Url;
 use yii\web\View;
?>
					<ul class="list-add-profile">
						<?php 
							if(empty($profilesCredential) && empty($profilesEducation) && empty($profilesLocation)  && ($uid!=Yii::$app->user->identity->id))
							{
								echo "<li>$fullName chưa điền vào hồ sơ của họ.</li>";
							}
							else
							{
						?>

						<li class="add-employment">
							<?php if(empty($profilesCredential) && ($uid==Yii::$app->user->identity->id) ){?>
							<!-- add employment -->
							<div class="AddCredentialListItem AboutListItem AddWorkCredentialListItem">
								<div class="list_item_icon"></div>
								<span class="main_text"><span id="mehQIX">
									<a class="EditCredentialModalLink CredentialModalLink" data-toggle="modal" data-target="#modalForm" href="#" id="__w2_VMgaCZ5_modal_link">
									<?=Yii::t('frontend', 'Add employment')?> 
									</a>
								</span></span>
							</div>
							<!-- end add employment -->
							<?php } elseif(!empty($profilesCredential)) {?>
							<!-- added -->
							<div class="CredentialListItem WorkCredentialListItem AboutListItem">
								<div class="list_item_icon"></div>
								<span class="main_text">
									<span id="zzejnC">
										<span class="UserCredential IdentityCredential">
										<?=$profilesCredential->position?> tại <?=$profilesCredential->topics->title?>
										</span>
									</span>
								</span>
							</div>
							<!-- end added -->
							<?php }?>
						</li>
						<li class="add-education">
							<?php if(empty($profilesEducation)  && ($uid==Yii::$app->user->identity->id) ){?>
								<div class="AddSchoolCredentialListItem AddCredentialListItem AboutListItem">
									<div class="list_item_icon"></div>
									<span class="main_text">
										<span id="fcziPs">
										<a class="EditCredentialModalLink CredentialModalLink" href="#" data-toggle="modal" data-target="#modalFormEducation" id="__w2_oZRJcGD_modal_link">
											<?=Yii::t('frontend', 'Add education')?>
										</a>
										</span>
									</span>
								</div>
							<?php } elseif(!empty($profilesEducation)) {?>
								<div class="CredentialListItem AboutListItem SchoolCredentialListItem">
								   <div class="list_item_icon"></div>
								   <span class="main_text">
										<span id="TreGfF">
											<span class="UserCredential IdentityCredential">
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
											</span>
										</span>
									</span>
									<br/>
									<span class="detail_text">Tốt nghiệp <?=$profilesEducation->graduation_year?></span>
								</div>
							<?php }?>
						</li>
						<li class="add-location">
							<?php if(empty($profilesLocation)  && ($uid==Yii::$app->user->identity->id)  ){?>
								<div class="AddCredentialListItem AddLocationCredentialListItem AboutListItem">
								   <div class="list_item_icon"></div>
								   <span class="main_text"><span id="fYbuQg">
									<a class="EditCredentialModalLink CredentialModalLink" data-toggle="modal" data-target="#modalFormLocation" href="#" id="__w2_O1RlLAT_modal_link">
									Thêm một địa chỉ của bạn
									</a></span></span>
								</div>
							<?php } elseif(!empty($profilesLocation)) {?>
								<div class="CredentialListItem LocationCredentialListItem AboutListItem">
								   <div class="list_item_icon"></div>
								   <span class="main_text"><span id="mForty"><span class="UserCredential IdentityCredential">Sống tại <?=$profilesLocation->topics->title?></span></span></span>
								</div>
							<?php }?>
						</li>
					<?php } ?>
					</ul>				

<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">Chỉnh sửa thông tin công việc</h3>
				<span id="text-login-msg">Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</span>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form class="form-horizontal">
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="employment_position"><?=Yii::t('frontend', 'Vị trí')?></label>
					<div class="col-sm-7">
					  <input type="text" class="text input_field" style="width: 317px;" id="employment_position" placeholder="Kế toán">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="employment_company"><?=Yii::t('frontend', 'Công ty / Tổ chức')?></label>
					<div class="col-sm-7"> 
						 <input type="text" class="form-control" id="employment_company" placeholder="Facebook">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="employment_startyear"><?=Yii::t('frontend', 'Bắt đầu năm')?></label>
					<div class="col-sm-7"> 
						<?php
						  // Sets the top option to be the current year. (IE. the option that is chosen by default).
						  $currently_selected = date('Y'); 
						  // Year to start available options at
						  $earliest_year = 1950; 
						  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
						  $latest_year = date('Y'); 
						  print '<select id="employment_startyear">';
						  // Loops over each int[year] from current year, back to the $earliest_year [1950]
						  foreach ( range( $latest_year, $earliest_year ) as $i ) {
							// Prints the option with the next year in range.
							print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
						  }
						  print '</select>';
						?>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="employment_endyear"><?=Yii::t('frontend', 'Kết thúc năm')?></label>
					<div class="col-sm-7"> 
						<?php
						  // Sets the top option to be the current year. (IE. the option that is chosen by default).
						  $currently_selected = date('Y'); 
						  // Year to start available options at
						  $earliest_year = 1950; 
						  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
						  $latest_year = date('Y'); 
						  print '<select id="employment_endyear">';
						  // Loops over each int[year] from current year, back to the $earliest_year [1950]
						  foreach ( range( $latest_year, $earliest_year ) as $i ) {
							// Prints the option with the next year in range.
							print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
						  }
						  print '</select>';
						?>
					</div>
				  </div>
				  <div class="form-group"> 
						<label class="col-md-5 control-label"><?=Yii::t('frontend', 'Tôi hiện đang làm việc tại đây')?></label>
						<div class="col-sm-7"> 
							<div class="checkbox">
							  <label>
							  <input class="checkbox" id="employment_i_current_work_here" type="checkbox">
							  </label>
						   </div>
						</div>
				  </div>
				</form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" id="add-employment" >SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- END # MODAL EMPLOYMENT -->

<!-- BEGIN # MODAL kỹ năng nghề nghiệp -->
<div class="modal fade" id="modalFormEducation" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">Chỉnh sửa kỹ năng nghề nghiệp</h3>
				<span id="text-login-msg">Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</span>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form class="form-horizontal">
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="education_school"><?=Yii::t('frontend', 'Trường học')?></label>
					<div class="col-sm-7">
					  <input type="text" class="form-control topic-tokeninput" id="education_school" placeholder="University of California, Irvine">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="education_concentration"><?=Yii::t('frontend', 'Chuyên ngành')?></label>
					<div class="col-sm-7"> 
					  <input type="text" class="form-control ms topic-tokeninput" id="education_concentration" placeholder="Sinh học con người">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="education_secondary_concentration">Secondary Concentration</label>
					<div class="col-sm-7"> 
						<input type="text" class="form-control topic-tokeninput" id="education_secondary_concentration" placeholder="Tâm lý học">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="education_degree_type"><?=Yii::t('frontend', 'Bằng cấp')?></label>
					<div class="col-sm-7"> 
						<input type="text" class="form-control" id="education_degree_type" placeholder="Tiến sĩ">
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="education_graduation_year"><?=Yii::t('frontend', 'Năm tốt nghiệp')?></label>
					<div class="col-sm-7"> 
						<?php
						  // Sets the top option to be the current year. (IE. the option that is chosen by default).
						  $currently_selected = date('Y'); 
						  // Year to start available options at
						  $earliest_year = 1950; 
						  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
						  $latest_year = date('Y'); 
						  print '<select id="education_graduation_year">';
						  // Loops over each int[year] from current year, back to the $earliest_year [1950]
						  foreach ( range( $latest_year, $earliest_year ) as $i ) {
							// Prints the option with the next year in range.
							print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
						  }
						  print '</select>';
						?>
					</div>
				  </div>
				</form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" id="add-education" >SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- END # MODAL kỹ năng nghề nghiệp -->


<!-- BEGIN # MODAL kỹ năng nghề nghiệp -->
<div class="modal fade" id="modalFormLocation" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">Chỉnh sửa kỹ năng nghề nghiệp</h3>
				<span id="text-login-msg">Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</span>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
                <form class="form-horizontal">
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="location_position"><?=Yii::t('frontend', 'Địa chỉ (quan trọng)')?></label>
					<div class="col-sm-7">
					  <input type="text" class="form-control topic-tokeninput" id="location_position" placeholder="University of California, Irvine">
					</div>
				  </div>
				  
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="location_endyear"><?=Yii::t('frontend', 'Từ năm')?></label>
					<div class="col-sm-7"> 
						<?php
						  // Sets the top option to be the current year. (IE. the option that is chosen by default).
						  $currently_selected = date('Y'); 
						  // Year to start available options at
						  $earliest_year = 1950; 
						  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
						  $latest_year = date('Y'); 
						  print '<select id="location_startyear">';
						  // Loops over each int[year] from current year, back to the $earliest_year [1950]
						  foreach ( range( $latest_year, $earliest_year ) as $i ) {
							// Prints the option with the next year in range.
							print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
						  }
						  print '</select>';
						?>
					</div>
				  </div>
				  <div class="form-group">
					<label class="control-label col-sm-5 text-left" for="location_endyear"><?=Yii::t('frontend', 'Đến năm')?></label>
					<div class="col-sm-7"> 
						<?php
						  // Sets the top option to be the current year. (IE. the option that is chosen by default).
						  $currently_selected = date('Y'); 
						  // Year to start available options at
						  $earliest_year = 1950; 
						  // Set your latest year you want in the range, in this case we use PHP to just set it to the current year.
						  $latest_year = date('Y'); 
						  print '<select id="location_endyear">';
						  // Loops over each int[year] from current year, back to the $earliest_year [1950]
						  foreach ( range( $latest_year, $earliest_year ) as $i ) {
							// Prints the option with the next year in range.
							print '<option value="'.$i.'"'.($i === $currently_selected ? ' selected="selected"' : '').'>'.$i.'</option>';
						  }
						  print '</select>';
						?>
					</div>
				  </div>
				  <div class="form-group"> 
						 <label class="col-md-5 control-label"><?=Yii::t('frontend', 'Hiện tại tôi đang ở đây.')?></label>
						<div class="col-sm-7"> 
							<div class="checkbox">
							  <label>
							  <input class="checkbox" id="location_current" type="checkbox">
							  </label>
						   </div>
						</div>
				  </div>
				</form>
            </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary submitBtn" id="add-location">SUBMIT</button>
            </div>
        </div>
    </div>
</div>
<!-- END # MODAL kỹ năng nghề nghiệp -->

<?php
$url_search_topics 	= Url::to(['/ajax/search-topics-profiles']);
$url_create_topics 	= Url::to(['/ajax/create-topics']); 
$url_add_employment = Url::to(['/ajax/add-user-employment']); 
$url_add_education	= Url::to(['/ajax/add-user-education']); 
$url_add_location 	= Url::to(['/ajax/add-user-location']); 
$js = <<<js
//tockeninput add
$("#employment_company").tokenInput('$url_search_topics',{
	onResult: function (results) {
        $.each(results, function (index, value) {
            value.name = value.title;
        });
		return results;
    },
	tokenLimit: 1,
	noResultsText: " <a id='add-topic' data-ajax-addtopic='employment_company' href='javascript:;'> Thêm topic</a>",
	resultsFormatter: function(item){ return "<li>" + "<img src='" + item.images + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.title + "</div><div class='email'>(" + item.id + ")</div></div></li>" },
    //tokenFormatter: function(item) { return "<li><p>" + item.title + "</p></li>" },			
});
$("#education_school").tokenInput('$url_search_topics',{
	onResult: function (results) {
        $.each(results, function (index, value) {
            value.name = value.title;
        });
		return results;
    },
	tokenLimit: 1,
	noResultsText: " <a id='add-topic' data-ajax-addtopic='education_school' href='javascript:;'> Thêm topic</a>",
	resultsFormatter: function(item){ return "<li>" + "<img src='" + item.images + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.title + "</div><div class='email'>(" + item.id + ")</div></div></li>" },
    //tokenFormatter: function(item) { return "<li><p>" + item.title + "</p></li>" },			
});
$("#education_concentration").tokenInput('$url_search_topics',{
	onResult: function (results) {
        $.each(results, function (index, value) {
            value.name = value.title;
        });
		return results;
    },
	tokenLimit: 1,
	noResultsText: " <a id='add-topic' data-ajax-addtopic='education_concentration' href='javascript:;'> Thêm topic</a>",
	resultsFormatter: function(item){ return "<li>" + "<img src='" + item.images + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.title + "</div><div class='email'>(" + item.id + ")</div></div></li>" },
    //tokenFormatter: function(item) { return "<li><p>" + item.title + "</p></li>" },			
});
$("#education_secondary_concentration").tokenInput('$url_search_topics',{
	onResult: function (results) {
        $.each(results, function (index, value) {
            value.name = value.title;
        });
		return results;
    },
	tokenLimit: 1,
	noResultsText: " <a id='add-topic' data-ajax-addtopic='education_secondary_concentration' href='javascript:;'> Thêm topic</a>",
	resultsFormatter: function(item){ return "<li>" + "<img src='" + item.images + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.title + "</div><div class='email'>(" + item.id + ")</div></div></li>" },
    //tokenFormatter: function(item) { return "<li><p>" + item.title + "</p></li>" },			
});
$("#location_position").tokenInput('$url_search_topics',{
	onResult: function (results) {
        $.each(results, function (index, value) {
            value.name = value.title;
        });
		return results;
    },
	tokenLimit: 1,
	noResultsText: " <a id='add-topic' data-ajax-addtopic='location_position' href='javascript:;'> Thêm topic</a>",
	resultsFormatter: function(item){ return "<li>" + "<img src='" + item.images + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.title + "</div><div class='email'>(" + item.id + ")</div></div></li>" },
    //tokenFormatter: function(item) { return "<li><p>" + item.title + "</p></li>" },			
});
// Add a token programatically
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
//AJAX ADD EMPLOYMENT
$("body").on("click","#add-employment", function(){
		var employment_position 	= $('#employment_position').val();
		var toki 					=  $('#employment_company').tokenInput("get");
		if(!jQuery.isEmptyObject(toki))
		{
			var employment_company 			= toki[0].id;
		}		
		var employment_startyear 			= $('#employment_startyear').val();
		var employment_endyear 				= $('#employment_endyear').val();
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
			var rs = $.parseJSON(result);
				$('#modalForm').modal('toggle');
				$.confirm({
					theme: 'supervan',
					title: 'Cảm ơn!',
					content: 'Bạn đã Thêm một nơi làm việc thành công!',
					autoClose: 'successAction|3000',
					buttons: {
						successAction: {
							text: 'Ok',
							action: function () {
								location.reload();
							}
						}
					}
				});
        });
        return false;
});	

//AJAX ADD EDUCATION

$("body").on("click","#add-education", function(){
		var education_school 			=  $('#education_school').tokenInput("get");
		var education_concentration		=  $('#education_concentration').tokenInput("get");
		var education_secondary_concentration	=  $('#education_secondary_concentration').tokenInput("get");
		var education_degree_type		=  $('#education_degree_type').val();
		var education_graduation_year	=  $('#education_graduation_year').val();
		if(!jQuery.isEmptyObject(education_school))
		{
			var education_id_school 			= education_school[0].id;
		}
		if(!jQuery.isEmptyObject(education_concentration))
		{
			var education_id_concentration 			= education_concentration[0].id;
		}
		if(!jQuery.isEmptyObject(education_secondary_concentration))
		{
			var education_id_secondary_concentration 			= education_secondary_concentration[0].id;
		}
		var dta 	= {
			action  : 'no-action', 
			education_school 			: education_id_school,
			education_concentration		: education_id_concentration,
			education_secondary_concentration			: education_id_secondary_concentration,
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
				$('#modalFormEducation').modal('toggle');
				$.confirm({
					theme: 'supervan',
					title: 'Cảm ơn!',
					content: 'Bạn đã Thêm một kỹ năng nghề nghiệp thành công!',
					autoClose: 'successAction|3000',
					buttons: {
						successAction: {
							text: 'Ok',
							action: function () {
								location.reload();
							}
						}
					}
				});
        });
        return false;
});	


//AJAX ADD LOCATION

$("body").on("click","#add-location", function(){
		var location_position 			=  $('#location_position').tokenInput("get");
		if(!jQuery.isEmptyObject(location_position))
		{
			var location_id_position 		= location_position[0].id;
		}
		
		var location_startyear 				= $('#location_startyear').val();
		var location_endyear 				= $('#location_endyear').val();
		var location_current 				= 0;
		if(employment_endyear < employment_startyear)
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
			location_id_position 			: location_id_position,
			location_startyear			: location_startyear,
			location_endyear			: location_endyear,
			location_current				: location_current
		};
		$.ajax({ 
            url: '$url_add_location',
            type: 'POST',
            data: dta
        }).done(function(result) 
		{
			var rs = $.parseJSON(result);
				$('#modalFormLocation').modal('toggle');
				$.confirm({
					theme: 'supervan',
					title: 'Cảm ơn!',
					content: 'Bạn đã thêm địa chỉ thành công!',
					autoClose: 'successAction|3000',
					buttons: {
						successAction: {
							text: 'Ok',
							action: function () {
								location.reload();
							}
						}
					}
				});
        });
        return false;
});

 $(".close").click(function(){
        $("#myAlert").alert();
    });
	
js;
$this->registerJs($js);
?>
