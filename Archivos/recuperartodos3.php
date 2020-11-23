<?php 
  header('Access-Control-Allow-Origin: *');
  header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
  header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
  header("Allow: GET, POST, OPTIONS, PUT, DELETE");
  require("conexion.php");
  $con=retornarConexion();
  $params = json_decode($json);

  $registros=mysqli_query($con,"select articulos.nombre, articulos.apellido, pagos.placa, pagos.monto,
                            pagos.mes, pagos.dia, pagos.ano from articulos, pagos where
                            articulos.codigo =$cedula and pagos.cedula =$cedula");
    
  while ($reg=mysqli_fetch_array($registros))  
  {
    $vec[]=$reg;
  }
  
  $cad=json_encode($vec);
  echo $cad;
  header('Content-Type: application/json');
?>
