<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "item".
 *
 * @property int $item_id
 * @property int $brand_id
 * @property string $item_name
 * @property string|null $item_pub_name
 * @property string|null $item_short_descr
 * @property string|null $item_full_descr
 * @property string|null $item_title
 * @property string|null $item_img
 *
 * @property Brand $brand
 * @property ItemFeature[] $itemFeatures
 */
class Item extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['brand_id', 'item_name'], 'required'],
            [['brand_id'], 'integer'],
            [['item_full_descr'], 'string'],
            [['item_name', 'item_pub_name', 'item_img'], 'string', 'max' => 255],
            [['item_short_descr'], 'string', 'max' => 150],
            [['item_title'], 'string', 'max' => 20],
            [['brand_id'], 'exist', 'skipOnError' => true, 'targetClass' => Brand::className(), 'targetAttribute' => ['brand_id' => 'brand_id']],
            
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'item_id' => 'Item ID',
            'brand_id' => 'Brand ID',
            'item_name' => 'Item Name',
            'item_pub_name' => 'Item Pub Name',
            'item_short_descr' => 'Item Short Descr',
            'item_full_descr' => 'Item Full Descr',
            'item_title' => 'Item Title',
            'item_img' => 'Item Img',
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

    /**
     * Gets query for [[ItemFeatures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItemFeatures()
    {
        return $this->hasMany(ItemFeature::className(), ['item_id' => 'item_id']);
    }
    
}
