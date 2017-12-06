<?php
namespace frontend\models;

use common\models\User;
use yii\base\InvalidParamException;
use yii\base\Model;
use Yii;

/**
 * Password reset form
 */
class ResetPasswordForm extends Model
{
    public $password;
    public $repassword;

    /**
     * @var \common\models\User
     */
    private $_user;


    /**
     * Creates a form model given a token.
     *
     * @param  string                          $token
     * @param  array                           $config name-value pairs that will be used to initialize the object properties
     * @throws \yii\base\InvalidParamException if token is empty or not valid
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidParamException('Token đặt lại mật khẩu không được trống.');
        }
        $this->_user = User::findByPasswordResetToken($token);
        if (!$this->_user) {
            throw new InvalidParamException('Sai token đặt lại mật khẩu.');
        }
        parent::__construct($config);
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['password', 'filter', 'filter' => 'trim'],
            ['password', 'filter', 'filter' => 'strip_tags'],
            ['password', 'required', 'message' => 'Vui lòng nhập Mật khẩu mới'],
            ['password', 'string', 'min' => 6, 'message' => 'Mật khẩu ít nhất 6 ký tự'],

            ['repassword', 'filter', 'filter' => 'trim'],
            ['repassword', 'filter', 'filter' => 'strip_tags'],
            ['repassword', 'required', 'message' => 'Vui lòng nhập lại Mật khẩu mới'],
            ['repassword', 'string', 'min' => 6, 'message' => 'Mật khẩu nhập lại ít nhất 6 ký tự'],
            ['repassword', 'compare', 'compareAttribute' => 'password', 'message' => 'Mật khẩu mới và Mật khẩu mới nhập lại không giống nhau'],
            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'password' => 'Mật khẩu mới',
            'repassword' => 'Nhập lại Mật khẩu mới',
        ];
    }

    /**
     * Resets password.
     *
     * @return boolean if password was reset.
     */
    public function resetPassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();
        $user->updated_at = date("Y-m-d H:i:s", time());;

        return $user->save(false);
    }
}
