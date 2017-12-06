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
							'attribute' => 'user_id',
							'header' => 'Email',
							'value' => 'user.email',
						],
						//'user.email',
						//'is_anonymous',
						/*
						[
							'attribute' => 'is_anonymous',
							'header' => 'Ẩn danh',
							'value' => function ($models) {
								if ($models->is_anonymous === Questions::IS_ANONYMOUS) {
									return "<span class='label label-primary'>Ẩn danh</span>";
								}
							},
							'filter'=>array(1=>"Ẩn danh",0=> "Bình thường"),
							'options'=>[
								'width' => '150',
							],
							'format' => 'raw',
						],
						*/
						[
							'attribute' => 'status',
							'value'		=> function($models){
								if($models->status ==1)
								{
									return "<span class='label label-success'>Hoạt động</span>";
								}
								else
								{
									return "<span class='label label-danger'>Tạm ngưng</span>";
								}
							}
							,
							'options'=>[
								'width' => '100',
							],
							'format' => 'raw',
						],
						[
									'attribute' => 'censor_flag',
									'label'		=> 'Đang chỉnh sửa',
									'format' 	=> 'raw',
									'value'		=> function($data)
									{
										$id 	   		= $data->id;
										$flagCheck 		= "";
										$flagDisable	= "";
										if(!empty($data->censor_flag)){
											$flagCheck 	= "checked";
										}
										
										$htmlStatus = '<input type="checkbox" '.$flagCheck.' 
										data-id="'.$id.'" class="btnediting" data-toggle="toggle"
										data-onstyle="success" data-offstyle="danger" data-size="small"
										>';
										return  $htmlStatus;		
										
									}
						],
						// 'follow_total',
						// 'comment_total',
						// 'upvote_total',
						// 'views',
						// 'status',
						// 'create_time',
						// 'update_time',

						['class' => 'yii\grid\ActionColumn'],
					],
				]); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<?php 
$this->registerJsFile("https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js");
$this->registerCssFile("https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css");
?>
<?php 
$js = <<<JS
$('.btnediting').change(function() {
   idModel =  $(this).data("id");
   isCheck = 0;
   var obj = $(this);
   if($(this).prop('checked')){
	   isCheck = 1;
   }
   else
   {
	   isCheck = 0;
   }
   var dta = {
        id  	: idModel,
		isCheck : isCheck
   };
   if(isCheck == 1){
	   $.ajax({ 
			url	: '/questions/ajax-censor-flag',
			type: 'POST',
			data: dta
		}).done(function(result) {
			result = JSON.parse(result);
			if(result.error == false){
				//alert(result.mess);
				$('#'+result.item).removeClass("hidden");
				obj.bootstrapToggle('disable');
			}
			else
			{
				alert(result.mess);
			}
		});
   }
   
});
JS;
$this->registerJs($js,$this::POS_END);
?>