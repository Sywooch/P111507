<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "creadential_other".
 *
 * @property int $id
 * @property int $user_id
 * @property int $topic_id
 * @property string $describe_an_experience
 */
class CreadentialOther extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'creadential_other';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'user_id', 'topic_id'], 'required'],
            [['id', 'user_id', 'topic_id'], 'integer'],
            [['describe_an_experience'], 'string', 'max' => 255],
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
            'topic_id' => 'Topic ID',
            'describe_an_experience' => 'Describe An Experience',
        ];
    }
}
