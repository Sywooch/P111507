<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Answers */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
?>
<div class="answers-view">

    <h1><?= Html::encode($model->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
				'attribute' => 'body',
				'format'	=> 'html',
				'label'		=> 'Mô tả'				
			],
            [
				'attribute'	=> 'user_id',
				'label'		=> 'Người đăng',
				'value'		=>	function($model)
				{
					return $model->user->username;
				}
			],
            [
				'attribute' => 'create_time',
				'label'		=> 'Ngày đăng',
				'value'	=> function($model){
					return  CTimestamp::formatDate(
                        cparams('questionCreateDateFomat'),
                        $model->create_time
                    );  
				}
			],
        ],
    ]) ?>

</div>
