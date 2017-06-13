<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HotelBooking */
/* @var $rooms [] */
/* @var $menus [] */


$this->title = Yii::t('frontend', 'Create {modelClass}', [
    'modelClass' => 'Hotel Booking',
]);
?>
<div class="hotel-booking-create">

    <?php echo $this->render('_form', [
        'model' => $model,
        'rooms' => $rooms,
        'menus' => $menus
    ]) ?>

</div>
