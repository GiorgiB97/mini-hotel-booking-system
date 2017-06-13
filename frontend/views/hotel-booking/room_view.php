<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/13/17
 * Time: 11:19 PM
 */

/* @var $rooms [] */


use common\models\HotelRoom;


foreach ($rooms as $room){
    echo $room['room']->id;
    echo $room['room']->thumbnail;
    echo $room['translations']->name;
    echo $room['translations']->description;
}
