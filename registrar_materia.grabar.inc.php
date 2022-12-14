<?php
include "conexion.inc.php";
$usuario = $_SESSION['usuario'];

$flujo = $_GET['flujo'];
$proceso = $_GET['proceso'];
$nro_tramite = $_GET['nro_tramite'];

$fecha_actual =  date('y-m-d h:i:s');
$sql_m = "select * from estudiantetemporada.ultimo where nro_tramite='".$nro_tramite."' ";
$c_m = mysqli_query($con, $sql_m);
$d_m = mysqli_fetch_array($c_m);
$id_materia = $d_m['id_materia'];

// hay que sacar el usuario del inscrito
$sql_u = "select * from flujotramite where flujo='".$flujo."' and proceso='".$proceso. "' and nro_tramite='".$nro_tramite."' ";
// echo $sql_u;
$con_u = mysqli_query($con, $sql_u);
$dat_u = mysqli_fetch_array($con_u);
$usuario_actual = $dat_u['usuario_tarea'];
// echo $usuario_actual;

$sql_es = "select * from estudiantetemporada.alumno where usuario='".$usuario_actual."'";
$con_es = mysqli_query($con, $sql_es);
$dat_es = mysqli_fetch_array($con_es);
$id_estudiante = $dat_es['id'];
$sql = "insert into estudiantetemporada.materia_inscrita (nro_tramite, id_materia, id_estudiante, fecha) values (".$nro_tramite.", ".$id_materia.", '".$id_estudiante."', '".$fecha_actual."') ";
mysqli_query($con, $sql);
?>