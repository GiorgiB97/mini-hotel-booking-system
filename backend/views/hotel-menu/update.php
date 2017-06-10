<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HotelMenu */

$this->title = Yii::t('backend', 'Update {modelClass}: ', [
    'modelClass' => 'Hotel Menu',
]) . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Hotel Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('backend', 'Update');
?>
<div class="hotel-menu-update">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
