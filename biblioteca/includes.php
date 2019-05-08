<?php

session_start();

if (!isset($_SESSION["sisvisitante2"])) {
    header('Location: login.php');
}

include_once "db.php";
include_once "constantes.php";
