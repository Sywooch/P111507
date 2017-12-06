<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthItemChild */

$this->title = 'Parent ' . $model->parent0->description . ' - child ' . $model->child0->description;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Phân quyền nhóm', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-child-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Xóa', ['delete', 'parent' => $model->parent, 'child' => $model->child], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'parent',
                'value' => getValue($model, 'parent'),
            ],
            [
                'attribute' => 'child',
                'value' => getValue($model, 'child'),
            ],
        ],
    ]); 

    function getValue ($model, $name){
        $name1 = $name.'0';
        return $model->$name1->description;
    }
    ?>

</div>
