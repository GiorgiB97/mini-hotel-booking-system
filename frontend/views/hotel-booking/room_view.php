<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/13/17
 * Time: 11:19 PM
 */

/* @var $rooms [] */


use common\models\HotelRoom;
use yii\bootstrap\Html;


//foreach ($rooms as $room) {
//    echo $room['room']->id;
//    echo $room['room']->thumbnail;
//    echo $room['translations']->name;
//    echo $room['translations']->description;
//
//} ?>


<div class="room-select">
    <div class="roomBtnGroup row" data-toggle="buttons">
        <?php
        foreach ($rooms as $room) {
            $room_id = $room['room']->id;
            $room_thumbnail = Yii::getAlias('@storageUrl') . '/source/room/' . $room['room']->thumbnail;
            $name = $room['translations']->name; ?>

            <div class="roomItemWrapper col-md-3 col-sm-4">
                <label class="btn roomItem">
                    <div class="thumb">
                        <?= Html::img($room_thumbnail, [
                            'class' => 'img-responsive'
                        ]) ?>
                        <p class="title"> <?= $name ?></p>
                    </div>
                    <input value="<?= $room_id ?>" type="radio" name="room_id" hidden>
                </label>
            </div>
        <?php } ?>
    </div>
</div>

<div class="text-center page-control">
    <a onclick="$('#tab2').trigger('click')" class="btn btn-orange">Next</a>
</div>


