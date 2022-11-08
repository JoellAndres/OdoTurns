<?php



// SE ASIGNAN VARIABLES QUE VIENEN DEL FORMULARIO REGISTRO A CADA CAMPO DEL FORMULARIO SE VALIDA QUE EXISTEN CON "ISSET"
$txtnombre = (isset($_POST['txtnombre'])) ? $_POST['txtnombre'] : "";
$txtapellido = (isset($_POST['txtapellido'])) ? $_POST['txtapellido'] : "";
$txtdocumento = (isset($_POST['txtdocumento'])) ? $_POST['txtdocumento'] : "";
$txttelefono = (isset($_POST['txttelefono'])) ? $_POST['txttelefono'] : "";
$txtedad = (isset($_POST['txtedad'])) ? $_POST['txtedad'] : "";

//-----------------------------INICIAMOS SESSION----------------------------
session_start();
$_SESSION['txtnombre'] = $txtnombre . " " . $txtapellido; //nombre de la session, se toma el dato del nombre y apellido.
$varsesion = $_SESSION['txtnombre'];

if ($varsesion == null || $varsesion == ' ') {
  echo 'NO TIENE PERMITIDO ACCEDER';
  die();
}
include("./templates/cabecera-log.php");


?>

<section class="titulo">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1>Appoinment</h1>
        <h4>YOUR BEST DENTAL EXPERIENCE HERE</h4>
      </div>
    </div>
  </div>
</section>

<section class="reserva">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h2>Quick Contact</h2>
        <p>If you have any question simply use the following contact details.</p>

        <div class="contenedor-contacto">
          <div class="row">
            <div class="col-md-3 img-container">
              <i class="fa-solid fa-map"></i>
            </div>


            <div class="col-md-9 descrp-container">
              <h3>Address</h3>
              <p>173/45 Geraldine Lane, New York, New York-10013</p>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3 img-container">
              <i class="fa-solid fa-map"></i>
            </div>


            <div class="col-md-9 descrp-container">
              <h3>Address</h3>
              <p>173/45 Geraldine Lane, New York, New York-10013</p>
            </div>

          </div>
          <div class="row">
            <div class="col-md-3 img-container">
              <i class="fa-solid fa-map"></i>
            </div>


            <div class="col-md-9 descrp-container">
              <h3>Address</h3>
              <p>173/45 Geraldine Lane, New York, New York-10013</p>
            </div>

          </div>
        </div>

      </div>
      <div class="col-md-8 calendario">

        <!-- Modal -->
        <div class="modal fade" id="horarios" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">HORARIOS DISPONIBLES 6/11/2022</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="confirmar-turno.php" method="POST">
                  
              
                <div class="row" id="row-1">
                  <div class="col-md-6"> <span>9:30</span></div>
                  <div class="col-md-6">
                      
                    <button class="botones" type="submit" id="btn" name="boton" value="1" data-bs-toggle="modal" data-bs-target="#confirmar">Asignar turno</button>
                  </div>

                </div>
                <br>
                <div class="row" id="row-2">
                  <div class="col-md-6"><span>10:00</span></div>
                  <div class="col-md-6"><button class="botones" type="submit" value="2" name="boton" data-bs-toggle="modal" data-bs-target="#confirmar">Asignar turno</button></div>
                </div>
                <br>
                <div class="row" id="row-3">
                  <div class="col-md-6"><span>10:00</span></div>
                  <div class="col-md-6"><button class="botones" type="submit" value="3" name="boton" data-bs-toggle="modal" data-bs-target="#confirmar">Asignar turno</button></div>
                </div>
                </form>
              </div>

            </div>
          </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="confirmar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Confirmar turno</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                  <h2>Está seguro que desea este turno?</h2>
                <div class="modal-footer">
                  <input type="submit" class="btn btn-primary" id="btn-confirmar" name="boton-confirmar" value="Confirmar">
                  <input type="submit" class="btn btn-primary" name="boton-confirmar" value="Cancelar">
                </div>
              </div>

            </div>
          </div>
        </div>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#horarios">Fecha</button>

        <div id="calendario">

        </div>
      </div>
    </div>




  </div>




  </div>


  </div>
  </div>
</section>
<section class="nuestro-planes">
  <div class="container">
    <div class="row fila-titulo">
      <div class="col-md-12">
        <p>WHAT WE OFFER</p>
        <h2>Our Plans</h2>
      </div>
    </div>
    <div class="row shadow">
      <div class="col-md-4 shadow">
        <div class="card" style="background-color: #F6F6F6;">

          <div class="card-body">
            <h3 class="card-title">Pediatric Dentistry</h3>
            <p class="card-title desc-titulo">excellent oral health for kids</p>

            <p class="card-text precio">$130</p>
            <ul>
              <li><i class="fa-solid fa-check"></i> All Basic Features +</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Laser Dentistry</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Gentle & Friendly Dentist</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Painless Treatmen</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Dental Crowns</li>
            </ul>

          </div>
        </div>
      </div>
      <div class="col-md-4 shadow">
        <div class="card">

          <div class="card-body">
            <h3 class="card-title">General Dentistry</h3>
            <p class="card-title desc-titulo">Check up and Clean</p>

            <p class="card-text precio">$199</p>
            <ul>
              <li><i class="fa-solid fa-check"></i> Discuss your medical history</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Take a series of X-rays</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Check your oral health</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Cleaning and polishing.</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Teeth cleaning guide.</li>
            </ul>




          </div>
        </div>
      </div>
      <div class="col-md-4 shadow">
        <div class="card " style="background-color: #F6F6F6;">

          <div class="card-body">
            <h3 class="card-title">Cosmetic Dentisry</h3>
            <p class="card-title desc-titulo">advanced clear aligner system</p>

            <p class="card-text precio">$245</p>
            <ul>
              <li><i class="fa-solid fa-check"></i> All Basic Features +</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Invisalign</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Teeth Whitening</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Dental Implants</li>
              <hr>
              <li><i class="fa-solid fa-check"></i> Dental Crowns</li>
            </ul>




          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="servicios">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>INTRODUCING</p>
        <H5>Our Dental Services</H5>
      </div>

    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="card shadow">
          <i class="fa-solid fa-tooth"></i>
          <div class="card-body">
            <h5 class="card-title">Cavity Protection</h5>
            <p class="card-text">Mauris molestie nulla at nunc imperdiet, vitae faucibus eros ultricies. Praesent sed ante in augue porta interdum.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow"">
            <i class=" fa-solid fa-tooth"></i>
          <div class="card-body">
            <h5 class="card-title">Implant Dentistry</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin nec libero vitae tortor eleifend vulputate finibus vel.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow" ">
            <i class=" fa-solid fa-tooth"></i>
          <div class="card-body">
            <h5 class="card-title">Cosmetic Dentistry</h5>
            <p class="card-text">Ut ut consectetur urna. Curabitur eget dapibus metus, et fermentum dui. Maecenas elementum tincidunt nisl.</p>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card shadow" ">
            <i class=" fa-solid fa-tooth"></i>
          <div class="card-body">
            <h5 class="card-title">Paradontosis</h5>
            <p class="card-text">Curabitur nec interdum ligula. Aenean in est mi. Sed quis dolor nisl. Curabitur ac odio et nunc facilisis mollis ac sit</p>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <button class="btn btn-primary">MORE SERVICES ></button>
      </div>
    </div>
  </div>
</section>
<script src="js/confirmar-turno.js"></script>
<script src="js/calendario.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>

</body>

</html>