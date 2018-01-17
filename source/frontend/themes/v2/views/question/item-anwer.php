<?php 
	use frontend\widget\WidgetAuthor;
	use frontend\widget\WidgetAnswerComment;
	use frontend\widget\WidgetFormComment;
	use frontend\widget\WidgetFavoriteAnswer;
	use frontend\widget\WidgetAnswerReport;
	use frontend\widget\WidgetAnswerFollow;
	use common\models\Comments;
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
    ?>
<div class="question-premium section">
	<?= WidgetAuthor::widget(['model' => $model->user, 'view' => 'author-question-detail' , 'question' => $question, 'answer' => $model]) ?>
	<div class="qp-content">
		<div class="qp-text">
			<?= \yii\helpers\HtmlPurifier::process(word_limit($model->answers_text, 450, '...<p><a href="javascript:void(0)" class="qp-readmore">(Xem thêm)</a></p>')) ?>
		</div>
		<a href="#"><img src="<?=$base_url?>/images/qp-img-01.jpg" alt=""></a>
	</div>
	<div class="qp-full-content">
		<div class="qp-text">
			<?= \yii\helpers\HtmlPurifier::process($model->answers_text) ?>
		</div>
	</div>
	<div class="qp-action">
		<div class="action-left">
			<ul>
				<?php
                    echo WidgetFavoriteAnswer::widget([
                        'id' => $model->id,
                        'count' => count($model->favorite),
                        'isFavorite' => $model->isFavorite
                    ]);
                ?>
                <?= WidgetAnswerReport::widget([
                    'id' => $model->id
                ]) ?>
                <?= WidgetAnswerFollow::widget([
                    'id' => $model->id,
                    'count' => count($model->follow),
                    'isFollow' => $model->isFollow
                    ]) ?>
			</ul>
		</div>
		<div class="action-right">
			<ul>
				<li><a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-share-square-o" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>
	<?php 
	    if (!empty($model->comments)) {
            echo WidgetAnswerComment::widget(['model' => $model]);
            // echo $this->render('_comment_previews', ['model' => $model]);
        } else {
            echo '<div class="qp-comment">';
            echo WidgetFormComment::widget([
                'id' => $model->id,
                'type' => Comments::TYPE_ANSWER
            ]);
            echo '<div class="comment-content">';
            echo '</div>';
            echo '</div>';
        }
	?>
</div><!-- .question-premium -->
