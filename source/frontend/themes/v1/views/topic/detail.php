<?php 
use yii\helpers\Url;
use yii\widgets\ListView;
use kop\y2sp\ScrollPager;
use yii\helpers\Html;
?>
<!-- Page Content -->
        <div class="container home-content">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
                    <div class="sidebar-left-home">
                        <div class="sidebar-left sidebar-top">
                            <div class="sidebar-left sidebar-content">
                                <div class="sidebar-left sidebar-title">
                                    <h3 class="title border-bottom"> Feeds </h3>
                                    <a href="#"> Edit </a>
                                </div>
                                <div class="page-list-link-primary">
                                    <ul class="list-link-primary">
                                        <li class="active"><a href="index.php"> Top Stories </a></li>
                                        <li><a href="bookmarked_answers.php"> Bookmarked Answers </a></li>
                                    </ul>
                                </div>
                                <div class="page-list-link">
                                    <ul class="list-link">
                                        <li><a class="has-qtip-cat" data-cat="1"  href="mobile-technology.php"> Mobile Technology </a></li>
                                        <li><a class="has-qtip-cat" data-cat="1" href="technology-startups.php"> Technology Startups </a></li>
                                        <li><a class="has-qtip-cat" data-cat="1" href="colleges-and-universities.php"> Colleges and Universities </a></li>
                                        <li><a class="has-qtip-cat" data-cat="1" href="digital-marketing.php"> Digital Marketing </a></li>
                                        <li><a class="has-qtip-cat" data-cat="1" href="iphones-(product).php"> iPhones (product) </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-left sidebar-bottom">
                            <div class="sidebar-left sidebar-content">
                                <div class="sidebar-left sidebar-title">
                                    <h3 class="title border-bottom"><span class="icon-trending"></span> Trending Now </h3>
                                </div>
                                <div class="sidebar-left page-list-link">
                                    <ul class="list-link">
                                        <li><a href=""> 2017 Academy Award Nominations </a></li>
                                        <li><a href=""> Michael Flynn Resigns as National Security Advisor </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="topic-news-feed">
                        <div class="status-user">
                            <div class="status-content">
                                <div class="status-header">
                                    <div class="img-topic pull-left">
                                        <a href="<?=Url::to(["topic/detail","id"=>$model->id])?>">
										<img src="<?=$model->getImages()?>">
										</a>
                                    </div>
                                    <div class="title-topic">
                                        <h2 class=""><a href="<?=Url::to(["topic/detail","id"=>$model->id])?>"> <?=$model->title?> </a></h2>
                                    </div>
                                </div>
                                <div class="status-body">
                                    <div class="description-topic">
                                        <p><?=Html::encode($model->title)?></p>
                                    </div>
                                </div>
                                <div class="status-footer border-bottom">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 user-interactive">
                                            <a href="#" class="unfollow-topic"> Unfollow Topic <span class="count"> | 852.4k <span></a>
                                            <a href="#" class="remove-bookmark text-link"> Remove Bookmark </a>
                                            <a href="#" class="share text-link"> Share </a>
                                            <a href="#" class="more-icon pull-right">
                                                <span class="dots"></span>
                                            </a>
                                        </div>
                                    </div>
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
									ScrollPager::EXTENSION_HISTORY
								],
								'triggerOffset' =>  20,
								'eventOnRendered' => 'function(){
									do_qtip_profile();
								}'
							],
						]);
					?>
                    
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <div class="sidebar-right-topic">
                        <div class="sidebar-right sidebar-top">
                            <div class="sidebar-right sidebar-content ">
                                <div class="sidebar-right sidebar-title">
                                    <h3 class="title border-bottom"> Most Viewed Writers </h3>
                                    <a href="#"> View All <i class="fa fa-angle-right"></i> </a>
                                </div>
                                <div class="sidebar-right-topic page-list-link">
                                    <ul class="writers-list-link">
                                        <li>
                                            <a href="#" class="top-write-topic">
                                                <div class="img-write-topic">
                                                    <img src="./images/user.jpg">
                                                </div>
                                                <div class="info-write">
                                                    <p><span class="name">Debodyuti Kar</span>, B.sc Physics &amp; Technology, Ramakrishna Mission</p>
                                                </div>
                                                <div class="number-view-write">
                                                    <span class="number">75,516 Views</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="top-write-topic">
                                                <div class="img-write-topic">
                                                    <img src="./images/user1.jpeg">
                                                </div>
                                                <div class="info-write">
                                                    <p><span class="name">Debodyuti Kar</span>, B.sc Physics &amp; Technology, Ramakrishna Mission</p>
                                                </div>
                                                <div class="number-view-write">
                                                    <span class="number">75,516 Views</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="top-write-topic">
                                                <div class="img-write-topic">
                                                    <img src="./images/user2.jpg">
                                                </div>
                                                <div class="info-write">
                                                    <p><span class="name">Debodyuti Kar</span>, B.sc Physics &amp; Technology, Ramakrishna Mission</p>
                                                </div>
                                                <div class="number-view-write">
                                                    <span class="number">75,516 Views</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>