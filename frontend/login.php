<?php include('client.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title> Login </title>
</head>

<body>
<div class="header">
	<h2> Login </h2>
</div>

<form method="POST" action="login.php">
	<div class = "input-group">
		<label> username </label>
		<input type = 'text' name = "username">
	</div>
	
	<div class = "input-group">
		<label> password </label>
		<input type = "password" name = "password">
	</div>
	
	<div class= " input-group">
		<button type = "submit" class="btn" name = "login_user"> Login </button>
	</div>
	
	<p> 
	New user? <a href="register.php"> Register here!</a>
	</p>
</form>
<?php

?>
</body>

</html>
