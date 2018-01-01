<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "topics_group".
 *
 * @property int $id
 * @property string $title
 * @property string $create_time
 */
class TopicsGroup extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'topics_group';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['create_time','update_time'], 'safe'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'create_time' => 'Create Time',
			'update_time' => 'Update time'
        ];
    }
}
