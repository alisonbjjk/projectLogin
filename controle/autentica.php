<?php

session_start();
include('../model/conn.php');
$user = $_POST['username'];
$senha = $_POST['password'];
buscarLogin($user, $senha);

if ($_SESSION['logado'] == 1) {
    header("Location: ../sufee-admin-dashboard-master");
} else {
    header("Location: ../index.php");
}

buscarLogin($user, $senha);
