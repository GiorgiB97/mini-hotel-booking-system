<?php

namespace frontend\controllers;

use common\models\HotelMenu;
use common\models\HotelRoom;
use Yii;
use common\models\HotelBooking;
use frontend\models\search\HotelBookingSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * HotelBookingController implements the CRUD actions for HotelBooking model.
 */
class HotelBookingController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all HotelBooking models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new HotelBookingSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single HotelBooking model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new HotelBooking model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new HotelBooking();
        $freeModel = new HotelBooking();

        $locale = Yii::$app->language;

        $base_rooms = HotelRoom::find()->all();
        $base_menus = HotelMenu::find()->all();

        $rooms = [];
        $menus = [];
        foreach ($base_rooms as $room) {
            $rooms[] = [
                'room' => $room,
                'translations' => $room->getHotelRoomTranslations()->where(['locale' => $locale])->one()
            ];
        }
        foreach ($base_menus as $menu) {
            $menus[] = [
                'menu' => $menu,
                'translations' => $menu->getHotelMenuTranslations()->where(['locale' => $locale])->one()
            ];
        }

        $request = Yii::$app->request->post();

        if (isset($request['HotelBooking'])) {
            $book = $request['HotelBooking'];
            $start_date = strtotime($book['start_date']);
            $end_date = strtotime($book['end_date']);

            $hotelBooked = HotelBooking::find()->where([
                'room_id' => 10
            ])->andWhere('(start_date <= :startDate and end_date >= :startDate) or (start_date <= :endDate and end_date >= :endDate)')
                ->addParams([
                    ':startDate' => 1496707200,
                    ':endDate' => 1497571200
                ])->one();

            if ($hotelBooked) {
                return $this->render('create', [
                    'model' => $freeModel,
                    'rooms' => $rooms,
                    'menus' => $menus,
                    'success' => false,
                    'booked_start_date' => date('F j Y', $hotelBooked->start_date),
                    'booked_end_date' => date('F j Y', $hotelBooked->end_date),
                ]);
            } else {
                if ($model->customSave($book)) {
                    return $this->render('create', [
                        'model' => $freeModel,
                        'rooms' => $rooms,
                        'menus' => $menus,
                        'success' => true
                    ]);
                } else {
                    return $this->render('create', [
                        'model' => $freeModel,
                        'rooms' => $rooms,
                        'menus' => $menus,
                        'success' => false
                    ]);
                }
            }
        }
        return $this->render('create', [
            'model' => $model,
            'rooms' => $rooms,
            'menus' => $menus
        ]);

    }


    public function actionCountPrice()
    {
        $request = Yii::$app->request->post();
        $menu_id = $request['menu_id'];
        $room_id = $request['room_id'];

        $sum_price = null;
        $room = HotelRoom::find()->byId($room_id)->one();
        $menu = HotelMenu::find()->byId($menu_id)->one();
        if ($room && $menu) {
            $sum_price = $room->price + $menu->price;
            return $sum_price;
        }
        return $sum_price;
    }

    /**
     * Updates an existing HotelBooking model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing HotelBooking model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the HotelBooking model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return HotelBooking the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = HotelBooking::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
