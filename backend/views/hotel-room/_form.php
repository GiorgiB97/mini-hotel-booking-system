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

    <?php echo $form->field($model, 'thumbnail')->fileInput() ?>

    <?php echo $form->field($translationClass,'name')->textInput([
            'name' => "{$className}[en-US][name]"
    ])->label('Name English') ?>
    <?php echo $form->field($translationClass,'name')->textInput([
        'name' => "{$className}[ka-Ka][name]"
    ])->label('Name Georgian') ?>
    <?php echo $form->field($translationClass,'name')->textInput([
        'name' => "{$className}[ru-RU][name]"
    ])->label('Name Russian') ?>


    <?php echo $form->field($translationClass,'description')->textarea([
        'name' => "{$className}[en-US][description]"
    ])->label('Description English') ?>
    <?php echo $form->field($translationClass,'description')->textarea([
        'name' => "{$className}[ka-Ka][description]"
    ])->label('Description Georgian') ?>
    <?php echo $form->field($translationClass,'description')->textarea([
        'name' => "{$className}[ru-RU][description]"
    ])->label('Description Russian') ?>

    <?php echo $form->field($model, 'price')->textInput() ?>

    <div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('backend', 'Create') : Yii::t('backend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
