<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model \frontend\models\ContactForm */

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?php echo Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?php echo $form->field($model, 'name') ?>
                <?php echo $form->field($model, 'email') ?>
                <?php echo $form->field($model, 'subject') ?>
                <?php echo $form->field($model, 'body')->textArea(['rows' => 6]) ?>
                <?php echo $form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ]) ?>
                <div class="form-group">
                    <?php echo Html::submitButton(Yii::t('frontend', 'Submit'), ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
        <div class="col-lg-7">
            <div id="googleMap" style="width:100%;height:400px;"></div>

            <script>
                function myMap() {
                    var mapProp= {
                        center:new google.maps.LatLng(51.508742,-0.120850),
                        zoom:5,
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
            </script>

            <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>
        </div>
    </div>

</div>
