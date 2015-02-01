<?php
$host ='127.0.0.1';
$user ='root';
$pass ='';

$dbname ='db_sms';
$connect = mysql_connect($host,$user,$pass) or die(mysql_error());

$dbselect = mysql_select_db($dbname);
?>