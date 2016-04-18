<?php

$valid_passwords = array ("zaz" => "jaimelespetitsponeys");
$valid_users = array_keys($valid_passwords);

$user = $_SERVER['PHP_AUTH_USER'];
$pass = $_SERVER['PHP_AUTH_PW'];
if ($user == 'zaz')
{
	
if ($pass == "jaimelespetitsponeys")
	echo "good paaword";
}
else
	echo "bad password";
?>