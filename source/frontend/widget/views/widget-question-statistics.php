<?php 
use yii\web\View;
?>							
							<div class="sidebar-title">
                                <h3 class="title border-bottom"> Thống kê cho câu hỏi </h3>
                            </div>
                            <div class="sidebar-content ">
                                <div class="contact-recent-post">
                                    <ul class="list-contact">
                                        <li class="icon-followers"><span class="icon"></span><a href="#" target="_blank" class="text-link"><?=$numberQuestionFollow?> Người theo dõi</a></li>
                                        <li class="icon-views"><span class="icon"></span><p class="number-views"><?=(int)$modelQuestion->views?> Lượt xem</p></li>
                                        <li class="icon-last"><span class="icon"></span><p class="date">Được hỏi vào <?=$dateLastAsked?></p></li>
                                        <!--<li class="icon-edit"><span class="icon"></span><a href="#" target="_blank" class="edit text-link">Edits</a></li>-->
                                    </ul>
                                </div>
                            </div>  							