<?php
namespace frontend\models;

use common\models\BaseModel;
use common\models\User;
use common\models\Comments;
use common\models\CommentFollow;
use yii\data\ActiveDataProvider;
use yii\db\Expression;
use Yii;

/**
 * key form
 */
class CommentFollowModel extends BaseModel
{
    public $id; // Id of Comment.
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
            ['id', 'exist', 'targetClass' => Comments::className(), 'targetAttribute' => 'id'],  
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'value' => 'Id',
        ];
    }

    /*
     * Like or Unlike a comment
     * Return object
    */
    public function follow()
    {
        $comment = CommentFollow::find()->where([
            'comment_id' => $this->id,
            'user_id' => cuser()->id
        ])->one();
        if (!empty($comment)) {
            return $comment->delete();
        } else {
            $model = new CommentFollow();
            $model->user_id = cuser()->id;
            $model->comment_id = $this->id;
            $model->save();
            return $model;
        }
    }
}



