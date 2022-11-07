<?php
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - OdoTurns</title>
    <link rel="stylesheet" href="css/index.css" type="text/css">
    <link rel="stylesheet" href="css/servicios.css" type="text/css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
   </head>

<body>

    <header>
        <a href="#home1">Home</a>

        <nav class="navbar">
            <a href="#home_services">Servicios Dentales</a>
            <a href="#contact">Contacto</a>
            <a href="inicio_sesion.php">Iniciar Sesion</a>
        </nav>
    </header>

    <section id="home1">
        <div class="titulo">
            <h1>Odontologa profesional <br>
                Tratamiento personalizado
            </h1>
        </div>

        <div class="subtitulo">
            <p>
                Lorem ipsum dolor sit amet <br>
                consectetur adipisicing elit. <br>
                Molestiae asperiores hic laudantium <br>
                voluptates eius eveniet dignissimos culpa, <br>
                recusandae iusto? Accusamus! <br>
            </p>
        </div>

        <div class="appointment">
            <div class="box_appointment">
                <button type="button" class="btn btn-outline-dark">
                    <a href="registro.html">Online Appointment</a>
                </button>
            </div>

            <div class="box">
                <p>o</p>
            </div>

            <div class="box_number">
                <button type="button" class="btn btn-dark">+54 9 261 6291614</button>
            </div>
        </div>
    </section>

    <section id="home_services">
        <div class="services_title">
            <h1>Servicios Dentales</h1>
        </div>

        <div class="services">
            <div class="row">
                <div class="col-md-3">

                    <div class="card shadow">
                        <i class=" fa-solid fa-tooth"></i>
                        <div class="card-body">
                            <h5 class="card-title">Brackets</h5>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet 
                                consectetur adipisicing elit. Nesciunt, deleniti.
                            </p>
                        </div>
                    </div>


                </div>

                <div class="col-md-3">

                    <div class="card shadow">
                        <i class=" fa-solid fa-tooth"></i>
                        <div class="card-body">
                            <h5 class="card-title">Brackets</h5>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, deleniti.
                            </p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3">

                    <div class="card shadow">
                        <i class=" fa-solid fa-tooth"></i>
                        <div class="card-body">
                            <h5 class="card-title">Brackets</h5>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, deleniti.
                            </p>
                        </div>
                    </div>
                    
                </div>

                <div class="col-md-3">

                    <div class="card shadow">
                        <i class=" fa-solid fa-tooth"></i>
                        <div class="card-body">
                            <h5 class="card-title">Brackets</h5>
                            <p class="card-text">
                                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, deleniti.
                            </p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>


    </section>

    <section id="contact">
        <div class="contact_title">
            <h1>Informacion de contacto</h1>
        </div>

        <div class="contact_info">
            <div class="row">
                <div class="col-md-3">

                    <div class="card_location">
                        <i class="fas fa-map"></i>                        
                        <div class="card-body">
                            <h5 class="card-title">Address</h5>                            
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card_location">
                        <i class="fas fa-phone"></i>                        
                        <div class="card-body">
                            <h5 class="card-title">+54 9 261 6291614</h5>
                            
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card_location">
                        <i class="fas fa-envelope"></i>                        
                        <div class="card-body">
                            <h5 class="card-title">email@email.com</h5>
                        </div>
                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card_location">
                        <i class="fas fa-clock"></i>                        
                        <div class="card-body">
                            <h5 class="card-title">Lun - vie: 08:00 - 16:00</h5>
                            
                        </div>
                    </div>

                </div>
            </div>

        </div>
        
    </section>

</body>

</html>