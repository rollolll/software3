<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../class/empresas.php';

$database = new Database();
$db = $database->getConnection();

$items = new Empresa($db);

$stmt = $items->getEmpresas();
$itemCount = $stmt->rowCount();


echo json_encode($itemCount);

if ($itemCount > 0) {

    $EmpresaArr = array();
    $EmpresaArr["body"] = array();
    $EmpresaArr["itemCount"] = $itemCount;

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        extract($row);
        $e = array(
            "Nit" => $Nit,
            "Nombre_emp" => $Nombre_emp,
            "Telefono" => $Telefono,
            "Direccion" => $Direccion,
            "Ciudad" => $Ciudad

        );

        array_push($EmpresaArr["body"], $e);
    }
    echo json_encode($EmpresaArr);
} else {
    http_response_code(404);
    echo json_encode(
        array("message" => "No record found.")
    );
}
