<html>
<head>
<style>
body{
	background-image:url('6.jpg');
	background-repeat:no-repeat;
	background-size:cover;
}
</style>
<title></title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body><br>
<a href="pizza.php"  class="center"><img src="4.jpg"></a>

<div class="input-group">
<form method="post" action="index.php" style="width:40%;">
<h2 align="center" style="color:white;">Login</h2>
<br><input placeholder="User name" type="text" name="uname"><br>
<br><input placeholder="Password" type="password" name="password"><br><br>
<input type="submit" name="login" id="login" value="Login" style="background-color:#00cc66;border: 2px solid #00cc66;color:white;width:70%;height:40px">




		<?php 


if(isset($_POST['login'])){
		$uname=$_POST['uname'];
		$password=$_POST['password'];
		if($uname=="admin" && $password=="pizzaadmin"){
			header('Location:order.php');
		}
		else{
			echo "<h3>Wrong user name or password</h3>";
		}
}

?>
</form>
</div>
</body>
</html>