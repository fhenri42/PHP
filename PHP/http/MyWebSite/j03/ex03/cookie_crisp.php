<?php

$action = $_GET[action];
if($action == 'set')
{
	setcookie($_GET[name], $_GET[value]);
}
if ($action == 'get')
{
	if ($_COOKIE[$_GET[name]])
		echo($_COOKIE[$_GET[name]] . "\n");
}
if ($action == 'del')
{
	setcookie($_GET[name], 'del', time(0));
}
?>