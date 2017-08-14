<html>
<head>
<title>Signup page</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "USE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}


if(isset($_POST['sub']))
{
	$name=$_POST['n'];
	$user=$_POST['usr'];
	$emailid=$_POST['eml'];
	$pass=$_POST['pwd'];
	
	mysqli_query($conn,"Insert into userdata values('$name', '$user', '$emailid', '$pass')");
	
	echo "<br />"."Data entered successfully.";
	
}



?>
<p><a href="homepg.php">Go to homepage</p>
<p style="margin-left: 80%"><a href="db_create.php">Sign Up</a></p>
<p style="margin-left: 80%"><a href="loginform.php">Log In</a></p>
<br />
<hr>

<form action="" method="post">
Name: 
<input type="text" name="n" value=""><br /><br />

UserID:
<input type="text" name="usr" value=""><br /><br />

Email id:
<input type="text" name="eml" value=""><br /><br />

Enter password:
<input type="password" name="pwd" value=""><br /><br />

<input type="submit" name="sub" value="Submit">
<input type="reset" name="can" value="Cancel"><br />


</body>
</html>


