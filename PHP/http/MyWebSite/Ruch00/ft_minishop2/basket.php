<?php
session_start();
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="responsive-bootstrap.css">
	</head>
	<body id="body">
		<h1>NEEDASHIRT</h1>
		<div class="header">
			<nav class="menutop">
				<div> <a href ="compte.html" class = "account">Register</a></div>
				<div class = "zoom">
					<ul class = "menu">
						<li class="zoom" style ="margin-left: auto"><a href="index.php">Home</a></li>
						<li class="zoom"><a href= "men.html">Men</a></li>
						<li class="zoom"><a href="women.html">Women</a></li>
						<li class="zoom" style="margin-right: auto"><a href="basket.php">Basket</a></li>
					</ul>
				</div>	
			</nav>
		</div>
		<h2>Basket Overview</h2>
		<br/>
		<?php
		$prix = 0;
		if($_SESSION['item1'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Kim Jong Un</h3>
MON_HTML;
		echo("<h3>".$_SESSION['item1_cunt']."</h3>");
		$prix = $prix + 25 * $_SESSION['item1_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item2'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Mystic mew</h3>
MON_HTML;
		echo("<h3>".$_SESSION['item2_cunt']."</h3>");
$prix = $prix + 25 * $_SESSION['item2_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item3'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Internet Kid</h3>
MON_HTML;
	echo("<h3>".$_SESSION['item3_cunt']."</h3>");
	$prix = $prix + 25 *$_SESSION['item3_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item4'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt North Park</h3>
MON_HTML;
		echo("<h3>".$_SESSION['item4_cunt']."</h3>");
$prix = $prix + 25 * $_SESSION['item4_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item5'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Gym Swag</h3>
MON_HTML;
echo("<h3>".$_SESSION['item5_cunt']."</h3>");
$prix = $prix + 25 * $_SESSION['item5_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item6'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Coc Frog</h3>
MON_HTML;
echo("<h3>".$_SESSION['item6_cunt']."</h3>");
$prix = $prix + 25 * $_SESSION['item6_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item7'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Pizza Cat</h3>
MON_HTML;
echo("<h3>".$_SESSION['item7_cunt']."</h3>");
$prix = $prix + 25 * $_SESSION['item7_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item8'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Space Jizz</h3>
MON_HTML;
echo("<h3>".$_SESSION['item8_cunt']."</h3>");
$prix = $prix + 25 * $_SESSION['item8_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item9'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Sandwich Persian</h3>
MON_HTML;
echo("<h3>".$_SESSION['item9_cunt']."</h3>");
$prix = $prix + 25 * $_SESSION['item9_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item10'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt RAD</h3>
MON_HTML;
echo("<h3>".$_SESSION['item10_cunt']."</h3>");
$prix = $prix + 25 * $_SESSION['item10_cunt'];
		}
		?>
		<br/>
		<?php
		if($_SESSION['item11'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Space Cat</h3>
MON_HTML;
echo("<h3>".$_SESSION['item11_cunt']."</h3>");
$prix = $prix + (25 * $_SESSION['item11_cunt']);
		}
		?>
		<?php
		if($_SESSION['item12'] != NULL)
		{
			echo <<<MON_HTML
			<h3>T-Shirt Museum Chess</h3>
			<br/>
MON_HTML;
echo("<h3>".$_SESSION['item12_cunt']."</h3>");
$prix = $prix + (25 * $_SESSION['item12_cunt']);
		}
		echo("<h3>".$prix."$</h3>");
		?>
		<br/>
		<br/>
		</div>
		<form action="all-php/vetement/clear.php" method="POST">
		<input class = "OK" type="submit" name="submit" value= "Empty basket"/>
		</form>
		<form action="all-php/vetement/valide.php" method="POST">
		<input class = "OK" type="submit" name="submit" value= "Proceed to payment"/>
		</form>
	</body>
</html>