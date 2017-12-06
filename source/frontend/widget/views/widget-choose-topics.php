<?php
echo '<div class="dialog_wrapper large_dialog_wrapper follow_interests" id="__w2_oIJAF1h_contents">
   <div id="ThToAN">
      <div class="step_title">What are your interests?</div>
      <div class="step_subtitle"></div>
      <div class="nux_dialog_interests">
         <div id="cdCUrr">
            <div class="topic_photo_card_wrapper">
               <div class="dynamic_interests">';
               for($i=0, $count = count($data); $i < $count; $i++){
               	echo '<div id="box_'.$i.'">
                     <div class="topic_photo_card" id="topics_'.$data[$i]['id'].'">
                        <div class="photo">
                           <div id="OkqUuT">
                              <div class="TopicPhoto">
                                 <div id="EkvhJC"><a href="/topic/Technology" id="__w2_JCRRMa1_link"><img class="topic_photo_img" src="https://qph.ec.quoracdn.net/main-thumb-t-2177-200-JiR07D1TQSfeQzRvWXomVaY4Poj2f8Yb.jpeg" alt="'.$data[$i]['title'].'" width="200" height="200"></a></div>
                              </div>
                           </div>
                        </div>
                        <div class="info_wrapper">
                           <span class="info_background">
                              <div class="check_wrapper">
                                 <div class="check"></div>
                              </div>
                              <div class="info"><span id="jkwbTc"><span class="TopicNameSpan TopicName qserif-bold" id="__w2_HM8qDVw_card">'.$data[$i]["title"].'</span></span></div>
                           </span>
                        </div>
                     </div>
                  </div>';
               }
                  
echo '
                  <span id="__w2_rmI3sfv_more"> </span>
               </div>
            </div>
         </div>
      </div>
      <div class="nux_dialog_interests_footer footer row">
         <div class="form_buttons">
            <div id="BNEBaS">
               <div class="nux_dialog_button continue"><a class="submit_button submit_button_disabled" id="__w2_gZrKWWv_next">10 More Topics to Continue</a></div>
            </div>
         </div>
      </div>
   </div>
</div>';
echo '<input type="hidden" name="topics[]" value="">';
?>