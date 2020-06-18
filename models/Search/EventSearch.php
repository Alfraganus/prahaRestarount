<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\event;

/**
 * EventSearch represents the model behind the search form of `app\models\event`.
 */
class EventSearch extends event
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['event_title_en', 'event_title_cz', 'event_description_en', 'event_description_cz', 'event_photo'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = event::find();

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
        ]);

        $query->andFilterWhere(['like', 'event_title_en', $this->event_title_en])
            ->andFilterWhere(['like', 'event_title_cz', $this->event_title_cz])
            ->andFilterWhere(['like', 'event_description_en', $this->event_description_en])
            ->andFilterWhere(['like', 'event_description_cz', $this->event_description_cz])
            ->andFilterWhere(['like', 'event_photo', $this->event_photo]);

        return $dataProvider;
    }
}
