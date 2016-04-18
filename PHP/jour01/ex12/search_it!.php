#!/usr/bin/php
<?PHP
$a =0;


if ($argv[1] != NULL)
{
$tmp = $argv[1];
while($a < $argc)
{
	$test= explode(":", $argv[$a]);
	if($tmp == $test[0])
	{
		print("$test[1]");
	}
	$a++;
}
}
?>