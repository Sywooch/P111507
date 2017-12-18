<?php
namespace frontend\models;

use common\models\BaseModel;
use Yii;

/**
 * key form
 */
class SearchModel extends BaseModel
{
    public $key;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['key', 'filter', 'filter' => 'trim'],
            ['key', 'filter', 'filter' => 'strip_tags'],
            ['key', 'required', 'message' => ''],            
            [['key'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'key' => 'Nhập từ khóa...',
        ];
    }

    public function search() {
        return ['result' => 'hello world'];
    }
    
}
