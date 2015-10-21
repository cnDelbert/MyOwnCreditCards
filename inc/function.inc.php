<?php
/**
 * Created by PhpStorm.
 * User: Delbert
 * Date: 15/10/19
 * Time: 下午11:11
 */
function redirect($path){
    header("location: $path");
}

function get_domain(){
    return $_SERVER['HTTP_HOST'];
};