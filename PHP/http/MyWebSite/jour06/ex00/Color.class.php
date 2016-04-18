<?php
class Color
{
	
	private static $verbose = False;
	public $red = 0;
	public $green = 0;
	public $blue = 0;

	public function __construct(array $tab, $rgb)
	{
		echo "Construction\n";
	if ($rgb != NULL)
		{
			$this->blue =$rgb % 10;
			$this->green = ($rgb % 100 - ($rgb %10)) / 10;
			$this->red = ($rgb - ($rgb % 100)) / 100;
			return;
		} 
	else
		{
			if(array_key_exists('r', $tab))
				$this->red = $tab['r'];
			if(array_key_exists('g', $tab))
				$this->green = $tab['g'];
			if(array_key_exists('b', $tab))
				$this->blue = $tab['b'];
		}
		return;
	}
	public function __destruct()
	{
		echo "Destruction";
		return;
	}
	public function doc()
	{
		$homepage = file_get_contents('Color.doc.txt');
		echo $homepage."\n";
		return;
	}
	public function add(array $new)
	{
		$this->red = $this->red + $new['r'];
		$this->blue = $this->blue + $new['b'];
		$this->green = $this->green + $new['g'];
		return;
	}
	public function sub(array $new)
	{
		$this->red = $this->red - $new['r'];
		$this->blue = $this->blue - $new['b'];
		$this->green = $this->green - $new['g'];
		return;
	} 
	public function mult(array $new)
	{
		$this->red = $this->red * $new['r'];
		$this->blue = $this->blue * $new['b'];
		$this->green = $this->green * $new['g'];
		return;
	} 
	public function __toString()
	{
		return 'R = '.$this->red.' G = '.$this->green.' B ='.$this->blue."\n";
	}
}
$rgb = 123;
$tab = array('r'=> 3, 'g' => 4, 'b' => 5);
$instance = new Color($tab, $rgb);
print('$instance->red:'. $instance->red."\n");
print('$instance->green:'. $instance->green."\n");
print('$instance->blue:'. $instance->blue."\n");
$instance->doc();
//$instance->add(array('r'=>10, 'g'=>10, 'b'=>10));
//$instance->sub(array('r'=>10, 'g'=>10, 'b'=>10));
//$instance->mult(array('r'=>10, 'g'=>10, 'b'=>10));

?>