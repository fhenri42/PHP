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
		if ($_POST['submit'] !== "OK")
        {
        echo <<<MON_HTML
		<html>
		<h3>You have no business here</h3>
		<br />
		<br/>
		<A HREF= "../home.html" style="margin-right: 15px"> 'HOME'</A>
		</html>
MON_HTML;
                return;
            }
        if ($_POST['login'] == NULL || $_POST['pass1'] == NULL || $_POST['login'] == "" || $_POST['pass1'] == "")
            {
      echo <<<MON_HTML
		<html>
		<h3>Informations missing</h3>
		<br />
		<br/>
		<A HREF= "../logg.html" style="margin-right: 15px"> 'HOME'</A>
		</html>
MON_HTML;
                return;
            }
		$authentication = unserialize( @file_get_contents("../private/info_user"));
        if(!$authentication)
        	$authentication = array();
        foreach ($authentication as $key => $element)
        {
            if ($element["login"] === $_POST["login"])
            {
                $found_key = $key;
                break;
            }
        }
        if (!isset($found_key) || $authentication[$found_key]['pass'] !== hash("whirlpool", $_POST['pass1']))
            {
            	if ($_POST['login'] != "ADMIN" || $_POST['pass1'] != "ADMIN")
            	{
                echo <<<MON_HTML
				<html>
				<h3>Username does not exist</h3> 
				<br />
				<br/>
				<A class = "box" HREF= "../logg.html">Back to log</A>
				</html>
MON_HTML;
                return;
           		}
            }

	$_SESSION['login'] = $_POST['login'];
	$_SESSION['pass1'] = $_POST['pass1'];
	if ($_SESSION['login'] == "ADMIN" && $_SESSION['pass1'] == "ADMIN")
	{
	echo <<<MON_HTML
	<html>
	<A class ="box" HREF= "gestion.php">Accounts administration</A>
	</html>
MON_HTML;
}
	else{
		echo"<h3>"."You are now loggued as :". $_SESSION['login']."</h3><br />";
  	echo <<<MON_HTML
	<html>
	<h2>ENJOY THE RIDE</h2>

MON_HTML;
  	echo <<<MON_HTML

		<br />
		<br/>
		<A class = "box" HREF= "../men.html">SHOP NOW !!!!!!!!</A>
		</html>
MON_HTML;
}
?>
<!DOCTYPE html>
</html>
