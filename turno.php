<?php

?>

<html>
<head>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/reserva-r.css">
    <link rel="stylesheet" href="./css/nuestros-planes.css">
    <link rel="stylesheet" href="./css/servicios.css">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css/index.css" type="text/css">
    <link rel="stylesheet" href="./css/servicios.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/locales-all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/turno.css">
    <title>Turno | OdoTurns</title>

</head>

<body>

    <section id="turno">
        <div class="titulo">
            <h2>Solicitar turno</h2>
        </div>
        <!-- datetime, id_usuario -->
        <div class="frm_turno">
            <form>
                <div class="mb-3">
                    <label for="input_fecha" class="form-label">Fecha</label>
                    <input type="Date" name="fecha_turno" class="form-control" id="input_fecha">
                </div>

                <div class="mb-3">
                    <label for="input_hora" class="form-label">Hora</label>
                    <input type="Time" name="hora_turno" class="form-control" id="input_hora">
                </div>

                <button type="submit" class="btn btn-dark" id="btn_turno_submit">
                    Iniciar sesion
                </button>

            </form>

        </div>



    </section>


</body>
</html>