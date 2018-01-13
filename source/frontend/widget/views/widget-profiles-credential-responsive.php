<?php 
 use yii\helpers\Html;
 use yii\helpers\Url;
 use yii\web\View;
 use frontend\widget\WidgetProfilesEmployment;
 use frontend\widget\WidgetProfilesEducation;
 use frontend\widget\WidgetProfilesLocation;
?>
<div class="m-profile">
   <aside class="widget widget-credentials">
      <h3 class="widget-title">Công việc & Học vấn<a href="#">Sửa</a></h3>
      <div class="widget-content">
         <ul>
            <li class="widget-employment" data-device='m-profile'>
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
            <li class="widget-education" data-device='m-profile'>
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
            <li class="widget-location" data-device='m-profile'>
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
         <div class="popup-education-bg"></div>
         <div class="popup-education loading"></div>
         <div class="popup-location-bg"></div>
         <div class="popup-location loading"></div>
      </div>
   </aside>
   <!-- .widget-question -->
</div>