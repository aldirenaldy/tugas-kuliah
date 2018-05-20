<?php 
include 'koneksi.php';
 
$username = $_POST['username'];
$password = $_POST['password'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$alamat = $_POST['alamat'];
 
$query = mysql_query("select * from user where username='$username' and password='$password' password='$password' email='$email' phone='$phone' alamat='$alamat'");
$cek = mysql_num_rows($query);
echo $cek;
?>