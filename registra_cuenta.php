<?php 
include "conexion.inc.php";
$contra = sha1($_GET['password']);
// echo $contra;
$sql = "insert into usuario (descripcion, pass) values ('".$_GET['usuario']."', '".$contra."'); ";
mysqli_query($con, $sql);


$sql_c = "select * from usuario where descripcion='".$_GET['usuario']."' ";
$con_c = mysqli_query($con, $sql_c);
$dat_c = mysqli_fetch_array($con_c);
print_r($dat_c);

$sql = "insert into rolusuario (IdRol, IdUsuario) values ('1', '".$dat_c['id']."'); ";
mysqli_query($con, $sql);


$sql = "insert into estudiantetemporada.alumno (usuario) values ('".$_GET['usuario']."'); ";
mysqli_query($con, $sql);

header("Location: index.php");

?>