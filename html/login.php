<?php
include("php/conex.php");

session_start();


if (isset($_POST['submit'])) {
	echo "0<br>";
	////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	$ge=$_POST["nombre"];
	$cont=$_POST["con"];
	
	$con=mysqli_connect($host,$user,$pw,$bd)or die("eror1");
	$mos=mysqli_query($con,"SELECT * FROM `usuario` WHERE `usuario`='$ge'AND`contrasena`='$cont' ")or die("error2");
	
	 $va=$mos->num_rows;
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	
	if ((isset($_POST["nombre"])) || (isset($_POST["con"]))) {
		$nom=$_POST["nombre"];
		$con1=$_POST["con"];
		
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////		
		if ($va > 0) {
			echo "3<br>";
			$_SESSION['user']=$nom;
			header("location: index.php");
		
		}else{
			header("location: login.html");
		}
	}else{
	header("location: login.html");
	}
}else{
	header("location: login.html");
}

?>