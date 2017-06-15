<?php
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>
<div class="site-index">

    <?php echo \common\widgets\DbCarousel::widget([
        'key' => 'index',
        'options' => [
            'class' => 'slide', // enables slide effect
        ],
    ]) ?>


    <div class="body-content">

        <?php echo common\widgets\DbCarousel::widget([
            'key' => 'home-page'
        ]); ?>


        <div class="row">
            <div class="col-lg-4 text-center">
                <br>
                <h2><?= Yii::t("hotel", "Rooms") ?></h2>

                <img height=200 src="/img/19184140_910800455725872_28019008_n.jpg">
                <br><br>
                <p><?= \yii\helpers\Html::a(Yii::t("hotel", "Rooms") . ' &raquo;', ['/rooms/index'], [
                        'class' => 'btn btn-default'
                    ]) ?></p>
            </div>
            <div class="col-lg-4 text-center">
                <br>
                <h2><?= Yii::t("hotel", "Menu") ?></h2>

                <img height=200 src="/img/fc039a0c95f21b60e269bb79edc2f6b4.jpg">
                <br><br>
                <p><?= \yii\helpers\Html::a(Yii::t("hotel", "Menu") . ' &raquo;', ['/menu/index'], [
                        'class' => 'btn btn-default'
                    ]) ?></p>
            </div>
            <div class="col-lg-4 text-center">
                <br>
                <h2><?= Yii::t("hotel", "Booking") ?></h2>

                <img height=200 src="/img/Online-Booking.jpg">
                <br><br>
                <p><?= \yii\helpers\Html::a(Yii::t("hotel", "Booking") . ' &raquo;', ['/hotel-booking/create'], [
                        'class' => 'btn btn-default'
                    ]) ?>
                </p>
            </div>
        </div>
    </div>
