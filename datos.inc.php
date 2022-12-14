
<input type="hidden" name="id" value="<?php echo $id;?>"/>
<!-- <div class="col-xxl"> -->
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h3 class="mb-0">Datos del Estudiante</h3>
                    </div>
                    <div class="card-body">
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Carnet de Identidad: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='ci' value= '<?php echo $ci;?>' />
                          </div>
                        </div>
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Nombre Completo: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='nombrecompleto' value= '<?php echo $nombrecompleto;?>' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Codigo CPT: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='cpt' value= '<?php echo $cpt;?>' />
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Departamento: </label>
                          <div class="col-sm-6">
                            <input type="text" class="form-control" name='departamento' value= '<?php echo $departamento;?>' />
                          </div>
                        </div>
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">Fecha de Nacimiento: </label>
                          <div class="col-sm-6">
                            <input type="date" class="form-control" name='fechanacimiento' value= '<?php echo $fechanacimiento;?>' />
                          </div>
                        </div>

                        
                        
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label">MATERIA: </label>
                          
                          <div class="col-sm-6">
                            <select class="form-control" name="materia_inscrita" id="">
                            <?php 
                                while($datos = mysqli_fetch_array($consulta)){
                                    echo "<option value='".$datos['id']."'>".$datos['sigla']." ".$datos['descripcion']."</option>";
                                }

                            ?>
                              <!-- <option class="form-control" name='nacionalidad' value= '<?php echo $nacionalidad;?>' /> -->
                            </select>
                          </div>
                        </div> 
                        
                        
                    </div>
                  <!-- </div>
                </div> -->




