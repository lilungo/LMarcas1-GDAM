<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" />
        <title>Multimedia</title>
        <meta name="Title" content="Multimedia"/>
        <meta name="description" content="Introducción de vídeo y audio en la WEB con HTML" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Hugo Rivera" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../HTMLCSS/css/reset.css">
        <link rel="stylesheet" href="../HTMLCSS/css/13-multimedia.css">

    </head>

    <body>

        <br>
        <div>
        <?php
            include 'menu.php';
        ?>
        </div>

        <br>

        <header>
            <marquee direction="right">              
                <h1 id="arriba">KILL BILL VOLUMEN 1</h1>
            </marquee>
        </header>

        <main>

            <section class="sc1">

                <img src="Multimedia_archivos/killBill.jpg" alt="Killbill-La venganza">

                <article >

                    <div >

                        <h3>FICHA TÉCNICA</h3>

                        <span >Fecha de estreno:</span> 5 de marzo de 2004 (1h 52min)<br>
                        <span >Dirigida por:</span> Quentin Tarantino<br>
                        <span >Reparto:</span> Uma Thurman, Sonny Chiba, Lucy Liu, más<br>
                        <span >Géneros:</span> Acción, Drama, Suspense<br>
                        <span >País:</span> EE.UU.
                        <br><br>
                        <hr>
                    </div>
                    

                    <div class="div-sin">

                        <h3>SINOPSIS</h3>
                        <p>
                            Película no recomendada a menores de 18 años. En plena celebración de
                            su boda, la Novia sufre un ataque brutal que acaba con la vida de muchos de sus 
                            invitados y también del novio. Mamba Negra estaba embarazada y se sumerge en un largo coma que 
                            durará hasta cuatro años. Después de este trance, la Novia se despierta y recuerda lo ocurrido. 
                            Descubre desconsolada que ha perdido a su hijo y con él todo lo que más quería, así que la sed 
                            de venganza contra los responsables de aquella tragedia será infinita.
                        </p>
                        <hr>
                    </div>
                    

                    <div>

                        <h3>The Killer Song</h3>

                        <audio controls> 
                            <source src="Multimedia_archivos/kill-bill-ringtone.wav" type="audio/wav">
                            <source src="Multimedia_archivos/kill-bill-ringtone.mp3" type="audio/mpeg">
                            <source src="Multimedia_archivos/kill-bill-ringtone.ogg" type="audio/ogg">
                        </audio>

                    </div>

                </article>

            </section>

            <section>

                <h2>Kill Bill Vol Trailer Oficial</h2>

                <video  controls poster="imgs/camaKill.jpg"> 
                    <source src="Multimedia_archivos/Kill%20Bill%20Volume%201-OT-video.mp4" type="video/mp4">
                </video>

            </section>

            

        </main>

        <br><br><hr>
        <span></span>

        <footer>
            <p><a href="#arriba"> UP!</a></p>
        </footer>
  
    </body>
    
</html>

