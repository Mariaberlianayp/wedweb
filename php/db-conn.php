<?php  

$sname = "localhost";
$uname = "nathan";
$password = "nathan123";

$db_name = "test2";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}