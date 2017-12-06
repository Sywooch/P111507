<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Answers */

$this->title = 'Thêm câu trả lời';
$this->params['breadcrumbs'][] = ['label' => 'Câu trả lời', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="answers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
