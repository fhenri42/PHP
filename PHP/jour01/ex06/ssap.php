#!/usr/bin/php
<?PHP
$i = 1;

$tab = array();
while ($i < $argc)
{
	$tmp = explode(" ", $argv[$i]);
	$tab = array_merge($tab,$tmp);
	$i++;
}
sort($tab);
	$i = 0;
	while($tab[$i]!= NULL)
	{
		print("$tab[$i]\n");
		$i++;
	}
?>