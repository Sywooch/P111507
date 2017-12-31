<?php
namespace common\models;

use yii\behaviors\AttributeTypecastBehavior;
use Yii;

/**
 * This is the model class for table "comment_likes".
 *
 * @property int $id
 * @property int $comment_id
 * @property int $user_id
 * @property int $create_time
 * @property int $update_time
 */
class CommentLike extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comment_likes';
    }

    public function behaviors()
    {
        return [
            'typecast' => [
                'class' => AttributeTypecastBehavior::className(),
                'attributeTypes' => [
                    'comment_id' => AttributeTypecastBehavior::TYPE_INTEGER,
                    // 'price' => AttributeTypecastBehavior::TYPE_FLOAT,
                    // 'is_active' => AttributeTypecastBehavior::TYPE_BOOLEAN,
                ],
                'typecastAfterValidate' => true,
                'typecastBeforeSave' => false,
                'typecastAfterFind' => false,
            ],
        ];
    }
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_id', 'user_id'], 'required'],
            [['comment_id', 'user_id', 'create_time', 'update_time'], 'integer'],
            [['create_time', 'update_time'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'comment_id' => Yii::t('app', 'Comment ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'create_time' => Yii::t('app', 'Created At'),
            'update_time' => Yii::t('app', 'Updated At'),
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getComment()
    {
        return $this->hasOne(User::className(), ['id' => 'comment_id']);
    }
}
