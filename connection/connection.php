<?php
$hostname ="localhost";
$database ="emafree";
$username ="admin";
$password ="";
$tableprefix_ ="auto_free_";
$root_folder ="e:/phpdev5/www/ema_free";
$basepath ="http://comp25:81/ema_free/";
$config_version ="1.1";
$linktodb = db_connect($hostname, $username, $password) or die("connection error:-".mysql_error()); 
db_select_db($database,$linktodb);
?>