<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\HotelBookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Hotel Bookings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-booking-index">

    <?php // echo $this->render('_search', ['model' => $searchModHOel]); ?>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
//        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'room_id',
            'menu_id',
            'name',
            'surname',
            'pid',
            'country',
            'city',
            'mobile',
            'email:email',
            [
                'attribute' => 'start_date',
                'value' => function ($model) {
                    return date('F j Y', $model->start_date);
                }

            ],
            [
                'attribute' => 'end_date',
                'value' => function ($model) {
                    return date('F j Y', $model->end_date);
                }

            ],
            'price'
        ],
    ]); ?>

</div>
