<?php
require_once ("FiguraGeometrica.php");

class Rectangulo extends FiguraGeometrica
{
	protected $_ladoDos;//double
	protected $_ladoUno;//double

	function __contruct($L1, $L2) //double, double
	{
		$this->_ladoUno = $L1;
		$this->_ladoDos = $L2;
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
		parent::ToString();
		return "hola mundo";
	}
}
?>