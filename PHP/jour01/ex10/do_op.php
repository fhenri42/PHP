#!/usr/bin/php
<?PHP


if ($argc == 2)
{
	$tmp = explode(" ", $argv[1]);
	$x = $tmp[0];
	$y = $tmp[2];
	if($tmp[1] == "+")
	{
		$x = $x + $y;
		print("$x\n");
	}
	if($tmp[1] == "-")
	{
		$x = $x - $y;
		print("$x\n");
	}
		if($tmp[1] == "*")
	{
		$x = $x * $y;
		print("$x\n");
	}
		if($tmp[1] == "/")
	{
		if($y != 0)
		{
		$x = $x / $y;
		print("$x\n");
		}
		else
			print("0\n");
	}
		if($tmp[1] == "%")
	{
		$x = $x % $y;
		print("$x\n");
	}
}
else 
{
	$x = $argv[1];
	$y = $argv[3];
	if($argv[2] == "+")
	{
		$x = $x + $y;
		print("$x\n");
	}
	if($argv[2] == "-")
	{
		$x = $x - $y;
		print("$x\n");
	}
	if($argv[2] == "*")
	{
		$x = $x * $y;
		print("$x\n");
	}
	if($argv[2] == "/")
	{
		if($y != 0)
		{
		$x = $x / $y;
		print("$x\n");
		}
		else
			print("0\n");
	}
	if($argv[2] == "%")
	{
		$x = $x % $y;
		print("$x\n");
	}


}

?>