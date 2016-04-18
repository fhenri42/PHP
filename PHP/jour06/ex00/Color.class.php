#!/usr/bin/php
<?php
class Exemple
{
	
	function __construct(argument)
	{
		echo "salut debut";
	}
	function __destruct()
	{
		echo "salut fin";
	}
}

$instance = new Exemple();
?>