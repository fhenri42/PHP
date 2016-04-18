#!/usr/bin/php
<?PHP
    $jours = array('/[lL]undi /', '/[Mm]ardi /', '/[Mm]ercredi /', '/[Jj]eudi /', '/[Vv]endredi /', '/[Ss]amedi /', '/[Dd]imanche /');
    $mois = array('/[Jj]anvier/', '/[fF]evrier/', '/[Mm]ars/', '/[Aa]vril/', '/[Mm]ai/', '/[Jj]uin/', '/[Jj]uillet/', '/[Aa]out/', '/[Ss]eptembre/', '/[Oo]ctobre/', '/[Nn]ovembre/', '/[Dd]ecembre/');
    $months = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
    if ($argv[1])
    {
        $str = preg_replace($mois, $months, $argv[1]);
        $str = preg_replace($jours, '', $str);
        date_default_timezone_set("Europe/Paris");
        $time = strtotime($str, time());
        if ($time)
            print("$time\n");
        else
            print("Wrong Format\n");
    }
?>