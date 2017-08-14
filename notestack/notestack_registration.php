<html>
<body>
<?php 
	session_start();
	extract($_POST);
	$conn = new mysqli('localhost','root','','notestackdb');
	if($conn->connect_errno){
   		die('Unable to connect to database [' . $conn->connect_error . ']');
	}
	$query = "INSERT INTO notestacktable VALUES 
('$reg','$username','$psw','$cpsw','$email','$mobile')";

	$insert_row = $conn->query($query);
	if($insert_row){
		  header("location:notestack_success.html");
	}
	else{
   		die('Error : ('. $conn->errno .') '. $conn->error);
	}
     ?>
</body>
</html>