<!DOCTYPE html>
<html dir="ltr" lang="en">

    <head>
    
        <meta charset="utf-8">
        <link rel="icon" type="image/png" href="favicon.ico" sizes="16x16"/>
        <meta name="language" content="es" />
        <title>Formulario 1</title>
        <meta name="Title" content="Formulario 1" />
        <meta name="description" content="Formularios pruebas" />
        <meta name="keywords" content="HTML, HTML5, CSS, CSS3, JAVASCRIPT, PHP, SQL, Bases de datos, Hease, WEB, Accesibilidad" />
        <meta name="distribution" content="global" />
        <meta name="author" content="Hugo Rivera" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../HTMLCSS/css/reset.css">
        <link rel="stylesheet" href="../HTMLCSS/css/09-formularios-1.css">
    </head>

    <body>

        <header>
    
            <h1 id="arriba">Formularios - I - Etiquetas universales</h1>
            <hr>

        </header>

        <?php
	        include 'menu.php';
	    ?>

        <br>

        <main>
		
		    <div class="hd-div">

                    <img class="hd-divimg" src="imgs/form.jpg" width="240" height="235" alt="Formulario" >
                    <h2 class="st"> Rellena tu perfil</h2>
               </div>
                    <br><br>

                    <form action="mailto:hugorivera060904@gmail.com" method="post" target="_blank"> 

                 
                    <div class="fm-div">

                
                                
                   <fieldset> 

                      <legend>Datos Personales</legend> 

                      <label for="Nombre">Nombre</label> 
                                   
                      
                      <p><input id="Nombre" type="text"   size="40" maxlength="30" placeholder="Nombre"></p>

                      <label for="Apellidos">Apellidos</label>
                       <p><input type="text" id="Apellidos" name="Apellidos"  size="40" maxlength="80" placeholder="Apellidos"></p> 

                        <label for="Contraseña"> Contraseña</label>
                            <p><input type="password" id="Contraseña"  maxlength="8" placeholder="Máximo 8"></p>

                         <label for="DNI">DNI</label>
                            <p><input type="text" id="DNI"  maxlength="9" placeholder="Máximo 9"></p> 

                        <label for="Sexo">
                            <p>Sexo</p>
                        </label>
                                    <hr>             
                          <input type="radio" name="Sexo" value="Hombre"> Hombre <p>
                          <input type="radio" name="Sexo" value="Mujer">Mujer<p>
                          <input type="radio" name="Sexo" value="Otro"> Otro <br>

                     </fieldset>
               
                            

                     <fieldset>

                       <legend> Otros Datos</legend>
                          <label for="Pais">País</label>
                             <p>
                              <select name="Pais" id="Pais">

                              <option value="">-Selecciona un valor-</option> 
                             <option value="España">España</option>
                            <option value="Alemania">Alemania</option>
                            <option value="Francia">Francia</option>
                            <option value="Italia">Italia</option>
                        </select>
                    </p>

                        <h2>Temas de interés</h2>
                        <p>*Puedes seleccionar más de una opción<br>
                        
                        si mantienes pulsada la tecla CTRL</p>
                 
                     <select multiple size="6" id="Intereses" name="Temas_de_Interes">
                        <option value="Nuevas tecnologías">Nuevas tecnologías</option>
                       <option value="Deporte">Deporte</option>
                       <option value="Turismo">Turismo</option>
                       <option value="Informática de consumo">Informática de consumo</option>
                       <option value="Decoración">Decoración</option>
                       <option value="Formación">Formación</option>
                      <option value="Oposiciones">Oposiciones</option>
                 </select>

                 <br><br>

                   <label for="Navegador_Preferido">Navegador Preferido</label> <br><br>

                    <select id="Navegador">

                    <option value="Sin Seleccionar">Pulsa para Seleccionar</option>
                    <option value="Chrome" id="Chrome">Google Chrome</option>
                    <option value="Firefox" id="Firefox">Firefox</option>
                    <option value="Safari" id="Safari">Safari</option>
                    <option value="Opera" id="Opera">Opera</option>
                    <option value="Other" id="Otro_Navegador">Otro</option>

                </select>
                    
                 <br><br>
                        
                    <label for="Entorno">Entorno de Desarrollo</label><br><br>
                    <select id="Entorno" name="Entorno" >

                    <option value="No respuesta">Pulsa para Seleccionar</option>
                    <option value="Windows" id="Windows">Windows</option>
                    <option value="Mac" id="Mac">Mac</option>
                    <option value="Linux" id="Linux">Linux</option>
                    <option value="Otro" id="Otro">Otro</option>
                       
                </select>

                </fieldset>  <br><br>

                </div>            

                            
                    
                 <br/>
                 <div class="enviar"> 
                    <input id="Suscribir" type="checkbox" value="Si" checked disabled> 
                    <label for="Suscribir"> <i>Suscribirme al boletín de novedades</i></label>

                 </div>           
                            
                        
                            

                 <br>
                 <div>
                    <input type="submit" id="Enviar_datos" value="Enviar Datos">
                    <input width="40" height="40" type="image" src="imgs/enviar.png" alt="Enviar" >
                    <button id="borrar_datos"> << Borrar los datos</button>
                </div>    
                           

                            
                     <hr>
                    
                           
   
                    </form>

                

            
            <hr>
            <p class="up"><a href="#arriba">SUBIR</a></p>
        </main>

        <footer>
            <p>Hugo Rivera</p>
        </footer>

    </body>

</html>