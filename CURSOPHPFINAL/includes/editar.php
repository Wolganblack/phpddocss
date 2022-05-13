<?php
include("db.php");

if (isset($_GET['id'])) {

    $id = $_GET['id'];
    $query = "SELECT * FROM estudiante WHERE id=$id";
    $result = mysqli_query($conexion, $query);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_array($result);
        $carnet = $row['carnet'];
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $direccion = $row['direccion'];
        $edad = $row['edad'];
    }
    if(isset($_POST['editar'])){

            $id =$_GET['id'];
            $carnet=$_POST['carnet'];
            $nombre=$_POST['nombre'];
            $apellido=$_POST['apellido'];
            $direccion=$_POST['direccion'];
            $edad=$_POST['edad'];
        $query= "UPDATE estudiante SET carnet= '$carnet', nombre='$nombre',
        apellido ='$apellido', direccion='$direccion',edad='$edad' WHERE id=$id";
       

        $result= mysqli_query($conexion,$query);

         header("Location:index.php");
    }
}
?>

<?php include("header.php") ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4 mx-auto">

            <div class="card card-body">

                <form action="editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="carnet" value="<?php echo $carnet;  ?>"
                         class="form-control" placeholder="carnet">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="nombre" value="<?php echo $nombre;  ?>" 
                        class="form-control" placeholder="nombre">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="apellido" value="<?php echo $apellido;  ?>" 
                        class="form-control" placeholder="apellido">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="direccion" value="<?php echo $direccion;  ?>"
                         class="form-control" placeholder="direccion">
                    </div>
                    <br>
                    <div class="form-group">
                        <input type="text" name="edad" value="<?php echo $edad;  ?>"
                         class="form-control" placeholder="edad">
                    </div>
                    <br>
                    <input type="submit" , class="btn btn-success btn-lg" name="editar" value="actualizar">
                </form>


            </div>

        </div>

    </div>

</div>

<?php include("footer.php") ?>