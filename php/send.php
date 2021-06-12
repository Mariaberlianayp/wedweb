<?php  


if (isset($_POST['name']) && isset($_POST['message'])) {
	include './db-conn.php';

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$name = validate($_POST['name']);
	$message = validate($_POST['message']);

	if (empty($message) || empty($name)) {
		header("Location: ../home.html");
	}else {

		$sql = "INSERT INTO ucapan(name, message) VALUES('$name', '$message')";
		$res = mysqli_query($conn, $sql);

		if ($res) {
            header("Location: ../success.html");
		}else {
			echo "Your message could not be sent!";
		}
	}

}else {
	header("Location: ../home.html");
}