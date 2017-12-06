<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wadeshuler\ckeditor\widgets\CKEditor;
use common\models\Answers;
/* @var $this yii\web\View */
/* @var $model common\models\Answers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="answers-form">
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
								<?php if(!$model->isNewRecord){?>
									<div class="form-group">
										<input class="form-control" type="text" readonly="true" value="<?=$model->question->title?>">
									</div>
									<div class="form-group">
										<input class="form-control" type="text" readonly="true" value="<?=\Yii::$app->homeUrl?>/<?=$model->question->slug?>">
									</div>
								<?php } ?>
								
								<?= $form->field($model, 'question_id')->hiddenInput()->label(false); ?>

								<?= $form->field($model, 'answers_text')->widget(CKEditor::className()) ?>

								<?= $form->field($model, 'user_id')->textInput() ?>
								<?= $form->field($model, 'status')->dropDownList([
									Answers::IS_ACTIVE => 'Active',
									Answers::IN_ACTIVE => 'Inactive',
								], ['prompt'=>'Choose...']) ?>
								
								<?= $form->field($model, 'censor_flag')->dropDownList([
									Answers::IS_ACTIVE => 'Đã duyệt',
									Answers::IN_ACTIVE => 'Chưa duyệt bài',
								], ['prompt'=>'Choose...']) ?>
								
								<?= $form->field($model, 'is_anonymous')->textInput() ?>
								
								<?= $form->field($model, 'create_time')->textInput() ?>
								</div>
						</div>
					</div><!-- /.tab-pane -->
				  
					<!-- BEGIN TABLE SEO -->
					<div class="tab-pane" id="seo">
					</div>
					<!-- END TABLE SEO -->
				
				</div><!-- /.tab-content -->
    </div><!-- /.nav-tabs-custom -->
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>