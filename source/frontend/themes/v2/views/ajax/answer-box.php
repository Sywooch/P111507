<?php
    use yii\helpers\Html;
    use yii\helpers\HtmlPurifier;
?>
<div class="ct-wrapper ">
    <div class="news-feed">
        <div class="status-user-answer">
            <div class="modal-status-content-answer">
                <div class="status-title-answer">
                    <h3 >
                        <a class="font-size-26" href="#"><?=Html::encode($model->title)?></a>
                    </h3>
                </div>
                <div class="status-body">
                    <div class="user-description-answer">
                        <div class="text-description-answer  border-bottom margin-bottom-20">
                            <?= HtmlPurifier::process($model->body) ?>
                        </div>   
                    </div>

                    <div class="status-info-user-answer pt-relative">
                        <a href="#"><img class="img-user-answer has-qtip-profile" src="<?=Yii::$app->user->identity->getAvatar()?>"></a>
                        <div class="user-info-answer">
                            <a href="#" class="user-name text-link"> Business man </a>

                            <div class="status-address">
                                
                                <p>
                                    <a href="" class="text-link">
                                        <?= Yii::t('frontend', 'Edit Credential')?>
                                    </a>
                                </p>
                                <span class="bullet"> . </span>
                                <p>
                                    <a href="" class="text-link">
                                        <?= Yii::t('frontend', 'Go Anonymous')?>
                                    </a>
                                </p>
                                <span class="bullet"> . </span>
                                <p>
                                    <a href="" class="text-link">
                                        <?= Yii::t('frontend', 'Go Fullscreen')?>
                                    </a>
                                </p>
                            </div>
                           
                        </div>
                    </div>
					<!--
                    <div class="answer-form">
                        <textarea placeholder="<?=Yii::t('frontend', 'Write your answer')?>" class="form-control" style="height:200px;"></textarea>
                    </div>
					-->
					<div id="toolbar-container">
						
						<span class="ql-formats">
							<button class="ql-bold"></button>
							<button class="ql-italic"></button>
						</span>
						
						<span class="ql-formats">
						<button class="ql-list" value="ordered"></button>
						<button class="ql-list" value="bullet"></button>
						<button class="ql-indent" value="-1"></button>
						<button class="ql-indent" value="+1"></button>
						</span>
						
						<span class="ql-formats">
							<button class="ql-blockquote"></button>
							<button class="ql-code-block"></button>
						</span>
						
						<span class="ql-formats">
							<button class="ql-link"></button>
							<button class="ql-image"></button>
							<button class="ql-formula"></button>
						</span>
						<span class="ql-formats">
						<button class="ql-clean"></button>
						</span>
					</div>
					<div class="answer-form">
						<div id="frontend-answer-editor">
						</div>
					</div>
                </div>
                <div class="status-footer">
                    <div class="row">
                        <div class="col-lg-12">
                        <!--<p class="lang-warning">Quora only supports English for now.
                            Please write in English only.</p>-->
                        </div>
                        <div class="col-lg-8 user-interactive">
                            <button class="btn btn-primary btn-sm" data-ajax="<?=$model->id?>">
                                Submit
                            </button>
                            <button class="btn btn-default btn-sm">Save Draft</button> <span class="inline_editor_draft_status">(Last saved <span class="datetime" >15m ago</span>)</span>
                        </div>
                        <div class="col-lg-4 connect-social text-right">
                            <span class="text-link">  Post to: </span>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox1" value="option1"> 
                                <div class="icon-ans icon_twitter"></div>
                            </label>
                            <label class="checkbox-inline">
                                <input type="checkbox" id="inlineCheckbox2" value="option2">
                                <div class="icon-ans icon_facebook"></div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    $js = <<<Js
	var IMGUR_CLIENT_ID = 'bcab3ce060640ba';
	var IMGUR_API_URL = 'https://api.imgur.com/3/image';

	var imageHandler =  function(image, callback) {	
	  var data = new FormData();
	  data.append('image', image);

	  var xhr = new XMLHttpRequest();
	  xhr.open('POST', IMGUR_API_URL, true);
	  xhr.setRequestHeader('Authorization', 'Client-ID ' + IMGUR_CLIENT_ID);
	  xhr.onreadystatechange = function() {
		if (xhr.readyState === 4) {
		  var response = JSON.parse(xhr.responseText);
		  if (response.status === 200 && response.success) {
			callback(response.data.link);
		  } else {
			var reader = new FileReader();
			reader.onload = function(e) {
			  callback(e.target.result);
			};
			reader.readAsDataURL(image);
		  }
		}
	  }
	  xhr.send(data);
	}
	var editor = new Quill('#frontend-answer-editor', {
			modules: {
			  formula: true,
			  syntax: false,
			  toolbar: '#toolbar-container'
			},
			imageHandler: imageHandler,		
			theme: 'snow',
			
	});
	
    $('.btn.btn-primary.btn-sm').on('click', function(){
		var answertext = editor.root.innerHTML;
		var dta = {
            feed_id : 0,
            action  : "answer_question",
            question_id: $(this).attr("data-ajax"),
            answer: answertext
        };
        $.ajax({
            url: '/ajax/add-answer',
            type: 'POST',
            data: dta,
            success: function(result) {
                $('#modal-read-more').modal('hide');
            }
        });
        return false;
    });
Js;
$this->registerJS($js, \yii\web\View::POS_READY);
?>