#!/usr/bin/php
<?PHP
$non = 0;
if ($argc == 2)
{
	$i = 0;
	while($argv[1][$i] != NULL)
{
	if(ctype_alpha($argv[1][$i]) != NULL)
		$non = 1;
	$i++;
}
if ($non == 1)
	print("Syntax Error\n");
else
{
	$tmp=str_replace(' ','',$argv[1]);
	if($tmp[1] == "+")
	{
		$tmp = explode("+", $tmp);
		$x =$tmp[0];
		$y = $tmp[1];
		$x = $x + $y;
		print("$x\n");

	}
	if($tmp[1] == "-")
	{
		$tmp = explode("-", $tmp);
		$x =$tmp[0];
		$y = $tmp[1];
		$x = $x - $y;
		print("$x\n");
	}
		if($tmp[1] == "*")
	{
		$tmp = explode("*", $tmp);
		$x =$tmp[0];
		$y = $tmp[1];
		$x = $x * $y;
		print("$x\n");
	}
		if($tmp[1] == "/")
	{
		$tmp = explode("/", $tmp);
		$x =$tmp[0];
		$y = $tmp[1];
		if($y != 0)
		{
		$x = $x / $y;
		print("$x\n");
		}
		else
			print("Error\n");
	}
	if($tmp[1] == "%")
	{
		$tmp = explode("%", $tmp);
		$x =$tmp[0];
		$y = $tmp[1];
		$x = $x % $y;
		print("$x\n");
	}
}
}
else
	print("Incorrect Parametres\n");
?>