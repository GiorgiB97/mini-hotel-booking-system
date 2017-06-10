<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HotelMenu */

$this->title = Yii::t('backend', 'Create {modelClass}', [
    'modelClass' => 'Hotel Menu',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend', 'Hotel Menus'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="hotel-menu-create">

    <?php echo $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
