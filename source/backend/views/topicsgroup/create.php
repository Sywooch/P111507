<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\TopicsGroup */

$this->title = 'Create Topics Group';
$this->params['breadcrumbs'][] = ['label' => 'Topics Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topics-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
