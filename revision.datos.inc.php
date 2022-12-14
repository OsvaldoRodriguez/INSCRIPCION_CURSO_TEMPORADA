<!-- <h1>Primero revision.datos.inc.php</h1> -->

<?php
// include "conexion.inc.php";
$user_que_entro = $_SESSION['usuario'];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];

// echo $flujo;
// echo $proceso;
// echo $nro_tramite;

$sql="SELECT * FROM flujotramite ";
$sql.="WHERE Flujo='".$flujo."' and proceso='".$proceso."' and nro_tramite='".$nro_tramite."' and fechafin is null " ;
$result=mysqli_query($con, $sql);
$filafi=mysqli_fetch_array($result);
// print_r($filafi);


$del_que_tiene_que_hacer = $filafi['usuario_tarea'];

// echo $del_que_tiene_que_hacer;

$sql="SELECT * FROM estudiantetemporada.alumno ";
$sql.="WHERE usuario='$del_que_tiene_que_hacer'";
$resultadofi=mysqli_query($con, $sql);
// echo "valores ".$nombrecompleto. "<br/>";

?>
