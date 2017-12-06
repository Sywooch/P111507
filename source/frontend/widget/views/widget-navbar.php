<?php
use yii\helpers\Html;
use yii\helpers\Url;
$home_url = Yii::$app->HomeUrl;
$base_url = $this->theme->baseUrl;
?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button 
                type="button" 
                class="navbar-toggle collapsed" 
                data-toggle="collapse" 
                data-target="#bs-example-navbar-collapse-1" 
                aria-expanded="false">
                <span class="sr-only"> <?= Yii::t('frontend', 'Toggle navigation');?> </span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo-home-quora" href="<?=Yii::$app->homeUrl?>">
                <img alt="Brand" src="<?=$base_url?>/images/logo-quickrep.png">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <form class="form-horizontal navbar-form navbar-left">
                <div class="input-group">
                    <input type="text" class="form-control" name="key-search" placeholder="<?=Yii::t('frontend', 'Ask or Search Quickrep')?>">
                    <textarea name="keys-search" class=""  placeholder="Enter Question Details (Optional)"></textarea>
                    <span class="input-group-btn small-search">
                        <button class="btn btn-default" type="button"> <?=Yii::t('frontend', 'Ask Question')?>  </button>
                    </span>
                    <span class="input-group-btn large-search">
                        <button class="btn btn-default" type="button"> <?=Yii::t('frontend', 'Submit Question')?> </button>
                    </span>
                </div><!-- /input-group -->
            </form>
            <ul class="nav navbar-nav navbar-right">
                <li class="active">
                    <a href="<?=$home_url?>" class="read icon"> <?=Yii::t('frontend', 'Read')?> </a>
                </li>
                <li class="">
                    <a href="<?=Url::to(["answer/index"])?>" class="answer icon"> <?=Yii::t('frontend', 'Answer')?> </a>
                    <li class="dropdown">
                        <a class="dropdown-toggle notifications icon" data-toggle="dropdown" href="#"> <?=Yii::t('frontend', 'Notifications')?> </a>
                        <div class="dropdown-menu menu-notifications">
                            <div class="item_hover header-notifications border-bottom">
                                <div class="btn-clear-notifications">
                                    <div class="icon">
                                        <span></span>
                                    </div>
                                    <a href="notifications.php"> Mark this a Read</a>
                                </div>
                            <a href="#" class="pull-left link-notifications"> See All Notifications <span class="number"> (1) </span></a>    
                            </div>
                            <div class="item_hover box-notifications box-none">
                                <img src="<?=$base_url?>/images/icons/icon_notification.png">
                                    <h2>No Unread Notifications</h2>
                                    <a href="notifications.php" class="btn-notifications"> See Past Notifications </a>
                            </div>
                            <ul class="news-notifications">
                                <li class="list-news-notifications border-bottom">
                                    <div class="news-box-notifications">
                                        <a href="" class="link-notifications"></a>
                                        <div class="notifications-item">
                                            <a href="" class="mark-icon">
                                                <div class="icon"></div>
                                            </a>
                                            <div class="info-notifications">
                                                <div class="photo-user-notifications">
                                                    <div class="photo-notifications">
                                                        <a href="" >
                                                            <img src="<?=$base_url?>/images/user1.jpeg">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="description-user-notifications">
                                                    <div class="text-notifications">
                                                        <span class="user-name">
                                                            <a href="">Aria Wira Perdana</a>
                                                        </span>, 
                                                        <span class="text">
                                                            <span>A student &amp; motion designer, lives in Bekasi, Indonesia</span>
                                                        </span>,  wrote an answer to:
                                                        <span class="question_text">
                                                            <a href="">How do I remove boot-installed Windows 10 from my hard drive?</a>
                                                        </span> 
                                                        <span class="time"> 1h </span>
                                                        <div class="noti-action-bar">
                                                            <div class="action-bar-link">
                                                                <div class="item_link">
                                                                    <a href="">
                                                                        <span>Following Question</span>
                                                                    </a>
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
                    </li>
                    <?php if (cuser()) : ?>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
    							<img class="img-user" 
                                src="<?php echo Html::encode(cuser()->getAvatar()); ?>"> 
                                <?php echo word_limit(Html::encode(Yii::$app->user->identity->getUsername()),6); ?>
                            </a>
                            <ul class="dropdown-menu menu-profile">
                                <li class="item_hover">
    								<a href="<?=Url::to(["profiles/index","id"=>cuser()->id,"slug"=>cuser()->slug])?>"> Profile </a>
    							</li>
                                <li><a href="#"> Blogs </a></li>
                                <li><a href="#"> Messages </a></li>
                                <li><a href="#"> Your Content </a></li>
                                <li><a href="#"> Stats </a></li>
                                <li><a href="settings.php"> Settings </a></li>
                                <ul class="menu-link-bottom">
                                    <li class="bd-bt-menu-bottom">
                                        <a href="#"> Contact Us </a>
                                        <span class="bullet"> &#8226; </span>
                                        <a href="#"> Report a Bog </a>
                                    </li>
                                    <li>
                                        <a href="#"> About </a>
                                        <span class="bullet"> &#8226; </span>
                                        <a href="#"> Prizes </a>
                                        <span class="bullet"> &#8226; </span>
                                        <a href="#"> Careers </a>
                                    </li>
                                    <li>
                                        <a href="#"> Privacy </a>
                                        <span class="bullet"> &#8226; </span>
                                        <a href="#"> Terms </a>
                                        <span class="bullet"> &#8226; </span>
                                        <a href="#"> Conduct </a>
                                    </li>
                                    <li>
                                        <a href="#"> Languages </a>
                                        <span class="bullet"> &#8226; </span>
                                        <?= Html::a('Logout', ['site/logout'], ['data' => ['method' => 'post']]) ?>
                                    </li>
                                </ul>
                            </ul>
                        </li>
                    <?php else : ?>
                    <li><a href="/site/login" class="btn user icon">Sign In </a></li>
                    <?php endif; ?>
                </li>
            </ul>
            <div class="search_show_full">
                <span class="anon_wrapper">
                    <label><input data-group="js-editable" type="checkbox" name="Anonymously" value="1" >Anonymously</label>
                </span>
                <div class="details_toggle_wrapper">
                    <a href="#" data-toggle="tooltip" class="add_details" data-placement="bottom" title="Add question details"></a>
                    <a href="#" data-toggle="tooltip" class="remove_details" data-placement="bottom" title="Hide and clear question details"></a>
                </div>
            </div>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<?php
$js = <<<JS
    $('.large-search .btn.btn-default').click(function(){
        is_anonymously = 0;
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        if($('input[name="Anonymously"]').is(':checked')) { 
            is_anonymously = 1;
        }
        data = { 
            Questions: {
                title : $('input[name="key-search"]').val(),
                body : $('textarea[name="keys-search"]').val(),
                is_anonymous: is_anonymously
            },
            _csrf : csrfToken
        };
        
        $.ajax({
            url: '/ajax/add-question',
            method: 'post',
            data: data,
            type: 'json',
            success: function(result) {
                result = JSON.parse(result);
                if(result.error === true){
                    var msgs = result.data;
                    alert(msgs.title);
                } else {
                    window.location.replace("{$home_url}/unanswered/"+result.data.slug);
                }
            }

        });
    })
JS;
$this->registerJs($js, yii\web\View::POS_READY);
?>