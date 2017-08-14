<html>
<body>
<?php
	include 'config.php';
	session_destroy();
	session_start();
	$uname=$_POST["txtusername"];
	$pwd=$_POST["psw"];
	$sql="SELECT * FROM notestacktable WHERE username='$uname' AND password='$pwd'";
	if($result=$conn->query($sql)){
		$count=$result->num_rows;
		if($count==1){
			$row = $result->fetch_assoc();
			if(isset($_POST["rememberme"])){
				setcookie("username",$row["username"],time()+60*60*24);
				setcookie("password",$row["password"],time()+60*60*24);
				setcookie("logintime",date("d/m/y, h:i:s a"),time()+60*60*24);
				
			}
			else{
				setcookie("username","",time()-5);
				setcookie("password","",time()-5);
				setcookie("logintime","",time()-5);
				
			}
			//$_SESSION['username'] = $row['username'];
			echo $row['username'];
			//header("location:notestack_loginsuccess.php");
		}
		else{
			echo "<h2>Username and Password invalid</h2>";
		}
		
		ob_flush();
	}
?>
</body>
</html>
