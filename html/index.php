<?php
	session_start();
	if (isset($_SESSION['user'])) {
		$sa="hola ".$_SESSION['user'];
	}else{
	header("location: login.html");
	}
	///////////////////////////////////////////////////////////////////////////////////
	include("php/conex.php");
	
	$con=mysqli_connect($host,$user,$pw,$bd) or die("problemas en la conexion");
	$mos=mysqli_query($con,"SELECT * FROM libros")or die("problemas al extrar datos");

	////////////////////////////////////////////////////////////////////////////////////
	
?>

<HTML>
	<HEAD>
		<meta charset="utf-8"/>
		<link rel="shortcut icon" href="imagen/logolib.jpgs">
		 <meta name="viewport" content="width=955px"/>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="menui.html">
	</HEAD>
	<BODY>
	<HEADER><!--esta es la cabesera-->
	<table >
		<td ><img id="im" src="imagen/logolib.jpg"></td>
		<td id="bus" >  
	        <form action="buscar.php" method="post">                    
	           <input id="vus" type="text" name="buscar">
	           <input id="bu" type="submit" value="Buscar">
	         </form>
       </td>
		<td></td>
	</table>
	</HEADER>
	<nav><!--en el nav es donde va el menu-->
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

		<iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2FRugbyMexicoFMRU%2Fposts%2F1324520154263917&width=500" width="500" height="386" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>

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
    </nav>
	<ASIDE><!--es aui donde iran los vaners / o libros recomendados -->
		<object type="application/x-shockwave-flash" data="baner/Movie1.swf"></object>
        <object type="application/x-shockwave-flash" data="baner/Movie1.swf"></object>
        <object type="application/x-shockwave-flash" data="baner/Movie1.swf"></object>
	</ASIDE>
	<SECTION><!--el section es en donde ira el contenido -->
		
		<div id="con">
			<form action="login.php" method="post" name="form" enctype="multipart/form-data">
				<?php
	          while ($fila=mysqli_fetch_array($mos) ) {
	          	$long=13;
	          	$lonM=substr(strip_tags($fila[Nombre_Libro]), 0, $long);
	          	if (strlen(strip_tags($fila[Nombre_Libro])) > $long)
        			$lonM .= ' ...';
        		?>
				<div class="card">
						<h4> <?php echo "$lonM";?></h4>
	        	    	<img src="data:image/jpg;base64,<?php echo base64_encode($fila[Imagen]);?>" >
	            		 <div class="container">
	                		
	                	</div>
	   				 </div>
	    		 <?php		
				}
				?>
					
		</div>
	 </SECTION>
	</BODY>
</HTML>
