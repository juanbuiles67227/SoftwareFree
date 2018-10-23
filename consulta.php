<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Web</title>
  </head>
  <body>
      <?php

      $conexion=mysqli_connect("localhost", "findme", "builes150", "personas");
      if(isset($_POST['btnfiltrar'])){
          $filtro=$_POST['txtcedula'];
          $consulta="SELECT * FROM datos WHERE cedula like '%$filtro%'";
      }
      else{
          $consulta="SELECT * FROM datos";
      }
      $resultado=mysqli_query($conexion, $consulta);
      mysqli_close($conexion);
      
      while($res = mysqli_fetch_array($resultado)){
        echo "<tr>";
            /*echo "<td>$res[cedula]</td>";
            echo "<td>$res[nombre]</td>";
            echo "<td>$res[direccion]</td>";
            echo "<td>$res[tel]</td>";*/
           // echo "$res[cedula]"."<input type="text" class="form-control" id="usr" name="txtFiltro">"";
            echo "$res[cedula]"."<input>"."$res[cedula]";
        echo "</tr>";
        }

      ?>
                  <input type="text" class="loquesea" value="<?php

$conexion=mysqli_connect("localhost", "findme", "builes150", "personas");
if(isset($_POST['btnfiltrar'])){
    $filtro=$_POST['txtcedula'];
    $consulta="SELECT * FROM datos WHERE cedula like '%$filtro%'";
}
else{
    $consulta="SELECT * FROM datos";
}
$resultado=mysqli_query($conexion, $consulta);
mysqli_close($conexion);

while($res = mysqli_fetch_array($resultado)){
      echo "$res[cedula]";
  }

?>">

      <br><br><br><br><br>

     <li>
         <label>Nit</label>
         <input type="text" name="nit" value="<?php include 'p.php'; while($res = mysqli_fetch_array($resultado)){
        echo "<tr>";
            echo "<td>$res[cedula]</td>";
            echo "<td>$res[nombre]</td>";
            echo "<td>$res[direccion]</td>";
            echo "<td>$res[tel]</td>";
        echo "</tr>";
        }
        ?>"/> 
     </li>


      <form action="">
    <h1>Formulario para capturar datos</h1>

    <div class="form-group">
        <label for="usr">Cédula:</label>
        <input type="text" class="form-control" id="usr" name="txtFiltro">
      </div>
      <div class="form-group">
        <label for="pwd">Nombre Completo:</label>
        <input type="password" class="form-control" id="pwd">
      </div> 
      
              <button type="button" name="btnfiltrar" class="btn btn-primary active">Consultar</button>
              <button type="button" class="btn btn-danger active">Descartar</button>
      </form>



                            <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>