<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SearchForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
?>

<script src="/js/jquery.js" type="text/javascript"></script>

<script type="text/javascript">
    function searchFast() {
        var search = $('#search').val();
        search = $.trim(search);
        if (search != '') {
            $('#search-form').submit();
        }
    }
</script>

<section id="content">
    <div class="container">
        <div class="row">
            <div class="logo-index text-center">
                <a href="/"><img src="/images/logo-index.png" alt="taichua.com" /></a>
            </div>
            <div class="form-search form-index text-center">
                
                <?php $form = ActiveForm::begin(['id' => 'search-form', 'method' => 'get', 'action' => '/ket-qua-tim-kiem', 'options' => ['class' => 'form-inline']]); ?>
                    <div class="form-input">
                        <input type="text" class="form-control search-text" id="search" name="search" value="<?= !empty($model->search) ? $model->search : '' ?>" placeholder="Nhập từ khóa...">
                        <?= Html::submitButton('Tìm kiếm', ['class' => 'btn btn-default btn-search']) ?>
                    </div>
                    
                    <div class="checkbox">
                        <label class="checkbox-inline">
                            <input type="checkbox" name="catalog[]" value="0" <?php if(is_array($model->catalog) && in_array(0, $model->catalog)){echo ' checked="checked"';}?>> Tất cả
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="catalog[]" value="22" <?php if(is_array($model->catalog) && in_array(1, $model->catalog)){echo ' checked="checked"';}?>> Audio
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="catalog[]" value="18" <?php if(is_array($model->catalog) && in_array(2, $model->catalog)){echo ' checked="checked"';}?>> Video
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="catalog[]" value="19" <?php if(is_array($model->catalog) && in_array(3, $model->catalog)){echo ' checked="checked"';}?>> Phần mềm
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="catalog[]" value="20" <?php if(is_array($model->catalog) && in_array(4, $model->catalog)){echo ' checked="checked"';}?>> Game
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" name="catalog[]" value="21" <?php if(is_array($model->catalog) && in_array(5, $model->catalog)){echo ' checked="checked"';}?>> Khác
                        </label>
                    </div>
                
                    <div class="btn-submit-index text-center">
                        <button id="edit" class="btn-post" type="button"><?= Html::a('Đăng bài', ['link/post'], ['class' => 'post']) ?></button>
                        <?= Html::button('Tải nhanh', ['name' => 'fast', 'class' => 'btn-post', 'onclick' => 'searchFast()']) ?>
                    </div>
                <?php ActiveForm::end(); ?>
            </div>
            <div class="howdo text-center">
                <?= Html::a('Hướng dẫn từ ' . $_SERVER['HTTP_HOST'], ['site/getmoney'], ['class' => 'url']) ?>
            </div>
        </div>
    </div>
</section>