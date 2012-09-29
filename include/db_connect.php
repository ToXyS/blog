<?php
include 'db_config.php';
if (!($mysqlid=mysql_connect('localhost','root',''))) {
    echo'error';
mysql_select_db($db_name);    
}

?>
