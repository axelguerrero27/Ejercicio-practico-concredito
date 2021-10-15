<?php include("db.php")?>

<?php include("includes/header.php") ?>

<div class="col-md-8">
    <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nombre del prospecto</th>
                    <th>Primer Apellido</th>
                    <th>Segundo Apellido</th>
                    <th>Estatus</th>

                    <tbody>
                        <?php
                        $query="SELECT * FROM captura";
                        $result_cap=mysqli_query($conn,$query);
                        while ($row=mysqli_fetch_array($result_cap))
                        {?>
                        <tr>
                            <td><?php echo $row['nombre']?></td>
                            <td><?php echo $row['primerapellido']?></td>
                            <td><?php echo $row['segundoapellido']?></td>
                            <td><?php echo $row['estatus']?></td>
                            <td> 
                                <a href="evaluar.php?id=<?php echo $row["id"]?>">
                                    Evaluar prospecto
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </tr>
            </thead>
        </table>


</div>

<?php include("includes/footer.php") ?>
