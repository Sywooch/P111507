<?php
    use yii\helpers\Html;

    $base_url = $this->theme->baseUrl;
?>
<div class="AddTopicSelector HomePagePinnedTopicSelector Selector TopicSelector" >
 <div class="input_wrapper">
    <div class="selector_input_interaction">
       <input
        class="selector_input text form-input"
        type="text"
        placeholder="<?= Yii::t('frontend', 'Search For Topics to Bookmark')?>">
       <div class="selector_spinner hide">
          <div class="LoadingDots tiny">
             <div class="dot first"></div>
             <div class="dot second"></div>
             <div class="dot third"></div>
          </div>
       </div>
    </div>
 </div>
 <div class="selector_results_container"  style="overflow-y: auto; height: 300px;">
 <ul class="HomePagePinnedTopicSelectorResults TopicSelectorResults SelectorResults WithTypeaheadLogDataSelectorResultsMixin" >

<?php
foreach ($models as $key => $value) { ?>

  <li class="selector_result topic" data-ajax="<?=$value->topics->id?>">
     <div class="selector_result_photo">
      <div class="TopicPhoto">
        <img 
          class="topic_photo_img"
          src="<?=$base_url?>/images/main-thumb-t-1026-25-Qz7G3K2Z3xGKJyYywUDAo9smWLTuFQxT.jpeg"
          width="25"
          alt="<?=$value->topics->title?>"
          height="25">
      </div>
     </div>
     <?= $value->topics->title ?>
     <div class="selector_result_description"></div>
  </li>

<?php } ?>
 </ul>
 </div>
</div>

<?php
  $js = <<<Js
  $('.selector_input.text.form-input').keyup(function() {
    var key =  $(this).val();
    setTimeout(function() {
      $.ajax({
        url: '/ajax/search-topic-for-bookmark',
        method: 'post',
        type: 'html',
        data:{ key: key },
        success: function(result) {
          console.log(result);
          $('ul.HomePagePinnedTopicSelectorResults').empty();
          $('ul.HomePagePinnedTopicSelectorResults').append(result);
        }
      });
    }, 10);
  });
Js;
$this->registerJS($js, \yii\web\View::POS_END);
?>