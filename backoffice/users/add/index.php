<?php
session_start();
include_once('../../mvc/v1/models/usuario.php');

//Debugging (comentar en produccion)
echo '<pre>';
var_dump($_POST);
echo '</pre><hr>';

$modelo = new Usuario();

//1. Inicializar siempre  el arreglo 'items' para evitar errores?
$_SESSION['errores'] = [
    'mantenedor' => 'usuarios',
    'items' => []
];

//2. Limpieza basica y validacion
$email = trim($_POST['email'] ?? '');
$name = trim($_POST['name'] ?? '');
$lastname = trim($_POST['lastname'] ?? '');
$password = $_POST['password'] ?? '';
$password_confirm = $_POST['password2'] ?? '';
$rol = trim($_POST['rol'] ?? '');

if ($email == "") {
    $_SESSION['errores']['items']['email'] = 'Debe ingresar un email';
}
if ($name == "") {
    $_SESSION['errores']['items']['name'] = 'Debe ingresar un Nombre al usuario';
}
if ($lastname == "") {
    $_SESSION['errores']['items']['lastname'] = 'Debe ingresar un apellido al usuario';
}
if ($password == "" || $password != $password_confirm) {
    $_SESSION['errores']['items']['password'] = 'La contraseña es incorrecta';
}

// Debugging de sesion (comentar en produccion)
// echo '<pre>; var_dump($_SESSION); echo '</pre><br>'

//3. Evaluar si hay errores ANTES de llenar el ...

//4. Si llegamos aqui, no hay errores. Preparamos ...
echo 'no hay errores..<br>';
$modelo->setNombre($name);
$modelo->setApellido($lastname);
$modelo->setUsername($email);
$modelo->setPassword($password);
$modelo->setRol($rol);

//5. Encriptar contraseña...

//6.Insercion en la base de datos
include_once('../../mvc/v1/conexion.php ');


// DEJE TODO ESTO A MEDIAS, YA QUE NO SE LOGRO VER EL VIDEO (no habia video para este momento)