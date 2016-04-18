<?PHP

function ft_is_sort($str)
{
$new = $str;
sort($new);
return($new == $str);
}

?>