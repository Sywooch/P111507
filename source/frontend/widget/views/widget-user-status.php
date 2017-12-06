<?php
    use yii\helpers\Html;
    use yii\web\View;

    $home_url = Yii::$app->HomeUrl;
    $base_url = $this->theme->baseUrl;
?>
<div class="status-user">
    <div class="status-content">
        <div class="status-header border-bottom">
            <p> <?= Yii::t('frontend', 'Top Stories For You')?> </p>
        </div>
        <div class="status-body">
            <div class="status-info-user">
                <a href="#">
					<img class="img-user" src="<?=Yii::$app->user->identity->getAvatar()?>">
				</a>
                <a href="#" class="user-name text-link"> 
                    <?=Html::encode(Yii::$app->user->identity->getUsername()) ?>
                </a>
            </div>
            <div class="user-question">
                <a href="javascript:;" class="border-bottom"> <?=Yii::t('frontend', 'What is your question?')?> </a>
            </div>
        </div>
    </div>
</div>
<!-- Modal user-question -->
<div class="modal fade custom-modal" id="modal-user-question" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog  modal-md margin-top-20-percent" role="document">
    <div class="modal-content">
     <div class="modal-header no-border-bottom">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">
        <div class="selector_spinner fade-out hide">
            <div class="LoadingDots small">
                <div class="dot first"></div>
                <div class="dot second"></div>
                <div class="dot third"></div>
            </div>
        </div>
        <div class="ask_modal_header">
             <div class="status-info-user">
                <a href="profile.html">
                    <img class="img-user" src="<?=Html::encode(Yii::$app->user->identity->getAvatar())?>">
                </a>
                <a href="profile.html" class="user-name text-link">
                    <?=Html::encode(Yii::$app->user->identity->getUsername())?>
                </a>
            </div>
            <div class="status-info-user status-info-user-anonymous hide">
                <a href="javascrip:void(0);" class="cusor-default"><img class="img-user" src="<?=$base_url?>/images/user.jpg"></a>
                <a href="javascrip:void(0);" class="user-name text-link cusor-default"> Anonymous asks </a>
            </div>
        </div>
       

        <div class="AskQuestionSelector TypersearchESSelector Selector" >
            <div class="selector_input_interaction">
                <textarea class="selector_input text" type="text" rows="1" placeholder="<?=Yii::t('frontend', 'What is your question?')?>" style="overflow: hidden; word-wrap: break-word; height: 34px;"></textarea>
            </div>
        </div>
      </div>
       <div class="modal-footer">
        <div class="modal_actions">
            <span class="text_links">
                <a class="modal_cancel modal_action" data-dismiss="modal" href="#">Cancel</a>
                <label class="modal_action anon">
                <input data-group="js-editable" type="checkbox" >Ask Anonymously</label>
            </span>
            <button type="button" class="btn btn-primary add-question">Ask Question</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
<?php
    $js = <<<JS
    $('.modal_actions button.add-question').click(function(){
        is_anonymously = 0;
        if($('.modal_action.anon input[type="checkbox"]').is(':checked')) { 
            is_anonymously = 1;
        }
        var csrfToken = $('meta[name="csrf-token"]').attr("content");
        $.ajax({
            url: '/ajax/add-question',
            method: 'post',
            type: 'json',
            data: {
                Questions: {
                    title: $('.AskQuestionSelector .selector_input_interaction textarea').val(),
                    is_anonymous: is_anonymously
                },
                _csrf : csrfToken
            },
            success: function(result) {
                result = JSON.parse(result);                
                if (result.error === true) {
                    var msgs = result.data;
                    alert(msgs.title);
                } else {
                     window.location.replace("{$home_url}/unanswered/"+result.data.slug);
                    /*$('#modal-user-question').modal('hide');
                    $('.AskQuestionSelector .selector_input_interaction textarea').val('');*/
                }
            }
        });
    });
JS;
$this->registerJs($js, View::POS_READY);
