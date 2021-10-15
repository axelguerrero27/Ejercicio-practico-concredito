<?php

include ("db.php");
if(isset($_POST['guardar'])){
    $nombre=$_POST['nombre'];
    $papellido=$_POST['papellido'];
    $sapellido=$_POST['sapellido'];
    $calle=$_POST['calle'];
    $numero=$_POST['numero'];
    $colonia=$_POST['colonia'];
    $postal=$_POST['postal'];
    $telefono=$_POST['telefono'];
    $rfc=$_POST['rfc'];

    if($_FILES["adjunto"]){
        $nombre_base= basename($_FILES["adjunto"]["name"]);
        $nombre_final=date("m-d-y")."-". date("H-i-s"). "-". $nombre_base;
        $ruta=$nombre_final;
        $subirarchivo=move_uploaded_file($_FILES["adjunto"]["tmp_name"], $ruta);
        if($subirarchivo){
            $query="INSERT INTO captura (nombre, primerapellido, segundoapellido, calle, numero, colonia, codigopostal, telefono,rfc, documentos)
            values ('$nombre', '$papellido','$sapellido','$calle', '$numero', ' $colonia','$postal',
            '$telefono', '$rfc', '$ruta')";
            $result= mysqli_query($conn,$query);
            if($result)
            {
               echo "<script> alert('Se ha enviado toda la informacion'); window.location='captura.php'</script>";

            } else{
                printf("Errormessage: %s\n", mysqli_error($conn));
            }
        }
    }else {
        echo"Error al subir archivo";
    }

    
    
}

?>