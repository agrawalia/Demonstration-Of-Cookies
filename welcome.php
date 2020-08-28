<html>
<head>
  <title>Dashboard</title>
 </head>
<body style= "font-family: Arial">

Welcome Back, <?php echo $_GET["username"]; ?>
<?php
	$myuser = "LTI";
	$mypass = "123";

	if(isset($_GET["login"])) {
		$user = $_GET["username"];
		$pass = $_GET["password"];
		

		if($user == $myuser and $pass == $mypass){
			
			if(isset($_GET["remember"])){
			$rem = $_GET["remember"];
			setcookie("username", $user, time()+60*60*24);
			setcookie("password", $pass, time()+60*60*24);
			} 
			session_start();
			$_SESSION["username"] = $user; 
		}

	} else
		header("location: index.html")
	
?>
</body>
</html>