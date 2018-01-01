<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TopicsGroupSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Topics Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="topics-group-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Topics Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'title',
            'create_time',
			'update_time',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
