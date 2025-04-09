<?php
session_start();

if (!isset($_SESSION['id_user'])) {
    header("Location: ../pages/signIn.php");
    exit();
}

$id_user = $_SESSION['id_user'];
