<?php 
use yii\helpers\Url;
?>
<div class="employment-title">
   <h3>Chỉnh sửa thông tin nghề nghiệp</h3>
   <p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
</div>
<div class="item-credential item-employment">
   <h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm thông tin việc làm</h3>
   <form action="#">
		<p>
			<label for="">Chức vụ</label>
			<?php 
				$employment_position = "";
				if(isset($model->position)){
					$employment_position = $model->position;
				}
			?>
			<input type="text" placeholder="Software Engineer" value="<?=$employment_position?>" id="employment_position">
		</p>
		<p>
			<label for="">Công ty / Tổ chức</label>
			<input type="text" id="employment_company" placeholder="Software Engineer">
		</p>
		<p>
			<label for="">Năm bắt đầu</label>
			<?php 
			if(!empty($model->start_year)){
				echo resultYear('employment_startyear',$model->start_year);
			}
			else{
				echo resultYear('employment_startyear');
			}
			?>
		</p>
		<p>
			<label for="">Năm kết thúc</label>
			<?php 
				if(!empty($model->end_year)){
					echo resultYear('employment_endyear',$model->end_year);
				}
				else{
					echo resultYear('employment_endyear');
				}
			?>
		</p>
		<p>
			<label for="">Tôi hiện đang làm việc tại đây</label>
			<?php 
				$current_selected = "";
				if(isset($model->i_current_work_here)){
					if($model->i_current_work_here ==1){
						$current_selected = 'checked';
					}
				}
			?>
			<input id="employment_i_current_work_here" <?=$current_selected?> type="checkbox">
		</p>
      <p class="credential-btn">
         <span class="btn">
         <a href="#" class="btn-cancel btn-widget-employment">Hủy</a>
         <a href="#" id="add-employment" class="btn-accept">Lưu</a>
         </span>
      </p>
   </form>
</div>