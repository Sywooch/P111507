<?php 
use yii\helpers\Html;
use yii\helpers\Url;
use yii\web\View;
?>
				<div class="profile-header">
					<div class="profile-photo">
						<div class="profile-images">
							<img src="<?php echo Html::encode($userInfo->getAvatar()); ?>">
						</div>
						<a href="#" class="remove-photo"></a>
						<div class="edit-photo">
							<a href="#" data-toggle="modal" data-target="#modalFormAvatar"> <?=Yii::t('frontend', 'Edit Photo')?> </a>
						</div>
					</div>
					<div class="profile-content">
					  <div class="title-content">
						 <div class="name-title">
							<h2 class="user"><a href="#"> <?=Html::encode($userInfo->getUsername())?> </a></h2>
							<a href="javascript:;" class="edit text-link"> <?=Yii::t('frontend', 'Edit')?> </a>
						 </div>
						 <div class="add-profile-credential">
							<a href="javascript:;" class="text-link"> <?=Yii::t('frontend', 'Add profile credential')?> </a>
						 </div>
					  </div>
					  <div class="write-description-profile">
						 <div class="profile-section">
							<a href="javascript:;" class="text-link"> <?=Yii::t('frontend', 'Write a description about yourself')?> </a>
						 </div>
					  </div>
					  <div class="profile-action-bar">
						 <div class="action-bar">
							<div class="primary_item">
							   <a href="#"> <?=Yii::t('frontend', 'Followers')?> </a>
							</div>
							<div class="action_item">
							   <a href="#" class="text-link"> <?=Yii::t('frontend', 'Facebook')?> </a>
							</div>
						 </div>
					  </div>
					</div>
				</div>

<style>
	.preview-image{
		max-width:400px;
	}
	/* style 5 */

	
.inputfile {
    width: 0.1px;
    height: 0.1px;
    opacity: 0;
    overflow: hidden;
    position: absolute;
    z-index: -1;
}

.inputfile + label {
    max-width: 80%;
    font-size: 1.25rem;
    /* 20px */
    font-weight: 700;
    text-overflow: ellipsis;
    white-space: nowrap;
    cursor: pointer;
    display: inline-block;
    overflow: hidden;
    padding: 0.625rem 1.25rem;
    /* 10px 20px */
}

.no-js .inputfile + label {
    display: none;
}

.inputfile:focus + label,
.inputfile.has-focus + label {
    outline: 1px dotted #000;
    outline: -webkit-focus-ring-color auto 5px;
}

.inputfile + label * {
    /* pointer-events: none; */
    /* in case of FastClick lib use */
}

.inputfile + label svg {
    width: 1em;
    height: 1em;
    vertical-align: middle;
    fill: currentColor;
    margin-top: -0.25em;
    /* 4px */
    margin-right: 0.25em;
    /* 4px */
}	
.inputfile-5 + label {
    color: #d3394c;
}

.inputfile-5:focus + label,
.inputfile-5.has-focus + label,
.inputfile-5 + label:hover {
    color: #722040;
}

.inputfile-5 + label figure {
    width: 100px;
    height: 135px;
    background-color: #d3394c;
    display: block;
    position: relative;
    padding: 30px;
    margin: 0 auto 10px;
}

.inputfile-5:focus + label figure,
.inputfile-5.has-focus + label figure,
.inputfile-5 + label:hover figure {
    background-color: #722040;
}

.inputfile-5 + label figure::before,
.inputfile-5 + label figure::after {
    width: 0;
    height: 0;
    content: '';
    position: absolute;
    top: 0;
    right: 0;
}

.inputfile-5 + label figure::before {
    border-top: 20px solid #dfc8ca;
    border-left: 20px solid transparent;
}

.inputfile-5 + label figure::after {
    border-bottom: 20px solid #722040;
    border-right: 20px solid transparent;
}

.inputfile-5:focus + label figure::after,
.inputfile-5.has-focus + label figure::after,
.inputfile-5 + label:hover figure::after {
    border-bottom-color: #d3394c;
}

.inputfile-5 + label svg {
    width: 100%;
    height: 100%;
    fill: #f1e5e6;
}

</style>
<!-- BEGIN # MODAL AVATAR -->
<div class="modal fade" id="modalFormAvatar" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                    <span class="sr-only">Close</span>
                </button>
                <h3 class="modal-title" id="myModalLabel">Chỉnh sửa kỹ năng nghề nghiệp</h3>
				<span id="text-login-msg">Thông tin xác thực cũng xuất hiện trên câu trả lời mà bạn viết.</span>
            </div>
            
            <!-- Modal Body -->
            <div class="modal-body">
				<div class="preview-image-wrapper<?= !empty($userInfo->getAvatar()) && $userInfo->getAvatar() ? '' : ' hidden' ?>">
									<?php
									if(!empty($userInfo->getAvatar()))
									{
										$urlImg = $userInfo->getAvatar();
									} 
									else
									{
										$urlImg = "#";
									}
									
									echo Html::img(
										$urlImg,
										[
											'class' => 'preview-image img-thumbnail',
											'style' => !empty($userInfo->getAvatar()) ? '' : 'display:none'
										]
									); ?>
				</div>
				<div class="box fileupload">
					<input type="file" name="file-5" onchange='readURL(this);' id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />
					<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose a file&hellip;</span></label>
				</div>
				<div class="box filesave hidden">
					<div>
						<button class="_4jy0 _4jy3 _517h _51sy _42ft" type="submit" value="1">Hủy</button>
						<button data-testid="profilePicSaveButton" id="profilePicSaveButton" class="_4jy0 _4jy3 _4jy1 _51sy selected _42ft" type="submit" value="1">Lưu</button>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<!-- END # MODAL AVATAR -->
<?php
$urlAjaxUploadAvatarProfiles = \Yii::$app->urlManager->createUrl(['ajax/user-upload-avatar-profiles']);
$csrf = Yii::$app->request->getCsrfToken();
$jsReadUrl = <<<JS
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
    
            reader.onload = function (e) {
                $('.preview-image-wrapper').removeClass('hidden');
                $('.preview-image').attr('src', e.target.result).show();
            };
            reader.readAsDataURL(input.files[0]);
			
			$('.fileupload').addClass('hidden');
			
			$('.filesave').removeClass('hidden');
        }
    }
	
	$('#profilePicSaveButton').on('click', function() {
		var file_data = $('#file-5').prop('files')[0]; 
		alert(file_data);	
		var form_data = new FormData();                  
		form_data.append('file', file_data);
		form_data.append('_csrf', "$csrf");
		console.log(form_data); 		
		$.ajax({
					url: "$urlAjaxUploadAvatarProfiles", // point to server-side PHP script 
					dataType: 'text',  // what to expect back from the PHP script, if anything
					cache: false,
					contentType: false,
					processData: false,
					data: form_data,                         
					type: 'post',
					success: function(result){
						//alert(result); // display response from the PHP script, if any
					}
		 });
	});
JS;
$this->registerJs($jsReadUrl,View::POS_END);
$this->registerJsFile("https://tympanus.net/Tutorials/CustomFileInputs/js/custom-file-input.js");
?>				