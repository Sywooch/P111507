<?php

namespace common\models;
use common\models\Questions;
use common\models\User;
use common\models\Comments;
use common\models\Upvotes;
use Yii;

/**
 * This is the model class for table "answers".
 *
 * @property int $id
 * @property int $user_id
 * @property int $question_id
 * @property string $answers_text
 * @property string $is_anonymous
 * @property string $create_time
 */
class Answers extends BaseModel
{
    /**
     * @inheritdoc
     */
	const IS_ACTIVE = 1; // TRANG THAI CON HOAT DONG
    const IN_ACTIVE = 0; // TRANG THAI KHONG HOAT DONG
	const DEFAULT_CENSOR_FAG 	= 0; // TRANG THAI DUYET BAI
	const DEFAULT_STATUS 		= self::IS_ACTIVE;
    public static function tableName()
    {
        return 'answers';
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'question_id', 'answers_text'], 'required'],
            [['user_id', 'question_id', 'status','censor_flag'], 'integer'],
            [['answers_text'], 'string'],
			[['images'], 'string', 'max' => 255],
            [['is_anonymous'], 'integer', 'max' => 4],
            [['create_time', 'update_time'], 'integer']
        ];
    }
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'user_id'       => Yii::t('app', 'User ID'),
			'censor_flag'	=> Yii::t('app', 'Kiểm duyệt'),
            'question_id'   => Yii::t('app', 'Question ID'),
            'answers_text'  => Yii::t('app', 'Câu trả lời'),
            'is_anonymous'  => Yii::t('app', 'Ẩn danh'),
			'status'  		=> Yii::t('app', 'Trạng thái'),
			'images'   		=> Yii::t('app', 'Hình ảnh'),
            'create_time'   => Yii::t('app', 'Create Time'),
            'update_time'   => Yii::t('app', 'Create Time'),
        ];
    }
    public function getQuestion()
    {
        return $this->hasOne(Questions::className(), ['id' => 'question_id']);
    }
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
	public function getComments()
    {
        return $this->hasMany(Comments::className(), ['post_id' => 'id'])
        ->where(['comment_type' => Comments::TYPE_QUESTIONS]);
    }
	public function getVotes()
    {
        return $this->hasMany(Upvotes::className(), ['post_id' => 'id'])
        ->where(['upvote_type' => Upvotes::TYPE_QUESTIONS])
        ->andWhere(['!=', 'type', Upvotes::TYPE_DOWN])
        ;
    }
}
