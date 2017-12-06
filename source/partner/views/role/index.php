<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\web\View;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuthitemchildSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Danh sách Role';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row">
	<div class="col-md-12">
		<div class="box box-primary">
			<div class="box-header with-border">
				<h3 class="box-title"><?=$this->title?></h3>
				<?= Html::a('Thêm mới', ['create'], ['class' => 'btn btn-success pull-right']) ?>
			</div>
			<div class="box-body">
				<div class="form-group">
					<table class="table table-bordered">
						<tbody>
							<tr>
								<th style="width: 10px">#</th>
								<th>URL modules</th>
								<th>Mô tả</th>
								<th style="width: 40px">Action</th>
							</tr>
							<?php 
								$i=1; 
								foreach($arrayAuthManage as $manage)
								{
							?>
								<tr>
									<td><?=$i?></td>
									<td><?=$manage->name?></td>
									<td><?=$manage->description?></td>
									<td>
										<a href="<?=Url::to(['permission/auth-item','parent'=>$manage->name])?>" title="Sửa" aria-label="Sửa" data-pjax="0">
											<span class="glyphicon glyphicon-pencil"></span>
										</a> 
									</td>
								</tr>
							<?php 
								$i++;
								} 
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<?php 
$jsLoadEnd = <<<JS
	//iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
          checkboxClass: 'icheckbox_minimal-green',
          radioClass: 'iradio_minimal-green'
        });
        //Red color scheme for iCheck
        $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
          checkboxClass: 'icheckbox_minimal-red',
          radioClass: 'iradio_minimal-red'
        });
        //Flat red color scheme for iCheck
        $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
          checkboxClass: 'icheckbox_flat-green',
          radioClass: 'iradio_flat-green'
        });

JS;
$this->registerJS($jsLoadEnd,View::POS_END);
?>