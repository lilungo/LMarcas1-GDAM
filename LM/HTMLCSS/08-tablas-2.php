<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
    
        <meta charset="utf-8">
		<link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/ico" href="favicon.ico">
        <meta name="language" content="es" />
        <title>Tablas 2</title>
        <meta name="Title" content="Tablas 2"/>
        <meta name="description" content="Ejercicios con tablas." />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Hugo Rivera" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="../HTMLCSS/css/reset.css">
		<link rel="stylesheet" href="../HTMLCSS/css/08-tablas-2.css">
    </head>

    <body>

	    <header>

	        <h1 id="arriba"> <a></a>Tablas - 2</h1>
	        <hr>

        </header>

        <?php
	    include 'menu.php';
	    ?>

        <main>
		
		    <section>

			<article>

                <p>Dos atributos bastante utilizados en las tablas son <b>rowspan</b> y <b>colspan</b>, ambos nos permiten fusionar celdas para conseguir tablas más complejas:</p>
			
                <ul>
			        <li><b>Tabla con dos columnas simples fusionadas</b>, empleando <i><b>colspan</b></i><b></b></li>
			    </ul>

                <table>

		            <tr>
			            <td colspan="2">Las Dos Columnas Fusionadas</td>
		            </tr>
		            <tr>
			            <td>Celda normal</td>
			            <td>Celda Normal</td>
		            </tr>

	            </table>

	                <ul>
	                    <li><b>Tabla con dos filas simples fusionadas</b>, empleando <i><b>rowspan</b></i><b></b></li>
	                </ul>

	                <table>

		            <tr>
			            <td>Celda Normal</td>
			            <td rowspan="2">Las dos filas Fusionadas</td>
		            </tr>
                    
		            <tr>
			            <td>Celda Normal</td>
		            </tr>

	            </table><br><br><br>

                <h2><b>COMPARATIVA DE REPRODUCTORES MP3</b></h2>

	            <table>

	                <caption>Tabla comparativa de las características técnicas de los reproductores MP3</caption>

	                <tr>
		                <th></th>
		                <th colspan="3"> 
                            <img width="60" height="60" src="imgs/mp3-blanco.jpg" alt="MP3 blanco"/><img width="40" height="60" src="imgs/mp3_negro.png" alt="MP3 negro"/><br/>
		                    <strong>MP3 mini</strong> 
                        </th>
		                <th colspan="2">
                            <img width="80" height="80" src="imgs/mp3-blanco.jpg" alt="MP3 blanco"/><img width="50" height="80" src="imgs/mp3_negro.png" alt="MP3 negro"/><br>
                            <strong>MP3 grande</strong> 
                        </th>
	                </tr>

	                <tr>
		                <th>Capacidad de almacenamiento</th>
		                <td>4GB <br/>(1.000 canciones)</td>
		                <td>8GB <br/> (2.000 canciones)</td>
		                <td>16GB <br/>(4.000 canciones)</td>
                        <td>30GB <br/>(7.500 canciones)</td>
		                <td>80GB <br/>(20.000 canciones)</td>
	                </tr>

	                <tr>
		                <th>Opinion de los usuarios</th>
		                <td><img src="imgs/pulgararriba.png" width="50" height="50" alt="cara feliz"></td>
		                <td><img src="imgs/pulgararriba.png" width="50" height="50" alt="cara feliz"></td>
		                <td><img src="imgs/pulgarabajo.png" width="50" height="50" alt="cara triste"></td>
		                <td><img src="imgs/pulgararriba.png" width="50" height="50" alt="cara feliz"></td>
		                <td><img src="imgs/pulgarabajo.png" width="50" height="50" alt="pulgar abajo"></td>
	                </tr>

	                <tr>
		                <th>Pantalla</th>
		                <td colspan="3">LCD de 3 cm (diagonal) con retroiluminación</td>
		                <td colspan="2">LCD de 6 cm (diagonal) con retroiluminación</td>
	                </tr>

	                <tr>
		                <th rowspan="2">Tiempo de carga</th>
		                <td rowspan="2" colspan="3">Unas 3 horas</td>
		                <td colspan="2">Unas 4 horas</td>
	                </tr>

	                <tr>
		                <td colspan="2">Unas 2 horas para alcanzar el 80% de la capacidad</td>
	                </tr>

	            </table>

	        </article>

            </section>

        </main>

        <br><br><br><hr>

        <footer>

            <p><a href="#arriba">SUBIR</a></p>
	
        </footer>

    </body>

</html>