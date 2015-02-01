<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$id = $_POST['id'];
$number = $_POST['number'];

//simpan data ke database
$query = mysql_query("update pbk set number='$number' where id='$id'") or die(mysql_error());
 
if ($query) {
    header('location:user.php?message=update');
}
?>