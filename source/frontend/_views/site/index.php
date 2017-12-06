<?php
   /* @var $this yii\web\View */
   /* @var $model \frontend\models\SearchForm */
   
   use yii\helpers\Html;
   use yii\helpers\Url;
   use yii\web\View;
   use frontend\widget\WidgetPeopleAnswers;
   use common\models\User;
   use yii\jui\Dialog;
   use frontend\widget\WidgetChooseTopics;
   use frontend\widget\WidgetTopicsKnow;
   $baseUrl = Yii::getAlias('@webDomain');
   $jsOnload = <<<JS
	function show_nub(id)
	{
		$('#'+id).removeClass("hidden");
	}
JS;
$this->registerJS($jsOnload,View::POS_END);
$url_set_follow_topics = Url::to(['/ajax/follow']);
?>
<div>

	<!-- BEGIN HEADER -->
	<!-- search forcus  -->
	<!-- <div class="LoggedInSiteHeader SiteHeader search_focused" id="__w2_CyYKd0m_header" style="padding-right: 0px;">-->
	<!-- end search forcus -->
	<div class="LoggedInSiteHeader SiteHeader" id="__w2_CyYKd0m_header">
      <div class="header_inner">
         <div class="header_logo">
            <a href="/"><span>Quora</span></a>
         </div>
         <div class="header_contents">
            <div class="table_cell_wrapper">
			
				<div class="ask_bar">
					<div class="WithServerCallMessageMixin TypersearchESSelector Selector LookupBarSelector" tabindex="-1" id="__w2_GtfSUcI_wrapper">
                     <div class="selector_input_interaction">
                        <div class="CharacterCounter fade_out" id="__w2_lyOval5_counter">150</div>
                        <textarea class="selector_input text" group="__w2_GtfSUcI_interaction" type="text"  rows="1" placeholder="Ask or Search Quora" w2cid="GtfSUcI" id="__w2_GtfSUcI_input"></textarea>
                        <div class="selector_spinner hidden" id="__w2_GtfSUcI_spinner">
                           <div class="LoadingDots tiny">
                              <div class="dot first"></div>
                              <div class="dot second"></div>
                              <div class="dot third"></div>
                           </div>
                        </div>
                     </div>
                     <div class="selector_results_container hidden" id="__w2_GtfSUcI_results_container">
                        <div class="lookup_bar_results_wrapper hidden" id="__w2_GtfSUcI_results_wrapper">
                           <div class="results_wrapper">
                              <div class="hidden resistance_wrapper server_message" id="__w2_GtfSUcI_server_message">
                                 <div class="fixit_title" id="__w2_GtfSUcI_server_message_title"></div>
                                 <span class="fixit_note" id="__w2_GtfSUcI_server_message_note"></span> 
                              </div>
                              <div class="interstitials_and_results">
                                 <div class="hidden ask_interstitial" id="__w2_GtfSUcI_ask_mode_interstitial">
                                    <p class="ask_interstitial_content">
										<strong class="ask_interstitial_title" id="__w2_GtfSUcI_interstitial_title"></strong>
										<span id="__w2_GtfSUcI_interstitial_text"></span>
                                    </p>
                                 </div>
                                 <div class="results" id="__w2_GtfSUcI_results"></div>
                              </div>
                           </div>
                        </div>
                        <div id="__w2_GtfSUcI_empty_input_prompt"></div>
                     </div>
					</div>
					<a class="AddQuestionLookupBarButton" href="#" id="__w2_a37Dug5_dialog_link">
						<div class="inner">Đặt câu hỏi</div>
					</a>
					<!-- chi tiet cau hoi -->
					<!-- <div class="details_wrapper hidden" id="__w2_GtfSUcI_details_wrapper">-->
					<!-- end chi tiet cau hoi -->	
					<div class="details_wrapper hidden" id="__w2_GtfSUcI_details_wrapper">
						<div id="__w2_IpTXDsG_editor_outer" class="editor_wrapper">
							<div id="__w2_IpTXDsG_editor" class="AskBarDetails Editor edit_latex web">
								<div  id="__w2_Aq3Rqgn_doc">
									<div class="doc empty" contenteditable="true" placeholder="Enter Question Details (Optional)">
										<div class="section" >
											<div class="span active">
												<div class="content"><br></div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- End detail wapper -->
               </div>
			   
            </div>
			
            <div class="table_cell_wrapper">
               <div class="header_nav" id="__w2_CyYKd0m_nav">
                  <span id="HAnThy">
                     <div class="FeedNavItem HoverMenu SiteHeaderNavItem">
						<a class="nav_item_link selected" href="<?=$baseUrl?>" id="__w2_u0AnXoW_link">
							<span class="expanded">Mới nhất</span>
							<span class="truncated">Mới nhất</span> 
						</a>
                     </div>
                  </span>
                  <span id="grqNWD">
                     <div class="WriteNavItem SiteHeaderNavItem HoverMenu">
                        <a class="nav_item_link" href="<?=URl::to(["answer/index"])?>" id="__w2_uyWBJXD_link">
                           <span class="expanded">Câu trả lời</span>
						   <span class="truncated">Câu trả lời</span>
                           <div id="AiBqdJ"></div>
                        </a>
                     </div>
                  </span>
                  <span id="XiyDph">
                     <div class="NotifsNavItem SiteHeaderNavItem HoverMenu">
                        <div class="hover_menu hidden hover_menu_header show_nub" id="__w2_hrdry0P_menu">
                           <div class="hover_menu_contents" id="__w2_hrdry0P_menu_contents"> </div>
                        </div>
                        <a class="nav_item_link" href="#" id="__w2_hrdry0P_link">
                           <span class="expanded">Thông báo</span>
						   <span class="truncated">Thông báo</span>
                           <div id="ONPvaD"></div>
                        </a>
                     </div>
                  </span>
                  <span id="oxTbDs">
                     <div class="MoreNavItem SiteHeaderNavItem HoverMenu">
                        <div class="hover_menu hidden hover_menu_header show_nub" id="__w2_PxpMgD0_menu">
                           <div class="hover_menu_contents" id="__w2_PxpMgD0_menu_contents"> </div>
                        </div>
                        <a class="nav_item_link" href="#" id="__w2_PxpMgD0_link">
                           <span class="expanded">
                              <span class="photo_wrapper">
                                 <div id="ooUWey">
									<span class="photo_tooltip" id="__w2_RIrArIz_link">
										<img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-54564951-50-lxxosmzggwcojpuigaciwypxokzuxtzd.jpeg" width="50" alt="Tài Tâm" height="50" />
									</span>
                                 </div>
                              </span>
                              <span id="WAIuQG">
								<span id="__w2_HlIDCX2_link">
									<span class="user">Tài</span>
								</span>
                              </span>
                           </span>
                           <span class="truncated">
                              <span class="photo_wrapper">
                                 <div id="iTqDEs">
									<span class="photo_tooltip" id="__w2_oOZdG2X_link">
										<img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-54564951-50-lxxosmzggwcojpuigaciwypxokzuxtzd.jpeg" width="50" alt="Tài Tâm" height="50" /></span>
                                 </div>
                              </span>
                              <span id="WcUXyB">
								<span id="__w2_KCJFqE7_link"><span class="user">Tài</span></span>
                              </span>
                           </span>
                           <div id="uDAaIf"></div>
                        </a>
                     </div>
                  </span>
                  <div id="blbFtB"></div>
               </div>
            </div>
			
            <div class="table_cell_wrapper toolbar">
				<div class="LookupBarSiteHeaderAddQuestion">
					<a class="ask_submit_button submit_button" href="#" id="__w2_X9OPf4c_submit_question">
						Submit Question
					</a>
					<span class="anon_wrapper">
						<label>
							<input group="__w2_X9OPf4c_interaction" type="checkbox" w2cid="X9OPf4c" id="__w2_X9OPf4c_anon_checkbox" />
								Anonymously
						</label>
					</span>
                  <div class="details_toggle_wrapper">
					<a class="details_toggle add_details" href="#" id="__w2_X9OPf4c_add_details">
						<span style="display: block;" id="__w2_cnbsim2_tooltip"></span>
					</a>
					<a class="details_toggle remove_details hidden" href="#" id="__w2_X9OPf4c_remove_details">
						<span style="display: block;" id="__w2_noOe9pt_tooltip"></span>
					</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   	</div>

   	<div class="SiteHeader during_nux" style="padding-right: 17px;display: none;"><div class="header_inner"><h1 class="header_logo"><a href="#"><span>Quora</span></a></h1><div class="progress1"><span class="start_text">Start</span><div class="header_progress_bar"><div class="progress_bar_wrapper" id="__w2_Z3jd6Md_progress_bar_wrapper"><div class="progress_bar" id="__w2_Z3jd6Md_progress_bar" style="width: 125px;"></div><div class="progress_bar_tip"></div></div><div id="zRNNjE"></div></div><span class="finish_text">Finish</span></div></div></div>
  <!-- END HEADER -->
  
  
   <div id="kBseme"></div>
	<!-- khi search hover --> 
    <!--  <div id="__w2_gmGYcKO_body_blur" class="lookup_bar_modal_overlay" ></div> -->
	<div id="__w2_gmGYcKO_body_blur" ></div>
   <div class="ContentWrapper">
      <div id="__w2_XPLGiQJ_content">
         <div class="HomeMain FeedMain">
            <div class="grid_page">
               <div class="layout_3col_left" id="__w2_s33UHsd_left_col">
                  <div id="__w2_s33UHsd_left_col_inner">
                     <div class="row section">
                        <div class="EditableList HomeNavList NavList" id="__w2_r7tuNt8_wrapper">
                           <h3 class="title">
                              <div class="title_with_link">Feeds</div>
                              <div class="hover_menu hidden HomeNavListHoverMenu HoverMenu center_align" id="__w2_kC4yIzL_menu">
                                 <div class="hover_menu_contents" id="__w2_kC4yIzL_menu_contents"> </div>
                              </div>
                              <a class="edit_link" href="#" id="__w2_kC4yIzL_link">Edit</a>                                 
                           </h3>
						   
						   
                           <div class="PagedList HomeNavListContents" id="XVzTei">
                              <div class="pagedlist_item" id="oPHCrT">
                                 <div class="PagedListItem HomeNavListContentItem nav_item_selected">
                                    <ul>
                                       <li class="EditableListItem HomeNavListItem NavListItem not_removable">
										<a class="disable_click_on_edit_mode" href="/" target="_self" id="__w2_ULd8Bx9_1">Top Stories</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="pagedlist_item" id="xQiOxI">
                                 <div class="PagedListItem HomeNavListContentItem">
                                    <ul>
                                       <li class="EditableListItem HomeNavListItem NavListItem not_removable">
										<a class="disable_click_on_edit_mode" href="/bookmarked_answers" target="_self" id="__w2_l8mSewg_read_later">
											Bookmarked Answers
										</a>
                                       </li>
                                    </ul>
                                 </div>
                              </div>
								<div class="pagedlist_item" id="lVBwCA">
									<div class="PagedListItem HomeNavListContentItem unread">
										<ul>
											<li class="EditableListItem HomeNavListItem NavListItem is_removable">
												<a class="remove_link edit_mode_only" href="#" title="Remove" id="__w2_NpLNpBz_remove">✕</a>
												<!-- popover -->
												<div class="hidden"  id="__w2_BhaQyxY_menu">
													<div class="hover_menu_popover white_bg show_nub hover_menu_above">
													<div class="hover_menu_contents" id="__w2_BhaQyxY_menu_contents">
													 <div id="pxaEZS">
														<div class="ObjectCard BetterTopicHoverMenuContents">
															<div class="ObjectCard-header">
																<div id="nwcnCx">
																	<a href="/topic/Fine-Art" id="__w2_g34FJGz_link">
																		<img class="topic_photo_img" src="https://qph.ec.quoracdn.net/main-thumb-t-26315-50-ExJR6GAdvF167da8au19OvXs6vTWosty.jpeg" width="50" alt="Fine Art" height="50">
																	</a>
																</div>
																<div class="header_wrapper">
																	<div class="hover_menu hidden white_bg show_nub" id="__w2_Lflbf0V_menu">
																		<div class="hover_menu_contents" id="__w2_Lflbf0V_menu_contents"> 
																		</div>
																	</div>
																	<a class="TopicNameLink HoverMenu topic_name" href="/topic/Fine-Art" target="" action_mousedown="TopicLinkClickthrough" id="__w2_Lflbf0V_link">
																		<span class="name_text">
																			<span id="nfKVVm">
																				<span class="TopicNameSpan TopicName" id="__w2_XY1H8c2_card">
																					Fine Art
																				</span>
																			</span>
																		</span>
																	</a>
																</div>
															</div>
															<div class="ObjectCard-body">
																<div class="sig">
																	<div id="KIfXIc">
																		<div class="truncated_para_breaks expanded_q_text TruncatedQText TruncatedTopicWiki" id="__w2_K85v0xT_truncated">
																			<span class="rendered_qtext">
																				<span class="qlink_container">
																					<a href="https://www.quora.com/topic/The-Arts">Art</a>
																				</span> 
																				appreciated for its imaginative, aesthetic, or intellectual content, usually visual art
																			</span>
																		</div>
																	</div>
																</div>
															</div>
															<div class="ObjectCard-footer">
																<span id="xBvVBM"><span class="TopicFollowButton"><a class="topic_follow follow_button unfollow_button with_count itq_follow" href="#" action_click="TopicUnfollow" id="__w2_iFOXtUG_unfollow">Unfollow<span class="count">3.7m</span></a></span></span>
																<div class="action_item">
																	<span class="topic_pin_link">
																		<span id="VWrdJk">
																			<a class="Button TwoStateButton Pin pressed link" href="#" action_target="{&quot;tid&quot;: 26315, &quot;type&quot;: &quot;topic&quot;}" action_click="TopicUnpin" id="__w2_i4HEYOh_button">
																			<span class="button_text" id="__w2_i4HEYOh_text">Remove Bookmark</span></a>
																		</span>
																	</span>
																</div>
															  
														   </div>
														</div>
													 </div>
													</div>
													</div>
												</div>
												<!-- end popover -->
												<a data-tip="__w2_BhaQyxY_menu" data-popover="true" data-html=true class="HomeNavTopicNameLink TopicNameLink HoverMenu topic_name disable_click_on_edit_mode hover" href="javascript:;" target="" action_mousedown="TopicLinkClickthrough" id="__w2_BhaQyxY_link">
													<span class="name_text">
														<span id="EqLIag">
															<span class="TopicNameSpan TopicName" id="__w2_hnIA5TD_card">
																Fine Art
															</span>
														</span>
													</span>
												</a> 
												
											</li>
										</ul>
									</div>
								</div>
                              <div class="pagedlist_item" id="JAYLPM">
                                 <div class="PagedListItem HomeNavListContentItem unread">
                                    <ul>
                                       <li class="EditableListItem HomeNavListItem NavListItem is_removable">
											<a class="remove_link edit_mode_only" href="#" title="Remove" id="__w2_blTVZAs_remove">✕</a>
											<!-- popover -->
												<div class="hidden"  id="__w2_qYki7AP_menu">
													<div class="hover_menu_popover white_bg show_nub" >
													   <div class="hover_menu_contents" id="__w2_qYki7AP_menu_contents">
														  <div id="WWalZM">
															 <div class="ObjectCard BetterTopicHoverMenuContents">
																<div class="ObjectCard-header">
																   <div id="iFiukt"><a href="/topic/Technology" id="__w2_QrOMgxL_link"><img class="topic_photo_img" src="https://qph.ec.quoracdn.net/main-thumb-t-2177-50-JiR07D1TQSfeQzRvWXomVaY4Poj2f8Yb.jpeg" width="50" alt="Technology" height="50"></a></div>
																   <div class="header_wrapper">
																	  <div class="hover_menu hidden white_bg show_nub" id="__w2_mY52sbS_menu">
																		 <div class="hover_menu_contents" id="__w2_mY52sbS_menu_contents"> </div>
																	  </div>
																	  <a class="TopicNameLink HoverMenu topic_name" href="/topic/Technology" target="" action_mousedown="TopicLinkClickthrough" id="__w2_mY52sbS_link"><span class="name_text"><span id="GGrMlT"><span class="TopicNameSpan TopicName" id="__w2_ZE8kvtw_card">Technology</span></span></span></a>
																   </div>
																</div>
																<div class="ObjectCard-body">
																   <div class="sig">
																	  <div id="YteCjx">
																		 <div class="truncated_para_breaks expanded_q_text TruncatedQText TruncatedTopicWiki" id="__w2_o39sCOa_truncated"><span class="rendered_qtext">The practical application of knowledge and science.</span></div>
																	  </div>
																   </div>
																</div>
																<div class="ObjectCard-footer">
																   <span id="gCQJVv"><span class="TopicFollowButton"><a class="topic_follow follow_button unfollow_button with_count itq_follow" href="#" action_click="TopicUnfollow" id="__w2_q34fuuJ_unfollow">Unfollow<span class="count">19.3m</span></a></span></span>
																   <div class="action_item"><span class="topic_pin_link"><span id="ShwYhC"><a class="Button TwoStateButton Pin pressed link" href="#" action_target="{&quot;tid&quot;: 2177, &quot;type&quot;: &quot;topic&quot;}" action_click="TopicUnpin" id="__w2_ICNsrCE_button"><span class="button_text" id="__w2_ICNsrCE_text">Remove Bookmark</span></a></span></span></div>
																   <div class="action_item"><span class="topic_muting_link"></span></div>
																</div>
															 </div>
														  </div>
													   </div>
													</div>
												</div>
												<!-- end popover -->
											<a data-tip="__w2_qYki7AP_menu" data-popover="true" data-html=true class="HomeNavTopicNameLink TopicNameLink HoverMenu topic_name disable_click_on_edit_mode" href="/pinned/Television-Series" target="" action_mousedown="TopicLinkClickthrough" id="__w2_MF3zkSL_link">
												<span class="name_text">
													<span id="DpRshT">
														<span class="TopicNameSpan TopicName" id="__w2_qYfn8zq_card">
															Television Series
														</span>
													</span>
												</span>
											</a> 
                                       </li>
                                    </ul>
                                 </div>
                              </div>
							  
                              <div id="SPzGaH">
                                 <div class="PagedListMoreButton" id="__w2_dKPdw2W_paged_list_more_button">
                                    <div class="pager_next" id="__w2_dKPdw2W_loading">
                                       <div class="__wn2_loading">
											<span class="__wn2_loading_spinner"></span>
                                       </div>
                                    </div>
                                    <div class="pager_next action_button row hidden" id="__w2_dKPdw2W_more">Xem them</div>
                                    <div class="pager_sentinel" id="__w2_dKPdw2W_sentinel"></div>
                                 </div>
                              </div>
                           </div>
						   

                        </div>
                     </div>
                     <div class="row section">
                        <div id="gEsTxz">
                           <div class="EditableList TrendingTopicsNavList NavList" id="__w2_xvxEzBL_wrapper">
                              <h3 class="title">
                                 <div><span class="icon"></span>Trending Now</div>
                              </h3>
                              <div id="cyuAAW">
                                 <ul>
                                    <div id="TNKknA">
										<li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable unread">
											<div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable unread">
												<div class="hover_menu hidden white_bg show_nub" id="__w2_yABbWXK_menu">
													<div class="hover_menu_contents" id="__w2_yABbWXK_menu_contents"> </div>
												</div>
												<a class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name" href="/pinned/Mark-Zuckerberg-Shows-off-Jarvis-December-2016" target="" action_mousedown="TopicLinkClickthrough" id="__w2_yABbWXK_link">
													<span class="name_text">
														<span id="ovPLTb">
															<span class="TopicNameSpan TopicName" id="__w2_RhwIXTm_card">Mark Zuckerberg Shows off Jarvis</span>
														</span>
													</span>
												</a> 
											</div>
										</li>
                                    </div>
                                    <div id="wuCJOW">
                                       <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                          <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable">
                                             <div class="hover_menu hidden white_bg show_nub" id="__w2_gaalioz_menu">
                                                <div class="hover_menu_contents" id="__w2_gaalioz_menu_contents"> </div>
                                             </div>
                                             <a class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name" href="/pinned/The-Man-in-the-High-Castle-Season-2" target="" action_mousedown="TopicLinkClickthrough" id="__w2_gaalioz_link"><span class="name_text"><span id="ZEzSBa"><span class="TopicNameSpan TopicName" id="__w2_pIpoiMR_card">The Man in the High Castle Season 2</span></span></span></a> 
                                          </div>
                                       </li>
                                    </div>
                                    <div id="PjGTAo">
                                       <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable unread">
                                          <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable unread">
                                             <div class="hover_menu hidden white_bg show_nub" id="__w2_bETrnKE_menu">
                                                <div class="hover_menu_contents" id="__w2_bETrnKE_menu_contents"> </div>
                                             </div>
                                             <a class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name" href="/pinned/The-OA-TV-series" target="" action_mousedown="TopicLinkClickthrough" id="__w2_bETrnKE_link"><span class="name_text"><span id="LGCuNg"><span class="TopicNameSpan TopicName" id="__w2_EgkbIdw_card">The OA</span></span></span></a> 
                                          </div>
                                       </li>
                                    </div>
                                    <div id="qzWsgT">
                                       <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable unread">
                                          <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable unread">
                                             <div class="hover_menu hidden white_bg show_nub" id="__w2_w0M5PmH_menu">
                                                <div class="hover_menu_contents" id="__w2_w0M5PmH_menu_contents"> </div>
                                             </div>
                                             <a class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name" href="/pinned/La-La-Land-2016-Movie" target="" action_mousedown="TopicLinkClickthrough" id="__w2_w0M5PmH_link"><span class="name_text"><span id="MtfZet"><span class="TopicNameSpan TopicName" id="__w2_toXvISx_card">La La Land</span></span></span></a> 
                                          </div>
                                       </li>
                                    </div>
                                    <div id="kuuagr">
                                       <li class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable unread">
                                          <div class="EditableListItem TrendingTopicsNavListItem NavListItem not_removable unread">
                                             <div class="hover_menu hidden white_bg show_nub" id="__w2_tBxUSwD_menu">
                                                <div class="hover_menu_contents" id="__w2_tBxUSwD_menu_contents"> </div>
                                             </div>
                                             <a class="TrendingTopicNameLink TopicNameLink HoverMenu topic_name" href="/pinned/Rogue-One-A-Star-Wars-Story-2016-movie" target="" action_mousedown="TopicLinkClickthrough" id="__w2_tBxUSwD_link"><span class="name_text"><span id="yyPWIJ"><span class="TopicNameSpan TopicName" id="__w2_rHSUO8B_card">Rogue One: A Star Wars Story</span></span></span></a> 
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
                  <div id="MpxlGB"></div>
                  <div id="QDARwe"></div>
                  <div id="__w2_s33UHsd_feed_main">
                     <div class="refresh_button_wrapper hidden" id="__w2_o7Tqs4F_refresh_wrapper"><span class="refresh_button" id="__w2_o7Tqs4F_refresh">Refresh for new stories.</span>
                     </div>
                     <div class="feed_wrap">
                        <div id="feed_visibility_wrapper">
                           <div class="SimpleToggle Toggle HomeMainFeed" id="__w2_WN7wDPe__truncated">
                              <div class="HomeMainFeedHeader">
                                 Top chủ để cho bạn
                                 <a class="FeedControlModalLink feed_control_modal_link" id="__w2_BOgGlDV_create_modal_link">Khám phá</a>
                                 <div class="hidden" id="feed_control_update_feed_screen">
                                    <div class="modal_feed_refresh_background" id="__w2_BOgGlDV_background"></div>
                                    <div class="feed_control_refresh_spinner">
                                       <div class="waiting_explanation">Reloading your feed...</div>
                                       <div class="spinner_container"><img src="<?=$baseUrl?>/skins/images/-3-images.nux.general_spinner.gif7452e2d5ca321076.gif" /></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="FeedAddQuestionPrompt">
                                 <div class="fake_reason">
                                    <span class="NameWithPhoto IdentityNameWithPhoto">
                                    <span id="bVMBEY">
                                    <span class="photo_tooltip" id="__w2_tmuryh0_link">
                                    <a href="javascript:;" id="__w2_euqFXmX_link">
                                    <img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-54564951-50-lxxosmzggwcojpuigaciwypxokzuxtzd.jpeg" width="50" alt="Tài Tâm" height="50" />
                                    </a>
                                    </span>
                                    </span>
                                    <span id="gjPLMX">
                                    <span id="__w2_WkrR4BS_link">
                                    <a class="user" href="javascript:;" action_mousedown="UserLinkClickthrough" id="__w2_WkrR4BS_name_link">Tài Tâm</a>
                                    </span>
                                    </span>
                                    </span>
                                 </div>
                                 <a class="AskQuestionButton" href="#" id="__w2_YFQASWv_button">
                                    <div class="inner">Câu hỏi của bạn là gì?</div>
                                 </a>
                                 <div class="RecentlyAskedQuestions">
                                    <div id="LjEjQP"></div>
                                 </div>
                              </div>
                              <div id="bQgfqN"></div>
                              <div id="jdxSPs">
                                 <div class="js-FeedPlaceholderGroup">
                                    <div class="HomepageFeedStoryItemPlaceholder Placeholder white_bg">
                                       <div class="animated_background">
                                          <div class="title_placeholder">
                                             <div class="bar_row line-1">
                                                <div class="mask"></div>
                                             </div>
                                             <div class="mask mask_row line_spacing"></div>
                                             <div class="bar_row line-2">
                                                <div class="mask"></div>
                                             </div>
                                          </div>
                                          <div class="mask mask_row section_spacing"></div>
                                          <div class="profile_placeholder">
                                             <div class="photo_placeholder profile">
                                                <svg class="svg_circular_hole" viewbox="0 0 10 10">
                                                   <path class="hole_path" d="M0,0 L10,0 L10,10 L0,10 L0,0 Z M0,5 C0,7.76142375                                                            2.23857625,10 5,10 C7.76142375,10 10,7.76142375 10,5 C10,2.23857625                                                            7.76142375,2.22044605e-16 5,0 C2.23857625,-2.22044605e-16                                                            0,2.23857625 0,5 L0,5 Z" />
                                                </svg>
                                                <div class="photo_meta_spacing mask"></div>
                                             </div>
                                             <div class="meta_placeholder num_lines-2">
                                                <div class="mask mask_row buffer"></div>
                                                <div class="bar_row line-1">
                                                   <div class="mask"></div>
                                                </div>
                                                <div class="mask mask_row line_spacing"></div>
                                                <div class="bar_row line-2">
                                                   <div class="mask"></div>
                                                </div>
                                                <div class="mask mask_row buffer"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="HomepageFeedStoryItemPlaceholder Placeholder white_bg">
                                       <div class="animated_background">
                                          <div class="title_placeholder">
                                             <div class="bar_row line-1">
                                                <div class="mask"></div>
                                             </div>
                                             <div class="mask mask_row line_spacing"></div>
                                             <div class="bar_row line-2">
                                                <div class="mask"></div>
                                             </div>
                                          </div>
                                          <div class="mask mask_row section_spacing"></div>
                                          <div class="profile_placeholder">
                                             <div class="photo_placeholder profile">
                                                <svg class="svg_circular_hole" viewbox="0 0 10 10">
                                                   <path class="hole_path" d="M0,0 L10,0 L10,10 L0,10 L0,0 Z M0,5 C0,7.76142375                                                            2.23857625,10 5,10 C7.76142375,10 10,7.76142375 10,5 C10,2.23857625                                                            7.76142375,2.22044605e-16 5,0 C2.23857625,-2.22044605e-16                                                            0,2.23857625 0,5 L0,5 Z" />
                                                </svg>
                                                <div class="photo_meta_spacing mask"></div>
                                             </div>
                                             <div class="meta_placeholder num_lines-2">
                                                <div class="mask mask_row buffer"></div>
                                                <div class="bar_row line-1">
                                                   <div class="mask"></div>
                                                </div>
                                                <div class="mask mask_row line_spacing"></div>
                                                <div class="bar_row line-2">
                                                   <div class="mask"></div>
                                                </div>
                                                <div class="mask mask_row buffer"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="HomepageFeedStoryItemPlaceholder Placeholder white_bg">
                                       <div class="animated_background">
                                          <div class="title_placeholder">
                                             <div class="bar_row line-1">
                                                <div class="mask"></div>
                                             </div>
                                             <div class="mask mask_row line_spacing"></div>
                                             <div class="bar_row line-2">
                                                <div class="mask"></div>
                                             </div>
                                          </div>
                                          <div class="mask mask_row section_spacing"></div>
                                          <div class="profile_placeholder">
                                             <div class="photo_placeholder profile">
                                                <svg class="svg_circular_hole" viewbox="0 0 10 10">
                                                   <path class="hole_path" d="M0,0 L10,0 L10,10 L0,10 L0,0 Z M0,5 C0,7.76142375                                                            2.23857625,10 5,10 C7.76142375,10 10,7.76142375 10,5 C10,2.23857625                                                            7.76142375,2.22044605e-16 5,0 C2.23857625,-2.22044605e-16                                                            0,2.23857625 0,5 L0,5 Z" />
                                                </svg>
                                                <div class="photo_meta_spacing mask"></div>
                                             </div>
                                             <div class="meta_placeholder num_lines-2">
                                                <div class="mask mask_row buffer"></div>
                                                <div class="bar_row line-1">
                                                   <div class="mask"></div>
                                                </div>
                                                <div class="mask mask_row line_spacing"></div>
                                                <div class="bar_row line-2">
                                                   <div class="mask"></div>
                                                </div>
                                                <div class="mask mask_row buffer"></div>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="Feed PagedList UniversalPageFeed" id="ZGfKot">
                                 <div id="hsJARe">
                                    <div class="MoreStoriesIndicator hidden" id="__w2_BX2S6qq_more_stories"><span class="refresh"></span><span class="text">More Stories</span>
                                    </div>
                                 </div>
                                 <div id="lmJNOD">
                                    <script>
                                       var placeholder = document.getElementsByClassName("js-FeedPlaceholderGroup");
                                       var elem;
                                       while (placeholder.length) {
                                           elem = placeholder[0];
                                           elem.parentElement.removeChild(elem);
                                       }
                                    </script>
                                 </div>
                                 <div class="pagedlist_item" id="oSOYxB">
                                    <div class="feed_item feed_type_answer" id="__w2_kSMnR7H_item">
                                       <div class="feedback_wrapper hidden" id="__w2_kSMnR7H_question_feedback"></div>
                                       <div class="feedback_wrapper hidden" id="__w2_kSMnR7H_answer_feedback"></div>
                                       <div class="feed_item_inner" id="__w2_kSMnR7H_feed_item">
                                          <div class="StoryItemToggleModal AnswerStoryToggleModal ToggleModal Modal toggle_modal_inline hover_highlight" id="__w2_JYryo7w__inline">
                                             <div id="CImUgn">
                                                <div class="EventHeader pass_color_to_child_links many_faces">
													<span class="photo_wrapper"></span>Popular on Quora</div>
                                             </div>
                                             <span id="__w2_rZZFMKt_answer_story">
                                                <div id="zYeHAa">
													<div class="QuestionText"><span id="ZepDKx">
														<a class="question_link" href="<?=Url::to(["answer/detail"])?>" target="_blank" action_mousedown="QuestionLinkClickthrough" rel="noopener" id="__w2_ehAvav1_link">
															<span class="question_text">
																<span class="rendered_qtext">
																	Bạn bắt đầu dự án quickrep.vn như thế nào?
																</span>
															</span>
														 </a>
                                                      </span>
                                                   </div>
                                                </div>
                                                <div class="Answer" id="__w2_Jr9QnMB_answer">
                                                   <div id="AWbJrI">
                                                      <div class="feed_item_answer answer_text">
                                                         <div class="feed_item_answer_content answer_content">
                                                            <div class="answer_user answer_user_inline">
                                                               <div id="FjZYVT">
                                                                  <div class="AnswerHeader ContentHeader">
                                                                     <div class="photo_text_layout size_small">
                                                                        <div class="_layout_photo_wrapper">
                                                                           <div class="_layout_photo">
                                                                              <span id="GWgLUJ">
                                                                                 <div class="hover_menu hidden white_bg show_nub" id="__w2_W9RiJ6F_menu">
                                                                                    <div class="hover_menu_contents" id="__w2_W9RiJ6F_menu_contents"> </div>
                                                                                 </div>
                                                                                 <span class="photo_tooltip" id="__w2_W9RiJ6F_link">
                                                                                 <a href="/profile/Robbi-Smoot" id="__w2_vYcihmE_link">
                                                                                 <img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-162350372-50-hzvvtjmrpyhqujqtfdjqxnerovtpjjlg.jpeg" width="50" alt="Robbi Smoot" height="50" /></a><span id="bJafQv"></span></span>
                                                                              </span>
                                                                           </div>
                                                                        </div>
                                                                        <div class="_layout_text_wrapper">
                                                                           <div class="_layout_text">
                                                                              <span class="feed_item_answer_user">
                                                                                 <span id="osDLXN">
                                                                                    <span id="hmpRyG">
                                                                                       <span id="rjUsLt">
                                                                                          <div class="hover_menu hidden white_bg show_nub" id="__w2_eiiL6kJ_menu">
                                                                                             <div class="hover_menu_contents" id="__w2_eiiL6kJ_menu_contents"> </div>
                                                                                          </div>
                                                                                          <span id="__w2_eiiL6kJ_link">
                                                                                          <a class="user" href="/profile/Robbi-Smoot" action_mousedown="UserLinkClickthrough" id="__w2_eiiL6kJ_name_link">
                                                                                          Robbi Smoot
                                                                                          </a>
                                                                                          </span> 
                                                                                       </span>
                                                                                       <span class="IdentityNameCredential ActorNameCredential">
                                                                                       , Designer at www.HTMLGarden.co.uk
                                                                                       </span> 
                                                                                    </span>
                                                                                 </span>
                                                                              </span>
                                                                              <div id="djvzdH">
                                                                                 <div class="CredibilityFacts pass_color_to_child_links"><span id="DzlLmo"><a class="answer_permalink" href="/What-is-the-coolest-psychological-trick/answer/Robbi-Smoot" action_mousedown="AnswerPermalinkClickthrough" id="__w2_llkrcxC_link">Updated Dec 14</a></span>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <div id="GRjfVS"></div>
                                                               <div id="eYYLzN">
                                                                  <div class="truncated_q_text truncated_para_breaks TruncatedQText TruncatedAnswer" id="__w2_K1PGggw_truncated">
                                                                     <div class="truncated_thumbnail_holder">
                                                                        <span class="rendered_qtext">
                                                                           <div class="qtext_image_wrapper">
                                                                              <canvas class="qtext_image_placeholder landscape qtext_image zoomable_in_feed" width="510" height="387" data-src="data:image/JPEG;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAIBAQEBAQIBAQECAgICAgQDAgICAgUEBAMEBgUGBgYFBgYGBwkIBgcJBwYGCAsICQoKCgoKBggLDAsKDAkKCgr/2wBDAQICAgICAgUDAwUKBwYHCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgr/wAARCAAIAAoDASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAAAAcI/8QAIhAAAQQBBAIDAAAAAAAAAAAAAwECBAUGAAgREgcJITJh/8QAFQEBAQAAAAAAAAAAAAAAAAAAAgP/xAAgEQABAwMFAQAAAAAAAAAAAAABAwQRAAJBEiExUWFx/9oADAMBAAIRAxEAPwDL+1naEuEbrcT8X3bA3b66I/IxyLA5GQpfY0Zp3mGvfqIEchFXp8vVg3cJyqJYMx9PdJPy61nYzaYxKrTWRyV8k9U/uUCkco3u4L9laqKv6ummkyZN13CpvB205ORMc+1NS4pJi0ARJwPnXlf/2Q=="></canvas>
                                                                              <img class="landscape qtext_image zoomable_in_feed lazy_loaded lazy_loading" src="" data-src="<?=$baseUrl?>/skins/images/main-qimg-a233a76f7336be4ba611369d14c611b5-c?convert_to_webp=true" master_src="<?=$baseUrl?>/skins/images/main-qimg-a233a76f7336be4ba611369d14c611b5-c?convert_to_webp=true" master_w="510" master_h="387"/>                                                                                 
                                                                           </div>
                                                                        </span>
                                                                     </div>
                                                                     <span class="rendered_qtext">
                                                                        <p class="qtext_para">Some time ago I stumble upon Helen Fisher’s research ( <span class="qlink_container"><a href="https://en.wikipedia.org/wiki/Helen_Fisher_(anthropologist)" rel="noopener nofollow" target="_blank" onclick="return Q.openUrl(this);" class="external_link" data-qt-tooltip="wikipedia.org">Helen Fisher (anthropologist) - Wikipedia</a></span> ) about males and females communication.</p>
                                                                        <p class="qtext_para">When two females talk to each other it look like that:</p>
                                                                        <p class="qtext_para">It is ...</p>
                                                                     </span>
                                                                     <span id="__w2_K1PGggw_more"><a class="more_link">(more)</a></span> 
                                                                     <span class="hidden" id="__w2_K1PGggw_loading">
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
                                                      </div>
                                                   </div>
                                                </div>
                                             </span>
                                             <span class="hidden" id="__w2_rZZFMKt_question_answer_story_editable"></span>
                                             <div id="MvBjwW">
                                                <div class="Answer ActionBar AnswerUnsticky" id="__w2_fM6XqOc_action_bar">
                                                   <div class="action_bar_inner">
                                                      <span id="qoVqCv">
														<a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 32030589, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_UBM7Iwp_button">
															<span class="button_text" id="__w2_UBM7Iwp_text">Upvote</span>
															<span class="count" id="__w2_UBM7Iwp_count">4.7k</span>
														</a>
                                                      </span>
													  <span id="TyhbmJ">
														<a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 32030589, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_xmafhlS_button">
															<span class="button_text" id="__w2_xmafhlS_text">Downvote</span>
														</a>
                                                      </span>
                                                      <div class="action_item" id="__w2_hNR2S57_link">
														<span id="jghmdC">
															<a class="view_comments comment_link" href="#" id="__w2_PVsekO9_view_comment_link">
																Comments
																<span class="count">83+</span>
															</a>
                                                         </span>
                                                      </div>
                                                      <div class="action_item">
                                                         <div id="klfLtW">
                                                            <div class="ShareSectionIcons">
                                                               <a class="FacebookNetworkShare" href="" id="__w2_e2TvTOV_share">
																	<span class="icon icon_facebook"></span>
																	<span class="text"></span>
																</a>
																<a class="TwitterNetworkShare" href="#" id="__w2_lOwEFH5_share">
																	<span class="icon icon_twitter"></span>
																	<span class="text"></span>
																</a>
                                                            </div>
                                                         </div>
                                                      </div>
													  
													  <!-- action answer link -->
                                                      <div class="overflow action_item overflow_link">
														   <div class="overflow_link hover" href="#">
															<!--  POPOVER -->
																  <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" style="top: 27px; right: 0px;" id="show_nub_popover_1">
																	 <div class="hover_menu_contents lazy">
																		<div id="hBAIFC">
																		  <ul class="menu_list_items unified_menu">
																			<div id="FIdtpg">
																				<li class="menu_list_item">
																					<a href="#">
																						<span class="checkable_item">
																							<input type="checkbox">
																							<span>Bookmark</span>
																						</span>
																					</a>
																				</li>
																			</div>
																			<li class="menu_list_item">
																				<a href="#">
																					<span id="__w2_iz6A5vJ_contents">Chỉnh sửa câu hỏi</span>
																				</a>
																			</li>
																			<div id="YhXxGQ">
																				<li class="menu_list_item">
																					<a href="#">
																						<span id="__w2_Jtt34gG_contents">Thank</span>
																					</a>
																				</li>
																			</div>
																			<div class="menu_list_item">
																				<span id="EDBzBF">
																					<a class="Downvote Button TwoStateButton Question secondary_action" href="#" action_click="QuestionDownvote">
																						<span class="button_text" id="__w2_OFJmYM2_text">Downvote Question</span>
																					</a>
																				</span>
																			</div>
																			<div id="yKqqrX">
																				<li class="menu_list_item"><span class="light_gray"><span id="DuglUZ">
																					<a href="#">Report</a></span></span>
																				</li>
																			</div>
																			<li class="menu_list_item">
																				<a href="javascript:;"><span id="__w2_lTNSqZX_contents">Log</span></a>
																			</li>
																		  </ul>
																		</div>
																	</div>
																</div>
															<!--  END POPOVER -->
																<span class="dots overflow_dots" onclick="return show_nub('show_nub_popover_1')"></span>
															</div>
														</div>
													  <!-- end action answer link -->
                                                   </div>
                                                   <div class="hidden" id="__w2_RBER7Vy_wrapper"></div>
                                                   <div>
                                                      <div id="ZnJdfU"></div>
                                                   </div>
                                                   <div class="action_bar_comments threaded_comments hidden" id="__w2_ZXcz5aJ_wrapper"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="__w2_kSMnR7H_add_ans_editor_wrapper"></div>
                                    </div>
                                 </div>
								 
								<?php //echo WidgetPeopleAnswers::widget()?>
								 
                                 <div class="pagedlist_item" id="DiNuqh">
                                    <div class="feed_item feed_type_question" id="__w2_Q3aHbcv_item">
                                       <div class="feedback_wrapper hidden" id="__w2_Q3aHbcv_question_feedback"></div>
                                       <div class="feed_item_inner" id="__w2_Q3aHbcv_feed_item">
                                          <div id="sVlsIh">
                                             <div class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight" id="__w2_E4Xdt1a__inline">
                                                <div id="iJtEQP">
                                                   <div class="EventHeader pass_color_to_child_links many_faces">
                                                      <span class="photo_wrapper"></span>Question asked<span class="topic"><span class="bullet"> &middot; </span></span>
                                                      <div class="TopicListItem" id="__w2_vVtwXhx_topic_list_item">
                                                         <div id="kDBuxT">
                                                            <div class="hover_menu hidden white_bg show_nub" id="__w2_uvKNsYD_menu">
                                                               <div class="hover_menu_contents" id="__w2_uvKNsYD_menu_contents"> </div>
                                                            </div>
                                                            <a class="TopicNameLink HoverMenu topic_name" href="/topic/Music" target="" action_mousedown="TopicLinkClickthrough" id="__w2_uvKNsYD_link"><span class="name_text"><span id="eopAUE"><span class="TopicNameSpan TopicName" id="__w2_WBTteQP_card">Music</span></span></span></a> 
                                                         </div>
                                                      </div>
                                                      <span class="bullet"> &middot; </span><span class="timestamp"><a href="/What-is-the-most-awful-song-you-have-ever-heard">2h</a></span> 
                                                   </div>
                                                </div>
												
                                                <div id="UiUyEi">
                                                   <div id="vkcTit">
                                                      <span id="__w2_lljDK8Z_question_story">
                                                         <div id="wJMLBF">
                                                            <div id="pigGzx">
                                                               <div class="QuestionText">
																	<span id="KrgQwY">
																		<a class="question_link" href="<?=Url::to(["answer/detail"])?>" target="_blank" action_mousedown="QuestionLinkClickthrough" rel="noopener" id="__w2_LLjxjaZ_link">
																			<span class="question_text">
																				<span class="rendered_qtext">What is the most awful song you have ever heard?</span>
																			</span>
																		</a>
																	</span>
                                                               </div>
                                                            </div>
                                                            <span class="gray_details">
                                                               <div id="ovtMmR"></div>
                                                            </span>
                                                         </div>
                                                         <div class="CantAnswerActionBar ShowOnPass">
                                                            <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> &middot; </span><a class="undo_cant_answer" href="#" id="__w2_TsLtmWP_undo_cant_answer">Undo</a>
                                                            </div>
                                                            <span class="downvote_link"><span id="ZddTob"><a class="Downvote Button TwoStateButton Question secondary_action" href="#" action_target="{&quot;qid&quot;: 11799130, &quot;type&quot;: &quot;question&quot;}" action_click="QuestionDownvote" id="__w2_MbPtEiL_button"><span class="button_text" id="__w2_MbPtEiL_text">Downvote</span>
                                                            </a>
                                                            </span>
                                                            </span>
                                                         </div>
                                                         <div id="uRpUOk">
                                                            <div class="ContentFooter QuestionFooter" id="__w2_uXiK3qX_content_footer">
																<a class="read_answers" href="#">Read 52 Answers</a>
                                                            </div>
                                                         </div>
                                                         <div id="TAcHyO"></div>
                                                      </span>
                                                      <span class="hidden" id="__w2_lljDK8Z_question_story_editable"></span> 
                                                   </div>
												   
                                                   <div id="DOoOFo">
                                                      <div id="zFlxqk">
                                                         <div class="ActionBar Question" id="__w2_DVzO3Sl_action_bar">
                                                            <div class="action_bar_inner">
                                                               <div class="primary_item">
																<span id="DBWAtV">
																	<a class="WriteAnswer Button WriteAnswerButton" href="#" action_target="{&quot;qid&quot;: 11799130, &quot;type&quot;: &quot;question&quot;}" id="__w2_U5vyNII_button"><span class="button_text" id="__w2_U5vyNII_text">Answer</span>
                                                                  </a>
                                                                  </span>
                                                               </div>
                                                               <div class="primary_item"><a class="CantAnswerLink action_button" href="#" action_mousedown="PassWritePage" id="__w2_qrBawzi_cant_answer">Pass</a>
                                                               </div>
                                                               <div class="action_item">
                                                                  <span id="XSzXIf">
                                                                     <a class="Button TwoStateButton Question secondary_action" href="#" action_target="{&quot;qid&quot;: 11799130, &quot;type&quot;: &quot;question&quot;}" action_click="QuestionFollow" id="__w2_ZRIrWPi_button">
                                                                        <span class="button_text" id="__w2_ZRIrWPi_text">Follow</span><span class="count" id="__w2_ZRIrWPi_count">10</span>
                                                                        <div class="action_bar_button_nub" id="__w2_ZRIrWPi_nub"></div>
                                                                     </a>
                                                                  </span>
                                                               </div>
                                                               <div class="action_item">
																	<span id="qTWRJY">
																		<a class="Downvote Button TwoStateButton Question secondary_action" href="#" action_target="{&quot;qid&quot;: 11799130, &quot;type&quot;: &quot;question&quot;}" action_click="QuestionDownvote" id="__w2_M4fRV9E_button">
																			<span class="button_text" id="__w2_M4fRV9E_text">Downvote</span>
																		</a>
																	</span>
                                                               </div>
															   <!-- button action -->
                                                               <div class="overflow action_item overflow_link">
																	<div class="overflow_link hover" href="#">
																	  <div class="hover_menu show_nub right_align fixed_menu_width no_body_attach" style="top: 27px; right: 0px;">
																		 <div class="hover_menu_contents lazy">
																			<div id="hBAIFC">
																			  <ul class="menu_list_items unified_menu">
																				<div id="FIdtpg">
																					<li class="menu_list_item">
																						<a href="#">
																							<span class="checkable_item">
																								<input type="checkbox">
																								<span>Bookmark</span>
																							</span>
																						</a>
																					</li>
																				</div>
																				<li class="menu_list_item">
																					<a href="#">
																						<span id="__w2_iz6A5vJ_contents">Edit Question &amp; Details</span>
																					</a>
																				</li>
																				<div id="YhXxGQ">
																					<li class="menu_list_item"><a href="#"><span id="__w2_Jtt34gG_contents">Thank</span></a></li>
																				</div>
																				<div class="menu_list_item">
																					<span id="EDBzBF">
																						<a class="Downvote Button TwoStateButton Question secondary_action" href="#" action_click="QuestionDownvote">
																							<span class="button_text" id="__w2_OFJmYM2_text">Downvote Question</span>
																						</a>
																					</span>
																				</div>
																				<div id="yKqqrX">
																					<li class="menu_list_item"><span class="light_gray"><span id="DuglUZ">
																						<a href="#">Report</a></span></span>
																					</li>
																				</div>
																				<li class="menu_list_item">
																					<a href="javascript:;"><span id="__w2_lTNSqZX_contents">Log</span></a>
																				</li>
																			  </ul>
																			</div>
																		</div>
																	</div>
																	<span class="dots overflow_dots"></span>
																	</div>
                                                               </div>
															   <!-- end button action -->
                                                               <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_DVzO3Sl_overflow_menu">
                                                                  <div class="hover_menu_contents lazy" id="__w2_DVzO3Sl_overflow_menu_contents"></div>
                                                               </div>
                                                            </div>
                                                            <div id="pSeNaF">
                                                               <div class="RequestAnswersDrawer" id="__w2_bzztSlk_drawer">
                                                                  <div class="inner">
                                                                     <div class="header">Request Answers:
                                                                        <a class="modal_close" href="#" id="__w2_bzztSlk_close_button"></a>
                                                                     </div>
                                                                     <div id="xLSNuX">
                                                                        <div class="request_answers_list_item is_request_from_quora" id="__w2_RrCIgGU_list_item">
                                                                           <div class="request_answers_icon"></div>
                                                                           <div class="name_sig">
                                                                              <div class="user">Request From Quora</div>
                                                                           </div>
                                                                           <div class="name_sig in_active_state">
                                                                              <div class="user">Requesting From Quora</div>
                                                                           </div>
                                                                           <div class="metadata">We will distribute this question to writers, and notify you about new answers.</div>
                                                                           <div class="metadata in_active_state">We&#039;re finding writers to answer, and will notify you about new answers.</div>
                                                                           <a class="request_answers_button" id="__w2_RrCIgGU_request_answers_button"></a>
                                                                        </div>
                                                                     </div>
                                                                     <div id="YsjbtW">
                                                                        <div id="__w2_tm52xUe_suggestions_list">
                                                                           <div>
                                                                              <div class="request_answers_placeholder">
                                                                                 <div class="placeholder_block placeholder_photo"></div>
                                                                                 <div class="placeholder_block placeholder_name" style="width:249px"></div>
                                                                                 <div class="placeholder_block placeholder_metadata" style="width:278px"></div>
                                                                              </div>
                                                                              <div class="request_answers_placeholder">
                                                                                 <div class="placeholder_block placeholder_photo"></div>
                                                                                 <div class="placeholder_block placeholder_name" style="width:249px"></div>
                                                                                 <div class="placeholder_block placeholder_metadata" style="width:278px"></div>
                                                                              </div>
                                                                              <div class="request_answers_placeholder">
                                                                                 <div class="placeholder_block placeholder_photo"></div>
                                                                                 <div class="placeholder_block placeholder_name" style="width:249px"></div>
                                                                                 <div class="placeholder_block placeholder_metadata" style="width:278px"></div>
                                                                              </div>
                                                                           </div>
                                                                           <div class="view_more_placeholder"></div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div id="rflaEd">
                                                               <div class="hidden" id="__w2_JAIoJdf_add_answer_editor_wrapper"></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
												   
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="__w2_Q3aHbcv_add_ans_editor_wrapper"></div>
                                    </div>
                                 </div>
                                 <div class="pagedlist_item" id="pcFnuI">
                                    <div class="feed_item feed_type_answer" id="__w2_R7nwsGG_item">
                                       <div class="feedback_wrapper hidden" id="__w2_R7nwsGG_question_feedback"></div>
                                       <div class="feedback_wrapper hidden" id="__w2_R7nwsGG_answer_feedback"></div>
                                       <div class="feed_item_inner" id="__w2_R7nwsGG_feed_item">
                                          <div class="StoryItemToggleModal AnswerStoryToggleModal ToggleModal Modal toggle_modal_inline hover_highlight" id="__w2_vFQ5pCh__inline">
                                             <div id="HNxjnD">
                                                <div class="EventHeader pass_color_to_child_links many_faces"><span class="photo_wrapper"></span>Popular on Quora</div>
                                             </div>
                                             <span id="__w2_oEZ9qKu_answer_story">
                                                <div id="YjWPhK">
                                                   <div class="QuestionText">
													<span id="khkvME">
														<a class="question_link" href="<?=Url::to(["answer/detail"])?>" target="_blank" action_mousedown="QuestionLinkClickthrough" rel="noopener" id="__w2_GWjB0AY_link">
															<span class="question_text">
																<span class="rendered_qtext">What is the saddest thing that happened to you that you never shared with others before?</span>
															</span>
														</a>
                                                      </span>
                                                   </div>
                                                </div>
                                                <div class="Answer" id="__w2_m9nevJK_answer">
                                                   <div id="smIexh">
                                                      <div class="feed_item_answer answer_text">
                                                         <div class="feed_item_answer_content answer_content">
                                                            <div class="answer_user answer_user_inline">
                                                               <div id="KIeIJh">
                                                                  <div class="AnswerHeader ContentHeader">
                                                                     <div class="photo_text_layout size_small">
                                                                        <div class="_layout_photo_wrapper">
                                                                           <div class="_layout_photo"><span id="EnFEnD"><span class="photo_tooltip" id="__w2_sF8phru_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/-3-images.new_grid.profile_pic_anon_small.png867c1f9ac8eed1ed.png" width="50" alt="Anonymous" height="50" /></span></span>
                                                                           </div>
                                                                        </div>
                                                                        <div class="_layout_text_wrapper">
                                                                           <div class="_layout_text">
                                                                              <span class="feed_item_answer_user"><span id="rqWjLB"><span id="ITdWgz"><span id="XOrzen"><span class="anon_user">Anonymous</span></span>
                                                                              </span>
                                                                              </span>
                                                                              </span>
                                                                              <div id="wsSRgV">
                                                                                 <div class="CredibilityFacts pass_color_to_child_links"><span id="cCQwBh"><a class="answer_permalink" href="/What-is-the-saddest-thing-that-happened-to-you-that-you-never-shared-with-others-before/answers/21418667" action_mousedown="AnswerPermalinkClickthrough" id="__w2_qDOecn3_link">Updated Apr 20</a></span>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <div id="FhkZaz"></div>
                                                               <div id="MgnTkF">
                                                                  <div class="truncated_q_text truncated_para_breaks TruncatedQText TruncatedAnswer" id="__w2_VW4L46N_truncated">
                                                                     <span class="rendered_qtext">
                                                                        <p class="qtext_para">Well. My father always wanted a son. When my mother got pregnant, He explicitly told her that he is a well reputed man and that he can not have a daughter and if it&#039;s a daughter, it&#039;ll be because o...</p>
                                                                     </span>
                                                                     <span id="__w2_VW4L46N_more"><a class="more_link">(more)</a></span> 
                                                                     <span class="hidden" id="__w2_VW4L46N_loading">
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
                                                      </div>
                                                   </div>
                                                </div>
                                             </span>
                                             <span class="hidden" id="__w2_oEZ9qKu_question_answer_story_editable"></span>
                                             <div id="BNmutF">
                                                <div class="Answer ActionBar AnswerUnsticky" id="__w2_UdKVTT3_action_bar">
                                                   <div class="action_bar_inner">
                                                      <span id="jWMgCz"><a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 21418667, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_qnUCaA7_button"><span class="button_text" id="__w2_qnUCaA7_text">Upvote</span><span class="count" id="__w2_qnUCaA7_count">35.7k</span>
                                                      </a>
                                                      </span><span id="UJwWWO"><a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 21418667, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_th01yb0_button"><span class="button_text" id="__w2_th01yb0_text">Downvote</span>
                                                      </a>
                                                      </span>
                                                      <div class="action_item" id="__w2_F6WrGr5_link"><span id="wyhTmN"><a class="view_comments comment_link" href="#" id="__w2_jV6Znkz_view_comment_link">Comments<span class="count">563+</span>
                                                         </a>
                                                         </span>
                                                      </div>
                                                      <div class="action_item">
                                                         <div id="jYqGeh">
                                                            <div class="ShareSectionIcons">
																<a class="FacebookNetworkShare" href="" id="__w2_xrrR8BM_share">
																	<span class="icon icon_facebook"></span>
																	<span class="text"> </span>
																</a>
																<a class="TwitterNetworkShare" href="#" id="__w2_dAbnVj0_share">
																	<span class="icon icon_twitter"></span><span class="text"> </span>
																</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <!-- button action -->
                                                               <div class="overflow action_item overflow_link">
																	<div class="overflow_link hover" href="#">
																	  <div class="hover_menu show_nub right_align fixed_menu_width no_body_attach" style="top: 27px; right: 0px;">
																		 <div class="hover_menu_contents lazy">
																			<div id="hBAIFC">
																			  <ul class="menu_list_items unified_menu">
																				<div id="FIdtpg">
																					<li class="menu_list_item">
																						<a href="#">
																							<span class="checkable_item">
																								<input type="checkbox">
																								<span>Bookmark</span>
																							</span>
																						</a>
																					</li>
																				</div>
																				<li class="menu_list_item">
																					<a href="#">
																						<span id="__w2_iz6A5vJ_contents">Edit Question &amp; Details</span>
																					</a>
																				</li>
																				<div id="YhXxGQ">
																					<li class="menu_list_item"><a href="#"><span id="__w2_Jtt34gG_contents">Thank</span></a></li>
																				</div>
																				<div class="menu_list_item">
																					<span id="EDBzBF">
																						<a class="Downvote Button TwoStateButton Question secondary_action" href="#" action_click="QuestionDownvote">
																							<span class="button_text" id="__w2_OFJmYM2_text">Downvote Question</span>
																						</a>
																					</span>
																				</div>
																				<div id="yKqqrX">
																					<li class="menu_list_item"><span class="light_gray"><span id="DuglUZ">
																						<a href="#">Report</a></span></span>
																					</li>
																				</div>
																				<li class="menu_list_item">
																					<a href="javascript:;"><span id="__w2_lTNSqZX_contents">Log</span></a>
																				</li>
																			  </ul>
																			</div>
																		</div>
																	</div>
																	<span class="dots overflow_dots"></span>
																	</div>
                                                               </div>
															   <!-- end button action -->
                                                      <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_UdKVTT3_overflow_menu">
                                                         <div class="hover_menu_contents lazy" id="__w2_UdKVTT3_overflow_menu_contents"></div>
                                                      </div>
                                                   </div>
                                                   <div class="hidden" id="__w2_kJbsIZx_wrapper"></div>
                                                   <div>
                                                      <div id="AyFRla"></div>
                                                   </div>
                                                   <div class="action_bar_comments threaded_comments hidden" id="__w2_VP5LlDR_wrapper"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="__w2_R7nwsGG_add_ans_editor_wrapper"></div>
                                    </div>
                                 </div>
                                 <div class="pagedlist_item" id="GCgwTw">
                                    <div class="feed_item feed_type_answer" id="__w2_ZKdv0gA_item">
                                       <div class="feedback_wrapper hidden" id="__w2_ZKdv0gA_question_feedback"></div>
                                       <div class="feedback_wrapper hidden" id="__w2_ZKdv0gA_answer_feedback"></div>
                                       <div class="feed_item_inner" id="__w2_ZKdv0gA_feed_item">
                                          <div class="StoryItemToggleModal AnswerStoryToggleModal ToggleModal Modal toggle_modal_inline hover_highlight" id="__w2_Amv1bdk__inline">
                                             <div id="BaYUqs">
                                                <div class="EventHeader pass_color_to_child_links many_faces"><span class="photo_wrapper"></span>Popular on Quora</div>
                                             </div>
                                             <span id="__w2_OecwnGB_answer_story">
                                                <div id="gIMwUQ">
                                                   <div class="QuestionText">
													<span id="thVNof">
														<a class="question_link" href="<?=Url::to(["answer/detail"])?>" target="_blank" action_mousedown="QuestionLinkClickthrough" rel="noopener" id="__w2_m2AmEXv_link">
															<span class="question_text">
																<span class="rendered_qtext">What is the hardest truth you had to accept that made you stronger?</span>
															</span>
                                                      </a>
                                                      </span>
                                                   </div>
                                                </div>
                                                <div class="Answer" id="__w2_BbxGzwe_answer">
                                                   <div id="bJtsNG">
                                                      <div class="feed_item_answer answer_text">
                                                         <div class="feed_item_answer_content answer_content">
                                                            <div class="answer_user answer_user_inline">
                                                               <div id="MpIelN">
                                                                  <div class="AnswerHeader ContentHeader">
                                                                     <div class="photo_text_layout size_small">
                                                                        <div class="_layout_photo_wrapper">
                                                                           <div class="_layout_photo">
                                                                              <span id="KdXRKr">
                                                                                 <div class="hover_menu hidden white_bg show_nub" id="__w2_y7SDezu_menu">
                                                                                    <div class="hover_menu_contents" id="__w2_y7SDezu_menu_contents"> </div>
                                                                                 </div>
                                                                                 <span class="photo_tooltip" id="__w2_y7SDezu_link"><a href="/profile/Shovan-Chowdhury" id="__w2_G9f9dAj_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-85355633-50-uultphdbsqrpdecahxzjabckwotaweqc.jpeg" width="50" alt="Shovan Chowdhury" height="50" /></a><span id="xYnSdr"></span></span>
                                                                              </span>
                                                                           </div>
                                                                        </div>
                                                                        <div class="_layout_text_wrapper">
                                                                           <div class="_layout_text">
                                                                              <span class="feed_item_answer_user">
                                                                                 <span id="DNdpZf">
                                                                                    <span id="iWEDEd">
                                                                                       <span id="HOBjSf">
                                                                                          <div class="hover_menu hidden white_bg show_nub" id="__w2_fFMSvJ1_menu">
                                                                                             <div class="hover_menu_contents" id="__w2_fFMSvJ1_menu_contents"> </div>
                                                                                          </div>
                                                                                          <span id="__w2_fFMSvJ1_link"><a class="user" href="/profile/Shovan-Chowdhury" action_mousedown="UserLinkClickthrough" id="__w2_fFMSvJ1_name_link">Shovan Chowdhury</a></span> 
                                                                                       </span>
                                                                                       <span class="IdentityNameCredential ActorNameCredential">, &quot;You are never too old to set another goal or to dream a new dream.&quot;</span> 
                                                                                    </span>
                                                                                 </span>
                                                                              </span>
                                                                              <div id="lAbJej">
                                                                                 <div class="CredibilityFacts pass_color_to_child_links"><span id="sSUGMp"><a class="answer_permalink" href="/What-is-the-hardest-truth-you-had-to-accept-that-made-you-stronger/answer/Shovan-Chowdhury" action_mousedown="AnswerPermalinkClickthrough" id="__w2_DKIf76U_link">Updated Dec 14</a></span>
                                                                                 </div>
                                                                              </div>
                                                                           </div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div>
                                                               <div id="HgqsIH"></div>
                                                               <div id="VpbzsR">
                                                                  <div class="truncated_q_text truncated_para_breaks TruncatedQText TruncatedAnswer" id="__w2_cvRLO3m_truncated">
                                                                     <div class="truncated_thumbnail_holder">
                                                                        <span class="rendered_qtext">
                                                                           <div class="qtext_image_wrapper">
                                                                              <canvas class="qtext_image_placeholder landscape qtext_image zoomable_in zoomable_in_feed" width="572.0" height="321.75" data-src="data:image/JPEG;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAIBAQEBAQIBAQECAgICAgQDAgICAgUEBAMEBgUGBgYFBgYGBwkIBgcJBwYGCAsICQoKCgoKBggLDAsKDAkKCgr/2wBDAQICAgICAgUDAwUKBwYHCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgr/wAARCAAGAAoDASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAAAAcI/8QAIhAAAQMEAgIDAAAAAAAAAAAAAgEDBAAFERIGBwghCSJx/8QAFQEBAQAAAAAAAAAAAAAAAAAAAwX/xAAZEQACAwEAAAAAAAAAAAAAAAABAgADBBH/2gAMAwEAAhEDEQA/AMp2Lw361s3Q/MmJYxrlyKTdIDrHI5doZQogOmUfQGkyBZUjIts5+ipqootRWZ8d1nky3ZB87b2ccIl1s4ImVXPpEL1+UpVNc9IcjkBSRWs//9k="></canvas>
                                                                              <img class="landscape qtext_image zoomable_in zoomable_in_feed lazy_loaded lazy_loading" src="" data-src="<?=$baseUrl?>/skins/images/main-qimg-acc2a476204133cef2527b8c23c70e84-c?convert_to_webp=true" master_src="<?=$baseUrl?>/skins/images/main-qimg-6c2932009d7560d9e09b6aa61b6ac46f-c?convert_to_webp=true" master_w="1920" master_h="1080"/>                                                                                 
                                                                           </div>
                                                                        </span>
                                                                     </div>
                                                                     <span class="rendered_qtext">
                                                                        <ol>
                                                                           <li>I don&#039;t have a girlfriend.</li>
                                                                           <li>My job application was rejected from 1000+ employers.</li>
                                                                           <li>I do a simple job, earn $190 per month and work 9+ hours per day.</li>
                                                                           <li>I am an average person. So, I have to work really har...</li>
                                                                        </ol>
                                                                     </span>
                                                                     <span id="__w2_cvRLO3m_more"><a class="more_link">(more)</a></span> 
                                                                     <span class="hidden" id="__w2_cvRLO3m_loading">
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
                                                      </div>
                                                   </div>
                                                </div>
                                             </span>
                                             <span class="hidden" id="__w2_OecwnGB_question_answer_story_editable"></span>
                                             <div id="aPiROY">
                                                <div class="Answer ActionBar AnswerUnsticky" id="__w2_yw8ft5g_action_bar">
                                                   <div class="action_bar_inner">
                                                      <span id="RzqvzW"><a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 32214776, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_g2I4Z5i_button"><span class="button_text" id="__w2_g2I4Z5i_text">Upvote</span><span class="count" id="__w2_g2I4Z5i_count">9k</span>
                                                      </a>
                                                      </span><span id="wSQeTt"><a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 32214776, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_kQhdcr1_button"><span class="button_text" id="__w2_kQhdcr1_text">Downvote</span>
                                                      </a>
                                                      </span>
                                                      <div class="action_item" id="__w2_wMF77z4_link"><span id="XpdzWn"><a class="view_comments comment_link" href="#" id="__w2_CRbOyCM_view_comment_link">Comments<span class="count">120+</span>
                                                         </a>
                                                         </span>
                                                      </div>
                                                      <div class="action_item">
                                                         <div id="vzblum">
                                                            <div class="ShareSectionIcons">
                                                               <a class="FacebookNetworkShare" href="" id="__w2_LEhsAgp_share">
																	<span class="icon icon_facebook"></span>
																	<span class="text"></span>
																</a>
																<a class="TwitterNetworkShare" href="#" id="__w2_LaCvFWO_share">
																	<span class="icon icon_twitter"></span>
																	<span class="text"></span>
																</a>
                                                            </div>
                                                         </div>
                                                      </div>
                                                      <div class="overflow action_item overflow_link">
														<a class="overflow_link" href="#" id="__w2_yw8ft5g_overflow_link">
															<span class="dots overflow_dots"></span>
														</a>
                                                      </div>
                                                      <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_yw8ft5g_overflow_menu">
                                                         <div class="hover_menu_contents lazy" id="__w2_yw8ft5g_overflow_menu_contents"></div>
                                                      </div>
                                                   </div>
                                                   <div class="hidden" id="__w2_hzz27gQ_wrapper"></div>
                                                   <div>
                                                      <div id="DDrDwo"></div>
                                                   </div>
                                                   <div class="action_bar_comments threaded_comments hidden" id="__w2_jTI8rj0_wrapper"></div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="__w2_ZKdv0gA_add_ans_editor_wrapper"></div>
                                    </div>
                                 </div>
                                 <div class="pagedlist_item" id="IhxJZS">
                                    <div class="feed_item feed_type_question" id="__w2_CvF672h_item">
                                       <div class="feedback_wrapper hidden" id="__w2_CvF672h_question_feedback"></div>
                                       <div class="feed_item_inner" id="__w2_CvF672h_feed_item">
                                          <div id="hOtMEU">
                                             <div class="QuestionStoryToggleModal StoryItemToggleModal ToggleModal Modal FeedQuestionStoryToggleModal toggle_modal_inline hover_highlight" id="__w2_FJKh9GN__inline">
                                                <div id="plSdKm">
                                                   <div class="EventHeader pass_color_to_child_links many_faces">
														<span class="photo_wrapper"></span>
															Question asked
														<span class="topic">
															<span class="bullet"> &middot; </span>
														</span>
														<div class="TopicListItem" id="__w2_wAFAPM1_topic_list_item">
															<div id="cEGkjZ">
																<div class="hover_menu hidden white_bg show_nub" id="__w2_tpxxyhd_menu">
																   <div class="hover_menu_contents" id="__w2_tpxxyhd_menu_contents"> </div>
																</div>
																<a class="TopicNameLink HoverMenu topic_name" href="/topic/Dating-and-Relationships-1" target="" action_mousedown="TopicLinkClickthrough" id="__w2_tpxxyhd_link"><span class="name_text"><span id="AUoZtT"><span class="TopicNameSpan TopicName" id="__w2_PArn34h_card">Dating and Relationships</span></span></span></a> 
															</div>
														</div>
														<span class="bullet"> &middot; </span>
														<span class="timestamp">
															<a href="#">9h</a>
														</span> 
                                                   </div>
                                                </div>
                                                <div id="pWASny">
                                                   <div id="FPvRSm">
                                                      <span id="__w2_RzWi4rr_question_story">
                                                         <div id="MFGHTN">
                                                            <div id="Cvauws">
                                                               <div class="QuestionText"><span id="FgrGhO">
																	<a class="question_link" href="<?=Url::to(["answer/detail"])?>" target="_blank" action_mousedown="QuestionLinkClickthrough" rel="noopener" id="__w2_oLY92sr_link">
																		<span class="question_text">
																		<span class="rendered_qtext">Should you date someone you can&#039;t have a future with?</span></span>
																	</a>
                                                                  </span>
                                                               </div>
                                                            </div>
                                                            <span class="gray_details">
                                                               <div id="BhhwSB">
                                                                  <div class="QuestionDetails">
                                                                     <div id="GAeFCu">
                                                                        <div class="truncated_q_text truncated_para_breaks TruncatedQuestionDetails TruncatedQText" id="__w2_ORqFSPH_truncated">
                                                                           <span class="rendered_qtext">
                                                                              <p class="qtext_para">She said, “Its unfair of me to ask you this but you always tell me to be direct, I want to date you but I wouldn&#039;t be able to have a futu...</p>
                                                                           </span>
                                                                           <span id="__w2_ORqFSPH_more"><a class="more_link">(more)</a></span> 
                                                                           <span class="hidden" id="__w2_ORqFSPH_loading">
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
                                                            <div class="MarkedAsCantAnswerMessage ShowOnPass">You passed on answering this question<span class="bullet"> &middot; </span><a class="undo_cant_answer" href="#" id="__w2_KVUGUAH_undo_cant_answer">Undo</a>
                                                            </div>
                                                            <span class="downvote_link">
																<span id="DChlXq">
																	<a class="Downvote Button TwoStateButton Question secondary_action" href="#" action_target="{&quot;qid&quot;: 11806522, &quot;type&quot;: &quot;question&quot;}" action_click="QuestionDownvote" id="__w2_Hecrj5A_button">
																	<span class="button_text" id="__w2_Hecrj5A_text">Downvote</span>
                                                            </a>
                                                            </span>
                                                            </span>
                                                         </div>
                                                         <div id="ZAumxJ">
                                                            <div class="ContentFooter QuestionFooter" id="__w2_faAx8Ht_content_footer"><a class="read_answers" href="/Should-you-date-someone-you-cant-have-a-future-with" id="__w2_faAx8Ht_link">Read 21 Answers</a>
                                                            </div>
                                                         </div>
                                                         <div id="Ikwtip"></div>
                                                      </span>
                                                      <span class="hidden" id="__w2_RzWi4rr_question_story_editable"></span> 
                                                   </div>
                                                   <div id="zUlKnI">
                                                      <div id="DrIElB">
                                                         <div class="ActionBar Question" id="__w2_tlcKXhK_action_bar">
                                                            <div class="action_bar_inner">
                                                               <div class="primary_item">
																	<span id="MxuxDx">
																		<a class="WriteAnswer Button WriteAnswerButton" href="#" action_target="{&quot;qid&quot;: 11806522, &quot;type&quot;: &quot;question&quot;}" id="__w2_W3xQsN9_button">
																			<span class="button_text" id="__w2_W3xQsN9_text">Answer</span>
																		</a>
                                                                  </span>
                                                               </div>
                                                               <div class="primary_item"><a class="CantAnswerLink action_button" href="#" action_mousedown="PassWritePage" id="__w2_inMGI5a_cant_answer">Pass</a>
                                                               </div>
                                                               <div class="action_item">
                                                                  <span id="TOuBQb">
                                                                     <a class="Button TwoStateButton Question secondary_action" href="#" action_target="{&quot;qid&quot;: 11806522, &quot;type&quot;: &quot;question&quot;}" action_click="QuestionFollow" id="__w2_dNU6LYa_button">
                                                                        <span class="button_text" id="__w2_dNU6LYa_text">Follow</span>
																		<span class="count" id="__w2_dNU6LYa_count">10</span>
                                                                        <div class="action_bar_button_nub" id="__w2_dNU6LYa_nub"></div>
                                                                     </a>
                                                                  </span>
                                                               </div>
                                                               <div class="action_item">
																	<span id="PgyFQB">
																		<a class="Downvote Button TwoStateButton Question secondary_action" href="#" action_target="{&quot;qid&quot;: 11806522, &quot;type&quot;: &quot;question&quot;}" action_click="QuestionDownvote" id="__w2_q2H41vl_button">
																			<span class="button_text" id="__w2_q2H41vl_text">Downvote</span>
																		</a>
																	</span>
                                                               </div>
                                                               <div class="overflow action_item overflow_link">
																	<a class="overflow_link" href="#" id="__w2_tlcKXhK_overflow_link">
																		<span class="dots overflow_dots"></span>
																	</a>
                                                               </div>
                                                               <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_tlcKXhK_overflow_menu">
                                                                  <div class="hover_menu_contents lazy" id="__w2_tlcKXhK_overflow_menu_contents"></div>
                                                               </div>
                                                            </div>
                                                            <div id="cuJkuu">
                                                               <div class="RequestAnswersDrawer" id="__w2_gEG8WAY_drawer">
                                                                  <div class="inner">
                                                                     <div class="header">Nhờ giải đáp:
                                                                        <a class="modal_close" href="#" id="__w2_gEG8WAY_close_button"></a>
                                                                     </div>
                                                                     <div id="PAjtxr">
                                                                        <div class="request_answers_list_item is_request_from_quora" id="__w2_ZLnHpf7_list_item">
                                                                           <div class="request_answers_icon"></div>
                                                                           <div class="name_sig">
                                                                              <div class="user">Yêu cầu Từ Quora</div>
                                                                           </div>
                                                                           <div class="name_sig in_active_state">
                                                                              <div class="user">Requesting From Quora</div>
                                                                           </div>
                                                                           <div class="metadata">Chúng tôi sẽ phân phối câu hỏi này cho các nhà văn, và thông báo cho bạn về câu trả lời mới.</div>
                                                                           <div class="metadata in_active_state">Chúng tôi sẽ tìm kiếm các câu trả lời, và sẽ thông báo cho bạn về câu trả lời mới.</div>
                                                                           <a class="request_answers_button" id="__w2_ZLnHpf7_request_answers_button"></a>
                                                                        </div>
                                                                     </div>
                                                                     <div id="XdygVq">
                                                                        <div id="__w2_MUIljMU_suggestions_list">
                                                                           <div>
                                                                              <div class="request_answers_placeholder">
                                                                                 <div class="placeholder_block placeholder_photo"></div>
                                                                                 <div class="placeholder_block placeholder_name" style="width:416px"></div>
                                                                                 <div class="placeholder_block placeholder_metadata" style="width:267px"></div>
                                                                              </div>
                                                                              <div class="request_answers_placeholder">
                                                                                 <div class="placeholder_block placeholder_photo"></div>
                                                                                 <div class="placeholder_block placeholder_name" style="width:416px"></div>
                                                                                 <div class="placeholder_block placeholder_metadata" style="width:267px"></div>
                                                                              </div>
                                                                              <div class="request_answers_placeholder">
                                                                                 <div class="placeholder_block placeholder_photo"></div>
                                                                                 <div class="placeholder_block placeholder_name" style="width:416px"></div>
                                                                                 <div class="placeholder_block placeholder_metadata" style="width:267px"></div>
                                                                              </div>
                                                                           </div>
                                                                           <div class="view_more_placeholder"></div>
                                                                        </div>
                                                                     </div>
                                                                  </div>
                                                               </div>
                                                            </div>
                                                            <div id="VKYeaO">
                                                               <div class="hidden" id="__w2_KEklQZ7_add_answer_editor_wrapper"></div>
                                                            </div>
                                                         </div>
                                                      </div>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div id="__w2_CvF672h_add_ans_editor_wrapper"></div>
                                    </div>
                                 </div>
                                 <div id="VPKsTu">
                                    <div class="PagedListMoreButton" id="__w2_CORLksP_paged_list_more_button">
                                       <div class="pager_next" id="__w2_CORLksP_loading">
                                          <div class="__wn2_loading"><span class="__wn2_loading_spinner"></span>
                                          </div>
                                       </div>
                                       <div class="pager_next action_button row" id="__w2_CORLksP_more">Xem thêm</div>
                                       <div class="pager_sentinel" id="__w2_CORLksP_sentinel"></div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="layout_3col_right home_feed_right_col" id="__w2_s33UHsd_right_col">
                  <div class="fixed_sidebar">
                     <div class="zapdos_sidebar_wrapper">
                        <div id="mGtZQx">
                           <div class="checklist_outer_box">
                              <div>
                                 <div class="new_user_checklist">
                                    <h2 class="title">Cải thiện nguồn cấp dữ liệu của bạn</h2>
                                    <div class="steps_container">
                                       <div class="checklist_row">
                                          <div id="VYsVCV">
                                             <div class="check_wrapper complete">
                                                <div class="check"></div>
                                             </div>
                                             <div class="complete label" id="__w2_UIJPZXs_checklist_step_1">Thăm chủ đề yêu thích của bạn</div>
                                          </div>
                                          <div style="display:block;clear:both;"></div>
                                       </div>
                                       <div class="checklist_row">
                                          <div id="isMful">
                                             <div class="check_wrapper">
                                                <div class="check"></div>
                                             </div>
												<div class="label" id="__w2_Nuyx4XN_checklist_step_17"><a href="#" id="__w2_Nuyx4XN_step_link">
													Theo dõi thêm 10 chủ đề
												</a>
                                             </div>
                                          </div>
                                          <div style="display:block;clear:both;"></div>
                                       </div>
                                       <div class="checklist_row">
                                          <div id="dYOGLx">
                                             <div class="check_wrapper">
                                                <div class="check"></div>
                                             </div>
                                             <div class="label" id="__w2_OLfatu8_checklist_step_14"><a href="#" id="__w2_OLfatu8_step_link">Find your friends on Quora</a>
                                             </div>
                                          </div>
                                          <div style="display:block;clear:both;"></div>
                                       </div>
                                       <div class="checklist_row">
                                          <div id="prjeOD">
                                             <div class="check_wrapper">
                                                <div class="check"></div>
                                             </div>
                                             <div class="label" id="__w2_wR6ueFr_checklist_step_12">Upvote 5 more good answers</div>
                                          </div>
                                          <div style="display:block;clear:both;"></div>
                                       </div>
                                       <div class="checklist_row">
                                          <div id="wWgEel">
                                             <div class="check_wrapper">
                                                <div class="check"></div>
                                             </div>
                                             <div class="label" id="__w2_M8STYBX_checklist_step_7">Ask your first question</div>
                                          </div>
                                          <div style="display:block;clear:both;"></div>
                                       </div>
                                       <div class="checklist_row">
                                          <div id="zNaGuL">
                                             <div class="check_wrapper">
                                                <div class="check"></div>
                                             </div>
                                             <div class="label" id="__w2_fzLQDXS_checklist_step_16"><a href="/profile/Tài-Tâm" id="__w2_fzLQDXS_step_link">Add info about what you know</a>
                                             </div>
                                          </div>
                                          <div style="display:block;clear:both;"></div>
                                       </div>
                                       <div class="checklist_row">
                                          <div id="zBPmqM">
                                             <div class="check_wrapper">
                                                <div class="check"></div>
                                             </div>
                                             <div class="label" id="__w2_rQFn0Qd_checklist_step_9"><a href="/answer" id="__w2_rQFn0Qd_step_link">Answer a question</a>
                                             </div>
                                          </div>
                                          <div style="display:block;clear:both;"></div>
                                       </div>
                                    </div>
                                    <div style="display:block;clear:both;"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <span style="display: none;" id="__w2_S5Wfav4_fixable_component"></span> 
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="IJqoRz"></div>

<?php 
	$js = <<<JS
	$('.SiteHeader.during_nux').show();
	$('.LoggedInSiteHeader.SiteHeader').css('display','none');
	topics_value = [];
	$( ".topic_photo_card" ).click(function() {
		var topics_id = $(this).attr('id');
		var id = topics_id.replace('topics_','');
		if($(this).hasClass('following')){
			$(this).removeClass('following');
			for(var i = topics_value.length - 1; i >= 0; i--) {
			    if(topics_value[i] === id) {
			       topics_value.splice(i, 1);
			    }
			}

			if(topics_value.length < 10){
				topics_num = 10 - topics_value.length;
				$('#__w2_gZrKWWv_next').text(topics_num + ' More Topics to Continue');
				$('#__w2_gZrKWWv_next').addClass('submit_button_disabled');
			}else{
				$('#__w2_gZrKWWv_next').text('Continue');
				$('#__w2_gZrKWWv_next').removeClass('submit_button_disabled');
			}
		}else{
			$(this).addClass('following');
			topics_value.push(id);
			if(topics_value.length < 10){
				topics_num = 10 - topics_value.length;
				$('#__w2_gZrKWWv_next').text(topics_num + ' More Topics to Continue');
				$('#__w2_gZrKWWv_next').addClass('submit_button_disabled');
			}else{
				$('#__w2_gZrKWWv_next').text('Continue');
				$('#__w2_gZrKWWv_next').removeClass('submit_button_disabled');
			}
		}
		$("input[name='topics[]']").val(topics_value);
	});

	$('#__w2_gZrKWWv_next').click(function() {
		var topics = $("input[name='topics[]']").val();
		$.ajax({
            url : "$url_set_follow_topics",
            type : "post",
            dateType:"json",
            data : {
                topics : topics
            },
            success : function (result){
            	$('#popup-choose-topic').dialog('close');
            	$('#popup-choose-topic-know').dialog('open');
            	$('#__w2_Z3jd6Md_progress_bar').css('width','250');
                console.log(result);
            }
        });
	});
JS;
	/*var_dump(Yii::$app->user->identity->register_status);die;*/
	if(Yii::$app->user->identity->register_status == User::REGISTER_STATUS_STEP1){
		$this->registerJS($js, View::POS_READY);
	}

	$css = <<<css
	.ui-dialog-content.ui-widget-content{
		overflow-y: hidden;
	}
css;
	$this->registerCss($css);
	Dialog::begin([
		'id' => 'popup-choose-topic',
    	'clientOptions' => [
	        'modal' => true,
	        'draggable' => false,
	        'dialogClass'=> "no-close",
	        'closeOnEscape' => false,
	        'width' => "760",
	        'height' => '520',
	        'resizable' => false,
	        'position' => [
				'my' => 'center',
				'at' => 'center'
			]
	 	],
 		'clientEvents' =>[
	 		'open' =>  ' function(event, ui) { 
			    //hide close button.
			    $(this).closest(".ui-dialog").find(".ui-dialog-titlebar-close").hide();
			    $(this).closest(".ui-dialog").find(".ui-dialog-titlebar").hide();
			    $("#popup-choose-topic").css("overflow","hidden");		    
			}'
		],
	]);
	echo WidgetChooseTopics::widget();
	Dialog::end();

	Dialog::begin([
		'id' => 'popup-choose-topic-know',
		'clientOptions' => [
			'autoOpen' => false,
			'modal' => true,
			'draggable' => false,
			'dialogClass' => 'search-topic-know',
			'closeOnEscape' => false,
			'width' => "510",
			'resizable' => false,
			'position' => [
				'my' => 'center',
				'at' => 'center'
			]
		],
		'clientEvents' => [
			'open' =>  ' function(event, ui) { 
			    //hide close button.
			    $(this).closest(".ui-dialog").find(".ui-dialog-titlebar-close").hide();
			    $(this).closest(".ui-dialog").find(".ui-dialog-titlebar").hide();
			    $("#popup-choose-topic").css("overflow","hidden");		    
			}'
		]
	]);
	echo WidgetTopicsKnow::widget();
	Dialog::end();
?>
