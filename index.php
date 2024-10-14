<?php
require_once 'conexion.php';
require_once 'controlador.php';
header("Content-Type:application/json");

$requestMethod = $_SERVER["REQUEST_METHOD"];
$paths = $_SERVER['REQUEST_URI'];
$parametros = explode("/",$paths);
$datosRecibidos = file_get_contents("php://input");
$body=json_decode($datosRecibidos,false);
unset($parametros[0]);
$respuesta=0;

switch ($uri[0]) {
    case 'admin':
        $controller = new Controlador();
        break;
    case 'user':
        $controller = new Controlador();
        break;
    case 'gamer':
        $controller = new Controlador();
        break;
    default:
    echo json_encode(['cod'=>204,
    'message'=>'La consulta no es correcta'
    ]);
        exit;
}

$controller->handleRequest($method, $uri);