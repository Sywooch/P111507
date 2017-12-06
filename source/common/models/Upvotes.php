<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "upvotes".
 *
 * @property integer $id
 * @property integer $user_id
 * @property integer $post_id
 * @property string $upvote_type
 * @property string $create_time
 */
class Upvotes extends BaseModel
{
    const TYPE_QUESTIONS = 1;
    const TYPE_ANSWERS = 2;
    const TYPE_COMMENT = 3;


    const TYPE_UP = 1;
    const TYPE_DOWN = 2;
    /*const VOTED = 1;*/
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'upvotes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'post_id'], 'integer'],
            [['upvote_type'], 'integer'],
            ['upvote_type', 'in', 'range' => [self::TYPE_QUESTIONS, self::TYPE_ANSWERS, self::TYPE_COMMENT]],
            ['type', 'in', 'range' => [self::TYPE_UP, self::TYPE_DOWN]],
            [['create_time', 'udpate_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'post_id' => 'Post ID',
            'upvote_type' => 'Upvote Type',
            'create_time' => 'Create Time',
            'type' => 'Type',
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getQuestion()
    {
        return $this->hasOne(Questions::className(), ['id' => 'post_id']);
    }

    public function getAnswer()
    {
        return $this->hasOne(Answers::className(), ['id' => 'post_id']);
    }

    public function getComment()
    {
        return $this->hasOne(Comments::className(), ['id' => 'post_id']);
    }
}
