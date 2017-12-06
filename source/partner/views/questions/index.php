<?php

use yii\helpers\Html;
use yii\grid\GridView;
use common\models\Questions;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\QuestionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Questions';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="content">
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
					<div class="box-tools">  
						<p class='pull-right'>
							<?= Html::a('Thêm Câu Hỏi', ['create'], ['class' => 'btn btn-success form-control']) ?>
						</p>
					</div>
				</div>
				<?php // echo $this->render('_search', ['model' => $searchModel]); ?>

				
				<div class="box-body">
				<?= GridView::widget([
					'dataProvider' => $dataProvider,
					'filterModel' => $searchModel,
					'columns' => [
						['class' => 'yii\grid\SerialColumn'],

						/*'id',*/
						'title',
						[
							'label' => 'Lượt xem',
							'attribute'	=> 'views',
							'options'=>['width'=>'100px'],
							'filter'   => false,
							'value'		=> function($model){
								return count($model->views);
							}
						],
						[
                            'label' => 'Số câu trả lời',
							'options'=>['width'=>'100px'],
                            'value' => function ($model) {
							  return count($model->answers);
                            }
                        ],
						[
							'attribute' => 'status',
							'value'		=> function($models){
								if($models->status ==1)
								{
									return "<span class='label label-success'>Đã duyệt</span>";
								}
								else
								{
									return "<span class='label label-danger'>Chưa duyệt</span>";
								}
							}
							,
							'options'=>[
								'width' => '100',
							],
							'format' => 'raw',
						],
						// 'follow_total',
						// 'comment_total',
						// 'upvote_total',
						// 'views',
						// 'status',
						// 'create_time',
						// 'update_time',

						[	
							'class' 	=> 'yii\grid\ActionColumn',
							'header'	=>'Action',
							'template' 	=> '{view}{edit}{delete}',
							'buttons'	=> [
								'edit' 		=> function ($url, $model, $key) {
									//$url = Url::toRoute(array_merge(['delete'], $urlConfig));	
									if($model->status != $model::IS_ACTIVE){
										return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
												'title' => Yii::t('yii', 'Update'),
										]);
									}
								},
								'delete' 		=> function ($url, $model, $key) {
									//$url = Url::toRoute(array_merge(['delete'], $urlConfig));	
									if($model->status != $model::IS_ACTIVE){
										return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
												'title' => Yii::t('yii', 'Delete'),
										]);
									}
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
