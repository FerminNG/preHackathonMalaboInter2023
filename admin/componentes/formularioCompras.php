<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body bodyFormCompra">
            <h4 class="card-title">FORMULARIO DE COMPRA</h4>
            <form id="FormCompra"  class="forms-sample" method="POST" action="../php/guardar_compra.php" enctype="multipart/form-data">
                <div class="form-group grupoForm">
                        <label for="residuo"> Producto</label>
                        <select class="form-control compo" aria-label=".form-select-lg example" id="residuo" name="residuo" required>
                            <option selected value="">Seleccione el producto</option>
                            <?php while ($institucion = mysqli_fetch_array($instituciones)) { ?>                               
                                <option value="<?php echo $institucion['Id']; ?>"><?php echo $institucion['Nombre']; ?></option>
                            <?php } ?>
                           
                        </select>
                    </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control compo" id="cantidad" name="cantidad" placeholder="¿Cuantos productos deseas?">
                </div>
                <button type="submit" class="btn btn-primary me-2 botonCom">COMPRAR</button> 
                <!-- <a href="./entradas.php" class="btn btn-light">CANCELAR</a> -->
            </form>
        </div>
    </div>
</div>