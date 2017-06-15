<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/13/17
 * Time: 11:20 PM
 */
use yii\bootstrap\Html;


?>

<div class="row">
    <div class="col-md-6">
        <?php echo $form->field($model, 'name')->textInput(['maxlength' => true]); ?>
    </div>
    <div class="col-md-6">
        <?php echo $form->field($model, 'surname')->textInput(['maxlength' => true]); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'pid')->textInput(['maxlength' => true]); ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'country')->textInput(['maxlength' => true]); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'city')->textInput(['maxlength' => true]); ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'mobile')->textInput(['maxlength' => true]); ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'start_date')->widget(\yii\jui\DatePicker::className(),[
            'options' => [
                'class' => 'form-control'
            ]
        ]) ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'end_date')->widget(\yii\jui\DatePicker::className(),[
            'options' => [
                'class' => 'form-control'
            ]
        ]) ?>
    </div>
</div>
<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'email')->textInput(['maxlength' => true]); ?>
    </div>
    <div class="col-md-6">
        <?= $form->field($model, 'price')->textInput([
            'class' => "lastPrice1 form-control",
        ])->label(Yii::t('hotel','Price per day')); ?>
    </div>
</div>


<div class="text-center page-control">
    <a onclick="$('#tab2').trigger('click')" class="btn btn-warning"><?= Yii::t('hotel', 'Previous') ?></a>
    <?php echo Html::submitButton($model->isNewRecord ? Yii::t('hotel', 'Book') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>

<div class="form-group">
</div>