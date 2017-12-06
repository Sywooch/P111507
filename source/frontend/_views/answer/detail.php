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
<div class="content_page_feed_offset">
  <div class="LoggedInSiteHeader SiteHeader" id="__w2_Lym1D4P_header">
    <div class="header_inner">
      <div class="header_logo"><a href="/"><span>Quora</span></a>
      </div>
      <div class="header_contents">
        <div class="table_cell_wrapper">
          <div class="ask_bar">
            <div class="WithServerCallMessageMixin TypersearchESSelector Selector LookupBarSelector" tabindex="-1" id="__w2_utXjhED_wrapper">
              <div class="selector_input_interaction">
                <div class="CharacterCounter fade_out" id="__w2_CHsgOoM_counter">150</div>
                <textarea class="selector_input text" group="__w2_utXjhED_interaction" type="text" autofocus="True" rows="1" placeholder="Ask or Search Quora" w2cid="utXjhED" id="__w2_utXjhED_input"></textarea>
                <div class="selector_spinner hidden" id="__w2_utXjhED_spinner">
                  <div class="LoadingDots tiny">
                    <div class="dot first"></div>
                    <div class="dot second"></div>
                    <div class="dot third"></div>
                  </div>
                </div>
              </div>
              <div class="selector_results_container hidden" id="__w2_utXjhED_results_container">
                <div class="lookup_bar_results_wrapper hidden" id="__w2_utXjhED_results_wrapper">
                  <div class="results_wrapper">
                    <div class="hidden resistance_wrapper server_message" id="__w2_utXjhED_server_message">
                      <div class="fixit_title" id="__w2_utXjhED_server_message_title"></div>
                      <span class="fixit_note" id="__w2_utXjhED_server_message_note"></span>
                    </div>
                    <div class="interstitials_and_results">
                      <div class="hidden ask_interstitial" id="__w2_utXjhED_ask_mode_interstitial">
                        <p class="ask_interstitial_content"><strong class="ask_interstitial_title" id="__w2_utXjhED_interstitial_title"></strong><span id="__w2_utXjhED_interstitial_text"></span>
                        </p>
                      </div>
                      <div class="results" id="__w2_utXjhED_results"></div>
                    </div>
                  </div>
                </div>
                <div id="__w2_utXjhED_empty_input_prompt"></div>
              </div>
            </div>
            <a class="AddQuestionLookupBarButton" href="#" id="__w2_yINZVn0_dialog_link">
              <div class="inner">Ask Question</div>
            </a>
            <div class="details_wrapper hidden" id="__w2_utXjhED_details_wrapper">
              <div class="editor_wrapper" id="__w2_sowWuKp_editor_outer">
                <div class="AskBarDetails Editor edit_latex web" id="__w2_sowWuKp_editor">
                  <div group="__w2_sowWuKp_interaction" interactive="true" w2cid="sowWuKp" id="__w2_sowWuKp_doc"></div>
                  <input group="__w2_sowWuKp_interaction" style="display:none" multiple="" type="file" w2cid="sowWuKp" id="__w2_sowWuKp_file" />
                  <div class="drop_zone hidden" id="__w2_sowWuKp_drop_zone"></div>
                  <div class="CharacterCounter fade_out" id="__w2_CkGYDru_counter">300</div>
                  <div class="hidden" id="__w2_sowWuKp_link_selector_wrapper">
                    <div class="LinkSelector Selector" tabindex="-1" id="__w2_QX1SP32_wrapper">
                      <div class="link_selector_input">
                        <div class="selector_input_interaction">
                          <div class="CharacterCounter fade_out" id="__w2_qKgYwyZ_counter">250</div>
                          <input class="selector_input text" group="__w2_QX1SP32_interaction" type="text" placeholder="Search" value="" w2cid="QX1SP32" id="__w2_QX1SP32_input" />
                          <div class="selector_spinner hidden" id="__w2_QX1SP32_spinner">
                            <div class="LoadingDots tiny">
                              <div class="dot first"></div>
                              <div class="dot second"></div>
                              <div class="dot third"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="selector_results_container hidden" id="__w2_QX1SP32_results_container">
                        <div class="selector_results_container_inner hidden" id="__w2_QX1SP32_results"></div>
                        <div id="__w2_QX1SP32_empty_input_prompt"></div>
                      </div>
                    </div>
                  </div>
                  <div class="photo_search_wrapper" id="__w2_sowWuKp_photo_search_wrapper">
                    <div id="nASxvE">
                      <div class="PhotoSearch">
                        <div class="nub"></div>
                        <div class="input_wrapper">
                          <input group="__w2_vuvAAfe_interaction" type="text" placeholder="Search for a photo" w2cid="vuvAAfe" id="__w2_vuvAAfe_search" /><a class="upload_link" href="#" id="__w2_vuvAAfe_upload"><span class="upload_icon"></span>Upload</a>
                        </div>
                        <div class="photo_container">
                          <div class="photo_container_inner" id="__w2_vuvAAfe_container">
                            <div class="empty_state" id="__w2_vuvAAfe_empty_state">
                              Search for a photo or upload your own
                              <div class="bing_attribution">Powered by</div>
                            </div>
                            <div class="hidden" id="__w2_vuvAAfe_spinner">
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
          <div class="header_nav" id="__w2_Lym1D4P_nav">
            <span id="zZTPZj">
              <div class="FeedNavItem HoverMenu SiteHeaderNavItem"><a class="nav_item_link" href="/" id="__w2_q87Kf28_link"><span class="expanded">Read</span><span class="truncated">Read</span> </a>
              </div>
            </span>
            <span id="WQQtdB">
              <div class="WriteNavItem SiteHeaderNavItem HoverMenu">
                <a class="nav_item_link" href="/answer" id="__w2_XGxZxdY_link">
                  <span class="expanded">Answer</span><span class="truncated">Answer</span>
                  <div id="hsGNnT"></div>
                </a>
              </div>
            </span>
            <span id="PBGOvF">
              <div class="NotifsNavItem SiteHeaderNavItem HoverMenu">
                <div class="hover_menu hidden hover_menu_header show_nub" id="__w2_GClVroc_menu">
                  <div class="hover_menu_contents" id="__w2_GClVroc_menu_contents"> </div>
                </div>
                <a class="nav_item_link" href="#" id="__w2_GClVroc_link">
                  <span class="expanded">Notifications</span><span class="truncated">Notifs</span>
                  <div id="rAviIl"></div>
                </a>
              </div>
            </span>
            <span id="wXgPZR">
              <div class="MoreNavItem SiteHeaderNavItem HoverMenu">
                <div class="hover_menu hidden hover_menu_header show_nub" id="__w2_BAKZwqN_menu">
                  <div class="hover_menu_contents" id="__w2_BAKZwqN_menu_contents"> </div>
                </div>
                <a class="nav_item_link" href="#" id="__w2_BAKZwqN_link">
                  <span class="expanded">
                    <span class="photo_wrapper">
                      <div id="JdeubW"><span class="photo_tooltip" id="__w2_ZUY5d0A_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-237786945-50-fuxstuvzahoqnatognoolfzwtplkduws.jpeg" width="50" alt="Tam Nguyen" height="50" /></span>
                      </div>
                    </span>
                    <span id="dYFuNc"><span id="__w2_SWDdOei_link"><span class="user">Tam</span></span>
                    </span>
                  </span>
                  <span class="truncated">
                    <span class="photo_wrapper">
                      <div id="kQyAOG"><span class="photo_tooltip" id="__w2_oJos3jN_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-237786945-50-fuxstuvzahoqnatognoolfzwtplkduws.jpeg" width="50" alt="Tam Nguyen" height="50" /></span>
                      </div>
                    </span>
                    <span id="CdQZBs"><span id="__w2_oEEp9K0_link"><span class="user">Tam</span></span>
                    </span>
                  </span>
                  <div id="MdGinB"></div>
                </a>
              </div>
            </span>
            <div id="ftvbXG"></div>
          </div>
        </div>
        <div class="table_cell_wrapper toolbar">
          <div class="LookupBarSiteHeaderAddQuestion">
            <a class="ask_submit_button submit_button" href="#" id="__w2_IPknAmM_submit_question">Submit Question</a><span class="anon_wrapper"><label><input group="__w2_IPknAmM_interaction" type="checkbox" w2cid="IPknAmM" id="__w2_IPknAmM_anon_checkbox" />Anonymously</label></span>
            <div class="details_toggle_wrapper"><a class="details_toggle add_details" href="#" id="__w2_IPknAmM_add_details"><span style="display: block;" id="__w2_RPVeWJd_tooltip"></span></a><a class="details_toggle remove_details hidden" href="#" id="__w2_IPknAmM_remove_details"><span style="display: block;" id="__w2_tVZXt92_tooltip"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="EnqsmM"></div>
  <div id="__w2_BuEHUGp_body_blur"></div>
  <div class="ContentWrapper">
    <div id="__w2_i4Qgns7_content">
      <div id="rVnlrv">
        <div class="QuestionTopBanner top_banner"></div>
      </div>
      <div class="NewGridQuestionPage QuestionMain">
        <div class="grid_page">
          <div class="layout_2col_main">
            <div class="header">
              <div id="iykVav">
                <div class="QuestionArea">
                  <div id="kRWQTf">
                    <div class="QuestionTopicHorizontalList TopicList" id="__w2_MqEJ6qe_topics_list">
                      <div id="DLbBku">
                        <div class="QuestionTopicListItems SimpleToggle TopicListItems2 Toggle QuestionTopicHorizontalListItems" id="__w2_NnbZNKQ__truncated">
                          <span id="WOVRMP">
                            <div class="QuestionTopicListItem TopicListItem topic_pill" id="__w2_ykVox6Q_topic_list_item">
                              <a class="topic_remove" href="#" id="__w2_ykVox6Q_remove_topic"></a>
                              <div id="uRlSMJ">
                                <div class="hover_menu hidden white_bg show_nub" id="__w2_ZJyp79N_menu">
                                  <div class="hover_menu_contents" id="__w2_ZJyp79N_menu_contents"> </div>
                                </div>
                                <a class="TopicNameLink HoverMenu topic_name" href="/topic/Psychological-Tricks" target="" action_mousedown="TopicLinkClickthrough" id="__w2_ZJyp79N_link"><span class="name_text"><span id="YHmfPV"><span class="TopicNameSpan TopicName" id="__w2_OFYpMBW_card">Psychological Tricks</span></span>
                                </span>
                                </a>
                              </div>
                            </div>
                          </span>
                          <span id="lyfWMF">
                            <div class="QuestionTopicListItem TopicListItem topic_pill" id="__w2_LjDFw0E_topic_list_item">
                              <a class="topic_remove" href="#" id="__w2_LjDFw0E_remove_topic"></a>
                              <div id="qEnXhF">
                                <div class="hover_menu hidden white_bg show_nub" id="__w2_eQFC8Dz_menu">
                                  <div class="hover_menu_contents" id="__w2_eQFC8Dz_menu_contents"> </div>
                                </div>
                                <a class="TopicNameLink HoverMenu topic_name" href="/topic/Tricks" target="" action_mousedown="TopicLinkClickthrough" id="__w2_eQFC8Dz_link"><span class="name_text"><span id="TtReEU"><span class="TopicNameSpan TopicName" id="__w2_pVoRBUo_card">Tricks</span></span>
                                </span>
                                </a>
                              </div>
                            </div>
                          </span>
                          <span id="nzRCMx">
                            <div class="QuestionTopicListItem TopicListItem topic_pill" id="__w2_GTVh9Uj_topic_list_item">
                              <a class="topic_remove" href="#" id="__w2_GTVh9Uj_remove_topic"></a>
                              <div id="uunHSc">
                                <div class="hover_menu hidden white_bg show_nub" id="__w2_mLfhyg8_menu">
                                  <div class="hover_menu_contents" id="__w2_mLfhyg8_menu_contents"> </div>
                                </div>
                                <a class="TopicNameLink HoverMenu topic_name" href="/topic/Cognitive-Psychology" target="" action_mousedown="TopicLinkClickthrough" id="__w2_mLfhyg8_link"><span class="name_text"><span id="iHdMSQ"><span class="TopicNameSpan TopicName" id="__w2_mIEAeUx_card">Cognitive Psychology</span></span>
                                </span>
                                </a>
                              </div>
                            </div>
                          </span>
                          <span id="EKBJJf">
                            <div class="QuestionTopicListItem TopicListItem topic_pill" id="__w2_lvHnDYU_topic_list_item">
                              <a class="topic_remove" href="#" id="__w2_lvHnDYU_remove_topic"></a>
                              <div id="PbhJLL">
                                <div class="hover_menu hidden white_bg show_nub" id="__w2_N9TdU0f_menu">
                                  <div class="hover_menu_contents" id="__w2_N9TdU0f_menu_contents"> </div>
                                </div>
                                <a class="TopicNameLink HoverMenu topic_name" href="/topic/Tips-and-Hacks-1" target="" action_mousedown="TopicLinkClickthrough" id="__w2_N9TdU0f_link"><span class="name_text"><span id="pKMbMO"><span class="TopicNameSpan TopicName" id="__w2_n2lFlph_card">Tips and Hacks</span></span>
                                </span>
                                </a>
                              </div>
                            </div>
                          </span>
                          <span id="__w2_NnbZNKQ_loadinghide"><span class="ViewMoreLink light view_more_topics_link"><a href="#" id="__w2_NnbZNKQ_more">+4</a></span></span><span class="hidden" id="__w2_NnbZNKQ_loadingshow"><span class="ViewMoreLink light view_more_topics_link"><span>...</span></span>
                          </span><span class="hidden" id="__w2_NnbZNKQ_fetch_into"></span>
                        </div>
                        <div class="QuestionTopicListItems SimpleToggle TopicListItems2 Toggle QuestionTopicHorizontalListItems hidden" id="__w2_NnbZNKQ__expanded"></div>
                      </div>
                      <a class="topic_pill edit_topics_link" href="#" id="__w2_MqEJ6qe_modal_link"><span style="display: block;" id="__w2_RG72QgX_tooltip"></span></a>
                    </div>
                  </div>
                  <div id="uWTMgg">
                    <div class="question_text_edit">
                      <div class="question_qtext">
                        <div class="QuestionTextInlineEditor InlineEditor inline_editor_content" id="__w2_fVTLxUX_inline_editor_content">
                          <span class="inline_editor_value">
                            <h1><span class="rendered_qtext">Bạn bắt đầu dự án quickrep.vn như thế nào?</span>
                            </h1>
                          </span>
                        </div>
                        <div class="rteditor inline_editor_content hidden" id="__w2_fVTLxUX_inline_editor_form">
                          <div class="inline_editor_form">
                            <div class="editor_wrapper" id="__w2_X9nJk5J_editor_outer">
                              <div class="Editor Title edit_latex web" id="__w2_X9nJk5J_editor">
                                <div group="__w2_X9nJk5J_interaction" interactive="true" w2cid="X9nJk5J" id="__w2_X9nJk5J_doc"></div>
                                <div class="CharacterCounter fade_out" id="__w2_dKcYyRd_counter">150</div>
                                <div class="hidden" id="__w2_X9nJk5J_link_selector_wrapper">
                                  <div class="LinkSelector Selector" tabindex="-1" id="__w2_xJGuNac_wrapper">
                                    <div class="link_selector_input">
                                      <div class="selector_input_interaction">
                                        <div class="CharacterCounter fade_out" id="__w2_d9JqAJg_counter">250</div>
                                        <input class="selector_input text" group="__w2_xJGuNac_interaction" type="text" placeholder="Search" value="" w2cid="xJGuNac" id="__w2_xJGuNac_input" />
                                        <div class="selector_spinner hidden" id="__w2_xJGuNac_spinner">
                                          <div class="LoadingDots tiny">
                                            <div class="dot first"></div>
                                            <div class="dot second"></div>
                                            <div class="dot third"></div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="selector_results_container hidden" id="__w2_xJGuNac_results_container">
                                      <div class="selector_results_container_inner hidden" id="__w2_xJGuNac_results"></div>
                                      <div id="__w2_xJGuNac_empty_input_prompt"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form_buttons" id="__w2_fVTLxUX_inline_editor_buttons">
                              <div class="inline_editor_buttons">
								<a class="inline_editor_button inline_editor_cancel_button" href="#" id="__w2_fVTLxUX_inline_editor_cancel">Cancel</a>
								<a class="submit_button" href="#" action_mousedown="InlineEditorAnswerAdd" id="__w2_fVTLxUX_inline_editor_submit">Update</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="bqwyoB">
                    <div class="question_details">
                      <div class="InlineEditor QuestionDetailsInlineEditor inline_editor_content" id="__w2_CLcUehO_inline_editor_content">
                        <span class="inline_editor_value">
                          <div class="truncated_para_breaks expanded_q_text" id="__w2_gftmO5x_text_snip">
							<span id="__w2_gftmO5x_text_snip_content">
							<span class="rendered_qtext">Mình thích thì mình làm thôi đâu cần ai phải như thế nào</span>
							</span>
                          </div>
                          <div class="full_text hidden" id="__w2_gftmO5x_full_text">
							<span id="__w2_gftmO5x_full_text_content">
								<span class="rendered_qtext">
									Either a perceptual hack or some interesting associations we automatically make.
								</span>
							</span>
                          </div>
                        </span>
                      </div>
                      <div class="rteditor inline_editor_content hidden" id="__w2_CLcUehO_inline_editor_form">
                        <div class="inline_editor_form">
                          <div class="editor_wrapper" id="__w2_xIg9fwJ_editor_outer">
                            <div class="QuestionDetails Editor edit_latex web" id="__w2_xIg9fwJ_editor">
                              <div group="__w2_xIg9fwJ_interaction" interactive="true" w2cid="xIg9fwJ" id="__w2_xIg9fwJ_doc"></div>
                              <div class="editor_toolbar has_new_photo_icon" id="__w2_WD1Yv5I_toolbar">
                                <div class="scroller" id="__w2_WD1Yv5I_scroller">
                                  <div class="bar bar_link_state" id="__w2_WD1Yv5I_bar0">
                                    <div class="left"></div>
                                    <div class="right"></div>
                                  </div>
                                  <div class="bar bar_regular_state" id="__w2_WD1Yv5I_bar1">
                                    <div class="left">
                                      <div class="modifier bold" tooltip="Bold" id="__w2_WD1Yv5I_bold"></div>
                                      <div class="modifier italic" tooltip="Italic" id="__w2_WD1Yv5I_italic"></div>
                                      <div class="modifier unordered_list" tooltip="Bullets" id="__w2_WD1Yv5I_unordered_list"></div>
                                      <div class="modifier ordered_list" tooltip="Numbers" id="__w2_WD1Yv5I_ordered_list"></div>
                                      <div class="modifier quote" tooltip="Quote" id="__w2_WD1Yv5I_quote"></div>
                                      <div class="modifier link" tooltip="Link" id="__w2_WD1Yv5I_link"></div>
                                      <div class="modifier image" tooltip="Photo" id="__w2_WD1Yv5I_image"></div>
                                    </div>
                                    <div class="right">
                                      <div class="modifier overflow_show" tooltip="Show more" id="__w2_WD1Yv5I_overflow_show"></div>
                                    </div>
                                  </div>
                                  <div class="bar bar_overflow_state" id="__w2_WD1Yv5I_bar2">
                                    <div class="left">
                                      <div class="modifier mention" tooltip="Mention user, topic or question" id="__w2_WD1Yv5I_mention"></div>
                                      <div class="modifier code" tooltip="Code" id="__w2_WD1Yv5I_code"></div>
                                      <div class="modifier math" tooltip="Math" id="__w2_WD1Yv5I_math"></div>
                                      <div class="modifier indent" tooltip="Indent" id="__w2_WD1Yv5I_indent"></div>
                                      <div class="modifier deindent" tooltip="Unindent" id="__w2_WD1Yv5I_deindent"></div>
                                      <div class="modifier undo" tooltip="Undo" id="__w2_WD1Yv5I_undo"></div>
                                      <div class="modifier redo" tooltip="Redo" id="__w2_WD1Yv5I_redo"></div>
                                    </div>
                                    <div class="right">
                                      <div class="modifier overflow_hide" tooltip="Show less" id="__w2_WD1Yv5I_overflow_hide"></div>
                                    </div>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_WD1Yv5I_storage">
                                  <input group="__w2_WD1Yv5I_interaction" placeholder="Enter URL" type="url" formnovalidate="formnovalidate" w2cid="WD1Yv5I" id="__w2_WD1Yv5I_link_input" />
                                  <div class="cite" id="__w2_WD1Yv5I_cite">
                                    <input group="__w2_WD1Yv5I_interaction" type="checkbox" formnovalidate="formnovalidate" w2cid="WD1Yv5I" id="__w2_WD1Yv5I_is_citation" />
                                    <label for="__w2_WD1Yv5I_is_citation">Footnote</label>
                                  </div>
                                  <button type="button" id="__w2_WD1Yv5I_link_save">Add</button>
                                </div>
                              </div>
                              <div class="tooltip" id="__w2_WD1Yv5I_tooltip">
                                <div id="__w2_WD1Yv5I_tooltip_text"></div>
                              </div>
                              <input group="__w2_xIg9fwJ_interaction" style="display:none" multiple="" type="file" w2cid="xIg9fwJ" id="__w2_xIg9fwJ_file" />
                              <div class="drop_zone hidden" id="__w2_xIg9fwJ_drop_zone"></div>
                              <div class="CharacterCounter fade_out" id="__w2_kGmOU5v_counter">300</div>
                              <div class="hidden" id="__w2_xIg9fwJ_link_selector_wrapper">
                                <div class="LinkSelector Selector" tabindex="-1" id="__w2_nwhZ0K9_wrapper">
                                  <div class="link_selector_input">
                                    <div class="selector_input_interaction">
                                      <div class="CharacterCounter fade_out" id="__w2_yu9yCnS_counter">250</div>
                                      <input class="selector_input text" group="__w2_nwhZ0K9_interaction" type="text" placeholder="Search" value="" w2cid="nwhZ0K9" id="__w2_nwhZ0K9_input" />
                                      <div class="selector_spinner hidden" id="__w2_nwhZ0K9_spinner">
                                        <div class="LoadingDots tiny">
                                          <div class="dot first"></div>
                                          <div class="dot second"></div>
                                          <div class="dot third"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="selector_results_container hidden" id="__w2_nwhZ0K9_results_container">
                                    <div class="selector_results_container_inner hidden" id="__w2_nwhZ0K9_results"></div>
                                    <div id="__w2_nwhZ0K9_empty_input_prompt"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="photo_search_wrapper" id="__w2_xIg9fwJ_photo_search_wrapper">
                                <div id="SkTHPQ">
                                  <div class="PhotoSearch">
                                    <div class="nub"></div>
                                    <div class="input_wrapper">
                                      <input group="__w2_r7EFSf2_interaction" type="text" placeholder="Search for a photo" w2cid="r7EFSf2" id="__w2_r7EFSf2_search" /><a class="upload_link" href="#" id="__w2_r7EFSf2_upload"><span class="upload_icon"></span>Upload</a>
                                    </div>
                                    <div class="photo_container">
                                      <div class="photo_container_inner" id="__w2_r7EFSf2_container">
                                        <div class="empty_state" id="__w2_r7EFSf2_empty_state">
                                          Search for a photo or upload your own
                                          <div class="bing_attribution">Powered by</div>
                                        </div>
                                        <div class="hidden" id="__w2_r7EFSf2_spinner">
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
                          <div class="form_buttons" id="__w2_CLcUehO_inline_editor_buttons">
                            <div class="inline_editor_buttons"><a class="inline_editor_button inline_editor_cancel_button" href="#" id="__w2_CLcUehO_inline_editor_cancel">Cancel</a><a class="submit_button" href="#" action_mousedown="InlineEditorAnswerAdd" id="__w2_CLcUehO_inline_editor_submit">Update</a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="form_buttons hidden shared_form" id="__w2_hiONGdX_details_container"><a class="submit_button" id="__w2_hiONGdX_question_update">Update</a><a class="cancel_button" id="__w2_hiONGdX_question_cancel">Cancel</a>
                  </div>
                  <div id="mavwdl">
                    <div class="ActionBar Question" id="__w2_MGQRxNz_action_bar">
                      <div class="action_bar_inner">
                        <div class="primary_item"><span id="IdcZNn"><a class="WriteAnswer Button WriteAnswerButton" href="#" action_target="{&quot;qid&quot;: 1503894, &quot;type&quot;: &quot;question&quot;}" id="__w2_N8qJy8f_button"><span class="button_text" id="__w2_N8qJy8f_text">Answer</span>
                          </a>
                          </span>
                        </div>
                        <div class="primary_item">
                          <div id="veYpJV">
                            <a class="RADToggle" href="#" id="__w2_sKacFRB_toggle">
                              Request
                              <div class="action_bar_button_nub" id="__w2_sKacFRB_nub"></div>
                            </a>
                          </div>
                        </div>
                        <div class="action_item"><span id="ShyDhR"><a class="Button TwoStateButton Question secondary_action" href="#" action_target="{&quot;qid&quot;: 1503894, &quot;type&quot;: &quot;question&quot;}" action_click="QuestionFollow" id="__w2_jZMeV8B_button"><span class="button_text" id="__w2_jZMeV8B_text">Follow</span><span class="count" id="__w2_jZMeV8B_count">5.3k</span>
                          </a>
                          </span>
                        </div>
                        <div class="action_item" id="__w2_h3wc3qu_link">
                          <div id="pKquXZ"><a class="view_comments comment_link" href="#" id="__w2_YEZtx28_view_comment_link">Comments<span class="count">6+</span></a>
                          </div>
                        </div>
                        <div class="action_item">
                          <div class="hover_menu hidden hover_share_menu show_nub" id="__w2_dnS1Y5b_menu">
                            <div class="hover_menu_contents" id="__w2_dnS1Y5b_menu_contents">
                              <span class="_QuickShareContents QuestionQuickShareContents">
                                <div class="menu_list_items">
                                  <div class="menu_list_item"><a class="FacebookNetworkShare" href="" id="__w2_ovzZEtM_share"><span class="icon icon_facebook"></span><span class="text">Facebook<span class="bullet"> &middot; </span>72</span>
                                    </a>
                                  </div>
                                  <div class="menu_list_item"><a class="TwitterNetworkShare" href="https://www.twitter.com/intent/tweet?related=quora&amp;text=Question%20on%20%40Quora%3A%20What%20is%20the%20coolest%20psychological%20trick%3F&amp;url=https://www.quora.com/What-is-the-coolest-psychological-trick?srid=hzgme" id="__w2_JfXF0B0_share"><span class="icon icon_twitter"></span><span class="text">Twitter<span class="bullet"> &middot; </span>17</span></a>
                                  </div>
                                  <div class="menu_list_item"><a id="__w2_qijRrEy_copy_link">Copy Link</a>
                                  </div>
                                  <div class="menu_list_item"><span class="SimpleShareAction ShareAction QuestionSimpleShareSection"><a class="share_link feed_card" href="#" id="__w2_Vlf1NUc_share">More</a></span>
                                  </div>
                                </div>
                              </span>
                            </div>
                          </div>
                          <a class="QuestionQuickShare _QuickShare HoverMenu" href="#" id="__w2_dnS1Y5b_link">Share<span class="count">89</span></a>
                        </div>
                        <div class="action_item"><span id="sOrgkS"><a class="Downvote Button TwoStateButton Question secondary_action" href="#" action_target="{&quot;qid&quot;: 1503894, &quot;type&quot;: &quot;question&quot;}" action_click="QuestionDownvote" id="__w2_qdoVFjn_button"><span class="button_text" id="__w2_qdoVFjn_text">Downvote</span>
                          </a>
                          </span>
                        </div>
                        <div class="overflow action_item overflow_link"><a class="overflow_link" href="#" id="__w2_MGQRxNz_overflow_link"><span class="dots overflow_dots"></span></a>
                        </div>
                        <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_MGQRxNz_overflow_menu">
                          <div class="hover_menu_contents lazy" id="__w2_MGQRxNz_overflow_menu_contents"></div>
                        </div>
                      </div>
                      <div id="HtoFeZ">
                        <div class="RequestAnswersDrawer" id="__w2_GwQHE1G_drawer">
                          <div class="inner">
                            <div class="header">Request Answers:</div>
                            <div id="ONlicQ">
                              <div class="request_answers_list_item is_request_from_quora" id="__w2_DrIWEAy_list_item">
                                <div class="request_answers_icon"></div>
                                <div class="name_sig">
                                  <div class="user">Request From Quora</div>
                                </div>
                                <div class="name_sig in_active_state">
                                  <div class="user">Requesting From Quora</div>
                                </div>
                                <div class="metadata">We will distribute this question to writers, and notify you about new answers.</div>
                                <div class="metadata in_active_state">We&#039;re finding writers to answer, and will notify you about new answers.</div>
                                <a class="request_answers_button" id="__w2_DrIWEAy_request_answers_button"></a>
                              </div>
                            </div>
                            <div id="bbRGNJ">
                              <div id="__w2_ck7owMm_suggestions_list">
                                <div>
                                  <div class="request_answers_placeholder">
                                    <div class="placeholder_block placeholder_photo"></div>
                                    <div class="placeholder_block placeholder_name" style="width:101px"></div>
                                    <div class="placeholder_block placeholder_metadata" style="width:251px"></div>
                                  </div>
                                  <div class="request_answers_placeholder">
                                    <div class="placeholder_block placeholder_photo"></div>
                                    <div class="placeholder_block placeholder_name" style="width:101px"></div>
                                    <div class="placeholder_block placeholder_metadata" style="width:251px"></div>
                                  </div>
                                  <div class="request_answers_placeholder">
                                    <div class="placeholder_block placeholder_photo"></div>
                                    <div class="placeholder_block placeholder_name" style="width:101px"></div>
                                    <div class="placeholder_block placeholder_metadata" style="width:251px"></div>
                                  </div>
                                </div>
                                <div class="view_more_placeholder"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="action_bar_comments threaded_comments hidden" id="__w2_Cbh03XW_wrapper"></div>
                      <div id="taeEVe">
                        <div class="hidden" id="__w2_ffyZk6C_add_answer_editor_wrapper"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="utPyLe">
              <div class="PromptsList">
                <div id="XkYZFD"></div>
                <div id="BVSKTp"></div>
                <div id="OQubrR"></div>
                <div id="xIQCxw"></div>
                <div id="BNfvkt"></div>
                <div id="TLyXAq"></div>
                <div id="wTvjDN"></div>
                <div id="lXskaC"></div>
                <div id="pYwMQX"></div>
                <div id="HZjeEm"></div>
              </div>
            </div>
            <div id="kpEHgU">
              <div class="AnswerWikiArea" id="answer_wiki">
                <h3>Answer Wiki</h3>
                <div id="dBQLUE">
                  <div id="__w2_Lr5SBuc_wiki">
                    <div class="InlineEditor AnswerWikiInlineEditor _WikiEditorCommon inline_editor_content" id="__w2_x1zsUyq_inline_editor_content">
                      <span class="inline_editor_value">
                        <div class="truncated_q_text truncated_para_breaks" id="__w2_KOgkBth_text_snip">
                          <span id="__w2_KOgkBth_text_snip_content">
                            <span class="rendered_qtext">
                              <ul>
                                <li>When you first meet people try to notice their <b>eye color</b> while also smiling at them. It might be because you look for a second or two longer, but all I can tell you is that people really respond to it.</li>
                                <li>Pay attention to people&#039;s <b>feet</b>. If you approach two people in the middle of a conversation, and they only turn their torsos and not their feet, they don&#039;t want you to join in the conversation. Similarly if you are in a conversation with a coworker who you think is paying attention to you and their torso is turned towards you but their feet are facing in another direction, they want the conversation to end.</li>
                                <li><b><i>Foot-in-the-door</i></b> phenomenon. People are more likely to agree to do a task for you if you ask them to do something simpler first. (Gradual Commitment... makes them think you like them)</li>
                                <li><b><i>Door-in-the-face</i></b> phenomenon - Alternatively you ask them to do an unreasonable task, and they&#039;ll say no, so then you ask for what you wanted, a much more reasonable task, and they&#039;re more likely to say yes.</li>
                                <li>If you ask someone to do you a<b> small favor</b>, cognitive dissonance will make them believe that because they did that favor, they therefore must like you. {yes you all know that -- Ben Franklin}</li>
                                <li>If you ask someone a question and they only partially answer just wait. If you <b>stay silent</b> and <b>keep eye contact</b> they will usually continue talking.</li>
                                <li><b>Chew gum</b> when you&#039;re approaching a situation that would make you nervous like public speaking or bungee jumping. If we are &#039;eating&#039; something in our brains reasons that &#039;I would not be eating if I were danger. So I&#039;m not in danger”.</li>
                                <li>Avoid the sidewalk shuffle by looking intently over the person&#039;s <b>shoulder</b>, or between people&#039;s heads in a group. Your gaze shows them where you&#039;re going. They&#039;ll drift toward the opposing side / create a gap to avoid you.</li>
                                <li>People will remember not what you said but how you made them<b> feel</b>.</li>
                                <li>For <b>interviews </b>I recommend altering your psychological state beforehand. Tell yourself &quot;I&#039;ve known these people all my life. We&#039;re <b>old friends </b>catching up. I can&#039;t wait to see them&quot;. Visualize the experience, shaking hands, making eye contact, having conversation. What things can you not to wait to tell them? Hold an open pose...stand with your legs apart, hands on your hips, and shoulders back while doing this and <b>Smile</b>. This may sound cliche but you are in charge of your own psychological state and the power of suggestion is strong.</li>
                                <li>If you get yourself to be really <b>happy and excited</b> to see other people, they will react the same to you.</li>
                                <li>When people are angry at you stay <b>calm</b>. This will cause them to become even angrier and then to be ashamed about it afterwards.</li>
                                <li>If you have a <b>warm hand</b> when you shake somebody&#039;s hand, you immediately become a more desirable person.</li>
                                <li>False attribution of arousal. When you take somebody out on a first date, take them somewhere exciting that will get their heart beating. e.g. roller coaster or horror film. This gets their adrenaline up. It makes them think they enjoy spending time with you rather than the activity.</li>
                                <li>The key to confidence is walking into a room, and assuming everyone already likes you.</li>
                                <li>Refer to people you&#039;ve just met by their name. People love being referred to by their name, and it will establish a sense of trust and friendship right away.</li>
                                <li>If you make the biggest smile you can, you will automatically feel happier</li>
                                <li>The moment your alarm wakes you up, immediately react by sitting up, pump your fists and shout &quot;YEAH!&quot;</li>
                                <li>Always give your kid a choice that makes them think they are in control. For instance if you want your child to put their shoes on then say &quot;Do you want to put your star wars shoes on or your shark shoes on?&quot;</li>
                                <li>If you state 2 or more obvious facts, whatever you say after that will be taken as a fact. Even if it isn&#039;t....</li>
                              </ul>
                            </span>
                          </span>
                          &nbsp;<a class="more_link" href="#" id="__w2_KOgkBth_more_link">(more)</a> 
                        </div>
                        <div class="full_text hidden" id="__w2_KOgkBth_full_text">
                          <span id="__w2_KOgkBth_full_text_content">
                            <span class="rendered_qtext">
                              <ul>
                                <li>When you first meet people try to notice their <b>eye color</b> while also smiling at them. It might be because you look for a second or two longer, but all I can tell you is that people really respond to it.</li>
                                <li>Pay attention to people&#039;s <b>feet</b>. If you approach two people in the middle of a conversation, and they only turn their torsos and not their feet, they don&#039;t want you to join in the conversation. Similarly if you are in a conversation with a coworker who you think is paying attention to you and their torso is turned towards you but their feet are facing in another direction, they want the conversation to end.</li>
                                <li><b><i>Foot-in-the-door</i></b> phenomenon. People are more likely to agree to do a task for you if you ask them to do something simpler first. (Gradual Commitment... makes them think you like them)</li>
                                <li><b><i>Door-in-the-face</i></b> phenomenon - Alternatively you ask them to do an unreasonable task, and they&#039;ll say no, so then you ask for what you wanted, a much more reasonable task, and they&#039;re more likely to say yes.</li>
                                <li>If you ask someone to do you a<b> small favor</b>, cognitive dissonance will make them believe that because they did that favor, they therefore must like you. {yes you all know that -- Ben Franklin}</li>
                                <li>If you ask someone a question and they only partially answer just wait. If you <b>stay silent</b> and <b>keep eye contact</b> they will usually continue talking.</li>
                                <li><b>Chew gum</b> when you&#039;re approaching a situation that would make you nervous like public speaking or bungee jumping. If we are &#039;eating&#039; something in our brains reasons that &#039;I would not be eating if I were danger. So I&#039;m not in danger”.</li>
                                <li>Avoid the sidewalk shuffle by looking intently over the person&#039;s <b>shoulder</b>, or between people&#039;s heads in a group. Your gaze shows them where you&#039;re going. They&#039;ll drift toward the opposing side / create a gap to avoid you.</li>
                                <li>People will remember not what you said but how you made them<b> feel</b>.</li>
                                <li>For <b>interviews </b>I recommend altering your psychological state beforehand. Tell yourself &quot;I&#039;ve known these people all my life. We&#039;re <b>old friends </b>catching up. I can&#039;t wait to see them&quot;. Visualize the experience, shaking hands, making eye contact, having conversation. What things can you not to wait to tell them? Hold an open pose...stand with your legs apart, hands on your hips, and shoulders back while doing this and <b>Smile</b>. This may sound cliche but you are in charge of your own psychological state and the power of suggestion is strong.</li>
                                <li>If you get yourself to be really <b>happy and excited</b> to see other people, they will react the same to you.</li>
                                <li>When people are angry at you stay <b>calm</b>. This will cause them to become even angrier and then to be ashamed about it afterwards.</li>
                                <li>If you have a <b>warm hand</b> when you shake somebody&#039;s hand, you immediately become a more desirable person.</li>
                                <li>False attribution of arousal. When you take somebody out on a first date, take them somewhere exciting that will get their heart beating. e.g. roller coaster or horror film. This gets their adrenaline up. It makes them think they enjoy spending time with you rather than the activity.</li>
                                <li>The key to confidence is walking into a room, and assuming everyone already likes you.</li>
                                <li>Refer to people you&#039;ve just met by their name. People love being referred to by their name, and it will establish a sense of trust and friendship right away.</li>
                                <li>If you make the biggest smile you can, you will automatically feel happier</li>
                                <li>The moment your alarm wakes you up, immediately react by sitting up, pump your fists and shout &quot;YEAH!&quot;</li>
                                <li>Always give your kid a choice that makes them think they are in control. For instance if you want your child to put their shoes on then say &quot;Do you want to put your star wars shoes on or your shark shoes on?&quot;</li>
                                <li>If you state 2 or more obvious facts, whatever you say after that will be taken as a fact. Even if it isn&#039;t.</li>
                                <li>Low Ball Technique-Persuasive technique that involves getting someone to commit to an attractive proposition before the hidden costs are revealed.</li>
                                <li>If you think someone is watching you, simply yawn. The person will invariably yawn too.</li>
                                <li>Nodding your head up and down while asking a question substantially increases the likelihood that someone will answer affirmatively.</li>
                                <li>Ask for favors when someone is tired.</li>
                                <li>Before starting any new thing in your life just remember that you only live once, this will make you give your best shot</li>
                                <li>People LOVE hearing their name, so when you meet a group of new people, or just a person, try to remember all their names and every now and then just sprinkle in their name into the conversation. It shows that you’re specifically talking to them and noticing them, and people love being noticed.</li>
                                <li>Also love unconditionally</li>
                              </ul>
                            </span>
                          </span>
                        </div>
                      </span>
                      <a class="edit inline_editor_edit" href="#" id="__w2_x1zsUyq_inline_editor_link"><span id="__w2_x1zsUyq_inline_editor_link_text">Edit</span></a>
                    </div>
                    <div class="rteditor inline_editor_content hidden" id="__w2_x1zsUyq_inline_editor_form">
                      <div class="inline_editor_form">
                        <div class="editor_wrapper" id="__w2_FtGFtzr_editor_outer">
                          <div class="AnswerWikiEditor Editor edit_latex web" id="__w2_FtGFtzr_editor">
                            <div group="__w2_FtGFtzr_interaction" interactive="true" w2cid="FtGFtzr" id="__w2_FtGFtzr_doc"></div>
                            <div class="editor_toolbar has_new_photo_icon" id="__w2_tgknyts_toolbar">
                              <div class="scroller" id="__w2_tgknyts_scroller">
                                <div class="bar bar_link_state" id="__w2_tgknyts_bar0">
                                  <div class="left"></div>
                                  <div class="right"></div>
                                </div>
                                <div class="bar bar_regular_state" id="__w2_tgknyts_bar1">
                                  <div class="left">
                                    <div class="modifier bold" tooltip="Bold" id="__w2_tgknyts_bold"></div>
                                    <div class="modifier italic" tooltip="Italic" id="__w2_tgknyts_italic"></div>
                                    <div class="modifier unordered_list" tooltip="Bullets" id="__w2_tgknyts_unordered_list"></div>
                                    <div class="modifier ordered_list" tooltip="Numbers" id="__w2_tgknyts_ordered_list"></div>
                                    <div class="modifier quote" tooltip="Quote" id="__w2_tgknyts_quote"></div>
                                    <div class="modifier link" tooltip="Link" id="__w2_tgknyts_link"></div>
                                    <div class="modifier image" tooltip="Photo" id="__w2_tgknyts_image"></div>
                                  </div>
                                  <div class="right">
                                    <div class="modifier overflow_show" tooltip="Show more" id="__w2_tgknyts_overflow_show"></div>
                                  </div>
                                </div>
                                <div class="bar bar_overflow_state" id="__w2_tgknyts_bar2">
                                  <div class="left">
                                    <div class="modifier mention" tooltip="Mention user, topic or question" id="__w2_tgknyts_mention"></div>
                                    <div class="modifier code" tooltip="Code" id="__w2_tgknyts_code"></div>
                                    <div class="modifier math" tooltip="Math" id="__w2_tgknyts_math"></div>
                                    <div class="modifier indent" tooltip="Indent" id="__w2_tgknyts_indent"></div>
                                    <div class="modifier deindent" tooltip="Unindent" id="__w2_tgknyts_deindent"></div>
                                    <div class="modifier undo" tooltip="Undo" id="__w2_tgknyts_undo"></div>
                                    <div class="modifier redo" tooltip="Redo" id="__w2_tgknyts_redo"></div>
                                  </div>
                                  <div class="right">
                                    <div class="modifier overflow_hide" tooltip="Show less" id="__w2_tgknyts_overflow_hide"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="hidden" id="__w2_tgknyts_storage">
                                <input group="__w2_tgknyts_interaction" placeholder="Enter URL" type="url" formnovalidate="formnovalidate" w2cid="tgknyts" id="__w2_tgknyts_link_input" />
                                <div class="cite" id="__w2_tgknyts_cite">
                                  <input group="__w2_tgknyts_interaction" type="checkbox" formnovalidate="formnovalidate" w2cid="tgknyts" id="__w2_tgknyts_is_citation" />
                                  <label for="__w2_tgknyts_is_citation">Footnote</label>
                                </div>
                                <button type="button" id="__w2_tgknyts_link_save">Add</button>
                              </div>
                            </div>
                            <div class="tooltip" id="__w2_tgknyts_tooltip">
                              <div id="__w2_tgknyts_tooltip_text"></div>
                            </div>
                            <div class="hidden" id="__w2_FtGFtzr_link_selector_wrapper">
                              <div class="LinkSelector Selector" tabindex="-1" id="__w2_TVVxzVI_wrapper">
                                <div class="link_selector_input">
                                  <div class="selector_input_interaction">
                                    <div class="CharacterCounter fade_out" id="__w2_Bv9USsF_counter">250</div>
                                    <input class="selector_input text" group="__w2_TVVxzVI_interaction" type="text" placeholder="Search" value="" w2cid="TVVxzVI" id="__w2_TVVxzVI_input" />
                                    <div class="selector_spinner hidden" id="__w2_TVVxzVI_spinner">
                                      <div class="LoadingDots tiny">
                                        <div class="dot first"></div>
                                        <div class="dot second"></div>
                                        <div class="dot third"></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="selector_results_container hidden" id="__w2_TVVxzVI_results_container">
                                  <div class="selector_results_container_inner hidden" id="__w2_TVVxzVI_results"></div>
                                  <div id="__w2_TVVxzVI_empty_input_prompt"></div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form_buttons" id="__w2_x1zsUyq_inline_editor_buttons">
                          <div class="form_option light">Review the <a href="https://www.quora.com/What-are-the-guidelines-for-writing-answer-wikis-for-questions-on-Quora">guidelines</a> before editing.</div>
                          <div class="inline_editor_buttons"><a class="inline_editor_button inline_editor_cancel_button" href="#" id="__w2_x1zsUyq_inline_editor_cancel">Cancel</a><a class="submit_button" href="#" action_mousedown="InlineEditorAnswerAdd" id="__w2_x1zsUyq_inline_editor_submit">Update</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="rvDCjt">
              <div class="QuestionPageAnswerHeader">
                <div class="answer_count">100+ Answers<span class="writing_now_section"><span id="YRMjFi"></span></span>
                </div>
              </div>
            </div>
            <a class="anchor" name="answers" id="__w2_fR9LPFd_answers_anchor"></a>
            <div class="AnswerListDiv" id="__w2_fR9LPFd_answers">
              <div class="AnswerPagedList PagedList" id="edzKvw">
                <div class="pagedlist_item" id="obJTHX">
                  <div class="actionable" id="__w2_MobdV7K_actionable">
                    <div id="nvSPlF">
                      <div id="lxHtQD">
                        <a name="answer_6284467"></a>
                        <div class="Answer AnswerBase" id="__w2_TMXubl3_answer">
                          <div>
                            <div id="JYeMiQ">
                              <div class="AnswerHeader ContentHeader">
                                <div class="photo_text_layout size_small">
                                  <div class="_layout_photo_wrapper">
                                    <div class="_layout_photo">
                                      <span id="RYiESy">
                                        <div class="hover_menu hidden white_bg show_nub" id="__w2_UOY63h5_menu">
                                          <div class="hover_menu_contents" id="__w2_UOY63h5_menu_contents"> </div>
                                        </div>
                                        <span class="photo_tooltip" id="__w2_UOY63h5_link"><a href="/profile/Nikunj-Dudani" id="__w2_lCYahkC_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-10445222-50-lnonqtyvgjrumlqiosgpccjmlwtzamot.jpeg" width="50" alt="Nikunj Dudani" height="50" /></a><span id="CWpMmm"></span></span>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="_layout_text_wrapper">
                                    <div class="_layout_text">
                                      <div class="header_text_button">
                                        <div class="text_wrapper">
                                          <span class="feed_item_answer_user">
                                            <span id="xhtMQP">
                                              <span id="rspfTx">
                                                <span id="zVrasZ">
                                                  <div class="hover_menu hidden white_bg show_nub" id="__w2_TlvQO9S_menu">
                                                    <div class="hover_menu_contents" id="__w2_TlvQO9S_menu_contents"> </div>
                                                  </div>
                                                  <span id="__w2_TlvQO9S_link"><a class="user" href="/profile/Nikunj-Dudani" action_mousedown="UserLinkClickthrough" id="__w2_TlvQO9S_name_link">Nikunj Dudani</a></span>
                                                </span>
                                                <span class="IdentityNameCredential ActorNameCredential">, works at École Polytechnique Fédérale de Lausanne</span>
                                              </span>
                                            </span>
                                          </span>
                                          <div id="gsbdmu">
                                            <div class="CredibilityFacts pass_color_to_child_links"><span id="SmRXRC"><a class="answer_permalink" href="/What-is-the-coolest-psychological-trick/answer/Nikunj-Dudani" action_mousedown="AnswerPermalinkClickthrough" id="__w2_K3GFRO2_link">Written Jul 30, 2014</a></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="button_wrapper">
                                          <div id="BkZpRS"><a class="Button TwoStateButton UserFollowHeader UserFollowHeaderIconNoBorder User UserFollowHeaderIcon main_button user_follow_button follow_button" href="#" action_target="{&quot;type&quot;: &quot;user&quot;, &quot;uid&quot;: 10445222}" action_click="UserFollow" id="__w2_nxCWD1G_button"><span class="button_text" id="__w2_nxCWD1G_text"></span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="__w2_TMXubl3_answer_content">
                              <div id="wqfAgA">
                                <div class="inline_editor_content" id="__w2_XNdi4eG_content">
                                  <span class="inline_editor_value">
                                    <div id="zIcGCZ"></div>
                                    <span class="rendered_qtext">
                                      I would like to mention a couple of observations in Social Psychology which can be used as tools to play &quot;tricks&quot;. I will first mention few experiments/ tricks and later explain the underlying theory.<br /><br />1. <br /><b>Experiment:</b><br />In Festinger and <span class="qlink_container"><a href="http://en.wikipedia.org/wiki/Merrill_Carlsmith" rel="noopener nofollow" target="_blank" onclick="return Q.openUrl(this);" class="external_link" data-qt-tooltip="wikipedia.org">Carlsmith</a></span>&#039;s 1959 experiment,&nbsp; students were asked to spend an hour on boring and tedious tasks (e.g., turning pegs a quarter turn, over and over again). The tasks were designed to generate a strong, negative attitude. Once the subjects had done this, the experimenters asked some of them to talk to another subject, waiting outside the door, and explain to them that the tasks were interesting and engaging. (These waiting &quot;subjects&quot; were actors appointed by the experimenters). Some participants were paid $20 (equivalent to $162 in present day terms) for this favour, another group was paid $1 (equivalent to $8 in present day terms), and a control group was not asked to perform the favour.
                                      <br />
                                      <br />When asked to rate the boring tasks at the conclusion of the study (not in the presence of the other &quot;subject&quot;), those in the $1 group rated them more positively than those in the $20 and control groups. This was explained by Festinger and Carlsmith as evidence for &quot;cognitive dissonance&quot;. The researchers theorized that people experienced dissonance between the conflicting cognitions, &quot;I told someone that the task was interesting&quot;, and &quot;I actually found it boring.&quot; When paid only $1, students were forced to internalize the attitude they were induced to express, because they had no other justification. Those in the $20 condition, however, had an obvious external justification for their behaviour, and thus experienced less dissonance.
                                      <br />
                                      <br /><b>Cognitive Dissonance: </b>
                                      <br />In psychology, cognitive dissonance is the excessive mental stress and discomfort experienced by an individual who (1) holds two or more contradictory beliefs, ideas, or values at the same time or (2) is confronted by new information that conflicts with existing beliefs, ideas, or values. Included, stress and discomfort may also arise within an individual who holds a belief and performs a contradictory action or reaction.
                                      <br />
                                      <br /><span class="qlink_container"><a href="http://en.wikipedia.org/wiki/Leon_Festinger" rel="noopener nofollow" target="_blank" onclick="return Q.openUrl(this);" class="external_link" data-qt-tooltip="wikipedia.org">Leon Festinger</a></span>&#039;s theory of cognitive dissonance focuses on how humans strive for internal consistency. When inconsistency (dissonance) is experienced, individuals largely become psychologically distressed. His basic hypotheses are listed below:
                                      <br />
                                      <ol>
                                        <li>&quot;The existence of dissonance, being psychologically uncomfortable, will motivate the person to try to reduce the dissonance and achieve consonance&quot;</li>
                                        <li>&quot;When dissonance is present, in addition to trying to reduce it, the person will actively avoid situations and information which would likely increase the dissonance&quot;</li>
                                      </ol>
                                      <br />A video of the actual experiment is added:
                                      <br />
                                      <div class="qtext_embed thumbnail" data-video-provider="youtube" data-embed="&lt;iframe width=&quot;100%&quot; height=&quot;100%&quot; src=&quot;//www.youtube.com/embed/korGK0yGIDo?wmode=opaque&amp;amp;autoplay=1&amp;amp;autohide=1&amp;amp;iv_load_policy=3&amp;amp;enablejsapi=1&quot; frameborder=&quot;0&quot; allowfullscreen&gt;&lt;/iframe&gt;" data-yt-id="korGK0yGIDo" style="background: url('https://img.youtube.com/vi/korGK0yGIDo/0.jpg') center center no-repeat;"></div>
                                      <br /><b>The trick: </b>
                                      <br />Cognitive Dissonance can be used in many ways to make some people stop doing something or to bend them slightly to something else.&nbsp; For example there is a story (I could not find the link) about a barber. Few children used to cross a barber&#039;s shop and abuse him everyday. This continued for a few days, after which the barber used his trick. Everyday, when the children would come and abuse him he would give each a penny and say that he is thankful that they abused him. After a few days the children stopped abusing as they experienced cognitive dissonance as they were being rewarded for something they should be rebuked for.
                                      <br />
                                      <br />
                                      <br /><b>2. </b>
                                      <br /><b>Experiment:</b>
                                      <br />In Dennis Regan&#039;s experiment in 1971, he had subjects believe they were in an “art appreciation” experiment with a partner, who was really Regan’s assistant. In the experiment the assistant would disappear for a two-minute break and bring back a soft drink for the subject. After the art experiment was through, the assistant asked the subject to buy raffle tickets from him. In the control group the assistant behaved in exactly the same manner, but did not buy the subject a drink. The subjects who had received the favor, a soft drink, bought more raffle tickets than those in the control group despite the fact that they hadn’t asked for the drink to begin with. Regan also had the subjects fill out surveys after they finished the experiment and found that whether they personally liked the assistant or not had no effect on how many tickets they bought. One problem of reciprocity, however, focuses on the unequal profit obtained from the concept of reciprocal concessions. The emotional burden to repay bothers some more than others, causing some to overcompensate with more than what was given originally. In the Regan study, subjects paid more money for the tickets than the cost of the (un-requested) soft drink.This is the theory of Reciprocity.
                                      <br />
                                      <br /><b>Reciprocity</b>
                                      <br />In social psychology, reciprocity refers to responding to a positive action with another positive action, rewarding kind actions. As a social construct, reciprocity means that in response to friendly actions, people are frequently much nicer and much more cooperative than predicted by the self-interest model; conversely, in response to hostile actions they are frequently much more nasty and even brutal.
                                      <br />
                                      <br /><b>The trick:</b>
                                      <br />Simply, do favour for people and they will be willing to return the favour, with greater magnitude. Another theory with the same effect but different action is the <span class="qlink_container"><a href="http://en.wikipedia.org/wiki/Ben_Franklin_effect" rel="noopener nofollow" target="_blank" onclick="return Q.openUrl(this);" class="external_link" data-qt-tooltip="wikipedia.org">Ben Franklin effect</a></span>, which states that people who have done you a favour once will be more willing to do it again.
                                      <br />
                                      <br /><b>Notes: </b>Please note that these experiments are performed on a small selected group of people and thus cannot be testified or certified like a scientific theory. These are observations by social psychologists and thus should not be taken as absolute truth.
                                    </span>
                                    <div id="wvPWwu">
                                      <div class="ContentFooter AnswerFooter" id="__w2_CFiMyJy_content_footer"><span id="oaWpPV"><span class="meta_num">197.7k</span> Views</span><span class="bullet"> &middot; </span><a class="AnswerVoterListModalLink VoterListModalLink" href="/api/mobile_expanded_voter_list?type=answer&amp;key=RO2N02vYu9q" id="__w2_lOz4Ccx_modal_link">View Upvotes</a><span id="hzeaDJ"></span><span id="RGsDiq"></span>
                                      </div>
                                    </div>
                                  </span>
                                  <div class="hidden" id="__w2_XNdi4eG_loading"><span class="loading">Loading…</span>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_XNdi4eG_editor"></div>
                              </div>
                            </div>
                            <div id="bygVaK">
                              <div class="Answer ActionBar" id="__w2_jcT1V5G_action_bar">
                                <div class="action_bar_inner">
                                  <span id="wmznGL"><a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 6284467, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_m0Z1rFD_button"><span class="button_text" id="__w2_m0Z1rFD_text">Upvote</span><span class="count" id="__w2_m0Z1rFD_count">391</span>
                                  </a>
                                  </span><span id="XWkCli"><a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 6284467, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_CrK6bap_button"><span class="button_text" id="__w2_CrK6bap_text">Downvote</span>
                                  </a>
                                  </span>
                                  <div class="action_item" id="__w2_Hwgg8C4_link"><span id="DSrHwg"><a class="view_comments comment_link" href="#" id="__w2_hvSOkw3_view_comment_link">Comments<span class="count">5+</span>
                                    </a>
                                    </span>
                                  </div>
                                  <div class="action_item">
                                    <div id="HuVtlN">
                                      <div class="ShareSectionIcons">
                                        <a class="FacebookNetworkShare" href="" id="__w2_rDVl8Pk_share"><span class="icon icon_facebook"></span><span class="text"> </span></a><a class="TwitterNetworkShare" href="https://www.twitter.com/intent/tweet?related=quora&amp;text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20Nikunj%20Dudani&amp;url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Nikunj-Dudani?srid=hzgme&amp;share=dbcc8dfb" id="__w2_aBAFjP5_share"><span class="icon icon_twitter"></span><span class="text"> </span></a>
                                        <div id="XEnstI">
                                          <div class="hover_menu hidden hover_share_menu show_nub" id="__w2_Nl1wmvR_menu">
                                            <div class="hover_menu_contents" id="__w2_Nl1wmvR_menu_contents">
                                              <span class="_QuickShareContents AnswerQuickShareContents">
                                                <div class="menu_list_items">
                                                  <div class="menu_list_item"><a id="__w2_hA42zHO_copy_link">Copy Link</a></div>
                                                  <div class="menu_list_item">
                                                    <div class="EmbedModalLink"><a href="#" id="__w2_iEL6q5t_modal_link">Embed</a></div>
                                                  </div>
                                                  <div class="menu_list_item"><span class="SimpleShareAction ShareAction AnswerSimpleShareSection"><a class="share_link feed_card" href="#" id="__w2_xJITWXg_share">More</a></span>
                                                  </div>
                                                </div>
                                              </span>
                                            </div>
                                          </div>
                                          <a class="AnswerQuickShare _QuickShare HoverMenu" href="#" id="__w2_Nl1wmvR_link">Share<span class="count">7</span></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overflow action_item overflow_link"><a class="overflow_link" href="#" id="__w2_jcT1V5G_overflow_link"><span class="dots overflow_dots"></span></a>
                                  </div>
                                  <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_jcT1V5G_overflow_menu">
                                    <div class="hover_menu_contents lazy" id="__w2_jcT1V5G_overflow_menu_contents"></div>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_capMibR_wrapper"></div>
                                <div>
                                  <div id="ndmRoj"></div>
                                </div>
                                <div class="action_bar_comments threaded_comments hidden" id="__w2_W2HFkjU_wrapper"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pagedlist_item" id="XQksCb">
                  <div class="actionable" id="__w2_uI18JML_actionable">
                    <div id="qFJNOp">
                      <div id="YxvDFp">
                        <a name="answer_31210393"></a>
                        <div class="Answer AnswerBase" id="__w2_A0WwzTZ_answer">
                          <div>
                            <div id="lMPcRA">
                              <div class="AnswerHeader ContentHeader">
                                <div class="photo_text_layout size_small">
                                  <div class="_layout_photo_wrapper">
                                    <div class="_layout_photo">
                                      <span id="vKAylT">
                                        <div class="hover_menu hidden white_bg show_nub" id="__w2_OoBxEla_menu">
                                          <div class="hover_menu_contents" id="__w2_OoBxEla_menu_contents"> </div>
                                        </div>
                                        <span class="photo_tooltip" id="__w2_OoBxEla_link"><a href="/profile/Kristina-Smith-44" id="__w2_Z3c8tk2_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-215725546-50-oueywzvtmgejdtddttejpwtkxozbkqxa.jpeg" width="50" alt="Kristina Smith" height="50" /></a><span id="RttfYx"></span></span>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="_layout_text_wrapper">
                                    <div class="_layout_text">
                                      <div class="header_text_button">
                                        <div class="text_wrapper">
                                          <span class="feed_item_answer_user">
                                            <span id="YsWlfw">
                                              <span id="XWAkys">
                                                <span id="rHZGTH">
                                                  <div class="hover_menu hidden white_bg show_nub" id="__w2_OrVRwqo_menu">
                                                    <div class="hover_menu_contents" id="__w2_OrVRwqo_menu_contents"> </div>
                                                  </div>
                                                  <span id="__w2_OrVRwqo_link"><a class="user" href="/profile/Kristina-Smith-44" action_mousedown="UserLinkClickthrough" id="__w2_OrVRwqo_name_link">Kristina Smith</a></span>
                                                </span>
                                                <span class="IdentityNameCredential ActorNameCredential">, Life coach, Productivity Hacker, helping people live a life worth remembering</span>
                                              </span>
                                            </span>
                                          </span>
                                          <div id="kVydaY">
                                            <div class="CredibilityFacts pass_color_to_child_links"><span id="nYIVoB"><a class="answer_permalink" href="/What-is-the-coolest-psychological-trick/answer/Kristina-Smith-44" action_mousedown="AnswerPermalinkClickthrough" id="__w2_Suy8QUg_link">Written Nov 22</a></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="button_wrapper">
                                          <div id="LDOxQi"><a class="Button TwoStateButton UserFollowHeader UserFollowHeaderIconNoBorder User UserFollowHeaderIcon main_button user_follow_button follow_button" href="#" action_target="{&quot;type&quot;: &quot;user&quot;, &quot;uid&quot;: 215725546}" action_click="UserFollow" id="__w2_tmrvLBj_button"><span class="button_text" id="__w2_tmrvLBj_text"></span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="__w2_A0WwzTZ_answer_content">
                              <div id="yUiloI">
                                <div class="inline_editor_content" id="__w2_TzsYbBB_content">
                                  <span class="inline_editor_value">
                                    <div id="sGKNGv"></div>
                                    <span class="rendered_qtext">
                                      <div class="qtext_image_wrapper">
                                        <canvas class="qtext_image_placeholder portrait qtext_image zoomable_in_feed" width="500" height="750" data-src="data:image/JPEG;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAIBAQEBAQIBAQECAgICAgQDAgICAgUEBAMEBgUGBgYFBgYGBwkIBgcJBwYGCAsICQoKCgoKBggLDAsKDAkKCgr/wAALCAAKAAcBAREA/8QAFQABAQAAAAAAAAAAAAAAAAAABgj/xAAkEAABBAECBgMAAAAAAAAAAAACAQMEBgUIEQAJChITIQcUUf/aAAgBAQAAPwBty69UFM6hD5PzVV1y1Wlsz8NcJbldr2LelM5FvB/TdfjAKE543UacdMDkgImWyIY7OIqRL0nVnsth5v1Yaz9hnTgbotgNsZks3UAvAI9yISrsvb63/PXH/9k="></canvas>
                                        <img class="portrait qtext_image zoomable_in_feed lazy_loaded lazy_loading" src="" data-src="<?=$baseUrl?>/skins/images/main-qimg-efbbb57b8b92dc351e7f06f65ca7967e-c?convert_to_webp=true" master_src="<?=$baseUrl?>/skins/images/main-qimg-efbbb57b8b92dc351e7f06f65ca7967e-c?convert_to_webp=true" master_w="500" master_h="750"/>
                                      </div>
                                      <p class="qtext_para">Psychological tricks work wonders to get the best out of anyone. Here are some of the daily psychological habits that can boost your brain performance and tricks it to achieve anything you want.</p>
                                      <p class="qtext_para"><b>1) Quality sleep and Short breaks</b></p>
                                      <p class="qtext_para">The human brain is more productive than any machine in the world but there is just one difference between both. Our brain needs break and a quality sleep to get back on with life. Instead of completing the task in hand completely exhausted its better you take small breaks like sing a song, grab a snack, go out into nature or maybe playing your guitar. This will keep your moods up and help you in giving more than 100% every time you get to your work desk. This needs to be balanced with a quality sleep of 7–8 hours a day.</p>
                                      <p class="qtext_para"><b>2)Challenge your brain. Period.</b></p>
                                      <p class="qtext_para">Every once in a while do something that makes you uncomfortable or makes you scared, hence, challenges your abilities. Stepping out of your comfort zone not just helps you break your limits but offers you mental growth. This keeps your mind alert and prevents it to become lazy. So if you are an introvert do a stand-up, if you avoid talking to people start teaching(maybe in an NGO) etc.</p>
                                      <p class="qtext_para"><b>3)Brain boosting diet</b></p>
                                      <p class="qtext_para">Food is really underappreciated when it comes to brain development and health. Constant flow of vitamins, minerals, fatty acids and minerals go a long way in creating that perfect functioning of the brain. Some super brain foods you must start with right now are Avocados, Blueberries, Fish (especially Salmon) , Eggs, Spinach, Walnuts( the kings in this department).</p>
                                      <p class="qtext_para">A reduced caloric intake has been seen as directly proportional to a lower risk of mental decline in old age. Vitamins like Folic acid, B6, and B12 help lower your homocysteine levels, high levels of which have been linked to an increased risk of dementia. So eat smart and stay smart.</p>
                                      <p class="qtext_para">For more amazing psychological hacks check out this blog on <span class="qlink_container"><a href="http://snip.ly/smgho" rel="noopener nofollow" target="_blank" onclick="return Q.openUrl(this);" class="external_link" data-qt-tooltip="snip.ly"><b>6 ways to improve Brain Performance</b></a></span>.</p>
                                      <p class="qtext_para"><b>4)Hit the Gym or get into Yoga</b>
                                      </p>
                                      <p class="qtext_para">In a healthy body, resides a healthy brain. Scientifically exercise is important to make sure oxygen rich blood reaches your brain and other parts of your body. In short, it decontaminates your body. So do something towards keeping yourself fit and engage into physical exercise. If you area working parent and can’t spare time for exercise, take your kids into the field every evening and just run with them. The point is to pump up yourself.</p>
                                      <p class="qtext_para"><b>5)Laughter Therapy</b>
                                      </p>
                                      <p class="qtext_para">This one is my all time favorite and very simple. Just laugh. Just smile. The reason that laughter is the best medicine because it strengthens your immune system, boosts your energy, destroys pain and negates stress in the body. So crack jocks with your colleagues, being serious sometimes is great but being serious every time is equally terrible. Watch a funny movie, attend stand-up comedy shows and make fun of your friends(IN A POSITIVE SENSE).</p>
                                      <p class="qtext_para">I wish you the best!</p>
                                    </span>
                                    <div id="GfohhU">
                                      <div class="ContentFooter AnswerFooter" id="__w2_scS4e3y_content_footer"><span id="gIsxOc"><span class="meta_num">5.8k</span> Views</span><span class="bullet"> &middot; </span><a class="AnswerVoterListModalLink VoterListModalLink" href="/api/mobile_expanded_voter_list?type=answer&amp;key=IMSv8QH4O3d" id="__w2_XJnWBJj_modal_link">View Upvotes</a><span id="avZtmQ"></span><span id="TeKWnX"></span>
                                      </div>
                                    </div>
                                  </span>
                                  <div class="hidden" id="__w2_TzsYbBB_loading"><span class="loading">Loading…</span>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_TzsYbBB_editor"></div>
                              </div>
                            </div>
                            <div id="fSbrBR">
                              <div class="Answer ActionBar" id="__w2_aj9qyPn_action_bar">
                                <div class="action_bar_inner">
                                  <span id="zLOENo"><a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 31210393, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_JmSVX0h_button"><span class="button_text" id="__w2_JmSVX0h_text">Upvote</span><span class="count" id="__w2_JmSVX0h_count">33</span>
                                  </a>
                                  </span><span id="nHXNUO"><a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 31210393, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_bsJf5Wr_button"><span class="button_text" id="__w2_bsJf5Wr_text">Downvote</span>
                                  </a>
                                  </span>
                                  <div class="action_item" id="__w2_RpEP1nD_link"><span id="xOaDOc"><a class="view_comments comment_link" href="#" id="__w2_dZYtOBC_view_comment_link">Comment</a></span>
                                  </div>
                                  <div class="action_item">
                                    <div id="HKgSET">
                                      <div class="ShareSectionIcons">
                                        <a class="FacebookNetworkShare" href="" id="__w2_wGqjJxr_share"><span class="icon icon_facebook"></span><span class="text"> </span></a><a class="TwitterNetworkShare" href="https://www.twitter.com/intent/tweet?related=quora&amp;text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20Kristina%20Smith&amp;url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Kristina-Smith-44?srid=hzgme&amp;share=b871eda3" id="__w2_XDAuano_share"><span class="icon icon_twitter"></span><span class="text"> </span></a>
                                        <div id="seKwUp">
                                          <div class="hover_menu hidden hover_share_menu show_nub" id="__w2_FGkImsa_menu">
                                            <div class="hover_menu_contents" id="__w2_FGkImsa_menu_contents">
                                              <span class="_QuickShareContents AnswerQuickShareContents">
                                                <div class="menu_list_items">
                                                  <div class="menu_list_item"><a id="__w2_iTPW4vI_copy_link">Copy Link</a></div>
                                                  <div class="menu_list_item">
                                                    <div class="EmbedModalLink"><a href="#" id="__w2_KdBNpCn_modal_link">Embed</a></div>
                                                  </div>
                                                  <div class="menu_list_item"><span class="SimpleShareAction ShareAction AnswerSimpleShareSection"><a class="share_link feed_card" href="#" id="__w2_fTwmHSO_share">More</a></span>
                                                  </div>
                                                </div>
                                              </span>
                                            </div>
                                          </div>
                                          <a class="AnswerQuickShare _QuickShare HoverMenu" href="#" id="__w2_FGkImsa_link">Share</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overflow action_item overflow_link"><a class="overflow_link" href="#" id="__w2_aj9qyPn_overflow_link"><span class="dots overflow_dots"></span></a>
                                  </div>
                                  <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_aj9qyPn_overflow_menu">
                                    <div class="hover_menu_contents lazy" id="__w2_aj9qyPn_overflow_menu_contents"></div>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_yU8si6W_wrapper"></div>
                                <div>
                                  <div id="qCZXWD"></div>
                                </div>
                                <div class="action_bar_comments threaded_comments hidden" id="__w2_mRB9QGU_wrapper"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pagedlist_item" id="eQfLiW">
                  <div class="actionable" id="__w2_Zs4ebaz_actionable">
                    <div id="YuxFbu">
                      <div id="aLWPBY">
                        <a name="answer_28769652"></a>
                        <div class="Answer AnswerBase" id="__w2_Wv5mOJE_answer">
                          <div>
                            <div id="FIrSiY">
                              <div class="AnswerHeader ContentHeader">
                                <div class="photo_text_layout size_small">
                                  <div class="_layout_photo_wrapper">
                                    <div class="_layout_photo">
                                      <span id="PjHsUu">
                                        <div class="hover_menu hidden white_bg show_nub" id="__w2_MruQZLu_menu">
                                          <div class="hover_menu_contents" id="__w2_MruQZLu_menu_contents"> </div>
                                        </div>
                                        <span class="photo_tooltip" id="__w2_MruQZLu_link"><a href="/profile/Sam-Pittenger" id="__w2_v1iTUMD_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-58702170-50-ysnvbjqrymtwaaygxoasohhibminxvic.jpeg" width="50" alt="Sam Pittenger" height="50" /></a><span id="LuFLfh"></span></span>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="_layout_text_wrapper">
                                    <div class="_layout_text">
                                      <div class="header_text_button">
                                        <div class="text_wrapper">
                                          <span class="feed_item_answer_user">
                                            <span id="Lwrehj">
                                              <span id="aWrysp">
                                                <span id="RXoEUv">
                                                  <div class="hover_menu hidden white_bg show_nub" id="__w2_KlhxRoz_menu">
                                                    <div class="hover_menu_contents" id="__w2_KlhxRoz_menu_contents"> </div>
                                                  </div>
                                                  <span id="__w2_KlhxRoz_link"><a class="user" href="/profile/Sam-Pittenger" action_mousedown="UserLinkClickthrough" id="__w2_KlhxRoz_name_link">Sam Pittenger</a></span>
                                                </span>
                                                <span class="IdentityNameCredential ActorNameCredential">, Tricking myself one day at a time.</span>
                                              </span>
                                            </span>
                                          </span>
                                          <div id="onTNgr">
                                            <div class="CredibilityFacts pass_color_to_child_links"><span id="vuLEmD"><a class="answer_permalink" href="/What-is-the-coolest-psychological-trick/answer/Sam-Pittenger" action_mousedown="AnswerPermalinkClickthrough" id="__w2_wXbopZc_link">Written Oct 5</a></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="button_wrapper">
                                          <div id="AnikSV"><a class="Button TwoStateButton UserFollowHeader UserFollowHeaderIconNoBorder User UserFollowHeaderIcon main_button user_follow_button follow_button" href="#" action_target="{&quot;type&quot;: &quot;user&quot;, &quot;uid&quot;: 58702170}" action_click="UserFollow" id="__w2_bjseGAu_button"><span class="button_text" id="__w2_bjseGAu_text"></span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="__w2_Wv5mOJE_answer_content">
                              <div id="DMPXMo">
                                <div class="inline_editor_content" id="__w2_LkYFShd_content">
                                  <span class="inline_editor_value">
                                    <div id="ZRdydV"></div>
                                    <span class="rendered_qtext">
                                      <p class="qtext_para"><b>The Three-Second Rule:</b></p>
                                      <div class="qtext_image_wrapper">
                                        <canvas class="qtext_image_placeholder portrait qtext_image zoomable_in_feed" width="375" height="388" data-src="data:image/JPEG;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAIBAQEBAQIBAQECAgICAgQDAgICAgUEBAMEBgUGBgYFBgYGBwkIBgcJBwYGCAsICQoKCgoKBggLDAsKDAkKCgr/2wBDAQICAgICAgUDAwUKBwYHCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgr/wAARCAAKAAoDASIAAhEBAxEB/8QAFwAAAwEAAAAAAAAAAAAAAAAABAUGB//EACkQAAEDAwAJBQEAAAAAAAAAAAECAwQFBgcAERITISIkMUEICTJCUXH/xAAVAQEBAAAAAAAAAAAAAAAAAAACBf/EAB4RAAIBAwUAAAAAAAAAAAAAAAECAAMREgQFQVGh/9oADAMBAAIRAxEAPwDJrT9vvBTWPa3nFjFKIESEo7pM+5JDDtYkIAIaZSXOdI3iSo6wACQNZ7LDRscOkuvUGNtq4r6gI4nvyhWpP8HAaEeoTIuQbkxFZVKuK+qzPit0mRFbjTao662lhDp2WglSiAgeE9h4GkK/Eib5fSt/I/QfugG2aQ1GOPXJlGliECqLW9n/2Q=="></canvas>
                                        <img class="portrait qtext_image zoomable_in_feed lazy_loaded lazy_loading" src="" data-src="<?=$baseUrl?>/skins/images/main-qimg-6a56ddb885149890018bcfabf9078f67-c?convert_to_webp=true" master_src="<?=$baseUrl?>/skins/images/main-qimg-6a56ddb885149890018bcfabf9078f67-c?convert_to_webp=true" master_w="375" master_h="388"/>
                                      </div>
                                      <p class="qtext_para">For clarity, the Three-Second Rule we’re referring to is unrelated to the lie we&#039;re all told as children that fallen food is somehow germ free if picked up and eaten within a number of seconds. Another story, another day…</p>
                                      <p class="qtext_para">In a nutshell, our<b> Three-Second Rule allows you to instantly correct any ill or negative feeling you personally have towards someone.</b></p>
                                      <p class="qtext_para"><i>Scenario:</i></p>
                                      <p class="qtext_para">You work with a colleague, we’ll call him Jerry. Jerry works hard but tends to speak very loudly, makes unfunny side comments and publicly considers himself to be one of the smarter guys around the office. It’s hard to like Jerry—and you find yourself grinding your teeth when he’s around.</p>
                                      <p class="qtext_para">As you arrive to work one morning you find out Jerry just got the promotion you’d been hoping for. A slew of negative thoughts come rushing through your head and again commences the grinding of teeth…</p>
                                      <p class="qtext_para">*Introducing the Three-Second Rule* As your skin begins to turn a bright red and steam fumes from your ears you internally acknowledge that you are upset and force yourself to remain calm for <b>3 seconds…during which time you give Jerry a genuine compliment. </b>You say to yourself, “Jerry is one of the hardest working guys in the office. He really deserves to be acknowledged for his hard work.” After doing so your skin returns to a normal peach shade and you move on with your day.</p>
                                      <p class="qtext_para"><b>Anytime a negative feeling begins to develop for someone in your life, take a breather—3 seconds is all—and give them a genuine compliment. </b>You’ll experience a powerful thing. Your heart will instantly soften…and if done with true sincerity this technique will be easier to use the following time.</p>
                                      <p class="qtext_para">You’ll become someone who sees the best in people. And that’s worth three seconds.</p>
                                    </span>
                                    <div id="PwjtfL">
                                      <div class="ContentFooter AnswerFooter" id="__w2_isiBWYV_content_footer"><span id="KRHMtS"><span class="meta_num">63k</span> Views</span><span class="bullet"> &middot; </span><a class="AnswerVoterListModalLink VoterListModalLink" href="/api/mobile_expanded_voter_list?type=answer&amp;key=djEvzT3qt2D" id="__w2_gmVwRmJ_modal_link">View Upvotes</a><span id="rxsMRS"></span><span id="cGUZve"></span>
                                      </div>
                                    </div>
                                  </span>
                                  <div class="hidden" id="__w2_LkYFShd_loading"><span class="loading">Loading…</span>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_LkYFShd_editor"></div>
                              </div>
                            </div>
                            <div id="SFFzju">
                              <div class="Answer ActionBar" id="__w2_Lc8cpzl_action_bar">
                                <div class="action_bar_inner">
                                  <span id="uayJLx"><a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 28769652, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_gGAciCC_button"><span class="button_text" id="__w2_gGAciCC_text">Upvote</span><span class="count" id="__w2_gGAciCC_count">1.3k</span>
                                  </a>
                                  </span><span id="teGTtD"><a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 28769652, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_z3DetXf_button"><span class="button_text" id="__w2_z3DetXf_text">Downvote</span>
                                  </a>
                                  </span>
                                  <div class="action_item" id="__w2_DhquLBE_link"><span id="PMRbuS"><a class="view_comments comment_link" href="#" id="__w2_BHS1OD9_view_comment_link">Comments<span class="count">13</span>
                                    </a>
                                    </span>
                                  </div>
                                  <div class="action_item">
                                    <div id="DHtJzH">
                                      <div class="ShareSectionIcons">
                                        <a class="FacebookNetworkShare" href="" id="__w2_DyYLlhQ_share"><span class="icon icon_facebook"></span><span class="text"> </span></a><a class="TwitterNetworkShare" href="https://www.twitter.com/intent/tweet?related=quora&amp;text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20Sam%20Pittenger&amp;url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Sam-Pittenger?srid=hzgme&amp;share=e6148033" id="__w2_kj2gqHp_share"><span class="icon icon_twitter"></span><span class="text"> </span></a>
                                        <div id="UvsqKb">
                                          <div class="hover_menu hidden hover_share_menu show_nub" id="__w2_Iazcala_menu">
                                            <div class="hover_menu_contents" id="__w2_Iazcala_menu_contents">
                                              <span class="_QuickShareContents AnswerQuickShareContents">
                                                <div class="menu_list_items">
                                                  <div class="menu_list_item"><a id="__w2_qEUZ9zc_copy_link">Copy Link</a></div>
                                                  <div class="menu_list_item">
                                                    <div class="EmbedModalLink"><a href="#" id="__w2_RcoTNrU_modal_link">Embed</a></div>
                                                  </div>
                                                  <div class="menu_list_item"><span class="SimpleShareAction ShareAction AnswerSimpleShareSection"><a class="share_link feed_card" href="#" id="__w2_BkKugM9_share">More</a></span>
                                                  </div>
                                                </div>
                                              </span>
                                            </div>
                                          </div>
                                          <a class="AnswerQuickShare _QuickShare HoverMenu" href="#" id="__w2_Iazcala_link">Share<span class="count">1</span></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overflow action_item overflow_link"><a class="overflow_link" href="#" id="__w2_Lc8cpzl_overflow_link"><span class="dots overflow_dots"></span></a>
                                  </div>
                                  <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_Lc8cpzl_overflow_menu">
                                    <div class="hover_menu_contents lazy" id="__w2_Lc8cpzl_overflow_menu_contents"></div>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_IVny324_wrapper"></div>
                                <div>
                                  <div id="CkZDDr"></div>
                                </div>
                                <div class="action_bar_comments threaded_comments hidden" id="__w2_yizZTls_wrapper"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pagedlist_item" id="DyNhMh">
                  <div class="actionable" id="__w2_uzfqJCj_actionable">
                    <div id="qtXuNo">
                      <div id="CqTgsl">
                        <a name="answer_7139696"></a>
                        <div class="Answer AnswerBase" id="__w2_oyxV0M3_answer">
                          <div>
                            <div id="YvnJGm">
                              <div class="AnswerHeader ContentHeader">
                                <div class="photo_text_layout size_small">
                                  <div class="_layout_photo_wrapper">
                                    <div class="_layout_photo">
                                      <span id="KZydPC">
                                        <div class="hover_menu hidden white_bg show_nub" id="__w2_AhhzFix_menu">
                                          <div class="hover_menu_contents" id="__w2_AhhzFix_menu_contents"> </div>
                                        </div>
                                        <span class="photo_tooltip" id="__w2_AhhzFix_link"><a href="/profile/Amal-Rafeeq" id="__w2_rlapU7J_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-14219260-50-iaxsqbxuhhephhybzjzoujkfffzpxmxe.jpeg" width="50" alt="Amal Rafeeq" height="50" /></a><span id="GitOBk"></span></span>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="_layout_text_wrapper">
                                    <div class="_layout_text">
                                      <div class="header_text_button">
                                        <div class="text_wrapper">
                                          <span class="feed_item_answer_user">
                                            <span id="YQAyoK">
                                              <span id="bPfyQU">
                                                <span id="PfzByG">
                                                  <div class="hover_menu hidden white_bg show_nub" id="__w2_axCiOlC_menu">
                                                    <div class="hover_menu_contents" id="__w2_axCiOlC_menu_contents"> </div>
                                                  </div>
                                                  <span id="__w2_axCiOlC_link"><a class="user" href="/profile/Amal-Rafeeq" action_mousedown="UserLinkClickthrough" id="__w2_axCiOlC_name_link">Amal Rafeeq</a></span>
                                                </span>
                                                <span class="IdentityNameCredential ActorNameCredential">, Behavioral Psychologist</span>
                                              </span>
                                            </span>
                                          </span>
                                          <div id="uUocoC">
                                            <div class="CredibilityFacts pass_color_to_child_links"><span id="fzkUCB"><a class="answer_permalink" href="/What-is-the-coolest-psychological-trick/answer/Amal-Rafeeq" action_mousedown="AnswerPermalinkClickthrough" id="__w2_MvbNBqh_link">Updated May 30, 2015</a></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="button_wrapper">
                                          <div id="TWdEbJ"><a class="Button TwoStateButton UserFollowHeader UserFollowHeaderIconNoBorder User UserFollowHeaderIcon main_button user_follow_button follow_button" href="#" action_target="{&quot;type&quot;: &quot;user&quot;, &quot;uid&quot;: 14219260}" action_click="UserFollow" id="__w2_ibHdvbQ_button"><span class="button_text" id="__w2_ibHdvbQ_text"></span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="__w2_oyxV0M3_answer_content">
                              <div id="bDkyFc">
                                <div class="inline_editor_content" id="__w2_jQqtqC9_content">
                                  <span class="inline_editor_value">
                                    <div id="Edixef"></div>
                                    <span class="rendered_qtext">
                                      <h2>Hack Into People&#039;s Mind &amp; <b><u>Influence </u></b>Them</h2>
                                      [Original source: <span class="qlink_container"><a href="http://www.teenagehack.com/how-to-influence-people/" rel="noopener nofollow" target="_blank" onclick="return Q.openUrl(this);" class="external_link" data-qt-tooltip="teenagehack.com">10 Tricks To Hack Into People&#039;s Mind &amp; Influence Them</a></span>]
                                      <br />How?
                                      <br />
                                      <h2>#1: Flattery</h2>
                                      One of the oldest tricks in the book – flattery. It works wonders. When you genuinely flatter someone, they feel obliged to comply with a favor sought by you. Be careful, however, because with every trick comes a sticky rule.
                                      <br />
                                      <div background-url="<?=$baseUrl?>/skins/images/main-qimg-b8afb66afb4fae354f08c39d70ae1650?convert_to_webp=true" gif-embedded="<?=$baseUrl?>/skins/images/main-qimg-11368f70e790d1549a10202caef13352?convert_to_webp=true" is-playing="false" class="gif_noclick_wrapper">
                                        <img src="<?=$baseUrl?>/skins/images/main-qimg-b8afb66afb4fae354f08c39d70ae1650?convert_to_webp=true" class="qtext_image" style="max-width: 100%;" />
                                        <div class="gif_embed_noclick"></div>
                                      </div>
                                      Just do it even if you don’t want to
                                      <br />
                                      <br />Sincerely (emphasizing the sincerity) flattering someone with high self esteem may work well and you may be able to cajole and get them to like you. On the contrary, flattering someone with low self-esteem may go terribly wrong and they might like you less because it messes with the set perception they have about themselves.
                                      <br />
                                      <br />You wouldn’t want to kick someone when they’re down, so watch out for crumbling egos that can get in the way of your laziness.
                                      <br />
                                      <br />
                                      <h2>#2: Door-In-The-Face</h2>
                                      This technique is as effective as it sounds absurd. In this method, you approach your target with a favor that is likely to be rejected (ask for a unicorn). When they reject this favor, come back later with another request you actually wanted in the first place (a 100 bucks).
                                      <br />This favor can doubtlessly be fulfilled. In short, go big, get rejected. Go small, get selected.
                                      <br />
                                      <br />
                                      <h2>#3: Foot-In-The-Door</h2>
                                      Again, sounds strange but it is just as effective. This is the opposite of door-in-the-face.
                                      <br />Here, you start by making a small request. A day or two later, make a slightly bigger request and the task will be happily (or sadly, as is more likely) carried out for you. This is likely to occur because once the person is committed to helping you, the probability of them helping you for a larger request is higher.
                                      <br />
                                      <br />
                                      <h2>#4: Remember &amp; Leverage The Names &amp; Details</h2>
                                      <div class="qtext_image_wrapper">
                                        <canvas class="qtext_image_placeholder landscape qtext_image size-full wp-image-593 zoomable_in_feed" width="250" height="250" data-src="data:image/JPEG;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wBDAAIBAQEBAQIBAQECAgICAgQDAgICAgUEBAMEBgUGBgYFBgYGBwkIBgcJBwYGCAsICQoKCgoKBggLDAsKDAkKCgr/2wBDAQICAgICAgUDAwUKBwYHCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgoKCgr/wAARCAAKAAoDASIAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAACAcK/8QAKBAAAQQBAgQGAwAAAAAAAAAAAQIDBAYFCBEABwkSFiEjMTM1QWNx/8QAFQEBAQAAAAAAAAAAAAAAAAAAAgP/xAAeEQABAgcBAAAAAAAAAAAAAAABAAIDESEiQVFhof/aAAwDAQACEQMRAD8AqvUs0uakrpr/AJ+snlt1LXOXdS5SjFPxq/Ky70WNTcY1HaMovxkHtWiU4xJXu58qVBJCgkbP3Har9IVyx7FvxN6qEiLlWUzIz7VnhlLjboC0qB28wQoEf3jPho5uNuuumfqbWO5WrJZbIS6fDelT8nOcfeecGcebC1rWSpSuwlG5O/advbgp0ltvwZiPTT9XH/H608QYIr53Z1wJEsIFPV//2Q=="></canvas>
                                        <img class="landscape qtext_image size-full wp-image-593 zoomable_in_feed lazy_loaded lazy_loading" src="" data-src="<?=$baseUrl?>/skins/images/main-qimg-4aef6f854a8629632292bd2b1a4edb8f-c?convert_to_webp=true" master_src="<?=$baseUrl?>/skins/images/main-qimg-4aef6f854a8629632292bd2b1a4edb8f-c?convert_to_webp=true" master_w="250" master_h="250" />
                                      </div>
                                      Remember &amp; Recall
                                      <br />
                                      <br />One of the best ways to get people to like you is by remembering their names and the things that they say. Recalling a person’s name and something they said in a previous conversation creates a positive impact on the person which in turn makes you instantly likable.
                                      <br />
                                      <br />Listen to what they’re saying, paraphrase it and ask them questions to indicate that you’ve understood. This creates a healthy relationship among the two individuals. And with great friendship comes an incessant need to give and receive.
                                      <br />
                                      <br />This technique is widely used by therapists. The only difference is they get paid and you don’t.
                                      <br />
                                      <br />
                                      <h2>#5: Pleasing 101 (no, not what you’re thinking!)</h2>
                                      This is similar to flattering, but takes a slightly different route. Here, you can please a person by complimenting them or by doing them a favor. In exchange they will feel the need to reciprocate this favor in some way or the other.
                                      <br />
                                      <br />
                                      <h2>#6: Favor-ite</h2>
                                      This method is applicable to every hate-able person in the world. If you feel that someone doesn’t like you, get him or her to do a favor for you.
                                      <br />For example, borrow one of their belongings and when you return it to them be gracious about it and thank them profusely. This way they will have found a plausible reason to think that you’re a person worth doing the favor for.
                                      <br />Tadaa! You will finally get someone to like you and you become their favorite person.
                                      <br />
                                      <br />
                                      <h2>#7: Agree &amp; Nod</h2>
                                      When someone is talking, occasionally nod your head and look attentive. This is to send out a message that you’re truly interested.
                                      <br />
                                      <div background-url="<?=$baseUrl?>/skins/images/main-qimg-0c0ab0e003f6f7232836724ccb5c8c7e?convert_to_webp=true" gif-embedded="<?=$baseUrl?>/skins/images/main-qimg-51b32cddea29e039b67a2010a8ea603e?convert_to_webp=true" is-playing="false" class="gif_noclick_wrapper">
                                        <img src="<?=$baseUrl?>/skins/images/main-qimg-0c0ab0e003f6f7232836724ccb5c8c7e?convert_to_webp=true" class="qtext_image" style="max-width: 100%;" />
                                        <div class="gif_embed_noclick"></div>
                                      </div>
                                      Just nod
                                      <br />It is of paramount importance to you to not doze off while they’re talking. Nodding while talking is crucial especially when you have a favor to ask. So, make sure you nod enough to get your work done.
                                      <br />&nbsp;
                                      <br />
                                      <h2>#8: Ape-reciate</h2>
                                      In the psychology world, it is known as mirroring. Many people, intentionally or unintentionally mimic people to effectively mingle in a social environment. They tend of copy the way other people talk, walk and behave.
                                      <br />So, when you “ape” someone’s behavior, it is possible that the person being mimicked or mirrored may appear to be pleasant and genial. Studies have shown that the person being mimicked is likely to be favorable towards the mimic.
                                      <br />The reason why this method is effective is because the person being mirrored feels appreciated and is more self-assured and positive.
                                      <br />
                                      <br />
                                      <h2>#9: Too Tired For Favors</h2>
                                      Tired people are more open to accepting favors. When tired, one is drained of physical and mental energy. So, they’re more vulnerable to agreeing to anything, be it a statement or a request.
                                      <br />Hence, a tired person is likely to give an indefinite response such as “I’ll do it tomorrow” to whatever you say, but he/she WILL end up doing the favor because you will make sure they keep their word.
                                      <br />
                                      <br />
                                      <h2>#10: Be Not Afraid</h2>
                                      Never be afraid to ask for a favor. The problem with most people is that they are afraid of approaching another person to start a conversation or ask for a favor. Pull up the courage and make an attempt to talk.
                                      <br />If you think they’re talking in an agreeable manner, then continue the conversation. If not, it’s your cue to back the hell out.
                                      <br />
                                      <br />Source: <span class="qlink_container"><a href="http://TeenageHack.com" rel="noopener nofollow" target="_blank" onclick="return Q.openUrl(this);" class="external_link" data-qt-tooltip="teenagehack.com">TeenageHack</a></span>
                                    </span>
                                    <div id="hqvQXu">
                                      <div class="ContentFooter AnswerFooter" id="__w2_oAYMhpx_content_footer"><span id="JUnDfm"><span class="meta_num">12.7k</span> Views</span><span class="bullet"> &middot; </span><a class="AnswerVoterListModalLink VoterListModalLink" href="/api/mobile_expanded_voter_list?type=answer&amp;key=MtbxcekXyKZ" id="__w2_DTmeDvM_modal_link">View Upvotes</a><span id="EaGfGj"></span><span id="OvwMEQ"></span>
                                      </div>
                                    </div>
                                  </span>
                                  <div class="hidden" id="__w2_jQqtqC9_loading"><span class="loading">Loading…</span>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_jQqtqC9_editor"></div>
                              </div>
                            </div>
                            <div id="GPzGgx">
                              <div class="Answer ActionBar" id="__w2_imbmeYq_action_bar">
                                <div class="action_bar_inner">
                                  <span id="XCXFCo"><a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 7139696, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_Id4UTYr_button"><span class="button_text" id="__w2_Id4UTYr_text">Upvote</span><span class="count" id="__w2_Id4UTYr_count">68</span>
                                  </a>
                                  </span><span id="ZSlGvc"><a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 7139696, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_pE5YEax_button"><span class="button_text" id="__w2_pE5YEax_text">Downvote</span>
                                  </a>
                                  </span>
                                  <div class="action_item" id="__w2_dL10NW3_link"><span id="ncmOJp"><a class="view_comments comment_link" href="#" id="__w2_T5yza7P_view_comment_link">Comments<span class="count">7+</span>
                                    </a>
                                    </span>
                                  </div>
                                  <div class="action_item">
                                    <div id="UmxSZC">
                                      <div class="ShareSectionIcons">
                                        <a class="FacebookNetworkShare" href="" id="__w2_E1nlMgP_share"><span class="icon icon_facebook"></span><span class="text"> </span></a><a class="TwitterNetworkShare" href="https://www.twitter.com/intent/tweet?related=quora&amp;text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20%40ZionAmalRafeeq&amp;url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Amal-Rafeeq?srid=hzgme&amp;share=21904c0c" id="__w2_ol7rFkX_share"><span class="icon icon_twitter"></span><span class="text"> </span></a>
                                        <div id="MbfnUM">
                                          <div class="hover_menu hidden hover_share_menu show_nub" id="__w2_GAvqgRk_menu">
                                            <div class="hover_menu_contents" id="__w2_GAvqgRk_menu_contents">
                                              <span class="_QuickShareContents AnswerQuickShareContents">
                                                <div class="menu_list_items">
                                                  <div class="menu_list_item"><a id="__w2_Hu9THMv_copy_link">Copy Link</a></div>
                                                  <div class="menu_list_item">
                                                    <div class="EmbedModalLink"><a href="#" id="__w2_lQNMVYQ_modal_link">Embed</a></div>
                                                  </div>
                                                  <div class="menu_list_item"><span class="SimpleShareAction ShareAction AnswerSimpleShareSection"><a class="share_link feed_card" href="#" id="__w2_VN7WWqr_share">More</a></span>
                                                  </div>
                                                </div>
                                              </span>
                                            </div>
                                          </div>
                                          <a class="AnswerQuickShare _QuickShare HoverMenu" href="#" id="__w2_GAvqgRk_link">Share<span class="count">1</span></a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overflow action_item overflow_link"><a class="overflow_link" href="#" id="__w2_imbmeYq_overflow_link"><span class="dots overflow_dots"></span></a>
                                  </div>
                                  <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_imbmeYq_overflow_menu">
                                    <div class="hover_menu_contents lazy" id="__w2_imbmeYq_overflow_menu_contents"></div>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_YHJZgLE_wrapper"></div>
                                <div>
                                  <div id="Thopwi"></div>
                                </div>
                                <div class="action_bar_comments threaded_comments hidden" id="__w2_owX1k8P_wrapper"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pagedlist_item" id="wukiNh">
                  <div class="actionable" id="__w2_EXJIaRh_actionable">
                    <div id="oSDtia">
                      <div id="mBfAFn">
                        <a name="answer_33012146"></a>
                        <div class="Answer AnswerBase" id="__w2_Obd1vpa_answer">
                          <div>
                            <div id="cyVxRI">
                              <div class="AnswerHeader ContentHeader">
                                <div class="photo_text_layout size_small">
                                  <div class="_layout_photo_wrapper">
                                    <div class="_layout_photo">
                                      <span id="TlMYZW">
                                        <div class="hover_menu hidden white_bg show_nub" id="__w2_xGLKIKY_menu">
                                          <div class="hover_menu_contents" id="__w2_xGLKIKY_menu_contents"> </div>
                                        </div>
                                        <span class="photo_tooltip" id="__w2_xGLKIKY_link"><a href="/profile/Aditya-Shukla-98" id="__w2_MMSDRU9_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-105024764-50-vhcogboipysybwnbzcmtdlxrqtlyhtjz.jpeg" width="50" alt="Aditya Shukla" height="50" /></a><span id="cNHUFs"></span></span>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="_layout_text_wrapper">
                                    <div class="_layout_text">
                                      <div class="header_text_button">
                                        <div class="text_wrapper">
                                          <span class="feed_item_answer_user">
                                            <span id="CPIMfm">
                                              <span id="ydrgfv">
                                                <span id="NqsQue">
                                                  <div class="hover_menu hidden white_bg show_nub" id="__w2_xVptCc2_menu">
                                                    <div class="hover_menu_contents" id="__w2_xVptCc2_menu_contents"> </div>
                                                  </div>
                                                  <span id="__w2_xVptCc2_link"><a class="user" href="/profile/Aditya-Shukla-98" action_mousedown="UserLinkClickthrough" id="__w2_xVptCc2_name_link">Aditya Shukla</a></span>
                                                </span>
                                                <span class="IdentityNameCredential ActorNameCredential">, Cognitive &amp; music psychology researcher, M.A. in Clinical Psychology</span>
                                              </span>
                                            </span>
                                          </span>
                                          <div id="NErczP">
                                            <div class="CredibilityFacts pass_color_to_child_links"><span id="wRsKCg"><a class="answer_permalink" href="/What-is-the-coolest-psychological-trick/answer/Aditya-Shukla-98" action_mousedown="AnswerPermalinkClickthrough" id="__w2_Wp1VbTt_link">Written Sat</a></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="button_wrapper">
                                          <div id="oQveOo"><a class="Button TwoStateButton UserFollowHeader UserFollowHeaderIconNoBorder User UserFollowHeaderIcon main_button user_follow_button follow_button" href="#" action_target="{&quot;type&quot;: &quot;user&quot;, &quot;uid&quot;: 105024764}" action_click="UserFollow" id="__w2_sKXv5Ul_button"><span class="button_text" id="__w2_sKXv5Ul_text"></span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="__w2_Obd1vpa_answer_content">
                              <div id="wSLWhN">
                                <div class="inline_editor_content" id="__w2_iWyi4Xb_content">
                                  <span class="inline_editor_value">
                                    <div id="EfnAhl"></div>
                                    <span class="rendered_qtext">
                                      <p class="qtext_para">Tired of poor memory when you need it the most?</p>
                                      <p class="qtext_para"><b>Trick 1:</b> <b><i>Move eyes side to side and recall observations</i></b></p>
                                      <p class="qtext_para">Want to remember something really well or observe reliably? Move your eyes left to right or right to left (side ways) for about 30 seconds consistently. You will now have a heightened memory for what you chose to learn or read before making your eye movements. You will have better recall of details and you will avoid more confusion areas.</p>
                                      <p class="qtext_para"><b>How?:</b> It is speculated that eye movements sideways engages a number of brain regions that are connected to cognitive skills in each of the 2 brain hemispheres. This way the brain has been ‘revved up’ by the eye movement for a short period so you can now utilize more mental resources. <a id="cite-igFYd" href="#igFYd" class="citation_link">[1]</a> This may also help remembering information after the eye movement but more research is needed to understand its scope.</p>
                                      <p class="qtext_para"><b>Use:</b> Improving observation on purpose for a small amount of time,</p>
                                      <p class="qtext_para"><b>Trick 2: </b><b><i>Recall at random &amp; remember to remember</i></b></p>
                                      <p class="qtext_para">Can’t remember minute random details? Use a remember to remember trick at random times. You simply need to mentally mark some information that you come across as important. You are now attaching weight to this information (you can even imagine hanging an anchor on that information, get creative). Once you do that, you should recall that bit of information shortly after. Once done, mentally mark it as remembered and then schedule another moment in the future for remembering. But when you schedule, you are just reminding yourself to remember it. You should actively recall that detail there and then. This will become a neat habit once you learn how to quickly recall details after a while and mentally marking them as ‘recalled’.</p>
                                      <p class="qtext_para"><b>How?</b> Information carries some level of importance. We can call this the ‘weight’ of information. <i>This is the same as you remembering an exam date easily whereas you struggle with remembering the date you last ate some chinese food. </i>This weight is crucial in remembering that detail. But memories that are not given much importance fade away fast, so once you remember to remember and recall it there and then, you reinforce that memory and delay the decay of it. After doing this a few times, that memory will be strong enough for you to rely on it.</p>
                                      <p class="qtext_para"><b>Use: </b>Remembering phone numbers, names, information gathered through small talk or business meetings, bank details, vocabulary, etc.</p>
                                      <p class="qtext_para">Boost creative output!</p>
                                      <p class="qtext_para"><b>Trick 3:</b> <b><i>Random music to help creativity</i></b></p>
                                      <p class="qtext_para">Have you reached a creative block? You can space out well to actually let your brain figure out solutions automatically. But this isn’t a hack. The hack is that you listen to random music when you space out just before you get back to your work/problem. This will have stimulated many brain regions that may be unrelated to your problem solving but may help create a solution as you now have more brain circuitry engaged. So you will have different brain areas working in concert to help tackle the problem.</p>
                                      <p class="qtext_para"><b>How? </b>Music stimulates A LOT of the brain, more than anything else. It engages all sorts of brain regions that are seemingly not connected to sound. This simply provides more mental resources to address the problem at hand. And each of these regions are good at doing something that may be useful to you. Applying the processes of a certain brain region to information may create something creative.</p>
                                      <p class="qtext_para"><b>Use:</b> Getting over a creative block, looking for ideas, novel solutions, etc.</p>
                                      <p class="qtext_para">Have fun hacking your memory systems!</p>
                                      <p class="qtext_citation_lead">Footnotes</p>
                                      <p class="citation" id="igFYd"><a href="#cite-igFYd" class="citation_index">[1] </a><span class="qlink_container"><a href="http://www.livescience.com/1473-moving-eyes-improves-memory-study-suggests.html" rel="noopener" target="_blank" onclick="return Q.openUrl(this);" class="external_link" data-qt-tooltip="livescience.com">Moving Your Eyes Improves Memory, Study Suggests</a></span>
                                      </p>
                                    </span>
                                    <div id="lKqddo">
                                      <div class="ContentFooter AnswerFooter" id="__w2_n9BOKGB_content_footer"><span id="yYDaSM"><span class="meta_num">4.1k</span> Views</span><span class="bullet"> &middot; </span><a class="AnswerVoterListModalLink VoterListModalLink" href="/api/mobile_expanded_voter_list?type=answer&amp;key=RVK4S3vdYvd" id="__w2_F2CljTL_modal_link">View Upvotes</a><span id="GJHFLx"></span><span id="UHuBZH"></span>
                                      </div>
                                    </div>
                                  </span>
                                  <div class="hidden" id="__w2_iWyi4Xb_loading"><span class="loading">Loading…</span>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_iWyi4Xb_editor"></div>
                              </div>
                            </div>
                            <div id="cczkvU">
                              <div class="Answer ActionBar" id="__w2_iXlkpD4_action_bar">
                                <div class="action_bar_inner">
                                  <span id="qIzATC"><a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 33012146, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_Cnk867S_button"><span class="button_text" id="__w2_Cnk867S_text">Upvote</span><span class="count" id="__w2_Cnk867S_count">11</span>
                                  </a>
                                  </span><span id="gcioNO"><a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 33012146, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_Nq2crSN_button"><span class="button_text" id="__w2_Nq2crSN_text">Downvote</span>
                                  </a>
                                  </span>
                                  <div class="action_item" id="__w2_qBTekH6_link"><span id="NnhJbi"><a class="view_comments comment_link" href="#" id="__w2_gl79eSM_view_comment_link">Comment</a></span>
                                  </div>
                                  <div class="action_item">
                                    <div id="qBUofC">
                                      <div class="ShareSectionIcons">
                                        <a class="FacebookNetworkShare" href="" id="__w2_ekoCoGk_share"><span class="icon icon_facebook"></span><span class="text"> </span></a><a class="TwitterNetworkShare" href="https://www.twitter.com/intent/tweet?related=quora&amp;text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20%40Shredwarrior&amp;url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Aditya-Shukla-98?srid=hzgme&amp;share=20967772" id="__w2_uR482vW_share"><span class="icon icon_twitter"></span><span class="text"> </span></a>
                                        <div id="wYvows">
                                          <div class="hover_menu hidden hover_share_menu show_nub" id="__w2_FOQgvo3_menu">
                                            <div class="hover_menu_contents" id="__w2_FOQgvo3_menu_contents">
                                              <span class="_QuickShareContents AnswerQuickShareContents">
                                                <div class="menu_list_items">
                                                  <div class="menu_list_item"><a id="__w2_Jt9sRUx_copy_link">Copy Link</a></div>
                                                  <div class="menu_list_item">
                                                    <div class="EmbedModalLink"><a href="#" id="__w2_FWCkpVP_modal_link">Embed</a></div>
                                                  </div>
                                                  <div class="menu_list_item"><span class="SimpleShareAction ShareAction AnswerSimpleShareSection"><a class="share_link feed_card" href="#" id="__w2_QNd7WUe_share">More</a></span>
                                                  </div>
                                                </div>
                                              </span>
                                            </div>
                                          </div>
                                          <a class="AnswerQuickShare _QuickShare HoverMenu" href="#" id="__w2_FOQgvo3_link">Share</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overflow action_item overflow_link"><a class="overflow_link" href="#" id="__w2_iXlkpD4_overflow_link"><span class="dots overflow_dots"></span></a>
                                  </div>
                                  <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_iXlkpD4_overflow_menu">
                                    <div class="hover_menu_contents lazy" id="__w2_iXlkpD4_overflow_menu_contents"></div>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_jKPm5Sd_wrapper"></div>
                                <div>
                                  <div id="vALoqQ"></div>
                                </div>
                                <div class="action_bar_comments threaded_comments hidden" id="__w2_TlZ8bVy_wrapper"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="pagedlist_item" id="EoqFNs">
                  <div class="actionable" id="__w2_HsB59TN_actionable">
                    <div id="bjDpTO">
                      <div id="FIljxZ">
                        <a name="answer_8463580"></a>
                        <div class="Answer AnswerBase" id="__w2_t0UAAHE_answer">
                          <div>
                            <div id="BcCjpv">
                              <div class="AnswerHeader ContentHeader">
                                <div class="photo_text_layout size_small">
                                  <div class="_layout_photo_wrapper">
                                    <div class="_layout_photo">
                                      <span id="PHAYfN">
                                        <div class="hover_menu hidden white_bg show_nub" id="__w2_uCMR9Zj_menu">
                                          <div class="hover_menu_contents" id="__w2_uCMR9Zj_menu_contents"> </div>
                                        </div>
                                        <span class="photo_tooltip" id="__w2_uCMR9Zj_link"><a href="/profile/Anangsha-Alammyan" id="__w2_jOJMMkf_link"><img class="profile_photo_img" src="<?=$baseUrl?>/skins/images/main-thumb-54529111-50-dfwqitexhdkhhfkzyfzczbfseogrmqvi.jpeg" width="50" alt="Anangsha Alammyan" height="50" /></a><span id="EhxoIC"></span></span>
                                      </span>
                                    </div>
                                  </div>
                                  <div class="_layout_text_wrapper">
                                    <div class="_layout_text">
                                      <div class="header_text_button">
                                        <div class="text_wrapper">
                                          <span class="feed_item_answer_user">
                                            <span id="RvYvct">
                                              <span id="nySOXd">
                                                <span id="QjBADb">
                                                  <div class="hover_menu hidden white_bg show_nub" id="__w2_LVZh1aM_menu">
                                                    <div class="hover_menu_contents" id="__w2_LVZh1aM_menu_contents"> </div>
                                                  </div>
                                                  <span id="__w2_LVZh1aM_link"><a class="user" href="/profile/Anangsha-Alammyan" action_mousedown="UserLinkClickthrough" id="__w2_LVZh1aM_name_link">Anangsha Alammyan</a></span>
                                                </span>
                                                <span class="IdentityNameCredential ActorNameCredential">, First of her name. Civil engineer; Bookworm; Top Writer 2016</span>
                                              </span>
                                            </span>
                                          </span>
                                          <div id="gRSxQl">
                                            <div class="CredibilityFacts pass_color_to_child_links"><span id="Fcarzm"><a class="answer_permalink" href="/What-is-the-coolest-psychological-trick/answer/Anangsha-Alammyan" action_mousedown="AnswerPermalinkClickthrough" id="__w2_zOv5fUz_link">Updated Dec 12</a></span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="button_wrapper">
                                          <div id="xfcEgv"><a class="Button TwoStateButton UserFollowHeader UserFollowHeaderIconNoBorder User UserFollowHeaderIcon main_button user_follow_button follow_button" href="#" action_target="{&quot;type&quot;: &quot;user&quot;, &quot;uid&quot;: 54529111}" action_click="UserFollow" id="__w2_UBpMYai_button"><span class="button_text" id="__w2_UBpMYai_text"></span></a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div id="__w2_t0UAAHE_answer_content">
                              <div id="BOquES">
                                <div class="inline_editor_content" id="__w2_SLssT1F_content">
                                  <span class="inline_editor_value">
                                    <div id="XNrjnq"></div>
                                    <span class="rendered_qtext">
                                      <p class="qtext_para"><b>The Trick : </b>Invent a seemingly horrifying story, and watch it go viral!</p>
                                      <p class="qtext_para"><b>How I managed to pull it off : </b>During the first year of college when everyone was still settling down and getting used to the new way of life, my then roommate and I invented a really hilarious story of a <b>spectre</b> that was seen in the Ground Floor of our hostel (near one of the empty rooms where - rumour has it - years ago a girl had committed suicide) walking down the corridor and rudely surprising those who dared to walk alone at night.</p>
                                      <p class="qtext_para">Two weeks later, a heavily embellished version of the same nonsensical story we&#039;d invented reached our ears! Apparently this ghostly apparition was dressed in all white and left a trail of blood wherever she walked (one of the girls even swore she had seen the blood marks - all red and shining on the bathroom floor :P), but the same magically vanished in the morning. Also on moonless nights, she could be heard sobbing softly inside the room!</p>
                                      <p class="qtext_para">Needless to say, we had a good laugh! I was so incredulous of this story that some of my friends challenged me to spend the night in that room ALONE. I was all game, but later they backed out, thinking if something happened to me, then my spirit would come back and haunt them forever, never forgiving them for forcing me into this! =)</p>
                                      <p class="qtext_para"><b>The Consequence :</b> It&#039;s been almost four years now. My juniors still tell me stories of the scary Ground Floor ghost who refuses to leave the hostel because of her unsatiated spirit! :D</p>
                                      <p class="qtext_para"><b>EDIT : The psychological trick here is : Invent any horror story, and most likely, people will believe it readily, without you having to provide any proof.</b></p>
                                    </span>
                                    <div id="AMFKcl">
                                      <div class="ContentFooter AnswerFooter" id="__w2_gNvWx5B_content_footer"><span id="ngwpvn"><span class="meta_num">36.2k</span> Views</span><span class="bullet"> &middot; </span><a class="AnswerVoterListModalLink VoterListModalLink" href="/api/mobile_expanded_voter_list?type=answer&amp;key=YlrZepFDWqm" id="__w2_lWMaDS7_modal_link">View Upvotes</a><span id="iWlqyj"></span><span id="xiWmhS"></span>
                                      </div>
                                    </div>
                                  </span>
                                  <div class="hidden" id="__w2_SLssT1F_loading"><span class="loading">Loading…</span>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_SLssT1F_editor"></div>
                              </div>
                            </div>
                            <div id="DiYvym">
                              <div class="Answer ActionBar" id="__w2_SPwsbNX_action_bar">
                                <div class="action_bar_inner">
                                  <span id="Zwcfqd"><a class="Answer Upvote Button TwoStateButton primary_action answer_upvote main_button" href="#" action_target="{&quot;aid&quot;: 8463580, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerUpvote" id="__w2_btLHAEj_button"><span class="button_text" id="__w2_btLHAEj_text">Upvote</span><span class="count" id="__w2_btLHAEj_count">371</span>
                                  </a>
                                  </span><span id="iMkFKX"><a class="Answer Downvote Button TwoStateButton secondary_action" href="#" action_target="{&quot;aid&quot;: 8463580, &quot;type&quot;: &quot;answer&quot;}" action_click="AnswerDownvote" id="__w2_o9BaBi8_button"><span class="button_text" id="__w2_o9BaBi8_text">Downvote</span>
                                  </a>
                                  </span>
                                  <div class="action_item" id="__w2_UXxqn3V_link"><span id="ERveuX"><a class="view_comments comment_link" href="#" id="__w2_sbjBRRp_view_comment_link">Comments<span class="count">14+</span>
                                    </a>
                                    </span>
                                  </div>
                                  <div class="action_item">
                                    <div id="TUDovT">
                                      <div class="ShareSectionIcons">
                                        <a class="FacebookNetworkShare" href="" id="__w2_BBaHYQc_share"><span class="icon icon_facebook"></span><span class="text"> </span></a><a class="TwitterNetworkShare" href="https://www.twitter.com/intent/tweet?related=quora&amp;text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20%40alammyan&amp;url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Anangsha-Alammyan?srid=hzgme&amp;share=c56d868e" id="__w2_imdZZ0z_share"><span class="icon icon_twitter"></span><span class="text"> </span></a>
                                        <div id="npYWkR">
                                          <div class="hover_menu hidden hover_share_menu show_nub" id="__w2_Soruy4F_menu">
                                            <div class="hover_menu_contents" id="__w2_Soruy4F_menu_contents">
                                              <span class="_QuickShareContents AnswerQuickShareContents">
                                                <div class="menu_list_items">
                                                  <div class="menu_list_item"><a id="__w2_CjyRGGg_copy_link">Copy Link</a></div>
                                                  <div class="menu_list_item">
                                                    <div class="EmbedModalLink"><a href="#" id="__w2_i9YP5nf_modal_link">Embed</a></div>
                                                  </div>
                                                  <div class="menu_list_item"><span class="SimpleShareAction ShareAction AnswerSimpleShareSection"><a class="share_link feed_card" href="#" id="__w2_BeO6lnH_share">More</a></span>
                                                  </div>
                                                </div>
                                              </span>
                                            </div>
                                          </div>
                                          <a class="AnswerQuickShare _QuickShare HoverMenu" href="#" id="__w2_Soruy4F_link">Share</a>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="overflow action_item overflow_link"><a class="overflow_link" href="#" id="__w2_SPwsbNX_overflow_link"><span class="dots overflow_dots"></span></a>
                                  </div>
                                  <div class="hover_menu hidden show_nub right_align fixed_menu_width no_body_attach" id="__w2_SPwsbNX_overflow_menu">
                                    <div class="hover_menu_contents lazy" id="__w2_SPwsbNX_overflow_menu_contents"></div>
                                  </div>
                                </div>
                                <div class="hidden" id="__w2_ZNTu8ko_wrapper"></div>
                                <div>
                                  <div id="aptTNx"></div>
                                </div>
                                <div class="action_bar_comments threaded_comments hidden" id="__w2_fnPZR53_wrapper"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div id="tDyzFF">
                  <div class="PagedListMoreButton" id="__w2_w7ArPVr_paged_list_more_button">
                    <div class="pager_next" id="__w2_w7ArPVr_loading">
                      <div class="__wn2_loading"><span class="__wn2_loading_spinner"></span>
                      </div>
                    </div>
                    <div class="pager_next action_button row" id="__w2_w7ArPVr_more">View More Answers</div>
                    <div class="pager_sentinel" id="__w2_w7ArPVr_sentinel"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="layout_2col_side">
            <div id="__w2_xvW0crq_actions">
              <div class="NewGridQuestionPage QuestionMain">
                <div id="YKcoEb">
                  <div id="mWcaQJ">
                    <div class="checklist_qp_outer_box">
                      <div class="checklist_qp_inner_box">
                        <div class="new_user_checklist">
                          <h2 class="title">Set Up Your Account</h2>
                          <div class="steps_container">
                            <div class="checklist_row">
                              <div id="zhtxnD">
                                <div class="check_wrapper complete">
                                  <div class="check"></div>
                                </div>
                                <div class="complete label" id="__w2_EjBpY6M_checklist_step_1">Visit your feed</div>
                              </div>
                              <div style="display:block;clear:both;"></div>
                            </div>
                            <div class="checklist_row">
                              <div id="YZKFCk">
                                <div class="check_wrapper">
                                  <div class="check"></div>
                                </div>
                                <div class="label" id="__w2_hfhyIl0_checklist_step_17"><a href="#" id="__w2_hfhyIl0_step_link">Follow 14 more topics</a>
                                </div>
                              </div>
                              <div style="display:block;clear:both;"></div>
                            </div>
                            <div class="checklist_row">
                              <div id="ULEUbs">
                                <div class="check_wrapper complete">
                                  <div class="check"></div>
                                </div>
                                <div class="complete label" id="__w2_K6SFQya_checklist_step_14">Find your friends on Quora</div>
                              </div>
                              <div style="display:block;clear:both;"></div>
                            </div>
                            <div class="checklist_row">
                              <div id="nwIcpV">
                                <div class="check_wrapper">
                                  <div class="check"></div>
                                </div>
                                <div class="label" id="__w2_jksvbKY_checklist_step_12">Upvote 5 more good answers</div>
                              </div>
                              <div style="display:block;clear:both;"></div>
                            </div>
                            <div class="checklist_row">
                              <div id="WKytCo">
                                <div class="check_wrapper">
                                  <div class="check"></div>
                                </div>
                                <div class="label" id="__w2_KG67Dbv_checklist_step_7">Ask your first question</div>
                              </div>
                              <div style="display:block;clear:both;"></div>
                            </div>
                            <div class="checklist_row">
                              <div id="amdRsx">
                                <div class="check_wrapper">
                                  <div class="check"></div>
                                </div>
                                <div class="label" id="__w2_CHPjpYy_checklist_step_16"><a href="/profile/Tam-Nguyen-281" id="__w2_CHPjpYy_step_link">Add info about what you know</a>
                                </div>
                              </div>
                              <div style="display:block;clear:both;"></div>
                            </div>
                            <div class="checklist_row">
                              <div id="riDlLs">
                                <div class="check_wrapper">
                                  <div class="check"></div>
                                </div>
                                <div class="label" id="__w2_ZXtxmvR_checklist_step_9"><a href="/answer" id="__w2_ZXtxmvR_step_link">Answer a question</a>
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
                <div id="__w2_BmRuZnn_related_questions">
                  <div class="SimpleToggle RelatedQuestions Toggle" id="__w2_UhO02eE__truncated">
                    <div class="SimpleToggle RelatedQuestions Toggle">
                      <div id="__w2_UhO02eE_related_questions">
                        <div class="question_related list side_bar" id="__w2_b4gDE7w_related_questions_list">
                          <h3>Related Questions</h3>
                          <ul class="list_contents">
                            <li class="related_question">
                              <div class="actionable" id="__w2_TK2wm9E_actionable">
                                <div id="qpnqcI"><a class="question_link" href="/Did-someone-have-some-usefull-psychological-tricks-to-give" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_yoAM2IZ_link"><span class="question_text"><span class="rendered_qtext">Did someone have some usefull psychological tricks to give?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_aQE4hj2_actionable">
                                <div id="cdPtPp"><a class="question_link" href="/What-are-some-of-the-coolest-short-Photoshop-tricks-to-be-used" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_uAt36WT_link"><span class="question_text"><span class="rendered_qtext">What are some of the coolest short Photoshop tricks to be used?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_Z92IUfg_actionable">
                                <div id="pdcfyH"><a class="question_link" href="/How-do-you-feel-when-you-use-psychology-tricks-in-your-favor" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_yQvCFNV_link"><span class="question_text"><span class="rendered_qtext">How do you feel when you use &quot;psychology tricks&quot; in your favor?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_tpopbLK_actionable">
                                <div id="dIDZcK"><a class="question_link" href="/What-are-some-psychological-and-NLP-tricks-to-gain-bargain-power-while-buying-things" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_dMdKZgk_link"><span class="question_text"><span class="rendered_qtext">What are some psychological and NLP tricks to gain bargain power while buying things?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_MI0CNJF_actionable">
                                <div id="HeWSru"><a class="question_link" href="/Is-there-any-psychological-trick-to-know-whether-someone-has-any-siblings" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_BExenoZ_link"><span class="question_text"><span class="rendered_qtext">Is there any psychological trick to know whether someone has any siblings?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_zCI6FS2_actionable">
                                <div id="vdfBuY"><a class="question_link" href="/What-is-the-best-way-to-psychologically-trick-our-own-brain" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_CcU2mpj_link"><span class="question_text"><span class="rendered_qtext">What is the best way to psychologically trick our own brain?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_yRq4OQz_actionable">
                                <div id="cLJULb"><a class="question_link" href="/What-are-some-psychological-tricks-or-body-language-tricks-which-will-help-me-read-the-other-person" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_CZfNPEE_link"><span class="question_text"><span class="rendered_qtext">What are some psychological tricks or body language tricks which will help me read the other person?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_QVdSDXY_actionable">
                                <div id="SqSTmU"><a class="question_link" href="/How-do-I-use-psychological-tricks-to-convince-my-point-to-people" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_iRWiDXa_link"><span class="question_text"><span class="rendered_qtext">How do I use psychological tricks to convince my point to people?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_I8YYPqc_actionable">
                                <div id="RXWlCe"><a class="question_link" href="/What-are-the-psychological-tricks-we-can-use-for-developing-ourselves" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_UxzeuYT_link"><span class="question_text"><span class="rendered_qtext">What are the psychological tricks we can use for developing ourselves?</span></span></a>
                                </div>
                              </div>
                            </li>
                            <li class="related_question">
                              <div class="actionable" id="__w2_RwlgVxV_actionable">
                                <div id="chopVE"><a class="question_link" href="/What-is-best-social-psychological-tricks" target="_self" action_mousedown="QuestionLinkClickthrough" id="__w2_AIVTuFr_link"><span class="question_text"><span class="rendered_qtext">What is best social psychological tricks?</span></span></a>
                                </div>
                              </div>
                            </li>
                          </ul>
                        </div>
                        <span id="__w2_UhO02eE_loadinghide"><a class="more_link" href="#" id="__w2_UhO02eE_more">More Related Questions</a></span>
                        <span class="hidden" id="__w2_UhO02eE_loadingshow">
                          <div class="LoadingDots regular">
                            <div class="dot first"></div>
                            <div class="dot second"></div>
                            <div class="dot third"></div>
                          </div>
                        </span>
                      </div>
                    </div>
                  </div>
                  <div class="SimpleToggle RelatedQuestions Toggle hidden" id="__w2_UhO02eE__expanded"></div>
                </div>
                <div id="XaVXJY"></div>
                <div id="PIxCzW">
                  <div class="QuestionStats" id="__w2_blCNI4E_stats">
                    <h3>Question Stats</h3>
                    <span id="MKsXOg">
                      <div class="HighlightRow FollowersRow"><span class="row_icon"></span><span id="tSAysp"><a class="FollowerListModalLink QuestionFollowerListModalLink" href="#" id="__w2_OlkCS2y_modal_link">5,389 Followers</a></span>
                      </div>
                    </span>
                    <span id="LRTsKP">
                      <div class="HighlightRow ViewsRow"><span class="row_icon"></span>4,360,538 Views</div>
                    </span>
                    <span id="migVip">
                      <div class="HighlightRow AskedRow"><span class="row_icon"></span>Last Asked 10h ago</div>
                    </span>
                    <span id="CrnNDF">
                      <div class="HighlightRow EditsRow"><span class="row_icon"></span><a href="/What-is-the-coolest-psychological-trick/log">Edits</a>
                      </div>
                    </span>
                    <span id="offXJC"></span>
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

<script type="text/javascript">
        require.whenReady("shared/main-loaded", function() {
            require.whenReady(["webnode2"], function() {
                require('webnode2').windowId = "dep3305-2182623640748029025";
            });
        });
    </script>
    <script type="text/javascript">
        require.whenReady("shared/main-loaded", function() {
            require.whenReady(["tchannel_up"], function() {

                require("tchannel_up").start(0, "main-w-dep3305-2182623640748029025", "9268537557852293060", "chan32-8888", "quora.com", "");

            });
        });
    </script>
    <script type="text/javascript">
        document.title = "What is the coolest psychological trick? - Quora";
    </script>
    <script type="text/javascript">
        require.whenReady("shared/main-loaded", function() {
            require("shared/core/component").beforeOnLoad();
            var coreComponent = require('shared/core/component');
            var newComponent = coreComponent.newComponent;
            coreComponent.addComponentMetadata({
                parents: {
                    "MobdV7K": "RBXgoUc",
                    "BBaHYQc": "VHdXub3",
                    "eQFC8Dz": "LjDFw0E",
                    "qLKV5Om": "oAYMhpx",
                    "wVOXsya": "*ROOT*",
                    "Ia3T0T7": "n9BOKGB",
                    "hA42zHO": "TZCinEc",
                    "f7Z6SDA": "MXTZZEt",
                    "iRWiDXa": "QVdSDXY",
                    "WrTrUSB": "iXlkpD4",
                    "hfhyIl0": "siZBXcV",
                    "rlapU7J": "AhhzFix",
                    "rDVl8Pk": "TeyJVFN",
                    "uzfqJCj": "Bd6sQgz",
                    "WD1Yv5I": "xIg9fwJ",
                    "Suy8QUg": "zp8V9wB",
                    "iL3tSKh": "MGQRxNz",
                    "D1bEW6x": "PZC4a07",
                    "RPVeWJd": "IPknAmM",
                    "uWg2VEu": "TMXubl3",
                    "VSIoYEI": "f5qWfS3",
                    "EXJIaRh": "FCFNP8v",
                    "ovzZEtM": "Us28G6Z",
                    "CLcUehO": "pgYcIZu",
                    "q8xRbpq": "R1M6Hxh",
                    "CHPjpYy": "siZBXcV",
                    "NRGIxXr": "*ROOT*",
                    "ZZRzdfR": "XNdi4eG",
                    "j7oewdb": "SLssT1F",
                    "v1uncpr": "Iazcala",
                    "hiONGdX": "xvW0crq",
                    "QNd7WUe": "fKbpQFl",
                    "aj9qyPn": "A0WwzTZ",
                    "MruQZLu": "T0VoCks",
                    "Tcauwu5": "scS4e3y",
                    "BkFJ3l1": "f5qWfS3",
                    "aVgong2": "xJGuNac",
                    "ZUY5d0A": "BAKZwqN",
                    "Uwnpx3B": "rlapU7J",
                    "BktNtzq": "r7EFSf2",
                    "i4Qgns7": "BuEHUGp",
                    "I8YYPqc": "b4gDE7w",
                    "BmRuZnn": "xvW0crq",
                    "qdoVFjn": "BhoaIno",
                    "F4XBgkm": "lCYahkC",
                    "cwcBlsx": "f5qWfS3",
                    "d9JqAJg": "xJGuNac",
                    "DTmeDvM": "oAYMhpx",
                    "OhwLcs8": "f5qWfS3",
                    "TVVxzVI": "FtGFtzr",
                    "CctG32X": "PZC4a07",
                    "gNvWx5B": "SLssT1F",
                    "fH9dPO9": "K3GFRO2",
                    "wXbopZc": "ervyl7d",
                    "yU8si6W": "aj9qyPn",
                    "hexCTew": "s0MZSZp",
                    "ZCXthQ0": "n2lFlph",
                    "ykVox6Q": "NnbZNKQ",
                    "ZqKUhUh": "R1M6Hxh",
                    "pFxVbKB": "CFiMyJy",
                    "BuEHUGp": "*ROOT*",
                    "MnNni7m": "*ROOT*",
                    "FCFNP8v": "MXTZZEt",
                    "OkSdRxc": "nGEtG9z",
                    "wtUUMxr": "gNvWx5B",
                    "TeyJVFN": "bg7QZP4",
                    "JfXF0B0": "Us28G6Z",
                    "WUdJfCf": "MXTZZEt",
                    "Cv8jFHS": "BAKZwqN",
                    "lkrUGWw": "q8xRbpq",
                    "x2yY6vz": "T1NdlAM",
                    "Wp1VbTt": "ZHYomD6",
                    "ol7rFkX": "xXJb99Y",
                    "TlvQO9S": "JbdBj7Y",
                    "UBpMYai": "pcoLdZQ",
                    "jZMeV8B": "MC1S1aN",
                    "HazKFIT": "utXjhED",
                    "Bd6sQgz": "MXTZZEt",
                    "KtVNCtG": "BHS1OD9",
                    "ekoCoGk": "RIcbfyd",
                    "fVTLxUX": "kyXSr2v",
                    "BeO6lnH": "f9ClQOm",
                    "tZQkhvt": "CFiMyJy",
                    "AIVTuFr": "RwlgVxV",
                    "dL10NW3": "imbmeYq",
                    "plO1FmT": "Suy8QUg",
                    "UngswEV": "blCNI4E",
                    "dLDZIaT": "i4Qgns7",
                    "BAKZwqN": "Lym1D4P",
                    "fKbpQFl": "FOQgvo3",
                    "MtbnyL3": "CFiMyJy",
                    "qkQUPjG": "uWg2VEu",
                    "HRu6aHt": "*ROOT*",
                    "yXZAKOf": "jOJMMkf",
                    "fuNdZnb": "TzsYbBB",
                    "mXKCQvf": "FGkImsa",
                    "z3DetXf": "Lc8cpzl",
                    "qijRrEy": "Us28G6Z",
                    "xkbucq5": "Obd1vpa",
                    "E0AvwCo": "XGxZxdY",
                    "RqozsCT": "f5qWfS3",
                    "zuPOMHD": "uzfqJCj",
                    "oJos3jN": "BAKZwqN",
                    "zp8V9wB": "ZqKUhUh",
                    "SLssT1F": "t0UAAHE",
                    "qL0st07": "nwhZ0K9",
                    "E1nlMgP": "xXJb99Y",
                    "kJSOJeX": "f5qWfS3",
                    "Map5Dis": "iWyi4Xb",
                    "x0I6rkq": "MGQRxNz",
                    "sowWuKp": "utXjhED",
                    "xvW0crq": "i4Qgns7",
                    "CcU2mpj": "zCI6FS2",
                    "fR9LPFd": "ghE3ueN",
                    "Dr4ABQu": "xvW0crq",
                    "jp79ZPX": "oAYMhpx",
                    "owX1k8P": "imbmeYq",
                    "YcxbAOW": "scS4e3y",
                    "uR482vW": "RIcbfyd",
                    "YHJZgLE": "imbmeYq",
                    "cxT7u9g": "jcT1V5G",
                    "ZHYomD6": "z9zq17Y",
                    "M5enW5J": "sbjBRRp",
                    "yizZTls": "Lc8cpzl",
                    "qGOAhYj": "blCNI4E",
                    "zOv5fUz": "YmG80kZ",
                    "Nq2crSN": "iXlkpD4",
                    "yINZVn0": "utXjhED",
                    "uB3VDUI": "scS4e3y",
                    "XJnWBJj": "scS4e3y",
                    "iWyi4Xb": "Obd1vpa",
                    "qKgYwyZ": "QX1SP32",
                    "EhVMBdT": "LkYFShd",
                    "oAYMhpx": "jQqtqC9",
                    "yoAM2IZ": "TK2wm9E",
                    "KOgkBth": "x1zsUyq",
                    "DULu3HQ": "oAYMhpx",
                    "tO6EYfh": "wXbopZc",
                    "iTPW4vI": "mXKCQvf",
                    "mhCENT4": "oJos3jN",
                    "pcoLdZQ": "t0UAAHE",
                    "VDXgWEe": "fR5ibLJ",
                    "Bv9USsF": "TVVxzVI",
                    "Iazcala": "x2yY6vz",
                    "xJGuNac": "X9nJk5J",
                    "gGAciCC": "Lc8cpzl",
                    "RcoTNrU": "v1uncpr",
                    "Jn208t9": "*ROOT*",
                    "yu9yCnS": "nwhZ0K9",
                    "C8QONVE": "jQqtqC9",
                    "jksvbKY": "siZBXcV",
                    "T1NdlAM": "Lc8cpzl",
                    "MGQRxNz": "hiONGdX",
                    "DhquLBE": "Lc8cpzl",
                    "pAptrg9": "Lym1D4P",
                    "jNMNAUa": "zOv5fUz",
                    "FOQgvo3": "RIcbfyd",
                    "tgknyts": "FtGFtzr",
                    "lOz4Ccx": "CFiMyJy",
                    "TzsYbBB": "A0WwzTZ",
                    "RG72QgX": "MqEJ6qe",
                    "RpEP1nD": "aj9qyPn",
                    "IPknAmM": "Lym1D4P",
                    "zlEeKmU": "scS4e3y",
                    "vuvAAfe": "sowWuKp",
                    "WXTnJwO": "x2CF8dA",
                    "OFYpMBW": "ZJyp79N",
                    "xIg9fwJ": "CLcUehO",
                    "TK2wm9E": "b4gDE7w",
                    "scS4e3y": "TzsYbBB",
                    "n2lFlph": "N9TdU0f",
                    "pVoRBUo": "eQFC8Dz",
                    "FtGFtzr": "x1zsUyq",
                    "UhO02eE": "BmRuZnn",
                    "sKXv5Ul": "xkbucq5",
                    "ZNTu8ko": "SPwsbNX",
                    "D4rcylu": "ntzTvBY",
                    "HPm0tak": "EXJIaRh",
                    "GClVroc": "Lym1D4P",
                    "txHSWRw": "CFiMyJy",
                    "b4gDE7w": "UhO02eE",
                    "VHMEQf5": "XNdi4eG",
                    "FWCkpVP": "fKbpQFl",
                    "Hwgg8C4": "jcT1V5G",
                    "Z92IUfg": "b4gDE7w",
                    "oc5rqIP": "*ROOT*",
                    "p0m5axq": "CFiMyJy",
                    "dZYtOBC": "RpEP1nD",
                    "MI0CNJF": "b4gDE7w",
                    "x1zsUyq": "Lr5SBuc",
                    "iEL6q5t": "TZCinEc",
                    "ZXtxmvR": "siZBXcV",
                    "yEMXpfd": "fzYsYh9",
                    "P3FLfdM": "gNvWx5B",
                    "BkKugM9": "v1uncpr",
                    "ffyZk6C": "MGQRxNz",
                    "tSw977V": "n9BOKGB",
                    "uAt36WT": "aQE4hj2",
                    "r7EFSf2": "xIg9fwJ",
                    "dMdKZgk": "tpopbLK",
                    "x2CF8dA": "BuEHUGp",
                    "s9Jm2iD": "dZYtOBC",
                    "RIcbfyd": "WrTrUSB",
                    "XA6GSx6": "blCNI4E",
                    "ibHdvbQ": "PZC4a07",
                    "W2HFkjU": "jcT1V5G",
                    "t0UAAHE": "Khu979Q",
                    "yldO40P": "uWg2VEu",
                    "FNDADoS": "MGQRxNz",
                    "egxrFHH": "ck7owMm",
                    "X9nJk5J": "fVTLxUX",
                    "v1iTUMD": "MruQZLu",
                    "MMSDRU9": "xGLKIKY",
                    "qBTekH6": "iXlkpD4",
                    "WizoWDq": "TzsYbBB",
                    "kGmOU5v": "xIg9fwJ",
                    "xV1WSIo": "cxT7u9g",
                    "FGkImsa": "zskuVDP",
                    "pE5YEax": "imbmeYq",
                    "JbdBj7Y": "yldO40P",
                    "mLfhyg8": "GTVh9Uj",
                    "jPRL6mU": "isiBWYV",
                    "CFiMyJy": "XNdi4eG",
                    "N8qJy8f": "iL3tSKh",
                    "xJITWXg": "TZCinEc",
                    "f5qWfS3": "ghE3ueN",
                    "Soruy4F": "VHdXub3",
                    "PpHu4vc": "T0VoCks",
                    "NTSzj9S": "Lym1D4P",
                    "rTKNAWB": "isiBWYV",
                    "sKacFRB": "x0I6rkq",
                    "gl79eSM": "qBTekH6",
                    "pKCQHHB": "f5qWfS3",
                    "QVdSDXY": "b4gDE7w",
                    "vX5Tth6": "*ROOT*",
                    "imdZZ0z": "VHdXub3",
                    "JmSVX0h": "aj9qyPn",
                    "XDAuano": "zskuVDP",
                    "xVptCc2": "OkSdRxc",
                    "axCiOlC": "TymjSUl",
                    "GTp38HB": "T0VoCks",
                    "CjyRGGg": "f9ClQOm",
                    "W12gMJv": "i4Qgns7",
                    "XNdi4eG": "TMXubl3",
                    "KdBNpCn": "mXKCQvf",
                    "Hu9THMv": "LYItsAv",
                    "tpopbLK": "b4gDE7w",
                    "gJ6Cgt0": "BuEHUGp",
                    "OoBxEla": "R1M6Hxh",
                    "IVny324": "Lc8cpzl",
                    "oqcjjtQ": "*ROOT*",
                    "bhyf7OP": "f5qWfS3",
                    "NQSg8nG": "SPwsbNX",
                    "LkYFShd": "Wv5mOJE",
                    "fZkpigu": "Zs4ebaz",
                    "MvbNBqh": "ZldlaA6",
                    "oyxV0M3": "zuPOMHD",
                    "V7HcQBs": "u9cx9Al",
                    "TymjSUl": "D1bEW6x",
                    "ntzTvBY": "xvW0crq",
                    "UTOPvHx": "oAYMhpx",
                    "Jt9sRUx": "fKbpQFl",
                    "iXlkpD4": "Obd1vpa",
                    "Zs4ebaz": "WUdJfCf",
                    "VN7WWqr": "LYItsAv",
                    "f9ClQOm": "Soruy4F",
                    "GTVh9Uj": "NnbZNKQ",
                    "m0Z1rFD": "jcT1V5G",
                    "HsB59TN": "NdTVZYw",
                    "xwjq87b": "OFYpMBW",
                    "capMibR": "jcT1V5G",
                    "n9BOKGB": "iWyi4Xb",
                    "zCI6FS2": "b4gDE7w",
                    "yisS0Zi": "MMSDRU9",
                    "Z17raYx": "tMvn4G2",
                    "R1M6Hxh": "A0WwzTZ",
                    "yQvCFNV": "Z92IUfg",
                    "QW2KjQl": "f5qWfS3",
                    "i9YP5nf": "f9ClQOm",
                    "BHS1OD9": "DhquLBE",
                    "K3GFRO2": "vgDHyiV",
                    "rc06TIL": "uI18JML",
                    "F2CljTL": "n9BOKGB",
                    "Q4PJwvc": "imbmeYq",
                    "QMCzMLp": "TVVxzVI",
                    "VW8LgQx": "GTp38HB",
                    "V1JVSZG": "iWyi4Xb",
                    "nGEtG9z": "xkbucq5",
                    "z9zq17Y": "xkbucq5",
                    "rxGN2BK": "gNvWx5B",
                    "ZJyp79N": "ykVox6Q",
                    "OlkCS2y": "wr8iyVN",
                    "Khu979Q": "HsB59TN",
                    "BtCpYIl": "ZUY5d0A",
                    "YEZtx28": "h3wc3qu",
                    "CkGYDru": "sowWuKp",
                    "Piab98U": "SPwsbNX",
                    "vgDHyiV": "qkQUPjG",
                    "lvHnDYU": "NnbZNKQ",
                    "ZldlaA6": "CctG32X",
                    "ck7owMm": "GwQHE1G",
                    "GAvqgRk": "xXJb99Y",
                    "UxzeuYT": "I8YYPqc",
                    "BBBxRnk": "*ROOT*",
                    "LYItsAv": "GAvqgRk",
                    "mRB9QGU": "aj9qyPn",
                    "wGqjJxr": "zskuVDP",
                    "wr8iyVN": "blCNI4E",
                    "TNqgndu": "*ROOT*",
                    "InS1C53": "f5qWfS3",
                    "CZfNPEE": "yRq4OQz",
                    "CHsgOoM": "utXjhED",
                    "J1tfZ8V": "aj9qyPn",
                    "XGxZxdY": "Lym1D4P",
                    "fTwmHSO": "mXKCQvf",
                    "UT36qcq": "MobdV7K",
                    "CJqZDUg": "gNvWx5B",
                    "AhhzFix": "PZC4a07",
                    "isiBWYV": "LkYFShd",
                    "nxCWD1G": "uWg2VEu",
                    "RwlgVxV": "b4gDE7w",
                    "hvSOkw3": "Hwgg8C4",
                    "o8q7xkF": "XA6GSx6",
                    "blCNI4E": "xvW0crq",
                    "tVZXt92": "IPknAmM",
                    "btLHAEj": "SPwsbNX",
                    "ZCHzau4": "pcoLdZQ",
                    "A0WwzTZ": "rc06TIL",
                    "dKcYyRd": "X9nJk5J",
                    "bMLPLAJ": "*ROOT*",
                    "QquTPHf": "LkYFShd",
                    "mrbrNnf": "BuEHUGp",
                    "TK0Bftu": "jQqtqC9",
                    "tdYJURv": "QX1SP32",
                    "Nl1wmvR": "TeyJVFN",
                    "gftmO5x": "CLcUehO",
                    "lWMaDS7": "gNvWx5B",
                    "PZC4a07": "oyxV0M3",
                    "Msy6Go4": "Z3c8tk2",
                    "tMvn4G2": "aj9qyPn",
                    "elhNq3C": "isiBWYV",
                    "NdTVZYw": "MXTZZEt",
                    "Us28G6Z": "dnS1Y5b",
                    "Z3c8tk2": "OoBxEla",
                    "ZLXDrVr": "isiBWYV",
                    "Wv5mOJE": "fZkpigu",
                    "Cnk867S": "iXlkpD4",
                    "imbmeYq": "oyxV0M3",
                    "siZBXcV": "D4rcylu",
                    "jKPm5Sd": "iXlkpD4",
                    "uCMR9Zj": "pcoLdZQ",
                    "kj2gqHp": "x2yY6vz",
                    "sbjBRRp": "UXxqn3V",
                    "rsXTsVj": "i4Qgns7",
                    "nwhZ0K9": "xIg9fwJ",
                    "aBAFjP5": "TeyJVFN",
                    "LjDFw0E": "NnbZNKQ",
                    "Vlf1NUc": "Us28G6Z",
                    "IMD6HqL": "f5qWfS3",
                    "kOuiVGQ": "YEZtx28",
                    "dnS1Y5b": "FNDADoS",
                    "zskuVDP": "J1tfZ8V",
                    "aClNv6e": "scS4e3y",
                    "B8BNyUr": "*ROOT*",
                    "TZCinEc": "Nl1wmvR",
                    "K6SFQya": "siZBXcV",
                    "MqEJ6qe": "hiONGdX",
                    "UXxqn3V": "SPwsbNX",
                    "c8SFTNF": "Wp1VbTt",
                    "xGLKIKY": "xkbucq5",
                    "kyXSr2v": "hiONGdX",
                    "MXTZZEt": "fR9LPFd",
                    "RFNsQFm": "wDktzS0",
                    "jOJMMkf": "uCMR9Zj",
                    "lQNMVYQ": "LYItsAv",
                    "EjBpY6M": "siZBXcV",
                    "T0VoCks": "Wv5mOJE",
                    "w7ArPVr": "MXTZZEt",
                    "q87Kf28": "Lym1D4P",
                    "bsJf5Wr": "aj9qyPn",
                    "Lc8cpzl": "Wv5mOJE",
                    "OrVRwqo": "lkrUGWw",
                    "Obd1vpa": "HPm0tak",
                    "aQE4hj2": "b4gDE7w",
                    "JKMtYPb": "mIEAeUx",
                    "bHTDkNt": "*ROOT*",
                    "GwQHE1G": "MGQRxNz",
                    "BExenoZ": "MI0CNJF",
                    "yRq4OQz": "b4gDE7w",
                    "TlZ8bVy": "iXlkpD4",
                    "N9TdU0f": "lvHnDYU",
                    "bjseGAu": "T0VoCks",
                    "utXjhED": "Lym1D4P",
                    "u9cx9Al": "pcoLdZQ",
                    "YmG80kZ": "ZCHzau4",
                    "xXJb99Y": "Q4PJwvc",
                    "HnyDBje": "vuvAAfe",
                    "s0MZSZp": "iXlkpD4",
                    "mxC36Xd": "ck7owMm",
                    "jmZZluy": "xvW0crq",
                    "VIVcend": "xvW0crq",
                    "wL4loWz": "GClVroc",
                    "NnbZNKQ": "MqEJ6qe",
                    "KG67Dbv": "siZBXcV",
                    "pgYcIZu": "hiONGdX",
                    "HSFc7ur": "n9BOKGB",
                    "mZ5BmkR": "v1iTUMD",
                    "LVZh1aM": "V7HcQBs",
                    "UOY63h5": "uWg2VEu",
                    "Cbh03XW": "MGQRxNz",
                    "o9BaBi8": "SPwsbNX",
                    "RBqZVzp": "f5qWfS3",
                    "fzYsYh9": "imbmeYq",
                    "lCYahkC": "UOY63h5",
                    "KlhxRoz": "VW8LgQx",
                    "rTbccoh": "pVoRBUo",
                    "zeGcxwd": "NQSg8nG",
                    "Lr5SBuc": "IP7J3LG",
                    "bg7QZP4": "jcT1V5G",
                    "ghE3ueN": "xvW0crq",
                    "uI18JML": "f7Z6SDA",
                    "CrK6bap": "jcT1V5G",
                    "jcT1V5G": "TMXubl3",
                    "T5yza7P": "dL10NW3",
                    "SWDdOei": "BAKZwqN",
                    "DyYLlhQ": "x2yY6vz",
                    "RBXgoUc": "MXTZZEt",
                    "tmrvLBj": "R1M6Hxh",
                    "BhoaIno": "MGQRxNz",
                    "G4y15CV": "MvbNBqh",
                    "VHdXub3": "Piab98U",
                    "byhDKML": "oAYMhpx",
                    "BphFOcf": "hvSOkw3",
                    "qDqMDh5": "UhO02eE",
                    "ejTODiV": "gl79eSM",
                    "fR5ibLJ": "ghE3ueN",
                    "MC1S1aN": "MGQRxNz",
                    "wDktzS0": "Lc8cpzl",
                    "jQqtqC9": "oyxV0M3",
                    "XaNvmCU": "f5qWfS3",
                    "yEkmGnr": "gNvWx5B",
                    "TMXubl3": "UT36qcq",
                    "DrIWEAy": "GwQHE1G",
                    "Id4UTYr": "imbmeYq",
                    "QX1SP32": "sowWuKp",
                    "tWWMnZ0": "n9BOKGB",
                    "RCBZZks": "T5yza7P",
                    "ervyl7d": "PpHu4vc",
                    "fnPZR53": "SPwsbNX",
                    "qEUZ9zc": "v1uncpr",
                    "RvP60FK": "SLssT1F",
                    "IP7J3LG": "ghE3ueN",
                    "GqaSTNV": "n9BOKGB",
                    "SPwsbNX": "t0UAAHE",
                    "mIEAeUx": "mLfhyg8",
                    "h3wc3qu": "MGQRxNz",
                    "Rn7sKrG": "blCNI4E",
                    "oEEp9K0": "BAKZwqN",
                    "gmVwRmJ": "isiBWYV",
                    "Lym1D4P": "BuEHUGp",
                    "lvuCxCK": "isiBWYV"
                },
                children: {
                    "FtGFtzr": {
                        "link_selector": "TVVxzVI",
                        "toolbar": "tgknyts"
                    },
                    "fVTLxUX": {
                        "editor": "X9nJk5J"
                    },
                    "TVVxzVI": {
                        "counter": "Bv9USsF"
                    },
                    "pgYcIZu": {
                        "question_desc": "CLcUehO"
                    },
                    "Lym1D4P": {
                        "add_question_tool_bar": "IPknAmM",
                        "lookup_bar": "utXjhED"
                    },
                    "xJGuNac": {
                        "counter": "d9JqAJg"
                    },
                    "X9nJk5J": {
                        "link_selector": "xJGuNac",
                        "counter": "dKcYyRd"
                    },
                    "utXjhED": {
                        "question_details": "sowWuKp",
                        "counter": "CHsgOoM"
                    },
                    "nwhZ0K9": {
                        "counter": "yu9yCnS"
                    },
                    "sowWuKp": {
                        "link_selector": "QX1SP32",
                        "counter": "CkGYDru",
                        "photo_search": "vuvAAfe"
                    },
                    "CLcUehO": {
                        "editor": "xIg9fwJ"
                    },
                    "MXTZZEt": {
                        "more_button": "w7ArPVr"
                    },
                    "kyXSr2v": {
                        "question_text": "fVTLxUX"
                    },
                    "x1zsUyq": {
                        "editor": "FtGFtzr"
                    },
                    "BuEHUGp": {
                        "content": "i4Qgns7",
                        "content_page_feed": "x2CF8dA"
                    },
                    "QX1SP32": {
                        "counter": "qKgYwyZ"
                    },
                    "xIg9fwJ": {
                        "link_selector": "nwhZ0K9",
                        "counter": "kGmOU5v",
                        "toolbar": "WD1Yv5I",
                        "photo_search": "r7EFSf2"
                    }
                },
                knowsAbout: {},
                groups: {
                    "__w2_xJGuNac_interaction": ["__w2_xJGuNac_input"],
                    "__w2_WD1Yv5I_interaction": ["__w2_WD1Yv5I_link_input", "__w2_WD1Yv5I_is_citation"],
                    "__w2_vuvAAfe_interaction": ["__w2_vuvAAfe_search"],
                    "__w2_nwhZ0K9_interaction": ["__w2_nwhZ0K9_input"],
                    "__w2_utXjhED_interaction": ["__w2_utXjhED_input"],
                    "__w2_FtGFtzr_interaction": ["__w2_FtGFtzr_doc"],
                    "__w2_TVVxzVI_interaction": ["__w2_TVVxzVI_input"],
                    "__w2_sowWuKp_interaction": ["__w2_sowWuKp_doc", "__w2_sowWuKp_file"],
                    "__w2_tgknyts_interaction": ["__w2_tgknyts_link_input", "__w2_tgknyts_is_citation"],
                    "__w2_QX1SP32_interaction": ["__w2_QX1SP32_input"],
                    "__w2_X9nJk5J_interaction": ["__w2_X9nJk5J_doc"],
                    "__w2_r7EFSf2_interaction": ["__w2_r7EFSf2_search"],
                    "__w2_xIg9fwJ_interaction": ["__w2_xIg9fwJ_doc", "__w2_xIg9fwJ_file"],
                    "__w2_IPknAmM_interaction": ["__w2_IPknAmM_anon_checkbox"]
                },
                domids: {
                    "MobdV7K": "BhNjkx",
                    "eQFC8Dz": "qEnXhF",
                    "xVptCc2": "NqsQue",
                    "axCiOlC": "PfzByG",
                    "GTp38HB": "Lwrehj",
                    "Ia3T0T7": "yYDaSM",
                    "XNdi4eG": "wqfAgA",
                    "f7Z6SDA": "XQksCb",
                    "OoBxEla": "vKAylT",
                    "oqcjjtQ": "OuHHmX",
                    "hfhyIl0": "YZKFCk",
                    "LkYFShd": "DMPXMo",
                    "fZkpigu": "YuxFbu",
                    "Obd1vpa": "mBfAFn",
                    "Suy8QUg": "nYIVoB",
                    "MvbNBqh": "fzkUCB",
                    "D1bEW6x": "YQAyoK",
                    "yisS0Zi": "cNHUFs",
                    "uWg2VEu": "JYeMiQ",
                    "Z17raYx": "qCZXWD",
                    "EXJIaRh": "soufqn",
                    "oyxV0M3": "CqTgsl",
                    "gGAciCC": "uayJLx",
                    "V7HcQBs": "nySOXd",
                    "q8xRbpq": "YsWlfw",
                    "CHPjpYy": "amdRsx",
                    "TymjSUl": "bPfyQU",
                    "zOv5fUz": "Fcarzm",
                    "UTOPvHx": "OvwMEQ",
                    "j7oewdb": "XNrjnq",
                    "hiONGdX": "iykVav",
                    "iXlkpD4": "cczkvU",
                    "Zs4ebaz": "QmGgxt",
                    "aj9qyPn": "fSbrBR",
                    "MruQZLu": "PjHsUu",
                    "Tcauwu5": "avZtmQ",
                    "ZUY5d0A": "JdeubW",
                    "GTVh9Uj": "nzRCMx",
                    "AhhzFix": "KZydPC",
                    "HsB59TN": "JJvugq",
                    "NTSzj9S": "EnqsmM",
                    "BmRuZnn": "byCRvD",
                    "n9BOKGB": "lKqddo",
                    "F4XBgkm": "CWpMmm",
                    "cwcBlsx": "BVSKTp",
                    "QW2KjQl": "pYwMQX",
                    "yQvCFNV": "pdcfyH",
                    "R1M6Hxh": "lMPcRA",
                    "gNvWx5B": "AMFKcl",
                    "wXbopZc": "vuLEmD",
                    "BHS1OD9": "PMRbuS",
                    "K3GFRO2": "SmRXRC",
                    "ykVox6Q": "WOVRMP",
                    "rc06TIL": "qFJNOp",
                    "iRWiDXa": "SqSTmU",
                    "VW8LgQx": "aWrysp",
                    "FCFNP8v": "wukiNh",
                    "nGEtG9z": "CPIMfm",
                    "OkSdRxc": "ydrgfv",
                    "rxGN2BK": "xiWmhS",
                    "TeyJVFN": "HuVtlN",
                    "mZ5BmkR": "LuFLfh",
                    "WUdJfCf": "eQfLiW",
                    "Cv8jFHS": "MdGinB",
                    "lkrUGWw": "XWAkys",
                    "hexCTew": "vALoqQ",
                    "Wp1VbTt": "wRsKCg",
                    "u9cx9Al": "RvYvct",
                    "Iazcala": "UvsqKb",
                    "LjDFw0E": "lyfWMF",
                    "UBpMYai": "xfcEgv",
                    "jZMeV8B": "ShyDhR",
                    "Lr5SBuc": "dBQLUE",
                    "vgDHyiV": "gsbdmu",
                    "lvHnDYU": "EKBJJf",
                    "ZldlaA6": "uUocoC",
                    "ck7owMm": "bbRGNJ",
                    "IP7J3LG": "kpEHgU",
                    "GAvqgRk": "MbfnUM",
                    "UxzeuYT": "RXWlCe",
                    "BBBxRnk": "HPhKgP",
                    "mIEAeUx": "iHdMSQ",
                    "Bd6sQgz": "DyNhMh",
                    "FGkImsa": "seKwUp",
                    "wr8iyVN": "MKsXOg",
                    "BAKZwqN": "wXgPZR",
                    "f5qWfS3": "utPyLe",
                    "InS1C53": "xIQCxw",
                    "CZfNPEE": "cLJULb",
                    "qdoVFjn": "sOrgkS",
                    "XGxZxdY": "WQQtdB",
                    "HRu6aHt": "VJgohn",
                    "Khu979Q": "bjDpTO",
                    "yXZAKOf": "EhxoIC",
                    "bsJf5Wr": "nHXNUO",
                    "UT36qcq": "nvSPlF",
                    "Lc8cpzl": "SFFzju",
                    "z3DetXf": "teGTtD",
                    "Uwnpx3B": "GitOBk",
                    "isiBWYV": "PwjtfL",
                    "nxCWD1G": "BkZpRS",
                    "hvSOkw3": "DSrHwg",
                    "GqaSTNV": "UHuBZH",
                    "blCNI4E": "PIxCzW",
                    "xkbucq5": "cyVxRI",
                    "btLHAEj": "Zwcfqd",
                    "E0AvwCo": "hsGNnT",
                    "RqozsCT": "OQubrR",
                    "zuPOMHD": "qtXuNo",
                    "oJos3jN": "kQyAOG",
                    "zp8V9wB": "kVydaY",
                    "zskuVDP": "HKgSET",
                    "xV1WSIo": "ndmRoj",
                    "TK0Bftu": "Edixef",
                    "VHMEQf5": "zIcGCZ",
                    "Nl1wmvR": "XEnstI",
                    "kJSOJeX": "XkYZFD",
                    "Msy6Go4": "RttfYx",
                    "xXJb99Y": "UmxSZC",
                    "xvW0crq": "DtpXIv",
                    "elhNq3C": "KRHMtS",
                    "NdTVZYw": "EoqFNs",
                    "Dr4ABQu": "rVnlrv",
                    "Wv5mOJE": "aLWPBY",
                    "Cnk867S": "qIzATC",
                    "ZHYomD6": "NErczP",
                    "bhyf7OP": "lXskaC",
                    "qGOAhYj": "LRTsKP",
                    "uCMR9Zj": "PHAYfN",
                    "ntzTvBY": "YKcoEb",
                    "UngswEV": "CrnNDF",
                    "Nq2crSN": "gcioNO",
                    "sbjBRRp": "ERveuX",
                    "uB3VDUI": "TeKWnX",
                    "iWyi4Xb": "wSLWhN",
                    "GwQHE1G": "HtoFeZ",
                    "oAYMhpx": "hqvQXu",
                    "yoAM2IZ": "qpnqcI",
                    "IMD6HqL": "BNfvkt",
                    "ffyZk6C": "taeEVe",
                    "jPRL6mU": "cGUZve",
                    "A0WwzTZ": "YxvDFp",
                    "QquTPHf": "ZRdydV",
                    "VDXgWEe": "YRMjFi",
                    "PZC4a07": "YvnJGm",
                    "imbmeYq": "GPzGgx",
                    "K6SFQya": "ULEUbs",
                    "XA6GSx6": "migVip",
                    "N8qJy8f": "IdcZNn",
                    "pgYcIZu": "bqwyoB",
                    "MqEJ6qe": "kRWQTf",
                    "CcU2mpj": "vdfBuY",
                    "xGLKIKY": "TlMYZW",
                    "uzfqJCj": "sLYYTF",
                    "kyXSr2v": "uWTMgg",
                    "MXTZZEt": "edzKvw",
                    "jksvbKY": "nwIcpV",
                    "BExenoZ": "HeWSru",
                    "MGQRxNz": "mavwdl",
                    "RFNsQFm": "CkZDDr",
                    "KlhxRoz": "RXoEUv",
                    "pAptrg9": "ftvbXG",
                    "FOQgvo3": "wYvows",
                    "ZJyp79N": "uRlSMJ",
                    "CJqZDUg": "iWlqyj",
                    "TzsYbBB": "yUiloI",
                    "EjBpY6M": "zhtxnD",
                    "T0VoCks": "FIrSiY",
                    "yEkmGnr": "ngwpvn",
                    "q87Kf28": "zZTPZj",
                    "zlEeKmU": "gIsxOc",
                    "vuvAAfe": "nASxvE",
                    "qLKV5Om": "EaGfGj",
                    "OFYpMBW": "YHmfPV",
                    "OrVRwqo": "rHZGTH",
                    "scS4e3y": "GfohhU",
                    "n2lFlph": "pKMbMO",
                    "pVoRBUo": "TtReEU",
                    "byhDKML": "JUnDfm",
                    "LVZh1aM": "QjBADb",
                    "UhO02eE": "DZDnYR",
                    "sKXv5Ul": "oQveOo",
                    "SLssT1F": "BOquES",
                    "N9TdU0f": "PbhJLL",
                    "bjseGAu": "AnikSV",
                    "utXjhED": "uqWHef",
                    "D4rcylu": "mWcaQJ",
                    "YmG80kZ": "gRSxQl",
                    "HPm0tak": "oSDtia",
                    "GClVroc": "PBGOvF",
                    "txHSWRw": "RGsDiq",
                    "b4gDE7w": "tvCemT",
                    "MtbnyL3": "oaWpPV",
                    "TlvQO9S": "zVrasZ",
                    "jmZZluy": "XaVXJY",
                    "dZYtOBC": "xOaDOc",
                    "wL4loWz": "rAviIl",
                    "NnbZNKQ": "DLbBku",
                    "KG67Dbv": "WKytCo",
                    "x2yY6vz": "DHtJzH",
                    "ZXtxmvR": "riDlLs",
                    "yEMXpfd": "Thopwi",
                    "YEZtx28": "pKquXZ",
                    "OlkCS2y": "tSAysp",
                    "tSw977V": "GJHFLx",
                    "uAt36WT": "cdPtPp",
                    "r7EFSf2": "SkTHPQ",
                    "UOY63h5": "RYiESy",
                    "dMdKZgk": "dIDZcK",
                    "x2CF8dA": "UwEOjq",
                    "RIcbfyd": "qBUofC",
                    "sKacFRB": "veYpJV",
                    "RBqZVzp": "HZjeEm",
                    "ibHdvbQ": "TWdEbJ",
                    "zeGcxwd": "aptTNx",
                    "t0UAAHE": "FIljxZ",
                    "yldO40P": "xhtMQP",
                    "ghE3ueN": "rOuLrR",
                    "uI18JML": "mrkUug",
                    "CrK6bap": "XWkCli",
                    "jcT1V5G": "bygVaK",
                    "T5yza7P": "ncmOJp",
                    "SWDdOei": "dYFuNc",
                    "RBXgoUc": "obJTHX",
                    "tmrvLBj": "LDOxQi",
                    "V1JVSZG": "EfnAhl",
                    "VHdXub3": "TUDovT",
                    "WizoWDq": "sGKNGv",
                    "fR5ibLJ": "rvDCjt",
                    "pE5YEax": "ZSlGvc",
                    "jQqtqC9": "bDkyFc",
                    "XaNvmCU": "TLyXAq",
                    "w7ArPVr": "tDyzFF",
                    "TMXubl3": "lxHtQD",
                    "AIVTuFr": "chopVE",
                    "mLfhyg8": "uunHSc",
                    "DrIWEAy": "ONlicQ",
                    "m0Z1rFD": "wmznGL",
                    "Id4UTYr": "XCXFCo",
                    "vX5Tth6": "ZbjAdd",
                    "pcoLdZQ": "BcCjpv",
                    "ervyl7d": "onTNgr",
                    "Soruy4F": "npYWkR",
                    "tZQkhvt": "hzeaDJ",
                    "CFiMyJy": "wvPWwu",
                    "SPwsbNX": "DiYvym",
                    "o9BaBi8": "iMkFKX",
                    "Rn7sKrG": "offXJC",
                    "gl79eSM": "NnhJbi",
                    "pKCQHHB": "wTvjDN",
                    "oEEp9K0": "CdQZBs",
                    "lvuCxCK": "rxsMRS",
                    "Lym1D4P": "NETpay",
                    "JbdBj7Y": "rspfTx",
                    "JmSVX0h": "zLOENo"
                },
                hmacs: {
                    "MobdV7K": "3Mcr12/DelJ5/d",
                    "BBaHYQc": "DkVa7axLDVNy0r",
                    "eQFC8Dz": "FFCe9FZXgmZzvm",
                    "qLKV5Om": "JTvtSXULcq04w6",
                    "wVOXsya": "wzXjEjB7bkuwCN",
                    "Ia3T0T7": "XcRLIP2XcJb6In",
                    "hA42zHO": "3f6wLCTb6v3oaS",
                    "f7Z6SDA": "VTNM8FOisQKRkl",
                    "iRWiDXa": "Q5DU4FheKYIIfH",
                    "WrTrUSB": "gVcYwSvdEN/E4X",
                    "hfhyIl0": "5742lrpGCy/yAE",
                    "rlapU7J": "yr748V7zaT+cMO",
                    "rDVl8Pk": "DkVa7axLDVNy0r",
                    "uzfqJCj": "3Mcr12/DelJ5/d",
                    "WD1Yv5I": "OtRx7BqNUhJOao",
                    "Suy8QUg": "/yfYu+Da5pGDIZ",
                    "iL3tSKh": "g5fLYBFUh3FoOi",
                    "D1bEW6x": "N32BG/USekDuzq",
                    "RPVeWJd": "78c6Aw6IN4wM3E",
                    "uWg2VEu": "q2yuBL0iV/ZqFO",
                    "VSIoYEI": "mfQVT4RPS1AAnI",
                    "EXJIaRh": "3Mcr12/DelJ5/d",
                    "ovzZEtM": "DkVa7axLDVNy0r",
                    "CLcUehO": "14JoSf8n1pBHyD",
                    "q8xRbpq": "N32BG/USekDuzq",
                    "CHPjpYy": "5742lrpGCy/yAE",
                    "NRGIxXr": "YHfNweTms8ZWw8",
                    "ZZRzdfR": "SK7Y4Uk5J/4D9/",
                    "j7oewdb": "mAbE9H/viLYqll",
                    "v1uncpr": "rOFlUXAsbPC4xQ",
                    "hiONGdX": "quiuYiRGrgNQL1",
                    "QNd7WUe": "I3HGRWUlaLA2zP",
                    "aj9qyPn": "a4OJ3Wq2AoTXjs",
                    "MruQZLu": "CF4WswIK+LL+Ua",
                    "Tcauwu5": "JTvtSXULcq04w6",
                    "BkFJ3l1": "GNvNbnR2SYw6pI",
                    "aVgong2": "ymWNAWNIMdOKzz",
                    "ZUY5d0A": "nQ5I/FyMIcmncx",
                    "Uwnpx3B": "vHS0WoH5SmwYmQ",
                    "BktNtzq": "ymWNAWNIMdOKzz",
                    "i4Qgns7": "EvauR91jUnaDqk",
                    "I8YYPqc": "zdhW+uWlLCvjDX",
                    "BmRuZnn": "fcOSlj8cZ52rRX",
                    "qdoVFjn": "NUCBO2e15lXGvM",
                    "F4XBgkm": "vHS0WoH5SmwYmQ",
                    "cwcBlsx": "htXrYBlcRtwEYE",
                    "d9JqAJg": "ZzkroqNWdLOMoO",
                    "DTmeDvM": "boDT8H8PgPms+j",
                    "OhwLcs8": "y5eyPnSO/7o2G4",
                    "TVVxzVI": "lGHwcGTe8T5v2f",
                    "CctG32X": "y081oVX3k3RLLS",
                    "gNvWx5B": "PWBNuzUvleM+Ne",
                    "fH9dPO9": "5pDWD/q+wbL9s8",
                    "wXbopZc": "/yfYu+Da5pGDIZ",
                    "yU8si6W": "bQDLIfC+tFuDZp",
                    "hexCTew": "MDFqfFeb0PFC3/",
                    "ZCXthQ0": "qwSCqDY1h0l1To",
                    "ykVox6Q": "mBvLJJlhS9t86l",
                    "ZqKUhUh": "y081oVX3k3RLLS",
                    "pFxVbKB": "xC/XFT2WKT4b71",
                    "BuEHUGp": "K0N05JGUz/jylI",
                    "MnNni7m": "PZehp13DRwulzr",
                    "FCFNP8v": "VTNM8FOisQKRkl",
                    "OkSdRxc": "2nGZ86L+cGEn53",
                    "wtUUMxr": "v/sbdiAGeWDv0k",
                    "TeyJVFN": "1tCvlxBobbzHF1",
                    "JfXF0B0": "xeT0jb8f+L1HQI",
                    "WUdJfCf": "VTNM8FOisQKRkl",
                    "Cv8jFHS": "+N7FURwDTndOik",
                    "lkrUGWw": "2nGZ86L+cGEn53",
                    "x2yY6vz": "1tCvlxBobbzHF1",
                    "Wp1VbTt": "/yfYu+Da5pGDIZ",
                    "ol7rFkX": "xeT0jb8f+L1HQI",
                    "TlvQO9S": "udZeaNz4nsP+Df",
                    "UBpMYai": "eBZOVn6m9Wj2gf",
                    "jZMeV8B": "ObqIjkNfyvGp1P",
                    "HazKFIT": "ymWNAWNIMdOKzz",
                    "Bd6sQgz": "VTNM8FOisQKRkl",
                    "KtVNCtG": "D4kr8xrLhLi74c",
                    "ekoCoGk": "DkVa7axLDVNy0r",
                    "fVTLxUX": "98q9exZ+ExNGnn",
                    "BeO6lnH": "I3HGRWUlaLA2zP",
                    "tZQkhvt": "JTvtSXULcq04w6",
                    "AIVTuFr": "Q5DU4FheKYIIfH",
                    "dL10NW3": "hAblj9LuBFHtwQ",
                    "plO1FmT": "5pDWD/q+wbL9s8",
                    "UngswEV": "e0/wBGY2HQ79jU",
                    "dLDZIaT": "S4wcGVzUxxHge1",
                    "BAKZwqN": "xc9pualkCoCoMv",
                    "fKbpQFl": "rOFlUXAsbPC4xQ",
                    "MtbnyL3": "XcRLIP2XcJb6In",
                    "qkQUPjG": "y081oVX3k3RLLS",
                    "HRu6aHt": "1on7AgBqko/PdP",
                    "yXZAKOf": "vHS0WoH5SmwYmQ",
                    "fuNdZnb": "SK7Y4Uk5J/4D9/",
                    "mXKCQvf": "rOFlUXAsbPC4xQ",
                    "z3DetXf": "VvyTcXcw6RPDKo",
                    "qijRrEy": "3f6wLCTb6v3oaS",
                    "xkbucq5": "q2yuBL0iV/ZqFO",
                    "E0AvwCo": "Ipp6lQEvtW67xy",
                    "RqozsCT": "qRLS2VTS+WwcBu",
                    "zuPOMHD": "QmptCxbbZG7bDy",
                    "oJos3jN": "nQ5I/FyMIcmncx",
                    "zp8V9wB": "g4xzBRN/M+N1Ud",
                    "SLssT1F": "UjT/VdWLH1MDCY",
                    "qL0st07": "ymWNAWNIMdOKzz",
                    "E1nlMgP": "DkVa7axLDVNy0r",
                    "kJSOJeX": "22Bsx+48DTiPQP",
                    "Map5Dis": "SK7Y4Uk5J/4D9/",
                    "x0I6rkq": "Tgfa0gV5AOK411",
                    "sowWuKp": "hCOzUykwj5woxA",
                    "xvW0crq": "0cgS9AjvYYU7T/",
                    "CcU2mpj": "Q5DU4FheKYIIfH",
                    "fR9LPFd": "JmnHIw7fbKYB10",
                    "Dr4ABQu": "B12ssjK1e8cku1",
                    "jp79ZPX": "xC/XFT2WKT4b71",
                    "owX1k8P": "Zt4T5maOWzJapI",
                    "YcxbAOW": "v/sbdiAGeWDv0k",
                    "uR482vW": "xeT0jb8f+L1HQI",
                    "YHJZgLE": "bQDLIfC+tFuDZp",
                    "cxT7u9g": "9ZfDwiTMm8mhnP",
                    "ZHYomD6": "g4xzBRN/M+N1Ud",
                    "M5enW5J": "D4kr8xrLhLi74c",
                    "yizZTls": "Zt4T5maOWzJapI",
                    "qGOAhYj": "Z7XgwJ16m8EE0R",
                    "zOv5fUz": "/yfYu+Da5pGDIZ",
                    "Nq2crSN": "VvyTcXcw6RPDKo",
                    "yINZVn0": "U7PeQceFc7PG1t",
                    "uB3VDUI": "FC/jHnx/yzEkpN",
                    "XJnWBJj": "boDT8H8PgPms+j",
                    "iWyi4Xb": "UjT/VdWLH1MDCY",
                    "qKgYwyZ": "ZzkroqNWdLOMoO",
                    "EhVMBdT": "SK7Y4Uk5J/4D9/",
                    "oAYMhpx": "PWBNuzUvleM+Ne",
                    "yoAM2IZ": "Q5DU4FheKYIIfH",
                    "KOgkBth": "33VXKhalKAomA/",
                    "DULu3HQ": "v/sbdiAGeWDv0k",
                    "tO6EYfh": "5pDWD/q+wbL9s8",
                    "iTPW4vI": "3f6wLCTb6v3oaS",
                    "mhCENT4": "cw6msTAzMQ4/lb",
                    "pcoLdZQ": "q2yuBL0iV/ZqFO",
                    "VDXgWEe": "ZQBHmYF8pDytsu",
                    "Bv9USsF": "ZzkroqNWdLOMoO",
                    "Iazcala": "1gCwrutK5iV+Lu",
                    "xJGuNac": "lGHwcGTe8T5v2f",
                    "gGAciCC": "soTRpVmYFaFyI/",
                    "RcoTNrU": "f25qt+bIkSjnfU",
                    "Jn208t9": "1UTkDR9nG4n2oK",
                    "yu9yCnS": "ZzkroqNWdLOMoO",
                    "C8QONVE": "SK7Y4Uk5J/4D9/",
                    "jksvbKY": "5742lrpGCy/yAE",
                    "T1NdlAM": "gVcYwSvdEN/E4X",
                    "MGQRxNz": "EYSO5aHzXVK1F6",
                    "DhquLBE": "hAblj9LuBFHtwQ",
                    "pAptrg9": "E451z7IEsBZRs2",
                    "jNMNAUa": "5pDWD/q+wbL9s8",
                    "FOQgvo3": "1gCwrutK5iV+Lu",
                    "tgknyts": "OtRx7BqNUhJOao",
                    "lOz4Ccx": "boDT8H8PgPms+j",
                    "TzsYbBB": "UjT/VdWLH1MDCY",
                    "RG72QgX": "78c6Aw6IN4wM3E",
                    "RpEP1nD": "hAblj9LuBFHtwQ",
                    "IPknAmM": "+eyKYHD0GheH6X",
                    "zlEeKmU": "XcRLIP2XcJb6In",
                    "vuvAAfe": "KapqJccFOVAU/n",
                    "WXTnJwO": "ymWNAWNIMdOKzz",
                    "OFYpMBW": "aNlloNV91jVqD7",
                    "xIg9fwJ": "4I9ivUbqWwabb0",
                    "TK2wm9E": "zdhW+uWlLCvjDX",
                    "scS4e3y": "PWBNuzUvleM+Ne",
                    "n2lFlph": "aNlloNV91jVqD7",
                    "pVoRBUo": "aNlloNV91jVqD7",
                    "FtGFtzr": "HaGcL2dWv/xGB8",
                    "UhO02eE": "68m7oEAL3itPPl",
                    "sKXv5Ul": "eBZOVn6m9Wj2gf",
                    "ZNTu8ko": "bQDLIfC+tFuDZp",
                    "D4rcylu": "A7Vncqf0UwZwLJ",
                    "HPm0tak": "QmptCxbbZG7bDy",
                    "GClVroc": "f9xaN9VSYKOyBq",
                    "txHSWRw": "FC/jHnx/yzEkpN",
                    "b4gDE7w": "Sj/25PzI0SUovs",
                    "VHMEQf5": "mAbE9H/viLYqll",
                    "FWCkpVP": "f25qt+bIkSjnfU",
                    "Hwgg8C4": "hAblj9LuBFHtwQ",
                    "Z92IUfg": "zdhW+uWlLCvjDX",
                    "oc5rqIP": "0kPJrVVLbS2MU1",
                    "p0m5axq": "v/sbdiAGeWDv0k",
                    "dZYtOBC": "Sa+3WhjLxxMwP5",
                    "MI0CNJF": "zdhW+uWlLCvjDX",
                    "x1zsUyq": "LMlfmSs8TH6oil",
                    "iEL6q5t": "f25qt+bIkSjnfU",
                    "ZXtxmvR": "5742lrpGCy/yAE",
                    "yEMXpfd": "MDFqfFeb0PFC3/",
                    "P3FLfdM": "xC/XFT2WKT4b71",
                    "BkKugM9": "I3HGRWUlaLA2zP",
                    "ffyZk6C": "7to0WKkz5018rv",
                    "tSw977V": "JTvtSXULcq04w6",
                    "uAt36WT": "Q5DU4FheKYIIfH",
                    "r7EFSf2": "KapqJccFOVAU/n",
                    "dMdKZgk": "Q5DU4FheKYIIfH",
                    "x2CF8dA": "KWOb/aGM/UlL2B",
                    "s9Jm2iD": "D4kr8xrLhLi74c",
                    "RIcbfyd": "1tCvlxBobbzHF1",
                    "XA6GSx6": "qIZfrZll3AaBQo",
                    "ibHdvbQ": "eBZOVn6m9Wj2gf",
                    "W2HFkjU": "Zt4T5maOWzJapI",
                    "t0UAAHE": "a414QTweCXacqn",
                    "yldO40P": "N32BG/USekDuzq",
                    "FNDADoS": "OnhN3m5Zp8bloa",
                    "egxrFHH": "AYzvqaZ9CiFOzI",
                    "X9nJk5J": "ysnAFc4EpxcAlm",
                    "v1iTUMD": "yr748V7zaT+cMO",
                    "MMSDRU9": "yr748V7zaT+cMO",
                    "qBTekH6": "hAblj9LuBFHtwQ",
                    "WizoWDq": "mAbE9H/viLYqll",
                    "kGmOU5v": "ZzkroqNWdLOMoO",
                    "xV1WSIo": "MDFqfFeb0PFC3/",
                    "FGkImsa": "1gCwrutK5iV+Lu",
                    "pE5YEax": "VvyTcXcw6RPDKo",
                    "JbdBj7Y": "2nGZ86L+cGEn53",
                    "mLfhyg8": "FFCe9FZXgmZzvm",
                    "jPRL6mU": "FC/jHnx/yzEkpN",
                    "CFiMyJy": "PWBNuzUvleM+Ne",
                    "N8qJy8f": "SLlHXCSixomU23",
                    "xJITWXg": "I3HGRWUlaLA2zP",
                    "f5qWfS3": "s/W927WcMedX3x",
                    "Soruy4F": "1gCwrutK5iV+Lu",
                    "PpHu4vc": "y081oVX3k3RLLS",
                    "NTSzj9S": "fyttVvo1pmZ5ia",
                    "rTKNAWB": "v/sbdiAGeWDv0k",
                    "sKacFRB": "9ohLcTX0o7f7CX",
                    "gl79eSM": "Sa+3WhjLxxMwP5",
                    "pKCQHHB": "sVV7ghJpF7pn4b",
                    "QVdSDXY": "zdhW+uWlLCvjDX",
                    "vX5Tth6": "E+mVuK2XdQ+u68",
                    "imdZZ0z": "xeT0jb8f+L1HQI",
                    "JmSVX0h": "soTRpVmYFaFyI/",
                    "XDAuano": "xeT0jb8f+L1HQI",
                    "xVptCc2": "udZeaNz4nsP+Df",
                    "axCiOlC": "udZeaNz4nsP+Df",
                    "GTp38HB": "N32BG/USekDuzq",
                    "CjyRGGg": "3f6wLCTb6v3oaS",
                    "W12gMJv": "dZUKqgrmjfibWg",
                    "XNdi4eG": "UjT/VdWLH1MDCY",
                    "KdBNpCn": "f25qt+bIkSjnfU",
                    "Hu9THMv": "3f6wLCTb6v3oaS",
                    "tpopbLK": "zdhW+uWlLCvjDX",
                    "gJ6Cgt0": "DAalTWsvfBzxrO",
                    "OoBxEla": "CF4WswIK+LL+Ua",
                    "IVny324": "bQDLIfC+tFuDZp",
                    "oqcjjtQ": "H4N6YL2RRfUEoi",
                    "bhyf7OP": "3Bo2eqVyZREtFA",
                    "NQSg8nG": "9ZfDwiTMm8mhnP",
                    "LkYFShd": "UjT/VdWLH1MDCY",
                    "fZkpigu": "QmptCxbbZG7bDy",
                    "MvbNBqh": "/yfYu+Da5pGDIZ",
                    "oyxV0M3": "a414QTweCXacqn",
                    "V7HcQBs": "2nGZ86L+cGEn53",
                    "TymjSUl": "2nGZ86L+cGEn53",
                    "ntzTvBY": "koygbd4HXZbv/U",
                    "UTOPvHx": "FC/jHnx/yzEkpN",
                    "Jt9sRUx": "3f6wLCTb6v3oaS",
                    "iXlkpD4": "a4OJ3Wq2AoTXjs",
                    "Zs4ebaz": "3Mcr12/DelJ5/d",
                    "VN7WWqr": "I3HGRWUlaLA2zP",
                    "f9ClQOm": "rOFlUXAsbPC4xQ",
                    "GTVh9Uj": "mBvLJJlhS9t86l",
                    "m0Z1rFD": "soTRpVmYFaFyI/",
                    "HsB59TN": "3Mcr12/DelJ5/d",
                    "xwjq87b": "qwSCqDY1h0l1To",
                    "capMibR": "bQDLIfC+tFuDZp",
                    "n9BOKGB": "PWBNuzUvleM+Ne",
                    "zCI6FS2": "zdhW+uWlLCvjDX",
                    "yisS0Zi": "vHS0WoH5SmwYmQ",
                    "Z17raYx": "MDFqfFeb0PFC3/",
                    "R1M6Hxh": "q2yuBL0iV/ZqFO",
                    "yQvCFNV": "Q5DU4FheKYIIfH",
                    "QW2KjQl": "XkRV3gq4ZuTh9i",
                    "i9YP5nf": "f25qt+bIkSjnfU",
                    "BHS1OD9": "Sa+3WhjLxxMwP5",
                    "K3GFRO2": "/yfYu+Da5pGDIZ",
                    "rc06TIL": "QmptCxbbZG7bDy",
                    "F2CljTL": "boDT8H8PgPms+j",
                    "Q4PJwvc": "gVcYwSvdEN/E4X",
                    "QMCzMLp": "ymWNAWNIMdOKzz",
                    "VW8LgQx": "2nGZ86L+cGEn53",
                    "V1JVSZG": "mAbE9H/viLYqll",
                    "nGEtG9z": "N32BG/USekDuzq",
                    "z9zq17Y": "y081oVX3k3RLLS",
                    "rxGN2BK": "FC/jHnx/yzEkpN",
                    "ZJyp79N": "FFCe9FZXgmZzvm",
                    "OlkCS2y": "hva24wufBRPO9n",
                    "Khu979Q": "QmptCxbbZG7bDy",
                    "BtCpYIl": "cw6msTAzMQ4/lb",
                    "YEZtx28": "dJa+K9iq5ZSxhV",
                    "CkGYDru": "ZzkroqNWdLOMoO",
                    "Piab98U": "gVcYwSvdEN/E4X",
                    "vgDHyiV": "g4xzBRN/M+N1Ud",
                    "lvHnDYU": "mBvLJJlhS9t86l",
                    "ZldlaA6": "g4xzBRN/M+N1Ud",
                    "ck7owMm": "PTdbCGRhGSi6IV",
                    "GAvqgRk": "1gCwrutK5iV+Lu",
                    "UxzeuYT": "Q5DU4FheKYIIfH",
                    "BBBxRnk": "RBbDsiUbk40vfy",
                    "LYItsAv": "rOFlUXAsbPC4xQ",
                    "mRB9QGU": "Zt4T5maOWzJapI",
                    "wGqjJxr": "DkVa7axLDVNy0r",
                    "wr8iyVN": "DukzqzOkMDamfY",
                    "TNqgndu": "9JblKMaWTbc61h",
                    "InS1C53": "azcy8t2uqfuvwu",
                    "CZfNPEE": "Q5DU4FheKYIIfH",
                    "CHsgOoM": "ZzkroqNWdLOMoO",
                    "J1tfZ8V": "gVcYwSvdEN/E4X",
                    "XGxZxdY": "JHc1da7ebZfthl",
                    "fTwmHSO": "I3HGRWUlaLA2zP",
                    "UT36qcq": "QmptCxbbZG7bDy",
                    "CJqZDUg": "JTvtSXULcq04w6",
                    "AhhzFix": "CF4WswIK+LL+Ua",
                    "isiBWYV": "PWBNuzUvleM+Ne",
                    "nxCWD1G": "eBZOVn6m9Wj2gf",
                    "RwlgVxV": "zdhW+uWlLCvjDX",
                    "hvSOkw3": "Sa+3WhjLxxMwP5",
                    "o8q7xkF": "5pDWD/q+wbL9s8",
                    "blCNI4E": "nYm0l7yxfWcz1u",
                    "tVZXt92": "78c6Aw6IN4wM3E",
                    "btLHAEj": "soTRpVmYFaFyI/",
                    "ZCHzau4": "y081oVX3k3RLLS",
                    "A0WwzTZ": "a414QTweCXacqn",
                    "dKcYyRd": "ZzkroqNWdLOMoO",
                    "bMLPLAJ": "dtOZc5Sp/8VxoN",
                    "QquTPHf": "mAbE9H/viLYqll",
                    "mrbrNnf": "yIhehupLwXy2ZT",
                    "TK0Bftu": "mAbE9H/viLYqll",
                    "tdYJURv": "ymWNAWNIMdOKzz",
                    "Nl1wmvR": "1gCwrutK5iV+Lu",
                    "gftmO5x": "33VXKhalKAomA/",
                    "lWMaDS7": "boDT8H8PgPms+j",
                    "PZC4a07": "q2yuBL0iV/ZqFO",
                    "Msy6Go4": "vHS0WoH5SmwYmQ",
                    "tMvn4G2": "9ZfDwiTMm8mhnP",
                    "elhNq3C": "XcRLIP2XcJb6In",
                    "NdTVZYw": "VTNM8FOisQKRkl",
                    "Us28G6Z": "J5qL/fLLfiWVec",
                    "Z3c8tk2": "yr748V7zaT+cMO",
                    "ZLXDrVr": "xC/XFT2WKT4b71",
                    "Wv5mOJE": "a414QTweCXacqn",
                    "Cnk867S": "soTRpVmYFaFyI/",
                    "imbmeYq": "a4OJ3Wq2AoTXjs",
                    "siZBXcV": "MQ7QadbPqkrgVG",
                    "jKPm5Sd": "bQDLIfC+tFuDZp",
                    "uCMR9Zj": "CF4WswIK+LL+Ua",
                    "kj2gqHp": "xeT0jb8f+L1HQI",
                    "sbjBRRp": "Sa+3WhjLxxMwP5",
                    "rsXTsVj": "fTqTKBA8YOwpQv",
                    "nwhZ0K9": "lGHwcGTe8T5v2f",
                    "aBAFjP5": "xeT0jb8f+L1HQI",
                    "LjDFw0E": "mBvLJJlhS9t86l",
                    "Vlf1NUc": "mvmk+gybDMMeu+",
                    "IMD6HqL": "Jm9DFyolok3wOf",
                    "kOuiVGQ": "D4kr8xrLhLi74c",
                    "dnS1Y5b": "P+lf6mS9civj1Q",
                    "zskuVDP": "1tCvlxBobbzHF1",
                    "aClNv6e": "xC/XFT2WKT4b71",
                    "B8BNyUr": "P59/ftoRCyUqpi",
                    "TZCinEc": "rOFlUXAsbPC4xQ",
                    "K6SFQya": "5742lrpGCy/yAE",
                    "MqEJ6qe": "QQM5uOUQs8WhsR",
                    "UXxqn3V": "hAblj9LuBFHtwQ",
                    "c8SFTNF": "5pDWD/q+wbL9s8",
                    "xGLKIKY": "CF4WswIK+LL+Ua",
                    "kyXSr2v": "NfaiNgy9tWJiQF",
                    "MXTZZEt": "2S24bo9orExmnI",
                    "RFNsQFm": "MDFqfFeb0PFC3/",
                    "jOJMMkf": "yr748V7zaT+cMO",
                    "lQNMVYQ": "f25qt+bIkSjnfU",
                    "EjBpY6M": "5742lrpGCy/yAE",
                    "T0VoCks": "q2yuBL0iV/ZqFO",
                    "w7ArPVr": "/TW7WZFZNft72w",
                    "q87Kf28": "TJSRXegIJNaTfX",
                    "bsJf5Wr": "VvyTcXcw6RPDKo",
                    "Lc8cpzl": "a4OJ3Wq2AoTXjs",
                    "OrVRwqo": "udZeaNz4nsP+Df",
                    "Obd1vpa": "a414QTweCXacqn",
                    "aQE4hj2": "zdhW+uWlLCvjDX",
                    "JKMtYPb": "qwSCqDY1h0l1To",
                    "bHTDkNt": "HzvmGjYQIB+9RT",
                    "GwQHE1G": "Wk91Da3smmqFud",
                    "BExenoZ": "Q5DU4FheKYIIfH",
                    "yRq4OQz": "zdhW+uWlLCvjDX",
                    "TlZ8bVy": "Zt4T5maOWzJapI",
                    "N9TdU0f": "FFCe9FZXgmZzvm",
                    "bjseGAu": "eBZOVn6m9Wj2gf",
                    "utXjhED": "af2epjWO7ZY1nI",
                    "u9cx9Al": "N32BG/USekDuzq",
                    "YmG80kZ": "g4xzBRN/M+N1Ud",
                    "xXJb99Y": "1tCvlxBobbzHF1",
                    "HnyDBje": "ymWNAWNIMdOKzz",
                    "s0MZSZp": "9ZfDwiTMm8mhnP",
                    "mxC36Xd": "Vbbrm35U1w/qDy",
                    "jmZZluy": "nLVz0HjqG6qkSq",
                    "VIVcend": "HOPzs045uAvB03",
                    "wL4loWz": "WnMkpzUqJrLtl8",
                    "NnbZNKQ": "UylPNrkrE2pj93",
                    "KG67Dbv": "5742lrpGCy/yAE",
                    "pgYcIZu": "NEel8/G7TMh4Zo",
                    "HSFc7ur": "xC/XFT2WKT4b71",
                    "mZ5BmkR": "vHS0WoH5SmwYmQ",
                    "LVZh1aM": "udZeaNz4nsP+Df",
                    "UOY63h5": "CF4WswIK+LL+Ua",
                    "Cbh03XW": "RtmeC5UcUfj71W",
                    "o9BaBi8": "VvyTcXcw6RPDKo",
                    "RBqZVzp": "mLotePatBPT+eE",
                    "fzYsYh9": "9ZfDwiTMm8mhnP",
                    "lCYahkC": "yr748V7zaT+cMO",
                    "KlhxRoz": "udZeaNz4nsP+Df",
                    "rTbccoh": "qwSCqDY1h0l1To",
                    "zeGcxwd": "MDFqfFeb0PFC3/",
                    "Lr5SBuc": "umqX1NAr0XMe/g",
                    "bg7QZP4": "gVcYwSvdEN/E4X",
                    "ghE3ueN": "uN8WDh5B2aF949",
                    "uI18JML": "3Mcr12/DelJ5/d",
                    "CrK6bap": "VvyTcXcw6RPDKo",
                    "jcT1V5G": "a4OJ3Wq2AoTXjs",
                    "T5yza7P": "Sa+3WhjLxxMwP5",
                    "SWDdOei": "y1+KhEHoznsQiF",
                    "DyYLlhQ": "DkVa7axLDVNy0r",
                    "RBXgoUc": "VTNM8FOisQKRkl",
                    "tmrvLBj": "eBZOVn6m9Wj2gf",
                    "BhoaIno": "IzxS3CkGQYT8c4",
                    "G4y15CV": "5pDWD/q+wbL9s8",
                    "VHdXub3": "1tCvlxBobbzHF1",
                    "byhDKML": "XcRLIP2XcJb6In",
                    "BphFOcf": "D4kr8xrLhLi74c",
                    "qDqMDh5": "ymWNAWNIMdOKzz",
                    "ejTODiV": "D4kr8xrLhLi74c",
                    "fR5ibLJ": "M7472vScnT6D4K",
                    "MC1S1aN": "l23hVo6/IgFySi",
                    "wDktzS0": "9ZfDwiTMm8mhnP",
                    "jQqtqC9": "UjT/VdWLH1MDCY",
                    "XaNvmCU": "1XcvbpbAKl4L9G",
                    "yEkmGnr": "XcRLIP2XcJb6In",
                    "TMXubl3": "a414QTweCXacqn",
                    "DrIWEAy": "N/sxnXEyrXbKsR",
                    "Id4UTYr": "soTRpVmYFaFyI/",
                    "QX1SP32": "lGHwcGTe8T5v2f",
                    "tWWMnZ0": "v/sbdiAGeWDv0k",
                    "RCBZZks": "D4kr8xrLhLi74c",
                    "ervyl7d": "g4xzBRN/M+N1Ud",
                    "fnPZR53": "Zt4T5maOWzJapI",
                    "qEUZ9zc": "3f6wLCTb6v3oaS",
                    "RvP60FK": "SK7Y4Uk5J/4D9/",
                    "IP7J3LG": "BxheriYYELjLOo",
                    "GqaSTNV": "FC/jHnx/yzEkpN",
                    "SPwsbNX": "a4OJ3Wq2AoTXjs",
                    "mIEAeUx": "aNlloNV91jVqD7",
                    "h3wc3qu": "f+7jRbzj/Cq4EU",
                    "Rn7sKrG": "zfaa2ZBBYxG+Z/",
                    "oEEp9K0": "y1+KhEHoznsQiF",
                    "gmVwRmJ": "boDT8H8PgPms+j",
                    "Lym1D4P": "C6d0VzyPj0labB",
                    "lvuCxCK": "JTvtSXULcq04w6"
                }
            });
            var _components = [new(require("view/livenode").InteractionModeBanner)("oc5rqIP", "", {}), new(require("view/livenode").ErrorBanner)("B8BNyUr", "", {
                "default_text": "Your request was not completed."
            }), new(require("unified_view/components").JSTest)("gJ6Cgt0", "", {}), new(require("app/view/layout").QTextImageEnlarger)("dLDZIaT", "", {}), new(require("app/view/layout").QTextEmbedEnlarger)("rsXTsVj", "", {}), new(require("app/view/layout").QTextGIFPlayer)("W12gMJv", "", {}), new(require("app/view/home").ContentPageFeed)("x2CF8dA", "content_page_feed", {
                "switch_hide": "@_truncated",
                "switch_show": "@_expanded",
                "log_switch_time": true,
                "switch_on": ["load"],
                "loading_hide": "@loadinghide",
                "fetch_on": ["load"],
                "fetch_into": "@_expanded",
                "loading_show": "@loadingshow",
                "serialized_args": "00010000a563e9b67a81d75413065d9a0b7862a9b53fdfadf48d33b78fd033b6007cd64728c6bc56b57b064121464f5b579b218a270bd300e3a4977f953acbe8858baca1cd1be9106de4e0155dccc0f4804973422d09f2052ba5e52f34b55a40a72a60a5a35bb0ae062d2ff9ef40214bdf82e30ba540d78de9e85f87b6b6c16ccc4ea8168dbb8bd364e4de10fd81c4b109947a9ab5c0bfa6b7fc5702ad979dc95c7ba7d66d7b59c5403d0e53e931bacc4c6e9ef0"
            }), new(require('login').LoginSignal)("oqcjjtQ", "", {
                "uid": 237786945
            }), new(require("view/captcha").Captcha)("wVOXsya", "", {}), new(require("unified_view/smyte").SmyteComponent)("bHTDkNt", "", {
                "hashed_uid": "a498ddc344f8cabfc8e7b0e984ceb3f1",
                "api_key": "caf6615f63677124eac72d381cb0a91e",
                "session_id": "3EzSHm1aqlvbv1BM1zFbyg=="
            }), new(require("view/reauth").ReauthWrapper)("TNqgndu", "", {}), new(require("view/livenode").LiveSpinner)("Jn208t9", "", {}), new(require("view/pmsg").PMsgContainer)("NRGIxXr", "", {}), new(require('unified_view/signup/google').GoogleAutoLoginWeb)("vX5Tth6", "", {
                "viewer": 237786945,
                "scopes": ["email", "profile"]
            }), new(require('app/view/site_header/logged_in').LoggedInSiteHeader)("Lym1D4P", "", {}), new(require('app/view/question/lookup_bar').LookupBarSelector)("utXjhED", "lookup_bar", {
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
                "selector_id": 1344099141,
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
            }), new(require("unified_view/character_counter").CharacterCounter)("CHsgOoM", "counter", {
                "visible_on": 15.0,
                "limit": 150,
                "warning_limit": -1
            }), new(require('app/view/question/lookup_bar').AddQuestionLookupBarButton)("yINZVn0", "", {
                "source": "",
                "targetOid": null,
                "targetType": null,
                "logged_in": true
            }), new(require("app/view/question/lookup_bar_details").AskBarDetails)("sowWuKp", "question_details", {
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
            }), new(require("unified_view/character_counter").CharacterCounter)("CkGYDru", "counter", {
                "visible_on": 30.0,
                "limit": 300,
                "warning_limit": -1
            }), new(require("view/link_selector").LinkSelector)("QX1SP32", "link_selector", {
                "length_limit": 250,
                "allow_no_selection": false,
                "metadata": {},
                "is_textarea": false,
                "query": "",
                "should_autofocus": false,
                "show_results_for_empty_query": false
            }), new(require("unified_view/character_counter").CharacterCounter)("qKgYwyZ", "counter", {
                "visible_on": 25.0,
                "limit": 250,
                "warning_limit": -1
            }), new(require("unified_view/qtext2/photo_search").PhotoSearch)("vuvAAfe", "photo_search", {
                "load_default_results": false,
                "default_query": "",
                "empty_msg": "No photos found"
            }), new(require("app/view/site_header/logged_in").NotifsNavItemBase)("GClVroc", "", {
                "css_positioning": true,
                "on": null,
                "load_on_pageload": true,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "click_open": true,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/site_header/logged_in").NotifsNavBadge)("wL4loWz", "", {}), new(require('app/view/question/lookup_bar').LookupBarSiteHeaderAddQuestion)("IPknAmM", "add_question_tool_bar", {}), new(require("view/tooltip").TooltipComponent)("RPVeWJd", "", {
                "options": {
                    "direction": "bottom",
                    "contents": "Add question details",
                    "attach_to_body": true
                }
            }), new(require("view/tooltip").TooltipComponent)("tVZXt92", "", {
                "options": {
                    "direction": "bottom",
                    "contents": "Hide and clear question details",
                    "attach_to_body": true
                }
            }), new(require("app/view/notifications/header").TitleNotificationsCount)("NTSzj9S", "", {
                "notif_count": 0,
                "inbox_count": 0
            }), new(require("view/hover_menu").HoverMenu)("BAKZwqN", "", {
                "css_positioning": true,
                "on": null,
                "load_on_pageload": true,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "click_open": true,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("view/hover_menu").HoverMenu)("ZUY5d0A", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": null,
                    "uid": 237786945,
                    "aid": null
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": false
            }), new(require("view/user").UserPhoto)("BtCpYIl", "", {}), new(require("view/user").Name)("SWDdOei", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": null,
                    "uid": 237786945,
                    "aid": null
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": false
            }), new(require("view/hover_menu").HoverMenu)("oJos3jN", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": null,
                    "uid": 237786945,
                    "aid": null
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": false
            }), new(require("view/user").UserPhoto)("mhCENT4", "", {}), new(require("view/user").Name)("oEEp9K0", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": null,
                    "uid": 237786945,
                    "aid": null
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": false
            }), new(require("app/view/question").QuestionMain)("xvW0crq", "", {
                "record_impression": true,
                "qid": 1503894
            }), new(require("app/view/nux/dialog").ModalNuxDialogCloseIndicator)("VIVcend", "", {}), new(require("app/view/question").QuestionArea)("hiONGdX", "", {
                "qid": 1503894
            }), new(require("app/view/topic/topic_list").QuestionTopicHorizontalList)("MqEJ6qe", "", {
                "qid": 1503894
            }), new(require("unified_view/toggle").ToggleBase)("NnbZNKQ", "", {
                "switch_hide": "@more",
                "switch_show": "@fetch_into",
                "log_switch_time": true,
                "switch_on": ["click", "@more"],
                "loading_hide": "@loadinghide",
                "fetch_on": ["click", "@more"],
                "fetch_into": "@fetch_into",
                "loading_show": "@loadingshow",
                "serialized_args": "00010000ea35a62efa10e4a0701fd3af0d2ab06cabe5f31600227ba4f46e2fe469dbcb2497071a07f237905fa584eb5fd61be24c3c618d87f18f1d13cfb258fece6cc25864b9c56b9b5bdab6c52f9c78717ec9666b9768073213ad081642ad8b450f5c1814d1550b638eae29d4eb6e1879929e2ca4b2bae7424ed93687c35a6bf381db760de03e64488031413166f87e00f17ce3a992a886320bdaedc53834790d790c9315f31beb81db1ed32cc3ab33074c37f3226818e6c6562a7193b96653cf89917fb62bdf5d2881a3193f3668c86bd5f1c65f9a65ff309e1f94f3efaceb2b0536a4d9659f1cddc6e59b0786181a16b26faefdbe2325f35bd3a78a3de7886710e067"
            }), new(require("app/view/topic/topic_list").TopicListItem)("ykVox6Q", "", {
                "tid": 1401386,
                "remove_tooltip_text": "Remove",
                "qid": 1503894
            }), new(require("view/hover_menu").HoverMenu)("ZJyp79N", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "tid": 1401386
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/topic").TopicTrendingIndicator)("xwjq87b", "", {
                "tooltipText": "Trending"
            }), new(require("app/view/topic/topic_list").TopicListItem)("LjDFw0E", "", {
                "tid": 9755,
                "remove_tooltip_text": "Remove",
                "qid": 1503894
            }), new(require("view/hover_menu").HoverMenu)("eQFC8Dz", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "tid": 9755
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/topic").TopicTrendingIndicator)("rTbccoh", "", {
                "tooltipText": "Trending"
            }), new(require("app/view/topic/topic_list").TopicListItem)("GTVh9Uj", "", {
                "tid": 16450,
                "remove_tooltip_text": "Remove",
                "qid": 1503894
            }), new(require("view/hover_menu").HoverMenu)("mLfhyg8", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "tid": 16450
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/topic").TopicTrendingIndicator)("JKMtYPb", "", {
                "tooltipText": "Trending"
            }), new(require("app/view/topic/topic_list").TopicListItem)("lvHnDYU", "", {
                "tid": 9340,
                "remove_tooltip_text": "Remove",
                "qid": 1503894
            }), new(require("view/hover_menu").HoverMenu)("N9TdU0f", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "tid": 9340
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/topic").TopicTrendingIndicator)("ZCXthQ0", "", {
                "tooltipText": "Trending"
            }), new(require("view/tooltip").TooltipComponent)("RG72QgX", "", {
                "options": {
                    "contents": "Edit topics",
                    "attach_to_body": true
                }
            }), new(require("app/view/question").QuestionTextInlineEditor)("fVTLxUX", "question_text", {
                "require_comment": false,
                "is_qtext": true,
                "focus_onload": false,
                "unsaved_content_msg": "Your content has not been saved.",
                "content_type": "question_text",
                "typing_area": null,
                "id": 1503894,
                "submit_text": "Update",
                "draft_space": null,
                "require_value": false,
                "input": "question_text_edit",
                "show_editor": false
            }), new(require("unified_view/qtext2/editor").Editor)("X9nJk5J", "editor", {
                "length_limit": 150,
                "photo_search_enabled": true,
                "interface_strings": {
                    "uploading_image": "Uploading 1 image...",
                    "upload_error": "There was an error uploading this file.",
                    "drop_images": "Drop images here",
                    "placeholder": "",
                    "uploading_images": "Uploading {} images..."
                },
                "is_plaintext": false,
                "disabled_commands": ["cite", "horizontal-rule", "image", "ordered_list", "quote", "return", "soft-return", "unordered_list", "video"],
                "content_json": {
                    "sections": [{
                        "type": "plain",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "What is the coolest psychological trick?",
                            "modifiers": {}
                        }]
                    }]
                }
            }), new(require("unified_view/character_counter").CharacterCounter)("dKcYyRd", "counter", {
                "visible_on": 15.0,
                "limit": 150,
                "warning_limit": -1
            }), new(require("view/link_selector").LinkSelector)("xJGuNac", "link_selector", {
                "length_limit": 250,
                "allow_no_selection": false,
                "metadata": {},
                "is_textarea": false,
                "query": "",
                "should_autofocus": false,
                "show_results_for_empty_query": false
            }), new(require("unified_view/character_counter").CharacterCounter)("d9JqAJg", "counter", {
                "visible_on": 25.0,
                "limit": 250,
                "warning_limit": -1
            }), new(require('app/view/question').QuestionDetails)("pgYcIZu", "", {}), new(require('app/view/question').QuestionDetailsInlineEditor)("CLcUehO", "question_desc", {
                "require_comment": false,
                "is_qtext": true,
                "focus_onload": false,
                "unsaved_content_msg": "Your content has not been saved.",
                "content_type": "question_details",
                "typing_area": null,
                "id": 1503894,
                "submit_text": "Update",
                "draft_space": null,
                "require_value": false,
                "input": "question_details_text_edit",
                "show_editor": false
            }), new(require("app/view/components").QtextTruncate)("gftmO5x", "", {
                "show_more": true,
                "was_truncated": false
            }), new(require("unified_view/qtext2/editor").Editor)("xIg9fwJ", "editor", {
                "length_limit": 300,
                "photo_search_enabled": true,
                "interface_strings": {
                    "uploading_image": "Uploading 1 image...",
                    "upload_error": "There was an error uploading this file.",
                    "drop_images": "Drop images here",
                    "placeholder": "",
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
                            "text": "Either a perceptual hack or some interesting associations we automatically make.",
                            "modifiers": {}
                        }]
                    }]
                }
            }), new(require("unified_view/qtext2/toolbar").Web)("WD1Yv5I", "toolbar", {
                "buttons": ["bold", "italic", "unordered_list", "ordered_list", "quote", "link", "image", "overflow_show", "mention", "code", "math", "indent", "deindent", "undo", "redo", "overflow_hide"]
            }), new(require("unified_view/character_counter").CharacterCounter)("kGmOU5v", "counter", {
                "visible_on": 30.0,
                "limit": 300,
                "warning_limit": -1
            }), new(require("view/link_selector").LinkSelector)("nwhZ0K9", "link_selector", {
                "length_limit": 250,
                "allow_no_selection": false,
                "metadata": {},
                "is_textarea": false,
                "query": "",
                "should_autofocus": false,
                "show_results_for_empty_query": false
            }), new(require("unified_view/character_counter").CharacterCounter)("yu9yCnS", "counter", {
                "visible_on": 25.0,
                "limit": 250,
                "warning_limit": -1
            }), new(require("unified_view/qtext2/photo_search").PhotoSearch)("r7EFSf2", "photo_search", {
                "load_default_results": false,
                "default_query": "",
                "empty_msg": "No photos found"
            }), new(require("unified_view/action_bar/_action_bar").Question)("MGQRxNz", "", {
                "lazy_loaded": true,
                "sticky_offsets": {
                    "top": 300
                },
                "oid": 1503894,
                "sdvars": "AAEAABZtd/oo859eL3kfGt7GSXzldqcWLmCGHNgwjMStNOLSBJbMFqSM9j8eHnyh8dK9JiKtIrKn\nJrZw1Y6iCbloH3WhmUKOq1OmoWu2tPFdcVvudHgxwfgqbVrvPZfef2xt/qL2SnfMn5qRXMC1VP7E\n7AIk88br7HkrbdtsszjXg/SyrG43TMj+9O/R+cgE+NEj4QTWf5BueOoHz3MkJmWShbc=\n",
                "is_sticky": false
            }), new(require("app/view/feed/modal").WriteAnswerButton)("N8qJy8f", "", {
                "serialized_dvars": "00010000a16089890d008c2ef0fea86b7aa294d644e9d150ecb5e986ef8dfa45a9b7a7891c0796a510631baa0ccef41ee4880d87c6f37b22b8b179ae486a85ef1498673b6aeafe2b9bdadd575d90cf3083bc241c101817925f08edb7319e614881eb56619f46dec31056b7908c27b93c171dbe10181747acc894ee8b4a5f21f3db8a935839113a68a94cbdf523b756ef826fd616",
                "qid": 1503894,
                "disabled": false,
                "logged_in": true,
                "qfeed_log_press_action": null,
                "use_answer_draft_page": false
            }), new(require('unified_view/question/rad').RADToggle)("sKacFRB", "", {}), new(require('unified_view/button/follow').Question)("jZMeV8B", "", {
                "disabled": false,
                "qid": 1503894,
                "pressed": false,
                "qfeed_log_unpress_action": "QuestionUnfollow",
                "optimistic_count": "5.3k",
                "optimistic_text": "Unfollow",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": "QuestionFollow",
                "vote_source": "question_main"
            }), new(require("unified_view/action_bar/shared").CommentsActionItem)("h3wc3qu", "", {
                "link_id": "@link"
            }), new(require("app/view/comment").CommentLink)("YEZtx28", "", {
                "type": "qid",
                "object_id": 1503894,
                "comment_type": "question",
                "is_logged_in": true
            }), new(require("view/hover_menu").HoverMenu)("dnS1Y5b", "", {
                "css_positioning": false,
                "should_show_hover_menu": true,
                "click_open": true,
                "oid": 1503894,
                "should_preload_menu": true,
                "board_item_id": null,
                "alignment": "left",
                "on": null,
                "load_on_pageload": true,
                "attach_to_body": true,
                "show_menu": true
            }), new(require("facebook").FacebookNetworkShare)("ovzZEtM", "", {
                "is_debugging_mode": false,
                "target": {
                    "qid": 1503894,
                    "type": "question"
                },
                "share_url": "https://www.quora.com/What-is-the-coolest-psychological-trick?srid=hzgme&share=9a020c24"
            }), new(require("twitter").TwitterNetworkShare)("JfXF0B0", "", {
                "target": {
                    "qid": 1503894,
                    "type": "question"
                },
                "share_url": "https://www.twitter.com/intent/tweet?related=quora&text=Question%20on%20%40Quora%3A%20What%20is%20the%20coolest%20psychological%20trick%3F&url=https://www.quora.com/What-is-the-coolest-psychological-trick?srid=hzgme"
            }), new(require("app/view/share").CopyToClipboardShareLink)("qijRrEy", "", {
                "copy_message_fail": "Copy not supported by this browser",
                "copy_url": "https://www.quora.com/What-is-the-coolest-psychological-trick?srid=hzgme",
                "copy_message_success": "Link copied to clipboard"
            }), new(require("app/view/share").ShareAction)("Vlf1NUc", "", {
                "class_name": "QuestionSimpleShareSection",
                "calling_class": "QuestionQuickShareContents",
                "default_tab": null,
                "serialized_share": {
                    "info": {
                        "qid": 1503894
                    },
                    "type": "QuestionShare"
                }
            }), new(require("unified_view/action_bar/shared").CommentsExtraItem)("Cbh03XW", "", {
                "wrapper_id": "@wrapper",
                "feed_comment_wrapper_id": "@feed_comment_container",
                "feed_comment_id": null,
                "oid": 1503894,
                "featured_comment_id": null,
                "featured_comment_wrapper_id": "@feed_comment_container"
            }), new(require("unified_view/action_bar/question").AddAnswerEditorWrapper)("ffyZk6C", "", {
                "qid": 1503894,
                "lazy_loaded": true
            }), new(require('unified_view/button/downvote').Question)("qdoVFjn", "", {
                "disabled": false,
                "downvote_context": 2,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "qid": 1503894,
                "optimistic_text": "Downvoted (Undo)",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "show_feedback": false
            }), new(require('unified_view/question/rad').RequestAnswersDrawer)("GwQHE1G", "", {
                "animated": true,
                "should_open_by_default": false
            }), new(require('unified_view/question/rad').RequestFromQuoraLink)("DrIWEAy", "", {
                "qid": 1503894,
                "lookup_intent": false
            }), new(require("unified_view/question/rad").Suggestions)("ck7owMm", "", {
                "should_load_by_default": false,
                "qid": 1503894
            }), new(require("app/view/question").AnswerListDiv)("fR9LPFd", "", {}), new(require("view/paged_list").PagedList)("MXTZZEt", "", {
                "retarget_links": true,
                "buffer_count": 6,
                "fixed_size_paged_list": false,
                "initial_count": 6,
                "has_more": true,
                "auto_paged": true,
                "object_id": 1503894,
                "crawler": false
            }), new(require("shared/action_log").ActionableComponent)("EXJIaRh", "", {
                "impression_target": {
                    "hash": "answer_ranking|-1728618587",
                    "type": 4
                }
            }), new(require("app/view/question").AnswerPagedListItem)("HPm0tak", "", {
                "view_tracking_hash": "41ec577ab05a738181face8a7ea2caea",
                "view_tracking_key": "a-33012146"
            }), new(require("view/paged_list").PagedListMoreButton)("w7ArPVr", "more_button", {
                "auto_click_period": 6000
            }), new(require("unified_view/question/prompt").QuestionMergedPrompt)("cwcBlsx", "", {
                "qid": 1503894
            }), new(require("app/view/answer_wiki").AnswerWikiInlineEditor)("x1zsUyq", "", {
                "require_comment": false,
                "is_qtext": true,
                "focus_onload": false,
                "unsaved_content_msg": "Your content has not been saved.",
                "content_type": null,
                "typing_area": null,
                "id": 1503894,
                "submit_text": "Update",
                "draft_space": null,
                "require_value": false,
                "input": "answer_wiki_text",
                "show_editor": false
            }), new(require("app/view/components").QtextTruncate)("KOgkBth", "", {
                "show_more": true,
                "was_truncated": true
            }), new(require("unified_view/qtext2/editor").Editor)("FtGFtzr", "editor", {
                "length_limit": null,
                "photo_search_enabled": true,
                "interface_strings": {
                    "uploading_image": "Uploading 1 image...",
                    "upload_error": "There was an error uploading this file.",
                    "drop_images": "Drop images here",
                    "placeholder": "",
                    "uploading_images": "Uploading {} images..."
                },
                "is_plaintext": false,
                "disabled_commands": ["image"],
                "content_json": {
                    "sections": [{
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "When you first meet people try to notice their ",
                            "modifiers": {}
                        }, {
                            "text": "eye color",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": " while also smiling at them. It might be because you look for a second or two longer, but all I can tell you is that people really respond to it.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Pay attention to people's ",
                            "modifiers": {}
                        }, {
                            "text": "feet",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": ". If you approach two people in the middle of a conversation, and they only turn their torsos and not their feet, they don't want you to join in the conversation. Similarly if you are in a conversation with a coworker who you think is paying attention to you and their torso is turned towards you but their feet are facing in another direction, they want the conversation to end.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Foot-in-the-door",
                            "modifiers": {
                                "bold": true,
                                "italic": true
                            }
                        }, {
                            "text": " phenomenon. People are more likely to agree to do a task for you if you ask them to do something simpler first. (Gradual Commitment... makes them think you like them)",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Door-in-the-face",
                            "modifiers": {
                                "bold": true,
                                "italic": true
                            }
                        }, {
                            "text": " phenomenon - Alternatively you ask them to do an unreasonable task, and they'll say no, so then you ask for what you wanted, a much more reasonable task, and they're more likely to say yes.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "If you ask someone to do you a",
                            "modifiers": {}
                        }, {
                            "text": " small favor",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": ", cognitive dissonance will make them believe that because they did that favor, they therefore must like you. {yes you all know that -- Ben Franklin}",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "If you ask someone a question and they only partially answer just wait. If you ",
                            "modifiers": {}
                        }, {
                            "text": "stay silent",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": " and ",
                            "modifiers": {}
                        }, {
                            "text": "keep eye contact",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": " they will usually continue talking.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Chew gum",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": " when you're approaching a situation that would make you nervous like public speaking or bungee jumping. If we are 'eating' something in our brains reasons that 'I would not be eating if I were danger. So I'm not in danger\u201d.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Avoid the sidewalk shuffle by looking intently over the person's ",
                            "modifiers": {}
                        }, {
                            "text": "shoulder",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": ", or between people's heads in a group. Your gaze shows them where you're going. They'll drift toward the opposing side / create a gap to avoid you.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "People will remember not what you said but how you made them",
                            "modifiers": {}
                        }, {
                            "text": " feel",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": ".",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "For ",
                            "modifiers": {}
                        }, {
                            "text": "interviews ",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": "I recommend altering your psychological state beforehand. Tell yourself \"I've known these people all my life. We're ",
                            "modifiers": {}
                        }, {
                            "text": "old friends ",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": "catching up. I can't wait to see them\". Visualize the experience, shaking hands, making eye contact, having conversation. What things can you not to wait to tell them? Hold an open pose...stand with your legs apart, hands on your hips, and shoulders back while doing this and ",
                            "modifiers": {}
                        }, {
                            "text": "Smile",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": ". This may sound cliche but you are in charge of your own psychological state and the power of suggestion is strong.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "If you get yourself to be really ",
                            "modifiers": {}
                        }, {
                            "text": "happy and excited",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": " to see other people, they will react the same to you.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "When people are angry at you stay ",
                            "modifiers": {}
                        }, {
                            "text": "calm",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": ". This will cause them to become even angrier and then to be ashamed about it afterwards.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "If you have a ",
                            "modifiers": {}
                        }, {
                            "text": "warm hand",
                            "modifiers": {
                                "bold": true
                            }
                        }, {
                            "text": " when you shake somebody's hand, you immediately become a more desirable person.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "False attribution of arousal. When you take somebody out on a first date, take them somewhere exciting that will get their heart beating. e.g. roller coaster or horror film. This gets their adrenaline up. It makes them think they enjoy spending time with you rather than the activity.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "The key to confidence is walking into a room, and assuming everyone already likes you.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Refer to people you've just met by their name. People love being referred to by their name, and it will establish a sense of trust and friendship right away.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "If you make the biggest smile you can, you will automatically feel happier",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "The moment your alarm wakes you up, immediately react by sitting up, pump your fists and shout \"YEAH!\"",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Always give your kid a choice that makes them think they are in control. For instance if you want your child to put their shoes on then say \"Do you want to put your star wars shoes on or your shark shoes on?\"",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "If you state 2 or more obvious facts, whatever you say after that will be taken as a fact. Even if it isn't.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Low Ball Technique-Persuasive technique that involves getting someone to commit to an attractive proposition before the hidden costs are revealed.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "If you think someone is watching you, simply yawn. The person will invariably yawn too.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Nodding your head up and down while asking a question substantially increases the likelihood that someone will answer affirmatively.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Ask for favors when someone is tired.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Before starting any new thing in your life just remember that you only live once, this will make you give your best shot",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "People LOVE hearing their name, so when you meet a group of new people, or just a person, try to remember all their names and every now and then just sprinkle in their name into the conversation. It shows that you\u2019re specifically talking to them and noticing them, and people love being noticed.",
                            "modifiers": {}
                        }]
                    }, {
                        "type": "unordered-list",
                        "indent": 0,
                        "quoted": false,
                        "spans": [{
                            "text": "Also love unconditionally",
                            "modifiers": {}
                        }]
                    }]
                }
            }), new(require("unified_view/qtext2/toolbar").Web)("tgknyts", "toolbar", {
                "buttons": ["bold", "italic", "unordered_list", "ordered_list", "quote", "link", "image", "overflow_show", "mention", "code", "math", "indent", "deindent", "undo", "redo", "overflow_hide"]
            }), new(require("view/link_selector").LinkSelector)("TVVxzVI", "link_selector", {
                "length_limit": 250,
                "allow_no_selection": false,
                "metadata": {},
                "is_textarea": false,
                "query": "",
                "should_autofocus": false,
                "show_results_for_empty_query": false
            }), new(require("unified_view/character_counter").CharacterCounter)("Bv9USsF", "counter", {
                "visible_on": 25.0,
                "limit": 250,
                "warning_limit": -1
            }), new(require("shared/action_log").ActionableComponent)("MobdV7K", "", {
                "impression_target": {
                    "hash": "answer_ranking|-176280236",
                    "type": 4
                }
            }), new(require("app/view/question").AnswerPagedListItem)("UT36qcq", "", {
                "view_tracking_hash": "e841acc7c2d96e40c737bb3862060e55",
                "view_tracking_key": "a-6284467"
            }), new(require('app/view/question').AnswerActions)("TMXubl3", "", {}), new(require("unified_view/action_bar/_action_bar").Answer)("jcT1V5G", "", {
                "lazy_loaded": true,
                "sticky_offsets": {
                    "top": 500
                },
                "oid": 6284467,
                "sdvars": "AAEAAGW+tc67hOPkkd8gxUcDK3moEYUS+C3aMj8INjT8mCtbop7jH0mOnJGapLce/pCMi9XI1QOQ\np9YIE4i+DnmTc9t8H79rHDOqeEeRXD7K5q77+X/7ZHcIhjSwPz4AA3419vpLLTKAD36rh1pR0AXc\nOVlFJvoqjUDkx33ubqesJlfSQKDgXJKzUdu0Ffc94Zqol4xdlElNylk2sVKWHyqnoFYfB9MCXJtM\nVxB/5obDGHcC\n",
                "is_sticky": true
            }), new(require("unified_view/action_bar/shared").CommentsActionItem)("Hwgg8C4", "", {
                "link_id": "@link"
            }), new(require("app/view/comment").CommentLink)("hvSOkw3", "", {
                "type": "aid",
                "object_id": 6284467,
                "comment_type": "answer",
                "is_logged_in": true
            }), new(require("unified_view/action_bar/answer").AskQuestionPromptExtraItem)("capMibR", "", {
                "aid": 6284467
            }), new(require("unified_view/action_bar/shared").CommentsExtraItem)("W2HFkjU", "", {
                "wrapper_id": "@wrapper",
                "feed_comment_wrapper_id": "@feed_comment_container",
                "feed_comment_id": null,
                "oid": 6284467,
                "featured_comment_id": null,
                "featured_comment_wrapper_id": "@feed_comment_container"
            }), new(require("app/view/answer").AnswerHeader)("uWg2VEu", "", {
                "aid": 6284467
            }), new(require("view/hover_menu").HoverMenu)("UOY63h5", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 10445222,
                    "aid": 6284467
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("view/user").UserPhoto)("lCYahkC", "", {}), new(require("app/view/user/profile").VerificationBadge)("F4XBgkm", "", {
                "tooltip_text": "Verified profile"
            }), new(require("unified_view/answer/credibility").CredibilitySection)("qkQUPjG", "", {
                "aid": 6284467
            }), new(require("app/view/question").AnswerPermaLink)("K3GFRO2", "", {}), new(require("unified_view/datetime_").DateTimeComponent)("fH9dPO9", "", {
                "epoch_us": 1406733114454413,
                "js_disp": false,
                "granularity": null,
                "js_update_interval": 0
            }), new(require('unified_view/button/follow').User)("nxCWD1G", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_text": "",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "uid": 10445222
            }), new(require("view/user").Name)("TlvQO9S", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 10445222,
                    "aid": 6284467
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/common").Content)("XNdi4eG", "", {
                "suggestion_exists": false,
                "oid": 6284467,
                "editor_loaded": false,
                "content_type": "answer"
            }), new(require('app/view/question/merge/_merge').OriginallyAnsweredBanner)("VHMEQf5", "", {
                "aid": 6284467,
                "new_qid": 1503894
            }), new(require('view/voter_list').VoterListModalLink)("lOz4Ccx", "", {
                "object_id": 6284467
            }), new(require("app/view/question/wanted_answer").AnswerAttributionSection)("txHSWRw", "", {
                "aid": 6284467,
                "qid": null
            }), new(require('unified_view/button/upvote').Answer)("m0Z1rFD", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_count": "392",
                "optimistic_text": "Upvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": true,
                "qfeed_log_press_action": null,
                "aid": 6284467
            }), new(require('unified_view/button/downvote').Answer)("CrK6bap", "", {
                "disabled": false,
                "downvote_context": 2,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "aid": 6284467,
                "optimistic_text": "Downvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "show_feedback": false
            }), new(require("facebook").FacebookNetworkShare)("rDVl8Pk", "", {
                "is_debugging_mode": false,
                "target": {
                    "aid": 6284467,
                    "type": "answer"
                },
                "share_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Nikunj-Dudani?srid=hzgme&share=dbcc8dfb"
            }), new(require("twitter").TwitterNetworkShare)("aBAFjP5", "", {
                "target": {
                    "aid": 6284467,
                    "type": "answer"
                },
                "share_url": "https://www.twitter.com/intent/tweet?related=quora&text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20Nikunj%20Dudani&url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Nikunj-Dudani?srid=hzgme&share=dbcc8dfb"
            }), new(require("view/hover_menu").HoverMenu)("Nl1wmvR", "", {
                "css_positioning": false,
                "should_show_hover_menu": true,
                "click_open": true,
                "oid": 6284467,
                "should_preload_menu": true,
                "board_item_id": null,
                "alignment": "left",
                "on": null,
                "load_on_pageload": true,
                "attach_to_body": true,
                "show_menu": true
            }), new(require("app/view/share").CopyToClipboardShareLink)("hA42zHO", "", {
                "copy_message_fail": "Copy not supported by this browser",
                "copy_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Nikunj-Dudani?srid=hzgme",
                "copy_message_success": "Link copied to clipboard"
            }), new(require("app/view/embed").EmbedModalLink)("iEL6q5t", "", {
                "aid": 6284467,
                "embed_disabled_text": "This answer has been marked as Not for Reproduction."
            }), new(require("app/view/share").ShareAction)("xJITWXg", "", {
                "class_name": "AnswerSimpleShareSection",
                "calling_class": "AnswerQuickShareContents",
                "default_tab": null,
                "serialized_share": {
                    "info": {
                        "aid": 6284467
                    },
                    "type": "AnswerShare"
                }
            }), new(require("shared/action_log").ActionableComponent)("uI18JML", "", {
                "impression_target": {
                    "hash": "answer_ranking|-813316387",
                    "type": 4
                }
            }), new(require("app/view/question").AnswerPagedListItem)("rc06TIL", "", {
                "view_tracking_hash": "3342a268462de2625aa860ae54d086ce",
                "view_tracking_key": "a-31210393"
            }), new(require('app/view/question').AnswerActions)("A0WwzTZ", "", {}), new(require("app/view/answer").AnswerHeader)("R1M6Hxh", "", {
                "aid": 31210393
            }), new(require("view/hover_menu").HoverMenu)("OoBxEla", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 215725546,
                    "aid": 31210393
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("view/user").UserPhoto)("Z3c8tk2", "", {}), new(require("app/view/user/profile").VerificationBadge)("Msy6Go4", "", {
                "tooltip_text": "Verified profile"
            }), new(require("unified_view/answer/credibility").CredibilitySection)("ZqKUhUh", "", {
                "aid": 31210393
            }), new(require("app/view/question").AnswerPermaLink)("Suy8QUg", "", {}), new(require("unified_view/datetime_").DateTimeComponent)("plO1FmT", "", {
                "epoch_us": 1479812644812392,
                "js_disp": false,
                "granularity": null,
                "js_update_interval": 0
            }), new(require('unified_view/button/follow').User)("tmrvLBj", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_text": "",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "uid": 215725546
            }), new(require("view/user").Name)("OrVRwqo", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 215725546,
                    "aid": 31210393
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/common").Content)("TzsYbBB", "", {
                "suggestion_exists": false,
                "oid": 31210393,
                "editor_loaded": false,
                "content_type": "answer"
            }), new(require('app/view/question/merge/_merge').OriginallyAnsweredBanner)("WizoWDq", "", {
                "aid": 31210393,
                "new_qid": 1503894
            }), new(require('view/voter_list').VoterListModalLink)("XJnWBJj", "", {
                "object_id": 31210393
            }), new(require("app/view/question/wanted_answer").AnswerAttributionSection)("uB3VDUI", "", {
                "aid": 31210393,
                "qid": null
            }), new(require("unified_view/action_bar/_action_bar").Answer)("aj9qyPn", "", {
                "lazy_loaded": true,
                "sticky_offsets": {
                    "top": 500
                },
                "oid": 31210393,
                "sdvars": "AAEAAMIY6fetHwt1Tn0SUFjyoNmd7bYTGDvD8/rQwVeMu0BkNU+YEHjWeeZbeMMKBxiJywL+QZbT\nja0I5vNEGWZap8WNgAZKx5e6GD4ftl3XdbJ86rWumFc4juKaSmeUIpI/YNbRJ2klCgKtgWn+exAK\nC9qE7ncvsF567GS4E45+sgACw3ph/0UyFDbYt13RxfMWXtsoZyoCyRalHzhppqsQSt0AeJHna4HM\nCC9p0N3PzAvc\n",
                "is_sticky": true
            }), new(require("unified_view/action_bar/shared").CommentsActionItem)("RpEP1nD", "", {
                "link_id": "@link"
            }), new(require("app/view/comment").CommentLink)("dZYtOBC", "", {
                "type": "aid",
                "object_id": 31210393,
                "comment_type": "answer",
                "is_logged_in": true
            }), new(require("facebook").FacebookNetworkShare)("wGqjJxr", "", {
                "is_debugging_mode": false,
                "target": {
                    "aid": 31210393,
                    "type": "answer"
                },
                "share_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Kristina-Smith-44?srid=hzgme&share=b871eda3"
            }), new(require("twitter").TwitterNetworkShare)("XDAuano", "", {
                "target": {
                    "aid": 31210393,
                    "type": "answer"
                },
                "share_url": "https://www.twitter.com/intent/tweet?related=quora&text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20Kristina%20Smith&url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Kristina-Smith-44?srid=hzgme&share=b871eda3"
            }), new(require("view/hover_menu").HoverMenu)("FGkImsa", "", {
                "css_positioning": false,
                "should_show_hover_menu": true,
                "click_open": true,
                "oid": 31210393,
                "should_preload_menu": true,
                "board_item_id": null,
                "alignment": "left",
                "on": null,
                "load_on_pageload": true,
                "attach_to_body": true,
                "show_menu": true
            }), new(require("app/view/share").CopyToClipboardShareLink)("iTPW4vI", "", {
                "copy_message_fail": "Copy not supported by this browser",
                "copy_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Kristina-Smith-44?srid=hzgme",
                "copy_message_success": "Link copied to clipboard"
            }), new(require("app/view/embed").EmbedModalLink)("KdBNpCn", "", {
                "aid": 31210393,
                "embed_disabled_text": "This answer has been marked as Not for Reproduction."
            }), new(require("app/view/share").ShareAction)("fTwmHSO", "", {
                "class_name": "AnswerSimpleShareSection",
                "calling_class": "AnswerQuickShareContents",
                "default_tab": null,
                "serialized_share": {
                    "info": {
                        "aid": 31210393
                    },
                    "type": "AnswerShare"
                }
            }), new(require("unified_view/action_bar/answer").AskQuestionPromptExtraItem)("yU8si6W", "", {
                "aid": 31210393
            }), new(require("unified_view/action_bar/shared").CommentsExtraItem)("mRB9QGU", "", {
                "wrapper_id": "@wrapper",
                "feed_comment_wrapper_id": "@feed_comment_container",
                "feed_comment_id": null,
                "oid": 31210393,
                "featured_comment_id": null,
                "featured_comment_wrapper_id": "@feed_comment_container"
            }), new(require('unified_view/button/upvote').Answer)("JmSVX0h", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_count": "34",
                "optimistic_text": "Upvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": true,
                "qfeed_log_press_action": null,
                "aid": 31210393
            }), new(require('unified_view/button/downvote').Answer)("bsJf5Wr", "", {
                "disabled": false,
                "downvote_context": 2,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "aid": 31210393,
                "optimistic_text": "Downvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "show_feedback": false
            }), new(require("shared/action_log").ActionableComponent)("Zs4ebaz", "", {
                "impression_target": {
                    "hash": "answer_ranking|-2139813007",
                    "type": 4
                }
            }), new(require("app/view/question").AnswerPagedListItem)("fZkpigu", "", {
                "view_tracking_hash": "0664b509a67ff28839c996ab0e2aedf8",
                "view_tracking_key": "a-28769652"
            }), new(require('app/view/question').AnswerActions)("Wv5mOJE", "", {}), new(require("app/view/common").Content)("LkYFShd", "", {
                "suggestion_exists": false,
                "oid": 28769652,
                "editor_loaded": false,
                "content_type": "answer"
            }), new(require('app/view/question/merge/_merge').OriginallyAnsweredBanner)("QquTPHf", "", {
                "aid": 28769652,
                "new_qid": 1503894
            }), new(require("unified_view/action_bar/_action_bar").Answer)("Lc8cpzl", "", {
                "lazy_loaded": true,
                "sticky_offsets": {
                    "top": 500
                },
                "oid": 28769652,
                "sdvars": "AAEAALv8LooU1X/dPfLrbOz+NZ/njgoWSPBVxgzfXvdKUXUHsDTYEwww9u2sbqyEjOvwW7SQqqc/\noiovhFSaKGcKmQI58GpsxBMwSZnbWaIYNWF0ANwRxYrg0xVXClzoW+PpEROgOjK9K9P6j9vQZJar\nXP+MUKumKT9mIf5tuPT1DBVVmM/gcT5Cyphs0dIzO8G6JbGUoEBDOW3nZFr+hz+Waee+C26M7v7G\nZ1dwQs/51YGm\n",
                "is_sticky": true
            }), new(require('unified_view/button/upvote').Answer)("gGAciCC", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_count": "1.3k",
                "optimistic_text": "Upvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": true,
                "qfeed_log_press_action": null,
                "aid": 28769652
            }), new(require('unified_view/button/downvote').Answer)("z3DetXf", "", {
                "disabled": false,
                "downvote_context": 2,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "aid": 28769652,
                "optimistic_text": "Downvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "show_feedback": false
            }), new(require("unified_view/action_bar/shared").CommentsActionItem)("DhquLBE", "", {
                "link_id": "@link"
            }), new(require("unified_view/action_bar/answer").AskQuestionPromptExtraItem)("IVny324", "", {
                "aid": 28769652
            }), new(require("unified_view/action_bar/shared").CommentsExtraItem)("yizZTls", "", {
                "wrapper_id": "@wrapper",
                "feed_comment_wrapper_id": "@feed_comment_container",
                "feed_comment_id": null,
                "oid": 28769652,
                "featured_comment_id": null,
                "featured_comment_wrapper_id": "@feed_comment_container"
            }), new(require("app/view/answer").AnswerHeader)("T0VoCks", "", {
                "aid": 28769652
            }), new(require("unified_view/answer/credibility").CredibilitySection)("PpHu4vc", "", {
                "aid": 28769652
            }), new(require("app/view/question").AnswerPermaLink)("wXbopZc", "", {}), new(require("unified_view/datetime_").DateTimeComponent)("tO6EYfh", "", {
                "epoch_us": 1475620493788870,
                "js_disp": false,
                "granularity": null,
                "js_update_interval": 0
            }), new(require('unified_view/button/follow').User)("bjseGAu", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_text": "",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "uid": 58702170
            }), new(require("view/hover_menu").HoverMenu)("MruQZLu", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 58702170,
                    "aid": 28769652
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("view/user").UserPhoto)("v1iTUMD", "", {}), new(require("app/view/user/profile").VerificationBadge)("mZ5BmkR", "", {
                "tooltip_text": "Verified profile"
            }), new(require("view/user").Name)("KlhxRoz", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 58702170,
                    "aid": 28769652
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require('view/voter_list').VoterListModalLink)("gmVwRmJ", "", {
                "object_id": 28769652
            }), new(require("app/view/question/wanted_answer").AnswerAttributionSection)("jPRL6mU", "", {
                "aid": 28769652,
                "qid": null
            }), new(require("app/view/comment").CommentLink)("BHS1OD9", "", {
                "type": "aid",
                "object_id": 28769652,
                "comment_type": "answer",
                "is_logged_in": true
            }), new(require("facebook").FacebookNetworkShare)("DyYLlhQ", "", {
                "is_debugging_mode": false,
                "target": {
                    "aid": 28769652,
                    "type": "answer"
                },
                "share_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Sam-Pittenger?srid=hzgme&share=e6148033"
            }), new(require("twitter").TwitterNetworkShare)("kj2gqHp", "", {
                "target": {
                    "aid": 28769652,
                    "type": "answer"
                },
                "share_url": "https://www.twitter.com/intent/tweet?related=quora&text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20Sam%20Pittenger&url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Sam-Pittenger?srid=hzgme&share=e6148033"
            }), new(require("view/hover_menu").HoverMenu)("Iazcala", "", {
                "css_positioning": false,
                "should_show_hover_menu": true,
                "click_open": true,
                "oid": 28769652,
                "should_preload_menu": true,
                "board_item_id": null,
                "alignment": "left",
                "on": null,
                "load_on_pageload": true,
                "attach_to_body": true,
                "show_menu": true
            }), new(require("app/view/share").CopyToClipboardShareLink)("qEUZ9zc", "", {
                "copy_message_fail": "Copy not supported by this browser",
                "copy_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Sam-Pittenger?srid=hzgme",
                "copy_message_success": "Link copied to clipboard"
            }), new(require("app/view/embed").EmbedModalLink)("RcoTNrU", "", {
                "aid": 28769652,
                "embed_disabled_text": "This answer has been marked as Not for Reproduction."
            }), new(require("app/view/share").ShareAction)("BkKugM9", "", {
                "class_name": "AnswerSimpleShareSection",
                "calling_class": "AnswerQuickShareContents",
                "default_tab": null,
                "serialized_share": {
                    "info": {
                        "aid": 28769652
                    },
                    "type": "AnswerShare"
                }
            }), new(require("shared/action_log").ActionableComponent)("uzfqJCj", "", {
                "impression_target": {
                    "hash": "answer_ranking|1882309754",
                    "type": 4
                }
            }), new(require("app/view/question").AnswerPagedListItem)("zuPOMHD", "", {
                "view_tracking_hash": "b6092294305297c05df250951ede8d2d",
                "view_tracking_key": "a-7139696"
            }), new(require('app/view/question').AnswerActions)("oyxV0M3", "", {}), new(require("app/view/answer").AnswerHeader)("PZC4a07", "", {
                "aid": 7139696
            }), new(require("unified_view/answer/credibility").CredibilitySection)("CctG32X", "", {
                "aid": 7139696
            }), new(require("app/view/question").AnswerPermaLink)("MvbNBqh", "", {}), new(require("unified_view/datetime_").DateTimeComponent)("G4y15CV", "", {
                "epoch_us": 1432929240600420,
                "js_disp": false,
                "granularity": null,
                "js_update_interval": 0
            }), new(require('unified_view/button/follow').User)("ibHdvbQ", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_text": "",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "uid": 14219260
            }), new(require("view/hover_menu").HoverMenu)("AhhzFix", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 14219260,
                    "aid": 7139696
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("view/user").UserPhoto)("rlapU7J", "", {}), new(require("app/view/user/profile").VerificationBadge)("Uwnpx3B", "", {
                "tooltip_text": "Verified profile"
            }), new(require("view/user").Name)("axCiOlC", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 14219260,
                    "aid": 7139696
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/common").Content)("jQqtqC9", "", {
                "suggestion_exists": false,
                "oid": 7139696,
                "editor_loaded": false,
                "content_type": "answer"
            }), new(require('app/view/question/merge/_merge').OriginallyAnsweredBanner)("TK0Bftu", "", {
                "aid": 7139696,
                "new_qid": 1503894
            }), new(require('view/voter_list').VoterListModalLink)("DTmeDvM", "", {
                "object_id": 7139696
            }), new(require("app/view/question/wanted_answer").AnswerAttributionSection)("UTOPvHx", "", {
                "aid": 7139696,
                "qid": null
            }), new(require("unified_view/action_bar/_action_bar").Answer)("imbmeYq", "", {
                "lazy_loaded": true,
                "sticky_offsets": {
                    "top": 500
                },
                "oid": 7139696,
                "sdvars": "AAEAAD6haNNardgkaLSBVXczojTdBAiGA2VD3opvD7gt2r/zy73O3eZhxE0MwuVOiclsb/ZLUbup\nm2sYSb2RtY+BSyKPDQa/MUvfh1RllAy28B5uAeAHV0YszZTRMR+84MBCAlRuIOiZ90F655BaEaN0\nPF1lYt7Swn9a4RWNjOzyQsjIiYWsa8SbKRvlGZ5L4HZ+c229ccJGElAYde7nHpri5KblYMk9bsJ7\nXTbx1DlqmXx1\n",
                "is_sticky": true
            }), new(require('unified_view/button/downvote').Answer)("pE5YEax", "", {
                "disabled": false,
                "downvote_context": 2,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "aid": 7139696,
                "optimistic_text": "Downvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "show_feedback": false
            }), new(require("unified_view/action_bar/shared").CommentsActionItem)("dL10NW3", "", {
                "link_id": "@link"
            }), new(require("app/view/comment").CommentLink)("T5yza7P", "", {
                "type": "aid",
                "object_id": 7139696,
                "comment_type": "answer",
                "is_logged_in": true
            }), new(require("unified_view/action_bar/answer").AskQuestionPromptExtraItem)("YHJZgLE", "", {
                "aid": 7139696
            }), new(require("unified_view/action_bar/shared").CommentsExtraItem)("owX1k8P", "", {
                "wrapper_id": "@wrapper",
                "feed_comment_wrapper_id": "@feed_comment_container",
                "feed_comment_id": null,
                "oid": 7139696,
                "featured_comment_id": null,
                "featured_comment_wrapper_id": "@feed_comment_container"
            }), new(require('unified_view/button/upvote').Answer)("Id4UTYr", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_count": "69",
                "optimistic_text": "Upvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": true,
                "qfeed_log_press_action": null,
                "aid": 7139696
            }), new(require("facebook").FacebookNetworkShare)("E1nlMgP", "", {
                "is_debugging_mode": false,
                "target": {
                    "aid": 7139696,
                    "type": "answer"
                },
                "share_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Amal-Rafeeq?srid=hzgme&share=21904c0c"
            }), new(require("twitter").TwitterNetworkShare)("ol7rFkX", "", {
                "target": {
                    "aid": 7139696,
                    "type": "answer"
                },
                "share_url": "https://www.twitter.com/intent/tweet?related=quora&text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20%40ZionAmalRafeeq&url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Amal-Rafeeq?srid=hzgme&share=21904c0c"
            }), new(require("view/hover_menu").HoverMenu)("GAvqgRk", "", {
                "css_positioning": false,
                "should_show_hover_menu": true,
                "click_open": true,
                "oid": 7139696,
                "should_preload_menu": true,
                "board_item_id": null,
                "alignment": "left",
                "on": null,
                "load_on_pageload": true,
                "attach_to_body": true,
                "show_menu": true
            }), new(require("app/view/share").CopyToClipboardShareLink)("Hu9THMv", "", {
                "copy_message_fail": "Copy not supported by this browser",
                "copy_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Amal-Rafeeq?srid=hzgme",
                "copy_message_success": "Link copied to clipboard"
            }), new(require("app/view/embed").EmbedModalLink)("lQNMVYQ", "", {
                "aid": 7139696,
                "embed_disabled_text": "This answer has been marked as Not for Reproduction."
            }), new(require("app/view/share").ShareAction)("VN7WWqr", "", {
                "class_name": "AnswerSimpleShareSection",
                "calling_class": "AnswerQuickShareContents",
                "default_tab": null,
                "serialized_share": {
                    "info": {
                        "aid": 7139696
                    },
                    "type": "AnswerShare"
                }
            }), new(require('app/view/question').AnswerActions)("Obd1vpa", "", {}), new(require("app/view/answer").AnswerHeader)("xkbucq5", "", {
                "aid": 33012146
            }), new(require("view/hover_menu").HoverMenu)("xGLKIKY", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 105024764,
                    "aid": 33012146
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("view/user").UserPhoto)("MMSDRU9", "", {}), new(require("app/view/user/profile").VerificationBadge)("yisS0Zi", "", {
                "tooltip_text": "Verified profile"
            }), new(require("unified_view/answer/credibility").CredibilitySection)("z9zq17Y", "", {
                "aid": 33012146
            }), new(require("app/view/question").AnswerPermaLink)("Wp1VbTt", "", {}), new(require("unified_view/datetime_").DateTimeComponent)("c8SFTNF", "", {
                "epoch_us": 1482535387329757,
                "js_disp": false,
                "granularity": null,
                "js_update_interval": 0
            }), new(require('unified_view/button/follow').User)("sKXv5Ul", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_text": "",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "uid": 105024764
            }), new(require("view/user").Name)("xVptCc2", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 105024764,
                    "aid": 33012146
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/common").Content)("iWyi4Xb", "", {
                "suggestion_exists": false,
                "oid": 33012146,
                "editor_loaded": false,
                "content_type": "answer"
            }), new(require('app/view/question/merge/_merge').OriginallyAnsweredBanner)("V1JVSZG", "", {
                "aid": 33012146,
                "new_qid": 1503894
            }), new(require('view/voter_list').VoterListModalLink)("F2CljTL", "", {
                "object_id": 33012146
            }), new(require("app/view/question/wanted_answer").AnswerAttributionSection)("GqaSTNV", "", {
                "aid": 33012146,
                "qid": null
            }), new(require("unified_view/action_bar/_action_bar").Answer)("iXlkpD4", "", {
                "lazy_loaded": true,
                "sticky_offsets": {
                    "top": 500
                },
                "oid": 33012146,
                "sdvars": "AAEAAAO01puYV9Hdu7CePp+jqQe2RU+ZPJU7udCzjRZgJWOvXAOORgtpX1GrP8eQLE0uI4skgRK/\n9KvyDBkZhXYoeVFw8UyN1GO1DBjU3U5PPAVp2jMkMFeiFTUihFjGI+FourqilvY0vvXD7BjVpLCg\nL5BQLlB0f9+a6xkRuXP9Wb6nIg9dMNpgKUOGEd5G/bR8mw502q64KiwOcPyEU5adbQYIFti/CHJM\nC9OXf/InR3TZ\n",
                "is_sticky": true
            }), new(require("unified_view/action_bar/shared").CommentsActionItem)("qBTekH6", "", {
                "link_id": "@link"
            }), new(require("app/view/comment").CommentLink)("gl79eSM", "", {
                "type": "aid",
                "object_id": 33012146,
                "comment_type": "answer",
                "is_logged_in": true
            }), new(require("facebook").FacebookNetworkShare)("ekoCoGk", "", {
                "is_debugging_mode": false,
                "target": {
                    "aid": 33012146,
                    "type": "answer"
                },
                "share_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Aditya-Shukla-98?srid=hzgme&share=20967772"
            }), new(require("twitter").TwitterNetworkShare)("uR482vW", "", {
                "target": {
                    "aid": 33012146,
                    "type": "answer"
                },
                "share_url": "https://www.twitter.com/intent/tweet?related=quora&text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20%40Shredwarrior&url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Aditya-Shukla-98?srid=hzgme&share=20967772"
            }), new(require("view/hover_menu").HoverMenu)("FOQgvo3", "", {
                "css_positioning": false,
                "should_show_hover_menu": true,
                "click_open": true,
                "oid": 33012146,
                "should_preload_menu": true,
                "board_item_id": null,
                "alignment": "left",
                "on": null,
                "load_on_pageload": true,
                "attach_to_body": true,
                "show_menu": true
            }), new(require("app/view/share").CopyToClipboardShareLink)("Jt9sRUx", "", {
                "copy_message_fail": "Copy not supported by this browser",
                "copy_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Aditya-Shukla-98?srid=hzgme",
                "copy_message_success": "Link copied to clipboard"
            }), new(require("app/view/embed").EmbedModalLink)("FWCkpVP", "", {
                "aid": 33012146,
                "embed_disabled_text": "This answer has been marked as Not for Reproduction."
            }), new(require("app/view/share").ShareAction)("QNd7WUe", "", {
                "class_name": "AnswerSimpleShareSection",
                "calling_class": "AnswerQuickShareContents",
                "default_tab": null,
                "serialized_share": {
                    "info": {
                        "aid": 33012146
                    },
                    "type": "AnswerShare"
                }
            }), new(require("unified_view/action_bar/answer").AskQuestionPromptExtraItem)("jKPm5Sd", "", {
                "aid": 33012146
            }), new(require("unified_view/action_bar/shared").CommentsExtraItem)("TlZ8bVy", "", {
                "wrapper_id": "@wrapper",
                "feed_comment_wrapper_id": "@feed_comment_container",
                "feed_comment_id": null,
                "oid": 33012146,
                "featured_comment_id": null,
                "featured_comment_wrapper_id": "@feed_comment_container"
            }), new(require('unified_view/button/upvote').Answer)("Cnk867S", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_count": "12",
                "optimistic_text": "Upvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": true,
                "qfeed_log_press_action": null,
                "aid": 33012146
            }), new(require('unified_view/button/downvote').Answer)("Nq2crSN", "", {
                "disabled": false,
                "downvote_context": 2,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "aid": 33012146,
                "optimistic_text": "Downvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "show_feedback": false
            }), new(require("shared/action_log").ActionableComponent)("HsB59TN", "", {
                "impression_target": {
                    "hash": "answer_ranking|-1403918700",
                    "type": 4
                }
            }), new(require("app/view/question").AnswerPagedListItem)("Khu979Q", "", {
                "view_tracking_hash": "764cf73ad5e44658e575d850bb153024",
                "view_tracking_key": "a-8463580"
            }), new(require('app/view/question').AnswerActions)("t0UAAHE", "", {}), new(require("app/view/answer").AnswerHeader)("pcoLdZQ", "", {
                "aid": 8463580
            }), new(require("view/hover_menu").HoverMenu)("uCMR9Zj", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 54529111,
                    "aid": 8463580
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("view/user").UserPhoto)("jOJMMkf", "", {}), new(require("app/view/user/profile").VerificationBadge)("yXZAKOf", "", {
                "tooltip_text": "Verified profile"
            }), new(require("unified_view/answer/credibility").CredibilitySection)("ZCHzau4", "", {
                "aid": 8463580
            }), new(require('unified_view/button/follow').User)("UBpMYai", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_text": "",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "uid": 54529111
            }), new(require("view/user").Name)("LVZh1aM", "", {
                "css_positioning": false,
                "on": null,
                "load_on_pageload": false,
                "should_preload_menu": false,
                "alignment": "left",
                "attach_to_body": true,
                "kwargs": {
                    "qid": 1503894,
                    "uid": 54529111,
                    "aid": 8463580
                },
                "click_open": false,
                "should_show_hover_menu": true,
                "show_menu": true
            }), new(require("app/view/question").AnswerPermaLink)("zOv5fUz", "", {}), new(require("unified_view/datetime_").DateTimeComponent)("jNMNAUa", "", {
                "epoch_us": 1481552780712850,
                "js_disp": false,
                "granularity": null,
                "js_update_interval": 0
            }), new(require("app/view/common").Content)("SLssT1F", "", {
                "suggestion_exists": false,
                "oid": 8463580,
                "editor_loaded": false,
                "content_type": "answer"
            }), new(require('app/view/question/merge/_merge').OriginallyAnsweredBanner)("j7oewdb", "", {
                "aid": 8463580,
                "new_qid": 1503894
            }), new(require('view/voter_list').VoterListModalLink)("lWMaDS7", "", {
                "object_id": 8463580
            }), new(require("app/view/question/wanted_answer").AnswerAttributionSection)("rxGN2BK", "", {
                "aid": 8463580,
                "qid": null
            }), new(require("unified_view/action_bar/_action_bar").Answer)("SPwsbNX", "", {
                "lazy_loaded": true,
                "sticky_offsets": {
                    "top": 500
                },
                "oid": 8463580,
                "sdvars": "AAEAAL1JlSUQLOiYGp1e68PUmC0txchWMrUd9dFu+iWDCL7pY7f2SomFUCvHQ7AgIGeFoLxs6Y+a\n5WAS8h2tHa5BPYRrLIROO0stNnIY/4SPY1x5EUKzWACW0tkh0IJKUhO6j4r42DhpLfMgmv/JL7Ea\nVU5UrkxsjIFPIZ0c+6O+6Xl3RK1e+Yb4h1/tcI4MPlB9jVsukwqjn5H/5nd4C8sBSmCBr50z9rqW\nWcpNU565Cymt\n",
                "is_sticky": true
            }), new(require("unified_view/action_bar/shared").CommentsActionItem)("UXxqn3V", "", {
                "link_id": "@link"
            }), new(require("unified_view/action_bar/answer").AskQuestionPromptExtraItem)("ZNTu8ko", "", {
                "aid": 8463580
            }), new(require("unified_view/action_bar/shared").CommentsExtraItem)("fnPZR53", "", {
                "wrapper_id": "@wrapper",
                "feed_comment_wrapper_id": "@feed_comment_container",
                "feed_comment_id": null,
                "oid": 8463580,
                "featured_comment_id": null,
                "featured_comment_wrapper_id": "@feed_comment_container"
            }), new(require('unified_view/button/upvote').Answer)("btLHAEj", "", {
                "disabled": false,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "optimistic_count": "372",
                "optimistic_text": "Upvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": true,
                "qfeed_log_press_action": null,
                "aid": 8463580
            }), new(require('unified_view/button/downvote').Answer)("o9BaBi8", "", {
                "disabled": false,
                "downvote_context": 2,
                "pressed": false,
                "qfeed_log_unpress_action": null,
                "aid": 8463580,
                "optimistic_text": "Downvoted",
                "url_to_dirty": null,
                "should_skip_next_liveupdate": false,
                "qfeed_log_press_action": null,
                "show_feedback": false
            }), new(require("app/view/comment").CommentLink)("sbjBRRp", "", {
                "type": "aid",
                "object_id": 8463580,
                "comment_type": "answer",
                "is_logged_in": true
            }), new(require("facebook").FacebookNetworkShare)("BBaHYQc", "", {
                "is_debugging_mode": false,
                "target": {
                    "aid": 8463580,
                    "type": "answer"
                },
                "share_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Anangsha-Alammyan?srid=hzgme&share=c56d868e"
            }), new(require("twitter").TwitterNetworkShare)("imdZZ0z", "", {
                "target": {
                    "aid": 8463580,
                    "type": "answer"
                },
                "share_url": "https://www.twitter.com/intent/tweet?related=quora&text=What%20is%20the%20coolest%20psychological%20trick%3F%20by%20%40alammyan&url=https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Anangsha-Alammyan?srid=hzgme&share=c56d868e"
            }), new(require("view/hover_menu").HoverMenu)("Soruy4F", "", {
                "css_positioning": false,
                "should_show_hover_menu": true,
                "click_open": true,
                "oid": 8463580,
                "should_preload_menu": true,
                "board_item_id": null,
                "alignment": "left",
                "on": null,
                "load_on_pageload": true,
                "attach_to_body": true,
                "show_menu": true
            }), new(require("app/view/share").CopyToClipboardShareLink)("CjyRGGg", "", {
                "copy_message_fail": "Copy not supported by this browser",
                "copy_url": "https://www.quora.com/What-is-the-coolest-psychological-trick/answer/Anangsha-Alammyan?srid=hzgme",
                "copy_message_success": "Link copied to clipboard"
            }), new(require("app/view/embed").EmbedModalLink)("i9YP5nf", "", {
                "aid": 8463580,
                "embed_disabled_text": "This answer has been marked as Not for Reproduction."
            }), new(require("app/view/share").ShareAction)("BeO6lnH", "", {
                "class_name": "AnswerSimpleShareSection",
                "calling_class": "AnswerQuickShareContents",
                "default_tab": null,
                "serialized_share": {
                    "info": {
                        "aid": 8463580
                    },
                    "type": "AnswerShare"
                }
            }), new(require("app/view/user/setup_").ChecklistStep)("hfhyIl0", "", {
                "step": 17,
                "should_show_x": false,
                "short_name": "follow_20_topics",
                "dialog_title": ""
            }), new(require("app/view/user/setup_").ChecklistLinkStep)("CHPjpYy", "", {
                "step": 16,
                "should_show_x": false,
                "short_name": "fill_out_profile_relaxed_logic",
                "dialog_title": ""
            }), new(require("app/view/user/setup_").ChecklistLinkStep)("ZXtxmvR", "", {
                "step": 9,
                "should_show_x": false,
                "short_name": "add_answer",
                "dialog_title": ""
            }), new(require("unified_view/toggle").ToggleBase)("UhO02eE", "", {
                "switch_hide": "@_truncated",
                "switch_show": "@_expanded",
                "log_switch_time": true,
                "switch_on": ["click", "@more"],
                "loading_hide": "@loadinghide",
                "fetch_on": ["click", "@more"],
                "fetch_into": "@_expanded",
                "loading_show": "@loadingshow",
                "serialized_args": "00010000fff64c468f1e9d6dab9948a73e712cfc4958f43b2feeefdf1beb38e1a53e2bf33f2d3b0e88f616f294b543d717ecb6a8529c7da20ea1a7e7677b92207a0447069a9758b868733a17b409ed6be51e790004be72b5b7a1bda9bda90edb1a52c7ead2e9a76f7053d5444238c7f66a5f7fa3939ec7b7653349fefa9eaeec04aefbad2c9ed39d4b345aa001e13084f3bae6ec70a2b9abdd7d6626d18916a81878a364fda35620c6d774ae0d7007b4b0bf35e29be9142027fac4b771db386bfd9599f49db15240699e2b9a3b7f8700c5b8e1fbaff7f98c863e54febec67516e76b408230f649181e7f9563b52261e66b8999af8760ab2bb5e6e2677ea8c2ae8c3a82f364e4515c0cc9c613439baecbab4042c3"
            }), new(require("app/view/question").RelatedQuestionsList)("b4gDE7w", "", {
                "inline": false
            }), new(require("app/view/question").RelatedQuestionLink)("TK2wm9E", "", {
                "impression_target": {
                    "hash": "related_questions|5501092|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("yoAM2IZ", "", {}), new(require("app/view/question").RelatedQuestionLink)("aQE4hj2", "", {
                "impression_target": {
                    "hash": "related_questions|2315309|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("uAt36WT", "", {}), new(require("app/view/question").RelatedQuestionLink)("Z92IUfg", "", {
                "impression_target": {
                    "hash": "related_questions|1966475|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("yQvCFNV", "", {}), new(require("app/view/question").RelatedQuestionLink)("tpopbLK", "", {
                "impression_target": {
                    "hash": "related_questions|6530581|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("dMdKZgk", "", {}), new(require("app/view/question").RelatedQuestionLink)("MI0CNJF", "", {
                "impression_target": {
                    "hash": "related_questions|2839410|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("BExenoZ", "", {}), new(require("app/view/question").RelatedQuestionLink)("zCI6FS2", "", {
                "impression_target": {
                    "hash": "related_questions|2493441|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("CcU2mpj", "", {}), new(require("app/view/question").RelatedQuestionLink)("yRq4OQz", "", {
                "impression_target": {
                    "hash": "related_questions|5370273|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("CZfNPEE", "", {}), new(require("app/view/question").RelatedQuestionLink)("QVdSDXY", "", {
                "impression_target": {
                    "hash": "related_questions|2556242|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("iRWiDXa", "", {}), new(require("app/view/question").RelatedQuestionLink)("I8YYPqc", "", {
                "impression_target": {
                    "hash": "related_questions|2909203|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("UxzeuYT", "", {}), new(require("app/view/question").RelatedQuestionLink)("RwlgVxV", "", {
                "impression_target": {
                    "hash": "related_questions|1488012|2066184666",
                    "type": 21
                }
            }), new(require("app/view/question").QuestionLink)("AIVTuFr", "", {}), new(require('view/follower_list').FollowerListModalLink)("OlkCS2y", "", {
                "object_id": 1503894
            }), new(require("unified_view/datetime_").DateTimeComponent)("o8q7xkF", "", {
                "epoch_us": 1482892397529254,
                "js_disp": false,
                "granularity": null,
                "js_update_interval": 0
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
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
            ga('create', 'UA-16618355-1', 'auto', {
                'sampleRate': 1
            });
            ga('require', 'displayfeatures');
            ga('send', 'pageview');
            ga('set', 'dimension1', 'Question');
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
                    "owner": 21,
                    "e2e": null,
                    "server_side": 600,
                    "server_side_goal": 350
                }
            });
        });
        timing.server_time = 408.46;
        timing.window_id = "dep3305-2182623640748029025";
        timing.page = 408.46;
        timing.request = 416.59;
        timing.is_css_inlined = false;
        timing.is_early_js_inlined = false;
        timing.page_size = 104237;
        timing.experiments = "AAEAACM8/i8mmTkD8ZQ1svQXf4DjROKI59lBCcmW6d5shG8cK8tJZei8CM996WJt9Vieh/RVUdVT/yJQ9lx65mL1DVxjeb9Nl927auZ1y34I3UR1Uuyv9L+a3fTItEpLUyImvd6Lm7J88DwueBl+eI+9HWkrBHqaChaxFj2Z8hBZCl1O";
    });
</script>
