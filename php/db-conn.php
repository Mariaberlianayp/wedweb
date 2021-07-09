<?php  

$sname = "localhost";
$uname = "maria";
$password = "maria";

$db_name = "test2";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}