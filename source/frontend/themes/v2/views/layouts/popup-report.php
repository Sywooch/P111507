<div class="report-bg"></div>
<div class="report-popup">
    <div class="report-title">
        <h3>Báo cáo vi phạm</h3>
        <i class="nc-icon-outline ui-2_small-remove"></i>
    </div>
    <div class="report-content">
        <form action="#">
            <?php $reportAnwers = cparams('report_answer');
                foreach ($reportAnwers as  $value) {
                    ?>
                    <label>
                        <input <?=$reportAnwers[0] == $value ? 'checked' : null ?> type="radio" name="report_answer" value="<?=$value['id']?>">
                            <?=$value['value']?>
                    </label>
                    <?php
                }
            ?>
        </form>
    </div>
    <div class="report-bottom">
        <div class="report-model">
            <a href="javascript:void(0)" class="report-cancel">Hủy bỏ</a>
            <a data-ajax-id="" href="javascript:void(0)" class="report-send">Gửi báo cáo</a>
        </div>
    </div>
</div>