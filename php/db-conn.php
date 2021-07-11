<?php  

$sname = getenv('DB_HOST');
$uname = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');

$db_name = getenv('DB_NAME');

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
	exit();
}