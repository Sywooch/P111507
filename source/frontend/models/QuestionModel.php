<?php
namespace frontend\models;

use common\models\BaseModel;
use common\models\User;
use common\models\Questions;
use common\models\Answers;
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
    public $text;
    public $id;
    /**
     * @inheritdoc
     */
    public $rules = [
        ['unanswered', 'boolean'],
        ['slug', 'filter', 'filter' => 'trim'],
        ['slug', 'filter', 'filter' => 'strip_tags'],
        [['slug'], 'required'],
        ['unanswered', 'safe']         
    ];

    public function rules()
    {
        return $this->rules;
    }

    public function setRulesCreateAnswer()
    {
        $this->rules = [
            // TODO UDPATE ID ANSWER EXITS IN TALBE ANSWER
            [['id'], 'filter', 'filter' => 'trim'],
            [['id'], 'filter', 'filter' => 'strip_tags'],
            [['id', 'text'], 'required'],
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

    private function getQuestionById() 
    {
        $model = Questions::findOne($this->id);
        if(empty($model)) {
            throw new \Exception("Không tìm thấy câu hỏi.", 1);
        }
        return $model;
    }

    public function createAnswer() 
    {
        $question = $this->getQuestionById();
        $model = new Answers;
        $model->question_id = $this->id;
        $model->answers_text = $this->text;
        $model->user_id = cuser()->id;
        $model->status = Answers::DEFAULT_STATUS;
        $model->is_anonymous = Answers::NOT_ANONYMOUS;
        if ($model->save()) {
            return $model;
        }
        throw new \Exception("Không thể lưu câu trả lời.", 1);
    }
}



