<!DOCTYPE html>
<html>
<head>
	<title>guik</title>
</head>
<body>
<?php 
$nombre="juan";
function lo(){
	global $nombre;#para combertir la variable nombre ne global dentro de la funsio debo de poner  global $nombre, y asi la funsion se ara global 
	$nombre="el nombre es " . $nombre;

}
 lo();
 print($nombre);
?>
</body>
</html>