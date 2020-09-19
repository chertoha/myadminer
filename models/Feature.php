<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "feature".
 *
 * @property int $feature_id
 * @property string $feature_descriptor
 * @property string $feature_name
 * @property string|null $feature_description
 *
 * @property ItemFeature[] $itemFeatures
 */
class Feature extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'feature';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['feature_descriptor', 'feature_name'], 'required'],
            [['feature_descriptor'], 'string', 'max' => 50],
            [['feature_name', 'feature_description'], 'string', 'max' => 255],
            [['feature_descriptor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'feature_id' => 'Feature ID',
            'feature_descriptor' => 'Feature Descriptor',
            'feature_name' => 'Feature Name',
            'feature_description' => 'Feature Description',
        ];
    }

    /**
     * Gets query for [[ItemFeatures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemFeatures()
    {
        return $this->hasMany(ItemFeature::className(), ['feature_id' => 'feature_id']);
    }
}
