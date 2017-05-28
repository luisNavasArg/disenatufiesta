<?php
$recibo =$_POST["Enviar"];

$nombre=$_POST["name"];
if($recibo=="Crear"){
$crear="CREATE DATABASE";
crearBaseDatos($nombre, $crear,$recibo);
}
else if($recibo=="Borrar"){
$borra="DROP DATABASE IF EXISTS";
crearBaseDatos($nombre, $borra,$recibo);
}
function crearBaseDatos($nombren,$otro,$recibo){
$servername = "localhost";
$username = "luisNavas";
$password = "123456";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed:". mysqli_connect_error());
}


$sql = $otro." ".$nombren;
if (mysqli_query($conn, $sql)) {
    echo "Se pudo ".$recibo." su base de datos de forma satisfactoria";
} else {
    echo "Error creando su base de datos: " . mysqli_error($conn);
}

mysqli_close($conn);
}


?>
