<?php
include("../OdoTurns/templates/cabecera.php");

include("../OdoTurns/config/bd.php");
$accion = (isset($_POST['accion'])) ? $_POST['accion'] : "";
switch ($accion) {
  case "registrar":
    echo "PRESIONADO BOTON REGISTRAR";
    $sentenciaSQL = $conexion->prepare("INSERT INTO `paciente`(`id`, `nombre`, `apellido`, `telefono`, `edad`, `documento`) VALUES ('id',:nombre,:apellido,:telefono,:edad,:documento)");
    $sentenciaSQL->bindParam(':nombre', $txtnombre);
    $sentenciaSQL->bindParam(':apellido', $txtapellido);
    $sentenciaSQL->bindParam(':telefono', $txttelefono);
    $sentenciaSQL->bindParam(':edad', $txtedad);
    $sentenciaSQL->bindParam(':documento', $txtdocumento);
    $sentenciaSQL->execute();
    header('location:./reserva.php');
    break;
  case "salir":
    echo "PRESIONADO BOTON SLAIR";

    break;
}
?>



<form action="reserva.php" method="POST"> <!-- LOS DATOS SE ENVIAN AL ARCHIVO RESERVA.PHP Y AHI SE DECLARAN LAS VARIABLES !-->
  <div class="mb-3">
    <label class="form-label">Nombre</label>
    <input type="text" class="form-control" name="txtnombre" id="txtnombre">

  </div>
  <div class="mb-3">
    <label class="form-label">Apellido</label>
    <input type="text" class="form-control" name="txtapellido" id="txtapellido">
  </div>
  <div class="mb-3">
    <label class="form-label">Documento</label>
    <input type="number" class="form-control" name="txtdocumento" id="txtdocumento">
  </div>
  <div class="mb-3">
    <label class="form-label">Telefono</label>
    <input type="number" class="form-control" name="txttelefono" id="txttelefono">
  </div>
  <div class="mb-3">
    <label class="form-label">Edad</label>
    <input type="number" class="form-control" name="txtedad" id="txtedad">
  </div>
  <button type="submit" name="accion" value="registrar" class="btn btn-primary">Registrar</button>
  <button type="submit" name="accion" value="salir" class="btn btn-danger">Salir</button>
</form>

<?php
include("../OdoTurns/templates/footer.php")

?>