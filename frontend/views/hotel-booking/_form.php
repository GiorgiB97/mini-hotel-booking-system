<?php

use yii\bootstrap\Tabs;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HotelBooking */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $rooms [] */
/* @var $menus [] */
?>

<div class="hotel-booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= Tabs::widget([
        'items' => [
            [
                'label' => 'Rooms',
                'content' => $this->render('room_view', ['model' => $model, 'form' => $form, 'rooms' => $rooms]),
                'active' => true
            ],
            [
                'label' => 'Menu',
                'content' => $this->render('menu_view', ['model' => $model, 'form' => $form,'menus' => $menus]),
            ],
            [
                'label' => 'Credentials',
                'content' => $this->render('credentials_view', ['model' => $model, 'form' => $form]),
            ],
        ]]);
    ?>


    <?php echo $form->errorSummary($model); ?>

    <?php ActiveForm::end(); ?>

</div>
