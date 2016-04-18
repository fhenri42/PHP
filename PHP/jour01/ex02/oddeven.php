#!/usr/bin/php
<?PHP

while (1)
{
	print("Entrez un nombre:");
	if (($test = trim(fgets(STDIN))) == NULL)
	{
		print("$test\n");
		break;
	}
	if (is_numeric($test))
	{
		if ($test % 2 != 0)
			print("Le chiffre $test est Impair\n");
		else
		print("Le chiffre $test est Pair\n");
	}
	else
		print("'$test' n'est pas un chiffre\n");
}
?>
