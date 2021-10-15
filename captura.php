<?php include("db.php")?>

<?php include("includes/header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            
            <div class="card card-body">
                <form class="ver" action="guardar.php" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nombre">Nombre:<label style="color:red;">*</label></label>
                        <input type="text" name="nombre" class="form-control"
                        placeholder="Nombre" required>
                        <label for="papellido">Primer apellido:<label style="color:red;">*</label></label>
                        <input type="text" name="papellido" class="form-control"
                        placeholder="Primer apellido" required>
                        <label for="sapellido">Segundo apellido:</label>
                        <input type="text" name="sapellido" class="form-control"
                        placeholder="Segundo apellido">
                        <label for="calle">Calle:<label style="color:red;">*</label></label>
                        <input type="text" name="calle" class="form-control"
                        placeholder="Calle" required>
                        <label for="numero">Numero:<label style="color:red;">*</label></label>
                        <input type="text" name="numero" class="form-control"
                        placeholder="Numero" required>
                        <label for="colonia">Colonia:<label style="color:red;">*</label></label>
                        <input type="text" name="colonia" class="form-control"
                        placeholder="Colonia" required>
                        <label for="postal">Codigo Postal:<label style="color:red;">*</label></label>
                        <input type="text" name="postal" class="form-control"
                        placeholder="Codigo postal" required>
                        <label for="telefono">Numero de telefono:<label style="color:red;">*</label></label>
                        <input type="text" name="telefono" class="form-control"
                        placeholder="Numero de telefono" required>
                        <label for="rfc">RFC:<label style="color:red;">*</label></label>
                        <input type="text" name="rfc" class="form-control"
                        placeholder="RFC" required>
                        <label for="adjunto">Documentos:<label style="color:red;">*</label></label>
                        <input type="file" name="adjunto" accept=".pdf,.jpg,.png, .docx, .pdf" multiple />

                        <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar"/>
                        <input type="submit" class="btn btn-success btn-block" style="background-color:red;"  name="salir" value="Cancelar/ Salir"
                         onclick="alert('Esta a punto de perder el registro. ¿Desea continuar?'); window.location='captura.php'"/>

                        
                    </div>
                </form>
            </div>

        </div>

        
    </div>
</div>

<?php include("includes/footer.php") ?>

