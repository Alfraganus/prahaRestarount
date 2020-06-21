<?php

namespace app\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\foodMenu;

/**
 * foodMenuSearch represents the model behind the search form of `app\models\foodMenu`.
 */
class foodMenuSearch extends foodMenu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['menu_title_en', 'menu_title_cz', 'price', 'show_priority', 'active'], 'safe'],
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
        $query = foodMenu::find();

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

        $query->andFilterWhere(['like', 'menu_title_en', $this->menu_title_en])
            ->andFilterWhere(['like', 'menu_title_cz', $this->menu_title_cz])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'show_priority', $this->show_priority])
            ->andFilterWhere(['like', 'status', $this->status]);

        return $dataProvider;
    }
}
