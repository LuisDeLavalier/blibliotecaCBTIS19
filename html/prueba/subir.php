<?php



if (isset($_POST['om'])) {
	$name=$_FILES['nom']['name'];
	$type=$_FILES['nom']['type'];
	$size=$_FILES['nom']['size'];
	$ruta=$_FILES['nom']['tmp_name'];
	$destino="archivo/".$name;

	echo $name."<br>";
echo $type."<br>";
echo $size."<br>";
echo $ruta."<br>";
echo $destino."<br>";

	if ($name != "") {
		if (copy($ruta, $destino)) {
				echo "exito";
				
			}else{
				echo "error";
			}	
	}else{
	echo "error2";
}
}else{
	echo "error1";
}

?>