<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Questions;
use wadeshuler\ckeditor\widgets\CKEditor;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model common\models\Questions */
/* @var $form yii\widgets\ActiveForm */
$baseUrlPUpload = Yii::$app->homeUrl.'/uploads/questions/';
?>
<style>
	.preview-image{
		max-width:400px;
	}
</style>
<div class="questions-form box">
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
								
								<div class="form-group">
									<input type="text" name="topics" id="topics" class="form-control topic-tokeninput">
								</div>
								
								<?= $form->field($model, 'is_anonymous')->checkbox() ?>

								<?= $form->field($model, 'body')->textarea() ?>

								<?= $form->field($model, 'status')->dropDownList([
									Questions::IS_ACTIVE => 'Active',
									Questions::IN_ACTIVE => 'Inactive',
								], ['prompt'=>'Choose...']) ?>
							</div>
						</div>
					</div><!-- /.tab-pane -->
					
					<!-- BEGIN TABLE SEO -->
					<div class="tab-pane" id="seo">
						<div class="col-md-12">
								<div class="preview-image-wrapper<?= !$model->isNewRecord && $model->social_images ? '' : ' hidden' ?>">
									<?php
									if(!$model->isNewRecord && $model->social_images)
									{
										$urlImg = $baseUrlPUpload.$model->social_images;
									} 
									else
									{
										$urlImg = "#";
									}
									
									echo Html::img(
										$urlImg,
										[
											'class' => 'preview-image img-thumbnail',
											'style' => !$model->isNewRecord && $model->social_images ? '' : 'display:none'
										]
									); ?>
								</div>
							
								<?= $form->field(
									$model,
									'social_images')->fileInput(['onchange' => 'readURL(this);']); ?> 
							</div>
						<?= $form->field($model, 'social_title')->textInput(['maxlength' => true]) ?>
						<?= $form->field($model, 'social_description')->textarea() ?>						
					</div>
					<!-- END TABLE SEO -->
				
				</div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php 
$this->registerJsFile("/tokeninput/jquery.tokeninput.js");
$this->registerCssFile("/tokeninput/token-input.css");
$url_search_topics 	= Url::to(['/ajax/search-topics-profiles']);
$js = <<<JS
$("#topics").tokenInput('$url_search_topics',{
	onResult: function (results) {
        $.each(results, function (index, value) {
            value.name = value.title;
        });
		return results;
    },
	tokenLimit: 1,
	noResultsText: " <a id='add-topic' data-ajax-addtopic='education_concentration' href='javascript:;'> Thêm topic</a>",
	resultsFormatter: function(item){ return "<li>" + "<img src='" + item.images + "' height='25px' width='25px' />" + "<div style='display: inline-block; padding-left: 10px;'><div class='full_name'>" + item.title + "</div><div class='email'>(" + item.id + ")</div></div></li>" },
    //tokenFormatter: function(item) { return "<li><p>" + item.title + "</p></li>" },			
});
JS;
$this->registerJs($js,$this::POS_END);
?>