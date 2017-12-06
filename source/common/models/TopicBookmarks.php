<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "topic_bookmarks".
 *
 * @property int $id
 * @property int $topic_id
 * @property int $user_id
 * @property int $created_time
 */
class TopicBookmarks extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topic_bookmarks';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['topic_id', 'user_id', 'created_time'], 'required'],
            [['topic_id', 'user_id', 'created_time'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'topic_id' => Yii::t('app', 'Topic ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'created_time' => Yii::t('app', 'Created Time'),
        ];
    }

    public function getTopics()
    {
        return $this->hasOne(Topics::className(), ['id' => 'topic_id']);
    }
}
