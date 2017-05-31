<!DOCTYPE html>
<html>
<head>
	<title>guik</title>
</head>
<body>
<?php 
function incrmento(){#al finalizar una funcion sus variables se destrllen para ebitar esto antes de la variable poner static
	static $numero=0;
	$numero++;
	echo $numero . "<br>";
}
incrmento();
incrmento();
incrmento();
incrmento();
incrmento();
@/**
* 
*/
class ClassName extends AnotherClass
{
	
	function __construct(argument)
	{
		# code...
	}
}
			
?>
</body>
</html>