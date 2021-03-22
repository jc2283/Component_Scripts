
<?php
session_start();
require('rabbitMQclient.php');

#Login function 

if(isset($POST['login_user'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username != "" && $password != ""){
	
		#calls function 'messageLogin' in rabbitMQclient.php)
		$rabbitResponse = messageLogin($username,$password);
		if($rabbitResponse == false){
			echo "login failed, please try again";
		}
		else{
			echo "You are logged in";
			$userSession = json_decode($rabbitResponse,true);
			$_SESSION['logged'] = true;
			$_SESSION['user'] = $userSession;
			header('location: landing_page.html');
			}
		}
	}
	
#Register function
	
if(isset($POST['register_user'])) {

	$username = $_POST['username'];
	$password = $_POST['password'];
	$confirm = $_POST['confirmPassword'];
	
	if($password != $confirm){
	
		echo "Passwords do not match";
		exit();
		
		}
		
		if ($username != '' && $password != ''){
			$hash = password_hash($password, PASSWORD_BCRYPT);
			$rabbitResponse = messageRegister($username,$hash);
			
			if($rabbitResponse==false){
			echo "Account already exists";
			}
			
			else{
			
			echo "Your account has been created";
			header("Location: landing_page.html");
			}
			
			
		
		}
	}

?>
