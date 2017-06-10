<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HotelBooking */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Hotel Bookings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-booking-view">

    <p>
        <?php echo Html::a(Yii::t('frontend', 'Update'), ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?php echo Html::a(Yii::t('frontend', 'Delete'), ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('frontend', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php echo DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'room_id',
            'menu_id',
            'name',
            'surname',
            'pid',
            'country',
            'city',
            'mobile',
            'email:email',
            'start_date',
            'end_date',
            'price',
            'created_at',
            'updated_at',
            'deleted_at',
        ],
    ]) ?>

</div>
