<?php
class Vertex
{
	private static $verbose = False;
	public $x = 0;
	public $y = 0;
	public $z = 0;
	public $w = 0;

	public function __construct()
	{
		echo "Construction\n";
		return;
	}
	public function __destruct()
	{
		echo "Destruction";
		return;
	}
$instance = new Vertex();
print('$instance->x:'. $instance->x."\n");
print('$instance->y:'. $instance->y."\n");
print('$instance->z:'. $instance->z."\n");
?>