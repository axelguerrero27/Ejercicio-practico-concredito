<?
    include('db.php');

    if(isset($_POST['aceptar'])){
        $id=$_GET['id'];
        $estatus=$_POST['estatus'];
        $comentarios=$_POST['comentarios'];
        $query="UPDATE captura SET estatus='$estatus', comentario='$comentarios' WHERE id='$id'";
        mysqli_query($conn, $query);
        header("Location: evaluacion.php");
    }
?>