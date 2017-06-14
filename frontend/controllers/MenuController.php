<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/14/17
 * Time: 4:53 PM
 */

namespace frontend\controllers;


use yii\web\Controller;

class MenuController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}