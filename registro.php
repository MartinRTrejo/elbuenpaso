<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registro</title>
        <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

    <body>
<?php //parte de encabezado
include("encabezado.php")
?>

<!-- Formulario de registro -->

        <section class="container m-5 bg-light">
            <div class="row">
                <div class="col-lg-8"> 
                    <h3 class="text-center text-muted">Regristro de Calzado</h3>
                    <form method="GET" action="recibir.php">
                        <div class="row mb-3">
                            <label class="col-sm-10">Codigo de calzado</label>
                            <div class="col-sm-10">
                                <input type="text" name="codigo_calzado" class="form-control" placeholder="Introduce el codigo del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Descripcion</label>
                            <div class="col-sm-10">
                                <input type="text" name="descripcion_calzado" class="form-control" placeholder="Escribe la descripcion del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Talla</label>
                            <div class="col-sm-10">
                                <input type="text" name="talla_calzado" class="form-control" placeholder="Introduce la talla del calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Tipo</label>
                            <div class="col-sm-10">
                                <input type="text" name="tipo_calzado" class="form-control" placeholder="Introduce el tipo de calzado">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-10">Precio</label>
                            <div class="col-sm-10">
                                <input type="text" name="precio_calzado" class="form-control" placeholder="Introduce el precio del calzado">
                            </div>
                        </div>
                        <div class="d-grid gap-2 col-6 mx-auto">
                            <button class="btn btn-primary btn-success">Registrar</button>
                            <button class="btn btn-secondary btn-danger">Descartar</button>
                        </div>
                    </form>
                </div>
                
                <div class="col-lg-4 d-flex justify-content-center">
                    <img src="img/zapateria.png" width="400" height="400">
                </div>
            </div>
        </section>
        
        <footer class="container-fluid bg-light text-center p-3">
            <p>Todos los derechos reservados 2022</p>
    
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    </body>
    
</html>