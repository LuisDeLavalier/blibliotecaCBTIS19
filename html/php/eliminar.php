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

	mysqli_query($con,"DELETE FROM `libros` WHERE `Nombre_Libro`='$nombre'")or die("<br><br>la actualisasion no se pudo");

	

////////////////////////////////////////////////////////////////////////

	echo "listo";



?>
