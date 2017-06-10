<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HotelRoom */


$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Hotel Room',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Hotel Rooms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-room-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
