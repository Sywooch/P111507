<?php

namespace common\models;

use Yii;
use common\models\Topics;

/**
 * This is the model class for table "credential_employment".
 *
 * @property int $id
 * @property int $user_id
 * @property string $position
 * @property string $company
 * @property string $start_year
 * @property string $end_year
 * @property string $i_current_work_here
 */
class CredentialEmployment extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'credential_employment';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id'], 'required'],
            [['id', 'user_id','company'], 'integer'],
            [['start_year', 'end_year'], 'safe'],
            [['position', 'company', 'i_current_work_here'], 'string', 'max' => 255],
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
            'position' => 'Position',
            'company' => 'Company',
            'start_year' => 'Start Year',
            'end_year' => 'End Year',
            'i_current_work_here' => 'I Current Work Here',
        ];
    }
    
    public function getTopics()
    {
        return $this->hasOne(Topics::className(), ['id' => 'company']);
    }

    /*
     * Get User same work
    */
    public function getUserSames()
    {
        return $this->hasMany(User::className(), ['id' => 'user_id']);
    }
}
