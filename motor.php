<?php
include "conexion.inc.php";
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$pantalla = $_GET["pantalla"];
$nro_tramite = $_GET['nro_tramite'];
$tipo = $_GET['tipo'];
$estado_para_ir_adelante = 1;
// echo $flujo." ".$proceso." ".$nro_tramite. "<br/>";


$fecha_actual =  date('y-m-d h:i:s');
// ahora hay que finalizar este proeso

//tenermos que saber si fue adelante o atras
// para eso si el flujo&proceso&nro_tramite ya existen entonces ignorar (no puede haber el mismo tramite varias veces)
$sql="select count(*) as cantidad from flujotramite ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."' and ";
$sql.="nro_tramite='".$nro_tramite."'";
$resultado22 = mysqli_query($con, $sql);
$fila22 = mysqli_fetch_array($resultado22);
$cantidad22 = $fila22["cantidad"];


// if($cantidad22 > 0){
// 	$estado_para_ir_adelante = 0;
// }



if($estado_para_ir_adelante == 1){
	$sql = "update flujotramite set ";
	$sql.= " fechafin='".$fecha_actual."' ";
	$sql.= " where ";
	$sql.= " Flujo='".$flujo."' and proceso='".$proceso."' and nro_tramite='".$nro_tramite."' and fechafin is null ";
	mysqli_query($con, $sql);
}
// echo $sql;

// echo $tipo."<br/>";

// echo "ucuario actual ".$_SESSION['usuario'];

// echo "ESTA EN MOTOR FLUJO-PROCESO -> ".$flujo." ".$proceso." ".$nro_tramite." ".$pantalla." <br/>";
// include "conexion.inc.php";
include $pantalla.".grabar.inc.php";

if (isset($_GET["Siguiente"]))
{
	echo "SIGUIENTES <br/>";
	$sql="select flujo, proceso, proceso_siguiente as procesoselect, tipo, rol, pantalla ";
	$sql.="from flujo ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
if (isset($_GET["Anterior"]))
{
	$sql="select flujo, proceso as procesoselect, proceso_siguiente, tipo, rol, pantalla ";
	$sql.="from flujo ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso_siguiente='".$proceso."'";
}

if (isset($_GET["Si"]))
{
	$sql="select flujo, procesoSI as procesoselect ";
	$sql.="from flujocondicion ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
if (isset($_GET["No"]))
{
	$sql="select flujo, procesoNO as procesoselect ";
	$sql.="from flujocondicion ";
	$sql.="where flujo='".$flujo."' and ";
	$sql.="proceso='".$proceso."'";
}
// echo " hola que tal <br/>";

// print_r($sql);
$resultadoo = mysqli_query($con, $sql);
// print_r($resultadoo);
// echo "erro <br/>";
$fila=mysqli_fetch_array($resultadoo);
// print_r($fila);
$proceso_select = $fila["procesoselect"];

// if($proceso_select == ""){
// 	// es condicionante
// 	echo "mostar  ".$proceso." <br/>";
// 	$sql="select flujo, proceso as procesoselect ";
// 	$sql.="from flujocondicion ";
// 	$sql.="where procesoSI='".$proceso."' or ";
// 	$sql.="procesoNO='".$proceso."'";

// 	echo $sql."<br/>";
// }


$proceso = $proceso_select;
$parametros="?flujo=".$flujo;
$parametros.="&proceso=".$proceso;
$parametros.="&nro_tramite=".$nro_tramite;

// calculando para el tipo
$sql="select * from flujo ";
$sql.="where flujo='".$flujo."' and ";
$sql.="proceso='".$proceso."'";
$resultado=mysqli_query($con, $sql);
$fila=mysqli_fetch_array($resultado);

echo "nuevo rol ".$fila['rol'];

$parametros.="&tipo=".$fila['tipo'];


echo "<br/>".$parametros."**** parametros <br/>";

// adicionando nueva tarea

$usuario_a_realizar_sig_tarea;

echo "hay  que encontrar otro rol";
// hay que buscar al otro usuario en este caso kardex
$rol_tarea = $fila['rol'];
// buscando el id de $fila['rol'] en rol
$sql="select * from rol ";
$sql.=" where descipcion='".$rol_tarea."' ";
$result1=mysqli_query($con, $sql);
$fila1 = mysqli_fetch_array($result1);

$id_rol = $fila1['id'];
echo "id rol ".$id_rol. "<br/>";


// ahora hay que buscar que usuario puede hacer esa tarea en rolusuario
$sql3="select * from rolusuario ";
$sql3.=" where IdRol='".$id_rol."' ";
$resultadofi3=mysqli_query($con, $sql3);
$filafi3 = mysqli_fetch_array($resultadofi3);

$id_usuario_tarea = $filafi3['IdUsuario'];

if($id_rol == 1){
	echo "es alumno <br/>";
	// hay que encontrar al usuario correcto

	$sql3="select * from flujotramite ";
	$sql3.=" where Flujo='".$flujo."' and nro_tramite='".$nro_tramite."' ";
	$resultadofi3=mysqli_query($con, $sql3);
	$filafi3 = mysqli_fetch_array($resultadofi3);
	
	echo " *************** ALUMNO CORRECTO <br/>".$filafi3['usuario']."<br/>";
	
	$usuario_usuario_alumno = $filafi3['usuario'];
	// buscando su id de ese alumno

	$sql3="select * from usuario ";
	$sql3.=" where descripcion='".$usuario_usuario_alumno."' ";
	$resultadofi3=mysqli_query($con, $sql3);
	$filafi3 = mysqli_fetch_array($resultadofi3);

	$id_correcto_usuario = $filafi3['id'];
	echo " *************** ID CORRECTO <br/>".$id_correcto_usuario."<br/>";
	$id_usuario_tarea = $id_correcto_usuario;
	
}

echo "id usuario siguiente tarea ".$id_usuario_tarea. "<br/>";
$sql4="select * from usuario ";
$sql4.=" where id='".$id_usuario_tarea."' ";
$resultado4=mysqli_query($con, $sql4);
$fila4 = mysqli_fetch_array($resultado4);
$usuario_a_realizar_sig_tarea = $fila4['descripcion'];

	// ahora ubiacmos al kardista

// ***************************************************************************************
$sql = "select * from flujotramite where Flujo='".$flujo."' and nro_tramite = '".$nro_tramite."' ";
$ress = mysqli_query($con, $sql);
$fill = mysqli_fetch_array($ress);

$usuario_anterior = $fill['usuario_tarea'];
// ***************************************************************************************



echo "usuario a realixar al siguient tarera ".$usuario_a_realizar_sig_tarea. "<br/>";
$sql ="insert into flujotramite(Flujo, proceso, nro_tramite, fechaini, fechafin, usuario, usuario_tarea) ";
$sql .= "values('".$flujo."', '".$proceso."','".$nro_tramite."', '".$fecha_actual."', NULL , '".$usuario_a_realizar_sig_tarea."','".$usuario_anterior."'); ";
// echo $sql;

if($tipo != 'F' and $estado_para_ir_adelante == 1 and isset($proceso)){
	mysqli_query($con, $sql);
}
// hay que controlar que el usuario sea el mismo or 

if ( $proceso == "" or $tipo == 'F' or ($_SESSION['rol'] != $fila['rol'])){
	header("Location: bentrada.php");
}else{
	// aqui hay que adicionar el nuevo proceso
	header("Location: flujo.php".$parametros);	
}
?>