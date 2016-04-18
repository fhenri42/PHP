#!/usr/bin/php
<?php
$fd = fopen("private/info_user","a");
$commande = fopen("private/info_commande","a");
fclose($commande);
fclose($fd);
return;
?>