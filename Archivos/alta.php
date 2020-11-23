<?php 
  header('Access-Control-Allow-Origin: *'); 
  header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
  
  $json = file_get_contents('php://input');
 
  $params = json_decode($json);
  
  require("conexion.php");
 
  

  mysqli_query($con,"insert into datos_empresa(Nit,Nombre_emp,Telefono,Direccion,Ciudad) values
                  ('$params->Nit','$params->Nombre_emp','$params->Telefono','$params->Direccion','$params->Ciudad')");

 
  
  class Result {}

  $response = new Result();
  $response->resultado = 'OK';
  $response->mensaje = 'datos grabados';

  header('Content-Type: application/json');
  echo json_encode($response);  
?>