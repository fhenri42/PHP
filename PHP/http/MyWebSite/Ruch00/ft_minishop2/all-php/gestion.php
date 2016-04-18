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
if ($_SESSION['login'] == "ADMIN" && $_SESSION['pass1'] == "ADMIN")
{
 echo <<<MON_HTML
		<html>

	<h2>Accounts</h2><br/>
</html>
MON_HTML;
$liste = unserialize(file_get_contents("../private/info_user"));
$a = 0;
while($a < 100)
{
	if ($liste[$a]['login'] != NULL)
	{
	echo ('<h3>' . $liste[$a]['login'] . '</h3>');
	echo <<<MON_HTML
	<html><br/></html>
MON_HTML;
	}
$a++;
}
 echo <<<MON_HTML
<html>
<body>
<form action="supp.php" method="POST">
	<h2>Administration</h2><br/>
	<h3>Delete a account</h3><input class ="OK" name="login" value=""/>
	<input class = "OK" type="submit" name="submit" value="Yes"/>
	</body>
</form>
<br/>
<br/>
	<h2>Product Overview</h2><br/>
	<h3>Men : <br/>
	T-shirt kim jong un  : 25$
	<br/>
	T-shirt Mystic mew   : 25$
	<br/>
	T-shirt Internet kid : 25$
	<br/>
	T-shirt North Park   : 25$
	<br/>
	T-shirt Gym swag     : 25$
	<br/>
	T-shirt coc frog     : 25$
	<br/>
	<br/>
	Women : <br/>
	T-shirt Pizza cat  	 : 25$
	<br/>
	T-shirt Space jizz	 : 25$
	<br/>
	T-shirt sandwich persian :25$
	<br/>
	T-shirt Rad :25$
	<br/>
	T-shirt space cat :25$
	<br/>
	T-shirt Musuem chess :25$</h3>
</html>
MON_HTML;
}
else
{
	echo <<<MON_HTML
		<html>
		<h3>You have no business here<?><br /> 
		<A class = "box" HREF= "../men.html">Back to shopping</A>
		</html>
MON_HTML;
}
?>
</html>