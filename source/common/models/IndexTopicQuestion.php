<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "index_topic_question".
 *
 * @property integer $id
 * @property integer $id_topic
 * @property integer $id_question
 * @property string $create_times
 */
class IndexTopicQuestion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'index_topic_question';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['id', 'id_topic', 'id_question'], 'integer'],
            [['create_times'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_topic' => 'Id Topic',
            'id_question' => 'Id Question',
            'create_times' => 'Create Times',
        ];
    }
}
