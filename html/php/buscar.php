<?php
///////////////////////////////////////////////////

include("conex.php");
//echo "primer paso <br>";

/////////////////////////////////////////////////////////

/*echo "segundo paso <br><br> host: "
.$host."<br>user: ".$user
."<br>pw: ".$pw.
"<br>bd: ".$bd;*/
$bus=$_POST["bus"];
$nombre=$_POST["nombre"];
$autor=$_POST["autor"];
$editoria=$_POST["editoria"];
$isbn=$_POST["isbn"];
$img=$_POST["img"];
$archivo=$_POST["archivo"];
$categoria=$_POST["categoria"];
$url=$_POST["url"];



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

	mysqli_query($con,"UPDATE `libros` SET `Nombre_Libro`='$nombre',`Autor`='$autor',`Editorial`='$editoria',`ISBN`='$isbn',`Imagen`='$img',`Archivo`='$archivo',`Categoria`='$categoria',`Url`='$url' WHERE `Nombre_Libro`='$bus'")or die("<br><br>la actualisasion no se pudo");

	

////////////////////////////////////////////////////////////////////////

	echo "listo";



?>
