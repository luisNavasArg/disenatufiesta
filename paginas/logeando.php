<?php
session_start();

//var_dump($_POST);
//$_SESSION["username"]="carlos";
//$_SESSION["password"]="123456";


if(isset($_POST['submit'])){
$username="carlos";
$password="123456";
if((isset($_POST['nombre']))&&(isset($_POST['password']))){

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
