<?php

namespace common\models;

use Yii;
use yii\web\UploadedFile;

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
            [['price','thumbnail'], 'required'],
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





    public function saveWithTranslations($translations){
        $transaction = Yii::$app->db->beginTransaction();
        $check = true;
        if(!$this->save()){
            $transaction->rollBack();
            return false;
        }
        foreach ($translations as $key => $value){
            var_dump($key,$value);
            $translation = new HotelRoomTranslations();
            $translation->room_id = $this->id;
            $translation->name = $value['name'];
            $translation->description = $value['description'];
            $translation->locale = $key;
            if(!$translation->save()){
                var_dump('aa');
                $transaction->rollBack();
                $check = false;
                break;
            }
        }
        if($check){
            $transaction->commit();
            return true;
        }
        $transaction->rollBack();
        return false;

    }
    public function saveImage(){

        $file = UploadedFile::getInstance($this,'thumbnail');
        if(!isset($file)){
            return true;
        }
        $path =  Yii::getAlias('@storage').'/web/source/room';
        if(!is_dir($path)){
            mkdir($path);
        }
        $name = Yii::$app->security->generateRandomString(16).'.'.$file->getExtension();
        $path = $path.'/'.$name;
        $this->thumbnail = $name;
        if($file->saveAs($path)){
            return true;
        }
        return false;
    }


}
