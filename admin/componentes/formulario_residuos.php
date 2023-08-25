<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">FORMULARIO DE REGISTRO</h4>
            <form class="forms-sample" method="POST" action="../php/guardar_residuos.php">
                <div class="form-group">
                    <label for="nombre">NOMBRE</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="NOMBRE">
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <textarea class="form-control" placeholder="DESCRIPCION" name="descripcion" id="descripcion" style="height: 100px"></textarea>
                </div>
                <div class="form-group">
                    <label for="institucion"> Tipos</label>
                    <select class="form-control" aria-label=".form-select-lg example" id="tipos" name="tipos" required>
                        <option selected value="">seleccione una Institucion.....</option>
                        <?php while ($institucion = mysqli_fetch_array($instituciones)) { ?>
                            <option value="<?php echo $institucion['Id']; ?>"><?php echo $institucion['Nombre']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary me-2">GUARDAR</button>
                <a href="../admin/residuos.php" class="btn btn-danger me-2">CANCELAR</a>
            </form>
        </div>
    </div>
</div>