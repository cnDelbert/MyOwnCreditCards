<?php
/**
 * Created by PhpStorm.
 * User: Delbert
 * Date: 15/10/17
 * Time: 下午7:51
 */
//require_once("/config/config.inc.php");
$_SERVER["SERVER_SOFTWARE"]="Delbert Credit Cards";
//var_dump($_SERVER);
function get_config_path(){
    $slash_cnt = substr_count($_SERVER["REQUEST_URI"],"/");
    $path_prefix = "";
    for($i = $slash_cnt - 1; $i > 0; $i --){
        $path_prefix .= "../";
    }
    $path_prefix .= "config/config.inc.php";
    return $path_prefix;
};
require_once(get_config_path());
require_once("function.inc.php");

$conn = sql_connect_database();
var_dump(mysqli_query($conn, "SELECT * FROM MyCCs_User WHERE 'UID' = 1"));
$login_status = get_login_status();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="author" content="Delbert">
    <meta name="description" content="Delbert's Credit Cards">

    <title>My Own Credit Cards <?php echo show_title();?> </title>

    <!-- Bootstrap -->
    <link href="//lib.sinaapp.com/js/bootstrap/v3.0.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="//<?php echo get_install_path(); ?>/css/style-default.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body role="document">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" title="My Own Credit Cards">My Own CCs</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <?php
                    if($login_status) {
                        ?>
                        <li class="active"><a href="<?php echo get_install_path();?>">Home</a></li>
                        <!--                    <li><a href="#about">About</a></li>-->
                        <!--                    <li><a href="#contact">Contact</a></li>-->
                        <!--                    <li class="dropdown">-->
                        <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                        <!--                        <ul class="dropdown-menu">-->
                        <!--                            <li><a href="#">Action</a></li>-->
                        <!--                            <li><a href="#">Another action</a></li>-->
                        <!--                            <li><a href="#">Something else here</a></li>-->
                        <!--                            <li role="separator" class="divider"></li>-->
                        <!--                            <li class="dropdown-header">Nav header</li>-->
                        <!--                            <li><a href="#">Separated link</a></li>-->
                        <!--                            <li><a href="#">One more separated link</a></li>-->
                        <!--                        </ul>-->
                        <!--                    </li>-->
                    <?php
                    } else {
                        ?>
                        <li class="active"><a href="<?php echo get_install_path();?>">Home</a></li>
                        <li>You are not logged in.</li>
                    <?php
                    }
                    ?>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">User</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div>
    </nav>

