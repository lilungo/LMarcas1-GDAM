<!DOCTYPE html>
<html dir="ltr" lang="es">
  <head>
    <meta charset="utf-8" />

	<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/ico" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Tablas 1</title>

    <meta name="title" content="Tablas - 1" />
    <meta
      name="description"
      content="Etiquetas fundamentales para tablas en HTML">

    <meta name="keywords" content="Etiquetado html5, tablas" >

    <meta name="author" content="Hugo Rivera" >
	<link rel="stylesheet" href="../HTMLCSS/css/reset.css">
<link rel="stylesheet" href="../HTMLCSS/css/07-tablas-1.css">

  </head>

<body>

<header>

<h1 id="arriba">
	Tablas - I
</h1>

</header>

<?php

	include 'menu.php';
	
	
	?>

<main>
	
	
		<table class="table1" >
		  <caption>Presupuesto Home cinema </caption>
			<tr>
				<th>Nombre del producto</th>
				<th>Precio unitario</th>
				<th>Unidades</th>
				<th>Subtotal</th>
			</tr>
			<tr>
				<td>TV LED LG 65UR78006</td>
				<td>579</td>
				<td>1</td>
				<td>579</td>
			</tr>
			<tr>
				  <td>Gafas 3D activas Xgimi G105L</td>
				  <td>29,90</td>
				  <td>4</td>
				  <td>219,96</td>
			</tr>
			<tr>
				  <td>Barra de sonido Polkaudio 3000 IHT</td>
				  <td>289,90</td>
				  <td>1</td>
				  <td>119,60</td>
			</tr>
			<tr>
				  <td>Soporte para TV ultra planos GISAN SL 54</td>
				  <td>159</td>
				  <td>1</td>
				  <td>159</td>
			</tr>
			<tr>
				  <th>TOTAL</th>
				  <td>-------</td>
				  <td>12</td>
				  <th>1381,9</th>
			</tr>
		</table >

	<p>*Toda la información relativa a los artículos seleccionados en <a href="https://www.elcorteingles.es/" title="Ir a la web de el corte inglés: Electronica de consumo" target="_blank">www.elcorteingles.es/</a></p>

<h3><b>Se adjunta tabla representativa.</b></h3>

	<p><i>*Todos los precios incluyen IVA</i></p>
	<div class="div">
		<table class="table2" >
		  <caption>
			Características de su selección y precios actualizados
		  </caption>
			  <tr >
				<th>Nombre y datos del producto</th>
				<th>Imagen </th>
			  </tr>
			  <tr>
				<td>
					<p><a href="https://www.elcorteingles.es/electronica/A47613894-tv-led-164-cm-65-lg-65ur78006-4k-hdr10-dolby-digital-plus-smart-tv-webos23/?parentCategoryId=999.51570013&color=Grafito" target="_blank">TV LED LG 65UR78006</a></p>
				<p>PVP recomendado <del> >849 €</del></p>
			<h2>Precio actual 579</h2>
		</td>
				<td>
					<img class="tv" src="https://cdn.grupoelcorteingles.es/SGFM/dctm/MEDIA03/202304/12/00114842410491____3__1200x1200.jpg?impolicy=Resize&width=967" alt="TV" >
				</td>
			  </tr>
			  <tr>
				<td><p><a href="https://www.elcorteingles.es/electronica/A44897385-gafas-3d-activas-xgimi-g105l/?s=gafas%203d&stype=text_box" target="_blank">Gafas 3D activas Xgimi G105L</a></p>
				<p>PVP recomendado <del >29,90€</del></p>
			<h2>Precio actual 29,90€ </h2>
		</td>
				<td><img class="gafas" src="https://cdn.grupoelcorteingles.es/SGFM/dctm/MEDIA03/202208/12/00111411105106____1__1200x1200.jpg?impolicy=Resize&width=967" alt="Gafas 3D"></td>
			  </tr>
			  <tr>
				<td><p><a href="http://www.fnac.es/Polk-IHT3000-Barra-de-Sonido-Wireless-Accesorios-Electronica-Accesorios-de-Audio/a399030#" target="_blank">Barra de sonido Polkaudio 3000 IHT</a></p>
			<h2>Precio actual 289,90€</h2></td>
				<td><img class="barra" src="imgs/barradesonido.jpg" alt="Barra de sonido"></td>
			  </tr>
			  <tr>
				<td><p><a href="https://www.elcorteingles.es/gisan/electronica/accesorios-tv/?gclid=Cj0KCQjw06OTBhC_ARIsAAU1yOWKFQfUmYXwPeshGNvQAeFoTQUx78vO2aE7DiZzoLBkIB3Kfq-nRrYaAgpsEALw_wcB&gclsrc=aw.ds"  target="_blank">Soporte para TV ultra planos GISAN SL 54</a></p>
				<p>PVP recomendado <del >199 €</del></p>
			<h2>Precio actual 159€</h2></td>
				<td><img class="soporte" src="imgs/soporte.jpg" alt="Soporte TV"></td>
			  </tr>
	
		</table>
		</div>
		
	
	<p>&nbsp;</p>
	
		<hr> 
	
	
	</main>
	
	<footer>
		<a href="#arriba">SUBIR</a>
	</footer>
	
</body>

</html>