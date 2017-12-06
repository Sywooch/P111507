<?php
   /* @var $this yii\web\View */
   /* @var $model \frontend\models\SearchForm */
   
   use yii\helpers\Html;
   use yii\widgets\LinkPager;
   use frontend\widget\TagsWidget;
   use frontend\widget\KeywordTagWidget;
   use yii\helpers\Url;
   $baseUrl = Yii::getAlias('@webDomain');
?>
 <div>
     <!-- BEGIN HEADER -->
   <div id="__w2_z70URbw_header" class="LoggedInSiteHeader SiteHeader">
      <div class="header_inner">
        <div class="header_logo"><a href="/"><span>Quora</span></a></div>
        <div class="header_contents">
          <div class="table_cell_wrapper">
            <div class="ask_bar">
              <div id="__w2_Se2tk1M_wrapper" tabindex="-1" class="WithServerCallMessageMixin TypersearchESSelector Selector LookupBarSelector">
					<div class="selector_input_interaction">
					<div id="__w2_hYTClta_counter" class="CharacterCounter fade_out">150</div>
					<textarea id="__w2_Se2tk1M_input" w2cid="Se2tk1M" placeholder="Ask or Search Quora" rows="1" autofocus="True" type="text" group="__w2_Se2tk1M_interaction" class="selector_input text"></textarea>
					<div id="__w2_Se2tk1M_spinner" class="selector_spinner hidden">
						<div class="LoadingDots tiny">
							<div class="dot first"></div>
							<div class="dot second"></div>
							<div class="dot third"></div>
						</div>
					</div>
                </div>
                <div id="__w2_Se2tk1M_results_container" class="selector_results_container">
                  <div id="__w2_Se2tk1M_results_wrapper" class="lookup_bar_results_wrapper hidden fade_out">
                    <div class="results_wrapper">
                      <div id="__w2_Se2tk1M_server_message" class="hidden resistance_wrapper server_message">
                        <div id="__w2_Se2tk1M_server_message_title" class="fixit_title"></div>
                        <span id="__w2_Se2tk1M_server_message_note" class="fixit_note"></span>                                    
                      </div>
                      <div class="interstitials_and_results">
                        <div id="__w2_Se2tk1M_ask_mode_interstitial" class="hidden ask_interstitial">
							<p class="ask_interstitial_content">
								<strong id="__w2_Se2tk1M_interstitial_title" class="ask_interstitial_title"></strong>
								<span id="__w2_Se2tk1M_interstitial_text"></span>
							</p>
                        </div>
                        <div id="__w2_Se2tk1M_results" class="results"></div>
                      </div>
                    </div>
                  </div>
                  <div id="__w2_Se2tk1M_empty_input_prompt"></div>
                </div>
              </div>
              <a id="__w2_iGtVHql_dialog_link" href="#" class="AddQuestionLookupBarButton">
                <div class="inner">Đặt câu hỏi</div>
              </a>
              <div id="__w2_Se2tk1M_details_wrapper" class="details_wrapper hidden">
                <div id="__w2_RPzxMSk_editor_outer" class="editor_wrapper">
                  <div id="__w2_RPzxMSk_editor" class="AskBarDetails Editor edit_latex web">
                    <div id="__w2_RPzxMSk_doc" w2cid="RPzxMSk" interactive="true" group="__w2_RPzxMSk_interaction">
                      <div contenteditable="true" class="doc empty" data-kind="doc" placeholder="Enter Question Details (Optional)">
                        <div class="section" data-type="plain" data-indent="0" data-kind="section">
                          <div class="span" data-kind="span">
                            <div class="content"><br></div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <input type="file" id="__w2_RPzxMSk_file" w2cid="RPzxMSk" multiple="" style="display:none" group="__w2_RPzxMSk_interaction">                                 
                    <div id="__w2_RPzxMSk_drop_zone" class="drop_zone hidden"></div>
                    <div id="__w2_uqyOb5A_counter" class="CharacterCounter fade_out">300</div>
                    <div id="__w2_RPzxMSk_link_selector_wrapper" class="hidden">
                      <div id="__w2_S6qwgqK_wrapper" tabindex="-1" class="LinkSelector Selector">
                        <div class="link_selector_input">
                          <div class="selector_input_interaction">
                            <div id="__w2_lrdyITG_counter" class="CharacterCounter fade_out">250</div>
                            <input type="text" id="__w2_S6qwgqK_input" w2cid="S6qwgqK" value="" placeholder="Search" group="__w2_S6qwgqK_interaction" class="selector_input text">                                             
                            <div id="__w2_S6qwgqK_spinner" class="selector_spinner hidden">
                              <div class="LoadingDots tiny">
                                <div class="dot first"></div>
                                <div class="dot second"></div>
                                <div class="dot third"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="__w2_S6qwgqK_results_container" class="selector_results_container hidden">
                          <div id="__w2_S6qwgqK_results" class="selector_results_container_inner hidden"></div>
                          <div id="__w2_S6qwgqK_empty_input_prompt"></div>
                        </div>
                      </div>
                    </div>
                    <div id="__w2_RPzxMSk_photo_search_wrapper" class="photo_search_wrapper">
                      <div id="qtThJk">
                        <div class="PhotoSearch">
                          <div class="nub"></div>
                          <div class="input_wrapper"><input type="text" id="__w2_ixzn7yX_search" w2cid="ixzn7yX" placeholder="Search for a photo" group="__w2_ixzn7yX_interaction"><a id="__w2_ixzn7yX_upload" href="#" class="upload_link"><span class="upload_icon"></span>Upload</a></div>
                          <div class="photo_container">
                            <div id="__w2_ixzn7yX_container" class="photo_container_inner">
                              <div id="__w2_ixzn7yX_empty_state" class="empty_state">
                                Search for a photo or upload your own                                                   
                                <div class="bing_attribution">Powered by</div>
                              </div>
                              <div id="__w2_ixzn7yX_spinner" class="hidden">
                                <div class="LoadingDots regular">
                                  <div class="dot first"></div>
                                  <div class="dot second"></div>
                                  <div class="dot third"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="table_cell_wrapper">
            <div id="__w2_z70URbw_nav" class="header_nav">
              <span id="rVuCIg">
                <div class="FeedNavItem HoverMenu SiteHeaderNavItem">
					<a id="__w2_oaAvkp0_link" href="<?=$baseUrl?>" class="nav_item_link">
						<span class="expanded">Mới nhất</span>
						<span class="truncated">Mới nhất</span> 
					</a>
				</div>
              </span>
              <span id="XENbbb">
                <div class="WriteNavItem SiteHeaderNavItem HoverMenu">
                  <a id="__w2_JtUd1Gh_link" href="<?=URl::to(["answer/index"])?>" class="nav_item_link selected">
                    <span class="expanded">Câu trả lời</span>
					<span class="truncated">Câu trả lời</span>                                
                    <div id="mBGOfH"></div>
                  </a>
                </div>
              </span>
              <span id="StracI">
                <div class="NotifsNavItem SiteHeaderNavItem HoverMenu">
                  <div id="__w2_WEYMvvi_menu" class="hover_menu hidden hover_menu_header show_nub">
                    <div id="__w2_WEYMvvi_menu_contents" class="hover_menu_contents">
                      <div id="jOyNRV">
                        <div class="SiteHeaderHoverMenuContents NotifsHoverMenuContents">
                          <h3 class="hover_menu_title">
                            <div id="UCIwbF">
								<div id="__w2_Fy24ndM_clear" class="NotificationsClearButton">
									<div class="icon_frame"><span class="icon"></span></div>
									<a href="#">Mark this as Read</a>                                                
								</div>
								<a id="__w2_LqxcQWz_hover_menu_header_link" href="/notifications" class="hover_menu_header_link">
									<strong>See All Notifications</strong> 
									<span class="unread_count">(1)</span>
								</a>                                             
                            </div>
                          </h3>
                          <ul>
                            <li id="__w2_Z2zrcoy_dropdown" class="dropdown">
                              <div id="bMhKHg">
                                <div id="MgztZn">
                                  <div class="CollectionWrapper">
                                    <div id="kGtERi">
                                      <div id="__w2_sZBFxGq_actionable" class="actionable">
                                        <div id="qZNqfI">
                                          <div id="__w2_IzzuhpL_actionable" class="actionable">
                                            <div id="__w2_IzzuhpL_notif" class="SentNotif Notif QuestionDistributionChangedNotif unseen">
                                              <a action_mousedown="NotifClickthrough" href="/unanswered/I-pressed-the-button-in-the-elevator-for-the-21st-floor-of-the-hotel-men-lets-call-them-Ahmed-and-Abdo-in-the-elevator-with-me?__filter__&amp;__nsrc__=2&amp;__snid3__=597093992" class="overlay"></a>                                                                        
                                              <div class="notif_item">
                                                <a id="__w2_IzzuhpL_mark" action_mousedown="NotifMarkRead" href="#" class="mark_icon_wrapper">
                                                  <div class="mark_icon"></div>
                                                </a>
                                                <div class="photo_text_layout size_tiny">
                                                  <div class="_layout_photo_wrapper">
                                                    <div class="_layout_photo">
                                                      <div class="notif_photo">
                                                        <div id="__w2_R7kvl2J_menu" class="hover_menu hidden white_bg show_nub">
                                                          <div id="__w2_R7kvl2J_menu_contents" class="hover_menu_contents"> </div>
                                                        </div>
                                                        <span id="__w2_R7kvl2J_link" class="photo_tooltip"><img width="100" height="100" alt="" src="https://qsf.ec.quoracdn.net/-3-images.logo.quora_oauth_logo.png929060f9e93b556d.png" class="profile_photo_img"></span>                                                                                    
                                                      </div>
                                                    </div>
                                                  </div>
                                                  <div class="_layout_text_wrapper">
                                                    <div class="_layout_text">
                                                      <div class="notif_title">Your question <span id="NvpPUM"><a id="__w2_XjNahmx_link" action_mousedown="QuestionLinkClickthrough" target="_top" href="/unanswered/I-pressed-the-button-in-the-elevator-for-the-21st-floor-of-the-hotel-men-lets-call-them-Ahmed-and-Abdo-in-the-elevator-with-me" class="question_link"><span class="question_text"><span class="rendered_qtext">I pressed the button in the elevator for the 21st floor of the hotel. men (let's call them Ahmed and Abdo) in the elevator with me?</span></span></a></span> may need editing to be easier to understand. Please double check for spelling, phrasing, or other mistakes.  <span class="timestamp">Fri</span></div>
                                                    </div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <a id="__w2_WEYMvvi_link" href="#" class="nav_item_link">
                    <span class="expanded">Thông báo</span>
					<span class="truncated">Thông báo</span>                                  
                    <div id="YzxTvb"></div>
                  </a>
                </div>
              </span>
			  <!-- PROFILES -->
              <span id="wPZHMq">
                <div class="MoreNavItem SiteHeaderNavItem HoverMenu">
                  <div id="__w2_PYAgct9_menu" class="hover_menu hidden hover_menu_header show_nub">
                    <div id="__w2_PYAgct9_menu_contents" class="hover_menu_contents">
						<div id="EkoOvc">
							<div class="MoreHoverMenuContents SiteHeaderHoverMenuContents">
							  <h3 class="hover_menu_title"></h3>
							  <ul class="main_menu">
								<li><a href="/profile/Tài-Tâm" class="hover_menu_item">Thông tin tài khoản</a></li>
								<li><a href="/profile/Tài-Tâm/blogs" class="hover_menu_item">Blogs</a></li>
								<li><a href="/messages" class="hover_menu_item">Thông báo</a></li>
								<li><a href="/content" class="hover_menu_item">Your Content</a></li>
								<li><a href="/stats" class="hover_menu_item">Stats</a></li>
								<li><a href="/settings" class="hover_menu_item">Settings</a></li>
							  </ul>
							  <ul class="LegalNavLinks">
								<li class="feedback"><a rel="noopener" target="_blank" href="/contact">Contact Us</a><span class="bullet"> · </span><a id="__w2_O7JLm67_send_feedback" href="#">Report a Bug</a></li>
								<li><a href="/about">About</a><span class="bullet"> · </span><a href="/prizes">Prizes</a><span class="bullet"> · </span><a href="/careers">Careers</a></li>
								<li><a href="/about/privacy">Privacy</a><span class="bullet"> · </span><a href="/about/tos">Terms</a><span class="bullet"> · </span><a href="/about/conduct">Conduct</a></li>
								<li>
								  <a href="/settings/languages">Languages</a><span class="bullet"> · </span>                                                
								  <ul class="logout">
									<li class="logout">
									  <form id="__w2_CaYSVHv_logout_form" target="_top" method="POST" action="/login/logout_POST"><input type="hidden" value="e57c843e5a30475bf474206a740e9de1" name="formkey"><input type="hidden" id="__w2__u_0wl7PKEmaf" w2cid="CaYSVHv" value="https://www.quora.com/answer" name="next" group="__w2_CaYSVHv_interaction"><a id="__w2_CaYSVHv_logout_link" href="#" class="logout">Logout</a></form>
									</li>
								  </ul>
								</li>
							  </ul>
							</div>
						  </div>
						</div>
					</div>
                  <a id="__w2_PYAgct9_link" href="#" class="nav_item_link">
                    <span class="expanded">
                      <span class="photo_wrapper">
                        <div id="jEtvVG"><span id="__w2_d7Semck_link" class="photo_tooltip"><img width="50" height="50" alt="Tài Tâm" src="<?=$baseUrl?>/skins/images/main-thumb-54564951-50-lxxosmzggwcojpuigaciwypxokzuxtzd.jpeg" class="profile_photo_img"></span></div>
                      </span>
                      <span id="BHCRmC"><span id="__w2_erhA2xb_link"><span class="user">Tài</span></span></span>                                 
                    </span>
                    <span class="truncated">
                      <span class="photo_wrapper">
                        <div id="WpKljN"><span id="__w2_hiwg9iz_link" class="photo_tooltip"><img width="50" height="50" alt="Tài Tâm" src="<?=$baseUrl?>/skins/images/main-thumb-54564951-50-lxxosmzggwcojpuigaciwypxokzuxtzd.jpeg" class="profile_photo_img"></span></div>
                      </span>
                      <span id="LSEUtr"><span id="__w2_Jkklmts_link"><span class="user">Tài</span></span></span>                                 
                    </span>
                    <div id="fgqDqI"></div>
                  </a>
                </div>
              </span>
			  <!-- END PROFILES -->
              <div id="LNTEIt"></div>
            </div>
          </div>
          <div class="table_cell_wrapper toolbar">
            <div class="LookupBarSiteHeaderAddQuestion">
              <a id="__w2_zMLzmae_submit_question" href="#" class="ask_submit_button submit_button disabled">Submit Question</a><span class="anon_wrapper"><label><input type="checkbox" id="__w2_zMLzmae_anon_checkbox" w2cid="zMLzmae" group="__w2_zMLzmae_interaction">Anonymously</label></span>                        
              <div class="details_toggle_wrapper"><a id="__w2_zMLzmae_add_details" href="#" class="details_toggle add_details"></a><a id="__w2_zMLzmae_remove_details" href="#" class="details_toggle remove_details hidden"></a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
	  <!-- END HEADER --> 
	  
      <div id="TWnHlL"></div>
      <div id="__w2_wQCksfR_body_blur" class="closing"></div>
      <div class="ContentWrapper">
         <div id="__w2_rRBwjv3_content">
            <div class="WriteMain WritePageMultifeedMain">
               <div class="grid_page">
                  <div id="__w2_UbiU1rl_left_col" class="layout_3col_left">
                     <div class="fixable_clone" style="height: 418px; width: 142px; margin: 0px;">
                        <div id="__w2_UbiU1rl_left_col_inner" style="top: 83px; position: fixed; width: 142px;" class="fixable_fixed">
                           <div id="__w2_V8pLBna_wrapper" class="EditableList WritePageQuestionSidebar">
                              <h3 class="title">
                                 <div>Questions</div>
                              </h3>
                              <div id="rUSgOM">
                                 <ul>
                                    <li class="StaticListItem">
                                       <a href="/answer" class="selected">
                                          <div class="list_item_text">Questions For You</div>
                                       </a>
                                    </li>
                                    <li class="StaticListItem">
                                       <a href="/answer/requests">
                                          <div class="list_item_text">Answer Requests</div>
                                       </a>
                                    </li>
                                    <li class="StaticListItem">
                                       <a href="/answer/answer_later">
                                          <div class="list_item_text">Answer Later</div>
                                       </a>
                                    </li>
                                    <li class="StaticListItem">
                                       <a href="/answer/drafts">
                                          <div class="list_item_text">Drafts</div>
                                       </a>
                                    </li>
                                 </ul>
                                 <div class="edit_mode_only"></div>
                              </div>
                           </div>
                           <div id="GKZaJD">
                              <div id="__w2_OLQMKfA_wrapper" class="EditableList TrendingTopicsNavList NavList">
                                 <h3 class="title">
                                    <div><span class="icon"></span>Trending Now</div>
                                 </h3>
                                 <div id="RoRhAo">
                                    <ul>
                                       <div id="tbftXA">
                                          <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                             <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                                <div id="__w2_VbL7AkZ_menu" class="hover_menu hidden white_bg show_nub">
                                                   <div id="__w2_VbL7AkZ_menu_contents" class="hover_menu_contents"> </div>
                                                </div>
                                                <a id="__w2_VbL7AkZ_link" action_mousedown="TopicLinkClickthrough" target="" href="/answer/topic/Mark-Zuckerberg-Shows-off-Jarvis-December-2016" class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="NzNrxs"><span id="__w2_AUp3Wsr_card" class="TopicNameSpan TopicName">Mark Zuckerberg Shows off Jarvis</span></span></span></a>                                                
                                             </div>
                                          </li>
                                       </div>
                                       <div id="kXFfAa">
                                          <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                             <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                                <div id="__w2_PCh0wav_menu" class="hover_menu hidden white_bg show_nub">
                                                   <div id="__w2_PCh0wav_menu_contents" class="hover_menu_contents"> </div>
                                                </div>
                                                <a id="__w2_PCh0wav_link" action_mousedown="TopicLinkClickthrough" target="" href="javascript:;" class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name">
													<span class="name_text">
														<span id="MKrdzb">
															<span id="__w2_W3bn9Yh_card" class="TopicNameSpan TopicName">
																La La Land
															</span>
														</span>
													</span>
												</a>                                                
                                             </div>
                                          </li>
                                       </div>
                                       <div id="thBnko">
                                          <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                             <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                                <div id="__w2_GrXpIMk_menu" class="hover_menu hidden white_bg show_nub">
                                                   <div id="__w2_GrXpIMk_menu_contents" class="hover_menu_contents"> </div>
                                                </div>
                                                <a id="__w2_GrXpIMk_link" action_mousedown="TopicLinkClickthrough" target="" href="/answer/topic/Rogue-One-A-Star-Wars-Story-2016-movie" class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="bGmvyu"><span id="__w2_IiA1f5K_card" class="TopicNameSpan TopicName">Rogue One: A Star Wars Story</span></span></span></a>                                                
                                             </div>
                                          </li>
                                       </div>
                                       <div id="mLEtjY">
                                          <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                             <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                                <div id="__w2_FnGVLpg_menu" class="hover_menu hidden white_bg show_nub">
                                                   <div id="__w2_FnGVLpg_menu_contents" class="hover_menu_contents"> </div>
                                                </div>
                                                <a id="__w2_FnGVLpg_link" action_mousedown="TopicLinkClickthrough" target="" href="/answer/topic/Berlin-Terror-Attack-December-2016" class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="YcnGTg"><span id="__w2_QhV1BC2_card" class="TopicNameSpan TopicName">Berlin Terror Attack</span></span></span></a>                                                
                                             </div>
                                          </li>
                                       </div>
                                       <div id="fMWsxh">
                                          <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                             <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                                <div id="__w2_WgdXCBr_menu" class="hover_menu hidden white_bg show_nub">
                                                   <div id="__w2_WgdXCBr_menu_contents" class="hover_menu_contents"> </div>
                                                </div>
                                                <a id="__w2_WgdXCBr_link" action_mousedown="TopicLinkClickthrough" target="" href="/answer/topic/Assassination-of-Andrei-Karlov-December-2016" class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="TyKFdk"><span id="__w2_Ep1vaJ7_card" class="TopicNameSpan TopicName">Assassination of Andrei Karlov</span></span></span></a>                                                
                                             </div>
                                          </li>
                                       </div>
                                    </ul>
                                    <div class="edit_mode_only"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="layout_3col_center">
                     <div id="__w2_Bi2eLuW_paged_list" class="WriteMultifeed PagedList Multifeed unified">
                        <div id="__w2_Bi2eLuW_paged_list_wrapper" class="paged_list_wrapper">
                           <div id="wwMsIj">
                              <div id="__w2_dgjTV73__truncated" class="ExpandableBundle SimpleToggle TopQuestionsForYou Toggle Bundle">
                                 <div class="ExpandableBundle SimpleToggle TopQuestionsForYou Toggle Bundle">
                                    <div class="main_feed">
                                       <div id="NHIohq">
                                          <div class="section_header">
                                             <div class="top_questions_icon_frame"><span class="icon"></span></div>
                                             <div class="header_text"><a href="/answer/top_questions" class="header_text_main" target="_blank">Top Questions For You</a></div>
                                          </div>
                                       </div>
                                       <div class="ExpandableBundle SimpleToggle TopQuestionsForYou Toggle Bundle">
                                          <div id="MCXbkw">
                                             <div id="__w2_kKsK2Je_question_feedback" class="feedback_wrapper hidden"></div>
                                             <div id="__w2_kKsK2Je_item" class="FeedStory QuestionFeedStory feed_item">
                                                <div id="tCgQoC">
                                                   <div id="__w2_M4Bzsn8__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                      <div id="hGoQMa">
                                                         <div class="EventHeader pass_color_to_child_links many_faces">
                                                            <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                               
                                                            <div id="__w2_s5KZAKo_topic_list_item" class="TopicListItem">
                                                               <div id="vIvISW">
                                                                  <div id="__w2_PEh8Uaf_menu" class="hover_menu hidden white_bg show_nub">
                                                                     <div id="__w2_PEh8Uaf_menu_contents" class="hover_menu_contents"> </div>
                                                                  </div>
                                                                  <a id="__w2_PEh8Uaf_link" action_mousedown="TopicLinkClickthrough" target="_blank" href="/topic/Dating-and-Relationships-1" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="GIYIjw"><span id="__w2_trKYjPL_card" class="TopicNameSpan TopicName">Dating and Relationships</span></span></span></a>                                                                  
                                                               </div>
                                                            </div>
                                                            <span class="bullet"> · </span><span class="timestamp"><a href="/How-long-does-it-take-to-find-true-love" target="_blank">1h</a></span>                                                            
                                                         </div>
                                                      </div>
                                                      <div id="dUdjOb">
                                                         <div id="LHVVPV">
                                                            <span id="__w2_PYx9d9E_question_story">
                                                               <div id="tVvADF">
                                                                  <div id="XdVjAg">
                                                                     <div class="QuestionText"><span id="IQKRcc"><a id="__w2_uhmunvB_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/How-long-does-it-take-to-find-true-love" class="question_link"><span class="question_text"><span class="rendered_qtext">How long does it take to find true love?</span></span></a></span></div>
                                                                  </div>
                                                                  <span class="gray_details">
                                                                     <div id="klaPhL"></div>
                                                                  </span>
                                                               </div>
                                                               <div class="CantAnswerActionBar ShowOnPass">
                                                                  <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_vGI20Mw_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                  <span class="downvote_link"><span id="dYeOeV"><a id="__w2_x4DTdtP_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11849120, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_x4DTdtP_text" class="button_text">Downvote</span></a></span></span>                                                                  
                                                               </div>
                                                               <div id="uLYXTJ">
                                                                  <div id="__w2_DmJPKxN_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_DmJPKxN_link" href="/How-long-does-it-take-to-find-true-love" class="read_answers" target="_blank">Read 5 Answers</a></div>
                                                               </div>
                                                               <div id="ceCbMD"></div>
                                                            </span>
                                                            <span id="__w2_PYx9d9E_question_story_editable" class="hidden"></span>                                                            
                                                         </div>
                                                         <div id="GrFFDE">
                                                            <div id="OfdtGu">
                                                               <div id="__w2_TlRfOoL_action_bar" class="ActionBar Question action_bar_lite">
                                                                  <div class="action_bar_inner">
                                                                     <div class="primary_item"><span id="UJiSaU"><a id="__w2_pv9dsbP_button" action_target="{&quot;qid&quot;: 11849120, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_pv9dsbP_text" class="button_text">Answer</span></a></span></div>
                                                                     <div class="primary_item"><a id="__w2_KmZ9gOt_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                     <div class="action_item"><span id="UvxyZS"><a id="__w2_mUPK3PG_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11849120, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_mUPK3PG_text" class="button_text">Follow</span><span id="__w2_mUPK3PG_count" class="count">1</span></a></span></div>
                                                                     <div class="action_item"><span id="BdJFcX"><a id="__w2_vn8W7Fu_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11849120, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_vn8W7Fu_text" class="button_text">Downvote</span></a></span></div>
                                                                     <div class="overflow action_item overflow_link"><a id="__w2_TlRfOoL_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                     <div id="__w2_TlRfOoL_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                        <div id="__w2_TlRfOoL_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div id="GGBHZV">
                                                                     <div id="__w2_mJVRLwj_add_answer_editor_wrapper" class="hidden"></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="VtXwfT">
                                             <div id="__w2_oLI84yf_question_feedback" class="feedback_wrapper hidden"></div>
                                             <div id="__w2_oLI84yf_item" class="FeedStory QuestionFeedStory feed_item">
                                                <div id="ywEwWO">
                                                   <div id="__w2_HDMJ0vm__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                      <div id="QeYkHA">
                                                         <div class="EventHeader pass_color_to_child_links many_faces">
                                                            <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                               
                                                            <div id="__w2_ZKtbing_topic_list_item" class="TopicListItem">
                                                               <div id="LchSab">
                                                                  <div id="__w2_n3d5T5G_menu" class="hover_menu hidden white_bg show_nub">
                                                                     <div id="__w2_n3d5T5G_menu_contents" class="hover_menu_contents"> </div>
                                                                  </div>
                                                                  <a id="__w2_n3d5T5G_link" action_mousedown="TopicLinkClickthrough" target="_blank" href="/topic/Politics" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="WEXqBZ"><span id="__w2_ToxsVDw_card" class="TopicNameSpan TopicName">Politics</span></span></span></a>                                                                  
                                                               </div>
                                                            </div>
                                                            <span class="bullet"> · </span><span class="timestamp"><a href="/What-is-the-most-childish-thing-you-have-seen-a-politician-do" target="_blank">Fri</a></span>                                                            
                                                         </div>
                                                      </div>
                                                      <div id="nnHEkC">
                                                         <div id="NWlFwV">
                                                            <span id="__w2_yMifgUe_question_story">
                                                               <div id="agUBcl">
                                                                  <div id="YIYHeQ">
                                                                     <div class="QuestionText"><span id="TxqIYS"><a id="__w2_NRl3B8v_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/What-is-the-most-childish-thing-you-have-seen-a-politician-do" class="question_link"><span class="question_text"><span class="rendered_qtext">What is the most childish thing you have seen a politician do?</span></span></a></span></div>
                                                                  </div>
                                                                  <span class="gray_details">
                                                                     <div id="nOvRUI"></div>
                                                                  </span>
                                                               </div>
                                                               <div class="CantAnswerActionBar ShowOnPass">
                                                                  <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_T1CzgSI_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                  <span class="downvote_link"><span id="eFpZzx"><a id="__w2_XXZxg8e_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11838742, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_XXZxg8e_text" class="button_text">Downvote</span></a></span></span>                                                                  
                                                               </div>
                                                               <div id="DSRhnl">
                                                                  <div id="__w2_gKwQjKh_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_gKwQjKh_link" href="/What-is-the-most-childish-thing-you-have-seen-a-politician-do" class="read_answers" target="_blank">Read 7 Answers</a></div>
                                                               </div>
                                                               <div id="jLZTNO"></div>
                                                            </span>
                                                            <span id="__w2_yMifgUe_question_story_editable" class="hidden"></span>                                                            
                                                         </div>
                                                         <div id="skiyUt">
                                                            <div id="LprBeK">
                                                               <div id="__w2_ED9gun9_action_bar" class="ActionBar Question action_bar_lite">
                                                                  <div class="action_bar_inner">
                                                                     <div class="primary_item"><span id="OMCUCI"><a id="__w2_RlW3mlx_button" action_target="{&quot;qid&quot;: 11838742, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_RlW3mlx_text" class="button_text">Answer</span></a></span></div>
                                                                     <div class="primary_item"><a id="__w2_LE25vKP_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                     <div class="action_item"><span id="lnowlU"><a id="__w2_Ht3thmF_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11838742, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_Ht3thmF_text" class="button_text">Follow</span><span id="__w2_Ht3thmF_count" class="count">3</span></a></span></div>
                                                                     <div class="action_item"><span id="sKxGHt"><a id="__w2_ZxRahml_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11838742, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_ZxRahml_text" class="button_text">Downvote</span></a></span></div>
                                                                     <div class="overflow action_item overflow_link"><a id="__w2_ED9gun9_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                     <div id="__w2_ED9gun9_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                        <div id="__w2_ED9gun9_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div id="IgFCJD">
                                                                     <div id="__w2_kTVMNFW_add_answer_editor_wrapper" class="hidden"></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="YonTmy">
                                             <div id="__w2_hgWucvy_question_feedback" class="feedback_wrapper hidden"></div>
                                             <div id="__w2_hgWucvy_item" class="FeedStory QuestionFeedStory feed_item">
                                                <div id="YDfssP">
                                                   <div id="__w2_TUOTQwH__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                      <div id="aoZNsJ">
                                                         <div class="EventHeader pass_color_to_child_links many_faces">
                                                            <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                               
                                                            <div id="__w2_OlHLJYg_topic_list_item" class="TopicListItem">
                                                               <div id="WHWhql">
                                                                  <div id="__w2_VHx6cxz_menu" class="hover_menu hidden white_bg show_nub">
                                                                     <div id="__w2_VHx6cxz_menu_contents" class="hover_menu_contents"> </div>
                                                                  </div>
                                                                  <a id="__w2_VHx6cxz_link" action_mousedown="TopicLinkClickthrough" target="_blank" href="/topic/Sports" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="kPlCAf"><span id="__w2_vvzl0Rb_card" class="TopicNameSpan TopicName">Sports</span></span></span></a>                                                                  
                                                               </div>
                                                            </div>
                                                            <span class="bullet"> · </span><span class="timestamp"><a href="/What-sports-teams-have-black-and-orange-team-colors" target="_blank">1am</a></span>                                                            
                                                         </div>
                                                      </div>
                                                      <div id="yBFjfu">
                                                         <div id="ywctHw">
                                                            <span id="__w2_JR1DTY7_question_story">
                                                               <div id="mBzHfn">
                                                                  <div id="hEWyUy">
                                                                     <div class="QuestionText"><span id="JGxcHn"><a id="__w2_w8lyc9G_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/What-sports-teams-have-black-and-orange-team-colors" class="question_link"><span class="question_text"><span class="rendered_qtext">What sports teams have black and orange team colors?</span></span></a></span></div>
                                                                  </div>
                                                                  <span class="gray_details">
                                                                     <div id="HzJnMt"></div>
                                                                  </span>
                                                               </div>
                                                               <div class="CantAnswerActionBar ShowOnPass">
                                                                  <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_pcCgubO_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                  <span class="downvote_link"><span id="uMKjqY"><a id="__w2_zlpGV1R_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11840406, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_zlpGV1R_text" class="button_text">Downvote</span></a></span></span>                                                                  
                                                               </div>
                                                               <div id="wOYZXC">
                                                                  <div id="__w2_qvRBH8k_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_qvRBH8k_link" href="/What-sports-teams-have-black-and-orange-team-colors" class="read_answers" target="_blank">Read 7 Answers</a></div>
                                                               </div>
                                                               <div id="KjaxpB"></div>
                                                            </span>
                                                            <span id="__w2_JR1DTY7_question_story_editable" class="hidden"></span>                                                            
                                                         </div>
                                                         <div id="LXsONB">
                                                            <div id="saqNVa">
                                                               <div id="__w2_Zn4vdCD_action_bar" class="ActionBar Question action_bar_lite">
                                                                  <div class="action_bar_inner">
                                                                     <div class="primary_item"><span id="kdEejq"><a id="__w2_ilQAes0_button" action_target="{&quot;qid&quot;: 11840406, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_ilQAes0_text" class="button_text">Answer</span></a></span></div>
                                                                     <div class="primary_item"><a id="__w2_f3rkuwh_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                     <div class="action_item"><span id="qUPKiX"><a id="__w2_LIAcHGS_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11840406, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_LIAcHGS_text" class="button_text">Follow</span><span id="__w2_LIAcHGS_count" class="count">1</span></a></span></div>
                                                                     <div class="action_item"><span id="HQloLU"><a id="__w2_ccJmhxL_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11840406, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_ccJmhxL_text" class="button_text">Downvote</span></a></span></div>
                                                                     <div class="overflow action_item overflow_link"><a id="__w2_Zn4vdCD_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                     <div id="__w2_Zn4vdCD_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                        <div id="__w2_Zn4vdCD_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div id="BNaZVr">
                                                                     <div id="__w2_JmuPMZg_add_answer_editor_wrapper" class="hidden"></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="oJdcLG">
                                             <div id="__w2_Mu1k6Pb_question_feedback" class="feedback_wrapper hidden"></div>
                                             <div id="__w2_Mu1k6Pb_item" class="FeedStory QuestionFeedStory feed_item">
                                                <div id="qEuZGl">
                                                   <div id="__w2_v3hS2wd__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                      <div id="STVocl">
                                                         <div class="EventHeader pass_color_to_child_links many_faces">
                                                            <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                               
                                                            <div id="__w2_jGbrkQH_topic_list_item" class="TopicListItem">
                                                               <div id="kJCvbJ">
                                                                  <div id="__w2_pYlfzHO_menu" class="hover_menu hidden white_bg show_nub">
                                                                     <div id="__w2_pYlfzHO_menu_contents" class="hover_menu_contents"> </div>
                                                                  </div>
                                                                  <a id="__w2_pYlfzHO_link" action_mousedown="TopicLinkClickthrough" target="_blank" href="/topic/Dating-and-Relationships-1" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="qjJdWl"><span id="__w2_O8yODNG_card" class="TopicNameSpan TopicName">Dating and Relationships</span></span></span></a>                                                                  
                                                               </div>
                                                            </div>
                                                            <span class="bullet"> · </span><span class="timestamp"><a href="/How-do-you-let-a-girl-down-after-you-made-her-believe-youre-in-love" target="_blank">4h</a></span>                                                            
                                                         </div>
                                                      </div>
                                                      <div id="JGOuZt">
                                                         <div id="ygjtea">
                                                            <span id="__w2_fdaJX2K_question_story">
                                                               <div id="uTJIVk">
                                                                  <div id="DLQvnQ">
                                                                     <div class="QuestionText"><span id="fzkbau"><a id="__w2_MCaTojd_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/How-do-you-let-a-girl-down-after-you-made-her-believe-youre-in-love" class="question_link"><span class="question_text"><span class="rendered_qtext">How do you let a girl down after you made her believe you're in love?</span></span></a></span></div>
                                                                  </div>
                                                                  <span class="gray_details">
                                                                     <div id="KqpCbB">
                                                                        <div class="QuestionDetails">
                                                                           <div id="cOfdOb">
                                                                              <div id="__w2_OTq01u4_truncated" class="truncated_q_text truncated_para_breaks TruncatedQuestionDetails TruncatedQText">
                                                                                 <span class="rendered_qtext">
                                                                                    <p class="qtext_para">You’re chatting with a girl online and you think she’s wonderful and you both fall in love even though you never met. Once you meet her y...</p>
                                                                                 </span>
                                                                                 <span id="__w2_OTq01u4_more"><a class="more_link" target="_blank">(more)</a></span>                                                                                    
                                                                                 <span id="__w2_OTq01u4_loading" class="hidden">
                                                                                    <div class="LoadingDots regular">
                                                                                       <div class="dot first"></div>
                                                                                       <div class="dot second"></div>
                                                                                       <div class="dot third"></div>
                                                                                    </div>
                                                                                 </span>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </span>
                                                               </div>
                                                               <div class="CantAnswerActionBar ShowOnPass">
                                                                  <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_eybbuh0_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                  <span class="downvote_link"><span id="gEZSym"><a id="__w2_QcyEMkF_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11847180, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_QcyEMkF_text" class="button_text">Downvote</span></a></span></span>                                                                  
                                                               </div>
                                                               <div id="sdpmVC">
                                                                  <div id="__w2_YBGWXEf_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_YBGWXEf_link" href="/How-do-you-let-a-girl-down-after-you-made-her-believe-youre-in-love" class="read_answers" target="_blank">Read 8 Answers</a></div>
                                                               </div>
                                                               <div id="CUIjVP"></div>
                                                            </span>
                                                            <span id="__w2_fdaJX2K_question_story_editable" class="hidden"></span>                                                            
                                                         </div>
                                                         <div id="jqxudF">
                                                            <div id="NMIHvc">
                                                               <div id="__w2_Cptow8M_action_bar" class="ActionBar Question action_bar_lite">
                                                                  <div class="action_bar_inner">
                                                                     <div class="primary_item"><span id="xBoBao"><a id="__w2_WNBFAsd_button" action_target="{&quot;qid&quot;: 11847180, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_WNBFAsd_text" class="button_text">Answer</span></a></span></div>
                                                                     <div class="primary_item"><a id="__w2_rBNm5zF_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                     <div class="action_item"><span id="pcCedO"><a id="__w2_vW0gmzD_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11847180, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_vW0gmzD_text" class="button_text">Follow</span><span id="__w2_vW0gmzD_count" class="count">1</span></a></span></div>
                                                                     <div class="action_item"><span id="Ljfdqz"><a id="__w2_q5b1cAQ_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11847180, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_q5b1cAQ_text" class="button_text">Downvote</span></a></span></div>
                                                                     <div class="overflow action_item overflow_link"><a id="__w2_Cptow8M_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                     <div id="__w2_Cptow8M_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                        <div id="__w2_Cptow8M_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div id="WiJIqW">
                                                                     <div id="__w2_IYb7kbC_add_answer_editor_wrapper" class="hidden"></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="MTATEp">
                                             <div id="__w2_jfrq1Oe_question_feedback" class="feedback_wrapper hidden"></div>
                                             <div id="__w2_jfrq1Oe_item" class="FeedStory QuestionFeedStory feed_item">
                                                <div id="UGaguy">
                                                   <div id="__w2_UKu0cYf__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                      <div id="CTcYlc">
                                                         <div class="EventHeader pass_color_to_child_links many_faces">
                                                            <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                               
                                                            <div id="__w2_xoExzB1_topic_list_item" class="TopicListItem">
                                                               <div id="uaBzKm">
                                                                  <div id="__w2_IXwn0qW_menu" class="hover_menu hidden white_bg show_nub">
                                                                     <div id="__w2_IXwn0qW_menu_contents" class="hover_menu_contents"> </div>
                                                                  </div>
                                                                  <a id="__w2_IXwn0qW_link" action_mousedown="TopicLinkClickthrough" target="_blank" href="/topic/Science" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="zzuQaK"><span id="__w2_N4OGnHm_card" class="TopicNameSpan TopicName">Science</span></span></span></a>                                                                  
                                                               </div>
                                                            </div>
                                                            <span class="bullet"> · </span><span class="timestamp"><a href="/Is-science-and-spirituality-the-same-thing" target="_blank">41m</a></span>                                                            
                                                         </div>
                                                      </div>
                                                      <div id="pBqmhn">
                                                         <div id="LrbvHI">
                                                            <span id="__w2_a23RcYV_question_story">
                                                               <div id="eJgMEO">
                                                                  <div id="ZsSaOg">
                                                                     <div class="QuestionText"><span id="ZrbiLe"><a id="__w2_Terv7ZJ_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/Is-science-and-spirituality-the-same-thing" class="question_link"><span class="question_text"><span class="rendered_qtext">Is science and spirituality the same thing?</span></span></a></span></div>
                                                                  </div>
                                                                  <span class="gray_details">
                                                                     <div id="gneEgV"></div>
                                                                  </span>
                                                               </div>
                                                               <div class="CantAnswerActionBar ShowOnPass">
                                                                  <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_LRzGKiI_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                  <span class="downvote_link"><span id="ohzfSs"><a id="__w2_HFHEIak_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11849886, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_HFHEIak_text" class="button_text">Downvote</span></a></span></span>                                                                  
                                                               </div>
                                                               <div id="zGfySG">
                                                                  <div id="__w2_lgzj9wz_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_lgzj9wz_link" href="/Is-science-and-spirituality-the-same-thing" class="read_answers" target="_blank">Read 3 Answers</a></div>
                                                               </div>
                                                               <div id="hcDhhs"></div>
                                                            </span>
                                                            <span id="__w2_a23RcYV_question_story_editable" class="hidden"></span>                                                            
                                                         </div>
                                                         <div id="ryPLxR">
                                                            <div id="TivDJb">
                                                               <div id="__w2_OZBmad6_action_bar" class="ActionBar Question action_bar_lite">
                                                                  <div class="action_bar_inner">
                                                                     <div class="primary_item"><span id="SlhVIm"><a id="__w2_imfo26i_button" action_target="{&quot;qid&quot;: 11849886, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_imfo26i_text" class="button_text">Answer</span></a></span></div>
                                                                     <div class="primary_item"><a id="__w2_b4Y6Ctl_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                     <div class="action_item"><span id="hMdkun"><a id="__w2_UQVDSX1_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11849886, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_UQVDSX1_text" class="button_text">Follow</span><span id="__w2_UQVDSX1_count" class="count">1</span></a></span></div>
                                                                     <div class="action_item"><span id="qbPTSf"><a id="__w2_BOEodbN_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11849886, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_BOEodbN_text" class="button_text">Downvote</span></a></span></div>
                                                                     <div class="overflow action_item overflow_link"><a id="__w2_OZBmad6_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                     <div id="__w2_OZBmad6_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                        <div id="__w2_OZBmad6_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div id="JFomwP">
                                                                     <div id="__w2_zfREGgU_add_answer_editor_wrapper" class="hidden"></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="SCwSwB">
                                             <div id="__w2_JHwIDu8_question_feedback" class="feedback_wrapper hidden"></div>
                                             <div id="__w2_JHwIDu8_item" class="FeedStory QuestionFeedStory feed_item">
                                                <div id="THSwuB">
                                                   <div id="__w2_HkaLGQ0__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                      <div id="iYWDTE">
                                                         <div class="EventHeader pass_color_to_child_links many_faces">
                                                            <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                               
                                                            <div id="__w2_ffBZmbh_topic_list_item" class="TopicListItem">
                                                               <div id="eoEjfR">
                                                                  <div id="__w2_dsLqN82_menu" class="hover_menu hidden white_bg show_nub">
                                                                     <div id="__w2_dsLqN82_menu_contents" class="hover_menu_contents"> </div>
                                                                  </div>
                                                                  <a id="__w2_dsLqN82_link" action_mousedown="TopicLinkClickthrough" target="_blank" href="/topic/Music" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="HNfNER"><span id="__w2_aWrCYpV_card" class="TopicNameSpan TopicName">Music</span></span></span></a>                                                                  
                                                               </div>
                                                            </div>
                                                            <span class="bullet"> · </span><span class="timestamp"><a href="/What-are-the-best-music-instruments-for-brain-development" target="_blank">Fri</a></span>                                                            
                                                         </div>
                                                      </div>
                                                      <div id="XNFswx">
                                                         <div id="zdcqMO">
                                                            <span id="__w2_dvmY3rF_question_story">
                                                               <div id="ieIaSC">
                                                                  <div id="xtXOoZ">
                                                                     <div class="QuestionText"><span id="wBneTZ"><a id="__w2_lu8SzXu_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/What-are-the-best-music-instruments-for-brain-development" class="question_link"><span class="question_text"><span class="rendered_qtext">What are the best music instruments for brain development?</span></span></a></span></div>
                                                                  </div>
                                                                  <span class="gray_details">
                                                                     <div id="REOVwP"></div>
                                                                  </span>
                                                               </div>
                                                               <div class="CantAnswerActionBar ShowOnPass">
                                                                  <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_TtCZxK4_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                  <span class="downvote_link"><span id="AxbNJO"><a id="__w2_LZuo4qH_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11824187, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_LZuo4qH_text" class="button_text">Downvote</span></a></span></span>                                                                  
                                                               </div>
                                                               <div id="VUKFPV">
                                                                  <div id="__w2_u2zECDl_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_u2zECDl_link" href="/What-are-the-best-music-instruments-for-brain-development" class="read_answers" target="_blank">Read 6 Answers</a></div>
                                                               </div>
                                                               <div id="JlCpAn"></div>
                                                            </span>
                                                            <span id="__w2_dvmY3rF_question_story_editable" class="hidden"></span>                                                            
                                                         </div>
                                                         <div id="SnUIDi">
                                                            <div id="Mvtomu">
                                                               <div id="__w2_CQPqG5K_action_bar" class="ActionBar Question action_bar_lite">
                                                                  <div class="action_bar_inner">
                                                                     <div class="primary_item"><span id="tDYHRk"><a id="__w2_k4Fa8RR_button" action_target="{&quot;qid&quot;: 11824187, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_k4Fa8RR_text" class="button_text">Answer</span></a></span></div>
                                                                     <div class="primary_item"><a id="__w2_fnNIBEm_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                     <div class="action_item"><span id="QehdPI"><a id="__w2_RyTRog2_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11824187, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_RyTRog2_text" class="button_text">Follow</span><span id="__w2_RyTRog2_count" class="count">5</span></a></span></div>
                                                                     <div class="action_item"><span id="VyRkCF"><a id="__w2_HdFVMBR_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11824187, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_HdFVMBR_text" class="button_text">Downvote</span></a></span></div>
                                                                     <div class="overflow action_item overflow_link"><a id="__w2_CQPqG5K_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                     <div id="__w2_CQPqG5K_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                        <div id="__w2_CQPqG5K_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div id="DIKfeE">
                                                                     <div id="__w2_yQnfyif_add_answer_editor_wrapper" class="hidden"></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="DoXUdl">
                                             <div id="__w2_g3JpmiI_question_feedback" class="feedback_wrapper hidden"></div>
                                             <div id="__w2_g3JpmiI_item" class="FeedStory QuestionFeedStory feed_item">
                                                <div id="ndCPAn">
                                                   <div id="__w2_u05WCkd__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                      <div id="JFDhMH">
                                                         <div class="EventHeader pass_color_to_child_links many_faces">
                                                            <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                               
                                                            <div id="__w2_uzW5csO_topic_list_item" class="TopicListItem">
                                                               <div id="TSwvQV">
                                                                  <div id="__w2_KsbMYz7_menu" class="hover_menu hidden white_bg show_nub">
                                                                     <div id="__w2_KsbMYz7_menu_contents" class="hover_menu_contents"> </div>
                                                                  </div>
                                                                  <a id="__w2_KsbMYz7_link" action_mousedown="TopicLinkClickthrough" target="_blank" href="/topic/Business" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="rdgBfU"><span id="__w2_pqBozuI_card" class="TopicNameSpan TopicName">Business</span></span></span></a>                                                                  
                                                               </div>
                                                            </div>
                                                            <span class="bullet"> · </span><span class="timestamp"><a href="/What-are-some-things-I-can-flip-for-money" target="_blank">2am</a></span>                                                            
                                                         </div>
                                                      </div>
                                                      <div id="LZWsDw">
                                                         <div id="lmcYDh">
                                                            <span id="__w2_twHLO94_question_story">
                                                               <div id="LFsZuS">
                                                                  <div id="UTMbkE">
                                                                     <div class="QuestionText"><span id="NaIJor"><a id="__w2_iWPwlM3_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/What-are-some-things-I-can-flip-for-money" class="question_link"><span class="question_text"><span class="rendered_qtext">What are some things I can flip for money?</span></span></a></span></div>
                                                                  </div>
                                                                  <span class="gray_details">
                                                                     <div id="vntKgy"></div>
                                                                  </span>
                                                               </div>
                                                               <div class="CantAnswerActionBar ShowOnPass">
                                                                  <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_YtNJwzb_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                  <span class="downvote_link"><span id="mRlwUf"><a id="__w2_uWvUsC8_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11841630, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_uWvUsC8_text" class="button_text">Downvote</span></a></span></span>                                                                  
                                                               </div>
                                                               <div id="rlFOYq">
                                                                  <div id="__w2_dOUpgM9_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_dOUpgM9_link" href="/What-are-some-things-I-can-flip-for-money" class="read_answers" target="_blank">Read 5 Answers</a></div>
                                                               </div>
                                                               <div id="GIRJyB"></div>
                                                            </span>
                                                            <span id="__w2_twHLO94_question_story_editable" class="hidden"></span>                                                            
                                                         </div>
                                                         <div id="eLhKWh">
                                                            <div id="hRslxl">
                                                               <div id="__w2_ZWY3DCc_action_bar" class="ActionBar Question action_bar_lite">
                                                                  <div class="action_bar_inner">
                                                                     <div class="primary_item"><span id="xTgaIs"><a id="__w2_TiGA5C6_button" action_target="{&quot;qid&quot;: 11841630, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_TiGA5C6_text" class="button_text">Answer</span></a></span></div>
                                                                     <div class="primary_item"><a id="__w2_iyYbHw1_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                     <div class="action_item"><span id="EPLocP"><a id="__w2_co2fGF6_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11841630, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_co2fGF6_text" class="button_text">Follow</span><span id="__w2_co2fGF6_count" class="count">2</span></a></span></div>
                                                                     <div class="action_item"><span id="zaqSFa"><a id="__w2_ziuiE8w_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11841630, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_ziuiE8w_text" class="button_text">Downvote</span></a></span></div>
                                                                     <div class="overflow action_item overflow_link"><a id="__w2_ZWY3DCc_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                     <div id="__w2_ZWY3DCc_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                        <div id="__w2_ZWY3DCc_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div id="tmhjQD">
                                                                     <div id="__w2_lkiJAa8_add_answer_editor_wrapper" class="hidden"></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="sSIQTj">
                                             <div id="__w2_v8tEfTA_question_feedback" class="feedback_wrapper hidden"></div>
                                             <div id="__w2_v8tEfTA_item" class="FeedStory QuestionFeedStory feed_item">
                                                <div id="QYMmBT">
                                                   <div id="__w2_ClWKczZ__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                      <div id="nyhTCE">
                                                         <div class="EventHeader pass_color_to_child_links many_faces">
                                                            <span class="photo_wrapper"></span>Question followed<span class="topic"><span class="bullet"> · </span></span>                                                               
                                                            <div id="__w2_XlExwfT_topic_list_item" class="TopicListItem">
                                                               <div id="lMZPRc">
                                                                  <div id="__w2_rvnYt78_menu" class="hover_menu hidden white_bg show_nub">
                                                                     <div id="__w2_rvnYt78_menu_contents" class="hover_menu_contents"> </div>
                                                                  </div>
                                                                  <a id="__w2_rvnYt78_link" action_mousedown="TopicLinkClickthrough" target="_blank" href="/topic/Dating-and-Relationships-1" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="GejrnS"><span id="__w2_GOHcH5H_card" class="TopicNameSpan TopicName">Dating and Relationships</span></span></span></a>                                                                  
                                                               </div>
                                                            </div>
                                                            <span class="bullet"> · </span><span class="timestamp"><a href="/Be-honest-what-would-make-you-stop-loving-your-kids" target="_blank">31m</a></span>                                                            
                                                         </div>
                                                      </div>
                                                      <div id="aCyqKu">
                                                         <div id="pEKadn">
                                                            <span id="__w2_lHe4ISi_question_story">
                                                               <div id="TlSpjQ">
                                                                  <div id="wlJAZK">
                                                                     <div class="QuestionText"><span id="bSFasL"><a id="__w2_Ou7Plr2_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/Be-honest-what-would-make-you-stop-loving-your-kids" class="question_link"><span class="question_text"><span class="rendered_qtext">Be honest, what would make you stop loving your kids?</span></span></a></span></div>
                                                                  </div>
                                                                  <span class="gray_details">
                                                                     <div id="KjHKle"></div>
                                                                  </span>
                                                               </div>
                                                               <div class="CantAnswerActionBar ShowOnPass">
                                                                  <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_L15i6z7_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                  <span class="downvote_link"><span id="oUGKgd"><a id="__w2_Aa65gQg_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11850008, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_Aa65gQg_text" class="button_text">Downvote</span></a></span></span>                                                                  
                                                               </div>
                                                               <div id="yhFebB">
                                                                  <div id="__w2_b0I3d6N_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_b0I3d6N_link" href="/Be-honest-what-would-make-you-stop-loving-your-kids" class="read_answers" target="_blank">Read 2 Answers</a></div>
                                                               </div>
                                                               <div id="gyHMPU"></div>
                                                            </span>
                                                            <span id="__w2_lHe4ISi_question_story_editable" class="hidden"></span>                                                            
                                                         </div>
                                                         <div id="ehXoiu">
                                                            <div id="gNQBgE">
                                                               <div id="__w2_Xg8m3ZO_action_bar" class="ActionBar Question action_bar_lite">
                                                                  <div class="action_bar_inner">
                                                                     <div class="primary_item"><span id="VAewMg"><a id="__w2_MTw22v1_button" action_target="{&quot;qid&quot;: 11850008, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_MTw22v1_text" class="button_text">Answer</span></a></span></div>
                                                                     <div class="primary_item"><a id="__w2_fBnyUI6_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                     <div class="action_item"><span id="QVqJwx"><a id="__w2_uhIxWwc_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11850008, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_uhIxWwc_text" class="button_text">Follow</span><span id="__w2_uhIxWwc_count" class="count">1</span></a></span></div>
                                                                     <div class="action_item"><span id="MJmhvo"><a id="__w2_fm5bjnz_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11850008, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_fm5bjnz_text" class="button_text">Downvote</span></a></span></div>
                                                                     <div class="overflow action_item overflow_link"><a id="__w2_Xg8m3ZO_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                     <div id="__w2_Xg8m3ZO_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                        <div id="__w2_Xg8m3ZO_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                     </div>
                                                                  </div>
                                                                  <div id="dFKGBe">
                                                                     <div id="__w2_yEBU3va_add_answer_editor_wrapper" class="hidden"></div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div id="__w2_dgjTV73_view_more"><a href="#" class="more_button"><span>More</span></a></div>
                                       </div>
                                       <div id="__w2_dgjTV73_expanded_content" class="hidden">
                                          <div id="NTyGxA">
                                             <div id="bOJstX">
                                                <div id="__w2_myfPPHC_question_feedback" class="feedback_wrapper hidden"></div>
                                                <div id="__w2_myfPPHC_item" class="FeedStory QuestionFeedStory feed_item">
                                                   <div id="lZDbgZ">
                                                      <div id="__w2_Kkm2XOG__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                         <div id="UsWFsp">
                                                            <div class="EventHeader pass_color_to_child_links many_faces">
                                                               <span class="photo_wrapper"></span>Question followed<span class="topic"><span class="bullet"> · </span></span>                                                                  
                                                               <div id="__w2_PZ6UT3h_topic_list_item" class="TopicListItem">
                                                                  <div id="NGIUDs">
                                                                     <div id="__w2_ZQywfAb_menu" class="hover_menu hidden white_bg show_nub">
                                                                        <div id="__w2_ZQywfAb_menu_contents" class="hover_menu_contents"> </div>
                                                                     </div>
                                                                     <a id="__w2_ZQywfAb_link" action_mousedown="TopicLinkClickthrough" target="" href="/topic/Music" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="DzrnfO"><span id="__w2_rXUITcM_card" class="TopicNameSpan TopicName">Music</span></span></span></a>                                                                     
                                                                  </div>
                                                               </div>
                                                               <span class="bullet"> · </span><span class="timestamp"><a href="/What-do-DJs-do">5h</a></span>                                                               
                                                            </div>
                                                         </div>
                                                         <div id="qChJKp">
                                                            <div id="UzHBMv">
                                                               <span id="__w2_UEKCrkZ_question_story">
                                                                  <div id="ZcnnKu">
                                                                     <div id="GWvTmv">
                                                                        <div class="QuestionText"><span id="cIMXBt"><a id="__w2_MSydfcd_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/What-do-DJs-do" class="question_link"><span class="question_text"><span class="rendered_qtext">What do DJ's do?</span></span></a></span></div>
                                                                     </div>
                                                                     <span class="gray_details">
                                                                        <div id="LCxvOD"></div>
                                                                     </span>
                                                                  </div>
                                                                  <div class="CantAnswerActionBar ShowOnPass">
                                                                     <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_cIIVl50_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                     <span class="downvote_link"><span id="QRgWpc"><a id="__w2_CxJiDWZ_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11843675, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_CxJiDWZ_text" class="button_text">Downvote</span></a></span></span>                                                                     
                                                                  </div>
                                                                  <div id="YgWWsB">
                                                                     <div id="__w2_uF3ETa7_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_uF3ETa7_link" href="/What-do-DJs-do" class="read_answers">Read 4 Answers</a></div>
                                                                  </div>
                                                                  <div id="TYnHvP"></div>
                                                               </span>
                                                               <span id="__w2_UEKCrkZ_question_story_editable" class="hidden"></span>                                                               
                                                            </div>
                                                            <div id="mveefU">
                                                               <div id="ejLOyH">
                                                                  <div id="__w2_iNCNg3j_action_bar" class="ActionBar Question action_bar_lite">
                                                                     <div class="action_bar_inner">
                                                                        <div class="primary_item"><span id="QxwNjB"><a id="__w2_LEqv0Ai_button" action_target="{&quot;qid&quot;: 11843675, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_LEqv0Ai_text" class="button_text">Answer</span></a></span></div>
                                                                        <div class="primary_item"><a id="__w2_IJ14UKr_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                        <div class="action_item"><span id="LitWnR"><a id="__w2_t6YdsB5_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11843675, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_t6YdsB5_text" class="button_text">Follow</span><span id="__w2_t6YdsB5_count" class="count">7</span></a></span></div>
                                                                        <div class="action_item"><span id="Khlhrr"><a id="__w2_icjCXIW_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11843675, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_icjCXIW_text" class="button_text">Downvote</span></a></span></div>
                                                                        <div class="overflow action_item overflow_link"><a id="__w2_iNCNg3j_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                        <div id="__w2_iNCNg3j_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                           <div id="__w2_iNCNg3j_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                        </div>
                                                                     </div>
                                                                     <div id="OZGfFl">
                                                                        <div id="__w2_JR3y2Yb_add_answer_editor_wrapper" class="hidden"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="BJHlpI">
                                                <div id="__w2_tcIWN8w_question_feedback" class="feedback_wrapper hidden"></div>
                                                <div id="__w2_tcIWN8w_item" class="FeedStory QuestionFeedStory feed_item">
                                                   <div id="ulCtGV">
                                                      <div id="__w2_Ts0zuAu__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                         <div id="MfGrjX">
                                                            <div class="EventHeader pass_color_to_child_links many_faces">
                                                               <span class="photo_wrapper"></span>Question followed<span class="topic"><span class="bullet"> · </span></span>                                                                  
                                                               <div id="__w2_e1sOwIs_topic_list_item" class="TopicListItem">
                                                                  <div id="ENUgyR">
                                                                     <div id="__w2_QGCKyHS_menu" class="hover_menu hidden white_bg show_nub">
                                                                        <div id="__w2_QGCKyHS_menu_contents" class="hover_menu_contents"> </div>
                                                                     </div>
                                                                     <a id="__w2_QGCKyHS_link" action_mousedown="TopicLinkClickthrough" target="" href="/topic/Science" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="yCUnjp"><span id="__w2_r0a9TG3_card" class="TopicNameSpan TopicName">Science</span></span></span></a>                                                                     
                                                                  </div>
                                                               </div>
                                                               <span class="bullet"> · </span><span class="timestamp"><a href="/unanswered/How-can-I-get-published-in-Science-or-Nature">7m</a></span>                                                               
                                                            </div>
                                                         </div>
                                                         <div id="sLNwrY">
                                                            <div id="JcsOUG">
                                                               <span id="__w2_V79mwQZ_question_story">
                                                                  <div id="TqEEfx">
                                                                     <div id="IaQFIg">
                                                                        <div class="QuestionText"><span id="ymdWIr"><a id="__w2_GQ3Rm4i_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/unanswered/How-can-I-get-published-in-Science-or-Nature" class="question_link"><span class="question_text"><span class="rendered_qtext">How can I get published in Science or Nature?</span></span></a></span></div>
                                                                     </div>
                                                                     <span class="gray_details">
                                                                        <div id="Cvrepy">
                                                                           <div class="QuestionDetails">
                                                                              <div id="CrDnMQ">
                                                                                 <div id="__w2_QYPQsFC_truncated" class="truncated_q_text truncated_para_breaks TruncatedQuestionDetails TruncatedQText">
                                                                                    <span class="rendered_qtext">
                                                                                       <p class="qtext_para">I am currently studying Social Sciences in my second semester in my Bachelor. Let's say I wanted to get published in either Science or Na...</p>
                                                                                    </span>
                                                                                    <span id="__w2_QYPQsFC_more"><a class="more_link">(more)</a></span>                                                                                       
                                                                                    <span id="__w2_QYPQsFC_loading" class="hidden">
                                                                                       <div class="LoadingDots regular">
                                                                                          <div class="dot first"></div>
                                                                                          <div class="dot second"></div>
                                                                                          <div class="dot third"></div>
                                                                                       </div>
                                                                                    </span>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </span>
                                                                  </div>
                                                                  <div class="CantAnswerActionBar ShowOnPass">
                                                                     <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_OdyhLg5_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                     <span class="downvote_link"><span id="glMuSq"><a id="__w2_gVnOBdi_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11850239, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_gVnOBdi_text" class="button_text">Downvote</span></a></span></span>                                                                     
                                                                  </div>
                                                                  <div id="dEpnIl"></div>
                                                                  <div id="raTZTc"></div>
                                                               </span>
                                                               <span id="__w2_V79mwQZ_question_story_editable" class="hidden"></span>                                                               
                                                            </div>
                                                            <div id="GKwOjW">
                                                               <div id="PXGNjE">
                                                                  <div id="__w2_JL6jp9O_action_bar" class="ActionBar Question action_bar_lite">
                                                                     <div class="action_bar_inner">
                                                                        <div class="primary_item"><span id="JFIAXn"><a id="__w2_Y2FEWkO_button" action_target="{&quot;qid&quot;: 11850239, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_Y2FEWkO_text" class="button_text">Answer</span></a></span></div>
                                                                        <div class="primary_item"><a id="__w2_xixUDUK_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                        <div class="action_item"><span id="yOfNhj"><a id="__w2_w8sE6bX_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11850239, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_w8sE6bX_text" class="button_text">Follow</span><span id="__w2_w8sE6bX_count" class="count">2</span></a></span></div>
                                                                        <div class="action_item"><span id="GyJKaO"><a id="__w2_Ektk8rJ_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11850239, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_Ektk8rJ_text" class="button_text">Downvote</span></a></span></div>
                                                                        <div class="overflow action_item overflow_link"><a id="__w2_JL6jp9O_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                        <div id="__w2_JL6jp9O_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                           <div id="__w2_JL6jp9O_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                        </div>
                                                                     </div>
                                                                     <div id="lflZAm">
                                                                        <div id="__w2_D4tNQas_add_answer_editor_wrapper" class="hidden"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="vpaHXI">
                                                <div id="__w2_Nnyb5UF_question_feedback" class="feedback_wrapper hidden"></div>
                                                <div id="__w2_Nnyb5UF_item" class="FeedStory QuestionFeedStory feed_item">
                                                   <div id="FnEVOu">
                                                      <div id="__w2_dTpVgKG__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                         <div id="ntqkIw">
                                                            <div class="EventHeader pass_color_to_child_links many_faces">
                                                               <span class="photo_wrapper"></span>Question followed<span class="topic"><span class="bullet"> · </span></span>                                                                  
                                                               <div id="__w2_uP2rmb0_topic_list_item" class="TopicListItem">
                                                                  <div id="qJfwAc">
                                                                     <div id="__w2_IMSAYKX_menu" class="hover_menu hidden white_bg show_nub">
                                                                        <div id="__w2_IMSAYKX_menu_contents" class="hover_menu_contents"> </div>
                                                                     </div>
                                                                     <a id="__w2_IMSAYKX_link" action_mousedown="TopicLinkClickthrough" target="" href="/topic/Dating-and-Relationships-1" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="NxYPDb"><span id="__w2_RSYKjeI_card" class="TopicNameSpan TopicName">Dating and Relationships</span></span></span></a>                                                                     
                                                                  </div>
                                                               </div>
                                                               <span class="bullet"> · </span><span class="timestamp"><a href="/Why-would-an-ex-text-me-a-joke-out-of-nowhere">5h</a></span>                                                               
                                                            </div>
                                                         </div>
                                                         <div id="mVWMSU">
                                                            <div id="QPeDig">
                                                               <span id="__w2_Je1ZqAZ_question_story">
                                                                  <div id="qLhEBf">
                                                                     <div id="ksYGks">
                                                                        <div class="QuestionText"><span id="DGrKhd"><a id="__w2_IuhL0Tq_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/Why-would-an-ex-text-me-a-joke-out-of-nowhere" class="question_link"><span class="question_text"><span class="rendered_qtext">Why would an ex text me a joke out of nowhere?</span></span></a></span></div>
                                                                     </div>
                                                                     <span class="gray_details">
                                                                        <div id="ygtKUb">
                                                                           <div class="QuestionDetails">
                                                                              <div id="ZimuNA">
                                                                                 <div id="__w2_LAcdhbh_truncated" class="truncated_q_text truncated_para_breaks TruncatedQuestionDetails TruncatedQText">
                                                                                    <span class="rendered_qtext">
                                                                                       <p class="qtext_para">He used my nickname (only close friends and family know it; he shouldn't use it now), and then he said a joke. It’s been 8 months since w...</p>
                                                                                    </span>
                                                                                    <span id="__w2_LAcdhbh_more"><a class="more_link">(more)</a></span>                                                                                       
                                                                                    <span id="__w2_LAcdhbh_loading" class="hidden">
                                                                                       <div class="LoadingDots regular">
                                                                                          <div class="dot first"></div>
                                                                                          <div class="dot second"></div>
                                                                                          <div class="dot third"></div>
                                                                                       </div>
                                                                                    </span>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </span>
                                                                  </div>
                                                                  <div class="CantAnswerActionBar ShowOnPass">
                                                                     <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_mUyhZsa_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                     <span class="downvote_link"><span id="WImoPq"><a id="__w2_mCTJuT8_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11846322, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_mCTJuT8_text" class="button_text">Downvote</span></a></span></span>                                                                     
                                                                  </div>
                                                                  <div id="rUuira">
                                                                     <div id="__w2_uEFdMzp_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_uEFdMzp_link" href="/Why-would-an-ex-text-me-a-joke-out-of-nowhere" class="read_answers">Read 6 Answers</a></div>
                                                                  </div>
                                                                  <div id="dzKJNq"></div>
                                                               </span>
                                                               <span id="__w2_Je1ZqAZ_question_story_editable" class="hidden"></span>                                                               
                                                            </div>
                                                            <div id="qagrGD">
                                                               <div id="tbXFAw">
                                                                  <div id="__w2_bN7vXo2_action_bar" class="ActionBar Question action_bar_lite">
                                                                     <div class="action_bar_inner">
                                                                        <div class="primary_item"><span id="BLWyZG"><a id="__w2_fU3IN00_button" action_target="{&quot;qid&quot;: 11846322, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_fU3IN00_text" class="button_text">Answer</span></a></span></div>
                                                                        <div class="primary_item"><a id="__w2_fGOspfM_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                        <div class="action_item"><span id="xqUOGJ"><a id="__w2_Pn3Qr5B_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11846322, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_Pn3Qr5B_text" class="button_text">Follow</span><span id="__w2_Pn3Qr5B_count" class="count">1</span></a></span></div>
                                                                        <div class="action_item"><span id="tTRJDD"><a id="__w2_CVUsXAX_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11846322, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_CVUsXAX_text" class="button_text">Downvote</span></a></span></div>
                                                                        <div class="overflow action_item overflow_link"><a id="__w2_bN7vXo2_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                        <div id="__w2_bN7vXo2_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                           <div id="__w2_bN7vXo2_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                        </div>
                                                                     </div>
                                                                     <div id="jLyQvx">
                                                                        <div id="__w2_iLUxU0t_add_answer_editor_wrapper" class="hidden"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="rszNbS">
                                                <div id="__w2_HOOchzP_question_feedback" class="feedback_wrapper hidden"></div>
                                                <div id="__w2_HOOchzP_item" class="FeedStory QuestionFeedStory feed_item">
                                                   <div id="BwjEjv">
                                                      <div id="__w2_UbYJC2v__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                         <div id="yinSYn">
                                                            <div class="EventHeader pass_color_to_child_links many_faces">
                                                               <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                                  
                                                               <div id="__w2_PSDY0Nf_topic_list_item" class="TopicListItem">
                                                                  <div id="hXHDij">
                                                                     <div id="__w2_Z9VR7EH_menu" class="hover_menu hidden white_bg show_nub">
                                                                        <div id="__w2_Z9VR7EH_menu_contents" class="hover_menu_contents"> </div>
                                                                     </div>
                                                                     <a id="__w2_Z9VR7EH_link" action_mousedown="TopicLinkClickthrough" target="" href="/topic/Politics" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="cXYOnH"><span id="__w2_TzDnzrF_card" class="TopicNameSpan TopicName">Politics</span></span></span></a>                                                                     
                                                                  </div>
                                                               </div>
                                                               <span class="bullet"> · </span><span class="timestamp"><a href="/Are-there-different-variations-of-social-conservatism-in-the-United-States">8h</a></span>                                                               
                                                            </div>
                                                         </div>
                                                         <div id="zRJnmj">
                                                            <div id="aKXhso">
                                                               <span id="__w2_WKv8qr5_question_story">
                                                                  <div id="siKvkm">
                                                                     <div id="rhhaax">
                                                                        <div class="QuestionText"><span id="wNsOVV"><a id="__w2_juwFmhl_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/Are-there-different-variations-of-social-conservatism-in-the-United-States" class="question_link"><span class="question_text"><span class="rendered_qtext">Are there different variations of social conservatism in the United States?</span></span></a></span></div>
                                                                     </div>
                                                                     <span class="gray_details">
                                                                        <div id="nHsMDr">
                                                                           <div class="QuestionDetails">
                                                                              <div id="CDQIGc">
                                                                                 <div id="__w2_EbxD7HZ_truncated" class="truncated_q_text truncated_para_breaks TruncatedQuestionDetails TruncatedQText">
                                                                                    <span class="rendered_qtext">
                                                                                       <p class="qtext_para">I find myself opposed to abortion, amnesty and affirmative action but supporting more progressive ideas like gay marriage and drug decrim...</p>
                                                                                    </span>
                                                                                    <span id="__w2_EbxD7HZ_more"><a class="more_link">(more)</a></span>                                                                                       
                                                                                    <span id="__w2_EbxD7HZ_loading" class="hidden">
                                                                                       <div class="LoadingDots regular">
                                                                                          <div class="dot first"></div>
                                                                                          <div class="dot second"></div>
                                                                                          <div class="dot third"></div>
                                                                                       </div>
                                                                                    </span>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </span>
                                                                  </div>
                                                                  <div class="CantAnswerActionBar ShowOnPass">
                                                                     <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_BtfUQdE_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                     <span class="downvote_link"><span id="nLqCGs"><a id="__w2_mMayvYa_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11844844, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_mMayvYa_text" class="button_text">Downvote</span></a></span></span>                                                                     
                                                                  </div>
                                                                  <div id="hnNQMh">
                                                                     <div id="__w2_H4XGhw1_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_H4XGhw1_link" href="/Are-there-different-variations-of-social-conservatism-in-the-United-States" class="read_answers">Read 5 Answers</a></div>
                                                                  </div>
                                                                  <div id="MjnJZP"></div>
                                                               </span>
                                                               <span id="__w2_WKv8qr5_question_story_editable" class="hidden"></span>                                                               
                                                            </div>
                                                            <div id="yYtPYJ">
                                                               <div id="mdGFxN">
                                                                  <div id="__w2_IXaJpx2_action_bar" class="ActionBar Question action_bar_lite">
                                                                     <div class="action_bar_inner">
                                                                        <div class="primary_item"><span id="LTpWAG"><a id="__w2_HXUWvzZ_button" action_target="{&quot;qid&quot;: 11844844, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_HXUWvzZ_text" class="button_text">Answer</span></a></span></div>
                                                                        <div class="primary_item"><a id="__w2_l6LgTGb_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                        <div class="action_item"><span id="hjTPyf"><a id="__w2_QZX32co_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11844844, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_QZX32co_text" class="button_text">Follow</span><span id="__w2_QZX32co_count" class="count">5</span></a></span></div>
                                                                        <div class="action_item"><span id="imhezw"><a id="__w2_tZkwq1D_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11844844, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_tZkwq1D_text" class="button_text">Downvote</span></a></span></div>
                                                                        <div class="overflow action_item overflow_link"><a id="__w2_IXaJpx2_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                        <div id="__w2_IXaJpx2_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                           <div id="__w2_IXaJpx2_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                        </div>
                                                                     </div>
                                                                     <div id="wLUzFP">
                                                                        <div id="__w2_SvcWO6M_add_answer_editor_wrapper" class="hidden"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="ImOlme">
                                                <div id="__w2_w5KvmgI_question_feedback" class="feedback_wrapper hidden"></div>
                                                <div id="__w2_w5KvmgI_item" class="FeedStory QuestionFeedStory feed_item">
                                                   <div id="bAFRsW">
                                                      <div id="__w2_bqci0C3__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                         <div id="GyIgRN">
                                                            <div class="EventHeader pass_color_to_child_links many_faces">
                                                               <span class="photo_wrapper"></span>Question followed<span class="topic"><span class="bullet"> · </span></span>                                                                  
                                                               <div id="__w2_A6VVKVX_topic_list_item" class="TopicListItem">
                                                                  <div id="chtGjM">
                                                                     <div id="__w2_kqvH6vD_menu" class="hover_menu hidden white_bg show_nub">
                                                                        <div id="__w2_kqvH6vD_menu_contents" class="hover_menu_contents"> </div>
                                                                     </div>
                                                                     <a id="__w2_kqvH6vD_link" action_mousedown="TopicLinkClickthrough" target="" href="/topic/Music" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="MImaJt"><span id="__w2_Yumwdla_card" class="TopicNameSpan TopicName">Music</span></span></span></a>                                                                     
                                                                  </div>
                                                               </div>
                                                               <span class="bullet"> · </span><span class="timestamp"><a href="/unanswered/What-is-the-title-of-this-80s-song-starting-with-a-woman-in-the-snow">11m</a></span>                                                               
                                                            </div>
                                                         </div>
                                                         <div id="eswzeI">
                                                            <div id="UXVXLR">
                                                               <span id="__w2_VqofWTB_question_story">
                                                                  <div id="EwxwjS">
                                                                     <div id="XlLNda">
                                                                        <div class="QuestionText"><span id="vAgRST"><a id="__w2_IqgAFOD_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/unanswered/What-is-the-title-of-this-80s-song-starting-with-a-woman-in-the-snow" class="question_link"><span class="question_text"><span class="rendered_qtext">What is the title of this 80s song, starting with a woman in the snow?</span></span></a></span></div>
                                                                     </div>
                                                                     <span class="gray_details">
                                                                        <div id="EtNyYf"></div>
                                                                     </span>
                                                                  </div>
                                                                  <div class="CantAnswerActionBar ShowOnPass">
                                                                     <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_Bzt8ANv_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                     <span class="downvote_link"><span id="uWKGiZ"><a id="__w2_QqiVDBY_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11850229, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_QqiVDBY_text" class="button_text">Downvote</span></a></span></span>                                                                     
                                                                  </div>
                                                                  <div id="YABhiw"></div>
                                                                  <div id="oLSpnM"></div>
                                                               </span>
                                                               <span id="__w2_VqofWTB_question_story_editable" class="hidden"></span>                                                               
                                                            </div>
                                                            <div id="IIRLac">
                                                               <div id="phtmuY">
                                                                  <div id="__w2_uQJAioP_action_bar" class="ActionBar Question action_bar_lite">
                                                                     <div class="action_bar_inner">
                                                                        <div class="primary_item"><span id="Rksfqe"><a id="__w2_PbtAF2T_button" action_target="{&quot;qid&quot;: 11850229, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_PbtAF2T_text" class="button_text">Answer</span></a></span></div>
                                                                        <div class="primary_item"><a id="__w2_ykijzt4_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                        <div class="action_item"><span id="KrnFbP"><a id="__w2_SN40L19_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11850229, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_SN40L19_text" class="button_text">Follow</span><span id="__w2_SN40L19_count" class="count">1</span></a></span></div>
                                                                        <div class="action_item"><span id="GGoGLa"><a id="__w2_XvteFTZ_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11850229, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_XvteFTZ_text" class="button_text">Downvote</span></a></span></div>
                                                                        <div class="overflow action_item overflow_link"><a id="__w2_uQJAioP_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                        <div id="__w2_uQJAioP_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                           <div id="__w2_uQJAioP_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                        </div>
                                                                     </div>
                                                                     <div id="LCfeJO">
                                                                        <div id="__w2_MtEtOig_add_answer_editor_wrapper" class="hidden"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="xkRMMI">
                                                <div id="__w2_t8Hppan_question_feedback" class="feedback_wrapper hidden"></div>
                                                <div id="__w2_t8Hppan_item" class="FeedStory QuestionFeedStory feed_item">
                                                   <div id="cbUefQ">
                                                      <div id="__w2_tl7lF9c__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                         <div id="ZsFMCK">
                                                            <div class="EventHeader pass_color_to_child_links many_faces">
                                                               <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                                  
                                                               <div id="__w2_m0g1yCL_topic_list_item" class="TopicListItem">
                                                                  <div id="lPkuCb">
                                                                     <div id="__w2_EsjfdpP_menu" class="hover_menu hidden white_bg show_nub">
                                                                        <div id="__w2_EsjfdpP_menu_contents" class="hover_menu_contents"> </div>
                                                                     </div>
                                                                     <a id="__w2_EsjfdpP_link" action_mousedown="TopicLinkClickthrough" target="" href="/topic/Rogue-One-A-Star-Wars-Story-2016-movie" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="vjHpbG"><span id="__w2_iNqJdfy_card" class="TopicNameSpan TopicName"><span id="__w2_up7svAc_trending" class="TopicTrendingIndicator">&nbsp;</span>Rogue One: A Star Wars Story</span></span></span></a>                                                                     
                                                                  </div>
                                                               </div>
                                                               <span class="bullet"> · </span><span class="timestamp"><a href="/Could-there-be-a-rogue-2-Star-Wars-movie">1h</a></span>                                                               
                                                            </div>
                                                         </div>
                                                         <div id="zAZOwx">
                                                            <div id="pJmWpH">
                                                               <span id="__w2_XwmdCXz_question_story">
                                                                  <div id="qxqgiM">
                                                                     <div id="HTOICu">
                                                                        <div class="QuestionText"><span id="OapxKG"><a id="__w2_fukntVw_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/Could-there-be-a-rogue-2-Star-Wars-movie" class="question_link"><span class="question_text"><span class="rendered_qtext">Could there be a rogue 2 Star Wars movie?</span></span></a></span></div>
                                                                     </div>
                                                                     <span class="gray_details">
                                                                        <div id="Pjhpwv">
                                                                           <div class="QuestionDetails">
                                                                              <div id="EBIHjV">
                                                                                 <div id="__w2_R5lzUa1_truncated" class="truncated_q_text truncated_para_breaks TruncatedQuestionDetails TruncatedQText">
                                                                                    <span class="rendered_qtext">
                                                                                       <p class="qtext_para">Possible spoilers.</p>
                                                                                       <p class="qtext_para">So considering how the movie ends and we know the outcome no would be the answer. However we know they did the same thi...</p>
                                                                                    </span>
                                                                                    <span id="__w2_R5lzUa1_more"><a class="more_link">(more)</a></span>                                                                                       
                                                                                    <span id="__w2_R5lzUa1_loading" class="hidden">
                                                                                       <div class="LoadingDots regular">
                                                                                          <div class="dot first"></div>
                                                                                          <div class="dot second"></div>
                                                                                          <div class="dot third"></div>
                                                                                       </div>
                                                                                    </span>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </span>
                                                                  </div>
                                                                  <div class="CantAnswerActionBar ShowOnPass">
                                                                     <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_KFuQalN_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                     <span class="downvote_link"><span id="RfwaCF"><a id="__w2_hzA0Rwz_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11849102, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_hzA0Rwz_text" class="button_text">Downvote</span></a></span></span>                                                                     
                                                                  </div>
                                                                  <div id="eXuBWj">
                                                                     <div id="__w2_f9WOTfv_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_f9WOTfv_link" href="/Could-there-be-a-rogue-2-Star-Wars-movie" class="read_answers">Read 1 Answer</a></div>
                                                                  </div>
                                                                  <div id="rLhuTv"></div>
                                                               </span>
                                                               <span id="__w2_XwmdCXz_question_story_editable" class="hidden"></span>                                                               
                                                            </div>
                                                            <div id="rjXGdF">
                                                               <div id="ROGDKm">
                                                                  <div id="__w2_oNAHdWG_action_bar" class="ActionBar Question action_bar_lite">
                                                                     <div class="action_bar_inner">
                                                                        <div class="primary_item"><span id="ApRRJV"><a id="__w2_h3McKXp_button" action_target="{&quot;qid&quot;: 11849102, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_h3McKXp_text" class="button_text">Answer</span></a></span></div>
                                                                        <div class="primary_item"><a id="__w2_i4YeWzA_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                        <div class="action_item"><span id="NHgxFr"><a id="__w2_AC4KkdD_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11849102, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_AC4KkdD_text" class="button_text">Follow</span><span id="__w2_AC4KkdD_count" class="count">1</span></a></span></div>
                                                                        <div class="action_item"><span id="QzTQhN"><a id="__w2_beoRS31_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11849102, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_beoRS31_text" class="button_text">Downvote</span></a></span></div>
                                                                        <div class="overflow action_item overflow_link"><a id="__w2_oNAHdWG_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                        <div id="__w2_oNAHdWG_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                           <div id="__w2_oNAHdWG_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                        </div>
                                                                     </div>
                                                                     <div id="FFPQuL">
                                                                        <div id="__w2_hWSGKAB_add_answer_editor_wrapper" class="hidden"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="leMIwC">
                                                <div id="__w2_KeAyH32_question_feedback" class="feedback_wrapper hidden"></div>
                                                <div id="__w2_KeAyH32_item" class="FeedStory QuestionFeedStory feed_item">
                                                   <div id="ODwVho">
                                                      <div id="__w2_km2WhwN__inline" class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight">
                                                         <div id="ZMPPhJ">
                                                            <div class="EventHeader pass_color_to_child_links many_faces">
                                                               <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> · </span></span>                                                                  
                                                               <div id="__w2_sRjC4ls_topic_list_item" class="TopicListItem">
                                                                  <div id="DpNUxV">
                                                                     <div id="__w2_CZdUyGB_menu" class="hover_menu hidden white_bg show_nub">
                                                                        <div id="__w2_CZdUyGB_menu_contents" class="hover_menu_contents"> </div>
                                                                     </div>
                                                                     <a id="__w2_CZdUyGB_link" action_mousedown="TopicLinkClickthrough" target="" href="/topic/Dating-and-Relationships-1" class="TopicNameLink HoverMenu topic_name"><span class="name_text"><span id="gmrYiB"><span id="__w2_hNonNeQ_card" class="TopicNameSpan TopicName">Dating and Relationships</span></span></span></a>                                                                     
                                                                  </div>
                                                               </div>
                                                               <span class="bullet"> · </span><span class="timestamp"><a href="/Do-women-only-find-tall-men-attractive">1am</a></span>                                                               
                                                            </div>
                                                         </div>
                                                         <div id="Stfpfs">
                                                            <div id="LgGmiF">
                                                               <span id="__w2_tWj2thL_question_story">
                                                                  <div id="YWfUGD">
                                                                     <div id="ohXpSm">
                                                                        <div class="QuestionText"><span id="OgMsYc"><a id="__w2_Fegdtqy_link" rel="noopener" action_mousedown="QuestionLinkClickthrough" target="_blank" href="/Do-women-only-find-tall-men-attractive" class="question_link"><span class="question_text"><span class="rendered_qtext">Do women only find tall men attractive?</span></span></a></span></div>
                                                                     </div>
                                                                     <span class="gray_details">
                                                                        <div id="DxPnom"></div>
                                                                     </span>
                                                                  </div>
                                                                  <div class="CantAnswerActionBar ShowOnPass">
                                                                     <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> · </span><a id="__w2_bHwd0s5_undo_cant_answer" href="#" class="undo_cant_answer">Undo</a></div>
                                                                     <span class="downvote_link"><span id="KQjiRl"><a id="__w2_GoJYFpl_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11840814, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_GoJYFpl_text" class="button_text">Downvote</span></a></span></span>                                                                     
                                                                  </div>
                                                                  <div id="PhRcJa">
                                                                     <div id="__w2_hsJnduT_content_footer" class="ContentFooter QuestionFooter"><a id="__w2_hsJnduT_link" href="/Do-women-only-find-tall-men-attractive" class="read_answers">Read 6 Answers</a></div>
                                                                  </div>
                                                                  <div id="iFIcAZ"></div>
                                                               </span>
                                                               <span id="__w2_tWj2thL_question_story_editable" class="hidden"></span>                                                               
                                                            </div>
                                                            <div id="OzMuch">
                                                               <div id="PiZxCT">
                                                                  <div id="__w2_MrEuxsJ_action_bar" class="ActionBar Question action_bar_lite">
                                                                     <div class="action_bar_inner">
                                                                        <div class="primary_item"><span id="FQNopu"><a id="__w2_zTOm6PY_button" action_target="{&quot;qid&quot;: 11840814, &quot;type&quot;: &quot;question&quot;}" href="#" class="WriteAnswer Button WriteAnswerButton"><span id="__w2_zTOm6PY_text" class="button_text">Answer</span></a></span></div>
                                                                        <div class="primary_item"><a id="__w2_vqR7WMq_cant_answer" action_mousedown="PassWritePage" href="#" class="CantAnswerLink action_button">Pass</a></div>
                                                                        <div class="action_item"><span id="ZQditH"><a id="__w2_tuxSlCu_button" action_click="QuestionFollow" action_target="{&quot;qid&quot;: 11840814, &quot;type&quot;: &quot;question&quot;}" href="#" class="Button TwoStateButton Question secondary_action"><span id="__w2_tuxSlCu_text" class="button_text">Follow</span><span id="__w2_tuxSlCu_count" class="count">1</span></a></span></div>
                                                                        <div class="action_item"><span id="eqUEEj"><a id="__w2_gs3aTta_button" action_click="QuestionDownvote" action_target="{&quot;qid&quot;: 11840814, &quot;type&quot;: &quot;question&quot;}" href="#" class="Downvote Button TwoStateButton Question secondary_action"><span id="__w2_gs3aTta_text" class="button_text">Downvote</span></a></span></div>
                                                                        <div class="overflow action_item overflow_link"><a id="__w2_MrEuxsJ_overflow_link" href="#" class="overflow_link"><span class="dots overflow_dots"></span></a></div>
                                                                        <div id="__w2_MrEuxsJ_overflow_menu" class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach">
                                                                           <div id="__w2_MrEuxsJ_overflow_menu_contents" class="hover_menu_contents lazy"></div>
                                                                        </div>
                                                                     </div>
                                                                     <div id="jCFwLO">
                                                                        <div id="__w2_BUGZR7R_add_answer_editor_wrapper" class="hidden"></div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                             <div id="__w2_oeTUeSG_view_all"><a href="/answer/top_questions" class="view_all_button"><span>View All</span></a></div>
                                          </div>
                                       </div>
                                       <div class="NotEnoughKnowsAboutTopicsPrompt EditKnowsAboutTopicsSection">
                                          <div class="icon_frame"><span class="icon"></span></div>
                                          <h1>Thêm 5 chủ đề mà bạn biết</h1>
                                          <p>Thêm chủ đề cho một thức ăn tùy chỉnh với các câu hỏi mà bạn có thể trả lời.</p>
                                          <a id="__w2_XpCKLFk_add_topics_link" class="search_link" target="_blank">Search for Topics</a>                                          
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div id="__w2_dgjTV73__expanded" class="ExpandableBundle SimpleToggle TopQuestionsForYou Toggle Bundle hidden"></div>
                           </div>
                        </div>
                        <div id="__w2_Bi2eLuW_more" class="hidden">
                           <div id="MrvFHh" class="pagedlist_item pagedlist_invisible">
                              <div class="PagedListInvisibleItem FeedBottomIndicator">You've reached the end of your feed.<span id="__w2_Vz3oLLI_feed_bottom" class="primary_button">More Stories</span></div>
                           </div>
                        </div>
                        <div id="__w2_Bi2eLuW_spinner" class="spinner_display_area hidden"></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div id="QYsCWU"></div>
   
   <div id="__w2_FH6ZDTR_loading" class="__live_spinner hidden">
      <div id="__w2_FH6ZDTR_spinner" class="__live_spinner_indicator"></div>
   </div>
   <div id="__w2_wo9t2mV_pmsg_container" class="PMsgContainer"></div>
   <div id="WlzWrN"></div>
   <div class="tiny_swf">
      <div id="__w2_uwoYj1l_flash" style="visibility: visible;"></div>
   </div>
   <script type="text/javascript">
    require.whenReady("shared/main-loaded", function() {
        require.whenReady(["webnode2"], function() {
            require('webnode2').windowId = "dep3602-697014490613885210";
        });
    });
</script>
<script type="text/javascript">
    require.whenReady("shared/main-loaded", function() {
        require.whenReady(["tchannel_up"], function() {
            require("tchannel_up").start(0, "main-w-dep3602-697014490613885210", "15444379490512616933", "chan31-8888", "quora.com", "");
        });
    });
</script>
<script type="text/javascript">
    document.title = "Write Answers - Quora";
</script>
<script type="text/javascript">
    require.whenReady("shared/main-loaded", function() {
        require("shared/core/component").beforeOnLoad();
        var coreComponent = require('shared/core/component');
        var newComponent = coreComponent.newComponent;
        coreComponent.addComponentMetadata({
            parents: {
                "Se2tk1M": "z70URbw",
                "YHxc6yn": "a23RcYV",
                "Xbyfi86": "z70URbw",
                "ZJxizQ7": "gxoyvlk",
                "pl9Qyqi": "ZWY3DCc",
                "k4Fa8RR": "YChuibA",
                "RlW3mlx": "LAqOojb",
                "lkiJAa8": "ZWY3DCc",
                "HzycUSF": "n6gVeiY",
                "OSWq0DL": "YE0ZNHa",
                "Y7n7I7k": "yMifgUe",
                "MofZdfX": "ybJb1qx",
                "GOHcH5H": "rvnYt78",
                "PYAgct9": "z70URbw",
                "n6gVeiY": "V8pLBna",
                "ccJmhxL": "KgAQJoN",
                "Ht3thmF": "HAG9XpQ",
                "M4Bzsn8": "kKsK2Je",
                "ilQAes0": "tLOFnJv",
                "ZKtbing": "UgkqCsL",
                "Jkklmts": "PYAgct9",
                "N7H6jMa": "ToxsVDw",
                "YBGWXEf": "jSX3nIQ",
                "Zn4vdCD": "EKeXxa0",
                "vn8W7Fu": "GqfQ8T1",
                "jvBujVY": "*ROOT*",
                "pcCgubO": "aCKN7xH",
                "ezFJrmO": "lNZcWna",
                "hgWucvy": "dgjTV73",
                "kTVMNFW": "ED9gun9",
                "XXZxg8e": "NLk60yQ",
                "lgzj9wz": "YHxc6yn",
                "CQPqG5K": "kDAykuv",
                "gUqBHdz": "RzK8bKJ",
                "fm5bjnz": "nEj3lGs",
                "WNBFAsd": "LmHzzTP",
                "vycQMaV": "OTq01u4",
                "pi6nCoi": "XFkKlZ9",
                "hYTClta": "Se2tk1M",
                "QpxZ9bf": "RzK8bKJ",
                "zlpGV1R": "zIsOts7",
                "qM5FHax": "TlRfOoL",
                "uqyOb5A": "RPzxMSk",
                "tBkt2iY": "trKYjPL",
                "HHUjGtC": "zMLzmae",
                "EKeXxa0": "sVPsKeg",
                "LIAcHGS": "mqo3FJT",
                "lu8SzXu": "RzifwyO",
                "sx9ipBl": "CQPqG5K",
                "OTq01u4": "OSWq0DL",
                "HVvhcg6": "ixzn7yX",
                "FnGVLpg": "bNb9vup",
                "VaDLjNP": "zMLzmae",
                "nEj3lGs": "Xg8m3ZO",
                "lrdyITG": "S6qwgqK",
                "QpKOfrn": "bZ6ZZS3",
                "MlgOpLK": "ClWKczZ",
                "XlExwfT": "xRcgNTK",
                "XFkKlZ9": "PYx9d9E",
                "LmHzzTP": "Cptow8M",
                "ixzn7yX": "RPzxMSk",
                "rRBwjv3": "wQCksfR",
                "yEBU3va": "Xg8m3ZO",
                "pYlfzHO": "jGbrkQH",
                "YE0ZNHa": "jSX3nIQ",
                "JHwIDu8": "dgjTV73",
                "hiwg9iz": "PYAgct9",
                "EKr9SSR": "hiwg9iz",
                "KaXodvO": "PYAgct9",
                "od7kaKB": "SDBTYqW",
                "mMBjRMQ": "WGbfo9s",
                "WGbfo9s": "f9WwAka",
                "TlRfOoL": "MofZdfX",
                "b4Y6Ctl": "ZOw6IPG",
                "W8YA1Qt": "RFagAg9",
                "bu3mSz9": "CQPqG5K",
                "Terv7ZJ": "oikuD5W",
                "nbaqOGR": "JMR1Hnc",
                "Z434TWh": "vvzl0Rb",
                "oLI84yf": "dgjTV73",
                "SDBTYqW": "HkaLGQ0",
                "rBNm5zF": "Gs0Tv0z",
                "N4OGnHm": "IXwn0qW",
                "g3JpmiI": "dgjTV73",
                "RFagAg9": "jSX3nIQ",
                "afkVVk3": "YHxc6yn",
                "v0yh8e6": "z70URbw",
                "eFWs95w": "MlgOpLK",
                "GrXpIMk": "He3qRoN",
                "Mu1k6Pb": "dgjTV73",
                "T1CzgSI": "M9NHLQj",
                "qz4YGKv": "jTxDtN3",
                "kycJApV": "wQCksfR",
                "ZWY3DCc": "D7pGnm4",
                "VsQvlIy": "ZWY3DCc",
                "uwoYj1l": "*ROOT*",
                "M9NHLQj": "NLk60yQ",
                "aCKN7xH": "zIsOts7",
                "dvmY3rF": "cEtfDjQ",
                "PEh8Uaf": "s5KZAKo",
                "YtNJwzb": "ezFJrmO",
                "w8lyc9G": "FGHCX08",
                "rvnYt78": "XlExwfT",
                "iHsuk1j": "wQCksfR",
                "a23RcYV": "JMR1Hnc",
                "fSJ86ZV": "XFkKlZ9",
                "wQCksfR": "*ROOT*",
                "lHe4ISi": "MlgOpLK",
                "vTDxHwv": "OZBmad6",
                "dgjTV73": "Bi2eLuW",
                "J976uD7": "u05WCkd",
                "UbiU1rl": "rRBwjv3",
                "Bi2eLuW": "UbiU1rl",
                "MAZAWgC": "*ROOT*",
                "v5YWtwG": "S6qwgqK",
                "J9shWga": "RzK8bKJ",
                "jfrq1Oe": "dgjTV73",
                "mUPK3PG": "MoGUKFv",
                "b0I3d6N": "f9WwAka",
                "u05WCkd": "g3JpmiI",
                "D7pGnm4": "J976uD7",
                "MXIwUQS": "YHxc6yn",
                "ziuiE8w": "VsQvlIy",
                "ffBZmbh": "SDBTYqW",
                "KgAQJoN": "Zn4vdCD",
                "wuq0oVx": "QjsD6ZF",
                "fnNIBEm": "sx9ipBl",
                "V8pLBna": "UbiU1rl",
                "tFmjdjp": "WEYMvvi",
                "EziN22C": "Xg8m3ZO",
                "JtUd1Gh": "z70URbw",
                "UyFzydT": "MXIwUQS",
                "UgkqCsL": "HDMJ0vm",
                "mqo3FJT": "Zn4vdCD",
                "xpsBThh": "O8yODNG",
                "ED9gun9": "zze9EMY",
                "WweA7HT": "VD5mUFZ",
                "zze9EMY": "kYJ4blh",
                "x4DTdtP": "pi6nCoi",
                "dsLqN82": "ffBZmbh",
                "dOUpgM9": "bZ6ZZS3",
                "qvRBH8k": "DDIDTcw",
                "bZ6ZZS3": "twHLO94",
                "d7Semck": "PYAgct9",
                "n3d5T5G": "ZKtbing",
                "I8FWbbP": "rRBwjv3",
                "zMLzmae": "z70URbw",
                "vW0gmzD": "PoTBrFe",
                "LAqOojb": "ED9gun9",
                "WgdXCBr": "gUqBHdz",
                "BOEodbN": "vTDxHwv",
                "aWrCYpV": "dsLqN82",
                "xRcgNTK": "ClWKczZ",
                "OP2lUp2": "GOHcH5H",
                "HdFVMBR": "bu3mSz9",
                "Yd6oR1C": "ED9gun9",
                "Xyh5S8u": "YHxc6yn",
                "AbehMqG": "QjsD6ZF",
                "l9VF275": "dgjTV73",
                "ybJb1qx": "M4Bzsn8",
                "Aa65gQg": "WGbfo9s",
                "S6qwgqK": "RPzxMSk",
                "ZOw6IPG": "OZBmad6",
                "mJVRLwj": "TlRfOoL",
                "sKzQP17": "n6gVeiY",
                "iGtVHql": "Se2tk1M",
                "mrfM4ep": "u05WCkd",
                "VD5mUFZ": "dvmY3rF",
                "fdaJX2K": "s9aOS8P",
                "ZIirF7R": "n6gVeiY",
                "RzK8bKJ": "OLQMKfA",
                "LZuo4qH": "Cxzjt8M",
                "OEBbyjs": "Cxzjt8M",
                "uzW5csO": "mrfM4ep",
                "He3qRoN": "RzK8bKJ",
                "TUOTQwH": "hgWucvy",
                "MoGUKFv": "TlRfOoL",
                "jhHUXXP": "UKu0cYf",
                "AKZ5jDH": "afkVVk3",
                "sQUTj5P": "*ROOT*",
                "xoExzB1": "jhHUXXP",
                "JMR1Hnc": "UKu0cYf",
                "a0PBtBC": "DDIDTcw",
                "DDIDTcw": "JR1DTY7",
                "Xd9M3if": "UgkqCsL",
                "XY9Ofoq": "jhHUXXP",
                "HDMJ0vm": "oLI84yf",
                "QOjtPFv": "Cptow8M",
                "jGbrkQH": "GQfO7EF",
                "Euqq1eF": "bZ6ZZS3",
                "f9WwAka": "lHe4ISi",
                "RexJYrh": "*ROOT*",
                "VbL7AkZ": "QpxZ9bf",
                "vqHsQsR": "*ROOT*",
                "z70URbw": "wQCksfR",
                "YXeVZfh": "pqBozuI",
                "YUyMZ85": "CQPqG5K",
                "s9aOS8P": "v3hS2wd",
                "pqBozuI": "KsbMYz7",
                "fAOIxv6": "TUOTQwH",
                "JR1DTY7": "sVPsKeg",
                "gKwQjKh": "Y7n7I7k",
                "u2zECDl": "VD5mUFZ",
                "yMifgUe": "kYJ4blh",
                "RoiryVQ": "N4OGnHm",
                "cEtfDjQ": "HkaLGQ0",
                "WEYMvvi": "z70URbw",
                "LE25vKP": "tsPpADC",
                "UQVDSX1": "J8Iid8b",
                "k3bclZZ": "aWrCYpV",
                "oaAvkp0": "z70URbw",
                "Cd1zgE7": "n6gVeiY",
                "QhV1BC2": "FnGVLpg",
                "wU41aRc": "TlRfOoL",
                "q5b1cAQ": "QOjtPFv",
                "kDAykuv": "cEtfDjQ",
                "njOI5HW": "*ROOT*",
                "XkT7x3l": "*ROOT*",
                "zIsOts7": "DDIDTcw",
                "vvzl0Rb": "VHx6cxz",
                "GH9OMYX": "*ROOT*",
                "DICA1la": "Xg8m3ZO",
                "mfTapH6": "pi6nCoi",
                "lNZcWna": "bZ6ZZS3",
                "NfCuEP6": "rRBwjv3",
                "TiGA5C6": "YIWktFk",
                "f3rkuwh": "FxbmQSF",
                "pv9dsbP": "wU41aRc",
                "l5Ce24h": "fAOIxv6",
                "a1rPWk6": "YE0ZNHa",
                "Vz3oLLI": "Bi2eLuW",
                "OlHLJYg": "fAOIxv6",
                "erhA2xb": "PYAgct9",
                "IYb7kbC": "Cptow8M",
                "AUp3Wsr": "VbL7AkZ",
                "PoTBrFe": "Cptow8M",
                "gxoyvlk": "XFkKlZ9",
                "Ep1vaJ7": "WgdXCBr",
                "fDVQ3ab": "*ROOT*",
                "RyTRog2": "YUyMZ85",
                "riqp8Ty": "*ROOT*",
                "GqfQ8T1": "TlRfOoL",
                "GQfO7EF": "v3hS2wd",
                "JmuPMZg": "Zn4vdCD",
                "trKYjPL": "PEh8Uaf",
                "HAG9XpQ": "ED9gun9",
                "twHLO94": "J976uD7",
                "HkaLGQ0": "JHwIDu8",
                "iWPwlM3": "SqJs5Hx",
                "tsPpADC": "ED9gun9",
                "SqJs5Hx": "Euqq1eF",
                "IeTg0ip": "a0PBtBC",
                "Xg8m3ZO": "eFWs95w",
                "eybbuh0": "W8YA1Qt",
                "oikuD5W": "afkVVk3",
                "KsbMYz7": "uzW5csO",
                "YIWktFk": "ZWY3DCc",
                "uhmunvB": "IeuSGZD",
                "wfQuYXR": "xRcgNTK",
                "QjsD6ZF": "Y7n7I7k",
                "DmJPKxN": "XFkKlZ9",
                "OZBmad6": "nbaqOGR",
                "jTxDtN3": "f9WwAka",
                "F8biOnF": "s9aOS8P",
                "tLOFnJv": "Zn4vdCD",
                "FxbmQSF": "Zn4vdCD",
                "jSX3nIQ": "fdaJX2K",
                "PCh0wav": "J9shWga",
                "Ms6bIyk": "jTxDtN3",
                "P9dUPtd": "ZWY3DCc",
                "cnscCGK": "enIRt5A",
                "OgsVP3C": "DDIDTcw",
                "QcyEMkF": "RFagAg9",
                "tNOn50n": "Y7n7I7k",
                "PYx9d9E": "ybJb1qx",
                "NLk60yQ": "Y7n7I7k",
                "s5KZAKo": "enIRt5A",
                "LRzGKiI": "UyFzydT",
                "VHx6cxz": "OlHLJYg",
                "uWvUsC8": "lNZcWna",
                "O8yODNG": "pYlfzHO",
                "vGI20Mw": "mfTapH6",
                "wo9t2mV": "*ROOT*",
                "aicOcIR": "x7Nqq8o",
                "ToxsVDw": "n3d5T5G",
                "FH6ZDTR": "*ROOT*",
                "w6tZ2Gi": "Se2tk1M",
                "yQnfyif": "CQPqG5K",
                "OLQMKfA": "UbiU1rl",
                "ErPVyJi": "jSX3nIQ",
                "roxpUx4": "Xg8m3ZO",
                "r83LZjt": "rRBwjv3",
                "HFHEIak": "MXIwUQS",
                "iyYbHw1": "pl9Qyqi",
                "ER3pROD": "mrfM4ep",
                "FGHCX08": "a0PBtBC",
                "v3hS2wd": "Mu1k6Pb",
                "imfo26i": "MdOlL0A",
                "JvrQ4rH": "*ROOT*",
                "fBnyUI6": "DICA1la",
                "R3sSeLZ": "JtUd1Gh",
                "zfREGgU": "OZBmad6",
                "sVPsKeg": "TUOTQwH",
                "NRl3B8v": "AbehMqG",
                "L15i6z7": "mMBjRMQ",
                "MCaTojd": "a1rPWk6",
                "KmZ9gOt": "qM5FHax",
                "RdTqXxw": "d7Semck",
                "ZxRahml": "Yd6oR1C",
                "Ou7Plr2": "Ms6bIyk",
                "enIRt5A": "M4Bzsn8",
                "Gs0Tv0z": "Cptow8M",
                "RPzxMSk": "Se2tk1M",
                "J8Iid8b": "OZBmad6",
                "Cxzjt8M": "VD5mUFZ",
                "co2fGF6": "P9dUPtd",
                "Cptow8M": "F8biOnF",
                "IiA1f5K": "GrXpIMk",
                "i0WKuWR": "Euqq1eF",
                "W3bn9Yh": "PCh0wav",
                "MdOlL0A": "OZBmad6",
                "g7joOku": "GQfO7EF",
                "XpCKLFk": "dgjTV73",
                "UKu0cYf": "jfrq1Oe",
                "uhIxWwc": "roxpUx4",
                "kYJ4blh": "HDMJ0vm",
                "IeuSGZD": "gxoyvlk",
                "bNb9vup": "RzK8bKJ",
                "YChuibA": "CQPqG5K",
                "meh4cBX": "f9WwAka",
                "MTw22v1": "EziN22C",
                "v8tEfTA": "dgjTV73",
                "x7Nqq8o": "VD5mUFZ",
                "RzifwyO": "x7Nqq8o",
                "IXwn0qW": "xoExzB1",
                "ClWKczZ": "v8tEfTA",
                "TtCZxK4": "OEBbyjs",
                "kKsK2Je": "dgjTV73"
            },
            children: {
                "z70URbw": {
                    "add_question_tool_bar": "zMLzmae",
                    "lookup_bar": "Se2tk1M"
                },
                "RPzxMSk": {
                    "link_selector": "S6qwgqK",
                    "counter": "uqyOb5A",
                    "photo_search": "ixzn7yX"
                },
                "wQCksfR": {
                    "content": "rRBwjv3"
                },
                "Se2tk1M": {
                    "question_details": "RPzxMSk",
                    "counter": "hYTClta"
                },
                "S6qwgqK": {
                    "counter": "lrdyITG"
                }
            },
            knowsAbout: {},
            groups: {
                "__w2_Se2tk1M_interaction": ["__w2_Se2tk1M_input"],
                "__w2_ixzn7yX_interaction": ["__w2_ixzn7yX_search"],
                "__w2_zMLzmae_interaction": ["__w2_zMLzmae_anon_checkbox"],
                "__w2_RPzxMSk_interaction": ["__w2_RPzxMSk_doc", "__w2_RPzxMSk_file"],
                "__w2_S6qwgqK_interaction": ["__w2_S6qwgqK_input"]
            },
            domids: {
                "Se2tk1M": "StNxEP",
                "gKwQjKh": "DSRhnl",
                "Xbyfi86": "LNTEIt",
                "ZJxizQ7": "klaPhL",
                "TUOTQwH": "YDfssP",
                "hgWucvy": "YonTmy",
                "lgzj9wz": "zGfySG",
                "sQUTj5P": "XvPyKW",
                "k4Fa8RR": "tDYHRk",
                "RlW3mlx": "OMCUCI",
                "lkiJAa8": "tmhjQD",
                "a0PBtBC": "mBzHfn",
                "zlpGV1R": "uMKjqY",
                "OSWq0DL": "KqpCbB",
                "HFHEIak": "ohzfSs",
                "MofZdfX": "GrFFDE",
                "GOHcH5H": "GejrnS",
                "HDMJ0vm": "ywEwWO",
                "dsLqN82": "eoEjfR",
                "PYAgct9": "wPZHMq",
                "fDVQ3ab": "QYsCWU",
                "Euqq1eF": "LFsZuS",
                "ccJmhxL": "HQloLU",
                "aWrCYpV": "HNfNER",
                "Ht3thmF": "lnowlU",
                "He3qRoN": "thBnko",
                "z70URbw": "LXRcQK",
                "Jkklmts": "LSEUtr",
                "s9aOS8P": "JGOuZt",
                "zze9EMY": "skiyUt",
                "pqBozuI": "rdgBfU",
                "Zn4vdCD": "saqNVa",
                "fAOIxv6": "aoZNsJ",
                "IXwn0qW": "uaBzKm",
                "JR1DTY7": "ywctHw",
                "jhHUXXP": "CTcYlc",
                "kTVMNFW": "IgFCJD",
                "XXZxg8e": "eFpZzx",
                "AKZ5jDH": "gneEgV",
                "u2zECDl": "VUKFPV",
                "SDBTYqW": "iYWDTE",
                "cEtfDjQ": "XNFswx",
                "CQPqG5K": "Mvtomu",
                "WEYMvvi": "StracI",
                "gUqBHdz": "fMWsxh",
                "JmuPMZg": "BNaZVr",
                "UQVDSX1": "hMdkun",
                "oaAvkp0": "rVuCIg",
                "QpxZ9bf": "tbftXA",
                "QhV1BC2": "YcnGTg",
                "q5b1cAQ": "Ljfdqz",
                "kDAykuv": "SnUIDi",
                "EKeXxa0": "LXsONB",
                "GH9OMYX": "luQuGR",
                "LIAcHGS": "qUPKiX",
                "lu8SzXu": "wBneTZ",
                "TiGA5C6": "xTgaIs",
                "MCaTojd": "fzkbau",
                "OTq01u4": "cOfdOb",
                "pv9dsbP": "UJiSaU",
                "a1rPWk6": "DLQvnQ",
                "n3d5T5G": "LchSab",
                "Vz3oLLI": "MrvFHh",
                "erhA2xb": "BHCRmC",
                "IYb7kbC": "WiJIqW",
                "sVPsKeg": "yBFjfu",
                "AUp3Wsr": "NzNrxs",
                "v8tEfTA": "sSIQTj",
                "QpKOfrn": "GIRJyB",
                "MlgOpLK": "aCyqKu",
                "HkaLGQ0": "THSwuB",
                "Ep1vaJ7": "TyKFdk",
                "ixzn7yX": "qtThJk",
                "RyTRog2": "QehdPI",
                "riqp8Ty": "WlzWrN",
                "yEBU3va": "dFKGBe",
                "GQfO7EF": "STVocl",
                "pYlfzHO": "kJCvbJ",
                "YE0ZNHa": "uTJIVk",
                "vW0gmzD": "pcCedO",
                "hiwg9iz": "WpKljN",
                "trKYjPL": "GIYIjw",
                "twHLO94": "lmcYDh",
                "KaXodvO": "fgqDqI",
                "iWPwlM3": "NaIJor",
                "SqJs5Hx": "UTMbkE",
                "TlRfOoL": "OfdtGu",
                "Terv7ZJ": "ZrbiLe",
                "Xg8m3ZO": "gNQBgE",
                "fSJ86ZV": "ceCbMD",
                "oikuD5W": "ZsSaOg",
                "KsbMYz7": "TSwvQV",
                "oLI84yf": "VtXwfT",
                "uhmunvB": "IQKRcc",
                "fm5bjnz": "MJmhvo",
                "N4OGnHm": "zzuQaK",
                "QjsD6ZF": "agUBcl",
                "IiA1f5K": "bGmvyu",
                "XpCKLFk": "eTMBAg",
                "OZBmad6": "TivDJb",
                "afkVVk3": "eJgMEO",
                "jTxDtN3": "TlSpjQ",
                "v0yh8e6": "TWnHlL",
                "IeTg0ip": "HzJnMt",
                "Mu1k6Pb": "oJdcLG",
                "ZxRahml": "sKxGHt",
                "ZWY3DCc": "hRslxl",
                "aicOcIR": "REOVwP",
                "Ms6bIyk": "wlJAZK",
                "vvzl0Rb": "kPlCAf",
                "OgsVP3C": "KjaxpB",
                "QcyEMkF": "gEZSym",
                "n6gVeiY": "rUSgOM",
                "dvmY3rF": "zdcqMO",
                "PEh8Uaf": "vIvISW",
                "w8lyc9G": "JGxcHn",
                "rvnYt78": "lMZPRc",
                "Xyh5S8u": "hcDhhs",
                "VHx6cxz": "WHWhql",
                "a23RcYV": "LrbvHI",
                "uWvUsC8": "mRlwUf",
                "O8yODNG": "qjJdWl",
                "JHwIDu8": "SCwSwB",
                "lHe4ISi": "pEKadn",
                "PYx9d9E": "LHVVPV",
                "dgjTV73": "wwMsIj",
                "J976uD7": "LZWsDw",
                "ToxsVDw": "WEXqBZ",
                "eFWs95w": "ehXoiu",
                "enIRt5A": "hGoQMa",
                "UbiU1rl": "wRpIVL",
                "Bi2eLuW": "qmrgqT",
                "zfREGgU": "JFomwP",
                "OLQMKfA": "GKZaJD",
                "ErPVyJi": "CUIjVP",
                "J9shWga": "kXFfAa",
                "jfrq1Oe": "MTATEp",
                "mUPK3PG": "UvxyZS",
                "b0I3d6N": "yhFebB",
                "M4Bzsn8": "tCgQoC",
                "u05WCkd": "ndCPAn",
                "ilQAes0": "kdEejq",
                "D7pGnm4": "eLhKWh",
                "FGHCX08": "hEWyUy",
                "ziuiE8w": "zaqSFa",
                "yQnfyif": "DIKfeE",
                "v3hS2wd": "qEuZGl",
                "wuq0oVx": "nOvRUI",
                "WNBFAsd": "xBoBao",
                "R3sSeLZ": "mBGOfH",
                "tFmjdjp": "YzxTvb",
                "NRl3B8v": "TxqIYS",
                "JtUd1Gh": "XENbbb",
                "nbaqOGR": "ryPLxR",
                "DmJPKxN": "uLYXTJ",
                "g3JpmiI": "DoXUdl",
                "UgkqCsL": "QeYkHA",
                "qz4YGKv": "KjHKle",
                "YBGWXEf": "sdpmVC",
                "Ou7Plr2": "bSFasL",
                "ED9gun9": "LprBeK",
                "WweA7HT": "JlCpAn",
                "x4DTdtP": "dYeOeV",
                "gxoyvlk": "tVvADF",
                "co2fGF6": "EPLocP",
                "Cptow8M": "NMIHvc",
                "dOUpgM9": "rlFOYq",
                "F8biOnF": "jqxudF",
                "d7Semck": "jEtvVG",
                "i0WKuWR": "vntKgy",
                "qvRBH8k": "wOYZXC",
                "vn8W7Fu": "BdJFcX",
                "W3bn9Yh": "MKrdzb",
                "BOEodbN": "qbPTSf",
                "tNOn50n": "jLZTNO",
                "xRcgNTK": "nyhTCE",
                "yMifgUe": "NWlFwV",
                "imfo26i": "SlhVIm",
                "HdFVMBR": "VyRkCF",
                "UKu0cYf": "UGaguy",
                "uhIxWwc": "QVqJwx",
                "kYJ4blh": "nnHEkC",
                "IeuSGZD": "XdVjAg",
                "AbehMqG": "YIYHeQ",
                "JMR1Hnc": "pBqmhn",
                "l9VF275": "NHIohq",
                "bNb9vup": "mLEtjY",
                "meh4cBX": "gyHMPU",
                "ybJb1qx": "dUdjOb",
                "Aa65gQg": "oUGKgd",
                "LZuo4qH": "AxbNJO",
                "MTw22v1": "VAewMg",
                "x7Nqq8o": "ieIaSC",
                "mJVRLwj": "GGBHZV",
                "RzifwyO": "xtXOoZ",
                "mrfM4ep": "JFDhMH",
                "fdaJX2K": "ygjtea",
                "ClWKczZ": "QYMmBT",
                "RzK8bKJ": "RoRhAo",
                "kKsK2Je": "MCXbkw"
            },
            hmacs: {
                "Se2tk1M": "af2epjWO7ZY1nI",
                "YHxc6yn": "uZ+lakLruWUigZ",
                "Xbyfi86": "E451z7IEsBZRs2",
                "ZJxizQ7": "V3gKDX+JEIpbM5",
                "pl9Qyqi": "dBcOfwTpinOYzT",
                "k4Fa8RR": "SLlHXCSixomU23",
                "RlW3mlx": "SLlHXCSixomU23",
                "lkiJAa8": "7to0WKkz5018rv",
                "HzycUSF": "KCa/dXfdqQ25z1",
                "OSWq0DL": "V3gKDX+JEIpbM5",
                "Y7n7I7k": "uZ+lakLruWUigZ",
                "MofZdfX": "M++k/kBxKdaMOm",
                "GOHcH5H": "aNlloNV91jVqD7",
                "PYAgct9": "xc9pualkCoCoMv",
                "n6gVeiY": "T0w35v0kGUABDy",
                "ccJmhxL": "NUCBO2e15lXGvM",
                "Ht3thmF": "ObqIjkNfyvGp1P",
                "M4Bzsn8": "Uq/ohF6n4/GG/t",
                "ilQAes0": "SLlHXCSixomU23",
                "ZKtbing": "dATAMoTi36b3JK",
                "Jkklmts": "y1+KhEHoznsQiF",
                "N7H6jMa": "qwSCqDY1h0l1To",
                "YBGWXEf": "8PfXh9GLjhrPIR",
                "Zn4vdCD": "EYSO5aHzXVK1F6",
                "vn8W7Fu": "NUCBO2e15lXGvM",
                "jvBujVY": "PZehp13DRwulzr",
                "pcCgubO": "vXyeqhSZ5Aqvlj",
                "ezFJrmO": "eWl8TqeVNi95Cx",
                "hgWucvy": "TpKDjVcXf+LHHx",
                "kTVMNFW": "7to0WKkz5018rv",
                "XXZxg8e": "NUCBO2e15lXGvM",
                "lgzj9wz": "8PfXh9GLjhrPIR",
                "CQPqG5K": "EYSO5aHzXVK1F6",
                "gUqBHdz": "2OjlklIFZbnutc",
                "fm5bjnz": "NUCBO2e15lXGvM",
                "WNBFAsd": "SLlHXCSixomU23",
                "vycQMaV": "ymWNAWNIMdOKzz",
                "pi6nCoi": "8YdyJ0HY7e/hEi",
                "hYTClta": "ZzkroqNWdLOMoO",
                "QpxZ9bf": "2OjlklIFZbnutc",
                "zlpGV1R": "NUCBO2e15lXGvM",
                "qM5FHax": "dBcOfwTpinOYzT",
                "uqyOb5A": "ZzkroqNWdLOMoO",
                "tBkt2iY": "qwSCqDY1h0l1To",
                "HHUjGtC": "78c6Aw6IN4wM3E",
                "EKeXxa0": "M++k/kBxKdaMOm",
                "LIAcHGS": "ObqIjkNfyvGp1P",
                "lu8SzXu": "LHrmO6oniPe6sx",
                "sx9ipBl": "dBcOfwTpinOYzT",
                "OTq01u4": "51bSRoYdWLta7E",
                "HVvhcg6": "ymWNAWNIMdOKzz",
                "FnGVLpg": "QpFIGtZcUNJzgf",
                "VaDLjNP": "78c6Aw6IN4wM3E",
                "nEj3lGs": "IzxS3CkGQYT8c4",
                "lrdyITG": "ZzkroqNWdLOMoO",
                "QpKOfrn": "1qRDpwIC77ixn1",
                "MlgOpLK": "dcdsIYQjfdSDhD",
                "XlExwfT": "dATAMoTi36b3JK",
                "XFkKlZ9": "uZ+lakLruWUigZ",
                "LmHzzTP": "g5fLYBFUh3FoOi",
                "ixzn7yX": "KapqJccFOVAU/n",
                "rRBwjv3": "EvauR91jUnaDqk",
                "yEBU3va": "7to0WKkz5018rv",
                "pYlfzHO": "FFCe9FZXgmZzvm",
                "YE0ZNHa": "sMjQCltEGt/KEQ",
                "JHwIDu8": "TpKDjVcXf+LHHx",
                "hiwg9iz": "nQ5I/FyMIcmncx",
                "EKr9SSR": "cw6msTAzMQ4/lb",
                "KaXodvO": "+N7FURwDTndOik",
                "od7kaKB": "5pDWD/q+wbL9s8",
                "mMBjRMQ": "eWl8TqeVNi95Cx",
                "WGbfo9s": "8YdyJ0HY7e/hEi",
                "TlRfOoL": "EYSO5aHzXVK1F6",
                "b4Y6Ctl": "zqnYG3vYiHrrCR",
                "W8YA1Qt": "eWl8TqeVNi95Cx",
                "bu3mSz9": "IzxS3CkGQYT8c4",
                "Terv7ZJ": "LHrmO6oniPe6sx",
                "nbaqOGR": "M++k/kBxKdaMOm",
                "Z434TWh": "qwSCqDY1h0l1To",
                "oLI84yf": "TpKDjVcXf+LHHx",
                "SDBTYqW": "6GKCz2fX7CFMyN",
                "rBNm5zF": "zqnYG3vYiHrrCR",
                "N4OGnHm": "aNlloNV91jVqD7",
                "g3JpmiI": "TpKDjVcXf+LHHx",
                "RFagAg9": "8YdyJ0HY7e/hEi",
                "afkVVk3": "sMjQCltEGt/KEQ",
                "v0yh8e6": "fyttVvo1pmZ5ia",
                "eFWs95w": "M++k/kBxKdaMOm",
                "GrXpIMk": "QpFIGtZcUNJzgf",
                "Mu1k6Pb": "TpKDjVcXf+LHHx",
                "T1CzgSI": "vXyeqhSZ5Aqvlj",
                "qz4YGKv": "V3gKDX+JEIpbM5",
                "kycJApV": "yIhehupLwXy2ZT",
                "ZWY3DCc": "EYSO5aHzXVK1F6",
                "VsQvlIy": "IzxS3CkGQYT8c4",
                "uwoYj1l": "TKP67vMcwwrO3l",
                "M9NHLQj": "eWl8TqeVNi95Cx",
                "aCKN7xH": "eWl8TqeVNi95Cx",
                "dvmY3rF": "5VgEn1G9Ixg00B",
                "PEh8Uaf": "FFCe9FZXgmZzvm",
                "YtNJwzb": "vXyeqhSZ5Aqvlj",
                "w8lyc9G": "LHrmO6oniPe6sx",
                "rvnYt78": "FFCe9FZXgmZzvm",
                "iHsuk1j": "DAalTWsvfBzxrO",
                "a23RcYV": "5VgEn1G9Ixg00B",
                "fSJ86ZV": "1qRDpwIC77ixn1",
                "wQCksfR": "K0N05JGUz/jylI",
                "lHe4ISi": "5VgEn1G9Ixg00B",
                "vTDxHwv": "IzxS3CkGQYT8c4",
                "dgjTV73": "Qe53YuPVHHviLG",
                "J976uD7": "dcdsIYQjfdSDhD",
                "UbiU1rl": "gIeVJJtWo6SRC1",
                "Bi2eLuW": "uRa7kE6t0E0e5D",
                "MAZAWgC": "HzvmGjYQIB+9RT",
                "v5YWtwG": "ymWNAWNIMdOKzz",
                "J9shWga": "2OjlklIFZbnutc",
                "jfrq1Oe": "TpKDjVcXf+LHHx",
                "mUPK3PG": "ObqIjkNfyvGp1P",
                "b0I3d6N": "8PfXh9GLjhrPIR",
                "u05WCkd": "Uq/ohF6n4/GG/t",
                "D7pGnm4": "M++k/kBxKdaMOm",
                "MXIwUQS": "8YdyJ0HY7e/hEi",
                "ziuiE8w": "NUCBO2e15lXGvM",
                "ffBZmbh": "dATAMoTi36b3JK",
                "KgAQJoN": "IzxS3CkGQYT8c4",
                "wuq0oVx": "V3gKDX+JEIpbM5",
                "fnNIBEm": "zqnYG3vYiHrrCR",
                "V8pLBna": "fPbC+kk5EYRjrl",
                "tFmjdjp": "WnMkpzUqJrLtl8",
                "EziN22C": "g5fLYBFUh3FoOi",
                "JtUd1Gh": "JHc1da7ebZfthl",
                "UyFzydT": "eWl8TqeVNi95Cx",
                "UgkqCsL": "6GKCz2fX7CFMyN",
                "mqo3FJT": "l23hVo6/IgFySi",
                "xpsBThh": "qwSCqDY1h0l1To",
                "ED9gun9": "EYSO5aHzXVK1F6",
                "WweA7HT": "1qRDpwIC77ixn1",
                "zze9EMY": "M++k/kBxKdaMOm",
                "x4DTdtP": "NUCBO2e15lXGvM",
                "dsLqN82": "FFCe9FZXgmZzvm",
                "dOUpgM9": "8PfXh9GLjhrPIR",
                "qvRBH8k": "8PfXh9GLjhrPIR",
                "bZ6ZZS3": "uZ+lakLruWUigZ",
                "d7Semck": "nQ5I/FyMIcmncx",
                "n3d5T5G": "FFCe9FZXgmZzvm",
                "I8FWbbP": "fTqTKBA8YOwpQv",
                "zMLzmae": "+eyKYHD0GheH6X",
                "vW0gmzD": "ObqIjkNfyvGp1P",
                "LAqOojb": "g5fLYBFUh3FoOi",
                "WgdXCBr": "QpFIGtZcUNJzgf",
                "BOEodbN": "NUCBO2e15lXGvM",
                "aWrCYpV": "aNlloNV91jVqD7",
                "xRcgNTK": "6GKCz2fX7CFMyN",
                "OP2lUp2": "qwSCqDY1h0l1To",
                "HdFVMBR": "NUCBO2e15lXGvM",
                "Yd6oR1C": "IzxS3CkGQYT8c4",
                "Xyh5S8u": "1qRDpwIC77ixn1",
                "AbehMqG": "y3ervnv7HALMzG",
                "l9VF275": "hVC5JFZNk45i0d",
                "ybJb1qx": "dcdsIYQjfdSDhD",
                "Aa65gQg": "NUCBO2e15lXGvM",
                "S6qwgqK": "lGHwcGTe8T5v2f",
                "ZOw6IPG": "dBcOfwTpinOYzT",
                "mJVRLwj": "7to0WKkz5018rv",
                "sKzQP17": "KCa/dXfdqQ25z1",
                "iGtVHql": "U7PeQceFc7PG1t",
                "mrfM4ep": "6GKCz2fX7CFMyN",
                "VD5mUFZ": "uZ+lakLruWUigZ",
                "fdaJX2K": "5VgEn1G9Ixg00B",
                "ZIirF7R": "KCa/dXfdqQ25z1",
                "RzK8bKJ": "vfQiVe4wNqxYA9",
                "LZuo4qH": "NUCBO2e15lXGvM",
                "OEBbyjs": "eWl8TqeVNi95Cx",
                "uzW5csO": "dATAMoTi36b3JK",
                "He3qRoN": "2OjlklIFZbnutc",
                "TUOTQwH": "Uq/ohF6n4/GG/t",
                "MoGUKFv": "l23hVo6/IgFySi",
                "jhHUXXP": "6GKCz2fX7CFMyN",
                "AKZ5jDH": "V3gKDX+JEIpbM5",
                "sQUTj5P": "1on7AgBqko/PdP",
                "xoExzB1": "dATAMoTi36b3JK",
                "JMR1Hnc": "dcdsIYQjfdSDhD",
                "a0PBtBC": "sMjQCltEGt/KEQ",
                "DDIDTcw": "uZ+lakLruWUigZ",
                "Xd9M3if": "5pDWD/q+wbL9s8",
                "XY9Ofoq": "5pDWD/q+wbL9s8",
                "HDMJ0vm": "Uq/ohF6n4/GG/t",
                "QOjtPFv": "IzxS3CkGQYT8c4",
                "jGbrkQH": "dATAMoTi36b3JK",
                "Euqq1eF": "sMjQCltEGt/KEQ",
                "f9WwAka": "uZ+lakLruWUigZ",
                "RexJYrh": "9JblKMaWTbc61h",
                "VbL7AkZ": "QpFIGtZcUNJzgf",
                "vqHsQsR": "dtOZc5Sp/8VxoN",
                "z70URbw": "C6d0VzyPj0labB",
                "YXeVZfh": "qwSCqDY1h0l1To",
                "YUyMZ85": "l23hVo6/IgFySi",
                "s9aOS8P": "dcdsIYQjfdSDhD",
                "pqBozuI": "aNlloNV91jVqD7",
                "fAOIxv6": "6GKCz2fX7CFMyN",
                "JR1DTY7": "5VgEn1G9Ixg00B",
                "gKwQjKh": "8PfXh9GLjhrPIR",
                "u2zECDl": "8PfXh9GLjhrPIR",
                "yMifgUe": "5VgEn1G9Ixg00B",
                "RoiryVQ": "qwSCqDY1h0l1To",
                "cEtfDjQ": "dcdsIYQjfdSDhD",
                "WEYMvvi": "f9xaN9VSYKOyBq",
                "LE25vKP": "zqnYG3vYiHrrCR",
                "UQVDSX1": "ObqIjkNfyvGp1P",
                "k3bclZZ": "qwSCqDY1h0l1To",
                "oaAvkp0": "TJSRXegIJNaTfX",
                "Cd1zgE7": "KCa/dXfdqQ25z1",
                "QhV1BC2": "aNlloNV91jVqD7",
                "wU41aRc": "g5fLYBFUh3FoOi",
                "q5b1cAQ": "NUCBO2e15lXGvM",
                "kDAykuv": "M++k/kBxKdaMOm",
                "njOI5HW": "0kPJrVVLbS2MU1",
                "XkT7x3l": "P59/ftoRCyUqpi",
                "zIsOts7": "8YdyJ0HY7e/hEi",
                "vvzl0Rb": "aNlloNV91jVqD7",
                "GH9OMYX": "RBbDsiUbk40vfy",
                "DICA1la": "dBcOfwTpinOYzT",
                "mfTapH6": "eWl8TqeVNi95Cx",
                "lNZcWna": "8YdyJ0HY7e/hEi",
                "NfCuEP6": "S4wcGVzUxxHge1",
                "TiGA5C6": "SLlHXCSixomU23",
                "f3rkuwh": "zqnYG3vYiHrrCR",
                "pv9dsbP": "SLlHXCSixomU23",
                "l5Ce24h": "5pDWD/q+wbL9s8",
                "a1rPWk6": "y3ervnv7HALMzG",
                "Vz3oLLI": "Oomk8++qRdzhMW",
                "OlHLJYg": "dATAMoTi36b3JK",
                "erhA2xb": "y1+KhEHoznsQiF",
                "IYb7kbC": "7to0WKkz5018rv",
                "AUp3Wsr": "aNlloNV91jVqD7",
                "PoTBrFe": "l23hVo6/IgFySi",
                "gxoyvlk": "sMjQCltEGt/KEQ",
                "Ep1vaJ7": "aNlloNV91jVqD7",
                "fDVQ3ab": "H4N6YL2RRfUEoi",
                "RyTRog2": "ObqIjkNfyvGp1P",
                "riqp8Ty": "E+mVuK2XdQ+u68",
                "GqfQ8T1": "IzxS3CkGQYT8c4",
                "GQfO7EF": "6GKCz2fX7CFMyN",
                "JmuPMZg": "7to0WKkz5018rv",
                "trKYjPL": "aNlloNV91jVqD7",
                "HAG9XpQ": "l23hVo6/IgFySi",
                "twHLO94": "5VgEn1G9Ixg00B",
                "HkaLGQ0": "Uq/ohF6n4/GG/t",
                "iWPwlM3": "LHrmO6oniPe6sx",
                "tsPpADC": "dBcOfwTpinOYzT",
                "SqJs5Hx": "y3ervnv7HALMzG",
                "IeTg0ip": "V3gKDX+JEIpbM5",
                "Xg8m3ZO": "EYSO5aHzXVK1F6",
                "eybbuh0": "vXyeqhSZ5Aqvlj",
                "oikuD5W": "y3ervnv7HALMzG",
                "KsbMYz7": "FFCe9FZXgmZzvm",
                "YIWktFk": "g5fLYBFUh3FoOi",
                "uhmunvB": "LHrmO6oniPe6sx",
                "wfQuYXR": "5pDWD/q+wbL9s8",
                "QjsD6ZF": "sMjQCltEGt/KEQ",
                "DmJPKxN": "8PfXh9GLjhrPIR",
                "OZBmad6": "EYSO5aHzXVK1F6",
                "jTxDtN3": "sMjQCltEGt/KEQ",
                "F8biOnF": "M++k/kBxKdaMOm",
                "tLOFnJv": "g5fLYBFUh3FoOi",
                "FxbmQSF": "dBcOfwTpinOYzT",
                "jSX3nIQ": "uZ+lakLruWUigZ",
                "PCh0wav": "QpFIGtZcUNJzgf",
                "Ms6bIyk": "y3ervnv7HALMzG",
                "P9dUPtd": "l23hVo6/IgFySi",
                "cnscCGK": "5pDWD/q+wbL9s8",
                "OgsVP3C": "1qRDpwIC77ixn1",
                "QcyEMkF": "NUCBO2e15lXGvM",
                "tNOn50n": "1qRDpwIC77ixn1",
                "PYx9d9E": "5VgEn1G9Ixg00B",
                "NLk60yQ": "8YdyJ0HY7e/hEi",
                "s5KZAKo": "dATAMoTi36b3JK",
                "LRzGKiI": "vXyeqhSZ5Aqvlj",
                "VHx6cxz": "FFCe9FZXgmZzvm",
                "uWvUsC8": "NUCBO2e15lXGvM",
                "O8yODNG": "aNlloNV91jVqD7",
                "vGI20Mw": "vXyeqhSZ5Aqvlj",
                "wo9t2mV": "YHfNweTms8ZWw8",
                "aicOcIR": "V3gKDX+JEIpbM5",
                "ToxsVDw": "aNlloNV91jVqD7",
                "FH6ZDTR": "1UTkDR9nG4n2oK",
                "w6tZ2Gi": "ymWNAWNIMdOKzz",
                "yQnfyif": "7to0WKkz5018rv",
                "OLQMKfA": "knlujNIe3rQqMG",
                "ErPVyJi": "1qRDpwIC77ixn1",
                "roxpUx4": "l23hVo6/IgFySi",
                "r83LZjt": "dZUKqgrmjfibWg",
                "HFHEIak": "NUCBO2e15lXGvM",
                "iyYbHw1": "zqnYG3vYiHrrCR",
                "ER3pROD": "5pDWD/q+wbL9s8",
                "FGHCX08": "y3ervnv7HALMzG",
                "v3hS2wd": "Uq/ohF6n4/GG/t",
                "imfo26i": "SLlHXCSixomU23",
                "JvrQ4rH": "wzXjEjB7bkuwCN",
                "fBnyUI6": "zqnYG3vYiHrrCR",
                "R3sSeLZ": "Ipp6lQEvtW67xy",
                "zfREGgU": "7to0WKkz5018rv",
                "sVPsKeg": "dcdsIYQjfdSDhD",
                "NRl3B8v": "LHrmO6oniPe6sx",
                "L15i6z7": "vXyeqhSZ5Aqvlj",
                "MCaTojd": "LHrmO6oniPe6sx",
                "KmZ9gOt": "zqnYG3vYiHrrCR",
                "RdTqXxw": "cw6msTAzMQ4/lb",
                "ZxRahml": "NUCBO2e15lXGvM",
                "Ou7Plr2": "LHrmO6oniPe6sx",
                "enIRt5A": "6GKCz2fX7CFMyN",
                "Gs0Tv0z": "dBcOfwTpinOYzT",
                "RPzxMSk": "hCOzUykwj5woxA",
                "J8Iid8b": "l23hVo6/IgFySi",
                "Cxzjt8M": "8YdyJ0HY7e/hEi",
                "co2fGF6": "ObqIjkNfyvGp1P",
                "Cptow8M": "EYSO5aHzXVK1F6",
                "IiA1f5K": "aNlloNV91jVqD7",
                "i0WKuWR": "V3gKDX+JEIpbM5",
                "W3bn9Yh": "aNlloNV91jVqD7",
                "MdOlL0A": "g5fLYBFUh3FoOi",
                "g7joOku": "5pDWD/q+wbL9s8",
                "XpCKLFk": "Thl2ddDG7RhfOD",
                "UKu0cYf": "Uq/ohF6n4/GG/t",
                "uhIxWwc": "ObqIjkNfyvGp1P",
                "kYJ4blh": "dcdsIYQjfdSDhD",
                "IeuSGZD": "y3ervnv7HALMzG",
                "bNb9vup": "2OjlklIFZbnutc",
                "YChuibA": "g5fLYBFUh3FoOi",
                "meh4cBX": "1qRDpwIC77ixn1",
                "MTw22v1": "SLlHXCSixomU23",
                "v8tEfTA": "TpKDjVcXf+LHHx",
                "x7Nqq8o": "sMjQCltEGt/KEQ",
                "RzifwyO": "y3ervnv7HALMzG",
                "IXwn0qW": "FFCe9FZXgmZzvm",
                "ClWKczZ": "Uq/ohF6n4/GG/t",
                "TtCZxK4": "vXyeqhSZ5Aqvlj",
                "kKsK2Je": "TpKDjVcXf+LHHx"
            }
        });
        var _components = [new(require("view/livenode").InteractionModeBanner)("njOI5HW", "", {}), new(require("view/livenode").ErrorBanner)("XkT7x3l", "", {
            "default_text": "Your request was not completed."
        }), new(require("unified_view/components").JSTest)("iHsuk1j", "", {}), new(require("app/view/layout").QTextImageEnlarger)("NfCuEP6", "", {}), new(require("app/view/layout").QTextEmbedEnlarger)("I8FWbbP", "", {}), new(require("app/view/layout").QTextGIFPlayer)("r83LZjt", "", {}), new(require('login').LoginSignal)("fDVQ3ab", "", {
            "uid": 54564951
        }), new(require("view/captcha").Captcha)("JvrQ4rH", "", {}), new(require("unified_view/smyte").SmyteComponent)("MAZAWgC", "", {
            "hashed_uid": "c0081ce64d7b609146b7fe1317eb0a31",
            "api_key": "caf6615f63677124eac72d381cb0a91e",
            "session_id": "SpG3vBHK348s04GKZ_5DMA=="
        }), new(require("view/reauth").ReauthWrapper)("RexJYrh", "", {}), new(require("view/livenode").LiveSpinner)("FH6ZDTR", "", {}), new(require("view/pmsg").PMsgContainer)("wo9t2mV", "", {}), new(require('unified_view/signup/google').GoogleAutoLoginWeb)("riqp8Ty", "", {
            "viewer": 54564951,
            "scopes": ["email", "profile"]
        }), new(require("flash").FlashClient)("uwoYj1l", "", {
            "cp": "m",
            "swf_url": "https://qsf.ec.quoracdn.net/-3-swfs.q.swffffde6831ed52baf.swf",
            "fc": "W31XbNzJxWvPDSdN-M0VeQ==",
            "so": "main-client-1",
            "flash_vars": {
                "domain": "www.quora.com"
            }
        }), new(require('app/view/site_header/logged_in').LoggedInSiteHeader)("z70URbw", "", {}), new(require('app/view/question/lookup_bar').LookupBarSelector)("Se2tk1M", "lookup_bar", {
            "interstitials": {
                "answer": ["Ask and answer a question!", "Write about what you know by asking the question first."],
                "bad": ["Is your question complete?", "Make sure to fill out a complete sentence that's in the form of a question."],
                "good": ["You're almost there!", "Make sure to double-check your phrasing before you press Submit."],
                "button": ["Ask your question here!", "Write your question as a complete sentence, then press Submit."],
                "ask_question": ["What is your question?", "Ask a question and get answers from people with unique insights."]
            },
            "max_concurrent_requests": 3,
            "keepFilters": "",
            "length_limit": 150,
            "shouldSendJsData": false,
            "allow_no_selection": true,
            "hasResults": false,
            "selector_id": -433934344,
            "metadata": {},
            "opening_question_punctuation": "",
            "max_cache_size": 50,
            "should_go_to_search_on_enter": false,
            "is_textarea": true,
            "logged_in": true,
            "query": null,
            "queryTypingDelay": 0,
            "should_autofocus": true,
            "closing_question_punctuation": "?",
            "show_results_for_empty_query": false
        }), new(require("unified_view/character_counter").CharacterCounter)("hYTClta", "counter", {
            "visible_on": 15.0,
            "limit": 150,
            "warning_limit": -1
        }), new(require('app/view/question/lookup_bar').AddQuestionLookupBarButton)("iGtVHql", "", {
            "source": "",
            "targetOid": null,
            "targetType": null,
            "logged_in": true
        }), new(require("app/view/question/lookup_bar_details").AskBarDetails)("RPzxMSk", "question_details", {
            "length_limit": 300,
            "photo_search_enabled": true,
            "interface_strings": {
                "uploading_image": "Uploading 1 image...",
                "upload_error": "There was an error uploading this file.",
                "drop_images": "Drop images here",
                "placeholder": "Enter Question Details (Optional)",
                "uploading_images": "Uploading {} images..."
            },
            "is_plaintext": false,
            "disabled_commands": ["horizontal-rule"],
            "content_json": {
                "sections": [{
                    "type": "plain",
                    "indent": 0,
                    "quoted": false,
                    "spans": [{
                        "text": "",
                        "modifiers": {}
                    }]
                }]
            }
        }), new(require("unified_view/character_counter").CharacterCounter)("uqyOb5A", "counter", {
            "visible_on": 30.0,
            "limit": 300,
            "warning_limit": -1
        }), new(require("view/link_selector").LinkSelector)("S6qwgqK", "link_selector", {
            "length_limit": 250,
            "allow_no_selection": false,
            "metadata": {},
            "is_textarea": false,
            "query": "",
            "should_autofocus": false,
            "show_results_for_empty_query": false
        }), new(require("unified_view/character_counter").CharacterCounter)("lrdyITG", "counter", {
            "visible_on": 25.0,
            "limit": 250,
            "warning_limit": -1
        }), new(require("unified_view/qtext2/photo_search").PhotoSearch)("ixzn7yX", "photo_search", {
            "load_default_results": false,
            "default_query": "",
            "empty_msg": "No photos found"
        }), new(require("app/view/site_header/logged_in").NotifsNavItemBase)("WEYMvvi", "", {
            "css_positioning": true,
            "on": null,
            "load_on_pageload": true,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "click_open": true,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/site_header/logged_in").NotifsNavBadge)("tFmjdjp", "", {}), new(require('app/view/question/lookup_bar').LookupBarSiteHeaderAddQuestion)("zMLzmae", "add_question_tool_bar", {}), new(require("view/tooltip").TooltipComponent)("HHUjGtC", "", {
            "options": {
                "direction": "bottom",
                "contents": "Add question details",
                "attach_to_body": true
            }
        }), new(require("view/tooltip").TooltipComponent)("VaDLjNP", "", {
            "options": {
                "direction": "bottom",
                "contents": "Hide and clear question details",
                "attach_to_body": true
            }
        }), new(require("app/view/notifications/header").TitleNotificationsCount)("v0yh8e6", "", {
            "notif_count": 0,
            "inbox_count": 0
        }), new(require("view/hover_menu").HoverMenu)("PYAgct9", "", {
            "css_positioning": true,
            "on": null,
            "load_on_pageload": true,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "click_open": true,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("view/hover_menu").HoverMenu)("d7Semck", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "qid": null,
                "uid": 54564951,
                "aid": null
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": false
        }), new(require("view/user").UserPhoto)("RdTqXxw", "", {}), new(require("view/user").Name)("erhA2xb", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "qid": null,
                "uid": 54564951,
                "aid": null
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": false
        }), new(require("view/hover_menu").HoverMenu)("hiwg9iz", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "qid": null,
                "uid": 54564951,
                "aid": null
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": false
        }), new(require("view/user").UserPhoto)("EKr9SSR", "", {}), new(require("view/user").Name)("Jkklmts", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "qid": null,
                "uid": 54564951,
                "aid": null
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": false
        }), new(require("app/view/write").WriteMain)("UbiU1rl", "", {
            "notifBanner": false
        }), new(require('view/editable_list').EditableList)("V8pLBna", "", {
            "edit_text": "Edit",
            "is_editing": false
        }), new(require('view/editable_list').EditableList)("OLQMKfA", "", {
            "edit_text": "Edit",
            "is_editing": false
        }), new(require("app/view/navigation").TrendingTopicsNavListItem)("QpxZ9bf", "", {
            "tid": 2319847,
            "query_id": 1533053576355627215,
            "uri": "/answer/topic/Mark-Zuckerberg-Shows-off-Jarvis-December-2016"
        }), new(require("view/hover_menu").HoverMenu)("VbL7AkZ", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": false,
            "kwargs": {
                "tid": 2319847
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/navigation").TrendingTopicsNavListItem)("J9shWga", "", {
            "tid": 2024557,
            "query_id": 1533053576355627215,
            "uri": "/answer/topic/La-La-Land-2016-Movie"
        }), new(require("view/hover_menu").HoverMenu)("PCh0wav", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": false,
            "kwargs": {
                "tid": 2024557
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/navigation").TrendingTopicsNavListItem)("He3qRoN", "", {
            "tid": 1660588,
            "query_id": 1533053576355627215,
            "uri": "/answer/topic/Rogue-One-A-Star-Wars-Story-2016-movie"
        }), new(require("view/hover_menu").HoverMenu)("GrXpIMk", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": false,
            "kwargs": {
                "tid": 1660588
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/navigation").TrendingTopicsNavListItem)("bNb9vup", "", {
            "tid": 2315699,
            "query_id": 1533053576355627215,
            "uri": "/answer/topic/Berlin-Terror-Attack-December-2016"
        }), new(require("view/hover_menu").HoverMenu)("FnGVLpg", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": false,
            "kwargs": {
                "tid": 2315699
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/navigation").TrendingTopicsNavListItem)("gUqBHdz", "", {
            "tid": 2315367,
            "query_id": 1533053576355627215,
            "uri": "/answer/topic/Assassination-of-Andrei-Karlov-December-2016"
        }), new(require("view/hover_menu").HoverMenu)("WgdXCBr", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": false,
            "kwargs": {
                "tid": 2315367
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("unified_view/paged_list").PagedList)("Bi2eLuW", "", {
            "retarget_links": true,
            "serialized_component": "AAEAADkWpBDV3bwRfzeuYAvYVz33BA5Giv3Ze4Hx8KW3aUzmqPHs2gXgrdqaSkq3I9kDERCMldro\nDA8lJOIa9REE8vyL/EMA+36lghnAD2GA7sTyjiHg3SUUvrQeQ3ykdPM327zmEXTcOninppw590By\nnhU=\n",
            "has_more": false,
            "hashes": ["2f6338510642e5b2bd549456f990fb2c"],
            "auto_paged": true,
            "enable_mobile_hide_content": true
        }), new(require("app/view/feed").FeedBottomIndicator)("Vz3oLLI", "", {}), new(require("unified_view/toggle").ToggleBase)("dgjTV73", "", {
            "switch_hide": "@view_more",
            "switch_show": "@expanded_content",
            "log_switch_time": true,
            "switch_on": ["click"],
            "loading_hide": "@loadinghide",
            "fetch_on": ["load"],
            "fetch_into": "@expanded_content",
            "loading_show": "@loadingshow",
            "serialized_args": "000100008a119c3dfefca321136b015b91eb93db56e294725ae80210dc477e7280bfd1a5bf18da8bc28709e37ae95aecb87ed4e81c82b1b8b74161e494dbd91076252d776bc56adb007600bccb9c20ba8dd7c5fda6f3551151f31b0e27b3497adc5ddfb608aca6de5e1e2f459a3467c08c8b6a872836b1ef7d5534f171d2480c2d6259ead5b1174d225d937355cd965fedae5c734d7cf4bd4de1a865c091678fbdc167cace5af1da0f741c18e79a68d69e8f20618276f71132c3a223d4c879e5f249f4563f9f857452216c7998373e4e81cd82e609bfdf8e7969ed4f780307eb78364b2339d3569eff7cc42d8672af38172e37566f2d39ad93c65b31ecc2bccbf938af31a74951cb9c331234b68632382a4ec25748dd6723f7ab0d1dcfa23b877cc47718f3f0d2a49acfdb8ce11779368f949ba6308c77bd31b567e84fdc09aa82ca7b2e51073c5fc479167b93a423f282e14ed0c7d6b7366297e55637344af343d8921010387262edc2a6f681dd20fab11210c7253a8675f6253d78652b493a8977b9ffb25c462bb3035f225e53e1cf40114271fbc0f11bf0857185da34682e5d54e40479c71db34964d2560198fc682b1cc1db3a80d7b98633d25a973608a6ebb46c19e290f0a0fe08c21840aff66ded294994efa28e348af632c128dbf71f5913c2b16bf94cddb040611d2e2f588bf692abca1025e86209f5034b3c60205fc359b5d596f07813b8066f8852618bf6c5f300a3fa1cdc618642a6b6f9599d2fc8f4fc795c5367d5d51f659359546aacd02f5bd86fc14ba2ccc07c102e5f6892cd7f23d9f98bf09f3699e9c99f829bed585ebe583806356ae8f9f794d609f6ccea9cae96396e836e325a722901e093a8b710dcb70ef42e403e442a8f96028d38155adf510306e50c9b953936025085bf9b8f1f59836ac7b7e5cc711c25da1ca67799759596fa893216171c63ba11bf358b1d688521d181864892f9a6cf43389c86fad40656f69325da78cfd1274705bfe59b28908ff540a3c8ee53ee089a548e5c8e60034ea3e1eba8a165fc3e89f994c01f700b1003766039397d931ebf618dba20fbcd8417de3dc065c93bed99c49c6b6519520a6e1bb22124826ac44fe7f30b94378ba76fd8d2f1d230be9b3240b15ab98bf69ce105858d11aa0a10948d78b92f9cf5afd1c8262b709b1ba0099fdbc60b11e888bdf7ae1673e4ae02f402b64144da29524cb834378bc1b6919c82e3ef6e47bcb5d19bccf6c1307ae8ad1aca1e6b72f67bb56f89e2f5205adf8c03e57ca85090ab7b0a84f7f395e630ff43447345ff9b1419ce53f8bc89736dc2338b32229286aa4f165ef968376942734a263024e729154b4691ba3e67155e9396369d766fb85906b91f6bc1a9f13ffabd00f6f26bcecb754dd067ecd4e989a2a08c5cb0202cb0349d993cdf8e61d867f8f11ca45830b1ac6857230cd3fdf31b331be0d9392ad6904491bcda152c004d1b0c471deeb1fabf84ba4ca6339b78fe664516e8764a4358d4994da3eb9d1ff4743ef3ddcce09bcd4b9db60c334766b28ebf467912f2cfb4b0f432b43bd56f43fa54e26c4470b7f28d58fe10857827f9f08f4b79743e4c09387bdbb01845dbcf12abce8a3e33a2143437cc8be59d5780214ed4169100c420c5207b5879497e6c976030d92b8ba69fca4292b6fdec2b8309c5b8537c468d76a27581995817593fe558181605eb7a380666f3f4d9a3683332272795f93330d3a428eaa28b48340f0c0575e6258ddcca79cbdfbe7e248f34be61fe5fd26ca9bd46dbdf6d9d0b31400fd5225357039102f4a7cda25bb03512d79d425a8aaaaccfd5dde863bf1ff05bdc447c2331074246cb31887d6c168ee29b5e1fb79a7f823e70675784003e4c089202adbccbe3241d321a91802f4dfafaa96aaf8f8919527cdb94c02ac40fe017884f93c8962a8ed35c2a20dd3bc0b8476521337e311cfdab11c8a4fa08ad710dda999dc0b62894ae31037437b06857ea617beac0c42a05720c00c8dce05953aa185a7eac471215137363f63f756e329ef0db54c4eb7194a4bccad3af3ab89d7f7ba76f1616b5f2a56471aa8ecb1ddf3fc215c66ce1967acda4c199c4c7ff2763a56f92c66d1b1c5320dc65b970dcca54e4528cd0326d98756bc02a41dcaf9ee26622b3cb05e781605a68e62d49db481f2b7185c34c251e5184b1b437440ebd0525c2c99356b9be679fd77cb341596fc8a040500859a9650cd1762d62001850424c78f215754c5652631efb3521ba6e541fc6f4db4451b03b7f7857c842fb77a312b1b50799a9b63d0cd4f2005a9dc0cd7f09f060781fece0aef4e50fdb445be6be69100cef713dd15473d359608aa44b9d80785c7d2a8a526ed58f1c5cb643a624db2a794faa3daf440d52aad9b438c1245c081cbfa823ac332de2791b549d0cb3fc0eefdcf20b389f5fc9c6f17db21ce96f36cd3126f41c7f03649dd21c4db9716af5c0a824461d9d77524b2c8acd2027bac37e83f9d6ca637671f56732a762608fe8efa6f5a51a263cb36bf17753eab1c58e98b2b844aceff1268881b5c103d1a79a22d3caef7aa4b39ae6aecfe55a79e06fd337d59dc0231f0ca00da7fdc8b16599c22ce4cf0ad01e728095a687a43bbf8844f25e00df8b71a176c458d7d0529a86ad9f330d3b0c4f6c1205d2c9932d53e66c4d05d2eddf32ca13332072c4e06a4f769d97f5fb0a7bc29bf452747887807202aba3d762d1c79ba81c4b8b5fc94c9a8a461db4114ae5f8ca847719473b4271ad47311b655aa3267e7df0a235a3bfbf8cb016b8a8f7d6d12b5761adfa8a77825190b8b9c7e7f914709d94ef2985988f83306221436bec1eba64807d0b97704aef44c28d63af73fb2b4fa6094df70b54ffdf3d6a6f66102891a1d25fb411a61d3e6af2274b5b0b8c424b0f6a73fb06cbb471edad668ebc88783ef51e2491b514bd405b3fcede81b0fb62302ed2bf51c902d88eb593e7e0f2f22e58b5a07984dc0105ae47c4904e35c41c76fc4147fc52966c5632a11fbeac626baca0f78acb982e97404d2b431d38a3bb5df0d728ee880621a826aadf4b026db6de5a6718e097784365759323c0a72d9ea1e227d356f57aa81e0044129b05497379baa53cddb1a32f5c9924ff5cab952388a5e570d8100aca14de3c8caf00737054d63339cc55be8eb70eeb7a4b163e0f9a01172e3d19062c9ce02e3779b08ac4ca84df1c5b3f56c87fdfa4d344d4ec4e931f4803c7dfd51881c48b778434e2d75a9951f0c959911f57ed70cd2cbe629ddbc9a15597c8fdb51f37d4bd9d194aab3bc7a2fd337a3a222808d7e60c332385fe5a158b0e7e352d47c687d1fbf559df353c05625d1c923c8b5d57ae30537857d13f0a2f99cf208f59887eba12b8e24f82c319fdec53a20e4ee033b05a14622fa6037c5084b313072c3d109b1b4d0af0838d18f7eef0cc50604f160a974a3dd74427cb0d587aa2176ee91416e4d431bb8a7bf9829b0fe8de230318eb1aa84f45fc1ddbb57d12829bf119d53cada2507d59d1be92fcd6cd4a16edd0599db3abfcd43ace42ac5ca9bb674afbf4fdf5cf5b2daa902ae2277384a937841ebbc536407c315103fe66c1a3644e656d27c9564580e6452b10f6f19c2ff6d9e899e5df6706d453dd17a8b243acf8719db1bdeaf85884ee094ab8f6ae18cd269f0e48450e0a3eb7bb7dd23bd65e95962060fd6a7964ba88cbb95010404ca373888749fd15056d04afc7b8b8de18d15ca1c834ca4e21d2de00b95bfe35c0fb107716f307279c44ba1a30760e90d94651dce35b8abb31f83d16a63e9617ba5e84f57eb132f8e0999a46defa22ecd3063140bc555daede6e3838d14bc11f283bb384b241d0b88a7141790aa298d96960a4421305ed780b96077c91dfec53823b1fe338927e6c2e7b070826719547c01e3edf959b9ed7d54b0ced297688e4be0ee1c393cceb35380accf2f6147a0420eef495efba4aa827f12f719ac3761ebfb3ec22797f311d5c38ed74112f77278346afb845695c2737728cde556e53f3572c0c4bb85459e6214eb2429a7d0c8c601a8090e36eb4935e530d9eb75dea79d0ef750cb8e6a9a8300649011d1bed6b167e1a9b3aa5c2c53d42836bfc6c86b7e8e36ce6fcac3a3abe1cf2d944f28702e42a8d0a3a386b330f3e1f45d702db2854ff6d09498c5a8e836461dd02dd305651a4ec9882e6140e1fd9fc3aba6fa05e44a8bd1ad42d88ca3da9f9ea7adfa88d986cb0047c28e2a8d563c64e9917aeeefc7f0003d76709db13e28accbb19c1eed18780047c6433582e49e02618f32b628ceaccb818b690ad9ffb1a0972ac600bb349e275fc6de8cfeec8202c205ad4ded4b6a37b413c8b1f1f404228b16a392e025fd89e56f13874767b35b7a1d5cb16501e6c20181bb983a3171a5566d71d82882cdb1e3fe63f328cf9e18a1d57d3ade6b50480fe4c694e6ec24df40feffbc52425e36301b9ec4aff328fa832bd2caa94536d0662de151fd19652c6da03cc928c0e419e66d05a81c0bb393a990690ea9bf0d3157a0776b5fc05f4bef840201135268897dc561d88d9bf53a7b2a1c3943eb4042114966567357037670885307f6c17eb14a282b3b396b7754171d51e42fe01987ea8805a6bfc6d28757a269bb398241ce1422db07aba92a8107d80f69e093652540ee1308d81f223a5adc3fb100ae7498d9a52f43bffbdcfc3c63643a1d5cd98c93684e95b217852d9367ff1392868daa3c170a6125162de0f11df1ea155663105ccdfda152acb33b0ed96cb51582169681eb9fa69294d2c8f718f12ef5497e6dc184366e977a447dae72a7e314923ba09465adcd83fb25d2968f16108b9a365b040346f12ff02a3d6217059b989c0669d6fed0b75339345c7da53b758bc2af9c152de197adef39b078aa484c0f31593ec383ce25b9fc0b55ba6f7babd0e2f59f5e4139fdcf676cdce828f34319cd411de156b2b4d2eed97ab7b7db2e39d2992b89a7c328c2d91570c06f80be762b16792a4628fb4a4ca0d22030a576f573e7e969a4e9dc85c578342124bc23d5563f3ca3e62673c3f283eb9de1b9f03da54a1163d7e90a7e5883315109d65738ef783a98b5a1488f9db4198a8d9c35dd572c0928152eace940d3b1db79ef7440001b36953e12a85840cb6ca11b33dd485e5d2e773cc5aafe9aaebe898af1eb1606aded5dc451f82e06f20f6fd82c8c993626bde7c9a84acf1da41d89aa48f8bf18b0b13101ccbc71fe3916ffcd1b4512c27d77ea8e38ff726d07be435f4a10397ac0d91c3fcf64e8c7916e40c7d58ce783a8ea00cb12816dfa097bb860fc6160f61568c3ec578b1d2128066b16f26a4ae7ae2fc059854549a8384bb179a40213e7e7dbcbd18fde883e59aa32925e03902c996c9a68e351f21412afe8411f7f7bca9e417d1e1f528a4400c9fda84ff43f2e595adade330a3970a33b6ba574b05be407599733cf405ac3a49876bdbca635ebbdc9fe54601d059a9120243b15d43df9cf9927edcbce43cf5975ce38e255670a0699d6b38e86fea454a6899ab261de0e9f87b57b1d2377d8533466e0d45aa932bd64a4412c64d1f4d6a1a3598a3b1e246bc30c64e4c643b7da3a541768de01b37de0fb40abb433abf991f29cd859a9950f7a0491ed83a5e01679a54d5544c5a344d7655a44a2e9ef718fe9d848e1b37d3c020c1afe07ed26cd49a9eaec83a3ae95fb7e5d11a56603b2144be5caf74afdb9e6ba0396913c9676eb407a45f8c55ed1e52f4c913c1a106e4de6dcbcbc62a2029d0cf7abe14a37d7e353c4ff1496c0673aac634c269df8f41914ce9b89c156ea352652432b5ade2c9be78a7cd643c6f37475783f2a951f89b9e74d2101ee6610af98927e4f354c7e375219e7c6ec3031307b7f298321d9a3f21c14a038da6ab43ce3b4aecec98b2b734e4351e7585f0db1f6066ac6521c28680400c79a11108ae78811fe5855eefaeab2a46c57e46129213b8e865f31311fcdceba6caed6821135e401c9a966b1a181bc9c4fafafde31b864a84da120e301499cf5b5ed60a63c3c102e73bd2b27950f7ba6fbb71ad89d2c2293eed014c32d89392f944921dce79edd8dbef07f63de7ca08f92f76255215a8edf8467c8e38ddde44941de13f96136af086c93522ced09599e6594249497475a7fac483ce5842add98d6e29544088ab32fa74fa1101cfe3e128b55c5322126e7f7f6b18df480c3908d401676e809e4e1262c851d34329b3954f8b6629af3e22838336d5b04a489f5d13a6c4c6345f0d0fadf9b4fdd4010dac739eb63290e8c3a8c7f0d3b89f88a587a40d4350612cd79abf9526af5e51715528d6d06c59a908b34cd52d0f2337f47d014b8191e72ee827807f2dc2780d31eb7f21ac2d7a7d933101efb37dd3a08d7be570639383ea580a2730b6da8b1f5e12d9266cc054d62dea86726f4b466792e53a00300ae16f3c21456efc7276de2994ae39ad765d413a2a11dca18827ce010cf4406880b6d3eb4ec7d6755289c59908c97e4d84b87c18ad0a6f12006df4a6eb4c220d4d565b55e14fa74f6455a8d31c74625fac3c19a7abc9682eab7859095e908a2f14faca7d4c4382bda68005e68b4149552d3fcbae60bc0a39bef14a16051dd083ff65fbcdd82adc9c20c319bc3768d38473b55f78525f59469f1794df5321892091d63a46810b79141ff7e9570edde8f6093a6b40ca3e4b835c87d9c54c9dbfbcae866493ea713de0035be11aa0977a6d3974f035b6937204c335b5ad36329e98beab0ef36873a3780d650b20b25cd86976a890e56d57e7c700f2806f22bdbf54c3c853a61015c29b653e2d8f3881c98266683676de6a65c55825de428b923ccc4f70c224a74282af8cfda506c2d7e0d2c0908d488bbcfc40f7b1bdf98719b3311aed508fad2ecfb9cd776a16dd22074c7466fc9f6d680e14b5048cb192fa9fafba5d135c8c1444caf5db58c389c39607a9b2473702ad6c60482e8f1280658b70650edab32d7183b7116c5b41a088939e55f403615074e1987b076967a640426d1818e398aba2d2a92c8dfa0960f06f0effd7194415d53f9b97d8f1eaaf75119512eca53d8994c5aa7363257e3afbb8753aa623160eb16be755db9744bf2bb06811a72097b46ec21fd33c5cf377c2f492e5caefeefc493f8dd6124ee91a90e03238709b44d9b6ad9df8bbeeed56d43935ec240ea74c52cb3df3e5a3ea2aad9421e9e7d7faffaa682fe694a54ce2087e430aac5f33cec1c5180cbb41d93997fa1b37eaec1db0cb896d81adb81b2c603ac314ed80b019b42f2e7ec3722481721c3921aac96dd45b0bde95c09e079cababc03cd987df52633a70248c5adcb8d67cd82bf5c9f3e8e17cc394233a674ed599c6f493e9083449aff2e719fba686b581bc1f24f1b50556c2799098b89d06795f404fc4831f08e8e6cb14579683498787f7634f498e012bf30588536c6856693d5eea1bd1a19cd49b37b178e528f3e3b5975bcec4802eda8564eae511ca492c3189ea63c7dc0a5967e08b88d489920c386f08277a8f06f887267496e18ded47e589e858e00105303a01cfe4a7e42994922fe8acf02f39f90812dd563d5b7ad8c63dc6d05f1dc6dbd97013e55ecf018e2e03ac84a914d82ab8d1026d36ac480d7e9556b5b711fd35ad6f9472549d3c025447cdcc94a07957b4e1042890bc41abcf14ea7a1735527d754706cfeca32c0f3e2043b8b320ff80c4642e32cc0363ffd0926534a3e9006b8f509342d6adb533fd47aa6cb46d97d8cb9c80ef360d7e3be424b4aa1c10a32b24026821f76caacf743feaeb3cd893e0eaf0bd19bd1a8d62746f9404e87247675cc805b967da06f69cbb6cac61121d420c5145b48398a3b0cf11ee21af1e73497c5c178993ce439dad091e842228b8e108067781742fb30b64289f1b5507b8d27b3cca05a44004727da9f7635aa5e4a84104342b562670d8dfcfd79b47b4e2f1ca376ac3f73fbaf74a7517b064f8147047bc748ddeda61b61cc1b398a472fe3d60599df26aaafa42d994630d39b85a1b62b5eaae8aeeb2a0afb72147dd1c0edf82130fb15f46b77ab932ea988d3406816018cc059dc2f9351ea24db1b4e47d98a7bae52cbed98a6209123810e9312b67adb9fdb12c521a5f253c184de5f67d8b8df27e7a2cd88b53da5226bc62e1c51e928b22af12be3dd31ee3a785a9f5d730283a1eeffd3d1892d203c0768376c87cdb610031a580df967a0711701dcca095bdf2cacc6c1c88341d30fa5d0be04259d3cb2373a2b9da386df7648899bced72c3e319e1b421552ed3cb21dd1124f0f89ea8ac0ceb173b64d69161d03baebc8afe0cef3ef5d66d5b64e4557e95c99c3f6780730805f8ac3d978bfb08bf590dd6af4c53e4681e6ece23f2d4e7b63814bec9e93550f9b91709fdf913665c5444eaecc7a22fc6dbfaba29cc1dfea2e7c1fe7bb346b93bde7b1bce38284d118d02ee6735545766d62c0c07388c50e9bc7f74a3b0acf9ce8609e4ac8acc2851c24dc66489b64af8d4166156d1126ef144232c6e5e5c1aa042262a4157a3ace34f7b698e8cc60dfdc8f33feaa1e32adb5c9cc33e95508e6c4323fd9e2fa2e5d548a5aacb12450fe19d08dee4942b10487e79c196fbb3a194c4998fecf090f1f27a5c92f1a709f0b52edc3f5b4cb1b1f993141cb890cfb4a1662e0bbc4cbccca4ab191803f04fd6a432ba60313dd9f0cc7b3d2f69b805b08e4dda5a290fd59cca14d8c86ad329f8348a0ccf3b2383ec9a5c0770fd322b33beba40555b48f4278c238db8e9e6fa904ea1d5984fefe9ce3891032a2d6892303eaf9d5403e3922340281dd340b8c074fa48e33507855a7a366b65ec9c770e29340a639bc917a8cabe2ebbfc76cddf1c3c040a49ac407260fa548c1f6fc1dd8c908c292e629ee99517f7da21463ad882ef9ac821bf4632fe4d2aa6a9e06cc1438314cfe5fbcb211f8f1de0949e6fc97738f52d16aadaf26a754c859b49a710634af499a1174e60e5bb2e4de883a085613c41e77e30591e48cfe78197e1c1d87ac18fccfc8767453d6e49f8dbf15b9755496b6f5cbc17b406fe512ebf665ecea46deac20f7d11efd3c0396e7046b4cef61a776176ab2efa41827c8d649a883c90a60fa2124b444c745efaafb3941b7412ed1c9491c3fb9a3e2a1453069d913ff45bfb829f88e4acc96f8b16adf719e0e4300826b59d61d0d79115069142ed0f829d6e996e7f34b890b79a2328aa4c61fc12a030a3ff0bd64ee79894c148c63cc0f736c85c9e017995924a32e1d5cdea561cbf15ff913fab0f4c537e107c64b50b3272587806b0bd7c70ddb6fa995eb658cc67d5df04f23cf92fc25448f5e1d295f4106b8f650e5a47cef16b2fc6344c33f96d890e835ece1af58436bd8e927727b331046b4ba226bc142ee522c48063fea0dc54677925290305f0da63906dcee9f3d504d106756d2c411eaeeb3cef70d2956a590bbef10e49b13ab47121a386ceb2b43e237ea3ed52ad945c5dee344e4d907fa66485cc494ed45893e650d1d3250bba0279e9f4f1d00ebcd8109aeb87fb93e90739fafd73fb57a71ffb4d1a021198493a1c5eb6aa1808cdc85d1df30d369e807325060ee8ca504283ec9135ead3d0c10ad40c19cbdf96cd93006f96480a0b01464b9169d24d831c65e9db7f620da83e8754627708affc5984e284e0437bec461719aa15b8272c7e3ecf95713b3761e78346bc90639b12818a0399ebcaa0ad7814a1cf95cf51e38dc8f763af86cd96431fc16c2e4e7cdf0541eb18bec4114d9557a9096069aea3b27bc5c82cbe84653c2865c058c4886f8142864357795f6c869ab101dc280a934d27db91bc35e8cbf9027647f93321faaa4e9fe544f7aaa659092511023d9c0e46bbb68cb4330d248e4ca8a9e85da5bb70e6ed6a2dce2d5456629c494f99b24587d4efd795907c32018062853a74af484afc53eb39cecb617b086e0adc173a33b2bf2d1177a32ffe377bf563f732a657ad32ebf0a1a727731223035508f9433835f1a322f52e92c0a6f182a867a436c05ba74eb5b16eb46a2a28d1c48950803d96facbc2adbd81cd20de9e9e4fc184bc9c814acc3c1bd1552f67d1b1519bc38f3271e264a6b790cb3d01531391d81e9fb8922a783cd605e1746cc20e3b48fd4c42444244b23a666202a036ce984f8d1d425028e39aaffd15254d75d9473943e9de565faa827473691dbbeb9f767f2a2e03b1d897a4c67ccfca3436b1d5d4786fcc91e43b5f2d3ae1f3275b463a16b262a295ef2dff07fa6f5220ee752bc6d7acebdd0e8c22530c2a0d74e31e4062edf29ee2989e8a6d328224a023989a9030fac8e96c10dcc181c5e5ceadc4df1717130310128e4bb5ff064d0c90cab3c3a4363a051a90cee6a62a9e7aaf625e7bfd106178796861a0e99eea9ce572f5fc8a1d1b70ce820e19f881e9d8a9123266ba5eaf96ffe5f47ba6e1c45ce9adca36d631813f2e190a9799a8b2e97c1e81a0c7349ef2e25d17aabb1f31cc05997703fa145fed7130414d56154d1a30c75f5396441725a6eaa80b6b38ba0f948b3d2d5c1bc9298b5ff1d70e25ac5971ecd215a53223e055a9fdc5397947b8b5754699f9796fe96a5061f200f84d88fa217e0b255678864376abc789eeb0bf85b119f1c68b5e569eb25d9be816f2f4c937059fcc5d5965eee80de6b8b5f8ada90f656eb6f3c51361b12b23ef22d2389921a04e0755185c5c5966caa716b0df5020f8de5e8d938f64a4529319f31f98b410c5ceed843a8ff55ed01cf9622479597a374807f29cb3fa1d8b39bc7ce6841b1a179681d6b8c1b473eba3a9bf0299014e8666d065ff7869fb47c2f6c4ef2d7c9f2e0cff685ecf542bf930907c49bbdcc51d272d3f0baaca3c64544533dff88133b9359aec73ce2b99bf20482eaf2e70e686b32291daa0647438c4dd615e1341d5591acf017b0651f7919665a87a192094e54f2c8a738439ad4ed0280263ad90f2af3ab397ef94aa9461e5f2cea421d2f5172fa4fcc14ec87f286a30f4a1e7d8659bc6f14271a3a01e142b64f84b53a6fe2840d5da1b691887898d40a1c94cbe68a851cefe7e4ea88f741d1da225298fb2f5bd8c00766d5b6d54742c7619b85dc4852a886b56a2eff0f8879759e8f69fa6541eacb1b609f9536b4fc53f0132a226babc7e890bec97d2bcde91ee4da81e4d12d48b3f85d8cf8c8c5e3f380c6b7a96f8665d0ad9db048f68ae7fcd2c8b64154f7921cb1bb020e3a1b6cb0ad51a79ceb8bf9999ded77d9904eba5d3ae656550d14965bf56b3bd30bf4db5573f328540a05bef6cf5950363a850c127b9b5e082ea82ce82b261d5a12a609bd0f0f8414e8e082e259e4f54dc5768fd3cb78081f8a04fd8e337dc86ee5a727d2fba3b430a39b45a4e6cd017a12129b3b94c1db6a80047b37164facbb078484b6a8f41766dd6bf61f6c0fcc13050879278da3faacac5ba11ce21906aac0046ab8df578f6c249b0c9d35c7595352d08fec0421a44f2b63126603886017e797bbab11d362ed3789b2c5ac131a19cd237dabae1db26776f8480e50eea7f858da729d39a5f842c5e429a555ece3c52b94eb652a6408b073c95f8d4698424daecdf2dc791438b0f14f627eceb4b04f3537b2e8d2848cc4af47a5587e575e3360101981704d5094eb12ae88ec213b17f4a4de8b70a016db851d1b4dbb27868313f24039a2acb7a7a6fdc1e79f8ca4b370c4e0afd160fd5e90de1c62a9f40792167666dc0ee817741f7c8f42b0bab0adcfbd79ab039d0ab9572f4ff5b23b1b8d737d032b9ac41b6a2209d91257f2d13eb77f22b78e5763dd8c4b2b015a09fcc5ebd556af398c50569722b153339ebbf33615678af798fe2db51aefad0aa9e0db0238ff5bf8fa74528ada0c6f62a283ef449c5eff32cfaa6913bf6c1e3385cbd12eacce80184c9488589b25cc57a2ae4c7028898457059eebbff9cf52eac193493f4dc5e5e4cb24d4a13097b614e5f3e3f5193769f1dfbbf7a84e481ccfbbd48b4b8ec5c01c8924ac1ba04abc1b05967062ed0331f0102ab078aed432114a05cafd90e5cd2c770895de79e550003defaa2b2c410beb1f68a306932005fb05858af640cbc2a79fa17f811b4a73c01d3df7b6e9cc3dfce867e5f1a10f60f79787e44dac3248d2f7953920c0aa83302180d913e983a5e26aef7a9c2a624cb942e1feaed75ff629f0458a0ca3fdef2014bd1be48cc9f639248e870452249a4cb1639759ae9c974261fd39918c6286bfffeab8c5924eac5455dd722d3f9a2156ba2219fd602e9021a525569a374e7ccd595b009f8b7a6c08f10072382678628f5fb5b11feb62faaf47cec89a069435d3124b31cd177e0f921bd9be2fd5d0137b61f392f14ba6f31fb86dcdf1071f5afd128a54339c2a53db970c19057d6e137f22f4d90156ebdb8d599dcb39062d2649ded0a1bcf63d3f17b1cc49dafd3dd5ea6218ef9d9986fdc92536ee38a5b14c5d5a653772ff451332b62fbfdf0a58899c40429651fd66433154a3d2b29694fc6264be84cefb029e89bf8c632f9b7db0d8c40dfc0ec4a9c9e8239680b563abc60188b0897f155c527f6d49dcee6485dfa81d588c38d17502d178d1d8f0e90d6d75da6e0aa0d0e60f822108ed2d038c7db6dd0330ee9ee2b7bcfef6940200021425e6743e81b715d0da36895db03343a0385674b752be13da48af07f496468f1c43928c9fde414ade074cd400016864253cbeb50cb6f16d5304a847e15b1dbfd901e0ef1932e4c75b39c880a0faeb6a0aca9486df2fbd5ecaed9a7972ab680348510f42bd1c91376bce500b156d9e85876e19b472fdc3b3c578f8dc640179350992e392cc32cdaff5c96e7c07730b3bcfc0915a0545e007e5dd4c6bb36cb774749961e795c45ecac7c6fb15d2a4571d9fdf99e2c2b7053d0f70994679258e9919ed882d3f61ad2d7234ba60442ccb7f4b4939cec8c5e8e5b665e7f2e7fbf0decc6464928110a821cc710c154fd565a7c234c14b19201e3fc9be82c1c6d79e7b6087764d0276be3b5b04ea14925f97eb66846bcd92e3ac5be5081b24bbf0fdfcda6866e9d3812e824f50cd2c95a5a11fe4a45b2e3022b714aabcc3d0db9870d56103a195fb781f31722286e03b9fe20efe6089ff811d67d38873cd8205d90a61859ce2be75f525702bf4d393a8302d14c9034a5c335613e6c00305350b0c80b0b3c85d0cbe42a311417f28da134e353a06140632e07b2ee7ca2324436c0af1d863410572bbaa187528b5d37b51a1f1686e2b847d4a63a7a153be5473f775277324d29585a226f54570c1d31b0b85f469d1e888ae1e2d5b0ae67e835d4d09127e331346eb104e5c3a75598631d69b565c1bf90efa019b20f6e5c715289bb35923f9328f761e64b006fe365e5a8e5e617fa56dce9318bad1f40677304d0ab566019c3df0dc564fa0f49916a074f53969d00cf2623ca07d396557b3e301f69f1f6d96597eeefe8b81ee3926c8182875a232bc07c3719305f36357ac98f11d0306158c160bbab3d8418125b53708a511d1cc0c5582acc67bfc3e9dc894d5788c0d250793a939c28461802dcc534c8f9d041c3e0025c9d7c6457fb6680086f32daa69a4ccffac295727ba13c5ec060ac8fb53d7126ecc2a13efb5b8eef93f4d4f62020f666e32ba72a15ff81f5d6de5fc863bfc6f74beb6e6e2bcbe16f7c0c55e5ac3cf3d16ad6b0488c4ed1a7b70332d6a4661e008ebf3af8b768dc0535ea16b6936ff508ac1f6c18467a3c1737f2afc3ed8530a51d1aad415e6e6ed6dc2d7b220f7fbccedadd31db38c9d8f24c7cc99b8027baf3bd8200f3e49015e1375cfa25d54a5d8809ef0774ea565494d4f3ea8a683cd40d2883b66be93f5c507f1f455d17d9f961714324265f5d6e037d881161485339a88af7c6046cf476f2d932e536ee39f0d8275ed3168edfe08b4a098b5686430c08410b55b5292615048ff31265bc0c866b85105e770b2a273ce42a08a23ed28c73a5f43ef597f171487c6366896c7619232c34742d290a70e76f5127168dd3a013ddf82864971a911d3d5b8b9f5e5d5641b26c0e62f82e0169e5d602f58f2e2847a170dce37aaba489bbb79d7697b8796811eaede632cdab1e35a0ef0349e564203ebfc4f9d6bcf2cceacc0dcdb852a0b63e06952f3887985d867399ae348ec3d57ba2c6da90a3364a6cbcbbb53ac3fc05d27fbff62355c407c8e2f5cd5f2ed80e63fd53310c958f9038c82e89184ca0ce3d6c26db72f7a3866174e3f4d12fe7389a70188f6caff0abfebae4191e"
        }), new(require("unified_view/multifeed/write").EditKnowsAboutTopicsSection)("XpCKLFk", "", {}), new(require('unified_view/multifeed/story').QuestionFeedStory)("kKsK2Je", "", {
            "bundle_position": 0,
            "scroll_to_top": false,
            "page_data": null,
            "qid": 11849120,
            "feed_page": 1,
            "focus_ty": 2,
            "qfeed_log_hash": "11358694265238245119",
            "feed_ty": 2,
            "position": 0
        }), new(require("app/view/feed/modal").StoryItemToggleModal)("M4Bzsn8", "", {
            "obj_type": "Question",
            "inline_wrapper": "@_inline",
            "obj_id": 11849120,
            "close_on_scroll": false,
            "is_modal": false,
            "serialized_args": "00010000dcb6960523c0b93ba7a123f887316f77f96b8520ffe51abdccaab438734ab32526f6ced98ccfe74aaf5aa47b7dedd91668516dd2ce363affae462bd232f3fd10757c2e9da715a56f5d7a39014f37470fc103ee6bbf1a797f1de8a18a106420e0c86aa9501af80e8cdf10f7569213fd8b561d9a8059178fe061c27c6cb55a476974dd74378759be759dbb9de40f6d02fd5c3f84c4f75efafd106196b8cb9b1668d72ec3885e7612eb89ffcbd9bdf014c09c6ae1f104f866a7ad7b941c78d0b26b3f8c5f80a02c54a59c72f2b1f7643e51fa5a084474fa5bbbd5e90619e4732bce1d8ea8f754ed91e5f85448ea700fa1e9d703ad04c5a77a1352e6432b735f8fbe0efc554fe9466911c71099bfc7b1e8a0e21ff01452d7cc122167494dc931d8ae302936751a1243cbbfa7bd419b84b305a347aa34f85b22fc8f759f23825c8a219393f11864831c2f294e6879dddc8a2e4ad3c7f3f66874260ff05e638e6408cf0f703149d6e938ffe040b754c01b76fc598f70e04bcec258ba75d991c87c6a70da25a88a3d05085a9e98a5abf1e458c49bb35529addc6a22fe3e40795eddb386a1dc05b1fe2f2eee60b538fe482c0be4a818b1ba4619ad23e31c615843376b2fbe58393589a8488317a80e865d9ced79f069e5c87524323e354c73850bd02dc0a165c701e0997a26e13427259aae8b5947125ff1ce1f4b143f56bea6a64ee139f0d72213be3a3bf4992f136c7d026d94aa584ed5c343aa91a1de7442f998269b69bd9b86b3b444dce95b8840eb9efbdc3283b49dda461a44e38be7340651541e765183870216b566b284732ce5d4e87effc46bdfebb1d5b9e961c3c959097cb846bddf7540d1ea617357ce81ced146241d812e672a832022d7453ff5a2b8af7ef3ee9eaa69c54839517bd5b2b00594c1ec508775631793292e31feeb96556976db2338dbc4799686e5b8c2087a2d3d65bc879e556b89b3cef96dccddcb780acb417e120fb67ce1c60cf030ff22ca1218103b65a332c98894ccb829c500fa2300e5abe0ea80b922ac0d248589d70e6d66e96c6b253aae794ab4b85ae1d9d23b366e4713b93d9b13f9ed70cd146554276784838d2d0bfbb368b6c8605d320bd793ba8aec0b62d2aacd42aa927a9f91f86487aa4783b1dfb05a7f731ad9799358cb179b1d4327b120ba0fcc0a34aa964d7bd81c72bd8750e0534d83d580650b35558f935193c410d55294b9c3d93aac361ed8e1987b599c8f0e9484dd36db4b7da2",
            "qfeed_primary_action": "QuestionExpand",
            "story_url": "/How-long-does-it-take-to-find-true-love/draft",
            "should_prefetch": false,
            "page_type": "write_main"
        }), new(require("app/view/topic/topic_list").TopicListItem)("s5KZAKo", "", {
            "tid": 1192,
            "remove_tooltip_text": "Remove"
        }), new(require("view/hover_menu").HoverMenu)("PEh8Uaf", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "tid": 1192
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/topic").TopicTrendingIndicator)("tBkt2iY", "", {
            "tooltipText": "Trending"
        }), new(require("unified_view/datetime_").DateTimeComponent)("cnscCGK", "", {
            "epoch_us": 1482568684037791,
            "js_disp": false,
            "granularity": null,
            "js_update_interval": 0
        }), new(require("app/view/feed/question").QuestionStoryEditable)("PYx9d9E", "", {
            "qid": 11849120
        }), new(require("app/view/question/cant_answer").UndoCantAnswerLink)("vGI20Mw", "", {
            "id": 11849120
        }), new(require("app/view/components").QuestionFooter)("DmJPKxN", "", {}), new(require("app/view/question").QuestionLink)("uhmunvB", "", {}), new(require('unified_view/button/downvote').Question)("x4DTdtP", "", {
            "disabled": false,
            "downvote_context": 1,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11849120,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("unified_view/action_bar/_action_bar").Question)("TlRfOoL", "", {
            "lazy_loaded": true,
            "sticky_offsets": {
                "top": 300
            },
            "oid": 11849120,
            "sdvars": "AAEAAKGRJPJmilpbfeonswLD8Zrq8YC0w064M3nd3EyC/eLvR88qQQjmyTTtmLGVqLW3g8VMfRK4\n3nEmgxL4Sv9qu4Q=\n",
            "is_sticky": false
        }), new(require("app/view/feed/modal").WriteAnswerButton)("pv9dsbP", "", {
            "serialized_dvars": "00010000b9bba54a289ebad158a9acb2f9c8eec3f5ef50fed4a93eb578dd4b0c36d69a27b5a3892c83651df15180e2c540bc1d7fdcecc0a345cc072b8056d2d8fd9e2ca0",
            "qid": 11849120,
            "disabled": false,
            "logged_in": true,
            "qfeed_log_press_action": null,
            "use_answer_draft_page": false
        }), new(require("app/view/question/cant_answer").CantAnswerLink)("KmZ9gOt", "", {
            "id": 11849120
        }), new(require('unified_view/button/follow').Question)("mUPK3PG", "", {
            "disabled": false,
            "qid": 11849120,
            "pressed": false,
            "qfeed_log_unpress_action": "QuestionUnfollow",
            "optimistic_count": "2",
            "optimistic_text": "Unfollow",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": "QuestionFollow",
            "vote_source": "write_main"
        }), new(require('unified_view/button/downvote').Question)("vn8W7Fu", "", {
            "disabled": false,
            "downvote_context": 2,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11849120,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("mJVRLwj", "", {
            "qid": 11849120,
            "lazy_loaded": true
        }), new(require('unified_view/multifeed/story').QuestionFeedStory)("oLI84yf", "", {
            "bundle_position": 0,
            "scroll_to_top": false,
            "page_data": null,
            "qid": 11838742,
            "feed_page": 1,
            "focus_ty": 2,
            "qfeed_log_hash": "16936943006841530849",
            "feed_ty": 2,
            "position": 1
        }), new(require("app/view/feed/modal").StoryItemToggleModal)("HDMJ0vm", "", {
            "obj_type": "Question",
            "inline_wrapper": "@_inline",
            "obj_id": 11838742,
            "close_on_scroll": false,
            "is_modal": false,
            "serialized_args": "00010000da2c9564d2387dd2ce1676a823abc2bf9555c56cf0f8b70105e170b03d967c93ff32573cfbf3fe20e8f3f24f4f93715e361612160cce48efdb88c427f9f6acbe01a052ab3152876736d5f2a806b7021888a1a001b34971105127e2df156ff3fc67ed5b90dcc7b1c2939fe9669784e8c5bbbab7c6c15610aabfc438ce99d463aea6b8e38aa9c259f68a111f46657be498306aacdf11e8f906b5e1a1df2023c3c92d40f840d70107cae337f211155bebd16214faeaed2fd2a68d5bc348ea33995508e203f78c0731b73c3475a16fa52172099ddab5b8f19eaad8bf090b62c71a176a7c4aef93bdbea70b1458285542a72b9657e1932b2cbbf54d5996ff0a6de03921bd603ceff1907f55eee275ee08914c0f970f1c540aa9d284ea9d6c301952b0056ae168ba8bdcd2a10044bb6ba3a7b129b84e2bb0cdbadc6fbed3990ce912a7a81113cba7a280feed415c3757d52c2ce66fc44e835cfcf5b9abc63f41be38acbc1c205c8391360fbe007bddf0c9a02369954f29d732cac0cd9ef9ef5882737464277f3aa3e0d95e3f8cfce6b581c3a92d16f864b515d66fe7eff799a553a3dc682c9c1013eec2839ac64aa8d3c2d87ffc31379e868ac4115db73fdfcf8610f22a3c572605362a7a680ef91875919084c971ec00a16e4c27e77e25fba85f1d75d93495bff92de359c70e72db2e6e14ef2bb838555c8c8de308d08a8dd19fb27b2252909819e4574d544d7f0ba1a6c10302941f3193740df60d4f4fb41baa422d0d143b7e441f5091b8e54aac890aad0e6ece73ddd927478d1fc62cd179e44148a93f201aa78358be5e0c6d118c1a86419c8f85615d36865f5ce9416a269cf0729e2296b317ca2b747e9656ec504089c84bdd5dcdb36cdbb47fd3833cb20693be7c653dfb09482bddd39b88aabf1e98e869ccf7b3d1d0fa0557fd654faaa8efae9b019c76b91bcf8448f8d8c35055ed8df92d983a7e3c776cbae48da1d418de57b12a3666a298964e2caff13a3f973914859f81af71cbeb86a7411d133005723f8f50f78522da6984c0e72ecb0abe88d1acc710445590d249399d3054c314d9c16feb12abb9c3a15bd28d6fc26994a4a38d15dfff9be415aaacb89deb0f0ce8db982a95d9a1e0de37c64c6b869381c3282ef5e9bc49f90beb411b2531b43dce9de90a36c5053e055a0790e5473655da64b77da82433975ab2ca043a57edef48c1cc1dc9fc6ad4e837c84c26e02390422ee798848a1abdb636bbd1e6f26c22466a",
            "qfeed_primary_action": "QuestionExpand",
            "story_url": "/What-is-the-most-childish-thing-you-have-seen-a-politician-do/draft",
            "should_prefetch": false,
            "page_type": "write_main"
        }), new(require("app/view/topic/topic_list").TopicListItem)("ZKtbing", "", {
            "tid": 1404,
            "remove_tooltip_text": "Remove"
        }), new(require("view/hover_menu").HoverMenu)("n3d5T5G", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "tid": 1404
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/topic").TopicTrendingIndicator)("N7H6jMa", "", {
            "tooltipText": "Trending"
        }), new(require("unified_view/datetime_").DateTimeComponent)("Xd9M3if", "", {
            "epoch_us": 1482511225492380,
            "js_disp": false,
            "granularity": null,
            "js_update_interval": 0
        }), new(require("app/view/feed/question").QuestionStoryEditable)("yMifgUe", "", {
            "qid": 11838742
        }), new(require("app/view/question/cant_answer").UndoCantAnswerLink)("T1CzgSI", "", {
            "id": 11838742
        }), new(require("app/view/components").QuestionFooter)("gKwQjKh", "", {}), new(require("app/view/question").QuestionLink)("NRl3B8v", "", {}), new(require('unified_view/button/downvote').Question)("XXZxg8e", "", {
            "disabled": false,
            "downvote_context": 1,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11838742,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("unified_view/action_bar/_action_bar").Question)("ED9gun9", "", {
            "lazy_loaded": true,
            "sticky_offsets": {
                "top": 300
            },
            "oid": 11838742,
            "sdvars": "AAEAAAqAyIZVgxe6597MYJRA87qCCO3yGe6ovVpUBk6L2a95FBj5NddGxMQKy0/u1EeofP3wZhAx\nheEIgQwhpy33wQY=\n",
            "is_sticky": false
        }), new(require("app/view/feed/modal").WriteAnswerButton)("RlW3mlx", "", {
            "serialized_dvars": "000100004f97a06a5daae1252aa9c9ed3531b59d78a12175413428af54e7fe7de912a6c6d65c11d45cea6647d05269052ff11cb616db5eeab25be4cbdd9a7f5234028b66",
            "qid": 11838742,
            "disabled": false,
            "logged_in": true,
            "qfeed_log_press_action": null,
            "use_answer_draft_page": false
        }), new(require("app/view/question/cant_answer").CantAnswerLink)("LE25vKP", "", {
            "id": 11838742
        }), new(require('unified_view/button/downvote').Question)("ZxRahml", "", {
            "disabled": false,
            "downvote_context": 2,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11838742,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("kTVMNFW", "", {
            "qid": 11838742,
            "lazy_loaded": true
        }), new(require('unified_view/button/follow').Question)("Ht3thmF", "", {
            "disabled": false,
            "qid": 11838742,
            "pressed": false,
            "qfeed_log_unpress_action": "QuestionUnfollow",
            "optimistic_count": "4",
            "optimistic_text": "Unfollow",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": "QuestionFollow",
            "vote_source": "write_main"
        }), new(require('unified_view/multifeed/story').QuestionFeedStory)("hgWucvy", "", {
            "bundle_position": 0,
            "scroll_to_top": false,
            "page_data": null,
            "qid": 11840406,
            "feed_page": 1,
            "focus_ty": 2,
            "qfeed_log_hash": "9493649758618441035",
            "feed_ty": 2,
            "position": 2
        }), new(require("app/view/feed/modal").StoryItemToggleModal)("TUOTQwH", "", {
            "obj_type": "Question",
            "inline_wrapper": "@_inline",
            "obj_id": 11840406,
            "close_on_scroll": false,
            "is_modal": false,
            "serialized_args": "00010000ef0c696b556a0e0d74ec764ac51ccce7a5ec73831a48a2878448dcddeb2a55191f3241f5df0005e86455a0aff554312faadcbd7629a4331ea6194ea8696a6517fcb8127412fb48b78c164be5e2676c119ebfb026157135635c5245a88a14ab16b8ab4822958b9725b1c3a3d320682b167ae2f61a0ab6f20fb250e35406eb9af23256656de8353402b8e475c10fe57fa61b87217e467b64323b8d0c23377ba680363a02ad479f6e88aeeb2fa978c6e3702ec5484d95860cdde1471fde49b5e70c4f32530a67bfc25f8fb47fda18f4a750dd10f3c255d3d5e3695c18f3d37d62d07b4aa2abd58f9643ca47339f4c235cd4b08d2cbafb4cab689512bc85022ab7a60e0d5a284276ac2d12c5339968d4e87c2a5fe32d1a82060087130cb03bf27abcdda6297b13cc9a0586d9d240cafac03de9d41afe6d8ffbe92c42e2e41aafe9039ab2fbfca51bbba50a3051b83ec9849aa5833a9e1f27df922ef3973ea9d491887558a101433045ae04e6f4dbc6993c3993f20d081cc47ce392742a9bdc89361d4bc31b95a4c493dd0942cc704a20c88a5ae988d6ae99776217e1ac557bec8be69739ae31c00f2d19841c7b2530d0467c883c0b523aa8e3064d50e9fb4beeaa5df15736edc4bc21d1d17f7bfc3f75a2fbffe7c74ae3aab4bb9ecde3b58c01433430f0adec335fde6a77d2546fcdd35f132c4318663c9a320cdf8800458cac24a24eb0ea086c61cc1d694e536ae505bbaeb0579561dfa50c4fff6c2e2e25b6f5b34075070155c4f68b3c7a656dc80d65d4cba7401284eca91783756c45ccc7a6fd97a6620e0bc9533ad2f898bb4ca232983b308d972442743c33e42b7962b7ffd95aa1e7b8946bd8b5d007000b772f222b9d593956683432ffa3deefa3b4f1c9dfc6b343c9eb8ec93e68197c978ad67b4abf3a724e8b1fff8630bd9bd8953ebac0b8f9b829e286bc15b599a0c996c0674bf6608bb31ef808290363482f32cb96255490f10016144b2736470b76454e1ff74bd960dd650077d1bdae5cf24386f7177a3f1de394586ad6d31f4cfbfe7dd7e87008e67e0ee96472886e9e32a9425bf78fb20a5b0eff8cf8074d917aaea881f580921ac6f6d7f59df4a6e5ebd80187e1bcd8830fc06339349df9edf6864fb702304ee5b36e641aa9855bb94ac60698854e9a1e68d0c1e5f04540e0f5c87259afd43e795a1c9f24f1f571404164a06db771a0b00db2b1a36d59f2bee16e4c871365040d2c31f5b07d57143041029a75ea",
            "qfeed_primary_action": "QuestionExpand",
            "story_url": "/What-sports-teams-have-black-and-orange-team-colors/draft",
            "should_prefetch": false,
            "page_type": "write_main"
        }), new(require("app/view/topic/topic_list").TopicListItem)("OlHLJYg", "", {
            "tid": 795,
            "remove_tooltip_text": "Remove"
        }), new(require("view/hover_menu").HoverMenu)("VHx6cxz", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "tid": 795
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/topic").TopicTrendingIndicator)("Z434TWh", "", {
            "tooltipText": "Trending"
        }), new(require("unified_view/datetime_").DateTimeComponent)("l5Ce24h", "", {
            "epoch_us": 1482517672102899,
            "js_disp": false,
            "granularity": null,
            "js_update_interval": 0
        }), new(require("app/view/feed/question").QuestionStoryEditable)("JR1DTY7", "", {
            "qid": 11840406
        }), new(require("app/view/question/cant_answer").UndoCantAnswerLink)("pcCgubO", "", {
            "id": 11840406
        }), new(require('unified_view/button/downvote').Question)("zlpGV1R", "", {
            "disabled": false,
            "downvote_context": 1,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11840406,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("app/view/components").QuestionFooter)("qvRBH8k", "", {}), new(require("app/view/question").QuestionLink)("w8lyc9G", "", {}), new(require("unified_view/action_bar/_action_bar").Question)("Zn4vdCD", "", {
            "lazy_loaded": true,
            "sticky_offsets": {
                "top": 300
            },
            "oid": 11840406,
            "sdvars": "AAEAAMVe10mLaFvTbcI0XjRZhNk0e1IW7dPKtJR/+dr2SnKtBz33f8WLuD/QxlUBkiVSMn7C9AeR\nIPY5gcz/gHfS1tw=\n",
            "is_sticky": false
        }), new(require("app/view/feed/modal").WriteAnswerButton)("ilQAes0", "", {
            "serialized_dvars": "000100003381d33d055c5e32d29366622851f29124570993dc671c26ffeb749cd90a0437de7a3e7ae60b69d15320f281430835de61e85414025970a22446c3229ddfb94d",
            "qid": 11840406,
            "disabled": false,
            "logged_in": true,
            "qfeed_log_press_action": null,
            "use_answer_draft_page": false
        }), new(require("app/view/question/cant_answer").CantAnswerLink)("f3rkuwh", "", {
            "id": 11840406
        }), new(require('unified_view/button/follow').Question)("LIAcHGS", "", {
            "disabled": false,
            "qid": 11840406,
            "pressed": false,
            "qfeed_log_unpress_action": "QuestionUnfollow",
            "optimistic_count": "2",
            "optimistic_text": "Unfollow",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": "QuestionFollow",
            "vote_source": "write_main"
        }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("JmuPMZg", "", {
            "qid": 11840406,
            "lazy_loaded": true
        }), new(require('unified_view/button/downvote').Question)("ccJmhxL", "", {
            "disabled": false,
            "downvote_context": 2,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11840406,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require('unified_view/multifeed/story').QuestionFeedStory)("Mu1k6Pb", "", {
            "bundle_position": 0,
            "scroll_to_top": false,
            "page_data": null,
            "qid": 11847180,
            "feed_page": 1,
            "focus_ty": 2,
            "qfeed_log_hash": "10089880812616566811",
            "feed_ty": 2,
            "position": 3
        }), new(require("app/view/feed/modal").StoryItemToggleModal)("v3hS2wd", "", {
            "obj_type": "Question",
            "inline_wrapper": "@_inline",
            "obj_id": 11847180,
            "close_on_scroll": false,
            "is_modal": false,
            "serialized_args": "00010000663d7d70d95f4dd8031751991e86cbaea309a4ae6e692f16ec0b25967f26f126a10b9123da3df12d950b4b0c58f3d6455d3fadb09fb0d4a38429bdb342805ead91ece450d48b90e05ed18725a0638c58210274c20709680f912867100ce5a34a75a33771d3b93a685251a0d050a1e5b4955665696f5058e2780616671772301ef2d672e35798a895ec984546a458ac3f5e5dc1e1400f9b985d572759e09c7dc9851f8ee8a26eafbba0dd0aec8a960a9afccd5a7de30e3b29e0ed990bee4e7f051dc3a7f05caa1598b70ad5ab2248a4d724acd6e6faa33bbc39222407c1c3808ce895a9dd698ac582a05f4c13c314278ed9c5962c84a124e471302366cb66cea972b811da0a64cde25921a867a862d3cfba57b6a635c6827460c264ba99dc347e5912a0951a8e95d368263da21e2cbef25925a821f3cf7d5b47b77aa1cf2774bd8526c7d75c3f9283e80dcaf935c5315b1ac435bb8af6ec4aa77b4e69b4aa75ae0a964e8faf367849f096fceb5c0de52ba674ec9aeeb5ee8a238e39f51a00d6b23a98bb1876365e813155cccf62dfa6767c65bde5706ea0ed5c50b1eb8d53ed51b169e8f88d14c6e3d87fefba5bde0e7004815d211eb385b8ae96b4b5d652fac7bfc2f28664ba6d2bab9176e7365fd0be10ca4574f3d9e421fff8f39b89dabba871417bd7617cdfc35ee2f0f12f625bfb3e101dd0dbafa7ff99e6bf30553820d6eaf12a6f08ecbc070fe888ee064ce7e9a632fecff380495f49d849b9cf906eb13fcc1696e9b06fc6f33b7c17081b3ed2b2277fd12a71f93f254932c1a0af5bf25784cb7683c6e8650fafe89c580a579d9f7bafbb396c0b17b833fdc9ee506e889e756a6d6a224c52b94aa9e3e65022516cb39267e34215f2ab48d3f0b9670b1fe02b3b8b2252f47dda609586338c94acb7a31b4582093ed7269dff81e996fc11b3f5f3afa30be4037ee2adbfe066e43885053e6eafdadb349786899e5647037cf2188c1e499a1bcf9df3805aca50b895277c6d4c332ff0899e10cb7be403aa84229a61fb29f460024d83088149cbe5da602d2dbed9520d71f09dc922d7313de2a9b09e90e1d07f7f26dfffead386292e3102eb0c6e6dff6415239de6943a293fccd4178356cfe7d4833e7f383bb5a361b3c649dd94516d55b79cdeea44f8e55657a4c2b376e43f9af053b9d19fb3a8b9ff159872ffe38417e455b431d048c3203e20c3554a04d784c8617111a92dab0c0e450c7ec5a8bd718a4f94d735b4bf6d",
            "qfeed_primary_action": "QuestionExpand",
            "story_url": "/How-do-you-let-a-girl-down-after-you-made-her-believe-youre-in-love/draft",
            "should_prefetch": false,
            "page_type": "write_main"
        }), new(require("app/view/topic/topic_list").TopicListItem)("jGbrkQH", "", {
            "tid": 1192,
            "remove_tooltip_text": "Remove"
        }), new(require("view/hover_menu").HoverMenu)("pYlfzHO", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "tid": 1192
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/topic").TopicTrendingIndicator)("xpsBThh", "", {
            "tooltipText": "Trending"
        }), new(require("unified_view/datetime_").DateTimeComponent)("g7joOku", "", {
            "epoch_us": 1482558760263564,
            "js_disp": false,
            "granularity": null,
            "js_update_interval": 0
        }), new(require("app/view/feed/question").QuestionStoryEditable)("fdaJX2K", "", {
            "qid": 11847180
        }), new(require("app/view/question").QuestionLink)("MCaTojd", "", {}), new(require("app/view/components").TruncatedQText)("OTq01u4", "", {}), new(require("app/view/question/cant_answer").UndoCantAnswerLink)("eybbuh0", "", {
            "id": 11847180
        }), new(require("app/view/components").QuestionFooter)("YBGWXEf", "", {}), new(require('unified_view/button/downvote').Question)("QcyEMkF", "", {
            "disabled": false,
            "downvote_context": 1,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11847180,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("unified_view/action_bar/_action_bar").Question)("Cptow8M", "", {
            "lazy_loaded": true,
            "sticky_offsets": {
                "top": 300
            },
            "oid": 11847180,
            "sdvars": "AAEAAM8WmQhSkCRaCrSro0A6NVEvicBNVs+i8B5F+WZYCrD4b2JqHb7O9fN2/w/AYAlDqni7qdH7\nmLa2nod311rXsH0=\n",
            "is_sticky": false
        }), new(require("app/view/feed/modal").WriteAnswerButton)("WNBFAsd", "", {
            "serialized_dvars": "00010000a591ee86415772006629b72ebe690d65f57e6f44625b4d40032d718ef13c514c6415d80fcc189d8404ef56b8a16bb2995872f3c7a0231f83e36ef56168c216d2",
            "qid": 11847180,
            "disabled": false,
            "logged_in": true,
            "qfeed_log_press_action": null,
            "use_answer_draft_page": false
        }), new(require("app/view/question/cant_answer").CantAnswerLink)("rBNm5zF", "", {
            "id": 11847180
        }), new(require('unified_view/button/follow').Question)("vW0gmzD", "", {
            "disabled": false,
            "qid": 11847180,
            "pressed": false,
            "qfeed_log_unpress_action": "QuestionUnfollow",
            "optimistic_count": "2",
            "optimistic_text": "Unfollow",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": "QuestionFollow",
            "vote_source": "write_main"
        }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("IYb7kbC", "", {
            "qid": 11847180,
            "lazy_loaded": true
        }), new(require('unified_view/button/downvote').Question)("q5b1cAQ", "", {
            "disabled": false,
            "downvote_context": 2,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11847180,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require('unified_view/multifeed/story').QuestionFeedStory)("jfrq1Oe", "", {
            "bundle_position": 0,
            "scroll_to_top": false,
            "page_data": null,
            "qid": 11849886,
            "feed_page": 1,
            "focus_ty": 2,
            "qfeed_log_hash": "1284682340372204880",
            "feed_ty": 2,
            "position": 4
        }), new(require("app/view/feed/modal").StoryItemToggleModal)("UKu0cYf", "", {
            "obj_type": "Question",
            "inline_wrapper": "@_inline",
            "obj_id": 11849886,
            "close_on_scroll": false,
            "is_modal": false,
            "serialized_args": "00010000537af62a99f02459749871384c8cb90ff93ab4159d3a1aaa900513e01ec45771a367f309d8fa701803e9c6af933f89e76d805733b002a11728fef2be91a57a520a552459707b08a19623bfe436f9f26f394bc7c3d81e1b9321f8677c172b195e8d67b8f36ad7cc5429c4d2a4d2617d8d8f97c882c251ccd4339a59148256b7adf4be5bd58050734a9f8c573097a58bf9dacf51416ad9af9ac75dd96a13f6b0daef4fde322536ed0095712cb66e40af8b7942dc3f58b0dbf9a94c64d3693a6967be4659c39fd06ccbee8a5e9afeca6d09d2d51a7c5473fb421ca3f39ea67a8967a04c308454a46877ca7d86466dc4e68883470a097be8b6405c102bbadbc254d3bcd47a1af771cd57bf958e876caa167a6b635b12304a8dc14e4503de25392b0052a92c4c7bdad7fc62547de158b880f4c6384437b09f6df78eacd588477d2aa2a80f0fdc5f498d1f6373b69bb3d7cdf6aa569c753169bf314f2313c0a8ca08ed489448aaa00db31ccbacafbd870bf5553eb2c52b03f27e925b7e84d513f4f49574e965fa16b13d3116a78dea52541f68bf2324088d10482cb8996b4f0a4f87c092d70d14d7a0b5d86fa29ffafbe3ab1dfed19591f22b46211c8a4ccc8e72f562b5c408b43a3a8d7bc7cfd707c361ad3770fe18d54322a3fbfc0e8410f1790d05fa4df7b5eda2f2ab4f832a44ded2edec4ef779b70467c625b6ac1b0040965e8f4252d64b0b94b8b5503ed59fb0c8c0b6291b6c5d8685951861d35ea824731c838efb1149f8e91889290c0aa45ec4eed7c07876bbacf6d33da71e70447d77476b7690058aef1218b7339a15c27c969e1bb480739a649c2cfefa4402399ea5bf7584ba12e90ace9693eaea247220fa3628e18e0f5065203146b47bdf802eff3c680c5610cb8ed12d50be0835fb8a97d2482861a3f725ce7c55bee3548e2da7d6da8410007403773cdf0a458ca37602a7ac04d984de4e39d28862dcba779fcedda58a8a1f34bfad03647a36e46c70c9111df12bd812d3db2c729095868d51a752963f2c5991749dc069c01cd4010d6199ef4a72a518c10f32fff684cef26d7ff9270c3805b04d8c90482d0b5bc07b6ab472b4cdf1e377059e445151e772ab44b39768a8cfa914fbb0b6b3562a3b3ff986f84024faecc73a0f4d5305164967e99366c057d55d6c11619cee627c5f4c98b3515fbd04e4c14f0881d465a13ff9919263d199e9b83cf83959156a73f3521b8f7c94f6d2f1e93f5f22520282ab09037e1a",
            "qfeed_primary_action": "QuestionExpand",
            "story_url": "/Is-science-and-spirituality-the-same-thing/draft",
            "should_prefetch": false,
            "page_type": "write_main"
        }), new(require("app/view/topic/topic_list").TopicListItem)("xoExzB1", "", {
            "tid": 931,
            "remove_tooltip_text": "Remove"
        }), new(require("view/hover_menu").HoverMenu)("IXwn0qW", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "tid": 931
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/topic").TopicTrendingIndicator)("RoiryVQ", "", {
            "tooltipText": "Trending"
        }), new(require("unified_view/datetime_").DateTimeComponent)("XY9Ofoq", "", {
            "epoch_us": 1482572803587548,
            "js_disp": false,
            "granularity": null,
            "js_update_interval": 0
        }), new(require("app/view/feed/question").QuestionStoryEditable)("a23RcYV", "", {
            "qid": 11849886
        }), new(require("app/view/question").QuestionLink)("Terv7ZJ", "", {}), new(require("app/view/question/cant_answer").UndoCantAnswerLink)("LRzGKiI", "", {
            "id": 11849886
        }), new(require('unified_view/button/downvote').Question)("HFHEIak", "", {
            "disabled": false,
            "downvote_context": 1,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11849886,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("app/view/components").QuestionFooter)("lgzj9wz", "", {}), new(require("unified_view/action_bar/_action_bar").Question)("OZBmad6", "", {
            "lazy_loaded": true,
            "sticky_offsets": {
                "top": 300
            },
            "oid": 11849886,
            "sdvars": "AAEAAFSK0n96UulWYrV8wOvlWZP8B6cFbSpOtxEOisWJQqlGcttrndXuvDVUBUjaP+NNPYRKBrhn\nF5zvFkQYzTghuu4=\n",
            "is_sticky": false
        }), new(require("app/view/feed/modal").WriteAnswerButton)("imfo26i", "", {
            "serialized_dvars": "000100007015a34f795c864ce529c7568e84b7d43f79cb20a8ebf887789a6a68a382db589fc37b90e4790b3849d17b5d6a7c7bc32a4797d59a5c3991e4fa8b61c6d3f597",
            "qid": 11849886,
            "disabled": false,
            "logged_in": true,
            "qfeed_log_press_action": null,
            "use_answer_draft_page": false
        }), new(require("app/view/question/cant_answer").CantAnswerLink)("b4Y6Ctl", "", {
            "id": 11849886
        }), new(require('unified_view/button/downvote').Question)("BOEodbN", "", {
            "disabled": false,
            "downvote_context": 2,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11849886,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("zfREGgU", "", {
            "qid": 11849886,
            "lazy_loaded": true
        }), new(require('unified_view/button/follow').Question)("UQVDSX1", "", {
            "disabled": false,
            "qid": 11849886,
            "pressed": false,
            "qfeed_log_unpress_action": "QuestionUnfollow",
            "optimistic_count": "2",
            "optimistic_text": "Unfollow",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": "QuestionFollow",
            "vote_source": "write_main"
        }), new(require('unified_view/multifeed/story').QuestionFeedStory)("JHwIDu8", "", {
            "bundle_position": 0,
            "scroll_to_top": false,
            "page_data": null,
            "qid": 11824187,
            "feed_page": 1,
            "focus_ty": 2,
            "qfeed_log_hash": "2522324231451991995",
            "feed_ty": 2,
            "position": 5
        }), new(require("app/view/feed/modal").StoryItemToggleModal)("HkaLGQ0", "", {
            "obj_type": "Question",
            "inline_wrapper": "@_inline",
            "obj_id": 11824187,
            "close_on_scroll": false,
            "is_modal": false,
            "serialized_args": "00010000edf57c89de66d792ac4225412dd8bb8acadf999e8622ad20d7e2f82816875919427c6375a16a252f4311e5db6c30749bbe55214c1f919088d7d7fec688fcf27c784c823670bb9297d034d0727498aff6949d148298b1cca2dd92a711e384d4ead4cf191333e9532f7ecde12a2a6734f30db9a03fc0ae9e3383e7c3b02d410b74a420f8b6bf1e063b52376e0e4797fd9702b094c010d43db789cf3ed7df3101b3818f43e29c77147cd726df679e657be679b11c871149077d59df6e003e92802b63247f5934140f00c0f163ed6603ae7eac395f7fa80ce48aab0302a581e26acf31019005710818fbae61db6a6b86a9fa776117f98f899138c462461077f6eb885ba6096e106c6c6422adae98cee060750dfdb55730f32ef659e336af2e068b3f7805bed1b1de50109206f2b921baee1d9047a8644f311e80a64c35901dc84354f4abbfead0e2210a99a0294c5f91baed176cbb2bc20357ebad18f506d1f1242cf9992509b2c0c44c54e50191b2e2785058f6490a723b36ded96301f835b8b16d7f9eaa6e222a2b3515e3569c40d912a64be9cd9b3753bdbafcd2dfd7f077f048e28787b82006db894d56da7946476f8866149433fb7b3aa3a712a3eac30ca2b37455058f13c1f3743daf216a3f3ad9c9f163f0b00f2b8f14b2d52f7bd4c7fffdce2e09c4c4a1e71618756cd24ad0a8d8b0c75484f93657aa7eb7513560f06b6d18464018e86da77703a2e7e4f9f4eed8115a9a93965f4b3727a7d5984024cc068e1ef013d1f6b64e5418f82c922ffc38e0169b3d911a97fa48d8fdf8339accd61e451c9edb61a70232df7428d267c62e8ca9f7a8d469107bc8b177a7da9410d1bfb00909b8e12ba72566e69c35233d394bbf88ec968dae3a14b3dcfce1cf193458880f93c7c6c28af00444f7b553e071a379f38964953fa49628f1360d6c3542090b9e43d67ea9c51a93b82361ac489c8f61b750c7c45a2eeb6232aaeb3eb3523621e4a2a0037e69ceec07f436bcacf945b1490871998bac5490ab7ab97808600285f05a14a64d0812c0e88a533cc2ae698cbd6c902f2db9ca07cf485a92fbf0580e2b5a6bf8ccf06e68d21870e948f2c1f0a1cecd24620e89c4a3fcd8268e027b6310549ef1f829faf977730fec23e093f1280aa7ed0dcc0e93e2e903cb9c67fedaa305d932a1140e0b671462960db5ec77ed42420ac92b67e37915410cd369f2c38e70d1c561ea8d1699daa79cb51759d76ba99694259434896e1b4f5d21b2",
            "qfeed_primary_action": "QuestionExpand",
            "story_url": "/What-are-the-best-music-instruments-for-brain-development/draft",
            "should_prefetch": false,
            "page_type": "write_main"
        }), new(require("app/view/topic/topic_list").TopicListItem)("ffBZmbh", "", {
            "tid": 801,
            "remove_tooltip_text": "Remove"
        }), new(require("view/hover_menu").HoverMenu)("dsLqN82", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "tid": 801
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/topic").TopicTrendingIndicator)("k3bclZZ", "", {
            "tooltipText": "Trending"
        }), new(require("unified_view/datetime_").DateTimeComponent)("od7kaKB", "", {
            "epoch_us": 1482440501949386,
            "js_disp": false,
            "granularity": null,
            "js_update_interval": 0
        }), new(require("app/view/feed/question").QuestionStoryEditable)("dvmY3rF", "", {
            "qid": 11824187
        }), new(require("app/view/question").QuestionLink)("lu8SzXu", "", {}), new(require("app/view/question/cant_answer").UndoCantAnswerLink)("TtCZxK4", "", {
            "id": 11824187
        }), new(require("app/view/components").QuestionFooter)("u2zECDl", "", {}), new(require('unified_view/button/downvote').Question)("LZuo4qH", "", {
            "disabled": false,
            "downvote_context": 1,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11824187,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("unified_view/action_bar/_action_bar").Question)("CQPqG5K", "", {
            "lazy_loaded": true,
            "sticky_offsets": {
                "top": 300
            },
            "oid": 11824187,
            "sdvars": "AAEAAHtFRBYFVptVYsElTi1UX4jOJI2kbSBw4NBieYGpZAlvk0N6P9JbFbkggSYs1ygfL5OZPaiY\nq0bMRhoMKbgeBps=\n",
            "is_sticky": false
        }), new(require("app/view/feed/modal").WriteAnswerButton)("k4Fa8RR", "", {
            "serialized_dvars": "0001000020fd9a24208a1f916683a375d6a83ae5fb5edab89e7eb50b34278c7be6c760c08ebb55cb5ba960731accd9037e8e99979fca7435d81facc7f984d44c24e4ccb3",
            "qid": 11824187,
            "disabled": false,
            "logged_in": true,
            "qfeed_log_press_action": null,
            "use_answer_draft_page": false
        }), new(require("app/view/question/cant_answer").CantAnswerLink)("fnNIBEm", "", {
            "id": 11824187
        }), new(require('unified_view/button/follow').Question)("RyTRog2", "", {
            "disabled": false,
            "qid": 11824187,
            "pressed": false,
            "qfeed_log_unpress_action": "QuestionUnfollow",
            "optimistic_count": "6",
            "optimistic_text": "Unfollow",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": "QuestionFollow",
            "vote_source": "write_main"
        }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("yQnfyif", "", {
            "qid": 11824187,
            "lazy_loaded": true
        }), new(require('unified_view/button/downvote').Question)("HdFVMBR", "", {
            "disabled": false,
            "downvote_context": 2,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11824187,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require('unified_view/multifeed/story').QuestionFeedStory)("g3JpmiI", "", {
            "bundle_position": 0,
            "scroll_to_top": false,
            "page_data": null,
            "qid": 11841630,
            "feed_page": 1,
            "focus_ty": 2,
            "qfeed_log_hash": "15057915381049935355",
            "feed_ty": 2,
            "position": 6
        }), new(require("app/view/feed/modal").StoryItemToggleModal)("u05WCkd", "", {
            "obj_type": "Question",
            "inline_wrapper": "@_inline",
            "obj_id": 11841630,
            "close_on_scroll": false,
            "is_modal": false,
            "serialized_args": "000100009d118f6f6f8338b6a59e1eaa188afcb3b04386c0acebe3632fa282d1e99b0e4a3b3b99b81ec9c3d6c3ab62254883ec91ffe99bde2931a711dc2dd01eba09e33a5ebe43f21d97ee93ef0648a4f60b05954502d1e13f58e2de42f95ef8dcd77fcd9cbfb2f59e442cef68dcca0c37cfe9f2187d14de49645e88bb05ee78b4a407c1b74682a3877df2bd4d5f796ef740fbd198c3a10232aa8076fc7b11e58c0fb8ec97e55924571c31c15097ff1e8b650c087b293287b229decae587f4c155b11a1f76218ea5897df4195aae315efa5b54872128f4bd243b2f103741f29e9bba00346878a1cd6de07412ce466e17210ee12ebcc147cad464266669dcf587f67ba04bc402f7066447c745199fad3d03c5ccb07cade39128d2f7448367209ffa192ce299d83b608f1eec2aa69046bf5ad534b0de6ec6885a7e0e342aecbe6f9f7d21536e9160470928508da8d1d1682de503998b59b0d74e99e1beceed9e081c0f5e373839600b5b37e3bcc6989a74e2c21c1fb0c34a452a2a73aefac8e462a1199dca12a1795727908a93c92620afe55b37366376cab71074fb29abb1fe96d8cac5233a52e6ba57f5d0a0b1cb06fa61d0db9faebfd57b290001e83dab08bae6c264216906adc8068449eb6407662197886d8ee2e11f1e0c3f5c1b9ba74c85a84fcd37f29f4525b2868831fe9e89625432e8fcecf6230118232edee69b96a3931ace9a434a4de0980cd1a5f8718f8b39b1ac41196986f61334e15b21ae836a47009bd0230bd3fd45c79b4bf06f716450d3480e52f39fb962c76823eca00047d91ca8493a2ba75b9b82a05af329275c73ffb94de1284753a214f3253098e4a4dbbfbc2a0bb65d67f20b5aa11ed0ffff43e8bc4c004cdc8a8a670efd88940c9af1196a1c8e033e4922e99398165128bc204d7e44baadd9b4eae0c7434aa8d5b4d39652f2978071e7545fb65ffee21111dfc3b055fcbe3d86c8c75e4f30a463f541a0f253eee9ae64f5b044d96cc1a5f84170abc1190e0458bf68ea8e6d57c69eb91515febcc6c77df2f5e91d2a60357e1a338a60a6d59fe53fa1dd841decc6a25d248c49151353f11dc3b9dd33e1cd357f932792b3bcc720a90343101b50b9e7e3072d7604e5d52160de65d0980f768ac8125dbd1c283be914c7d4975351001542bcd3609f3217dcfb530fea6ff3f7c86cda4aa183b3c2927eced7e2e81a6e02f0594060aa0f6a85bf00b2a3a489e5da8aa9a23c8e34eb4b61197f84826862321522244d",
            "qfeed_primary_action": "QuestionExpand",
            "story_url": "/What-are-some-things-I-can-flip-for-money/draft",
            "should_prefetch": false,
            "page_type": "write_main"
        }), new(require("app/view/topic/topic_list").TopicListItem)("uzW5csO", "", {
            "tid": 858,
            "remove_tooltip_text": "Remove"
        }), new(require("view/hover_menu").HoverMenu)("KsbMYz7", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "tid": 858
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/topic").TopicTrendingIndicator)("YXeVZfh", "", {
            "tooltipText": "Trending"
        }), new(require("unified_view/datetime_").DateTimeComponent)("ER3pROD", "", {
            "epoch_us": 1482522759897901,
            "js_disp": false,
            "granularity": null,
            "js_update_interval": 0
        }), new(require("app/view/feed/question").QuestionStoryEditable)("twHLO94", "", {
            "qid": 11841630
        }), new(require("app/view/question").QuestionLink)("iWPwlM3", "", {}), new(require("app/view/question/cant_answer").UndoCantAnswerLink)("YtNJwzb", "", {
            "id": 11841630
        }), new(require('unified_view/button/downvote').Question)("uWvUsC8", "", {
            "disabled": false,
            "downvote_context": 1,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11841630,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require("app/view/components").QuestionFooter)("dOUpgM9", "", {}), new(require("unified_view/action_bar/_action_bar").Question)("ZWY3DCc", "", {
            "lazy_loaded": true,
            "sticky_offsets": {
                "top": 300
            },
            "oid": 11841630,
            "sdvars": "AAEAAMtpmpCmmFC0xEBpPbaYqrGhBGIWTa1hOVXIFjXSwIKh0QrYYk7vqACt5LiJbdYUL4112Hr0\nayaz2rC8ZLoxtcE=\n",
            "is_sticky": false
        }), new(require("app/view/feed/modal").WriteAnswerButton)("TiGA5C6", "", {
            "serialized_dvars": "000100002ebb9de8dd03ac50df9b8962fc2f90af1d29ba501aca6e36c211e2ded768866e2f05b6a19f0796d27e7bf939bcdea5f386b3fea61d4dbadf672b708b1bd68a73",
            "qid": 11841630,
            "disabled": false,
            "logged_in": true,
            "qfeed_log_press_action": null,
            "use_answer_draft_page": false
        }), new(require("app/view/question/cant_answer").CantAnswerLink)("iyYbHw1", "", {
            "id": 11841630
        }), new(require('unified_view/button/follow').Question)("co2fGF6", "", {
            "disabled": false,
            "qid": 11841630,
            "pressed": false,
            "qfeed_log_unpress_action": "QuestionUnfollow",
            "optimistic_count": "3",
            "optimistic_text": "Unfollow",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": "QuestionFollow",
            "vote_source": "write_main"
        }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("lkiJAa8", "", {
            "qid": 11841630,
            "lazy_loaded": true
        }), new(require('unified_view/button/downvote').Question)("ziuiE8w", "", {
            "disabled": false,
            "downvote_context": 2,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11841630,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require('unified_view/multifeed/story').QuestionFeedStory)("v8tEfTA", "", {
            "bundle_position": 0,
            "scroll_to_top": false,
            "page_data": null,
            "qid": 11850008,
            "feed_page": 1,
            "focus_ty": 2,
            "qfeed_log_hash": "1897901142483316837",
            "feed_ty": 2,
            "position": 7
        }), new(require("app/view/feed/modal").StoryItemToggleModal)("ClWKczZ", "", {
            "obj_type": "Question",
            "inline_wrapper": "@_inline",
            "obj_id": 11850008,
            "close_on_scroll": false,
            "is_modal": false,
            "serialized_args": "00010000f3691bc353b55f3b11e82be955a39041c7959f933ba535b8ec435417a7ff7f0fb3a6f5838f30993e72d5bd6f046252398b882c2029b8faf63182ae82688bcc53096dcc3d1e13f78acbc48fec1f09fd6dd47656905cf3718f0e91196c8fd35ca35e75429878c6c8537fa56c82d0faa17d8b79d1290e6222e1542778978d704a63536630e5ee51dc8eb602d0aad60f062073554d280abc46f2f031f55e39a5bfaa4b5bd179b179ae4945e293b74dadf777fabdc940703312c061a3f54cfae1b3dff70fd721386bb2a16eb9eb8478a6ec2c703fcc1dc142ed83ad2ff8a1cf94e494879e991e2f7cc2dc881bbe4a8d9cd1de5aeb2f3e455877e8ac5de4e860a202021d1966f83e67d675ce9674041c148288304eaa1f3032785e0a77670041e0e53244b9939de29daa881aa64db1ffa310a0c794bf3e4df632b7a7e44155410c45cc190c3956c9a3824ea6a692e7cb18e358acedab25d3b0ebc37addabac67bf6c8ad060bd8ff98691b1024632a6b7237db0e4cf7e99e340eeee49217d1c541cb9be4b81f310382e1487d8ce68b5aa8ae57590c047574ea15367a563c1dcc2984922f4f8fc3a8b657fe68e4fb59b922a16753e2b9f1ff47e955465c15d55e9a1ce8524d42986f9d25ec23e4f7bb984deaa8c11b53c1c5249c04b56ef5f4ec78ab4c3ec42037449d52c034b44c17d21ab1a66f45865d3d62192865b7b87f42164a28aea13a49b17b4e1f48c727657f2cbcce4f1243c798e9d8b7838c8fb4ea9accc8256845f0d13528cecace7e70d4b2c444f7a3c6376c1d7c3ff985cf34a0ee2e893ee32a625b0880210dae190405824cad0e347ddb69af5b4d7e7a81a84046d34869a38abe26faedd31b23e2dd86d4aa6fe0defa916ccf63c0b860cd2a86b10beb6251ad18ebcb08403a10550a1d2a1533635e7d493ca5f43a00c80de98e0a339595cde97f1c70c48e3749a0da2422fcae3d6196440696be673201e91275230791c80d777179eeeb37e4696d606784e553f0451aa178bddd10799f208b2d5ce0113dbd0a8d346ecb7ce3cf68280c4eb948e702e25f208f4f641b2a878cfa85dfd136f1c5a3f10ec1fd66e40f5c63952805c7b79b7ace44524f606a695e8dc401e4d4fa7229e8d3d427520db3c55d49752d8f7eb04a19ecb933eab8545343f099e768bc8e8ab12deee25708777708c28dde8b3756632832e2a6f731a00df7d5bf02e99c1be1ebb26a49719ab88ccd4593444ab9d149fcd658c6ac0a172bb381eea60",
            "qfeed_primary_action": "QuestionExpand",
            "story_url": "/Be-honest-what-would-make-you-stop-loving-your-kids/draft",
            "should_prefetch": false,
            "page_type": "write_main"
        }), new(require("app/view/topic/topic_list").TopicListItem)("XlExwfT", "", {
            "tid": 1192,
            "remove_tooltip_text": "Remove"
        }), new(require("view/hover_menu").HoverMenu)("rvnYt78", "", {
            "css_positioning": false,
            "on": null,
            "load_on_pageload": false,
            "should_preload_menu": false,
            "alignment": "left",
            "attach_to_body": true,
            "kwargs": {
                "tid": 1192
            },
            "click_open": false,
            "should_show_hover_menu": true,
            "show_menu": true
        }), new(require("app/view/topic").TopicTrendingIndicator)("OP2lUp2", "", {
            "tooltipText": "Trending"
        }), new(require("unified_view/datetime_").DateTimeComponent)("wfQuYXR", "", {
            "epoch_us": 1482573361093561,
            "js_disp": false,
            "granularity": null,
            "js_update_interval": 0
        }), new(require("app/view/feed/question").QuestionStoryEditable)("lHe4ISi", "", {
            "qid": 11850008
        }), new(require("app/view/question").QuestionLink)("Ou7Plr2", "", {}), new(require("app/view/question/cant_answer").UndoCantAnswerLink)("L15i6z7", "", {
            "id": 11850008
        }), new(require("app/view/components").QuestionFooter)("b0I3d6N", "", {}), new(require("unified_view/action_bar/_action_bar").Question)("Xg8m3ZO", "", {
            "lazy_loaded": true,
            "sticky_offsets": {
                "top": 300
            },
            "oid": 11850008,
            "sdvars": "AAEAAEHwCXdsUhrqRFuS5m5nUSIAO53GKc1I0th7QjYiHkayxZ65rDqtwhfda/mJu/ysJ5yQjxYC\nAazu02ZjEpqMEtc=\n",
            "is_sticky": false
        }), new(require("app/view/feed/modal").WriteAnswerButton)("MTw22v1", "", {
            "serialized_dvars": "000100007a6a814d5bd2b9592e1bc8821cd686f4ff63ae9ff9940b6c0f3dbbbf3df9280a0b7db7351bc5270352da439ccf145782bd3a5473e2ee26a9ee43b9016b500075",
            "qid": 11850008,
            "disabled": false,
            "logged_in": true,
            "qfeed_log_press_action": null,
            "use_answer_draft_page": false
        }), new(require("app/view/question/cant_answer").CantAnswerLink)("fBnyUI6", "", {
            "id": 11850008
        }), new(require('unified_view/button/follow').Question)("uhIxWwc", "", {
            "disabled": false,
            "qid": 11850008,
            "pressed": false,
            "qfeed_log_unpress_action": "QuestionUnfollow",
            "optimistic_count": "2",
            "optimistic_text": "Unfollow",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": "QuestionFollow",
            "vote_source": "write_main"
        }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("yEBU3va", "", {
            "qid": 11850008,
            "lazy_loaded": true
        }), new(require('unified_view/button/downvote').Question)("Aa65gQg", "", {
            "disabled": false,
            "downvote_context": 1,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11850008,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        }), new(require('unified_view/button/downvote').Question)("fm5bjnz", "", {
            "disabled": false,
            "downvote_context": 2,
            "pressed": false,
            "qfeed_log_unpress_action": null,
            "qid": 11850008,
            "optimistic_text": "Downvoted (Undo)",
            "url_to_dirty": null,
            "should_skip_next_liveupdate": false,
            "qfeed_log_press_action": null,
            "show_feedback": true
        })];
        coreComponent.registerComponents(_components);
        coreComponent.onLoad(_components, true);
        require("shared/core/component").afterOnLoad();
    });
</script>
<script type="text/javascript">
    require.whenReady("shared/main-loaded", function() {
        require('shared/onload').execAfterLoadDelayed(function() {
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o), m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-16618355-1', 'auto', {
                'sampleRate': 1
            });
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
            ga('set', 'dimension1', 'answer-index');
            ga('set', 'dimension2', 'True');
            ga('set', 'dimension3', 'False');
        });
    });
</script>
<script type="text/javascript">
    require.whenReady("shared/main-loaded", function() {
        var w2_timing = require('shared/w2.timing');
        var timing = w2_timing.timing;
        window.addEventListener('DOMContentLoaded', function() {
            w2_timing.logTime('documentReady');
        });
        window.addEventListener('load', function() {
            w2_timing.logTime('windowLoad');
            require('shared/e2e').reportPageData({
                "mustReport": true,
                "standard": {
                    "owner": 12,
                    "e2e": null,
                    "server_side": 1000,
                    "server_side_goal": 950
                }
            });
        });
        timing.server_time = 417.61;
        timing.window_id = "dep3602-697014490613885210";
        timing.page = 417.61;
        timing.request = 428.18;
        timing.is_css_inlined = false;
        timing.is_early_js_inlined = false;
        timing.page_size = 101921;
        timing.experiments = "AAEAAKj6yNTdj03i0G7Ak56djMYoOHCy+ERLaotnikF8IcgqcNkC+CPj6ga6p6T+P2T80lJcOxt8/vqv3fTgwm+okl8=";
    });
</script>
   