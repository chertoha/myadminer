<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feature_value".
 *
 * @property int $feature_val_id
 * @property int $feature_id
 * @property string $feature_val
 *
 * @property Feature $feature
 * @property ItemFeature[] $itemFeatures
 */
class FeatureValue extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feature_value';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['feature_id', 'feature_val'], 'required'],
            [['feature_id'], 'integer'],
            [['feature_val'], 'string', 'max' => 255],
            [['feature_id'], 'exist', 'skipOnError' => true, 'targetClass' => Feature::className(), 'targetAttribute' => ['feature_id' => 'feature_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'feature_val_id' => 'Feature Val ID',
            'feature_id' => 'Feature ID',
            'feature_val' => 'Feature Val',
        ];
    }

    /**
     * Gets query for [[Feature]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFeature()
    {
        return $this->hasOne(Feature::className(), ['feature_id' => 'feature_id']);
    }

    /**
     * Gets query for [[ItemFeatures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemFeatures()
    {
        return $this->hasMany(ItemFeature::className(), ['feature_val_id' => 'feature_val_id']);
    }
}
