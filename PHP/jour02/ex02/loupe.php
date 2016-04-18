#!/usr/bin/php
<?PHP


if ($argv[1])
{
$str =$argv[1];
$fd =fopen($argv[1], "r");
$str = fread($fd,filesize($str));
print("$str\n");
}

?>