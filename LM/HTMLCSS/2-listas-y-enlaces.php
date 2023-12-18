<!DOCTYPE html>
<html lang="es-ES" dir="ltr">

<head>
  
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/ico" href="favicon.ico">
    <meta name="language" content="es">
  
    <title>Listas y Enlaces</title>
    <meta name="Title" content="desarrollador de aplicaciones multiplataforma y web - nombre y apellido">

    <meta name="description"
        content="Listas y Enlaces HTML/PHP">

    <meta name="keywords"
        content="Java, Python, HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad">

    <meta name="distribution" content="global">

    <meta name="author" content="Hugo Rivera">
   
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">

    <link rel="stylesheet" href="../HTMLCSS/css/2-listas-y-enlaces.css">
   

  

    

   

   




</head>

<body>
    <header>
        <h1>Listas (anidadas) y Enlaces</h1>
       <hr>
    </header>
    <?php
        include 'menu.php'
        ?>
        <main>
        
        <h2>Menú de contenidos</h2>
     <section>
      <article>
        <ul>

<li><b>Inicio</b></li>
<li>
<b>Entorno Cliente</b>

<ul>

                <li>
                    <a href="1-Etiquetado - estructural -y-texto.php">Mi primera página en HTML</a>
                </li> 
                <li>
                    <a href="imgs/cantona.jpg">Pulsa para ver una imagen de mis carpetas</a>
                </li>
                <li>
                <a href="https://s3.sportstatics.com/relevo/www/multimedia/202309/29/media/cortadas/jude-bellingham-celebracion-RqwsjflwqsDHYKqGC6DA8LJ-1200x648@Relevo.JPG">Una imagen que no esta en mis carpetas.</a>
        
         </li>



     </ul>
</li>





<li>
    <b>Tipos documentos habituales</b>
<ol>


                    <li>Word: *.doc o *.docx</li> 
                    <li>Excel: *.xls o *xlsx</li> 
                    <li>PowerPoint: *.ppt o *.pptx</li> 
                    <li>Comprimidos: *.zip, *.rar</li> 
                    <li><a href="https://statics-maker.llt-services.com/lug/documents/2022/12/20/dc88f165-ca86-46fa-a783-49f2f3068107-25.pdf">PDF:</a> *.pdf</li> 


</ol>
</li>

<li><b>Contacto</b>

<dl>


                <dt>Email</dt>
                <dd>
                <a href="mailto:hugorivera060904@gmail.com">nombre@direccion.com</a>
                 </dd>
                <dt>Telefono</dt>
                <dd>900 900 900</dd>
                <dt>Fax</dt>
                <dd>900 900 900</dd>

</dl>
</li>
</ul>

        
       
    
<hr class="borde">
</article>
</section>
</main>

<footer>Hugo Rivera</footer>
</body>

</html>