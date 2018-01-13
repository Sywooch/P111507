<?php 
use yii\helpers\Url;
?>

   <div class="location-title">
      <h3>Chỉnh sửa thông tin đăng nhập</h3>
      <p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
   </div>
   <div class="item-credential item-location">
      <h3><i class="fa fa-briefcase" aria-hidden="true"></i>Thêm chứng chỉ vị trí</h3>
      <form action="#">
         <p>
            <label for="">Địa điểm (yêu cầu)</label>
            <input type="text" id="location_position" placeholder="Địa điểm">
         </p>
         <p>
            <label for="">Năm bắt đầu</label>
			<?php 
				if(!empty($model->start_year)){
					echo resultYear('location_startyear',$model->start_year);
				}
				else{
					echo resultYear('location_startyear');
				}
			?>
         </p>
         <p>
            <label for="">Năm kết thúc</label>
			<?php 
				if(!empty($model->end_year)){
					echo resultYear('location_endyear',$model->end_year);
				}
				else{
					echo resultYear('location_endyear');
				}
			?>
         </p>
         <p>
            <label for="">Tôi hiện đang làm việc tại đây</label>
			<?php 
				$current_selected = "";
				if(isset($model->i_current_live_here)){
					if($model->i_current_live_here ==1){
						$current_selected = 'checked';
					}
				}
			?>
            <input id="location_current" <?=$current_selected?> type="checkbox">
         </p>
         <p class="credential-btn">
            <span class="btn">
            <a href="#" class="btn-cancel btn-widget-location">Hủy</a>
            <a href="#" id="add-location" class="btn-accept">Lưu</a>
            </span>
         </p>
      </form>
   </div>
