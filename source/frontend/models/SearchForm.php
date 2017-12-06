<?php
namespace frontend\models;

use frontend\models\Link;
use yii\base\Model;
use Yii;

/**
 * Search form
 */
class SearchForm extends Model
{
    public $search;
    public $catalog;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['search', 'filter', 'filter' => 'trim'],
            ['search', 'filter', 'filter' => 'strip_tags'],
            ['search', 'required', 'message' => ''],            
            [['search'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'search' => 'Nhập từ khóa...',
            'catalog' => 'Thể loại',
        ];
    }
    
}
