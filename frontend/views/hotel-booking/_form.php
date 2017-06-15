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
        'options' => [
            'class' => 'booking-tabs'
        ],
        'items' => [
            [
                'label' => Yii::t('hotel','Rooms'),
                'content' => $this->render('room_view', ['model' => $model, 'form' => $form, 'rooms' => $rooms]),
                'active' => true,
                'linkOptions' => [
                    'id' => 'tab1'
                ]
            ],
            [
                'label' => Yii::t('hotel','Menu'),
                'content' => $this->render('menu_view', ['model' => $model, 'form' => $form,'menus' => $menus]),
                'linkOptions' => [
                        'id' => 'tab2'
                ]
            ],
            [
                'label' => Yii::t('hotel','Credentials'),
                'content' => $this->render('credentials_view', ['model' => $model, 'form' => $form]),
                'linkOptions' => [
                    'id' => 'tab3'
                ]
            ],
        ]]);
    ?>


    <?php echo $form->errorSummary($model); ?>

    <?php ActiveForm::end(); ?>

</div>
