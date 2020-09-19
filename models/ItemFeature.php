<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_feature".
 *
 * @property int $item_feature_id
 * @property int $item_id
 * @property int $feature_val_id
 * @property string $item_feature_avail
 * @property int $item_feature_order
 *
 * @property Item $item
 * @property FeatureValue $featureVal
 */
class ItemFeature extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_feature';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['item_id', 'feature_val_id', 'item_feature_order'], 'required'],
            [['item_id', 'feature_val_id', 'item_feature_order'], 'integer'],
            [['item_feature_avail'], 'string'],
            [['item_id'], 'exist', 'skipOnError' => true, 'targetClass' => Item::className(), 'targetAttribute' => ['item_id' => 'item_id']],
            [['feature_val_id'], 'exist', 'skipOnError' => true, 'targetClass' => FeatureValue::className(), 'targetAttribute' => ['feature_val_id' => 'feature_val_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_feature_id' => 'Item Feature ID',
            'item_id' => 'Item ID',
            'feature_val_id' => 'Feature Val ID',
            'item_feature_avail' => 'Item Feature Avail',
            'item_feature_order' => 'Item Feature Order',
        ];
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['item_id' => 'item_id']);
    }

    /**
     * Gets query for [[FeatureVal]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeatureVal()
    {
        return $this->hasOne(FeatureValue::className(), ['feature_val_id' => 'feature_val_id']);
    }
}
