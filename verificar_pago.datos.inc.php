<?php 
include "conexion.inc.php";
$usuario = $_SESSION['usuario'];
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$nro_tramite = $_GET["nro_tramite"];

// hallando de que usuario debe realizar la tarea
$sql_u = "select * from flujotramite where flujo='".$flujo."' and proceso='".$proceso."' and nro_tramite= '".$nro_tramite."' ";
$con_u = mysqli_query($con, $sql_u);
$dat_u = mysqli_fetch_array($con_u);

$usuario_tarea_of = $dat_u['usuario_tarea'];

$sql = "select * from estudiantetemporada.alumno where usuario='".$dat_u['usuario_tarea']."'";
// echo $sql;
$consulta = mysqli_query($con, $sql);
?>