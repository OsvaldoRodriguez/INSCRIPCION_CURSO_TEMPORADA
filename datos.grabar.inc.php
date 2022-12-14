
<h1>Datos grabar</h1>
<?php
include "conexion.inc.php";
$id=$_GET["id"];
$nombrecompleto=$_GET["nombrecompleto"];
$departamento = $_GET["departamento"];
$fechanacimiento=$_GET['fechanacimiento'];
$ci = $_GET['ci'];
$id_materia_inscrita = $_GET['materia_inscrita'];
$cpt = $_GET['cpt'];
// echo $id_materia_inscrita;
$sql = "update estudiantetemporada.alumno set nombrecompleto='".$nombrecompleto."', departamento = '".$departamento."', fechanacimiento= '".$fechanacimiento."', ci='".$ci."', cpt='".$cpt."' ";
$sql.= "where id= '".$id."' ";
echo $sql;
mysqli_query($con, $sql);

echo $_GET['materia_inscrita'];

// ahora actualizar la materia inscrita (preinscrito)
$sql = "insert into estudiantetemporada.ultimo (nro_tramite) values ('".$nro_tramite."')";
// echo $sql;
mysqli_query($con, $sql);

// ahora si actualizamos

$sql = "update estudiantetemporada.ultimo set id_materia='".$_GET['materia_inscrita']."' where nro_tramite='".$nro_tramite."'";
mysqli_query($con, $sql);


