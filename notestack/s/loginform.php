<?php

session_start();

?>
<html>
<head>
<title>login form</title>
</head>

<body>

<p><a href="homepg.php">Go to homepage</p>

<p style="margin-left: 80%"><a href="db_create.php">Sign Up</a></p>
<p style="margin-left: 80%"><a href="loginform.php">Log In</a></p>
<br />
<hr>

<form action="firstpg.php" method="post">
Enter UserID: 
<input type="text" name="usr" value=""><br /><br />

Enter password:
<input type="password" name="pwd" value=""><br /><br />

<input type="submit" name="sub" value="Submit"><br />

</body>
</html>