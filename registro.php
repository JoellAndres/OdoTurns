<?php
session_start();
include("../OdoTurns/templates/cabecera.php");



?>



<section id="registro">
  <br>
  <br>
  <br><br>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <div class="formulario">
          <h3>REGISTRO</h3>
          <form action="reserva.php" method="POST">
            <div class="mb-3">
              <label for="frm_nombre" class="form-label">Nombre</label>
              <input type="text" name="txtnombre" class="form-control" id="frm_nombre">
            </div>

            <div class="mb-3">
              <label for="frm_apellido" class="form-label">Apellido</label>
              <input type="text" name="txtapellido" class="form-control" id="frm_apellido">
            </div>

            <div class="mb-3">
              <label for="frm_telefono" class="form-label">Telefono</label>
              <input type="text" name="txttelefono" class="form-control" id="frm_telefono">
            </div>

            <div class="mb-3">
              <label for="frm_edad" class="form-label">Edad</label>
              <input type="number" name="txtedad" class="form-control" id="frm_edad">
            </div>

            <div class="mb-3">
              <label for="frm_dni" class="form-label">DNI</label>
              <input type="text" name="txtdocumento" class="form-control" id="frm_dni">
            </div>



            <div class="mb-3">
              <label for="frm_clave" class="form-label">Clave</label>
              <input type="password" name="txtclave" class="form-control" id="frm_clave">
            </div>
            <div class="mb-3">
              <button type="submit" class="btn btn-dark" name="accion" value="registrar" id="btn_submit">Registrarse</button>
              <button type="submit" class="btn btn-secondary" name="accion" value="salir" id="btn_submit">Salir</button>
            </div>
        </div>
      </div>
    </div>
  </div>
  </form>
  </div>
  </div>
  <div class="col-md-4"></div>
  </div>
  </div>


</section>
</body>

</html>