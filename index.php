<html>
<head>
  <title>Login </title>
  <style>
    .form {
      margin: 50px;
      margin-right: 35%;
      margin-left: 35%;
      padding: 20px;
    }
    fieldset {
    background-color: #eeeeee;
  }
  </style>
  <script>
    function validateForm(){
      var name=document.myform.username.value;
      var password=document.myform.password.value;

      if (name != "LTI" || password != 123){
        alert("Invalid Username/Password. Try Again!");
      return false;
      }
    }
</script>
</head>
<body style= "font-family: Arial">
<div class="form" align="center">
<fieldset>
<legend><i><h2>Login Page</h2></i></legend><br>
<form name= "myform"  method="get" action="welcome.php" onsubmit= "return validateForm()">
  Username <input type="text" name= "username" id="username"><br><br>
  Password <input type ="password" name= "password" id="password"><br><br>
  <input type= "checkbox" name = "remember" > Remember me<br><br>
  <input type= "submit" value= "LOGIN" name="login" >
</form>
</fieldset>
</div>
<?php
		if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
		$username = $_COOKIE['username'];
		$password = $_COOKIE['password'];

		echo "<script>
document.getElementById('username').value = '$username';
document.getElementById('password').value = '$password';
</script>";
}
?>

</body>
</html>