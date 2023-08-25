<?php

require '../conexion/conexion.php';


$Id = $conn->real_escape_string($_POST['Id']);




 $sql= "DELETE FROM productos WHERE Id=$Id";

if($conn->query($sql)){
    header('Location: ../admin/productos.php?mensaje=eliminado');
}else{

    header('Location: ../admin/productos.php?mensaje=error');
    
}





?>