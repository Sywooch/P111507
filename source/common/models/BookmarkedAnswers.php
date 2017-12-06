<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bookmarked_answers".
 *
 * @property integer $id
 * @property integer $answer_id
 * @property integer $user_id
 * @property integer $status
 * @property string $create_time
 */
class BookmarkedAnswers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bookmarked_answers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'answer_id', 'user_id', 'status'], 'integer'],
            [['create_time'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'answer_id' => 'Answer ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'create_time' => 'Create Time',
        ];
    }
}
