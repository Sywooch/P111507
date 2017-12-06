<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\TopicsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách chủ đề';
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
							<?= Html::a('Thêm chủ đề', ['create'], ['class' => 'btn btn-success form-control']) ?>
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
							[
								'label' => 'Hình ảnh',
								'value' => function($data)
								{
									if(isset($data->images))
									{
										$src =  Yii::$app->homeUrl.'/uploads/topics/'.$data->images;
										return Html::img($src,['alt'=>'Hình Sản Phẩm','width'=>'100']);
									}
									else
									{
										$src =  Yii::$app->homeUrl.'/v1/images/default-topics.png';
										return Html::img($src,['alt'=>'Hình Sản Phẩm','width'=>'100']);
									}
								},
								'options'=>[
									'width' => '100',
								],
								'format' => 'raw',
							],
							'title',
							// 'google_title',
							// 'google_description:ntext',
							// 'create_time',
							// 'update_time',
							// 'status',

							['class' => 'yii\grid\ActionColumn'],
						],
					]); ?>
				</div>
			</div>
		</div>
	</div>
</section>
