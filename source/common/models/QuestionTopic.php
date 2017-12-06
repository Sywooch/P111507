<?php

namespace common\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "question_topic".
 *
 * @property int $id
 * @property int $topic_id
 * @property int $question_id
 */
class QuestionTopic extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'question_topic';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'topic_id', 'question_id'], 'integer'],
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
            'question_id' => 'Question ID',
            'create_time'   => 'create_time',
            'update_time'   => 'update_time',
        ];
    }
    
    public function addQuestionTopic($question_id, $topic_id)
    {
        $model = new QuestionTopic();
        $model->question_id     = $question_id;
        $model->topic_id        = $topic_id;
        $model->create_time     = new Expression('NOW()');
        $model->save();
    }
}
