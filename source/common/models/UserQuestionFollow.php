<?php

namespace common\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "user_question_follow".
 *
 * @property integer $id
 * @property string $question_id
 * @property string $user_id
 * @property integer $status
 * @property string $create_time
 */
class UserQuestionFollow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_question_follow';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['question_id', 'user_id'], 'required'],
            [['id', 'question_id', 'user_id', 'status'], 'integer'],
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
            'question_id' => 'Question ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'create_time' => 'Create Time',
        ];
    }
	
	public static function setUserFollow($question_id, $user_id)
    {
       $check = self::find()->where(['question_id' => $question_id, 'user_id' => $user_id])->one();
       if (empty($check)) {
           $user_question_follow 				= new UserQuestionFollow();
           $user_question_follow->user_id 		= $user_id;
           $user_question_follow->question_id 	= $question_id;
           $user_question_follow->create_time 	= new Expression('NOW()');
           if (!$user_question_follow->save()) {
				return false;
           }
       }
       return true;
    }
	
}
