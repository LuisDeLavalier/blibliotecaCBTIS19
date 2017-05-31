<?php
$para="TDTxLE@gmail.com";
$asunto="publicar:libro";
$de=$_POST["de"];
$men=$_POST["mensaje"];

mail($para, $asunto, $men, $de)or die("error al enviar"s);
echo "enviado";


?>