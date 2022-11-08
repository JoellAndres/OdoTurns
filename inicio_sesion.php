<?php
 
?>
<html>

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/reserva.css" type="text/css">
        <title>Inicio sesion | OdoTurns</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

<body style="background-color: whitesmoke">

    <section id="inicioSesion">
        <div class="titulo">
            <h2>Iniciar sesion</h2>
        </div>

        <div class="frm_inicio">
            <form action="validar.php" method="POST">
                <div class="mb-3">
                    <label for="frm_inicio_dni" class="form-label">DNI</label>
                    <input type="text" name="txtdocumento" class="form-control" id="frm_inicio_dni">
                </div>

                <div class="mb-3">
                    <label for="frm_inicio_clave" class="form-label">Clave</label>
                    <input type="password" name="txtclave" class="form-control" id="frm_inicio_clave">
                </div>                

                <button type="submit" class="btn btn-dark" id="btn_inicio_submit">
                    Iniciar sesion
                </button>
            </form>
        </div>


    </section>




    <!--dni, clave-->


</body>

</html>