<?php
	#	echo "1";
	include("php/conex.php");
	#echo "2";
	$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
	#echo "3";
	 $mos=mysqli_query($con,"SELECT * FROM libros")or die("problemas al extrar datos");
	#echo "4";	

	#echo "5";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>libro "xxx"</title>
		<link rel="stylesheet" type="text/css" href="css/lib.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
	<body>
		<HEADER>
			<a href="index.php"><img id="im" src="imagen/logolib.jpg"></a>	
		</HEADER>
		<NAV>
				 <div class="example">
<div class="menuholder">
<ul class="menu slide">
<li><a href="" class="c1">Inicio</a>
<div class="subs">
<dd><h3><p align="justify">Bienvenidos a la libreria virtual del CBTIS 19, encontraras libros para tus estudios y para tu entretinimiento, esta pagina es creada con el fin de que aprendas conocimientos y fomentes la lectura.Sean bienvenidos a la pagina creada por alumnos para el aprendizaje y entretenimiento de nosotros mismos. Ponte comodo y comienza tu lectura.
</p></h3></dd>
</div>
</li>

<li><a href="" class="c2">Basico</a>
<div class="subs">

<dl>
<dt><h3></h3></dt>
<dd><a href="">Matematicas</a></dd>
<dd><a href="">Ingles</a></dd>
<dd><a href="">LEO y E</a></dd>
</dl>

<dl>
<dt><h3><font color="#025C88">Componentes</font></h3></dt>
<dd><a href="">Quimica</a></dd>
<dd><a href="">Fisica</a></dd>
<dd><a href="">Logica</a></dd>
</dl>

<dl>
<dt><h3><font color="#025C88">Basicos:</font></h3></dt>
<dd><a href="">Biologia</a></dd>
<dd><a href="">Ecologia</a></dd>
<dd><a href="">Etica</a></dd>
</dl>

<dl>
<dt><h3></h3></dt>
<dd><a href="">Filosofia</a></dd>
<dd><a href="">Tic's</a></dd>
<dd><a href="">Administracion</a></dd>
</dl>
</div>

</li>
<li><a href="" class="c3">Profesional</a>
<div class="subs">
<dl>
<dt><h3></h3></dt>
<dd><a href="">Programación</a></dd>
<dd><a href="">Electricidad</a></dd>
</dl>

<dl>
<dt><h3><font color="#025C88">Carreras</font></h3></dt>
<dd><a href="">Contabilidad</a></dd>
<dd><a href="">Alimentos y Bebidas</a></dd>
</dl>

<dl>
<dt><h3><font color="#025C88">Técnicas</font></h3></dt>
<dd><a href="">Comunicación</a></dd>
<dd><a href="">Hospedaje</a></dd>
</dl>

<dl>
<dt><h3></h3></dt>
<dd><a href="/">Químico Analista</a></dd>
</dl>
</div>
</li>

<li><a href="" class="c4">Entre.</a>
<div class="subs">
<dl>
<dt><h3></h3></dt>
<dd><a href="">Suspenso</a></dd>
<dd><a href="">Romance</a></dd>
</dl>

<dl>
<dt><h3><font color="#025C88">Varios</font></h3></dt>
<dd><a href="">Historias</a></dd>
<dd><a href="">Comedia</a></dd>
</dl>

<dl>
<dt><h3><font color="#025C88">Libros</font></h3></dt>
<dd><a href="">Ciencía Ficción</a></dd>
<dd><a href="">Sagas</a></dd>
</dl>

<dl>
<dt><h3></h3></dt>
<dd><a href="/">Novelas</a></dd>
</dl>
</div>
</li>

<li><a href=""  class="c5">Multi.</a>
<div class="subs">
<dl>
<dt><h3></h3></dt>
<dd><a href=""></a></dd>
</dl>

<dl>
<dt><h3><font color="#025C88">Multibros</font></h3></dt>
<dd><a href="">Audiolibros</a></dd>
</dl>

<dl>
<dt><h3></h3></dt>
<dd><a href="">Videolibros</a></dd>
</dl>

<dl>
<dt><h3></h3></dt>
<dd><a href=""></a></dd>
</dl>
</div>
</li>

<li><a href="" class="c6">Ayuda</a>
<div class="subs">
<dl>
<dt><h3></h3></dt>
<dd><a href=""></a></dd>
</dl>

<dl>
<dt><h3><font color="#025C88">Contáctanos</font></h3></dt>
<dd><a href="">FAQ</a></dd>
<dd><a href="">Reportar Problemas</a></dd>
</dl>

<dl>
<dt><h3></h3></dt>
<dd><a href="">Sugerencias</a></dd>
<dd><a href="">Acerca de</a></dd>
</dl>

<dl>
<dt><h3></h3></dt>
<dd><a href=""></a></dd>
</dl>
</div>
</li>

</ul>
<div class="back"></div>
<div class="shadow"></div>
</div>
<div style="clear:both"></div>
</div>
		</NAV>
		<ASIDE>
				
		</ASIDE>
		<SECTION>
			<?php

	while ($fila=mysqli_fetch_array($mos) ) {
		?>
		<div id="in">
		<img src="data:image/jpg;base64,<?php echo base64_encode($fila[Imagen]);?>">

		<p id="nombre"><?php echo "Nombre: $fila[Nombre_Libro]";?></p>
		<p id="Autor"><?php echo "Tipo: $fila[Autor]<br>";?></p>
		<p id="Editorial"><?php echo "Materia: $fila[Editorial]<br>";?></p>
		<p id="autor"><?php echo "Autor: $fila[Autor]<br>";?></p>
		<p id="Categoria"><?php echo "Descripcion: $fila[Categoria]<br>";?></p>
		</div>
		<div id="libr">
			<p> <a href="<?php $pdf;?>">ver</a></p>
		</div>
				
	<?php		
	}
	?>
		</SECTION>			
	</body>
</html>