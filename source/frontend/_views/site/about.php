<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

?>

<section id="content">
    <div class="menu-sidebar">
        <span class="sb-open">></span>
        <span class="sb-close">x</span>
    </div>
    <div class="container">
        <div class="row">
            
            <div id="sidebar" class="col-md-2 nopadding-left">
                <?php echo $this->render('/template/_left_menu', []); ?>
                <?php echo $this->render('/template/_left_keywords', []); ?>
                <?php echo $this->render('/template/_left_ads', ['params'=>$this->params]); ?>
            </div>
            
            <div  class="col-md-10 col-sm-12">
                <div id="main-content">
                    <div class="mainContent">
                        
                        <?php echo $this->render('/template/_hot_news', []); ?>

                        <div class="row">
                            <div class="col-md-8">
                                <div class="content-info news">
                                    <div class="news-title">
                                        <h4 class="h4-title left">Giới thiệu</h4>
                                    </div>
                                    <div class="main-news">
                                        <div class="mainText"><?php echo $about->content?></div>
                                    </div>
                                </div>
                            </div>
                            
                            <?php echo $this->render('/template/_right_ads', ['params'=>$this->params]); ?>
                            
                        </div>
                    </div>
                </div><!-- end #main-content -->
            </div>
        </div>
    </div>
</section>