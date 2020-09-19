<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\FeatureValue;

/**
 * FeatureValueSearch represents the model behind the search form of `app\models\FeatureValue`.
 */
class FeatureValueSearch extends FeatureValue
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['feature_val_id', 'feature_id'], 'integer'],
            [['feature_val'], 'safe'],
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
        $query = FeatureValue::find()->with('feature');

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
            'feature_val_id' => $this->feature_val_id,
            'feature_id' => $this->feature_id,
        ]);

        $query->andFilterWhere(['like', 'feature_val', $this->feature_val]);

        return $dataProvider;
    }
}
