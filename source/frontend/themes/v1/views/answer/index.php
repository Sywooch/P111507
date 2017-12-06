<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ListView;
use kop\y2sp\ScrollPager;

$theme = $this->theme;
$base_url = $theme->baseUrl;
$url_set_follow_topics = Url::to(['/ajax/follow']);
?>
<div class="container answer-content">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="sidebar-left-home">
                        <div class="sidebar-left sidebar-top">
                            <div class="sidebar-left sidebar-content">
                                <div class="sidebar-left sidebar-title">
                                    <h3 class="title border-bottom"> <?=Yii::t('frontend', 'Questions')?> </h3>
                                </div>
                                <div class="page-list-link-primary">
                                    <ul class="list-link-primary">
                                        <li class="active">
                                            <a href="javascript:;">
                                                <div class="list_item_text"><?=Yii::t('frontend', 'Questions For You')?><span class="list-count"></span></div>
                                            </a>
                                        </li>
										<!--
                                        <li>
                                            <a href="javascript:;">
                                                <div class="list_item_text"> Answer Requests <span class="list-count"></span></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="list_item_text"> Answer Later <span class="list-count"></span></div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript:;">
                                                <div class="list_item_text"> Drafts <span class="list-count"></span></div>
                                            </a>
                                        </li>
										-->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="main-news-feed top-questions-page">
                        <div class="status-user">
                            <div class="status-content">
                                <div class="status-header top-questions border-bottom">
                                    <div class="icon-top-questions">
                                        <span class="icon"></span>
                                    </div>
                                    <p><?=Yii::t('frontend', 'Top Stories For You')?></p>
                                </div>   
                            </div>
                        </div>
                    </div>
                    <?php
						echo ListView::widget([
							'summary'=>'',
							'dataProvider' => $dataProvider,
							'itemOptions' => ['class' => 'item'],
							'itemView' => function ($model, $key, $index, $widget) {
								return $this->render('_item_view', ['model' => $model]);
								// or just do some echo
								// return $model->title . ' posted by ' . $model->author;
							},
							'pager' => [
								'class' => ScrollPager::className(),
								'enabledExtensions' => [
									ScrollPager::EXTENSION_TRIGGER,
									ScrollPager::EXTENSION_SPINNER,
									ScrollPager::EXTENSION_NONE_LEFT,
									ScrollPager::EXTENSION_PAGING,
									//ScrollPager::EXTENSION_HISTORY
								],
								'triggerOffset' =>  20
							],
						]);
					?>
                    <div class="view-more-questions">
                        <a href="#" class="text-center"> 
							View All <span class="move-right"></span>
						</a>
                    </div>
                    <div class="search-topic-questions text-center">
                        <div class="icon-frame">
                            <span class="icon"></span>
                        </div>
                        <h2> Add 5 topics you know about </h2>
                        <p> Add topics for a customized feed with questions you can answer. </p>
                        <a href="#" class="search-link"> Search for Topics </a>
                    </div>
                </div>  
            </div>
        </div>