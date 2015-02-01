<?php
//panggil file config.php untuk menghubung ke server
include('config.php');
 
//tangkap data dari form
$number = $_POST['number'];
$name = $_POST['number'];

//simpan data ke database
$query = mysql_query("INSERT INTO pbk VALUES('', '$number', '$name')") or die(mysql_error());
 
if ($query) {
    header('location:pengaturan.php?message=success');
}
?>