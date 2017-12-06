<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\AuthItem */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Role và Permission', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->name], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->name], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item "' . $model->name . '" ?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
                'attribute' => 'type',
                'value' => getTypeName($model->type)
            ],
            'name',
            'description:ntext',
            //'rule_name',
            //'data:ntext',
            [
                'attribute' => 'created_at',
                'format' =>  ['date', 'php:H:i:s d-m-Y'],
            ],
            [
                'attribute' => 'updated_at',
                'format' =>  ['date', 'php:H:i:s d-m-Y'],
            ],
        ],
    ]);

    function getTypeName ($type){
        if ($type === 1) {
            return 'ROLE';
        } else {
            return 'PERMISSION';
        }
    }
    ?>

</div>
