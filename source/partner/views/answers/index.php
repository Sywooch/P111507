<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Questions;
use common\models\User;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AnswersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Câu Trả Lời';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<!--
				<div class="box-header">
					<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
					<div class="box-tools">  
						<p class='pull-right'>
							<?= Html::a('Thêm Câu Trả Lời', ['create'], ['class' => 'btn btn-success form-control']) ?>
						</p>
					</div>
				</div>-->
				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				
				<div class="box-body">
				<?= GridView::widget([
					'dataProvider' => $dataProvider,
					'columns' => [
						['class' => 'yii\grid\SerialColumn'],
						[
							'label' => 'Câu hỏi',
							'attribute' => 'title',
						],
						[
							'label' => 'Lượt xem',
							'attribute'	=> 'views',
							'options'=>['width'=>'100px'],
							'value'		=> function($model){
								return count($model["views"]);
							}
						],
						/*[
                            'label' => 'Số câu trả lời',
                            'value' => function ($model) {
                              $modelQuestion = Questions::findOne($model['id']);
							  return count($modelQuestion->answers);
                            }
                        ],*/
						[	
							'class' 	=> 'yii\grid\ActionColumn',
							'header'	=>'Action',
							'template' 	=> '{view}{reply}',
							'buttons'	=> [
								'view' 		=> function ($url, $model, $key) {
									//$url = Url::toRoute(array_merge(['delete'], $urlConfig));	
									return Html::a('<span class="glyphicon glyphicon-eye-open"></span>&nbsp;&nbsp;', ['viewquestion', 'id'=>$model["id"]]);
								},
								'reply' 		=> function ($url, $model, $key) {
									//$url = Url::toRoute(array_merge(['delete'], $urlConfig));	
									return Html::a('&nbsp;<span class="glyphicon bg-green glyphicon-plus"></span>', ['reply', 'id'=>$model["id"]]);
								},
							]
							
						],
					],
				]); ?>
				</div>
			</div>
		</div>
	</div>
</section>
