<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "logs".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $log_message
 * @property string $create_time
 */
class Logs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'logs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'user_id'], 'integer'],
            [['log_message'], 'string'],
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
            'log_message' => 'Log Message',
            'create_time' => 'Create Time',
        ];
    }
}
