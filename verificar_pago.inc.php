<div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <div class="layout-page">
          <div class="content-wrapper">
            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- <h1 class="fw-bold py-0 mb-3" align="center">Bienvenido</h1> -->
              <div class="row mb-5">
                <div class="col-md-6 col-lg-3"></div>
                <div class="col-md-6 col-lg-6">
                  <div class="card text-center mb-3">
                    <div class="card-body">
                      <p class="card-text"> 
                        <?php 

                          $sql_m = "select * from estudiantetemporada.ultimo where nro_tramite='".$nro_tramite."' ";
                          $con_m = mysqli_query($con, $sql_m);
                          $dat_m = mysqli_fetch_array($con_m);
                          $id_materia = $dat_m['id_materia'];

                          $sql_m = "select * from estudiantetemporada.materia where id='".$id_materia."' ";
                          $con_m = mysqli_query($con, $sql_m);
                          $dat_m = mysqli_fetch_array($con_m);


                          $datos = mysqli_fetch_array($consulta);
                          $nombre_estudiante = $datos['nombrecompleto'];


                        ?>
                        <h3>
                          Cajas
                          
                        </h3>
                        <h5> Un estudiante registro una materia para temporada II/2022 con  los siguientes datos</h5>
                        <h5>Nombre: <?php echo $nombre_estudiante; ?> </h5>
                        <h5>Sigla: <?php echo $dat_m['sigla']; ?> </h5>
                        <h5>Materia: <?php echo $dat_m['descripcion']; ?> </h5>
                        
                        <h6> Se procede a verificar si deposito el monto de 65 Bs. </h6>
                      </p>
                    </div>

                    

                  </div>



                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>Nombre</th>
                          <th>monto</th>
                          <th>fecha</th>
                          <th>sigla</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <?php 
                        
                          $sql = "select * from estudiantetemporada.deposito_caja where usuario='".$usuario_tarea_of."' ";
                          // echo $sql;
                          $consulta = mysqli_query($con, $sql);
                          while($datos = mysqli_fetch_array($consulta)){
                            // ahora hay q encontras las materias inscritas
                            echo "<tr class='table-light'>";
                            echo "<td>".$nombre_estudiante."</td>";
                            echo "<td>".$datos['monto']." Bs.</td>";
                            echo "<td>".$datos['fecha']."</td>";
                            echo "<td>".$datos['descripcion']."</td>";
                            
                            // echo "  <td><span class='badge bg-label-primary me-1'>".$id_materia."</span></td>";
                            echo "</tr>";
                          }
                        
                        
                        ?>
                        
                          
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                
              </div>
              

             
