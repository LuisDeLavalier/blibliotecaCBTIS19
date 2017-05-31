<?php
///////////////////////////////////////////////////

include("conex.php");
//echo "primer paso <br>";

/////////////////////////////////////////////////////////

/*echo "segundo paso <br><br> host: "
.$host."<br>user: ".$user
."<br>pw: ".$pw.
"<br>bd: ".$bd;*/
$nombre=$_POST["nombre"];
$autor=$_POST["autor"];
$editoria=$_POST["editoria"];
$isbn=$_POST["isbn"];
$img=$_POST["img"];
$archivo=$_POST["archivo"];
$categoria=$_POST["categoria"];
$url=$_POST["url"];

$nombree=$_FILES["url"]["name"];
$tipo=$_FILES["url"]["type"];
$tamano=$_FILES["url"]["size"];
$ruta=$_FILES["url"]["tpm_name"];
$destino="imagen/".$nombree;

$nombree1=$_FILES["archivo"]["name"];
$tipo1=$_FILES["archivo"]["type"];
$tamano1=$_FILES["archivo"]["size"];
$ruta1=$_FILES["archivo"]["tpm_name"];
$destino1="imagen/".$nombree;


$img=addslashes(file_get_contents($_FILES["img"]["tmp_name"]));
$archivo=addslashes(file_get_contents($_FILES["archivo"]["tmp_name"]));

/////////////////////////////////////////////////////////////

		#$con=new mysqli($host,$user,$pw,$bd);

	$con=mysqli_connect($host,$user,$pw) or die("<br><br>no se pudo en contrar");
	//echo "<br><br>tersero paso <br>";

//////////////////////////////////////////////////////////////////////

	mysqli_select_db($con,"biblioteca") or die("<br><br>no se pudo en contrar la bd");
//echo "cuarto paso <br>";

////////////////////////////////////////////////////////////////////////////////////

	mysqli_query($con,"INSERT INTO libros (`Nombre_Libro`, `Autor`, `Editorial`, `ISBN`, `Imagen`, `Archivo`, `Categoria`, `Url`)
	 VALUES ('$nombre','$autor','$editoria','$isbn','$img','$archivo','$categoria','$url')")or die("<br><br>la insersion no se pudo");

////////////////////////////////////////////////////////////////////////

	echo "listo";



?>
