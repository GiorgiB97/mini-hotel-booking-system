<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel_room".
 *
 * @property integer $id
 * @property string $name
 * @property string $short_description
 * @property string $description
 * @property string $thumbnail
 * @property integer $price
 *
 * @property HotelBooking[] $hotelBookings
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
            [['description'], 'string'],
            [['price'], 'required'],
            [['price'], 'integer'],
            [['name', 'short_description', 'thumbnail'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('hotel', 'ID'),
            'name' => Yii::t('hotel', 'Name'),
            'short_description' => Yii::t('hotel', 'Short Description'),
            'description' => Yii::t('hotel', 'Description'),
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
     * @inheritdoc
     * @return \common\models\query\HotelRoomQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HotelRoomQuery(get_called_class());
    }
}
