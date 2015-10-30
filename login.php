<?php
/**
 * Created by PhpStorm.
 * User: Delbert
 * Date: 15/10/19
 * Time: 下午11:16
 */
require_once("./inc/header.inc.php");
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME, DB_PORT);
var_dump($conn);
var_dump(mysqli_query($conn, "SELECT * FROM MyCCs_User"));
?>


<?php
//var_dump($_SERVER);
require_once("./inc/footer.inc.php");