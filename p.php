
<html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
      
          <title>Consulta</title>
        </head>
        <body>

    <div class="container-portada">
        <div class="capa-gradient">
            <div class="container-details">
                <div class="details">
                    <h1>Busqueda</h1>

                    <form action="p.php" method="POST">
                    <label for="usr">Cédula:</label>

                        <input type="text" name="txtFiltro" placeholder="Ingrese su cedula...">
                        <button type="submit" name="btnFiltrar" value="Buscar" class="btn btn-primary active">Consultar</button>
                        <button type="button" class="btn btn-danger active">Descartar</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="busqueda">
        <table>
            <tr class="enca">
                <td>Cédula:     </td>
                <td>Nombre:     </td>
                <td>Dirección:  </td>
                <td>Telefono:   </td>
            </tr>
            <?php

                    $conexion=mysqli_connect("localhost", "findme", "builes150", "personas");
                    if(isset($_POST['btnFiltrar'])){
                        $filtro=$_POST['txtFiltro'];
                        $consulta="SELECT * FROM datos WHERE cedula like '$filtro'";
                    }
                    else{
                        $consulta="SELECT * FROM datos";
                    }
                    $resultado=mysqli_query($conexion, $consulta);

                    while($res = mysqli_fetch_array($resultado)){
                    echo "<tr>";
                        echo "<td>$res[nombre]</td>";
                        echo "<td>$res[cedula]</td>";
                        echo "<td>$res[direccion]</td>";
                        echo "<td>$res[tel]</td>";
                    echo "</tr>";
                    }
                    mysqli_close($conexion);
                    ?>
        </table>
    </div>

                          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>
      </html>