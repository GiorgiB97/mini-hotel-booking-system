<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HotelRoom */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Hotel Room',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Hotel Rooms'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="hotel-room-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
