<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/14/17
 * Time: 2:32 AM
 */

namespace frontend\controllers;


use common\models\HotelRoom;
use yii\web\Controller;

class RoomsController extends Controller
{
    public function actionIndex()
    {
        $base_rooms = HotelRoom::find()->all();
        $locale = \Yii::$app->language;
        $rooms = [];
        foreach ($base_rooms as $room) {
            $rooms[] = [
                'room' => $room,
                'translations' => $room->getHotelRoomTranslations()->where(['locale' => $locale])->one()
            ];
        }
        return $this->render('index', [
            'rooms' => $rooms
        ]);
    }

    public function actionView($id)
    {
        $locale = \Yii::$app->language;
        $room = HotelRoom::find()->byId($id)->one();
        $translations = $room->getHotelRoomTranslations()->andWhere(['locale' => $locale]);

        return $this->render('view', [
            'room' => $room,
            'translations' => $translations
        ]);
    }
}