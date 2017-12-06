<?php 
use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\ArrayHelper;
use yii\web\View;
use yii\helpers\Url;
?>
<div class="row">
	<form role="form" method="get">
		<div class="col-md-4">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">ROLE</h3>
				</div>
				<div class="box-body">
					<div class="form-group">
						<?php 
							echo Html::dropDownlist("parent",Yii::$app->request->get("parent"),ArrayHelper::map(\backend\models\AuthItem::find()->where('type = 1')->orderBy('name asc')->all(), 'name', 'description'),[
								'class' => 'form-control',
								'prompt' => 'Chọn cấp quản lý',
								'id'	=> 'parent-id'
							]);
						?>
					</div>
				</div>
			</div>
		</div>	
		<div class="col-md-8">
			<div class="box box-primary">
				<div class="box-header with-border">
					<h3 class="box-title">PERMISSION</h3>
				</div>
				<div class="box-body">
					<div class="form-group">
						<div class="form-group">
							<?php 
								$strLiLeft 	="";
								$strLiRight ="";
								$i=1; foreach($arrayAuthItem as $item)
								{
									$selectedFlag = "";
									if(in_array($item->name,$arrayAuthManageSelected))
									{
										$selectedFlag= "checked";
									}
									if($i % 2)
									{
										$strLiLeft .= "
											<label>
												<input value='$item->name' name='permissionArray[]'  type='checkbox' class='minimal' $selectedFlag>&nbsp;
												$item->description
											</label>
											<br/>
										";
									}
									else
									{
										$strLiRight .= "
											<label>
												<input value='$item->name' name='permissionArray[]' type='checkbox' class='minimal' $selectedFlag>&nbsp;
												$item->description
											</label>
											<br/>
										";
									}
									$i++; 
								} 
							?>
							<div class="col-sm-6">
								<?=$strLiLeft?>
							</div>
								
							<div class="col-sm-6">
								<?=$strLiRight?>
							</div>
						</div>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-info pull-right">Cập nhật phân quyền</button>
				</div>
			</div>
		</div>
	</form>
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
		
		$("#parent-id").change(function(){
			var name = $("#parent-id option:selected").val();
			
			window.location = "/authitemchild/auth-item?parent="+name;
		});
JS;
$this->registerJS($jsLoadEnd,View::POS_END);
?>	