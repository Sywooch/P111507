<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use wadeshuler\ckeditor\widgets\CKEditor;
use common\models\Questions;
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
							<div class="col-md-12" style="color:red">
								<?php echo $form->errorSummary($model); ?>
							</div>
							<div class="col-md-12">
								<?=$form->field($model,"question_id")->hiddenInput(["value"=>$modelQuestion->id])->label(false)?>
								<?=$form->field($model,"user_id")->hiddenInput(["value"=>\Yii::$app->user->identity->getId()])->label(false)?>
								<div class="form-group field-answers-question_id">
									<label class="control-label" for="answers-question_id">Câu hỏi</label>
									<textarea class="form-control" readonly="true"><?=$modelQuestion->title?></textarea>
								</div>
								<?= $form->field($model, 'answers_text')->widget(CKEditor::className()) ?>
								<?= $form->field($model, 'is_anonymous')->checkbox(); ?>
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