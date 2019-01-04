<?php

namespace kouosl\iletisimformu\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\iletisimformu\models\Data;

/**
 * DataSearch represents the model behind the search form of `vendor\kouosl\iletisimformu\models\Data`.
 */
class DataSearch extends Data
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'birthday', 'mail', 'preference', 'departmant', 'subject', 'title', 'message'], 'safe'],
            [['tel'], 'integer'],
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
        $query = Data::find();

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
            'tel' => $this->tel,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'birthday', $this->birthday])
            ->andFilterWhere(['like', 'mail', $this->mail])
            ->andFilterWhere(['like', 'preference', $this->preference])
            ->andFilterWhere(['like', 'departmant', $this->departmant])
            ->andFilterWhere(['like', 'subject', $this->subject])
            ->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'message', $this->message]);

        return $dataProvider;
    }
}
