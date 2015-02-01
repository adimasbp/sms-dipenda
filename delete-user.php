<?php
include('cek-login.php');
include('config.php');

$id = $_GET['id'];
 
$query = mysql_query("delete from admin where id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:user.php?message=delete');
}
?>