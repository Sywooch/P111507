<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\UserSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách Người dùng';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success']) ?>
        <span style="float: right;"><span class="fa fa-key"></span> &nbsp;&nbsp; Cập nhật Role cho Người dùng</span>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'username',
            'email:email',
            [
                'attribute' => 'status',
                'value' => function ($data) {
                    if ($data['status'] === 10) {
                        return 'ACTIVE';
                    } else {
                        return 'NOT ACTIVE';
                    }
                },
                'filter' => Html::activeDropDownList($searchModel, 'status', [10 => 'ACTIVE', 0 => 'NOT ACTIVE'],['class'=>'form-control','prompt' => '']),
            ],
            [
                'label'=>'Role',
                'value' => function ($model) 
				{
                    $role = '';
                    if (isset($model->authAssignments)) 
					{
                        foreach ($model->authAssignments as $item) 
						{
                            if (isset($item->item_name)) {
                                if (!empty($role)) {
                                    $role .= ', ';
                                }
                                $role .= $item->item_name;
                            }
                        }
                    }
                    return $role;
                }
            ],
            'updated_at',

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{view} {update} {delete} {role}',
                'buttons' => [
                        'delete' => function ($url,$model) {
                            return Html::a( '<span class="glyphicon glyphicon-trash"></span>', 
                                    $url, 
                                    [
                                        'title' => Yii::t('app', 'Delete'), 
                                        'data-confirm' => 'Are you sure you want to delete this item "'.$model->username.'" ?',
                                        'data-method' => 'POST'
                                    ]
                            );
                        },
                        'role' => function ($url,$model,$key) {
                            return Html::a('<span class="fa fa-key"></span>', 
                                    ['authassignment/index', 'id' => $model->id], 
                                    [
                                        'title' => Yii::t('app', 'Update Role')
                                    ]
                            );
                        },
                ],
            ],
        ],
    ]); ?>

</div>
