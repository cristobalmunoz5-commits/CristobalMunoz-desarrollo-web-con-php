<?php

session_start();

if(isset($_SESSION['user_id'])){
    // el usuario ya esta logeado //
    header("location: ../../../dashboard/");
    exit(); // siempre que haya un redireccionamiento //
} 

$formUsername = $_POST['username'];
$formPassword = $_POST['password'];

$user = 'proyecto@web.cl';
$pass = 'holaMundo!';

if ($user === $formUsername && $pass === $formPassword){
    $_SESSION['user_id'] = 1;
    $_SESSION['username'] = 'Profe :)';

    header("location: ../../../backoffice/");
    exit(); // siempre que haya un redireccionamiento //
}

$_SESSION['error'] = ['login' => 'Usuario o contraseña incorrectos'];
header("location: ../");