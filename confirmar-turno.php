<?php
session_start();
include("./templates/cabecera-log.php");
$boton = (isset($_POST['boton'])) ? $_POST['boton'] : "";
$btn= (isset($_POST['btn'])) ? $_POST['btn'] : "";

echo $boton;
echo $btn;

    switch ($boton) {
        case "1":
            echo "el valor del boton es " . $boton;
            if($btn =="confirmar"){
                echo "entro bien";
                break;
            }else{
                break;
            }
            
        case "2":
            echo "el valor del boton es " . $boton;
            break;
        case "3":
            echo "el valor del boton es " . $boton;
            break;
    }

?>
<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form method="POST">
                <div class="mb-3">
                    <h4>Desea confirmar turno?</h4>
                </div>

                <button type="submit" class="btn btn-primary" name="btn" value="confirmar">Confirmar</button>
                <button type="submit" class="btn btn-danger"name="btn" value="cancelar">Cancelar</button>
            </form>
        </div>
        <div class="col-md-4"></div>
    </div>
</div>
<?php


?>