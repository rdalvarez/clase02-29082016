<?php
require_once ("FiguraGeometrica.php");

class Rectangulo extends FiguraGeometrica
{
	protected $_ladoDos;//double
	protected $_ladoUno;//double

	function __construct($L1, $L2) //double, double
	{
		$this->_ladoUno = $L1;
		$this->_ladoDos = $L2;

		$this->CalcularDatos();
	}

	protected function CalcularDatos()
	{
		$this->_superficie = ($this->_ladoUno * $this->_ladoDos);
		$this->_perimetro = 2*($this->_ladoUno + $this->_ladoDos);
	}
	public function Dibujar()
	{
		var_dump($this->_superficie);
		var_dump($this->_perimetro);
		return ($this->_superficie + $this->_perimetro);
	}
	public function ToString()
	{
		return parent::ToString();
	}
}

?>