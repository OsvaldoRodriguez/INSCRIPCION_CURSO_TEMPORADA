<?php
include "conexion.inc.php";
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];
// echo "lo que esta lleagndo ".$flujo." ".$proceso." ".$nro_tramite."<br/>";
$sql="select * from flujo ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."'";
$resultado = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($resultado);
// print_r($fila);
$pantalla = $fila["pantalla"];
$tipo = $fila["tipo"];
// echo "pantalla donde va a ir -> ".$pantalla.".datos.inc.php <br/>";
// para saber si ya hizo un proceso
$sql="select count(*) as cantidad from flujotramite ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."' and ";
$sql.="nro_tramite='".$nro_tramite."'";
$resultado21=mysqli_query($con, $sql);
$fila21=mysqli_fetch_array($resultado21);
$cantidad=$fila21["cantidad"];
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    
    <title>Lista de requisitos</title>
    <link rel="stylesheet" href="assets/vendor/fonts/boxicons.css" />
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  </head>

  <body>
    


<form method="GET" action="motor.php" enctype="multipart/form-data">
	<?php 
		// echo "pantalla donde esta -> ".$pantalla.".inc.php <br/>";
		include $pantalla.".datos.inc.php";
		include $pantalla.".inc.php";
	?>
	<input type="hidden" value="<?php echo $flujo;?>" name="flujo"/>
	<input type="hidden" value="<?php echo $proceso;?>" name="proceso"/>
	<input type="hidden" value="<?php echo $nro_tramite;?>" name="nro_tramite"/>
	<input type="hidden" value="<?php echo $pantalla;?>" name="pantalla"/>
	<input type="hidden" value="<?php echo $tipo;?>" name="tipo"/>
	<!-- <br/> -->
	
	<br/>
	<div class="row mb-0">
                <div class="col-md-6 col-lg-4"></div>
                <div class="col-md-6 col-lg-4">
                  <div class="card text-center mb-4">
                    <!-- <div class="card-body"> -->
						<!-- <h1></h1> -->
                      
                   
	
	<?php
		if ($tipo=="C"){
			?>
				<input class="btn btn-primary d-grid w-10" type="submit" value="Si" name="Si"/>
				<br/>
				<input class="btn btn-primary d-grid w-10" type="submit" value="No" name="No"/>
			<?php

		}
		else{

			if($cantidad < 1){
			?>
				<input class="btn btn-primary d-grid w-10" type="submit" value="Anterior" name="Anterior"/>
			<?php
			}else{
			?>			
				<input class="btn btn-primary d-grid w-10" type="submit" value="Anterior" disabled="disabled" name="Anterior"/>
			<?php
			}
			?>
				<br/>
				<input class="btn btn-primary d-grid w-10" type="submit" value="Siguiente" name="Siguiente"/>
			<?php
		}
	?>

<!-- </div> -->
                  </div>
                </div>
              </div>
</form>


					<!-- es de la recopilacion  de datos  -->
					<!-- </div> -->
                <!-- </div>   -->
					</div>
                  </div>
                </div>
              </div>
              

            </div>
            <!-- <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
                <div class="mb-2 mb-md-0"> Segundo Parcial INF-324 </div>
                <div> 2022 </div>
              </div>
            </footer> -->
          </div>
        </div>
      </div>
    </div>



</body>
</html>