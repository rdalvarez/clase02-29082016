<html>
<head>
	<title> Ap N 15</title>
</head>
<body> 
<?php

require ("/Clase02Triangulo.php");
require ("Clase02/Rectangulo.php");

$ObjTriangulo = new Triangulo(2,4);
$ObjRectangulo = new Rectangulo(3,3);

echo ($ObjRectangulo->ToString());
echo ($ObjTriangulo->ToString());


?>
</body>
</html>