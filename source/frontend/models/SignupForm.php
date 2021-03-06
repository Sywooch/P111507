<?php
namespace frontend\models;

use common\models\User;
use yii\base\Model;
use Yii;
use yii\helpers\FileHelper;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $email;
    public $password;
    public $repassword;
    public $firstname;
    public $lastname;
    public $fullname;
    public $verifyCode;
    public $google_id;
    public $google_token;
    public $avatar;
    public $fbid;
    public $fbtoken;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['fullname', 'filter', 'filter' => 'trim'],
            ['fullname', 'filter', 'filter' => 'strip_tags'],
            ['fullname', 'required', 'message' => 'Vui lòng nhập Họ và tên'],
            ['fullname', 'string', 'max' => 255, 'message' => 'Họ và tên không quá 255 ký tự'],

            ['firstname', 'filter', 'filter' => 'trim'],
            ['firstname', 'filter', 'filter' => 'strip_tags'],
            // ['firstname', 'required', 'message' => 'Vui lòng nhập Tên'],
            ['firstname', 'string', 'max' => 255, 'message' => 'Tên không quá 255 ký tự'],

            ['lastname', 'filter', 'filter' => 'trim'],
            ['lastname', 'filter', 'filter' => 'strip_tags'],
            // ['lastname', 'required', 'message' => 'Vui lòng nhập Họ'],
            ['lastname', 'string', 'max' => 255, 'message' => 'Họ không quá 255 ký tự'],
            
            ['email', 'filter', 'filter' => 'trim'],
            ['email', 'filter', 'filter' => 'strip_tags'],
            ['email', 'required', 'message' => 'Vui lòng nhập địa chỉ Email'],
            ['email', 'email', 'message' => 'Địa chỉ Email không hợp lệ'],
            ['email', 'string', 'max' => 255, 'message' => 'Độ dài Email không quá 255 ký tự'],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'Địa chỉ Email này đã được sử dụng'],

            ['password', 'filter', 'filter' => 'trim'],
            ['password', 'filter', 'filter' => 'strip_tags'],
            ['password', 'required', 'message' => 'Vui lòng nhập Mật khẩu'],
            ['password', 'string', 'min' => 6, 'message' => 'Mật khẩu ít nhất 6 ký tự'],

            /*['repassword', 'filter', 'filter' => 'trim'],
            ['repassword', 'filter', 'filter' => 'strip_tags'],
            ['repassword', 'required', 'message' => 'Vui lòng nhập lại Mật khẩu'],
            ['repassword', 'string', 'min' => 6, 'message' => 'Mật khẩu nhập lại ít nhất 6 ký tự'],
            ['repassword', 'compare', 'compareAttribute' => 'password', 'message' => 'Mật khẩu và Mật khẩu nhập lại không giống nhau'],*/

            /*['verifyCode', 'filter', 'filter' => 'trim'],
            ['verifyCode', 'filter', 'filter' => 'strip_tags'],
            ['verifyCode', 'required', 'message' => 'Vui lòng nhập mã xác nhận'],
            ['verifyCode', 'captcha', 'message' => 'Mã xác nhận không đúng'],*/
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'email' => 'Địa Chỉ Email',
            'password' => 'Mật khẩu',
            'repassword' => 'Nhập lại Mật khẩu',
            'fullname' => 'Họ và tên',
            'verifyCode' => 'Xác nhận bạn không phải robot',
            'firstname' => 'Tên',
            'lastname' => 'Họ'
        ];
    }
    
    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!empty($this->google_id) && !empty($this->google_token)) {
            $user = User::find()->where(['email' => $this->email])->one();
            if (!empty($user)) {
                return $user;
            } else {
                $this->password = 'gg_'.$this->email;
            }
        }
        if (!empty($this->fbid) && !empty($this->fbtoken)) {
            // Kiểm tra user đã tồn tại chưa niếu có rồi thì login.
            $user = User::find()->where(['fbid' => $this->fbid])->one();
            if (!empty($user)) {
                return $user;
            } else {
                $this->password = 'fb_'.$this->fbid;
                $this->email = !empty($this->email) ? $this->email : 'qr.'.$this->fbid.'@quickrep.vn';
            }
        }
        // MANUAL REGISTER
        if ($this->validate()) {
            $user = new User();
            $user->register_status = User::REGISTER_STATUS_STEP1;
            // $user->username 	= $this->firstname.' '.$this->lastname;
            $user->username     = $this->fullname;
            $user->email 		= $this->email;
            $user->first_name 	= $this->firstname;
            $user->last_name 	= $this->lastname;
            $user->type 		= User::IS_REGISTER;
            // $user->slug         = slug($this->firstname.' '.$this->lastname);
			$user->slug			= slug($this->fullname);
            $user->created_at 	= date("Y-m-d H:i:s", time());
            $user->updated_at 	= date("Y-m-d H:i:s", time());
            $user->setPassword($this->password);
            $user->generateAuthKey();
           
            if(!empty($this->google_id) && !empty($this->google_token)){
                $user->google_id = $this->google_id;
                $user->google_token = $this->google_token;
            }
            if(!empty($this->fbid) && !empty($this->fbtoken)){
                $user->fbid = $this->fbid;
                $user->fbtoken = $this->fbtoken;
            }
			/** UPDATE AVATAR **/
			if(!empty($this->avatar)){
				$pathUpload    	= Yii::getAlias('@frontend').'/web/uploads/avatars/'.date('Y') . '/' . date('m').'/';
				if (!file_exists($pathUpload)) {
                    FileHelper::createDirectory($pathUpload, 0777);
				}
				$fileNewName	= slug($this->firstname.' '.$this->lastname).time().'.jpg';
				grab_image($this->avatar,$pathUpload.$fileNewName);
				$user->avatar 	= date('Y') . '/' . date('m').'/'.$fileNewName;
			}
			/** UPDATE AVATAR **/
            if ($user->save()) {
                return $user;
            } else {
                throw new \Exception("Lỗi Máy Chủ. Không thể đăng kí.", 1);
            }
        }
        // else {
        //     $error = $this->getErrors();
        //     dd($error);
        // }
        return null;
    }
}
