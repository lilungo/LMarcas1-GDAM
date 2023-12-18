<!DOCTYPE html>


<html dir="ltr" lang="es">

  <head>

    <meta charset="utf-8" />
	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
	<link rel="icon" type="image/ico" href="favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Imagenes 2</title>

    <meta name="title" content="Imágenes-2" />
    <meta
      name="description"
      content="href con Imágenes"
    />

    <meta name="keywords" content="Etiquetado html5, enlaces, imágenes" />

    <meta name="author" content="Hugo Rivera" />
	<link rel="stylesheet" href="../HTMLCSS/css/reset.css">
	<link rel="stylesheet" href="../HTMLCSS/css/05-imagenes-2.css">


  </head>

  

<body>

	<header>
		<h1><a id="arriba"></a>Sobre las imágenes - 2</h1>
		
		<hr>


	</header>

	<?php

include 'menu.php';


?>

<main>
	
		
	<section>
		<article>


		<p>Las imágenes es bastante común encontrarlas relacionadas con la etiqueta de los enlaces para provocar dos comportamientos muy extendidos. Estos son dos fundamentalmente:</p>
		
	<div class="div">
            <a href="https://www.google.es/" target="_blank">
				
			<img src="imgs/google.jpg" title="Pulsa para ir a la página de Google"></a>

			<div>

			<h3>Imagen cómo máscara del enlace </h3>

		   <p><span><</span> a href="http://www.google.es"; target="_blank";><span><</span> img src="imagen.jpg"; alt="foto"<span>></span>< </ </span>a<span>></span> </p>
    </div>
</div>

<h3>Imagen que conecta con otra imagen (generalmente ampliada) </h3>

		<p><b><i>&lt; a href=&quot;imagen_gran.jpg&quot; target=&quot;_blank&quot;&gt; &lt;img src=&quot;imagen_pq.jpg&quot; /&gt;&lt; /a&gt; </i></b></p>
		<p class="img"><a href="imgs/torrente.jpg" target="_blank"><img src="imgs/torrente.jpg"  alt="miniatura de imágen" title="pulsa para ampliar la imágen"></a>    <a href="imgs/caruso.jpg" target="_blank"><img src="imgs/caruso.jpg" alt="" title="Pulsa para ampliar la imágen"></a></p>
		
		    <p class="pe2">
			
		
               También es bastante común la necesidad de dejar trasparentes algunas partes de la imágen con el objetivo de respetar las imágenes o colores de fondo que hallamos puesto para toda la página web. Las imágenes con zonas transparentes estan en formato<b> *.gif </b>o <b>*.png</b> que son los que conservan dicha particularidad si creas zonas transparentes en las imágenes y las guardas en formato *.jpg te seguiran apareciendo con fondo blanco.

            </p>

				<div class="bmw">
					<p>Imagen sin transparencia</p>

					<img class="imgs" src="imgs/logobmw.jpg" alt="logo bmw">
               
				    <p > Imagen con trasparencia</p>
					

					<img class="imgs"  src="imgs/logobmww.png" alt="logo bmw">

                </div>

		<p class="pe">Para crear zonas trasnparentes en una imágen necesitas alguna aplicación que te permita seleccionar sobre la imágen el color a &quot;transparentar&quot; y una vez realizada la operación guardarla en el formato adecuado. Evidentemente para apreciar el efecto es necesario disponer de al menos algún color de fondo para la página, y que en ésta ocasión y dado que no hemos visto CSS, lo haremos directamente agregando el atriuto bgcolor=&quot;#RRGGBB&quot; en la etiqueta &lt;BODY&gt;</p>

		<h3><img class="gif" src="imgs/htmll.gif"  alt="HTML GIF">También es posible la creación de efectos e imágenes animadas con multitud de herramientas online, prueba a crear alguno con algunas de éstas aplicaciones online:</h3>
					
					<ul>
					  <li><a href="http://www.online-image-editor.com/" target="_blank">http://www.online-image-editor.com/</a></li>
					  <li><a href="http://picasion.com/es/" target="_blank">http://picasion.com/es/</a></li>
					  <li><a href="https://www.photopea.com/" target="_blank">Para el tratamiento de imágenes online (Photopea)</a></li>
					</ul>
					
		<p>&nbsp;</p>
<hr />

</article>
</section>

</main>

<footer>
	<p class="cpr">Hugo Rivera</p>
</footer>
		<p class="cpr"><a href="#arriba">SUBIR</a></p>
</body>

</html>
