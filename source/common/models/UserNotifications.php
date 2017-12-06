<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_notifications".
 *
 * @property string $id
 * @property string $user_id
 * @property string $message
 * @property string $extra
 * @property string $create_time
 */
class UserNotifications extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_notifications';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['message'], 'string'],
            [['create_time'], 'safe'],
            [['extra'], 'string', 'max' => 2000],
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
            'message' => 'Message',
            'extra' => 'Extra',
            'create_time' => 'Create Time',
        ];
    }
}
