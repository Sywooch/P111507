<?php 
   use yii\web\View;
   use yii\helpers\Url;

   $url_search_topics = Url::to(['/ajax/search-topics']);
?>
<div class="dialog_wrapper large_dialog_wrapper" id="__w2_lWCUiuE_contents">
   <div id="LHttDw">
      <div class="step_title">What topics do you know about?</div>
      <div class="step_subtitle">Add your area of study, hobbies, skills and other interests.</div>
      <div class="ExpertiseInputForm">
         <div class="topic_selector_wrapper">
            <div class="AddTopicSelector Selector ProfileFeaturedTopicSelector TopicSelector" tabindex="-1" id="__w2_csYtUex_wrapper">
               <div class="selector_input_interaction">
                  <input type="hidden" name="AutoComplete" id="memberssearch-family_name_id">
                  <input class="selector_input text" data-group="js-editable" placeholder="Search for a topic" value="" w2cid="csYtUex" id="__w2_csYtUex_input" type="text">
                  <div class="selector_spinner hidden" id="__w2_csYtUex_spinner">
                     <div class="LoadingDots tiny">
                        <div class="dot first"></div>
                        <div class="dot second"></div>
                        <div class="dot third"></div>
                     </div>
                  </div>
               </div>
               <div class="selector_results_container" id="__w2_csYtUex_results_container">
                  <div class="selector_results_container_inner hidden" id="__w2_csYtUex_results">
                     <ul class="TopicSelectorResults SelectorResults ProfileFeaturedTopicSelectorResults WithTypeaheadLogDataSelectorResultsMixin" id="__w2_umNvO0E_wrapper">
                        
                     </ul>
                  </div>
                  <div id="__w2_csYtUex_empty_input_prompt"></div>
               </div>
            </div>
         </div>
         <div id="nKkgxu">
            <div class="ExpertiseList SimpleList" id="__w2_n25UR2f_list">
               <div class="empty_list ">
                  <div class="empty_list_msg">No Topics Yet</div>
               </div>
               <div class="items_wrapper hidden">
                  
               </div>
            </div>
         </div>
      </div>
      <div class="row footer">
         <div class="form_buttons">
            <div id="OvntLG">
               <div class="nux_dialog_button continue"><a class="submit_button" id="__w2_tXP5my1_next">Continue</a></div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php 
   $js = <<<js
   $('.selector_input.text').bind('input', function() { 
      var key =  $(this).val(); // get the current value of the input field.
      if(key != null){
         $.ajax({
            url : "$url_search_topics",
            type : "post",
            dateType:"json",
            data : {
                key : key
            },
            success : function (result){
               $('#__w2_umNvO0E_wrapper').empty();
               var html = '';
               result = JSON.parse(result);
               for (i = 0, len = result.length; i < len; i++) {
                  html += '<li class="selector_result topic" id="__w2_umNvO0E_result_'+result[i]["id"]+'">'
                  + result[i]['title']
                  +'<div class="selector_result_description"><span id="dOEZbD">'+result[i]["user_follow"]+ ' Follower</span></div>'
               +'</li>';
               }
               html += '<li class="selector_result create_topic" id="__w2_umNvO0E_result_3"><span class="matched_term">'+key+'</span><span class="submit_button">Create Topic</span></li>';
               $('#__w2_csYtUex_results').removeClass('hidden');
               $('#__w2_umNvO0E_wrapper').prepend(html);
               $('.selector_result.topic').click(function(){
                  var topics_id = $(this).attr('id');
                  var id = topics_id.replace('__w2_umNvO0E_result_','');
                  for(i = 0, len = result.length; i < len; i++){
                     if(result[i]["id"] == id){
                     var item ='<div class="ExpertiseTopicListItem" id="topic_item_'+result[i]["id"]+'">'
                           +'<div class="topic_photo_wrapper">'
                              +'<div id="'+id+'">'
                                 +'<div class="TopicPhoto">'
                                    +'<div id="'+id+'">'
                                       +'<a href="/topic/A+" id="__w2_GXpqb4b_link">'
                                          +'<img class="topic_photo_img" src="https://qph.ec.quoracdn.net/main-thumb-t-355233-50-bNq7F3heYdMzMvgVTN5kGpwSEAzt9v5I.jpeg" alt="A+" width="50" height="50">'
                                       +'</a>'
                                    +'</div>'
                                 +'</div>'
                              +'</div>'
                           +'</div>'
                           +'<div class="name">'
                              +'<div id="qtJseT">'
                                 +'<span class="TopicName qserif-bold" id="__w2_ZmN3WMP_card">'+result[i]["title"]+'</span>'
                              +'</div>'
                              +'<a class="ExpertiseTopicListItemRemoveButton" href="javascript:;" id="__w2_KXLImMS_expertise_'+result[i]['id']+'"></a>'
                           +'</div>'
                           +'<div class="UserTopicInfoLink"></div>'
                        +'</div>';
                     $('.items_wrapper').prepend(item);
                     $('.items_wrapper').removeClass('hidden');
                     $('.empty_list').addClass('hidden');
                     $('#__w2_csYtUex_results').addClass('hidden');
                     $('#__w2_csYtUex_input').val('');
                     $('.ExpertiseTopicListItemRemoveButton').click(function(){
                        var topics_id = $(this).attr('id');
                        var id = topics_id.replace('__w2_KXLImMS_expertise_','');
                        $('#topic_item_'+id).remove();
                        if($.trim($(".items_wrapper").html())==''){
                           $('.items_wrapper').addClass('hidden');
                           $('.empty_list').removeClass('hidden');
                        }
                     });
                     break;
                     }
                  }
               });
            }
         });
      }
   });

   
js;
$this->registerJs($js, View::POS_READY);
?>

