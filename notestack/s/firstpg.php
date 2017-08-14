<?php

session_start();

?>
<html>
<head>
<title>firstpg</title>
</head>

<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$abc = new mysqli($servername, $username, $password);
// Check connection
if ($abc->connect_error) {
    die("Connection failed: " . $abc->connect_error);
} 

// Create database
$sql = "USE myDB";
if ($abc->query($sql) == TRUE) {
    echo "Database created successfully";
} 
else {
    echo "Error creating database: " . $abc->error;
}



	$user=$_POST['usr'];
	$pass=$_POST['pwd'];
	$ctr=0;
	
	$qry=mysqli_query($abc,"select userid, password, name from userdata;");
	while($row=mysqli_fetch_assoc($qry))
	{
		if($user==$row['userid'] && $pass==$row['password'])
		{
			$_SESSION['name']=$row['name'];
			echo "<br />"."Logged In successfully."."<br />";
			echo "<br />"."<h2>"."Hi ".$row['name']." !! :)"."</h2>"."<br />"."<br />";
			echo "<form action='homepage.php' method='post'>";
			echo "<input type='submit' name='sub' value='Log Out'>"."</form>";
			
			$ctr=0;
			break;
		}
		else{
			$ctr++;
		}
	}
	if($ctr!=0)
	{
		echo "<br />"."Your UserID or password doesn't match!";
	}
	


?>

</body>
</html>