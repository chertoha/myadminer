<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Feature;

/**
 * FeatureSearch represents the model behind the search form of `app\models\Feature`.
 */
class FeatureSearch extends Feature
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['feature_id'], 'integer'],
            [['feature_descriptor', 'feature_name', 'feature_description'], 'safe'],
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
        $query = Feature::find();

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
            'feature_id' => $this->feature_id,
        ]);

        $query->andFilterWhere(['like', 'feature_descriptor', $this->feature_descriptor])
            ->andFilterWhere(['like', 'feature_name', $this->feature_name])
            ->andFilterWhere(['like', 'feature_description', $this->feature_description]);

        return $dataProvider;
    }
}
