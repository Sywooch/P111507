<?php 
    $theme = $this->theme;
    $base_url = $theme->baseUrl;
?>
<div class="today-question section">
	<div class="hello-user">
		<a href="#"><img src="<?=$base_url?>/images/ava-user.png" alt=""></a>
		<span>Xin chào, <a href="#">Nguyễn Xuân Trường</a></span>
	</div>
	<a class="today-ask" href="#">Đặt câu hỏi ngay hôm nay!</a>
	<div class="ask-popup-bg"></div>
	<div class="ask-popup">
		<div class="m-ask-title"><a href="#" class="ask-popup-close"><i class="nc-icon-outline arrows-1_minimal-left"></i></a>Thêm một câu hỏi</div>
		<div class="ask-popup-content">
			<div class="ask-popup-close"><i class="nc-icon-mini ui-1_simple-remove"></i></div>
			<div class="hello-user">
				<a href="#"><img src="<?=$base_url?>/images/ava-user.png" alt=""></a>
				<span>Xin chào, <a href="#">Nguyễn Xuân Trường</a></span>
			</div>
			<textarea name="s" id="" placeholder="Câu hỏi của bạn là gì?"></textarea>
			<div class="source">
				<span><i class="nc-icon-outline ui-2_link-69"></i> Tùy chọn:</span>
				<input type="text" placeholder="Nhập đường dẫn">
			</div>
		</div>
		<div class="ask-bottom">
			<div class="ask-modal">
				<a href="#" class="ask-cancel">Hủy bỏ</a>
				<input type="checkbox" id="subscribeNews"><label for="subscribeNews">Đặt câu hỏi ẩn danh</label>
				<a href="#" class="ask-btn">Đặt câu hỏi</a>
			</div>
		</div>
	</div>
</div><!-- .today-question -->