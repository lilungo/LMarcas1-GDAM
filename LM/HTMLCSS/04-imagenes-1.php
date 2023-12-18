<!DOCTYPE html>
<html dir="ltr" lang="es">

<head>
    <meta charset="utf-8">

    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/ico" href="favicon.ico">

    

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Imágenes-1</title>
    <meta name="title" content="Conceptos básicos sobre las imágenes">
    <meta name="description"
        content="Imágenes y sus atributos con HTML">
    <meta name="keywords" content="imágenes con html, imágenes">
    <meta name="author" content="Hugo Rivera">
	<link rel="stylesheet" href="../HTMLCSS/css/reset.css">
	<link rel="stylesheet" href="../HTMLCSS/css/04-imagenes-1.css">
</head>



<body>


<header>



	<h1>Sobre las imágenes - 1</h1>
		

	
		<hr>

	<span id="arriba"></span>
</header>
	<?php

include 'menu.php';

?>
	<main>
		

		
	<p>La etiqueta fundamental para insertar una imágen en una página web es &lt<span class="img">img</span>&lt. </p>
		<p class="img1"><img src="imgs/captura.jpg" alt="Captura de pantalla de mi web favorita: www.gimp.org"> 
			Sin embargo sólo con la etiqueta no es suficiente, necesitamos insertar los atributos básicos que me van a permitir "conectar" con la imágen en sí y mostrar cierta información relativa a la imágen en el caso de que la imágen no se cargue o por cuestiones de accesibilidad.</p>

			<br>
			<br>
		<h3>Dichos atributos fundamentales son:</h3>
		
		

		<ul>
			<li class="str">SRC="Ruta a la imágen"</li>
			<li class="str">ALT="Descripción de la imágen"</li>
			<li class="str">WIDTH="Ancho de la imágen en px o %"</li>
			<li class="str">HEIGHT="Altura de la imágen en px o %"</li>
		</ul>
		<p>Por lo tanto una etiqueta básica completa para insertar la captura que te muestro a continuación quedaría asi:</p>
		<h3>&lt;img src="captura.jpg" alt="captura de pantalla de mi web favorita:www.miweb.es" /&gt;</h3>
		<p><img class="bombilla" src="imgs/bombilla.jpg" alt="Bombilla" >Otros atributos muy utilizados pero no recomendados a día de hoy para la maquetación (mejor con css), pero que todavía se ven en código de manera frecuente son:</p>
		<ul>
			<li><b>HSPACE</b>="Define un margen horizontal, por ambos lados de la imágen""</li>
			<li><b>VSPACE</b>="Define un margen horizontal, por ambos lados de la imágen"</li>
			<li><b>ALIGN</b>="Alineación de la imágen", éste atributo admite varios valores pero los más comunes son <b>left</b> y <b>right</b>
				<p>Sin embargo para alinear la imagen la etiqueta imágen debe estar en el código por delante de la primera letra de la primera línea del párrafo u objeto al que se quiere alinear, es decir, la etiqueta que yo he empleado para la imágen de la bombilla es la siguiente:</p>
			</li>
		</ul>
		<p class="strong"> <span><</span> img src="/bombilla.jpg" width="300" height="189" alt="" align="left" hspace="20"<span>></span></p>
    
		<p ><a href="#arriba">SUBIR</a></p>
	</main>
</body>

</html>