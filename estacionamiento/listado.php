<!DOCTYPE html>
<html>
<body>

<h2>Listado de usuario</h2>

<ol>
	<?php
	$miArchivo = fopen("registro.txt", "r") ;
	while(!feof($miArchivo)) {
		$objeto=json_decode(fgets($miArchivo));
  		if (objeto->Usuario==$_GET['usuario']) and (objeto->Clave==$_GET['clave']);
  		
	}
	fclose($miArchivo);
?> 

</ol> 

</body>
</html>
