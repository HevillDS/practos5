<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "iphone".
 *
 * @property int $iphone_id
 * @property string $model
 * @property string $description
 * @property int $rating
 * @property int $shop_id
 *
 * @property Shop $shop
 */
class Iphone extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'iphone';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['description'], 'string'],
            [['rating', 'shop_id'], 'integer'],
            [['model'], 'string', 'max' => 255],
            [['shop_id'], 'exist', 'skipOnError' => true, 'targetClass' => Shop::className(), 'targetAttribute' => ['shop_id' => 'shop_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'iphone_id' => 'Iphone ID',
            'model' => 'Model',
            'description' => 'Description',
            'rating' => 'Rating',
            'shop_id' => 'Shop ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getShop()
    {
        return $this->hasOne(Shop::className(), ['shop_id' => 'shop_id']);
    }
}
