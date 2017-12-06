<?php

/* @var $this yii\web\View */
/* @var $name string */
/* @var $message string */
/* @var $exception Exception */

use yii\helpers\Html;

if ($exception->statusCode === 403) {
    $name = 'Cảnh báo';
    $message = 'Bạn không có quyền truy cập chức năng này.';
}

$this->title = $name;

?>
<div class="site-error">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="alert alert-danger">
        <?= nl2br(Html::encode($message)) ?>
    </div>

</div>
