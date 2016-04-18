<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../responsive-bootstrap.css">
	</head>
	<body id="body">
		<h1>NEEDASHIRT</h1>
		<div class="header">
			<nav class="menutop">
				<div> <a href ="../compte.html" class = "account">Register</a></div>
				<div class = "zoom">
					<ul class = "menu">
						<li class="zoom" style="margin-left: auto"><a href="../index.php">Home</a></li>
						<li class="zoom"><a href="../men.html">Men</a></li>
						<li class="zoom"><a href="../women.html">Women</a></li>
						<li class="zoom" style="margin-right: auto"><a href="../basket.php">Basket</a></li>
					</ul>
				</div>	
			</nav>
		</div>
	</body>
<?php

	$_SESSION['item1'] = "T-Shirt Kim Jong Un"; ?>
<html><A class = "box" HREF= "../men.html">Continue Shopping</A> </html>
</html>