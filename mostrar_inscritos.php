<?php 
include "conexion.inc.php";
$id_materia = $_GET['id_materia'];
$sql = "select * from estudiantetemporada.materia where id='".$id_materia."'";
// echo $sql;
$consulta = mysqli_query($con, $sql);
$datos = mysqli_fetch_array($consulta);
$sigla = $datos['sigla'];
$nombre = $datos['descripcion'];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Inscritos</title>
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
  </head>

  <body>
    <div class="card">
      <h2 class="card-header" align= 'center'>LISTA DE ESTUDIANTES INSCRITOS </h5>
      <div class="card-header">
        <h4 ><Strong>SIGLA: <?php echo $sigla ?> </Strong></h4>
        <h4 ><Strong>MATERIA: <?php echo $nombre ?></Strong></h4>
      </div>

      <div class="table-responsive text-nowrap">
        
        <table class="table table-hover">
          <thead>
            <tr>
              <th>ci</th>
              <th>nombre</th>
              <th>codigo cpt</th>
              <th>departamento</th>
              <th>fecha</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php  
            $sql = "select * from estudiantetemporada.materia_inscrita where id_materia='".$id_materia."'";
            // echo $sql;
            $consulta = mysqli_query($con ,$sql);
            while($datos = mysqli_fetch_array($consulta)){
              echo "<tr>";
              $id_estudiante = $datos['id_estudiante'];
              $sql_i = "select * from estudiantetemporada.alumno where id='".$id_estudiante."' ";
              $consulta_i = mysqli_query($con, $sql_i);
              $datos_i = mysqli_fetch_array($consulta_i);
              echo "<td><strong>".$datos_i['ci']."</strong></td>";
              echo "<td><strong>".$datos_i['nombrecompleto']."</strong></td>";
              echo "<td><strong>".$datos_i['cpt']."</strong></td>";
              echo "<td><strong>".$datos_i['departamento']."</strong></td>";
              echo "<td><strong>".$datos['fecha']."</strong></td>";
              
                          

              echo "</tr>";

              
            }
            ?>

            
          </tbody>
        </table>
      </div>
    </div>

    <div>
      <h1> <br></h1>
    </div>
    <div class="row mb-5">
      <div class="col-md-6 col-lg-4">
        <div class="card mb-3">
          <form action="estadisticas.php">
            <!-- <button class="btn btn-primary d-grid w-100" type="submit" value="Estadisticas" name = "Estadisticas">Estadisticas</button> -->
          </form>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card mb-3">
          <form action="estadisticas.php">
            <button class="btn btn-primary d-grid w-100" type="submit" value="volver" name = "volver">Volver</button>
          </form>
        </div>
      </div>
      <div class="col-md-6 col-lg-4">
        <div class="card mb-3">
          <form action="estadisticas.php">
            <!-- <button class="btn btn-primary d-grid w-100" type="submit" value="Estadisticas" name = "Estadisticas">Estadisticas</button> -->
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
