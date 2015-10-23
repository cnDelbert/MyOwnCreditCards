<?php
define("DB_HOST", "localhost"); //如果不是远程数据库则保持不变，默认"localhost"
define("DB_PORT", "3306"); //数据库端口，默认"3306"
define("DB_USER", "db_user");
define("DB_PSWD", "db_pswd");
define("DB_NAME", "db_name");
define("DB_PREFIX", "");    //数据库前缀
define("SALT", "Delbert");  //密码加盐，默认"Delbert"
define("INSTALL_PATH", ""); //除去域名部分的路径，默认留空
define("SQL", "MySQL"); //数据库类型，暂时只支持MySQL