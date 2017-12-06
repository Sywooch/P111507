<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\HtmlPurifier;
/* @var $this yii\web\View */
/* @var $model common\models\Answers */

$this->title = $modelQuestion->title;
$this->params['breadcrumbs'][] = ['label' => 'Answers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $model->id;
?>
<div class="answers-view">
<style>
img{
	max-width:500px;
}
</style>
    <h1><?= Html::encode($modelQuestion->title) ?></h1>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            [
				'attribute' => 'answers_text',
				'format'	=> 'html',
				'label'		=> 'Câu trả lời'
			],
			[
				'label'		=> 'Số từ',
				'options'=>['width'=>'50px'],
				'value'		=> function($model){
					$outtext = HtmlPurifier::process($model->answers_text);
					$outtext = nv_get_plaintext($outtext);
					$outtext = convert_vi_to_en($outtext); 
					$outtext = preg_replace('/[^a-z0-9]+/i',' ',$outtext);
					$outtext = str_replace("  "," ",$outtext);	
					$outtext = trim($outtext);	
					$artext = explode(" ",$outtext);
					return count($artext);
				}
			],
            [
				'attribute'	=> 'user_id',
				'label'		=> 'Người hỏi',
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
