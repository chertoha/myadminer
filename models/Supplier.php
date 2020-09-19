<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "supplier".
 *
 * @property int $supplier_id
 * @property string $name
 * @property string $descriptor
 */
class Supplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'descriptor'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['descriptor'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'supplier_id' => 'Supplier ID',
            'name' => 'Name',
            'descriptor' => 'Descriptor',
        ];
    }
}
