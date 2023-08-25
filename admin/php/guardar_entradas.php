<?php


require '../conexion/conexion.php'; 
session_start();

$usuario = 1;# $_SESSION['codigo'];



$residuo = $conn->real_escape_string($_POST['residuo']);
$cantidad = $conn->real_escape_string($_POST['cantidad']);
$fechaRegistro = date("Y-m-d");

$sql = "INSERT INTO tieneresiduos (cantidad,FechaRegistro,residuo,Cliente)
    VALUES ('$cantidad','$fechaRegistro','$residuo','$usuario')";

if ($conn->query($sql)) {
    $id = $conn->insert_id;

    header('Location: ../users/entradas.php?mensaje=insertado');
} else {
    header('Location: ../users/entradas.php?mensaje=error');
}
