<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("conexion.php");
  $con=retornarConexion();
  

  mysqli_query($con,"update articulos set nombre='$params->nombre',
                                          apellido='$params->apellido'
                                          where codigo=$params->codigo");

                                          mysqli_query($con,"update pagos set cedula='$params->cedula',
                                          placa='$params->placa'
                                          monto='$params->monto'
                                          fecha_pago='$params->fechapago'
                                          where codigo=$params->codigo");
    
  
  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'datos modificados';

  header('Content-Type: application/json');
  echo json_encode($response);  
?>