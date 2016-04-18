#!/usr/bin/php
<?PHP

if ($argv[1])
{

	$tab=explode(" ", $argv[1]);
	$b = 1;
	while($b < count($tab))
	{
	print(trim($tab[$b]));
	$b++;
	if($tab[$b]!= NULL)
	print(" ");
	}
	if($tab[1]!= NULL)
	print(" $tab[0]");
else
	print("$tab[0]");
	print("\n");
}
?>