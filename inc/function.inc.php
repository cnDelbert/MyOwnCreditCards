<?php
/**
 * Created by PhpStorm.
 * User: Delbert
 * Date: 15/10/19
 * Time: 下午11:11
 */

// Basic Functions

function redirect($path){
    header("location: $path");
};

function check_cookies(){

};

function gen_cookies(){

};

function get_domain(){
    return $_SERVER['HTTP_HOST'];
};

function get_root_path(){
    return trim(INSTALL_PATH);
}

function get_install_path(){
    return get_domain().get_root_path();
}

function show_title(){
    if($_SERVER["REQUEST_URI"] == "/" || $_SERVER["REQUEST_URI"] == "/index.php"){
        echo "- Home";
    } else {
        echo "- ".ucwords(substr($_SERVER["REQUEST_URI"], 1, -4));
    }
};


function include_sql(){
    if(SQL == "MySQL"){
        require_once("//".get_install_path()."inc/MySql_func.inc.php");
    }
};