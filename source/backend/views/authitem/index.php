<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuthitemSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách Role và Permission';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auth-item-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'emptyCell'=>' ',
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'type',
                'value' => function ($data) {
                    if ($data['type'] === 1) {
                        return 'ROLE';
                    } else {
                        return 'PERMISSION';
                    }
                },
                'filter' => Html::activeDropDownList($searchModel, 'type', [1 => 'ROLE', 2 => 'PERMISSION'],['class'=>'form-control','prompt' => '']),
            ],
            'name',
            'description:ntext',
            //'rule_name',
            //'data:ntext',
            // 'created_at',
            // 'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'delete' => function ($url,$model) {
                        return Html::a( '<span class="glyphicon glyphicon-trash"></span>', 
                        $url, 
                        ['title' => Yii::t('app', 'Delete'), 
                            'data-confirm' => 'Are you sure you want to delete this item "'.$model->name.'" ?',
                            'data-method' => 'POST'
                        ]);
                    }
                ],
            ],
        ],
    ]); ?>

</div>
