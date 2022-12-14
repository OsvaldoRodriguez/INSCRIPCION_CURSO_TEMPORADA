<?php
// $user_que_entro = $_SESSION['usuario'];
// $ff = $_GET['flujo'];
// $pp = $_GET['proceso'];
// $nro_tramite = $_GET['nro_tramite'];
// echo $user_que_entro." DEBEMOS DE ACTUALIZAR LOS PROCESOS DEL USUARIO EN SI <br/>";
// $fecha_y_hora =  date('y-m-d h:i:s');
// echo "flujo ".$ff." ".$pp." <br/>";
// echo $nro_tramite. "<br/>";
// echo $fecha_y_hora."<br/>";

// // quiero encontrar que proceso era antes de la condicion para finalizar
// $sql="SELECT * FROM flujocondicion ";
// $sql.="WHERE procesoSI='$pp' or procesoNO='".$pp."' ";
// $resultadofi=mysqli_query($con, $sql);
// $filafi=mysqli_fetch_array($resultadofi);
// print_r($filafi);

// $proceso_a_finalizar = $filafi['proceso'];
// // echo "found ".$proceso_a_finalizar."<br/>";


// $sql="SELECT * FROM flujotramite ";
// $sql.="WHERE nro_tramite='$nro_tramite' and Flujo='".$ff."' and proceso='".$proceso_a_finalizar."' and fechafin is null ";
// $resultadofi=mysqli_query($con, $sql);
// $filafi=mysqli_fetch_array($resultadofi);
// // print_r($filafi);

// $fechaini = $filafi['fechaini'];
// $usuario = $filafi['usuario'];
// $usuario_tarea = $filafi['usuario_tarea'];

// $opcion = 1;
// // 1 siguiente 
// // 2 Anterior

// if(isset($_GET['Anterior'])){
//     $opcion = 0;
// }
// // echo $Flujo." ".$proceso." ".$nro_tramite. " ".$fechaini." ".$fechafin." ".$usuario. "<br/>";
// if($filafi["fechafin"] == null and $opcion == 1){
//     // echo "es nulo <br/>";
//     // // actualizando la tabla flujotramite
//     $sql="UPDATE flujotramite ";
//     $sql.="SET Flujo='".$ff."', ";
//     $sql.="proceso='".$proceso_a_finalizar."', ";
//     $sql.="nro_tramite='".$nro_tramite."', ";
//     $sql.="fechaini='".$fechaini."', ";
//     $sql.="fechafin='".$fecha_y_hora."', ";
//     $sql.="usuario='".$usuario."', ";
//     $sql.="usuario_tarea='".$usuario_tarea."' ";
//     $sql.="WHERE nro_tramite='$nro_tramite' and Flujo='".$ff."' and proceso='".$proceso_a_finalizar."' and fechafin is null ";
//     // echo $sql;
//     $resultadofi=mysqli_query($con, $sql);

    
// }else{
//     echo "ya no esta nulo <br/>";
// }

?>