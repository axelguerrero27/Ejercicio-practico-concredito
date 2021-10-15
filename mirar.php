<?php
    include('db.php');?>
    
<?php
    $id=$_GET['id'];
    $query="SELECT nombre,primerapellido,segundoapellido,calle,numero,colonia,codigopostal,telefono,rfc, estatus, comentario FROM captura WHERE id=$id";
    $result=mysqli_query($conn, $query);
    while ($row=mysqli_fetch_array($result))
    {?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <div class="container p-4">
    <div class="row">
        <div class="col-md-4">
            
            <div class="card card-body">
                <form >
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" value="<?php echo $row['nombre']?>" class="form-control" disabled>
                        <label for="papellido">Primer apellido:</label> 
                        <input type="text" name="papellido" value="<?php echo $row['primerapellido']?>" class="form-control" disabled>
                        <label for="sapellido">Segundo apellido:</label>
                        <input type="text" name="sapellido" value="<?php echo $row['segundoapellido']?>" class="form-control" disabled>
                        <label for="calle">Calle:</label>
                        <input type="text" name="calle" value="<?php echo $row['calle']?>" class="form-control" disabled>
                        <label for="numero">Numero:</label>
                        <input type="text" name="numero" value="<?php echo $row['numero']?>" class="form-control" disabled>
                        <label for="colonia">Colonia:</label>
                        <input type="text" name="colonia" value="<?php echo $row['colonia']?>" class="form-control" disabled>
                        <label for="postal">Codigo Postal:</label>
                        <input type="text" name="postal" value="<?php echo $row['codigopostal']?>" class="form-control" disabled>
                        <label for="telefono">Numero de telefono:</label>
                        <input type="text" name="telefono" value="<?php echo $row['telefono']?>" class="form-control" disabled>
                        <label for="rfc">RFC:</label>
                        <input type="text" name="rfc" value="<?php echo $row['rfc']?>" class="form-control" disabled>
                        <label for="estatus">Estatus:</label>
                        <input type="text" name="estatus" value="<?php echo $row['estatus']?>" class="form-control" disabled>
                        
                        <label for="comentario">Comentarios:</label>
                        <input type="text" name="comentario" value="<?php echo $row['comentario']?>" disabled class="form-control">

                        
                        <?php } ?>
                        
                        
                    </div>

                </form>
                <a href="listado.php">Regresar</a>
            </div>
        </div>
    </div>
</div>