<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "hotel_menu_translations".
 *
 * @property integer $id
 * @property integer $menu_id
 * @property string $locale
 * @property string $name
 * @property string $description
 *
 * @property HotelMenu $menu
 */
class HotelMenuTranslations extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hotel_menu_translations';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['menu_id', 'locale', 'name', 'description'], 'required'],
            [['menu_id'], 'integer'],
            [['description'], 'string'],
            [['locale'], 'string', 'max' => 10],
            [['name'], 'string', 'max' => 127],
            [['menu_id'], 'exist', 'skipOnError' => true, 'targetClass' => HotelMenu::className(), 'targetAttribute' => ['menu_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('hotel', 'ID'),
            'menu_id' => Yii::t('hotel', 'Menu ID'),
            'locale' => Yii::t('hotel', 'Locale'),
            'name' => Yii::t('hotel', 'Name'),
            'description' => Yii::t('hotel', 'Description'),
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
     * @inheritdoc
     * @return \common\models\query\HotelMenuTranslationsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \common\models\query\HotelMenuTranslationsQuery(get_called_class());
    }
}
