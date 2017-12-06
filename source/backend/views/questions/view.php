<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\models\Questions;

/* @var $this yii\web\View */
/* @var $model common\models\Questions */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Questions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="questions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
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
            'title',
            'user_id',
            [
                'label' => 'Email',
                'value' => function ($model) {
                    return $model->user->email;
                }
            ],
            /*'is_anonymous',*/
            [
                'label' => 'IS ANONYMOUS',
                'value' => function ($model) {
                    if ($model->is_anonymous === Questions::IS_ANONYMOUS) {
                        return 'Yes';
                    } else {
                        return 'No';
                    }
                }
            ],
            'body:ntext',
            'follow_total',
            'comment_total',
            'upvote_total',
            'views',
            //'status',
            [
                'label' => 'Status',
                'value' => function ($model) {
                    if ($model->status === Questions::IS_ACTIVE) {
                        return 'Active';
                    } else {
                        return 'Inactive';
                    }
                }
            ],
            'create_time',
            'update_time',
        ],
    ]) ?>

</div>
