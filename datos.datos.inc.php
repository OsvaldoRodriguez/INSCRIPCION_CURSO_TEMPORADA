<?php

// encontrar su id por usuario (usuario unico)
$user_que_entro = $_SESSION['usuario'];
$sql="SELECT * FROM estudiantetemporada.alumno ";
$sql.="WHERE usuario='$user_que_entro'";
$resultadofi=mysqli_query($con, $sql);
$filafi=mysqli_fetch_array($resultadofi);
$id=$filafi["id"];
$nombrecompleto=$filafi["nombrecompleto"];
$departamento = $filafi["departamento"];
$fechanacimiento = $filafi['fechanacimiento'];
$ci = $filafi["ci"];
$cpt = $filafi['cpt'];

$sql_mat = "select * from estudiantetemporada.materia";
$consulta = mysqli_query($con, $sql_mat);

?>