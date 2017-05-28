<?php
///////////////////////////////////////////////////

include("conex.php");
//echo "primer paso <br>";

/////////////////////////////////////////////////////////

/*echo "segundo paso <br><br> host: "
.$host."<br>user: ".$user
."<br>pw: ".$pw.
"<br>bd: ".$bd;*/

/////////////////////////////////////////////////////////////

		#$con=new mysqli($host,$user,$pw,$bd);

	$con=mysqli_connect($host,$user,$pw) or die("<br><br>no se pudo en contrar");
	//echo "<br><br>tersero paso <br>";

//////////////////////////////////////////////////////////////////////

	mysqli_select_db($con,$bd) or die("<br><br>no se pudo en contrar la bd");
//echo "cuarto paso <br>";

////////////////////////////////////////////////////////////////////////////////////

	mysqli_query($con,"INSERT INTO libros (Nombre, Typo, Materia, Autor, Describcion, img, url)
	 VALUES ('$_POST[nombre]','$_POST[typo]','$_POST[mate]','$_POST[autor]','$_POST[des]','$_POST[img]','$_POST[url]')")or die("<br><br>la insersion no se pudo");

////////////////////////////////////////////////////////////////////////

	echo "listo";


?>
