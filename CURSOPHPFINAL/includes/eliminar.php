<?php 

include("db.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $queryeliminar = "DELETE FROM estudiante where
        id=$id";
    $result = mysqli_query($conexion, $queryeliminar);

    if (!$result) {
        die("Eliminacion fallida");
    }
    
    else 
    $_SESSION['message'] = "Se elimino el registro";
    $_SESSION['message_type'] = 'danger';
    echo "Se elimino el registro";
    header("Location:index.php");
}
?>