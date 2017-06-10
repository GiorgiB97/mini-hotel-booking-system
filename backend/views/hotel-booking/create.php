<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HotelBooking */

$this->title = Yii::t('frontend', 'Create {modelClass}', [
    'modelClass' => 'Hotel Booking',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('frontend', 'Hotel Bookings'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-booking-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
