<?php

namespace common\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "user_topic_follow".
 *
 * @property integer $id
 * @property integer $topic_id
 * @property integer $user_id
 * @property integer $status
 * @property string $create_time
 */
class UserTopicFollow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_topic_follow';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'user_id', 'status'], 'integer'],
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
            'topic_id' => 'Topic ID',
            'user_id' => 'User ID',
            'status' => 'Status',
            'create_time' => 'Create Time',
        ];
    }

    public static function setUserFollow($topic_ids, $user_id)
    {
        foreach ($topic_ids as $id) {
            $check = self::find()->where(['topic_id' => $id, 'user_id' => $user_id])->one();
            if (empty($check)) {
                $user_topic_follow = new UserTopicFollow();
                $user_topic_follow->user_id = $user_id;
                $user_topic_follow->topic_id = $id;
                $user_topic_follow->create_time = new Expression('NOW()');
                if (!$user_topic_follow->save()) {
                    return false;
                }
            }
        }
        return true;
    }

    public function getTopics()
    {
        return $this->hasOne(Topics::className(), ['id' => 'topic_id']);
    }
}
