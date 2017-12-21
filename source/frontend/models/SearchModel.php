<?php
namespace frontend\models;

use common\models\BaseModel;
use common\models\User;
use common\models\Topics;
use common\models\Questions;
use yii\db\Expression;
use Yii;

/**
 * key form
 */
class SearchModel extends BaseModel
{
    public $key;
    public $list = [];
    public $limit = 5;
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['key', 'filter', 'filter' => 'trim'],
            ['key', 'filter', 'filter' => 'strip_tags'],
            // ['key', 'required', 'message' => ''],            
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
        $userExpression = new Expression("'user' AS type");
        $user = (new \yii\db\Query())
            ->select(["id", "username AS name", $userExpression, 'avatar as image'])
            ->from('user')
            ->where(['like', 'username', $this->key])
            ;

        $topicExpression = new Expression("'topic' AS type");
        $topic = (new \yii\db\Query())
            ->select(["id", "title AS name", $topicExpression, 'images as image'])
            ->from('topics')
            ->where(['like', 'title', $this->key])
            ;

        $questionExpression = new Expression("'question' AS type");
        $question = (new \yii\db\Query())
            ->select(["questions.id", "title AS name", $questionExpression, 'user.avatar as image'])
            ->from('questions')
            ->innerJoin('user', 'user.id = questions.user_id')
            ->where(['like', 'title', $this->key])
            ;
        // echo $question->createCommand()->getRawSql();die;
        $this->list = $user
            ->union($topic)
            ->union($question)
            ->limit($this->limit);
        $this->getImage();
        return ['list' => $this->list];
    }
    
    public function getImage() {
        for ($i = 0, $count = count($this->list); $i < $count; $i++) { 
            if ($this->list[$i]['type'] === 'user') {
                $this->list[$i]['image'] = User::getFullPathAvatar($this->list[$i]['image']);
            } elseif ($this->list[$i]['type'] === 'topic') {
                $this->list[$i]['image'] = Topics::getFullPathAvatar($this->list[$i]['image']);
            } elseif ($this->list[$i]['type'] === 'question') {
                $this->list[$i]['image'] = User::getFullPathAvatar($this->list[$i]['image']);
            } 
        }
    }
}
