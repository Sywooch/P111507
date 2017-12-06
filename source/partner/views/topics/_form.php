<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Topics */
/* @var $form yii\widgets\ActiveForm */
?>

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

							<?= $form->field($model, 'quote')->textarea(['rows' => 6]) ?>

							<?= $form->field($model, 'body')->textarea(['rows' => 6]) ?>

							<?= $form->field($model, 'images')->textInput(['maxlength' => true]) ?>

							
							<?= $form->field($model, 'create_time')->textInput() ?>

							<?= $form->field($model, 'update_time')->textInput() ?>
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

