<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/14/17
 * Time: 2:39 AM
 *
 */
/* @var $rooms [] */ ?>




<div class="room-list">
    <div class="row">
        <?php foreach ($rooms as $room){
            $room_id = $room['room']->id;
            $room_price = $room['room']->price;
            $room_thumbnail = Yii::getAlias('@storageUrl') . '/source/room/' . $room['room']->thumbnail;
            $name = $room['translations']->name;
            $description = $room['translations']->description;
        ?>
            <div class="col-sm-6 col-md-4 col-lg-3 mt-4">
                <div class="card">
                    <img class="card-img-top" src="<?= $room_thumbnail ?>">
                    <div class="card-block">
                        <h4 class="card-title"><?= $name ?></h4>
                        <div class="meta">
                            <?= Yii::t('hotel', 'Price') ?> : <?= $room_price ?> GEL
                        </div>
                        <div class="card-text">
                            <?= \yii\helpers\StringHelper::truncate($description,45) ?>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                        <span><?= \yii\helpers\Html::a(Yii::t('hotel', 'Read more..'),['/rooms/view','id'=> $room_id]) ?></span>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

