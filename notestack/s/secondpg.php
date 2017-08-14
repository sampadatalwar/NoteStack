<?php

session_start();

?>
<html>
<head>
<title>secondpg</title>
</head>

<body>
<?php

if(isset($_SESSION['name']))
{
	echo "<br />"."<h2>"."Hi ".$_SESSION['name']." !! :)"."</h2>"."<br />"."<br />";
}
else
{
	echo "Welcome guest!";
}
echo "<form action='loginform.php' method='post'>";
echo "<input type='submit' name='sub' value='Log Out'>"."</form>";
session_destroy();

?>

</body>
</html>