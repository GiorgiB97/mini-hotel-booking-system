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

    </div>
</div>
