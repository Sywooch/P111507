<?php
namespace frontend\models;

use common\models\BaseModel;
use common\models\User;
use common\models\Questions;
use common\models\Comments;
use yii\db\Expression;
use Yii;

/**
 * key form
 */
class CommentModel extends BaseModel
{
    public $value;// content of comment.
    public $id; // Id of model.
    public $type;// Question or Answer.
    public $parent_comment_id;// Question or Answer.
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['value', 'filter', 'filter' => 'trim'],
            ['value', 'filter', 'filter' => 'strip_tags'],
            [['id', 'value'], 'required'],            
            [['parent_comment_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'value' => 'Viết Bình Luận Của Bạn...',
        ];
    }

    /*
     * Create comment
     * Return object
    */
    public function craeteComment() {
        $comment = new Comments;
        $comment->user_id = cuser()->id;
        $comment->post_id = $this->id;
        $comment->comment_type = $this->type;
        $comment->comment = $this->value;
        $comment->comment_parent_id = $this->parent_comment_id;
        $comment->save();
        return $comment;
    }
}



