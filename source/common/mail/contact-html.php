<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="password-reset" style="padding: 10px;">
    <p>Xin chào <?= Html::encode($user->email) ?>,</p>

    <p>Vui lòng click vào link dưới đây để thực hiện bước tiếp theo việc đặt lại mật khẩu của bạn:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>
