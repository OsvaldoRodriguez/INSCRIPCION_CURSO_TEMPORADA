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
                        <h5>
                          Tu inscripcion fue realizada de manera correcta <br/>
                          
                        </h5>
                        <h6>Ahora podras ver el estado actual de la materia inscrita</h6>
                      </p>
                    </div>

                    

                  </div>



                  <div class="table-responsive text-nowrap">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SIGLA</th>
                          <th>MATERIA</th>
                          <th>INSCRITOS</th>
                          <th>ESTADO</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                        <?php 
                        
                          $sql = "select * from estudiantetemporada.materia_inscrita where nro_tramite='".$nro_tramite."' ";
                          $consulta = mysqli_query($con, $sql);
                          while($datos = mysqli_fetch_array($consulta)){
                            $id_materia = $datos['id_materia'];
                            // ahora hay q encontras las materias inscritas
                            $sql_m = "select * from estudiantetemporada.materia where id ='".$datos['id_materia']."' ";
                            $consulta_m = mysqli_query($con, $sql_m);
                            $datos_m = mysqli_fetch_array($consulta_m);
                            echo "<tr class='table-light'>";
                            echo "<td>".$datos_m['sigla']."</td>";
                            echo "<td>".$datos_m['descripcion']."</td>";
                            $sql_i = "select count(".$id_materia.") as cantidad from estudiantetemporada.materia_inscrita where id_materia='".$id_materia."' ";
                            // echo $sql_i;
                            $consulta_i = mysqli_query($con, $sql_i);
                            $datos_i = mysqli_fetch_array($consulta_i);
                            echo "<td>".$datos_i['cantidad']."</td>";
                            
                            if($datos_i['cantidad'] >= 10){
                              echo "  <td><span class='badge bg-label-success me-1'> Abierto </span></td>";
                            
                            }else if($datos_i['cantidad'] >= 5){
                                echo "<td><span class='badge bg-label-primary me-1'>Por cerrarse</span></td>";
                            }else{
                              echo "<td ><span class='badge bg-label-warning me-1'  >Cerrado</span></td>";
                            }
                            // echo "  <td><span class='badge bg-label-primary me-1'>".$id_materia."</span></td>";
                            echo "</tr>";
                          }
                        
                        
                        ?>
                        
                          
                        
                        
                      </tbody>
                    </table>
                  </div>
                </div>
                
              </div>
              

             
