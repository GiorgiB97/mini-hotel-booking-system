<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\search\HotelBookingSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Hotel Bookings');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-booking-index">

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php echo Html::a(Yii::t('frontend', 'Create {modelClass}', [
    'modelClass' => 'Hotel Booking',
]), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'room_id',
            'menu_id',
            'name',
            'surname',
            // 'pid',
            // 'country',
            // 'city',
            // 'mobile',
            // 'email:email',
            // 'start_date',
            // 'end_date',
            // 'price',
            // 'created_at',
            // 'updated_at',
            // 'deleted_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
