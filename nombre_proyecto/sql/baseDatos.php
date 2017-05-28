<?php  //Abrimos con las etiquetas para php
//creamos una variable para recibir el valor de un input del formulario 
$recibo =$_POST["Enviar"];
//creamos otra variable para recibir el valor de un input de tipo texto y la guardamos en ella 
$nombre=$_POST["name"];
//con ciclo estructura de seleccion para que se ejecute si es verdad la variable en este caso
//if el valor de mi variable recibo es crear 
if($recibo=="Crear"){
//uso el siguiente sql para crear la base de datos
$crear="CREATE DATABASE";
//llamamos a la función crear base de datos y le pasamos los parametros (nombre de la base de datos , el sql y la variable  crear)
crearBaseDatos($nombre, $crear,$recibo);
}// caso contrario si el input del formulario tiene como valor borrar 
else if($recibo=="Borrar"){
//creamos la variable para el sql
$borra="DROP DATABASE IF EXISTS";
//lamamos a nuestra función crearBaseDatos y le pasamos los valores (nombre de la base de datos , el sql y la variable  borra)
crearBaseDatos($nombre, $borra,$recibo);
}
//función creada para crear y borrar base de datos desde nuestra web la misma la podrá manipular nuestro web master 
function crearBaseDatos($nombren,$otro,$recibo){
$servername = "localhost"; //nuestro nombre del servidor
$username = "luisNavas"; //nuestro usuario para mysql
$password = "123456"; //y nuestra clave
// Creamos la conexión
$conn = mysqli_connect($servername, $username, $password);
// verificamos con nuestro ciclo if para escribir en nuestro navegador si nos conectamos o no
if (!$conn) {//acá si no estamos conectados enviamos conexión fallida con la explicación de sql
    die("Conexión fallida:". mysqli_connect_error());
}
$sql = $otro." ".$nombren;//concatenamos nuestras variables por ejemplo: la variable sql = CREATE DATABASE nombre_de_la-base_de_datos;
if (mysqli_query($conn, $sql)) {
    echo "Se pudo ".$recibo." su base de datos de forma satisfactoria";// aca informamos si se pudo crear o borrar la base de datos
} else {
    echo "Error creando su base de datos: " . mysqli_error($conn);
}
mysqli_close($conn);
}
?>

