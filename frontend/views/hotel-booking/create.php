<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HotelBooking */
/* @var $rooms [] */
/* @var $menus [] */
/* @var $success bool */
/* @var $booked_start_date string */
/* @var $booked_end_date string */


$this->title = Yii::t('frontend', 'Create {modelClass}', [
    'modelClass' => 'Hotel Booking',
]);
?>

<?php
    $output = null;
    $class = null;
    if(isset($success) && $success){
        $class = 'success';
        $output = Yii::t('hotel','Booking was successfully done !');
    }else if(isset($success)){
        if(isset($booked_start_date) && isset($booked_end_date)){
            $class = 'info';
            $output = Yii::t('hotel','We are sorry. This room is booked on these dates: ').$booked_start_date.' to '.$booked_end_date;
        }else{
            $class = 'info';
            $output = Yii::t('hotel','We are sorry. Booking was unsuccessful. Please, try again later.');
        }
    }
?>
<?php if(isset($success)){ ?>
    <div class="alert-<?=$class?> alert fade in">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <?= $output ?>
    </div>
<?php } ?>
<div class="hotel-booking-create">

    <?php echo $this->render('_form', [
        'model' => $model,
        'rooms' => $rooms,
        'menus' => $menus
    ]) ?>

</div>
