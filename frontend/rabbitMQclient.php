<?php
require_once('rabbitMQLib.inc');

//function for user login => rabbitQ => backend.

function messageLogin($usename, $password){
	
	//connects to rabbitMQ through rabbitMQtest script. 
	$client = new rabbitMQclient('rabbitMQtest.ini','testServer');
	if(isset($argv[1])){
		$msg = $argv[1];
	}
	else{
		$msg = array ("message" => "Login", "type" => "login",
					"username" => $username, 
					"password" => $password);
		}
	
	$respone = $client -> send_request($msg);
	
	return($response);
	
	if(isset($argv[0]))
		echo $argv[0]. "END".PHP_EOL;
}

function messageRegister($username,$hash){
	$client = new rabbitMQclient('rabbitMQtest.ini','testServer');
	if(isset($argv[1])){
		$msg = $argv[1];
	}
	else{
	$msg = array ("message" => "Register", "type" => "register",
					"username" => $username, 
					"hash" => $hash);
	}
	$reponse = $client->send_request($msg);
	
	return($response);
	
	if(isset($argv[0]))
		echo $argv[0]. "END".PHP_EOL;
}
				
	

?>

	
