<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel_booking".
 *
 * @property integer $id
 * @property integer $room_id
 * @property integer $menu_id
 * @property string $name
 * @property string $surname
 * @property string $pid
 * @property string $country
 * @property string $city
 * @property string $mobile
 * @property string $email
 * @property integer $start_date
 * @property integer $end_date
 * @property integer $price
 * @property integer $created_at
 * @property integer $updated_at
 * @property integer $deleted_at
 * @property integer $is_confirmed
 *
 * @property HotelMenu $menu
 * @property HotelRoom $room
 */
class HotelBooking extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotel_booking';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['room_id', 'name', 'surname', 'pid', 'country', 'city', 'mobile', 'start_date', 'end_date', 'price'], 'required'],
            [['room_id', 'menu_id', 'price', 'created_at', 'updated_at', 'deleted_at','is_confirmed'], 'integer'],
            [['name'], 'string', 'max' => 63],
            [['surname'], 'string', 'max' => 127],
            [['pid'], 'string', 'max' => 32],
            [['country', 'city'], 'string', 'max' => 123],
            [['mobile', 'email'], 'string', 'max' => 31],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => HotelMenu::className(), 'targetAttribute' => ['menu_id' => 'id']],
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
            'menu_id' => Yii::t('hotel', 'Menu ID'),
            'name' => Yii::t('hotel', 'Name'),
            'surname' => Yii::t('hotel', 'Surname'),
            'pid' => Yii::t('hotel', 'Personal ID'),
            'country' => Yii::t('hotel', 'Country'),
            'city' => Yii::t('hotel', 'City'),
            'mobile' => Yii::t('hotel', 'Mobile'),
            'email' => Yii::t('hotel', 'Email'),
            'start_date' => Yii::t('hotel', 'Start Date'),
            'end_date' => Yii::t('hotel', 'End Date'),
            'price' => Yii::t('hotel', 'Price per day'),
            'created_at' => Yii::t('hotel', 'Created At'),
            'updated_at' => Yii::t('hotel', 'Updated At'),
            'deleted_at' => Yii::t('hotel', 'Deleted At'),
            'is_confirmed' => Yii::t('hotel', 'Confirmed'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMenu()
    {
        return $this->hasOne(HotelMenu::className(), ['id' => 'menu_id']);
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
     * @return \common\models\query\HotelBookingQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HotelBookingQuery(get_called_class());
    }

    /**
     * @author Saiat Kalbiev <kalbievich11@gmail.com>
     * @param $book []
     */
    public function customSave($book){
        $this->room_id = $book['room_id'];
        $this->menu_id = $book['menu_id'];
        $this->name = $book['name'];
        $this->surname = $book['surname'];
        $this->pid = $book['pid'];
        $this->country = $book['country'];
        $this->city = $book['city'];
        $this->mobile = $book['mobile'];
        $this->email = $book['email'];
        $this->start_date = strtotime($book['start_date']);
        $this->end_date = strtotime($book['end_date']);
        $this->price = $book['price'];
        $this->created_at = time();
        if($this->save()){
            return true;
        }
        return false;
    }

    public function confirm(){
        $this->is_confirmed = 1;
        if($this->save()){
            return true;
        }
        return false;
    }
}
