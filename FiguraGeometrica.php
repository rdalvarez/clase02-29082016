<?php
abstract Class FiguraGeometrica
{
	protected $_color;
	protected $_superficie;
	protected $_perimetro;

	function __construct(){}

	public function GetColor()
	{
		return $this->_color;
	}

	public function SetColor($color)
	{
		$this->_color = $color;
	}

	public function ToString() //falta que sea virtual
	{
		return "hola(padre)";
	}

	abstract public function Dibujar();

	abstract protected function CalcularDatos();
}
?>