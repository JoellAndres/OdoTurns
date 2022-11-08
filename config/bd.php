<?php
$host="localhost";
$bd="odoturns";
$usuario="root";
$contrasenia ="";

try{
    $conexion= new PDO("mysql:host=$host;dbname=$bd",$usuario,$contrasenia);
    if($conexion){
      echo "conectado al sistema...";
    }
} catch(Exception $ex){
  echo $ex->getMessage();
}
?>