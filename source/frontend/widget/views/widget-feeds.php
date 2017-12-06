<?php

    $home_url = Yii::$app->homeUrl;
?>
<div class="col-lg-2 col-md-2 col-sm-12 col-xs-12">
    <div class="sidebar-left-home">
        <div class="sidebar-left sidebar-top">
            <div class="sidebar-left sidebar-content">
                <div class="sidebar-left sidebar-title">
                    <h3 class="title border-bottom"> <?=Yii::t('frontend', 'Feeds')?> </h3>
                    <a href="#" class="edit-menu-feed has-qtip-menu-feed"> <?=Yii::t('frontend', 'Edit')?> </a>
                </div>
                <div class="page-list-link-primary">
                    <ul class="list-link-primary">
                        <li class="active">
                            <a href="<?=$home_url?>"> <?=Yii::t('frontend', 'Top Stories')?> </a></li>
                        <li>
                            <a href="bookmarked_answers.php">
                                <?php echo Yii::t('frontend', 'Bookmarked Answers')?>        
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="page-list-link">
                    <ul class="list-link">
                        <?php
                        foreach ($models as $key => $value) {
                            ?>
                                 <li><a 
                                        class="has-qtip-cat"
                                        data-cat="<?=$value->topic_id?>"
                                        href="mobile-technology.php"> 
                                        <?=$value->topics->title?>
                                    </a>
                                    <span class="remove-feed" data-ajax="<?=$value->topics->id?>">X</span>
                                </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="sidebar-left sidebar-bottom">
            <div class="sidebar-left sidebar-content">
                <div class="sidebar-left sidebar-title">
                    <h3 class="title border-bottom">
                        <span class="icon-trending"></span> 
                        <?=Yii::t('frontend', 'Trending Now')?>
                    </h3>
                </div>
                <div class="sidebar-left page-list-link">
                    <ul class="list-link">
                        <li><a href=""> 2017 Academy Award Nominations </a></li>
                        <li><a href=""> Michael Flynn Resigns as National Security Advisor </a></li>
                    </ul>
                </div>
            </div>
        </div>
		<div class="sidebar-left sidebar-bottom">
            <div class="sidebar-left sidebar-content">
                <div class="sidebar-left page-list-link">
                    <ul class="list-link">
                        <li><a href="//www.dmca.com/Protection/Status.aspx?ID=457d41de-b121-4e96-8c3b-198873461d02" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120b.png?ID=457d41de-b121-4e96-8c3b-198873461d02" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></li>
                        
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>