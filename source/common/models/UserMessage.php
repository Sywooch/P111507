<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_message".
 *
 * @property integer $id
 * @property integer $message_id
 * @property integer $user_id
 * @property integer $status
 */
class UserMessage extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_message';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['message_id', 'user_id'], 'required'],
            [['message_id', 'user_id', 'status'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'message_id' => 'Message ID',
            'user_id' => 'User ID',
            'status' => 'Status',
        ];
    }
}
