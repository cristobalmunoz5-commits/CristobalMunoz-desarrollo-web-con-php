<?php

session_start();

if(!isset($_SESSION['user_id'])){
    // si no SESSION es pq no hay usuario
    header("location: ../");
    exit(); // siempre que haya un redireccionamiento
}