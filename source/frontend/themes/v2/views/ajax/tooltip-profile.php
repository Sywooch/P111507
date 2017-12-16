    <?php
        use yii\helpers\Html;
        use common\components\DateSetup;
        use yii\helpers\Url;
        use yii\web\View;
        use frontend\widget\WidgetCommentItem;

        $base_url = $this->theme->baseUrl;
    ?>
    <div class="ObjectCard BetterUserHoverMenuContents">
     <div class="ObjectCard-header">
          <div >
              <div class="hover_menu hidden white_bg show_nub" >
                  <div class="hover_menu_contents"> </div>
              </div>
              <span class="photo_tooltip" >
                  <a href="/profile/Gary-Stiffelman" >
                    <img class="profile_photo_img" src="<?=$model->getAvatar()?>" width="50" alt="<?=Html::encode($model->username)?>" height="50">
                  </a>
                  <span class="VerificationBadge" >&nbsp;</span>
              </span>
          </div>
          <div class="header_wrapper">
              <a class="user" href="/profile/Gary-Stiffelman">
                <?=Html::encode($model->username)?>
              </a>
              <span class="UserCredential IdentityCredential">

                <?=!empty($model->jobname->position) ? Html::encode($model->jobname->position) : null?>
              </span>
          </div>
     </div>
     <div class="ObjectCard-body">
        <div class="hovercard_section">
           <div>
              <div class="AboutSection">
                 <div>
                    <div class="CredentialListItem WorkCredentialListItem AboutListItem">
                        <div class="list_item_icon"></div>
                        <span class="main_text">
                          <span class="UserCredential IdentityCredential">
                            <?=Yii::t('frontend', 'Works at')?> 
                            <?=!empty($model->company->title) ? Html::encode($model->company->title) : null?>
                          </span>
                       </span>
                    </div>
                 </div>
                 <div>
                    <div class="CredentialListItem AboutListItem SchoolCredentialListItem">
                       <div class="list_item_icon"></div>
                       <span class="main_text"><span class="UserCredential IdentityCredential">Studied at <?=!empty($model->school->title) ? Html::encode($model->school->title) : null ?><!-- , Los Angeles --></span></span>
                    </div>
                 </div>
                 <div>
                    <div class="CredentialListItem LocationCredentialListItem AboutListItem">
                       <div class="list_item_icon"></div>
                       <span class="main_text">
                       <span class="UserCredential IdentityCredential">Lives in 
                          <?=!empty($model->location->title) ? $model->location->title : null ?>
                       </span></span>
                    </div>
                 </div>
                 <div>
                    <div class="AboutListItem AnswerViewsAboutListItem">
                       <div class="list_item_icon"></div>
                       <span class="main_text">2.9m answer views</span><span class="detail_text">23.8k this month</span>
                    </div>
                 </div>
                 <!-- <div>
                    <div class="AboutListItem TopWriterAboutListItem">
                       <div class="list_item_icon"></div>
                       <span class="main_text">Top Writer</span><span class="detail_text">2016, 2015, 2014, and 2013</span>
                    </div>
                 </div>
                 <div>
                    <div class="AboutListItem PublishedWriterAboutListItem">
                       <div class="list_item_icon"></div>
                       <span class="main_text">
                        <a href="/profile/Gary-Stiffelman/answers/published">Published Writer</a>
                       </span>
                       <span class="detail_text">The Huffington Post<span class="and"> and </span>Forbes</span>
                    </div>
                 </div> -->
              </div>
           </div>
        </div>
     </div>
     <div class="ObjectCard-footer">
          <div class="user-interactive ">
              <a href="#" class="btn-action btn-action-follow unfollow no-icon"> <span class="follow-text">Unfollow</span> <span class="count"> | 16.3m <span></span></span></a>
              <!-- <a href="#" class="turn_on_notifications text-link"> 
                <?=Yii::t('frontend', 'Turn On Notifications')?>
              </a> -->
          </div>
     </div>
    </div>