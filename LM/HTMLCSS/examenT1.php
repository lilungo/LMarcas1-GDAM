<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" />
        <title>Torrente 2</title>
        <meta name="Title" content="Multimedia"/>
        <meta name="description" content="Página HTML sobre Torrente 2" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Hugo Rivera" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../HTMLCSS/css/reset.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
         <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@1,100&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&display=swap" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
        <link rel="stylesheet" href="../HTMLCSS/css/examenT1.css">

    </head>

    <body>

        <br>
        <div>
        <?php
            include 'menu.php';
        ?>
        </div>

        <br>

        <header class="animate__animated animate__bounce">
                    
                <h1 id="arriba">examenT1</h1>
            
        </header>

        <main>

            <section class="sc1">

                <img class="torrente" src="imgs/torrente2.jpg" alt="Torrente 2: Mision en Marbella">

                <article >

                    <div class="fuente2">

                        <h3 class="spain">FICHA TÉCNICA</h3>

                        <span >Fecha de estreno:</span> 30 de marzo de 2001 (1h 39min)<br>
                        <span >Dirigida por:</span> Santiago Segura<br>
                        <span >Reparto:</span> Santiago Segura, Gabino Diego, Tony LeBlanc...<br>
                        <span >Géneros:</span> Comedia, Cine de aventuras, novela policíaca.<br>
                        <span >País:</span> España
                        <br><br>
                        <hr>
                    </div>
                    

                    <div class="div-sin">

                        <h3 class="sinop">SINOPSIS</h3>
                        <p class="fuente1">
                            Película no recomendada a menores de 18 años. Torrente, nuestro protagonista se instala en la Costa del Sol y comienza su trabajo como investigador privado. Junto a Cuco intentará desenmascarar a un narcotraficante de armas, un tal Spinelli, que tiene la intención de destruir la preciosa ciudad de Marbella si no le pagan 2.000 millones de pesetas.
                        </p>
                        <hr>
                    </div>
                    

                    <div>

                        <h3 class="intro">Intro Torrente 2 </h3>

                        <audio controls> 
                            <source src="Multimediaaa/introtorrente2.mp3" type="audio/wav">
                            <source src="Multimedia_archivos/kill-bill-ringtone.mp3" type="audio/mpeg">
                            <source src="Multimedia_archivos/kill-bill-ringtone.ogg" type="audio/ogg">
                        </audio>

                    </div>

                </article>

            </section>

            <section>

                <h2 class="trailer">Torrente 2 Trailer oficial</h2>

                <video  controls poster="imgs/torrentito.jpg"> 
                    <source src="Multimediaaa/torrente2trailer.mp4.mp4" type="video/mp4">
                </video>

            </section>

            <form action="mailto:hugorivera060904@gmail.com" enctype="text/plain" method="post" target="_blank">

                <p >Encuesta de opinióm</p>

                <span></span>

                <label for="name">Nombre y Apellidos
                    <input id="name" type="text" name="name" placeholder="Nombre y Apellido" required>
                </label>

                <label for="email">Email
                    <input id="email" type="email" name="email" placeholder="correo@correo.com" required>
                </label>

                <div >
                <fieldset>
                    

                    <label for="rango">¿Que puntuación le pondría a la película?</label>
                    <input id="rango" type="range" min="0" max="10" value="2.5" step="0.5" onChange="number.value=value;" > 
                    <output id="number">5</output>
                    <br><br>
</fieldset>
                </div>

                <div>
                <label for="descripcion">Porfavor, escriba una reseña sobre la película.</label>
                    <br>
                    <textarea name="descripcion" id="descripcion" rows="5" cols="40"></textarea>

                 

                </div>

                <div >

                    <label for="Condiciones_legales">Acepto las condiciones legalaes</label>
                    <input type="checkbox" id="Condiciones_legales">

                </div>
                
                <input name="enviar datos" type="submit" value="Mandar encuesta >> ">
            </form>

        </main>

        <br><br><hr class="hr">
        <span></span>

        <footer>
            <p><a href="#arriba"> UP!</a></p>
        </footer>
  
    </body>
    
</html>
