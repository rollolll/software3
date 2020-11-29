<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../config/database.php';
include_once '../class/empresas.php';

$database = new Database();
$db = $database->getConnection();

$item = new Empresa($db);

$data = json_decode(file_get_contents("php://input"));

$item->Nombre_emp = $data->Nombre_emp;
$item->Telefono = $data->Telefono;
$item->Direccion = $data->Direccion;
$item->Ciudad = $data->Ciudad;


if ($item->createEmpresa()) {
    echo 'Empresa created successfully.';
} else {
    echo 'Empresa could not be created.';
}
