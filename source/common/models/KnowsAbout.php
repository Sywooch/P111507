<?php

namespace common\models;

use Yii;
use yii\db\Expression;

/**
 * This is the model class for table "knows_about".
 *
 * @property int $id
 * @property int $user_id
 * @property int $topic_id
 */
class KnowsAbout extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'knows_about';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'topic_id'], 'required'],
            [['user_id', 'topic_id'], 'integer'],
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
        ];
    }

    public static function saveUserKnowTopic($topics, $user_id)
    {
        foreach ($topics as $id) {
            $check = self::find()->where(['topic_id' => $id, 'user_id' => $user_id])->one();
            if (empty($check)) {
                $knows_about = new KnowsAbout();
                $knows_about->user_id = $user_id;
                $knows_about->topic_id = $id;
                //$knows_about->create_time = new Expression('NOW()');
                if ($knows_about->save() === false) {
                    return false;
                }
            }
        }
        return true;
    }
}
