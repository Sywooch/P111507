<?php

namespace common\models;

use Yii;
use yii\db\Expression;
/**
 * This is the model class for table "user_question_pass".
 *
 * @property int $id
 * @property int $user_id
 * @property int $question_id
 * @property string $create_time
 */
class UserQuestionPass extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_question_pass';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'question_id'], 'required'],
            [['id', 'user_id', 'question_id'], 'integer'],
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
            'user_id' => 'User ID',
            'question_id' => 'Question ID',
            'create_time' => 'Create Time',
        ];
    }
	
	public static function setUserPass($question_id, $user_id)
    {
       $check = self::find()->where(['question_id' => $question_id, 'user_id' => $user_id])->one();
       if (empty($check)) {
           $user_question_pass 					= new UserQuestionPass();
           $user_question_pass->user_id 		= $user_id;
           $user_question_pass->question_id 	= $question_id;
           $user_question_pass->create_time 	= new Expression('NOW()');
           if (!$user_question_pass->save()) {
				return false;
           }
       }
       return true;
    }
}
