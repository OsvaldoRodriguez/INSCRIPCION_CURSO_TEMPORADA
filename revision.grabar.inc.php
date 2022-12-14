<?php
include "conexion.inc.php";
$usuario = $_SESSION['usuario'];
$flujo = $_GET['flujo'];
$proceso = $_GET['proceso'];
$nro_tramite = $_GET['nro_tramite'];

$fecha_actual =  date('y-m-d h:i:s');
// simulacion del depostio
// estamos en kardex
// hay que añadir usuario, monto, nro_tramite, fecha, sigla

// entronar el usuario
$sqlsql = "select * from flujotramite where flujo ='".$flujo."' and nro_tramite='".$nro_tramite."' ";
$concon = mysqli_query($con, $sqlsql);
$datdat = mysqli_fetch_array($concon);
$usuario_que_deposito = $datdat['usuario_tarea'];
// echo $usuario_que_deposito;
$sqlsql = "select * from estudiantetemporada.ultimo where nro_tramite='".$nro_tramite."' ";
$concon = mysqli_query($con, $sqlsql);
$datdat = mysqli_fetch_array($concon);
$id_materia = $datdat['id_materia'];
// ahora su sibla
$sqlsql = "select * from estudiantetemporada.materia where id='".$id_materia."' ";
$concon = mysqli_query($con, $sqlsql);
$datdat = mysqli_fetch_array($concon);
$sigla = $datdat['sigla'];

// ahora si insertando
$sqlsql = "insert into estudiantetemporada.deposito_caja (usuario, monto, nro_tramite, fecha, descripcion) values ('".$usuario_que_deposito."', '65', '".$nro_tramite."', '".$fecha_actual."', '".$sigla."') ";
mysqli_query($con, $sqlsql);






?>