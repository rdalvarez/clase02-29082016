<html>
<head>
	<title>Ap N 15</title>
</head>
<body> 
<?php

require ("Triangulo.php");
require ("Rectangulo.php");

$ObjTriangulo = new Triangulo(2,4);
$ObjRectangulo = new Rectangulo(3,3);

$ObjRectangulo->SetColor("rojo");

echo $ObjRectangulo->Dibujar();


//echo ($ObjTriangulo->ToString());

?>
</body>
</html>