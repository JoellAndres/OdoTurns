<?php
 
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/reserva.css" type="text/css">
    <title>Registro | OdoTurns</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <section id="registro">
        <div class="titulo">
            Formulario de registro
        </div>
    
        <div class="formulario">
            <form>
                <div class="mb-3">
                    <label for="frm_nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="frm_nombre">
                </div>
    
                <div class="mb-3">
                    <label for="frm_apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="frm_apellido">
                </div>
    
                <div class="mb-3">
                    <label for="frm_telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="frm_telefono">
                </div>
    
                <div class="mb-3">
                    <label for="frm_edad" class="form-label">Edad</label>
                    <input type="number" class="form-control" id="frm_edad">
                </div>
    
                <div class="mb-3">
                    <label for="frm_dni" class="form-label">DNI</label>
                    <input type="text" class="form-control" id="frm_dni">
                </div>
                
                <!--
                <div class="mb-3">
                    <label for="frm_correo" class="form-label">Correo electronico</label>
                    <input type="email" class="form-control" id="frm_correo">
                </div>
                -->
    
                <div class="mb-3">
                    <label for="frm_clave" class="form-label">Clave</label>
                    <input type="password" class="form-control" id="frm_clave">
                </div>                

                <button type="submit" class="btn btn-dark" id="btn_submit">Registrarse</button>
            </form>
        </div>
    </section>
</body>



</html>