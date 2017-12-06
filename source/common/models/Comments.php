<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "comments".
 *
 * @property integer $id
 * @property string $comment
 * @property integer $comment_parent_id
 * @property integer $user_id
 * @property string $comment_type
 * @property integer $post_id
 * @property string $create_date
 * @property string $update_date
 */
class Comments extends BaseModel
{
    const TYPE_QUESTIONS = 1;
    const TYPE_ANSWER = 2;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comments';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_parent_id', 'user_id', 'post_id', 'comment_type'], 'integer'],
            [['comment'], 'string'],
            [['create_time', 'update_time'], 'safe'],
            [['comment_type', 'post_id', 'comment'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comment' => 'Comment',
            'comment_parent_id' => 'Comment Parent ID',
            'user_id' => 'User ID',
            'comment_type' => 'Comment Type',
            'post_id' => 'Post ID',
            'create_time' => 'Create Date',
            'update_time' => 'Update Date',
        ];
    }

    public function getChilds()
    {
        return $this->hasMany(Comments::className(), ['comment_parent_id' => 'id'])->orderBy(['create_time' => SORT_DESC]);
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

    public function getVotes()
    {
        return $this->hasMany(Upvotes::className(), ['post_id' => 'id'])
        ->where(['upvote_type' => Upvotes::TYPE_COMMENT])
        ->andWhere(['!=', 'type', Upvotes::TYPE_DOWN])
        ;
    }

    public function getVoted()
    {
        return $this->hasOne(Upvotes::className(), ['post_id' => 'id'])
            ->where(['upvote_type' => Upvotes::TYPE_COMMENT])
            ->andWhere(['type' => Upvotes::TYPE_UP])
            ->andWhere(['user_id' => !empty(cuser()->id) ? cuser()->id : null]);
    }

    public function getDownVoted()
    {
        return $this->hasOne(Upvotes::className(), ['post_id' => 'id'])
            ->where(['upvote_type' => Upvotes::TYPE_COMMENT])
            ->andWhere(['type' => Upvotes::TYPE_DOWN])
            ->andWhere(['user_id' => !empty(cuser()->id) ? cuser()->id : null]);
    }
}
