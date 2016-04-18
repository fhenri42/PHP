<?php
session_start();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../../responsive-bootstrap.css">
	</head>
	<body id="body">
		<h1>NEEDASHIRT</h1>
		<div class="header">
			<nav class="menutop">
				<div> <a href ="compte.html" class = "account">Register</a></div>
				<div class = "zoom">
					<ul class = "menu">
						<li class="zoom" style ="margin-left: auto"><a href="../../index.php">Home</a></li>
						<li class="zoom"><a href= "men.html">Men</a></li>
						<li class="zoom"><a href="women.html">Women</a></li>
						<li class="zoom" style="margin-right: auto"><a href="../../basket.php">Basket</a></li>
					</ul>
				</div>	
			</nav>
		</div>
<?php
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
$_SESSION['item1_cunt'] = NULL;
$_SESSION['item2_cunt'] = NULL;
$_SESSION['item3_cunt'] = NULL;
$_SESSION['item4_cunt'] = NULL;
$_SESSION['item5_cunt'] = NULL;
$_SESSION['item6_cunt'] = NULL;
$_SESSION['item7_cunt'] = NULL;
$_SESSION['item8_cunt'] = NULL;
$_SESSION['item9_cunt'] = NULL;
$_SESSION['item10_cunt'] = NULL;
$_SESSION['item11_cunt'] = NULL;
$_SESSION['item12_cunt'] = NULL;

echo <<<MON_HTML
		<html>
			<h3>Basket is now empty , SNIF ;(</h3>
		<br />
		<br/>
		<A class = "box" HREF= "../../men.html" style="margin-right: 15px"> 'GO BACK'</A>
		</html>
MON_HTML;
?>
</body>
</html>