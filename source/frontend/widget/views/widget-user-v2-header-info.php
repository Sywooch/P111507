<?php 
$base_url = $this->theme->baseUrl;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
?>
<style>
.upload-demo .upload-demo-wrap,
.upload-demo .upload-result,
.upload-demo.ready .upload-msg {
    display: none;
}
.upload-demo.ready .upload-demo-wrap {
    display: block;
}
.upload-demo.ready .upload-result {
    display: inline-block;    
}
.upload-demo-wrap {
    width: 300px;
    height: 300px;
    margin: 0 auto;
}

.upload-msg {
    text-align: center;
    padding: 50px;
    font-size: 22px;
    color: #aaa;
    width: 260px;
    margin: 50px auto;
    border: 1px solid #aaa;
}

/* Sweet alert modifications */
.sweet-alert {
    width: auto;
    max-width: 85%;
}


/* ep */

.crop-ep-popup{
	position: fixed;
	top: 120px;
	left: 0;
	right: 0;
	max-width: 540px;
	margin: 0 auto;
	z-index: 11;
	background-color: #fff;
	padding: 20px;
	border: 1px solid #e4e4e4;
	border-radius: 4px;
	display: none;
}
.crop-ep-popup .ep-cancel{
	float: right;
	cursor: pointer;
}
.crop-ep-popup h3{
	margin-bottom: 10px;
}
.crop-ep-content{
	border: 3px dashed #e4e4e4;
	padding: 40px;
	text-align: center;
}
.crop-ep-content .drag-photo{
	font-size: 24px;
	margin-bottom: 20px;
	font-weight: 500;
	color: #777;
}
.crop-ep-content .upload input{
	width: 0.1px;
	height: 0.1px;
	opacity: 0;
	overflow: hidden;
	position: absolute;
	z-index: -1;
}
.crop-ep-content .upload{
	display: inline-block;
	padding: 30px 0;
	border-top: 1px solid #e4e4e4;
	border-bottom: 1px solid #e4e4e4;
}
.crop-ep-content .upload label{
	font-size: 15px;
	font-weight: 500;
	background-color: #e20613;
	color: #fff;
	padding: 6px 14px 7px;
	border-radius: 20px;
	cursor: pointer;s
}
.crop-ep-content .image-url{
	margin-top: 30px;
}
.crop-ep-content .image-url label{
	display: block;
	margin-bottom: 5px;
}

.cr-image{
	border-radius:0% !important;
}
.pf-info p.add-info:hover a{
	display: inline-block;
}
.pf-info .add-info a{
	font-size: 14px;
	color: #777;
	margin-left: 10px;
	display: none;
}

.pf-info div.add-desc:hover a.add-desc-edit{
	display: inline-block;
}

.pf-info a.add-desc-edit{
	font-size: 14px;
	color: #777;
	margin-left: 10px;
	display: none;
}
</style>
<div class="pf-top">
   <div class="pf-avatar">
      <img src="<?php echo Html::encode($model->getAvatar()); ?>" alt="">
      <div class="pfa-edit">
         <a href="#" class="pfa-remove"><i class="nc-icon-mini ui-2_small-remove"></i></a>
         <div class="pfar-bg"></div>
         <div class="pfar-popup">
            <div class="popup-content">
               <h3>Xóa ảnh hồ sơ</h3>
               <p>Bạn có chắc chắn muốn xóa ảnh hồ sơ của bạn?</p>
            </div>
            <div class="popup-bottom">
               <div class="btn">
                  <a href="#" class="btn-cancel pfar-cancel">Đóng</a>
                  <a href="#" class="btn-accept">Gỡ bỏ hình</a>
               </div>
            </div>
         </div>
        <a href="#" class="edit-photo">Chỉnh sửa hình ảnh</a>
		<div class="ep-bg"></div>
        <!-- pop avatar -->
		<div class="ep-popup">
            <h3>Chỉnh sửa Ảnh Hồ sơ<span class="ep-cancel">
				<i class="nc-icon-mini ui-2_small-remove"></i></span>
			</h3>
            <div class="ep-content">
				<div class="drag-photo">Kéo hình ảnh ở đây, hoặc ...</div>
				<div class="upload">
					<input type="file" id="uploadAvatar" value="Upload an Image" accept="image/*">
					<label for="uploadAvatar">Chọn hình ảnh</label>
				</div>
            </div>
        </div>
		<!-- end pop avatar -->
		<!-- pop crop avatar -->
		<div class="crop-ep-popup">
            <h3>
				Chỉnh sửa Ảnh Hồ sơ
			</h3>
            <div class="crop-ep-content">
				<div class="upload-demo-wrap">
                    <div id="upload-demo"></div>
                </div>
            </div>
			<button class="upload-result">Lưu</button>
			<button class="upload-cancel">Hủy</button>
        </div>
		<!-- end pop crop avatar -->
      </div>
   </div>
   <div class="pf-info">
      <h1><?=Html::encode($model->getUsername())?><a href="#">Sửa</a></h1>
      <div class="pf-name-edit">
         <input type="text">
         <div class="btn">
            <a href="#" class="btn-cancel en-cancel">Hủy</a>
            <a href="#" class="btn-accept">Cập nhật</a>
         </div>
      </div>
		<!--<a href="messages.html" class="show-mess">Messages</a>-->
		<?php if($model->quotes != ''){ ?>
			<style>
			.add-info {
				font-family: Times,"Times New Roman","Hiragino Kaku Gothic Pro","Meiryo",serif;
				font-size: 19px;
			}
			</style>
			<p class="add-info"><?=$model->quotes?><a href="#">Sửa</a></p>
		<?php }else {?>
			<p class="add-info">Biệt danh hoặc câu chân ngôn mà bạn thích?</p>
		<?php } ?>
		<div class="ai-bg"></div>
		<div class="ai-popup">
			<div class="popup-content">
				<h3>Chỉnh sửa thông tin đăng nhập</h3>
				<div class="desc">
				   <p>Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</p>
				</div>
			</div>
			<div class="popup-bottom">
				<div class="pb-title"><i class="nc-icon-mini users_single-01"></i>Thêm thông tin hồ sơ</div>
				<form action="#" action="POST">
					<input id="quotes" value="<?=$model->quotes?>" type="text">
					<div class="btn">
						<a href="#" class="btn-cancel ai-cancel">Xóa</a>
						<a href="#" class="btn-cancel ai-cancel">Hủy</a>
						<a href="javascript:;" id="btn-save-quotes" class="btn-accept">Lưu</a>
					</div>
				</form>
			</div>
		</div>
		
		<?php if($model->profile_description != ''){ ?>
			<div class="add-desc">
				<div class="desc-content"><?=$model->profile_description?> </div> <a class="add-desc-edit" href="#">Sửa</a>
			</div>
		<?php }else {?>
			<div class="add-desc">Viết một vài điều về bản thân bạn</div>
		<?php } ?>
		<div class="qb-textarea">
			<textarea id="textarea-profile-description"><?=$model->profile_description?> </textarea>
			<div class="form_buttons" id="__w2_rYxleJU_inline_editor_buttons" style="width: 100%;
			margin-top: -20px;">
				<div class="inline_editor_buttons" style="text-align: right;">
					<a class="inline_editor_button inline_editor_cancel_button" 
						href="#" id="__w2_rYxleJU_inline_editor_cancel">Cancel</a>
					<a class="btn-accept followers" href="javascript:;" action_mousedown="InlineEditorAnswerAdd" 
						id="bnt-save-profile-description">Update</a>
				</div>
			</div>
		</div>
		
      <a href="#" class="btn-accept followers">Theo dõi</a>
   </div>
</div>
<!-- .pf-top -->
<?php 
$this->registerJsFile($base_url.'/js/croppie.js');
$this->registerJsFile($base_url.'/js/user_upload_avatar.js');
$this->registerJsFile('https://cdnjs.cloudflare.com/ajax/libs/exif-js/2.3.0/exif.js');
$this->registerJsFile('http://foliotek.github.io/Croppie/bower_components/sweetalert/dist/sweetalert.min.js');
$this->registerCssFile('https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css');
$this->registerCssFile($base_url.'/css/croppie.css');

$js = <<<JS
	/*  [ Edit Popup ]  */
        $('.edit-photo').on('click', function (e) {
        	e.preventDefault();
	        $('.ep-bg').fadeToggle();
	        $('.ep-popup').fadeToggle();
	    });
		
		/*
	    $('.ep-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.ep-popup').fadeToggle();
	    });
		*/
		
		$('.ep-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.ep-bg').fadeToggle();
	        $('.ep-popup').fadeToggle();
	    });
		
	/*  [ End Edit Popup ] */
	
	/*  [ Add Profile ]
        - - - - - - - - - - - - - - - - - - - - */
        $('.add-info').on('click', function () {
	        $('.ai-bg').fadeToggle();
	        $('.ai-popup').fadeToggle();
	    });
	    $('.ai-bg').on('click', function () {
	        $(this).fadeToggle();
	        $('.ai-popup').fadeToggle();
	    });
	    $('.ai-cancel').on('click', function (e) {
        	e.preventDefault();
	        $('.ai-bg').fadeToggle();
	        $('.ai-popup').fadeToggle();
	    });
		
		
		$('textarea#textarea-profile-description').froalaEditor({
			heightMin: 100,
		});
		

	    /*  [ Show Textarea ] */
		
	    $('.add-desc').on('click', function (e) {
        	e.preventDefault();
			$(".desc-content").hide();
        	$(this).parent().find('.qb-textarea').fadeIn();
	    });	
		
	Demo.init();
JS;
$this->registerJs($js, View::POS_END);
?>