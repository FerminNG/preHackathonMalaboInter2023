<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">FORMULARIO DE REGISTRO DE ENTRADAS</h4>
            <form class="forms-sample" method="POST" action="../php/guardar_entradas.php" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="residuo"> Residuo</label>
                        <select class="form-control" aria-label=".form-select-lg example" id="residuo" name="residuo" required>
                            <option selected value="">seleccione el residuo que tienes</option>
                            <?php while ($institucion = mysqli_fetch_array($instituciones)) { ?>
                                <?php 
                                    $codTipo = $institucion['Tipo'];
                                    $qTipo = "SELECT * FROM tipos WHERE Id = '$codTipo'";
                                    $ResultTipo = $conn->query($qTipo);
                                    $datoTipo = mysqli_fetch_array($ResultTipo);
                                ?>
                                <option value="<?php echo $institucion['Id']; ?>"><?php echo $institucion['Nombre']." de ".$datoTipo['Nombre']; ?></option>
                            <?php } ?>
                            <option value="otros">Otros</option>
                        </select>
                    </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad en Kilogramos</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="La cantidad que sea en Kilogramos por ejemplo 100KG">
                </div>
                <button type="submit" class="btn btn-primary me-2">GUARDAR</button> 
                <a href="./entradas.php" class="btn btn-light">CANCELAR</a>
            </form>
        </div>
    </div>
</div>