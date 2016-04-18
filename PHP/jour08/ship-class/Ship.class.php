<?php
ini_set('display_errors',1);
class Ship
{
	$_wich = 0;
    public function __construct($name)
    {
        $this->_wich = ship_name($name);
       // ship_cara();
    }
    public function ship_name($name)
    {
        if ($this->name == 'Wrath Of The Righteous')
        	return 1;
        if ($this->name == 'Rightful Vengeance')
        	return 2;
        else
        {
        	echo "this ship does not existe go back where you came from !";
        	return -1;
        }

    }
}
echo ini_get('display_errors');
print("sa fonctionne pas \n");
$new_ship = new Ship('Wrath Of The Righteous');

print("sa as fonctionner ");
?>