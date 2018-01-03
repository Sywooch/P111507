<?php

namespace common\models;

use Yii;
use common\models\BaseModel;

/**
 * This is the model class for table "answer_favorites".
 *
 * @property int $id
 * @property int $answer_id
 * @property int $user_id
 * @property int $create_time
 * @property int $update_time
 */
class AnswerFavorite extends BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'answer_favorites';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['answer_id', 'user_id'], 'required'],
            [['answer_id', 'user_id', 'create_time', 'update_time'], 'integer'],
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
            'create_time' => Yii::t('app', 'Create Time'),
            'update_time' => Yii::t('app', 'Update Time'),
        ];
    }

    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getAnswer()
    {
        return $this->hasOne(Answers::className(), ['id' => 'answer_id']);
    }
}
