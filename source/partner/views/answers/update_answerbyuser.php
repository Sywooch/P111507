<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Answers */

$this->title = 'Cập nhật câu trả lời: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Câu trả lời', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="answers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_formbyuser', [
        'model' 		=> $model,
		'modelQuestion'	=> $modelQuestion
    ]) ?>

</div>
