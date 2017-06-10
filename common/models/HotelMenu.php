<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel_menu".
 *
 * @property integer $id
 * @property string $description
 * @property integer $price
 */
class HotelMenu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotel_menu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['description', 'price'], 'required'],
            [['description'], 'string'],
            [['price'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('hotel', 'ID'),
            'description' => Yii::t('hotel', 'Description'),
            'price' => Yii::t('hotel', 'Price'),
        ];
    }

    /**
     * @inheritdoc
     * @return \common\models\query\HotelMenuQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HotelMenuQuery(get_called_class());
    }
}
