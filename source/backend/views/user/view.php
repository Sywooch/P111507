<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\models\User */

$this->title = 'Người dùng ' . $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Danh sách Người dùng', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="user-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Cập nhật', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Xóa', ['delete', 'id' => $model->id], [
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
            'id',
            'username',
            'email:email',
            [
                'attribute' => 'status',
                'value' => getStatusValue ($model->status)
            ],
            [
                'label'=>'Role',
                'value' => getRoleValue ($model)
            ],
            'created_at',
            'updated_at',
        ],
    ]);
    function getStatusValue ($status){
        if ($status === 10) {
            return 'ACTIVE';
        } else {
            return 'NOT ACTIVE';
        }
    }
    function getRoleValue ($model){
        $role = '';
        if (isset($model->authAssignments)) {
            foreach ($model->authAssignments as $item) {
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
    ?>

</div>
