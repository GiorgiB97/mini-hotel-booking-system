<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel_room".
 *
 * @property integer $id
 * @property string $thumbnail
 * @property integer $price
 *
 * @property HotelBooking[] $hotelBookings
 * @property HotelRoomTranslations[] $hotelRoomTranslations
 */
class HotelRoom extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotel_room';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['price'], 'required'],
            [['price'], 'integer'],
            [['thumbnail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('hotel', 'ID'),
            'thumbnail' => Yii::t('hotel', 'Thumbnail'),
            'price' => Yii::t('hotel', 'Price'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHotelBookings()
    {
        return $this->hasMany(HotelBooking::className(), ['room_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHotelRoomTranslations()
    {
        return $this->hasMany(HotelRoomTranslations::className(), ['room_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\HotelRoomQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HotelRoomQuery(get_called_class());
    }
}
