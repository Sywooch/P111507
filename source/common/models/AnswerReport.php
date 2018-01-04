<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "answer_reports".
 *
 * @property int $id
 * @property int $answer_id
 * @property int $user_id
 * @property int $reason_id
 * @property int $create_time
 * @property int $update_time
 */
class AnswerReport extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answer_reports';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['answer_id', 'user_id', 'reason_id'], 'required'],
            [['answer_id', 'user_id', 'reason_id', 'create_time', 'update_time'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'answer_id' => Yii::t('app', 'Answer ID'),
            'user_id' => Yii::t('app', 'User ID'),
            'reason_id' => Yii::t('app', 'Reason ID'),
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }
}
