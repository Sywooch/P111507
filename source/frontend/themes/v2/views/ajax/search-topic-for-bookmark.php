<?php
$base_url = $this->theme->baseUrl;

foreach ($models as $key => $value) { ?>
  <li class="selector_result topic" data-ajax="<?=$value->id?>">
    <div class="selector_result_photo">
      <div class="TopicPhoto">
        <img 
          class="topic_photo_img"
          src="<?=$base_url?>/images/main-thumb-t-1026-25-Qz7G3K2Z3xGKJyYywUDAo9smWLTuFQxT.jpeg"
          width="25"
          alt="<?=$value->title?>"
          height="25">
      </div>
    </div>
    <?= $value->title ?>
    <div class="selector_result_description"></div>
  </li>
<?php } ?>