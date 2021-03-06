<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\QuestionsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="questions-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'title') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'is_anonymous') ?>

    <?= $form->field($model, 'body') ?>

    <?php // echo $form->field($model, 'follow_total') ?>

    <?php // echo $form->field($model, 'comment_total') ?>

    <?php // echo $form->field($model, 'upvote_total') ?>

    <?php // echo $form->field($model, 'views') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'create_time') ?>

    <?php // echo $form->field($model, 'update_time') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
