<?PHP
session_unset();
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
<?PHP
if ($_POST['submit'] != 'OK')
{
	return;
}
if ($_POST["login"] == NULL || $_POST["pass"] == NULL || $_POST["mail"] == NULL)
{
	echo <<<MON_HTML
		<html>
		<h3>Missing information</h3> 
		<A class ="box" HREF= "../crea_compte.html" style="margin-right: 15px"> 'Creation'</A>
		</html>
MON_HTML;
	return;
}
if (file_exists("../private/info_user"))
	$verife = unserialize(file_get_contents("../private/info_user"));
$next = 0;
if (is_array($verife))
{
	foreach($verife as $key=> $user)
	{
		if($user['login'] == $_POST['login'])
		{
		echo <<<MON_HTML
		<html>
		<h3>Username already exists</h3> 
		<A class ="box" HREF= "../crea_compte.html" style="margin-right: 15px"> 'Creation'</A>
		</html>
MON_HTML;
			return;
		}
		if ($key > $next)
			$next = $key;
	}
}
$secu = $_POST['pass'];
$verife[$next + 1]['login'] = $_POST['login'];
$verife[$next + 1]['mail'] = $_POST['mail'];
$verife[$next + 1]['pass'] = hash("whirlpool",$secu);
@mkdir("../private");
file_put_contents("../private/info_user", serialize($verife));
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['pass'] = $_POST['pass'];
	echo <<<MON_HTML
		<html>
		<h3>Account successfully created</h3> 
		<A class ="box" HREF= "../men.html" style="margin-right: 15px"> 'Let's Go Shop !</A>
		</html>
MON_HTML;

?>
</html>