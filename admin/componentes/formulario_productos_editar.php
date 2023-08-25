

<?php

require '../conexion/conexion.php';

$sqlUsuarios = " SELECT * FROM productos";

$usuarios = $conn->query($sqlUsuarios);


$id = $_GET['id'];

$sqlusuarios = " SELECT * FROM productos WHERE Id=$id";

$usuarios = $conn->query($sqlusuarios);
$fila2 = mysqli_fetch_assoc($usuarios);
$id_insert= $id;

?>



<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">FORMULARIO DE REGISTRO</h4>
            <form class="forms-sample" method="POST" action="../php/actualizar_productos.php" enctype="multipart/form-data">
                <div class="form-group">
                    <input type="hidden" value="<?php echo $fila2['Id']; ?>" name="id" id="id">
                    <label for="nombre">NOMBRE</label>
                    <input type="text" class="form-control" value="<?php echo $fila2['Nombre']; ?>" id="nombre" name="nombre" placeholder="NOMBRE DE USUARIO" required>
                </div>
                <div class="form-group">
                <label for="descripcion">DESCRIPCION</label>
                    <textarea class="form-control" placeholder="DESCRIPCION" name="descripcion" id="descripcion" style="height: 100px"><?php echo $fila2['Descripcion']; ?></textarea>
                </div>
                <div class="form-group">
                <label for="Tipo_Usuario">PRECIO</label>
                    <input type="number" value="<?php echo $fila2['precio']; ?>" class="form-control" id="precio" name="precio" placeholder="PRECIO" required>
                </div>
                
                <div class="form-group">
                    <label for="archivo">FOTO</label>
                    <input type="file" class="form-control" id="archivo" name="archivo" accept="image/*">

                    <?php

                  



                    ?>

<img src="data:image/jpg;base64,<?php echo base64_encode($fila2['Foto']); ?> " alt=""  height="60px" class="mt-2">







                </div>
                <button type="submit" class="btn btn-primary me-2">ACTUALIZAR</button>
                <a href="../admin/productos.php" class="btn btn-danger me-2">CANCELAR</a>
            </form>
        </div>
    </div>
</div>