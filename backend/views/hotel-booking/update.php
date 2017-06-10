<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HotelBooking */

$this->title = Yii::t('frontend', 'Update {modelClass}: ', [
    'modelClass' => 'Hotel Booking',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Hotel Bookings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('frontend', 'Update');
?>
<div class="hotel-booking-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
