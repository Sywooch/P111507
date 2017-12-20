<?php
    use yii\helpers\Html;
    use yii\helpers\Url;
    use yii\web\View;
    use frontend\widget\WidgetPeopleAnswers;
    use common\models\User;
    use yii\jui\Dialog;
    use frontend\widget\WidgetChooseTopics;
    use frontend\widget\WidgetTopicsKnow;
    use frontend\widget\WidgetUserStatus;
    use frontend\widget\WidgetFeeds;
    use frontend\widget\WidgetImprove;
    use yii\widgets\ListView;
    use kop\y2sp\ScrollPager;

    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    $url_set_follow_topics = Url::to(['/ajax/follow']);
?>
<main id="main" class="site-main">
	<div class="container">
		<?= $this->render('_sidebar_left') ?>
		<div class="main-content scroll" data-ui="jscroll-default">
			<div class="m-menu-top">
				<ul>
					<li class="active"><a href="index.html">Tin tức</a></li>
					<li><a href="bookmarked-answers.html">Đánh dấu</a></li>
					<li><a href="questions.html">Câu hỏi mới</a></li>
				</ul>
			</div>
			<?= $this->render('_m_complete_profile') ?>
			<?= $this->render('_m_credentials') ?>
			<?= $this->render('_today_question') ?>

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
                        'triggerOffset' =>  20,
                        'eventOnRendered' => 'function() {
                            console.log("eventOnRendered");
                        }'
                    ],
                ]);
            ?>
		</div><!-- .main-content -->
		<?=$this->render('_sidebar_right')?>
	</div><!-- .container -->
</main><!-- .site-main -->