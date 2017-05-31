<?php
session_start();

//var_dump($_POST);
//$_SESSION["username"]="luis";
//$_SESSION["password"]="123456";

//con isset podemos validar que estan accediendo por medio del formulario
if(isset($_POST['submit'])){
//acceder a nestra base de datos para verificar los usuarios y su clave
$username="luis";
$password="123456";
//validamos que no esten vacio el usuario y la clave
if((isset($_POST['nombre']))&&(isset($_POST['password']))){
//capturamos en una variable el usuario y clave que llegan del formulario
$nombre=$_POST['nombre'];
$pass=$_POST['password'];
echo('existen '.$nombre.' y '.$pass);
}else{
header("location: ../index.php");
}
}else{
header("location: ../index.php");
}



?>
