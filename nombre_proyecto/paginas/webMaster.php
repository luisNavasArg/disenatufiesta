<!--formularios para crear y borrar base de datos para el webMaster-->
<div id="crear"><!--abrimos la etiqeta div con el id crear-->
<!--abrimos la etiqueta del formulario con su atributo action que dice 
hacia que pagina vamos a enviar los datos y el metodo post para que oculte 
los datos de lo contrario los muestra en el navegador--> 
<form action="../sql/baseDatos.php" method="post">
<!--una etiqueta y un campo de texto para capturarlo al momento de enviar los datos del formulario-->
<label>Nombre de la base de datos:</label><input type="text" name="name"><br>
<!--Un botón para enviar los valosres de nuestro formulario-->
<input type="submit" value="Crear" name="Enviar">
</form>
</div>

<div id="borrar">
<form action="../sql/baseDatos.php" method="post">
<label>Nombre de la base de datos:</label><input type="text" name="name"><br>
<input type="submit" value="Borrar" name="Enviar" >
</form>
</div>




