<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/14/17
 * Time: 3:00 AM
 */

/* @var $room \common\models\HotelRoom */
/* @var $translations \common\models\HotelRoomTranslations */

?>
<div class="room-detail-view">
    <div class="card">
        <div class="container-fliud">
            <div class="wrapper row">
                <div class="preview col-md-6">

                    <div class="preview-pic tab-content">
                        <div class="tab-pane active" id="pic-1"><img src="http://placekitten.com/400/252"/></div>
                        <div class="tab-pane" id="pic-2"><img src="http://placekitten.com/400/252"/></div>
                        <div class="tab-pane" id="pic-3"><img src="http://placekitten.com/400/252"/></div>
                        <div class="tab-pane" id="pic-4"><img src="http://placekitten.com/400/252"/></div>
                        <div class="tab-pane" id="pic-5"><img src="http://placekitten.com/400/252"/></div>
                    </div>

                </div>
                <div class="details col-md-6">
                    <h3 class="product-title"><?= $translations->name?></h3>
                    <p class="product-description"><?= $translations->description ?></p>
                    <h4 class="price"><?= Yii::t('hotel','Price') ?> : <span><?= $room->price ?> GEL</span></h4>
                </div>
            </div>
        </div>
    </div>
</div>
