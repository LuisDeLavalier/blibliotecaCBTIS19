<?php
$ar=$_FILES['pdf']['tmp_name'];
$des="je/".$_FILES['pdf']['name'];
echo "$ar<br>$des<br>";

try{
move_uploaded_file($ar, $des)or die("error<br>");
    //mis argumentos para procesar

}

catch(Exception $e){
 echo $e->getMessage();
    //procedimiento en caso de reportar errores

}
?>
