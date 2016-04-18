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
$aut = unserialize( @file_get_contents("../private/info_user"));
foreach ($aut as $key => $element)
        {
            if ($element["login"] == $_POST["login"])
            {
                $found_key = $key;
                break;
            }
        }
        if (!isset($found_key))
            {
        echo <<<MON_HTML
        <html>
        <h3>Utilisateur non existant</h3>
        <A class = "box" HREF= "gestion.php">Back to admin session</A>
        </html>
MON_HTML;
                return;
            }
       unset($aut[$found_key]);
        file_put_contents("../private/info_user", serialize($aut));
        echo <<<MON_HTML
		<html>
		<h3>Utilisateur supprime</h3>
		<A class = "box" HREF= "gestion.php">Back to admin session</A>
		</html>
MON_HTML;
?>