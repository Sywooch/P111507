<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuthassignmentSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách Role của người dùng '.$user->username;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Người dùng', 'url' => ['user/index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-assignment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm Role', ['create', 'id' => $user->id], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'item_name',
            [
                'filter'=>'',
                'attribute' => 'created_at',
                'format' =>  ['date', 'php:H:i:s d-m-Y'],
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',
                'buttons' => [
                    'delete' => function ($url,$model) {
                        return Html::a( '<span class="glyphicon glyphicon-trash"></span>', 
                        $url, 
                        ['title' => Yii::t('app', 'Delete'), 
                            'data-confirm' => 'Are you sure you want to delete this item "'.$model->item_name.'" ?',
                            'data-method' => 'POST'
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>

</div>
