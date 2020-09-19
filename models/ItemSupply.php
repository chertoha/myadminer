<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item_supply".
 *
 * @property int $item_supply_id
 * @property string $name
 * @property int $brand_id
 *
 * @property Brand $brand
 */
class ItemSupply extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item_supply';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'brand_id'], 'required'],
            [['brand_id'], 'integer'],
            [['name'], 'string', 'max' => 255],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'brand_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_supply_id' => 'Item Supply ID',
            'name' => 'Name',
            'brand_id' => 'Brand ID',
        ];
    }

    /**
     * Gets query for [[Brand]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBrand()
    {
        return $this->hasOne(Brand::className(), ['brand_id' => 'brand_id']);
    }
}
