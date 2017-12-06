<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Topics;

/**
 * TopicsSearch represents the model behind the search form of `common\models\Topics`.
 */
class TopicsSearch extends Topics
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['title', 'quote', 'body', 'images', 'google_title', 'google_description', 'create_time', 'update_time', 'status'], 'safe'],
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
        $query = Topics::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'create_time' => $this->create_time,
            'update_time' => $this->update_time,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'quote', $this->quote])
            ->andFilterWhere(['like', 'body', $this->body])
            ->andFilterWhere(['like', 'images', $this->images])
            ->andFilterWhere(['like', 'google_title', $this->google_title])
            ->andFilterWhere(['like', 'google_description', $this->google_description])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
