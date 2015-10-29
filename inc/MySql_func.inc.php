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

function sql_error($err_info){
    echo "数据库错误：".$err_info."<br>";
    echo "Database Error: ".$err_info."\n";
};

function sql_connect_database(){
    global $conn;
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME, DB_PORT);
    if(mysqli_connect_errno($conn)) {
        die(sql_error(mysqli_error($conn)));
    }else{
        return $conn;
    }
};

function sql_get_hash_name(){
    global $conn;
    return mysqli_query($conn, "SELECT * FROM `MyCCs_User` ");
};

function sql_get_user_name(){

};

function sql_get_hash_pass(){

};