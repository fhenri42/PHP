<?PHP
function ft_split($str)
{
	$i = 0;
	$test = explode(" ", $str);
	sort($test);
	while( $i < count($test) && $test[$i]==NULL)
	{
		$i++;
	}
	$lol = array_slice($test,$i);
	return($lol);
}
?>