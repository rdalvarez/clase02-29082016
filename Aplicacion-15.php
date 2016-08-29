<html>
<head>
	<title></title>
</head>
<body> 
<?php

$ObjTriangulo = new Triangulo();


Class FiguraGeometrica
{
	protected $_color;
	protected $_superficie;
	protected $_perimetro;

	function __contruct()
	{
		
	}

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

	}

	abstract public function Dibujar();

	abstract protected function CalcularDatos();

}

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
	override function Dibujar()
	{
		//return;//string
	}
	function ToString()
	{
		//return;//String
	}

}

class Triangulo extends FiguraGeometrica
{
	protected $_altura;//double
	protected $_base;//double

	function __contruct($b,$h)//double, double
	{
		$this->_altura = $b;
		$this->_base = $h;
	}
	protected function CalcularDatos()
	{

	}

	function Dibujar()
	{
		//return; //String
	}
	function ToString()
	{

	}
}


?>
</body>
</html>