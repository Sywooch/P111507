<?php
namespace frontend\models;

use common\models\BaseModel;
use common\models\User;
use common\models\Questions;
use common\models\Comments;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use Yii;

/**
 * key form
 */
class QuestionModel extends BaseModel
{
    public $slug;// Question or Answer.
    /**
     * @inheritdoc
     */
    public function rules()
    {
        // need add validate type and validate comment_parent_id
        return [
            ['slug', 'filter', 'filter' => 'trim'],
            ['slug', 'filter', 'filter' => 'strip_tags'],
            [['slug'], 'required'],            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'slug' => 'Viết Bình Luận Của Bạn...',
        ];
    }

    public function getQuestionBySlug() 
    {
        $model = Questions::find()->where(['slug' => $this->slug])->one();
        return $model;
    }
}



