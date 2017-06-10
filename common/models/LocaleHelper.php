<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/11/17
 * Time: 1:55 AM
 */

namespace common\models;


use Yii;

class LocaleHelper
{
    public static function getLocalesByKeys(){
        $locales = Yii::$app->params['availableLocales'];
        $return = [];
        foreach ($locales as $key => $value){
            $return[] = $key;
        }
        return $return;
    }
}