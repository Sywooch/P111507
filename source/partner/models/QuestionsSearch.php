<?php

namespace partner\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Questions;

/**
 * QuestionsSearch represents the model behind the search form about `common\models\Questions`.
 */
class QuestionsSearch extends Questions
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'follow_total', 'comment_total', 'upvote_total', 'views', 'status', 'is_anonymous'], 'integer'],
            [['title', 'body', 'create_time', 'update_time', 'user_id'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Questions::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        $query->joinWith(['user']);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'user_id' 		=> Yii::$app->user->identity->id,
            'is_anonymous' => $this->is_anonymous,
            'follow_total' => $this->follow_total,
            'comment_total' => $this->comment_total,
            'upvote_total' => $this->upvote_total,
            'views' => $this->views,
            'status' => $this->status,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'user.email', $this->user_id])
            ->andFilterWhere(['like', 'body', $this->body]);

        return $dataProvider;
    }
}
