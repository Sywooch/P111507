<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\View;
use yii\helpers\ArrayHelper;
use common\models\TopicsGroup;
/* @var $this yii\web\View */
/* @var $model common\models\Topics */
/* @var $form yii\widgets\ActiveForm */
?>
<?php
$dataTopicsGroup = TopicsGroup::find()
->select(['id', 'title'])
->orderBy("title ASC")
->asArray()
->all();
$jsReadUrl = <<<JS
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('.preview-image-wrapper').removeClass('hidden');
                $('.preview-image').attr('src', e.target.result).show();
            };
    
            reader.readAsDataURL(input.files[0]);
        }
    }

JS;
$this->registerJs($jsReadUrl,View::POS_END);
$baseUrlPUpload = Yii::$app->homeUrl.'/uploads/topics/';
?>
<style>
	.preview-image{
		max-width:400px;
	}
</style>
<div class="topics-form box">
<?php $form = ActiveForm::begin(); ?>
	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                  <li><a href="#seo" data-toggle="tab">Seo</a></li>
                </ul>
                <div class="tab-content">
					<div class="active tab-pane" id="activity">
						<div class="row">
							<div class="col-md-12">
							<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>
							
							<?= $form
								->field($model, 'topics_group_id')
								->dropdownList(ArrayHelper::map($dataTopicsGroup,'id','title')) ?>
							
							<div class="col-md-12">
								<div class="preview-image-wrapper<?= !$model->isNewRecord && $model->images ? '' : ' hidden' ?>">
									<?php
									if(!$model->isNewRecord && $model->images)
									{
										$urlImg = $baseUrlPUpload.$model->images;
									} 
									else
									{
										$urlImg = "#";
									}
									
									echo Html::img(
										$urlImg,
										[
											'class' => 'preview-image img-thumbnail',
											'style' => !$model->isNewRecord && $model->images ? '' : 'display:none'
										]
									); ?>
								</div>
							
								<?= $form->field(
									$model,
									'images')->fileInput(['onchange' => 'readURL(this);']); ?> 
							</div>
							
							<?= $form->field($model, 'quote')->textarea(['rows' => 6]) ?>

							<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?> 

							</div>
						</div>
					</div><!-- /.tab-pane -->
				  
					<!-- BEGIN TABLE SEO -->
					<div class="tab-pane" id="seo">
						<?= $form->field($model, 'google_title')->textInput(['maxlength' => true]) ?>

						<?= $form->field($model, 'google_description')->textarea(['rows' => 6]) ?>

					</div>
					<!-- END TABLE SEO -->
				
				</div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

