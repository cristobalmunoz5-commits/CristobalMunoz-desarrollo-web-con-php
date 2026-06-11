<?php

session_start();

//matamos la sesion
$_SESSION = array();

session_destroy();

echo 'Largo: ' . count($_SESSION);

if (count($_SESSION) == 0) {
    header("Location: ../../");
    exit();
}
