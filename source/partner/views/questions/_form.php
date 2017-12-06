<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\Questions;
use wadeshuler\ckeditor\widgets\CKEditor;
/* @var $this yii\web\View */
/* @var $model common\models\Questions */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-form box">
    <?php $form = ActiveForm::begin(); ?>
	<div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
                  <li><a href="#seo" data-toggle="tab">Seo</a></li>
                </ul>
                <div class="tab-content">
					<div class="active tab-pane" id="activity">
						<div class="form-group has-error">
							<label class="control-label" for="inputError">
							<?php // $form->errorSummary($model); ?>
							</label>
						</div>
						<div class="row">
							<div class="col-md-12">
								<?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

								<?= $form->field($model, 'is_anonymous')->checkbox() ?>

								<?= $form->field($model, 'body')->widget(CKEditor::className()) ?>

								<?php /* $form->field($model, 'status')->dropDownList([
									Questions::IN_ACTIVE => 'Inactive'
									])
									*/
								 ?>
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
