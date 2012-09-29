<?php
$db_host='localhost';
$db_user='root';
$db_pass='';
$db_name='blog';
$mysqlid=0;
//---------------------------------
//function db_connect() {

//function db_get_art($id) {
$db_res=mysql_query('SELECT * FROM art WHERE id=$id');   
    
//return $db_res;    
//}
//----------------------------------
//function db_close() {
mysql_close($mysqlid);
//}
//-----------------------------------
//db_connect();




//db_close();



?>
