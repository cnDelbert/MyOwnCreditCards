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

function connect_database(){
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME, DB_PORT);
    if(!$conn) {
        die(sql_error(mysqli_error($conn)));
    }else{
        return $conn;
    }
};