<?php include('client.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title> Register your account here! </title>
</head>

<body>
<div class="header">
	<h2> Register </h2>
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
	
	<div class = "input-group">
		<label> Confirm your password </label>
		<input type = "password" name = "confirmPassword">
	</div>
	
	<div class= " input-group">
		<button type = "submit" class="btn" name = "register_user"> Login </button>
	</div>
	
	<p> 
	Existing user? <a href="login.php"> Login here!</a>
	</p>
</form>
<?php

?>
</body>

</html>
