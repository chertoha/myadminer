<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\ItemFeature;

/**
 * ItemFeatureSearch represents the model behind the search form of `app\models\ItemFeature`.
 */
class ItemFeatureSearch extends ItemFeature
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_feature_id', 'item_id', 'feature_val_id', 'item_feature_order'], 'integer'],
            [['item_feature_avail'], 'safe'],
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
        $query = ItemFeature::find();

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
            'item_feature_id' => $this->item_feature_id,
            'item_id' => $this->item_id,
            'feature_val_id' => $this->feature_val_id,
            'item_feature_order' => $this->item_feature_order,
        ]);

        $query->andFilterWhere(['like', 'item_feature_avail', $this->item_feature_avail]);

        return $dataProvider;
    }
}
