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
<?PHP
        if ($_POST['submit'] !== "OK")
        {
        echo <<<MON_HTML
        <html>
        Vous n'aver rien a faire sur cette page
        <br />
        <br/>
        <A HREF= "../home.html" style="margin-right: 15px"> 'HOME'</A>
        </html>
MON_HTML;
        return;
        }
        if ($_POST['submit'] == NULL || $_POST["login"]== NULL || $_POST["pass1"] == NULL)
        {
echo <<<MON_HTML
        <html>
        Vous n'aver pas rentrer les bonne infotmation! 
        <br />
        <br/>
        <A HREF= "../logg.html" style="margin-right: 15px"> 'HOME'</A>
        </html>
MON_HTML;
        }
        if (!@file_get_contents("../private/info_user"))
            {

                echo "ERROR NONN \n";
                return;
            }
        $aut = unserialize( @file_get_contents("../private/info_user"));
        foreach ($aut as $key => $element)
        {
            if ($element["login"] === $_POST["login"])
            {
                $found_key = $key;
                break;
            }
        }
        if (!isset($found_key) || $aut[$found_key]['pass'] !== hash("whirlpool", $_POST['pass1']))
            {
echo <<<MON_HTML
        <html>
        Vous n'aver pas rentrer les bonne infotmation! 
        <br />
        <br/>
        <A HREF= "../logg.html" style="margin-right: 15px"> 'HOME'</A>
        </html>
MON_HTML;
return;
            }
        unset($aut[$found_key]);
        file_put_contents("../private/info_user", serialize($aut));
        echo <<<MON_HTML
        <html>
        votres compte vien d'etre suprimmer! 
        <br />
        <br/>
        <A HREF= "../logg.html" style="margin-right: 15px"> 'HOME'</A>
        </html>
MON_HTML;
    ?>
</html>