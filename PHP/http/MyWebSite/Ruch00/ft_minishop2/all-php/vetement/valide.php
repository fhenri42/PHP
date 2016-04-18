<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../responsive-bootstrap.css">
	</head>
	<body id="body">
		<h1>NEEDASHIRT</h1>
		<div class="header">
			<nav class="menutop">
				<div> <a href ="../../compte.html" class = "account">Register</a></div>
				<div class = "zoom">
					<ul class = "menu">
						<li class="zoom" style="margin-left: auto"><a href="../../index.php">Home</a></li>
						<li class="zoom"><a href="../../men.html">Men</a></li>
						<li class="zoom"><a href="../../women.html">Women</a></li>
						<li class="zoom" style="margin-right: auto"><a href="../../basket.php">Basket</a></li>
					</ul>
				</div>	
			</nav>
		</div>
	</body>
</html>
<?php
if ($_SESSION['login'] != NULL && ($_SESSION['pass1'] != NULL || $_SESSION['pass']))
{
	$fd =fopen("../../private/info_commande", "a+");
	fwrite($fd,"Commande: \n");
	fwrite($fd, $_SESSION['item1']."\n");
	fwrite($fd, $_SESSION['item2']."\n");
	fwrite($fd, $_SESSION['item3']."\n");
	fwrite($fd, $_SESSION['item4']."\n");
	fwrite($fd, $_SESSION['item5']."\n");
	fwrite($fd, $_SESSION['item6']."\n");
	fwrite($fd, $_SESSION['item7']."\n");
	fwrite($fd, $_SESSION['item8']."\n");
	fwrite($fd, $_SESSION['item9']."\n");
	fwrite($fd, $_SESSION['item10']."\n");
	fwrite($fd, $_SESSION['item11']."\n");
	fwrite($fd, $_SESSION['item12']."\n");
	fwrite($fd, "fin de la commande \n");
	echo <<<MON_HTML
		<html>
		<h3>Thanks for your purchase !</h3>
</html>
MON_HTML;
$_SESSION["item1"] = NULL;
$_SESSION["item2"] = NULL;
$_SESSION["item3"] = NULL;
$_SESSION["item4"] = NULL;
$_SESSION["item5"] = NULL;
$_SESSION["item6"] = NULL;
$_SESSION["item7"] = NULL;
$_SESSION["item8"] = NULL;
$_SESSION["item9"] = NULL;
$_SESSION["item10"] = NULL;
$_SESSION["item11"] = NULL;
$_SESSION["item12"] = NULL;
}
else
{
	echo <<<MON_HTML
		<html>
		<h3>Connection required to keep on shopping</h3>
		<br/>
		<br/>
		<form action="../../compte.html" method="POST">
		<input class = "OK" type="submit" name="submit" value="Register"/>
	
</html>
MON_HTML;
}
?>