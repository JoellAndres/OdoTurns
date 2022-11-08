<?php
$txtdocumento = (isset($_POST['txtdocumento'])) ? $_POST['txtdocumento'] : "";
$txtclave = (isset($_POST['txtclave'])) ? $_POST['txtclave'] : "";
include("../OdoTurns/config/bd.php");


$sentenciaSQL = $conexion->prepare("SELECT * FROM paciente WHERE documento=:documento and clave=:clave");
$sentenciaSQL->bindParam(':documento', $txtdocumento);
$sentenciaSQL->bindParam(':clave', $txtclave);
$sentenciaSQL->execute();
$paciente = $sentenciaSQL->fetch(PDO::FETCH_LAZY);

$txtid = $paciente['id'];
$txtnombre=$paciente['nombre'];
$txtapellido = $paciente['apellido'];



if ($txtnombre != "") {
    session_start();
    $_SESSION['miSesion'] = array();
    $_SESSION['miSesion'][0] = $txtid;
    $_SESSION['miSesion'][1] = $txtnombre;
    $_SESSION['miSesion'][2] = $txtapellido;
    
    header("Location:reserva.php");
} else {
    echo '<script language="javascript">window.confirm("Documento o clave incorrectos");window.location.href = "./inicio_sesion.php"</script>';
}
