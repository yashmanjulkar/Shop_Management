<?php 

$db_name = "shop_management";
$username = "root";
$password = "password";
$servername = "127.0.0.1";
$conn = mysqli_connect($servername,$username,$password,$db_name);

if(!$conn){

	die("Connection failed: ".mysqli_connect_error());
}
?>
