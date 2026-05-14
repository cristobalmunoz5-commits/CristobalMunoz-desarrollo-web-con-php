<?php

// iniciar o reanudar la sesion del usuario actual
session_start();

// echo '<pre>';
// var_dump($_SESSION);
// echo '</pre>';

if(isset($_SESSION['user_id'])){
    // el usuario esta logeado //
    header("location: ../../dashboard/");
    exit(); // siempre que haya un redireccionamiento //
} else {
    // si no hay sesion, es pq no hay usuario //
        header("location: user/login");
        exit(); // siempre que haya un redireccionamiento //
}