<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = 'Cập nhật Người dùng: ' . ' ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Người dùng', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->username, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Cập nhật';
?>
<div class="user-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'uid' => Yii::$app->user->identity->id
    ]) ?>

</div>
