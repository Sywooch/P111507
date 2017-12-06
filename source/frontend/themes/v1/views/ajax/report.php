<?php
    $reportList = cparams('reportListQuestion');
?>
<form id="report_feed_form">
<?php if (!empty($reportList)) foreach ($reportList as $key => $value) { ?>
    <div class="radio"> 
        <label>
            <input type="radio" name="optionsRadios" id="<?=$key?>" value="<?=$key?>" >
                <?=$key?>: 
                <span class="light_gray">
                    <a href="#" target="_blank"><?=$value?></a>
                </span>
        </label>
    </div>
<?php } ?>

    <div class="form-group hide">
        <label class="report_feed_form_label">Optional: Explain this report</label>
        <input type="email" class="form-control report_feed_form_input" id="exampleInputEmail1">
    </div>
</form>