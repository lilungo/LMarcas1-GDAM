<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" />
        <title>Formulario 3</title>
        <meta name="Title" content="Formulario 3"/>
        <meta name="description" content="Formularios pruebas" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Hugo Rivera" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../HTMLCSS/css/reset.css">
        <link rel="stylesheet" href="../HTMLCSS/css/11-formularios-3.css">
    </head>

    <body>

        <header>
        
            <h1 id="arriba">Formularios 3</h1>
            <hr>

        </header>
        
        <?php
            include 'menu.php';
        ?>
        
        <br>

        <main>

            <form class="f1" action="google.com" method="post" target="_blank">
      
                <label for="Buscar">Buscar en google</label>
                <input id="Buscar" type="search" name="Búsqueda-Google" placeholder="Escribe el término de busqueda" autofocus>
                <input type="submit" value="Buscar en Google >>">

            </form>

            <br><br>

            <form action="amazom.com" method="post" target="_blank">

                <input type="search" name="Búsqueda-Amazon" placeholder="Buscar en Amazon" >
                <input type="submit" value="Buscar en Amazón >>">

            </form>
   
            <br><br><br>

            <form action="mailto:hugorivera060904@gmail.com" method="post" target="_blank">

                <img class="img1" src="https://www.tudiras.com.es/media/media/784/2203/81648/taza-sublimacion-naranja-amarilla-roja-negra-azul-rosa-verde-interior-y-asa-alta-calidad-premium-aaa-resistente-al-lavavajillas-y-microondas-personalizacion-sublimacion-resistente-.jpg" alt="Tazas">

                <fieldset>

                    <legend>Elige la cantidad y color de tu taza</legend>

                    <h3>Actualmente en existencias</h3>

                    <meter value="7" min="0" max="10"></meter>
                    <br>

                    <p>**Máximo 10 unidades por pedido</p>
                    <br>

                    <label for="tazas-?">Cantidad de tazas</label>
                    <input id="tazas-?" type="number" name="cantidad-de-tazas" min="1" max="10" required >
                    <br><br>
     
                    <label for="color">Selecciona el color</label>
                    <input id="color" type="color" name="color" value="#FF000D">
                    <br><br>

                    <label for="rango">¿Cuanto te gusta?</label>
                    <input id="rango" type="range" min="0" max="5" value="2.5" step="0.5" onChange="number.value=value;" > 
                    <output id="number">2.5</output>
                    <br><br>

                </fieldset>
 
                <br>
                <br>
                <br>

                <fieldset>

                    <legend>Datos de envío y facturación</legend>
                    
                    <p>*Campos obligatorios</p>

                    <label for="nombre">*Nombre </label>
                    <input type="text" id="nombre" name="Nombre" maxlength="30" placeholder="Máximo 30 caractéres" required>

                    <label for="dirección">*Dirección de entrega</label>
                    <input id="dirección" type="text" name="Direccion" placeholder="Dirección obligatoria/ Max. 80 caracteres" maxlength="80" required>

                    <br><br>

                    <label for="día">Día de entrega</label>
                    <input id="día" type="date" min="2023-01-01" max="2023-01-30" name="Dia entrega">

                    <label for="hora">Hora de entrega (Entre las 8:00 - 17:00)</label>
                    <input id="hora" type="time" min="8:00:" max="17:00:" name="Hora de entrega">

                    <br><br>
             
                    <label for="email">*Email de contacto</label>
                    <input id="email" type="email" name="email" placeholder="abc@abc.com" required>

                    <label for="telefono">Teléfono</label>
                    <input id="telefono" type="text" name="tfno" placeholder="123 456 789" value="(+34)" maxlength="14">
              
                </fieldset>

                <fieldset>

                    <legend><h2>Tarjeta de crédito</h2></legend>

                    <label for="tarjeta-de-credito">*Número de Tarjeta</label>
                    <input id="tarjeta-de-credito" type="text" required>

                    <br><br>

                    <label for="fecha-de-caducidad">*Fecha caducidad </label>
                    <input id="fecha-de-caducidad" type="month" name="fecha-de-caducidad">
           
                    <br><br>

                    <label for="codigo-de-seguridad">Security Code  </label>
                    <input type="number" name="codigo-de-seguridad" id="codigo-de-seguridad" placeholder="Security Code">
          
                    <br><br>

                </fieldset>

                <br><br>

                <button type="submit">Finalizar pedido >></button>

            </form>

            <br><br>
   
        </main>
        
        <hr>

        <footer>

            

        </footer>
        
    </body>

</html>