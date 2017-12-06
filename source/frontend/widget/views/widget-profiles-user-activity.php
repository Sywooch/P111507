<?php
use yii\helpers\Html;
use yii\helpers\Url;
?>
<div class="sidebar-left-profile">
   <div class="sidebar-top">
      <div class="sidebar-title">
         <h3 class="title border-bottom"> <?=Yii::t('frontend', 'Feeds')?> </h3>
      </div>
      <div class="sidebar-content">
         <div class="list-menu-primary">
            <ul class="list-link-primary">
               <li class="active">
                  <a href="<?=Url::to(["profiles/index","id"=>$uid])?>"> 
                  <?=Yii::t('frontend', 'Answers')?> 
                  <span class="list_count"> <?=$countAnswersByUser?> </span>
                  </a>
               </li>
               <li>
                  <a href="<?=Url::to(["profiles/questions","id"=>$uid])?>"> 
                  <?=Yii::t('frontend', 'Questions')?> 
                  <span class="list_count"> <?=$countQuetionsByUser?> </span>
                  </a>
               </li>
               <!--
                  <li>
                     <a href="#"> 
                     All Activity <span class="list_count"> 0 </span>
                     </a>
                  </li>
                  -->
            </ul>
         </div>
         <div class="list-menu-secondary">
            <ul class="list-link-primary">
               <li><a href="#"> Followers <span class="list_count"> 0 </span></a></li>
               <li><a href="#"> Following <span class="list_count"> 0 </span></a></li>
               <li><a href="#"> Edits <span class="list_count"> 0 </span></a></li>
            </ul>
         </div>
      </div>
   </div>
</div>