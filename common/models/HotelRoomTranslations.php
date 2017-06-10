<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel_room_translations".
 *
 * @property integer $id
 * @property integer $room_id
 * @property string $locale
 * @property string $name
 * @property string $short_description
 * @property string $description
 *
 * @property HotelRoom $room
 */
class HotelRoomTranslations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotel_room_translations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'locale', 'name', 'description'], 'required'],
            [['room_id'], 'integer'],
            [['description'], 'string'],
            [['locale'], 'string', 'max' => 10],
            [['name', 'short_description'], 'string', 'max' => 255],
            [['room_id'], 'exist', 'skipOnError' => true, 'targetClass' => HotelRoom::className(), 'targetAttribute' => ['room_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('hotel', 'ID'),
            'room_id' => Yii::t('hotel', 'Room ID'),
            'locale' => Yii::t('hotel', 'Locale'),
            'name' => Yii::t('hotel', 'Name'),
            'short_description' => Yii::t('hotel', 'Short Description'),
            'description' => Yii::t('hotel', 'Description'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRoom()
    {
        return $this->hasOne(HotelRoom::className(), ['id' => 'room_id']);
    }

    /**
     * @inheritdoc
     * @return \common\models\query\HotelRoomTranslationsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HotelRoomTranslationsQuery(get_called_class());
    }
}
