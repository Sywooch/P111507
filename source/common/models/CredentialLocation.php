<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "credential_location".
 *
 * @property int $id
 * @property int $user_id
 * @property string $location
 * @property string $start_year
 * @property string $end_year
 * @property int $i_current_live_here
 */
class CredentialLocation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'credential_location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'location'], 'required'],
            [['id', 'user_id', 'i_current_live_here','location'], 'integer'],
            [['start_year', 'end_year'], 'safe'],
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
            'location' => 'Location',
            'start_year' => 'Start Year',
            'end_year' => 'End Year',
            'i_current_live_here' => 'I Current Live Here',
        ];
    }
	
	public function getTopics()
	{
		return $this->hasOne(Topics::className(), ['id' => 'location']);
	}
}
