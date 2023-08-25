<?php 

require '../conexion/conexion.php';

$id = $_POST['id'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];
$imagen=addslashes(file_get_contents($_FILES['archivo']['tmp_name']));

$passwordHash = password_hash($password, PASSWORD_DEFAULT);

$sql= "UPDATE  productos SET Nombre='$nombre', Descripcion='$descripcion',precio='$precio', Foto='$imagen' WHERE Id=$id";


if($conn->query($sql)){
    $id=$conn->insert_id;

    header('Location: ../admin/productos.php?mensaje=actualizado'); 
}else{
    header('Location: ../admin/productos.php?mensaje=error');
}