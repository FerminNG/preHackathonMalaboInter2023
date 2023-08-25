<?php 

require '../conexion/conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['tipo'];
$tipo = $_POST['tipo'];


$sql= "UPDATE  residuos SET Nombre='$nombre', Descripcion='$descripcion', Tipo='$tipo' WHERE Id=$id";


if($conn->query($sql)){
    $id=$conn->insert_id;

    header('Location: ../admin/residuos.php?mensaje=actualizado'); 
}else{
    header('Location: ../residuos.php?mensaje=error');
}