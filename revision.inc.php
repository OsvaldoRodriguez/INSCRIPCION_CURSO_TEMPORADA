<?php
$titulobachiller1;
$certinaci;
$certidentidad;
?>
<style>
  .color_verde{background-color: #078C31;}
  .color_rojo{background-color: #F01212;}
</style>
<div class="card">
<?php 

    // hallando id_estudiante para saber en cuantas materia se registro
    $sql_ll = "select * from flujotramite where flujo='".$flujo."' and nro_tramite='".$nro_tramite."' ";
    $con_ll = mysqli_query($con, $sql_ll);
    // echo $sql_ll;
    $dat_ll = mysqli_fetch_array($con_ll);
    $usuario_que_se_esta_escribiendo = $dat_ll['usuario_tarea'];

    // ahora buscamos su id de estudiante
    $sql_ll = "select * from estudiantetemporada.alumno where usuario = '".$usuario_que_se_esta_escribiendo."' ";
    $con_ll = mysqli_query($con, $sql_ll);
    // echo $sql_ll;
    $dat_ll = mysqli_fetch_array($con_ll);
    $id_estudiante_inscrito = $dat_ll['id'];
    // echo $id_estudiante_inscrito;
    $sql_con = "select count('id_estudiante') as cantidad from estudiantetemporada.materia_inscrita where id_estudiante='".$id_estudiante_inscrito."'";
    $con_con = mysqli_query($con, $sql_con);
    $dat_con = mysqli_fetch_array($con_con);
  ?>
  <h3 class="card-header">DATOS DEL ESTUDIANTE</h3>
  <!-- <h4 class="card-header">Materias inscritas hasta el momento: <?php echo $dat_con['cantidad'] ?> </h4> -->
  
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Cedula de Identidad</th>
          <th>Nombre completo</th>
          <th>Codigo cpt</th>
          <th>departamento</th>
          <th>fecha nacimiento</th>
          <th>Materias inscritas</th>
          
        </tr>
      </thead>
      <tbody class="table-border-bottom-1">
      <?php 
          while ($fila=mysqli_fetch_array($resultadofi))
          {
              echo "<tr>";
              echo "<td>".$fila['ci']."</td>";
              echo "<td>".$fila['nombrecompleto']."</td>";
              echo "<td>".$fila['cpt']."</td>";
              echo "<td>".$fila['departamento']."</td>";
              echo "<td>".$fila['fechanacimiento']."</td>";
              
              if($dat_con['cantidad'] >= 2){
                echo "<td style='background-color: rgb(243, 122, 102);'> ".$dat_con['cantidad']." </td>";
              }else{
                echo "<td style='background-color: rgb(102, 255, 153);'> ".$dat_con['cantidad']." </td>";
              }
              // echo "<td>".$dd['sigla']."</td>";
              // echo "<td>".$dd['descripcion']."</td>";
              
              echo "</tr>";
          }
      ?>
        
      </tbody>
    </table>

    
    
    
  </div>
  <br><br>
  
  <div class="card">
  <h3 class="card-header">MATERIA REGISTRADA</h3>
  <div class="table-responsive text-nowrap">
    <table class="table">
      <thead>
        <tr>
          <th>Sigla</th>
          <th>materia</th>
          <th>inscritos</th>
          <th>estado</th>
          
        </tr>
      </thead>
      <tbody class="table-border-bottom-1">
      <?php 

          $sql_m = "select * from estudiantetemporada.ultimo where nro_tramite='".$nro_tramite."'";
          $con_m = mysqli_query($con, $sql_m);
          // echo $sql_m;
          $dat_m = mysqli_fetch_array($con_m);
          $id_materia = $dat_m['id_materia'];

          $sql_mata = "select * from estudiantetemporada.materia where id='".$id_materia."'";
          $cc = mysqli_query($con, $sql_mata);
          // $dd = mysqli_fetch_array($cc);
          while ($dd=mysqli_fetch_array($cc))
          {
              echo "<tr>";
              echo "<td>".$dd['sigla']."</td>";
              echo "<td>".$dd['descripcion']."</td>";

              $sql_i = "select count(".$id_materia.") as cantidad from estudiantetemporada.materia_inscrita where id_materia='".$id_materia."' ";
              // echo $sql_i;
              $consulta_i = mysqli_query($con, $sql_i);
              $datos_i = mysqli_fetch_array($consulta_i);
              echo "<td>".$datos_i['cantidad']."</td>";

              if($datos_i['cantidad'] >= 30){
                echo "<td style='background-color: rgb(243, 122, 102);'> Lleno </td>";
              }else{
                echo "<td style='background-color: rgb(102, 255, 153);'> Disponible </td>";
              }
              echo "</tr>";
          }
      ?>
        
      </tbody>
    </table>

    
    
    

  </div>
  
              
              
              
              
                <p class="card-header" align='center'>
                Si los datos estan llenados correctamente, responda <strong>SI</strong>, caso contrario <strong>NO</strong>

                </p>
              </div>



            
    <!-- <h1>segudno revision.inc.php</h1> -->

        

    
   