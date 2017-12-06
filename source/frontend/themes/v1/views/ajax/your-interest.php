<?php 
$theme = $this->theme;
$base_url = $theme->baseUrl;
$home_url = Yii::$app->homeUrl;
$html = ' <div class="row">';
         for ($i = 0, $count = count($topics); $i < $count; $i++) {
            ob_start();
            ?>
            <div class="col-md-2 col-sm-3 col-xs-3 col-xxs-4 padding-3">
               <div class="topic_photo_card" data="<?=$topics[$i]['id']?>">
                  <div class="photo">
                     <div class="TopicPhoto">
                       <a href="#" >
                           <img 
                              class="topic_photo_img img-responsive" 
                              src="<?=$home_url?>/uploads/topics/<?=$topics[$i]['images']?>"
                              width="200" 
                              alt="Cooking" 
                              height="200">
                        </a>
                    </div>
                  </div>
                  <div class="info_wrapper">
                     <span class="info_background">
                        <div class="check_wrapper">
                           <div class="check"></div>
                        </div>
                        <div class="info"><span class="TopicNameSpan TopicName" ><?=$topics[$i]['title']?></span></div>
                     </span>
                  </div>
               </div>
            </div>
            <?php
            $html = ob_get_clean();
            $html .= '</div>';
            echo $html;
         }
echo '<input type="hidden" id="input_topics_interest" name="topics_interest[]" value=""> ';
