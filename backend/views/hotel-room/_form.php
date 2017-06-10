<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HotelRoom */
/* @var $form yii\bootstrap\ActiveForm */

$className = yii\helpers\StringHelper::basename(\common\models\HotelRoomTranslations::className());
$translationClass = new \common\models\HotelRoomTranslations();
?>

<div class="hotel-room-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php echo $form->errorSummary($model); ?>

    <?php echo $form->field($model, 'thumbnail')->textInput(['maxlength' => true]) ?>

    <?php echo $form->field($translationClass,'name')->textInput([
            'name' => "{$className}[name][En]"
    ]) ?>
    <?php echo $form->field($translationClass,'name')->textInput([
        'name' => "{$className}[name][Ge]"
    ]) ?>
    <?php echo $form->field($translationClass,'name')->textInput([
        'name' => "{$className}[name][Rus]"
    ]) ?>


    <?php echo $form->field($translationClass,'description')->textInput([
        'name' => "{$className}[description][En]"
    ]) ?>
    <?php echo $form->field($translationClass,'description')->textInput([
        'name' => "{$className}[description][Ge]"
    ]) ?>
    <?php echo $form->field($translationClass,'description')->textInput([
        'name' => "{$className}[description][Rus]"
    ]) ?>

    <?php echo $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
