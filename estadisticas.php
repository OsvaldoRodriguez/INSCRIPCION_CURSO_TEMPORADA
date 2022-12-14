<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Estadisticas</title>
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/css/pages/page-auth.css" />
  </head>

  <body>
    <div class="card">
      <h3 class="card-header">LISTA DE MATERIAS</h5>
      
      <div class="table-responsive text-nowrap">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>SIGLA</th>
              <th>DESCRIPCION</th>
              <th>INCRITOS</th>
              <th>ESTADO</th>
              <th>ACCION</th>
            </tr>
          </thead>
          <tbody class="table-border-bottom-0">
            <?php  
            include "conexion.inc.php";
            $sql = "select * from estudiantetemporada.materia";
            $consulta = mysqli_query($con ,$sql);
            while($datos = mysqli_fetch_array($consulta)){
              echo "<tr>";
              $id_materia = $datos['id'];
              echo "<td><strong>".$datos['sigla']."</strong></td>";
              echo "<td><strong>".$datos['descripcion']."</strong></td>";
              $sql_i = "select count(".$id_materia.") as cantidad from estudiantetemporada.materia_inscrita where id_materia='".$id_materia."' ";
              // echo $sql_i;
              $consulta_i = mysqli_query($con, $sql_i);
              $datos_i = mysqli_fetch_array($consulta_i);
              echo "<td> <strong>".$datos_i['cantidad']." </strong></td>";
              if($datos_i['cantidad'] >= 10){
                echo "  <td><span class='badge bg-label-success me-1'> Abierto </span></td>";
              
              }else if($datos_i['cantidad'] >= 5){
                  echo "<td><span class='badge bg-label-primary me-1'>Por cerrarse</span></td>";
              }else{
                echo "<td ><span class='badge bg-label-warning me-1'  >Cerrado</span></td>";
              }

              // echo "<td><a href='mostrar_inscritos.php?id_materia=".$id_materia."'> Editar </td>";
              echo "<td> <a href='mostrar_inscritos.php?id_materia=".$id_materia."'> <span class='badge bg-label-info me-1'>VER DETALLE</span> </a></td>";
                                     

              echo "</tr>";

              
            }
            ?>

           
          </tbody>
        </table>
      </div>
    </div>
    <br>
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
          <form action="bentrada.php">
            <button class="btn btn-primary d-grid w-100" type="submit" value="Estadisticas" name = "Estadisticas">Volver</button>
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
