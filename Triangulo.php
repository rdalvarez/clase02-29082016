<?php
require_once ("FiguraGeometrica.php");

class Triangulo extends FiguraGeometrica
{
	protected $_altura;//double
	protected $_base;//double

	function Triangulo($b,$h)//double, double
	{
		$this->_altura = $b;
		$this->_base = $h;
	}
	protected function CalcularDatos()
	{

	}

	public function Dibujar()
	{
		return "string";
	}
	public function ToString()
	{
		return "hola mundo";
	}
}
?>