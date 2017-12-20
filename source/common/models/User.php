<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;
use common\models\Upvotes;

/**
 * User model
 *
 * @property integer $id
 * @property string $username
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $email
 * @property string $auth_key
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 * @property string $password write-only password
 */
class User extends ActiveRecord implements IdentityInterface
{
    const STATUS_DELETED = 0;
    const STATUS_ACTIVE = 1;
    const REGISTER_STATUS_STEP1 = 1;
    const REGISTER_STATUS_STEP2 = 2;
    const REGISTER_STATUS_STEP3 = 3;
    const IS_REGISTER = 0;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%user}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_ACTIVE],
            ['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_DELETED]],
        ];
    }

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        return static::findOne(['id' => $id, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return static::findOne(['auth_key' => $token]);
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByEmail($email)
    {
        return static::findOne(['email' => $email, 'status' => self::STATUS_ACTIVE]);
    }

    /**
     * Finds user by password reset token
     *
     * @param string $token password reset token
     * @return static|null
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }

        return static::findOne([
            'password_reset_token' => $token,
            'status' => self::STATUS_ACTIVE,
        ]);
    }

    /**
     * Finds out if password reset token is valid
     *
     * @param string $token password reset token
     * @return boolean
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }

        $timestamp = (int) substr($token, strrpos($token, '_') + 1);
        $expire = Yii::$app->params['user.passwordResetTokenExpire'];
        return $timestamp + $expire >= time();
    }

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->getPrimaryKey();
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->auth_key;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->getAuthKey() === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return Yii::$app->security->validatePassword($password, $this->password_hash);
    }

    /**
     * Generates password hash from password and sets it to the model
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password_hash = Yii::$app->security->generatePasswordHash($password);
    }

    /**
     * Generates "remember me" authentication key
     */
    public function generateAuthKey()
    {
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    /**
     * Generates new password reset token
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Removes password reset token
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    public static function setRegisterStatus($status, $user_id)
    {
        $user = self::findOne($user_id);
        $user->register_status = $status;
        return  $user->save();
    }

    public static function findByFbId($fbid)
    {
        return self::find()
            ->where(['fbid' => $fbid])
            ->one();
    }
	/** KEN : TIM USER BY SLUG **/
	public function findUserBySlug($slug){
		return User::find()
            ->where(['slug' => $slug])
            ->one();
	}

    public function getUsername()
    {
        return $this->first_name .' '. $this->last_name;
    }

    public function getAvatar()
    {
        if (!empty($this->avatar)) {
            return Yii::$app->homeUrl.'/uploads/avatars/'.$this->avatar;
        } else {
            return Yii::$app->homeUrl.'/v1/images/user.jpg';
        }
    }

    public static function getFullPathAvatar($avatar) 
    {
        if (!empty($avatar)) {
            return Yii::$app->homeUrl.'/uploads/avatars/' . $avatar;
        } else {
            return Yii::$app->homeUrl.'/v1/images/user.jpg';
        }
    }

    public function getAnswers()
    {
        return $this->hasMany(Order::className(), ['question_id' => 'id']);
    }

    public function getVotes()
    {
        return $this->hasMany(Upvotes::className(), ['user_id' => 'id']);
    }

    public function votedQuestion($question_id)
    {
        return Upvotes::find()->where([
            'user_id' 		=> $this->id,
            'post_id' 		=> $question_id,
            'upvote_type' 	=> Upvotes::TYPE_QUESTIONS,
            'type' 			=> Upvotes::TYPE_UP,
        ])->one();
    }

    public function getJobname()
    {
        return $this->hasOne(CredentialEmployment::className(), ['user_id' => 'id']);
    }

    public function getCompany()
    {
        return $this->hasOne(Topics::className(), ['id' => 'company'])
            ->viaTable(CredentialEmployment::tableName(), ['user_id' => 'id']);
    }

    public function getEducation()
    {
        return $this->hasOne(CredentialEducation::className(), ['id' => 'user_id']);
    }

    public function getConcentration()
    {
        return $this->hasOne(Topics::className(), ['id' => 'concentration'])
            ->viaTable(CredentialEducation::tableName(), ['user_id' => 'id']);
    }

    public function getSecondConcentration()
    {
        return $this->hasOne(Topics::className(), ['id' => 'secondary_concentration'])
            ->viaTable(CredentialEducation::tableName(), ['user_id' => 'id']);
    }

    public function getSchool()
    {
        return $this->hasOne(Topics::className(), ['id' => 'school'])
            ->viaTable(CredentialEducation::tableName(), ['user_id' => 'id']);
    }

    public function getLocation()
    {
        return $this->hasOne(Topics::className(), ['id' => 'location'])
            ->viaTable(CredentialLocation::tableName(), ['user_id' => 'id']);
    }

}



