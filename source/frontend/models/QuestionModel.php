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
    public $unanswered;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        // need add validate type and validate comment_parent_id
        return [
            ['unanswered', 'boolean'],
            ['slug', 'filter', 'filter' => 'trim'],
            ['slug', 'filter', 'filter' => 'strip_tags'],
            [['slug'], 'required'],
            ['unanswered', 'safe']            
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
        $query = Questions::find()
            ->with([
                'answer',
                'comments'
            ])
            ->where(['slug' => $this->slug]);
        if ($this->unanswered) {
            $query->leftJoin('answers', 'questions.id = answers.question_id')->where(['answers.id' => null]);
        }
        $model = $query->one();
        return $model;
    }
}



