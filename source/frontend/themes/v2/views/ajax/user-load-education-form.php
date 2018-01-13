<?php 
use yii\helpers\Url;
?>
	<div class="education-title">
		<h3>Chỉnh sửa thông tin kỹ năng nghề nghiệp</h3>
		<p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
	</div>
	<div class="item-credential item-education">
		<h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm thông tin giáo dục</h3>
		<form action="#">
         <p>
            <label for="">Trường học</label>
            <input id="education_school" type="text">
         </p>
         <p>
            <label for="">Sự tập trung</label>
            <input id="education_concentration" type="text">
         </p>
         <p>
            <label for="">Nồng độ trung học</label>
            <input id="education_secondary_concentration" type="text">
         </p>
         <p>
            <label for="">Loại bằng cấp</label>
			<?php 
				$degree_type = "";
				if(isset($model->degree_type)){
					$degree_type = $model->degree_type;
				}
			?>
            <input id="education_degree_type" value="<?=$degree_type?>" type="text">
         </p> 
         <p>
            <label for="">Năm tốt nghiệp</label>
			<?php 
				if(!empty($model->end_year)){
					echo resultYear('education_graduation_year',$model->graduation_year);
				}
				else{
					echo resultYear('education_graduation_year');
				}
			?>
         </p>
         <p class="credential-btn">
            <span class="btn">
            <a href="#" class="btn-cancel btn-widget-education">Hủy</a>
            <a href="#" id="add-education" class="btn-accept">Lưu</a>
            </span>
         </p>
		</form>
	</div>