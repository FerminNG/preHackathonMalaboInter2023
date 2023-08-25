

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">FORMULARIO DE REGISTRO</h4>
            <form class="forms-sample" method="POST" action="../php/guardar_productos.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nombre">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE" required>
                </div>
                <div class="form-group">
                    <label for="descripcion">DESCRIPCION</label>
                    <textarea class="form-control" placeholder="DESCRIPCION" name="descripcion" id="descripcion" style="height: 100px"></textarea>
                </div>
                <div class="form-group">
                    <label for="Tipo_Usuario">PRECIO</label>
                    <input type="number" class="form-control" id="precio" name="precio" placeholder="PRECIO" required>
                </div>
        
                <div class="form-group">
                    <label for="archivo">FOTO</label>
                    <input type="file" class="form-control" id="archivo" name="archivo" accept="image/*" required>
                </div>
                <button type="submit" class="btn btn-primary me-2">GUARDAR</button>
               <a href="../admin/productos.php" class="btn btn-danger me-2">CANCELAR</a>
            </form>
        </div>
    </div>
</div>