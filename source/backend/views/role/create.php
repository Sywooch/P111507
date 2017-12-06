<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\AuthItemChild */

$this->title = 'Thêm mới quyền vào nhóm';
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Phân quyền nhóm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-child-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php
    if (!empty($success)) {
    ?>
    <p style="font-weight: bold; color: green;">
        <?= $success ?>
    </p>
    <?php
    }
    ?>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
