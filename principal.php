<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Lista</title>
      <link rel="stylesheet" href="css/bootstrap.min.css">
    </head>

  <body> 
<?php //parte de encabezado
include("encabezado.php")
?>
    <hr>
    
    <section>

        <div class="container">
            <nav class="navbar bg-light">
                <form class="container-fluid">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1">Buscar Producto</span>
                    <input type="text" class="form-control" placeholder="Buscar Calzado" aria-label="Username" aria-describedby="basic-addon1">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                  </div>
                </form>
              </nav>
        </div>
        


        <div class="container bg-light">
          <h1 class="text-center text-muted"> Listado de Calzado</h1>
                <table class="table table-hover">
                  <thead>
                    <button class="btn btn-outline-success" type="submit" href="registro.php ">Agregar</button>
                      <tr>
                        <th>Codigo</th>
                        <th>Descripcion</th>
                        <th>Talla</th>
                        <th>Precio</th>
                        <th>Opciones</th> 
                      </tr>
                  </thead>

                  <?php
                    include("conexion.php");
                    $consulta="SELECT * FROM calzado";
                    $resultado=mysqli_query($conn,$consulta);
                      if(mysqli_num_rows($resultado)>0)
                      {
                        while($fila=mysqli_fetch_assoc($resultado))
                        {
                          echo "<tr>";
                          echo "<td>".$fila['id_calzado']."</td>";
                          echo "<td>".$fila['modelo']."</td>";
                          echo "<td>".$fila['talla']."</td>";
                          echo "<td>".$fila['tipo']  ."</td>";
                          echo "<td>".$fila['precio']."</td>";
                          echo "<td> <a class='btn btn-danger' <a href='eliminar_calzado.php?id_calzado=".$fila['id_calzado']."'>Eliminar</a></td>";
                          echo "</tr>";
                        }
                      }else
                      {
                        echo "Sin resultados";
                      }

                  ?>

                  <!-- <tbody>

                        <tr>
                            <td>000001</td>
                            <td>Nike Runeer</td>
                            <td>Tennis</td>
                            <td>250</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td>
                        </tr>
                        <tr>
                            <td>000002</td>
                            <td>Adidas</td>
                            <td>Sandalias</td>
                            <td>750</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td>
                        </tr>
                        <tr>
                            <td>000003</td>
                            <td>Puma</td>
                            <td>Tennis</td>
                            <td>1200</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td>       
                        </tr>
                        <tr>
                            <td>000004</td>
                            <td>Rebook</td>
                            <td>Tennis</td>
                            <td>1650</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td> 
                        </tr>
                        <tr>
                            <td>000005</td>
                            <td>Flexy</td>
                            <td>Zapato</td>
                            <td>850</td>
                            <td><a class="btn btn-danger" href="">eliminar</a>   <a class="btn btn-success"href="">modificar</a>  </td>
                        </tr>
                  </tbody> -->
                </table>
        </div>
    </section>
    
     <footer class="text-center text-lg-start bg-light text-muted">
         <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
           Todos los derechos reservados 2022
         </div>
      </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  </body>
</html>