<?php
/**
 * Created by PhpStorm.
 * User: Delbert
 * Date: 15/10/23
 * Time: 上午12:40
 */
function sql($sentense){
    if(DB_PREFIX){
        return str_replace("MyCCs", DB_PREFIX, $sentense);
    }else{
        return $sentense;
    }
};