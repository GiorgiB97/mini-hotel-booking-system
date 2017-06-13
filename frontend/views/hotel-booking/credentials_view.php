<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/13/17
 * Time: 11:20 PM
 */
use yii\bootstrap\Html;

echo $form->field($model, 'name')->textInput(['maxlength' => true]);

echo $form->field($model, 'surname')->textInput(['maxlength' => true]);

echo $form->field($model, 'pid')->textInput(['maxlength' => true]);

echo $form->field($model, 'country')->textInput(['maxlength' => true]);

echo $form->field($model, 'city')->textInput(['maxlength' => true]);

echo $form->field($model, 'mobile')->textInput(['maxlength' => true]);

echo $form->field($model, 'email')->textInput(['maxlength' => true]);

echo $form->field($model, 'start_date')->textInput();

echo $form->field($model, 'end_date')->textInput();

echo $form->field($model, 'price')->hiddenInput();

?>

<div class="form-group">
        <?php echo Html::submitButton($model->isNewRecord ? Yii::t('frontend', 'Create') : Yii::t('frontend', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
</div>