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
			// echo '<script>alert("Thank you for send a message :)")</script>';
            // header("Location: ../home.html");
			echo "<script>
				alert('Ucapan terkirim! Terima kasih! :)');
				window.location.href='../home.html';
			</script>";
		}else {
			echo "<script>
				alert('Maaf, ucapanmu tidak terkirim. Silakan diulangi kembali. Terima kasih.');
				window.location.href='../home.html';
			</script>";
		}
	}

}else {
	header("Location: ../home.html");
}