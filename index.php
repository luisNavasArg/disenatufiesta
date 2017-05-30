<!DOCTYPE Html>
    <html>
        <meta charset="utf-8">
        <head>
            <title> Diseña tu fiesta</title>
            <link rel="stylesheet" href="css/estilo.css">
            <script src="js/Java.js"></script>
         
        </head> 
     <body onload="">
         
         
    <?php 
    include("paginas/menu.php");
    ?>
         <div id="formulario">
            <a id="X" onclick="Cerrar()" > Cerrar X</a>
            <form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
               
                    <label for="name">Tu nombre:</label><br/>
                    <input id="name" class="input" name="name" type="text" value="" size="30" /><br/>
               
                    <label for="email">Tu email:</label><br/>
                    <input id="email" class="input" name="email" type="text" value="" size="30" /><br/>
                
                    <label for="message">Tu mensaje:</label><br/>
                    <textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br/>
                
                    <input id="submit_button" type="submit" value="Enviar Mensaje"/>
            </form>
            

         </div>
    </body>
</html>
 
 
