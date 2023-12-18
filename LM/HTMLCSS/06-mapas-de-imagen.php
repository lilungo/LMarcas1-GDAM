<!DOCTYPE html>
<html dir="ltr" lang="es">
  <head>
    <meta charset="utf-8" />

	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Mapa de imagenes</title>

    <meta name="title" content="Mapas de imágenes" />
    <meta
      name="description"
      content="Mapa político con webcams, mapeado de imagen"
    />

    <meta name="keywords" content="Etiquetado html5, mapas de imágenes" />

    <meta name="author" content="Hugo Rivera" />
	<link rel="stylesheet" href="../HTMLCSS/css/reset.css">
	<link rel="stylesheet" href="../HTMLCSS/css/06-mapas-de-imagenes.css">
  </head>
<body>
<header>


	<h1> <a id="titular"></a>Mapas de imágen</h1>
			
	<hr>
</header>
	<?php

	include 'menu.php';
	
	
	?>
	
	<main>
		
			
		<section>
			<article>
  
    
		
		<img class="cam" src="imgs/webcamm.png" alt="Webcam" >WEBCAM VIEWER
			<p>Desplázate sobre el Mapa para conectar con la webcam de la zona en cuestión, las cámaras se abrirán en nuevas pestañas.</p>
			<p>
				<img class="mapa" src="imgs/mapapolitik.png" alt="Desplazate sobre los puntos en el mapa para visualizar la cámara web" usemap="#webcams" >
<map name="webcams">

    
        <area shape="rect" coords="563,43,643,95" href="https://www.webcamsdeasturias.com/asturias/centro/gijon/gijon/la-escalerona-playa-de-san-lorenzo-hd/148/" target="_blank" title="Playa de San Lorenzo, Gijón" alt="Gijón">
    
    
    
        <area shape="rect" coords="751,361,823,419" href="https://www.skylinewebcams.com/es/webcam/espana/comunidad-de-madrid/madrid/puerta-del-sol-tio-pepe.html" target="_blank" title="Madrid" alt="Madrid">
    
         <area shape="rect" coords="981,645,1047,707" href="https://www.skylinewebcams.com/es/webcam/espana/region-de-murcia/murcia/manga-mar-menor.html" target="_blank" title="La Manga del Mar Menor, Murcia" alt="Murcia">
                        
        
        <area shape="rect" coords="683,771,745,818" href="https://www.skylinewebcams.com/es/webcam/espana/andalucia/malaga/marbella.html" target="_blank" title="Marbella, Málaga" alt="Marbella">
    
       
				
	</map>
			</p>
			<p></p>
		
		</article>
		<hr />
	</section>
	
	</main>
	
	<footer >
		<p ><small>Hugo Rivera</small></p>
		<p ><a href="#arriba">SUBIR</a></p>
	</footer>
			
</body>

</html>
