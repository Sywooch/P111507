<?php
namespace frontend\models;

use common\models\BaseModel;
use yii\db\Expression;
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
        $userExpression = new Expression("'user' AS type");
        $user = (new \yii\db\Query())
            ->select(["id", "username AS name", $userExpression])
            ->from('user')
            ->where(['like', 'username', $this->key])
            ;

        $topicExpression = new Expression("'topic' AS type");
        $topic = (new \yii\db\Query())
            ->select(["id", "title AS name", $topicExpression])
            ->from('topics')
            ->where(['like', 'title', $this->key])
            ;

        $questionExpression = new Expression("'question' AS type");
        $question = (new \yii\db\Query())
            ->select(["id", "title AS name", $questionExpression])
            ->from('questions')
            ->where(['like', 'title', $this->key])
            ;

        $list = $user->union($topic, $question)
            ->all();
        return ['list' => $list];
    }
    
}
