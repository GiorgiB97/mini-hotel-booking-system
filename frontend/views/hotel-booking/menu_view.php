<?php
/**
 * Created by PhpStorm.
 * User: sai
 * Date: 6/13/17
 * Time: 11:20 PM
 */
/* @var $menus [] */



foreach ($menus as $menu){
    echo $menu['menu']->id;
    echo $menu['menu']->price;
    echo $menu['translations']->name;
    echo $menu['translations']->description;
}