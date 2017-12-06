<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "credential_education".
 *
 * @property int $id
 * @property int $user_id
 * @property int $school
 * @property string $concentration
 * @property string $secondary_concentration
 * @property string $degree_type
 * @property string $graduation_year
 */
class CredentialEducation extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'credential_education';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['id', 'user_id', 'school'], 'integer'],
            [['graduation_year'], 'safe'],
            [['concentration', 'secondary_concentration', 'degree_type'], 'string', 'max' => 255],
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
            'school' => 'School',
            'concentration' => 'Concentration',
            'secondary_concentration' => 'Secondary Concentration',
            'degree_type' => 'Degree Type',
            'graduation_year' => 'Graduation Year',
        ];
    }
	
	public function getTopicsschool()
	{
		return $this->hasOne(Topics::className(), ['id' => 'school']);
	}
	public function getTopicsconcentration()
	{
		return $this->hasOne(Topics::className(), ['id' => 'concentration']);
	}
	public function getTopicsecondaryconcentration()
	{
		return $this->hasOne(Topics::className(), ['id' => 'secondary_concentration']);
	}
}
