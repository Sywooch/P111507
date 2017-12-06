<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;

/**
 * Password reset request form
 */
class PasswordResetRequestForm extends Model
{
    public $email;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'filter', 'filter' => 'strip_tags'],
            ['email', 'required', 'message' => 'Vui lòng nhập địa chỉ Email'],
            ['email', 'email', 'message' => 'Địa chỉ Email không hợp lệ'],
            ['email', 'exist',
                'targetClass' => '\common\models\User',
                'filter' => ['status' => User::STATUS_ACTIVE, 'type' => User::TYPE_MEMBER],
                'message' => 'Không tìm thấy thành viên nào sử dụng email này.'
            ],
        ];
    }

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return boolean whether the email was send
     */
    public function sendEmail()
    {
        /* @var $user User */
        $user = User::findOne([
            'status' => User::STATUS_ACTIVE,
            'type' => User::TYPE_MEMBER,
            'email' => $this->email,
        ]);

        if ($user) {
            if (!User::isPasswordResetTokenValid($user->password_reset_token)) {
                $user->generatePasswordResetToken();
            }

            if ($user->save()) {
                return \Yii::$app->mailer->compose(['html' => 'passwordResetToken-html', 'text' => 'passwordResetToken-text'], ['user' => $user])
                    ->setFrom([\Yii::$app->params['supportEmail'] => \Yii::$app->name . ' service'])
                    ->setTo($this->email)
                    ->setSubject('Đặt lại mật khẩu tại ' . \Yii::$app->name)
                    ->send();
            }
        }

        return false;
    }
}
