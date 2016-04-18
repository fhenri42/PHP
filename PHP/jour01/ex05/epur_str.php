#!/usr/bin/php
<?PHP

if($argv[1]!= NULL)
{
$i = 0;
$str = trim($argv[1], " ");
$tab = explode(" ",$str);
$b =count($tab);
while($i < $b)
{

	$str = trim($tab[$i]);
	if ($i == 0)
		print("$str");
	else
		print("$str");
	if($tab[$i] != NULL && $i < $b - 1)
		echo(" ");
	$i++;
}
echo("\n");
}
?>
