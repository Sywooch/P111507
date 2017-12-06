<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AuthAssignment */

$this->title = 'Thêm Role';
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Người dùng', 'url' => ['user/index']];
$this->params['breadcrumbs'][] = ['label' => 'Cập nhật Role cho người dùng '.$user->username, 'url' => ['index', 'id' => $user->id]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'uid' => Yii::$app->user->identity->id
    ]) ?>

</div>
