<?php

session_start();
include_once('../../mvc/v1/conexion.php ');
include_once('../../mvc/v1/models/usuario.php');


$modelo = new Usuario();

echo 'encender<br>';

var_dump($_POST);

echo 'Respuesta: ' . $modelo->powerOn($_POST['id']);

$_SESSION['ok']['msg'] = 'Se encendio exitosamente :).';
echo $_SESSION['ok']['msg'];
header("location: ../");
exit();
