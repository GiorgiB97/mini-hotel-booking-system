<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/13/17
 * Time: 11:20 PM
 */
/* @var $menus [] */


?>
<div class="room-select">
    <div class="roomBtnGroup row" data-toggle="buttons">
        <?php
        foreach ($menus as $menu){ ?>
            <div class="roomItemWrapper col-md-3 col-sm-4">
                <label class="btn roomItem">
                    <div class="thumb">
                        <p><h2><?= $menu['translations']->name ?></h2></p>
                        <p><b><i><?= Yii::t('hotel','Price') ?> <?= $menu['menu']->price ?> GEL</i></b></p>
                        <p><?= \yii\helpers\StringHelper::truncate($menu['translations']->description,25) ?></p>
                    </div>
                    <input type="radio" name="HotelBooking[menu_id]" hidden value="<?= $menu['menu']->id ?>" id="checked_menu_id">
                </label>
            </div>
       <?php } ?>
    </div>
</div>

<div class="text-center page-control">
    <a onclick="$('#tab1').trigger('click')" class="btn btn-warning"><?= Yii::t('hotel','Previous') ?></a>
    <a onclick="$('#tab3').trigger('click')" class="btn btn-orange"><?= Yii::t('hotel','Next') ?></a>
</div>
