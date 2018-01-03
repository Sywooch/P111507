<?php
namespace frontend\models;

use common\models\BaseModel;
use common\models\User;
use common\models\AnswerFavorite;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use Yii;

/**
 * key form
 */
class AnswerModel extends BaseModel
{
    public $id; // Id of Answer.
    /**
     * @inheritdoc
     */
    public function rules()
    {
        // need add validate type and validate comment_parent_id
        return [
            ['id', 'filter', 'filter' => 'trim'],
            ['id', 'filter', 'filter' => 'strip_tags'],
            [['id'], 'required'],            
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'Id',
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

    // public function getCommentById($id)
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
}



