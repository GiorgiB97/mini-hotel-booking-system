<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel_menu".
 *
 * @property integer $id
 * @property integer $price
 *
 * @property HotelBooking[] $hotelBookings
 * @property HotelMenuTranslations[] $hotelMenuTranslations
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
            [['price'], 'required'],
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
            'price' => Yii::t('hotel', 'Price'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHotelBookings()
    {
        return $this->hasMany(HotelBooking::className(), ['menu_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHotelMenuTranslations()
    {
        return $this->hasMany(HotelMenuTranslations::className(), ['menu_id' => 'id']);
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
