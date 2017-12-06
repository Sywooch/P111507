<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use common\models\Questions;
use common\models\User;
use yii\helpers\Url;
use yii\helpers\HtmlPurifier;
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
				<div class="box-header">
					<h3 class="box-title"><?= Html::encode($this->title) ?></h3>
					<div class="box-tools">  
						<p class='pull-right'>
							<?= Html::a('Thêm Câu Trả Lời', ['create'], ['class' => 'btn btn-success form-control']) ?>
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
							'attribute' => 'question_id',
							'value' 	=> 'question.title',
						],
						[
							'attribute' => 'answers_text',
							'format'	=> 'html',
							'value'		=> function($model){
								$strAnswers = !empty($model->answers_text)
                                ? strip_tags($model->answers_text) : '';
								return word_limit($strAnswers,400);
							}
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
							'attribute' => 'user_id',
							'value' 	=> 'user.username',
							'filter'=>ArrayHelper::map(User::find()->asArray()->all(), 'id', 'username'),
						],
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
							'value'		=> function($models){
								if($models->censor_flag ==1)
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
						'is_anonymous',
						['class' => 'yii\grid\ActionColumn'],
					],
				]); ?>
				</div>
			</div>
		</div>
	</div>
</section>
