<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Answers */

$this->title = $modelQuestion->title;
$this->params['breadcrumbs'][] = ['label' => 'Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
?>
<div class="answers-view">
<style>
img{
	max-width:100%;
}
</style>
    <h1><?= Html::encode($modelQuestion->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'answers_text:html',
            [
				'attribute'	=> 'user_id',
				'value'		=>	function($model)
				{
					return $model->user->username;
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
        ],
    ]) ?>

</div>
