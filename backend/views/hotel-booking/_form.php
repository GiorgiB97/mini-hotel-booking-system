<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HotelBooking */
/* @var $form yii\bootstrap\ActiveForm */
?>

<div class="hotel-booking-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'room_id')->textInput() ?>

    <?php echo $form->field($model, 'menu_id')->textInput() ?>

    <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'surname')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'pid')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'country')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'mobile')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($model, 'start_date')->textInput() ?>

    <?php echo $form->field($model, 'end_date')->textInput() ?>

    <?php echo $form->field($model, 'price')->textInput() ?>

    <?php echo $form->field($model, 'created_at')->textInput() ?>

    <?php echo $form->field($model, 'updated_at')->textInput() ?>

    <?php echo $form->field($model, 'deleted_at')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
