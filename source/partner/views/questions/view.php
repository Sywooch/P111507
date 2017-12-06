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
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'title',
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
			[
				'attribute' => 'create_time',
				'value'	=> function($model){
					return  CTimestamp::formatDate(
                        cparams('questionCreateDateFomat'),
                        $model->create_time
                    );  
				}
			],
			[
				'attribute' => 'update_time',
				'value'	=> function($model){
					return  CTimestamp::formatDate(
                        cparams('questionCreateDateFomat'),
                        $model->update_time
                    );  
				}
			]
        ],
    ]) ?>

</div>
