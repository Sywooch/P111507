<?php
namespace frontend\models;

use common\models\BaseModel;
use common\models\User;
use common\models\AnswerFavorite;
use common\models\AnswerReport;
use common\models\AnswerFollow;
use common\models\Answers;
use common\models\Questions;
use yii\data\ActiveDataProvider;
use yii\data\Sort;
use yii\db\Expression;
use yii\helpers\StringHelper;
use Yii;

/**
 * key form
 */
class AnswerModel extends BaseModel
{
    public $id; // Id of Answer.
    public $reason_id;
    public $username; // User creator
    public $slug; // Question Slug

    /**
     * @inheritdoc
     */
    public $rules = [
        ['id', 'filter', 'filter' => 'trim'],
        ['id', 'filter', 'filter' => 'strip_tags'],
        [['id'], 'required'],
    ];
    public function rules()
    {
        // need add validate type and validate comment_parent_id
        return $this->rules;
    }

    public function setRulesReport()
    {
        $this->rules = [
            // TODO UDPATE ID ANSWER EXITS IN TALBE ANSWER
            [['id', 'reason_id'], 'filter', 'filter' => 'trim'],
            [['id', 'reason_id'], 'filter', 'filter' => 'strip_tags'],
            [['id', 'reason_id'], 'required'],
        ];
    }

    public function setRulesFollow()
    {
        $this->rules = [
            // TODO UDPATE ID ANSWER EXITS IN TALBE ANSWER
            ['id', 'filter', 'filter' => 'trim'],
            ['id', 'filter', 'filter' => 'strip_tags'],
            [['id'], 'required'],
        ];
    }

    public function setRuleGetAnswerByQuestionAndCreator() {
        $this->rules = [
         [['slug', 'username'], 'required']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
            'reason_id' => 'Lý do'
        ];
    }

    /*
     * Create comment
     * Return object
    */
    // public function craeteAnswer()
    // {
    //     $comment = new Comments;
    //     $comment->user_id = cuser()->id;
    //     $comment->post_id = $this->id;
    //     $comment->comment_type = $this->type;
    //     $comment->comment = $this->value;
    //     $comment->comment_parent_id = $this->comment_parent_id;
    //     $comment->save();
    //     return $comment;
    // }

    // public function getComment() 
    // {
    //     $model = Comments::find()
    //         ->with(['user', 'childs', 'childs.user'])
    //         ->where(['post_id' => $this->id, 'comment_type' => $this->type, 'comment_parent_id' => null])
    //         ->orderBy(['create_time' => SORT_DESC])
    //         // ->asArray()
    //         ->all()
    //         ;
    //     // dd($model->createCommand()->sql);
    //     return $model;
    // }

    // public function getAnswerById($id)
    // {
    //     return Comments::find()->where(['id' => $id])->one();
    // }

    public function favorite()
    {
        $model = AnswerFavorite::find()->where([
            'answer_id' => $this->id,
            'user_id' => cuser()->id
        ])->one();
        if (!empty($model)) {
            return $model->delete();
        } else {
            $model = new AnswerFavorite();
            $model->user_id = cuser()->id;
            $model->answer_id = $this->id;
            $model->save();
            return $model;
        }
    }

    public function report()
    {
        $model = AnswerReport::find()->where([
            'answer_id' => $this->id,
            'user_id' => cuser()->id,
            'reason_id' => $this->reason_id
        ])->one();
        if (!empty($model)) {
            return $model;
        } else {
            $model = new AnswerReport();
            $model->user_id = cuser()->id;
            $model->answer_id = $this->id;
            $model->reason_id = $this->reason_id;
            $model->save();
            return $model;
        }
    }

    public function follow()
    {
        $model = AnswerFollow::find()->where([
            'answer_id' => $this->id,
            'user_id' => cuser()->id
        ])->one();
        if (!empty($model)) {
            return $model->delete();
        } else {
            $model = new AnswerFollow();
            $model->user_id = cuser()->id;
            $model->answer_id = $this->id;
            $model->save();
            return $model;
        }
    }

    public static function getDataProviderAnswerByQuetionId($questionId)
    {
        $query = Answers::find()->where(['question_id' => $questionId]);
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'pagination' => [
                'pageSize' => 5,
            ]
            ,
            'sort'=> [
                'defaultOrder' => ['create_time' => SORT_DESC]
            ]
        ]);
        return $dataProvider;
    }

    public function getQuestionAnswerByUsernameSlug() {
        $answerId = $this->getAnswerId();
        $model = Questions::find()->with([
            'answer' => function($q) use ($answerId) {
                $q->where(['id' => $answerId]);
            }
        ])
        ->where(['questions.slug' => $this->slug])
        ->one()
        ;
        // dd($model->answers);
        if (empty($model->answer)) {
            throw new \Exception("Không tìm thấy câu trả lời.", 1);
        }
        return $model;
    }

    private function getAnswerId()
    {
        $pos = strrpos($this->username, '.');
        $answerId = $pos === false ? $this->username : substr($this->username, $pos + 1);
        return $answerId;
    }

}



