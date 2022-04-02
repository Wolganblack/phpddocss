<?php include("db.php"); ?>

<?php include("header.php"); ?>

<div class="container p-4">

    <div class="row">

        <div class="col-md-4">

            <?php if (isset($_SESSION['message'])) {  ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <?= $_SESSION['message'] ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>

            <?php session_unset();
            } ?>
            <div class="card card-body">

                <form action="insertar.php" method="POST">

                    .<div class="form-group">
                        <label for=""></label>
                        <input type="text" name="carnet" required class="form-control" placeholder="carnet" aria-describedby="helpId" autofocus>
                        <small id="helpId" class="text-muted"> <strong>Numero de carnet</strong> </small>
                    </div>
                    <div class="form-group">

                        <input type="text" name="nombre" required class="form-control" placeholder="nombre" aria-describedby="helpId" autofocus>

                        <small id="helpId" class="text-muted"> <strong>Nombre</strong> </small>

                    </div>
                    <div class="form-group">

                        <input type="text" name="apellido" required class="form-control" placeholder="apellido" aria-describedby="helpId" autofocus>

                        <small id="helpId" class="text-muted"> <strong>Apellido</strong> </small>

                    </div>
                    <div class="form-group">

                        <textarea name="direccion" required class="form-control" placeholder="direccion"></textarea>
                        <small id="helpId" class="text-muted"> <strong>Direccion</strong> </small>

                    </div>
                    </br>
                    <div class="form-group">

                        <input type="Number" name="edad" required class="form-control" placeholder="edad" aria-describedby="helpId" autofocus>
                        <small id="helpId" class="text-muted"> <strong>Edad</strong> </small>


                    </div>
                    </br>
                    <input type="submit" , class="btn btn-primary btn-lg" name="enviar" value="enviar">
                </form>

            </div>
        </div>

        <div class="col-md-8">
            <table class="table table-bordered">
                <thead>

                    <tr>

                        <th>Carnet</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Direccion</th>
                        <th>Edad</th>
                        <th>Actualizar </th>
                        <th>Eliminar </th>
                    </tr>
                </thead>
                <tbody>

                    <?php

                    $query_s = "SELECT * FROM estudiante";
                    $result_consulta;
                    $result_consulta = mysqli_query($conexion, $query_s);
                    while ($row = mysqli_fetch_array($result_consulta)) { ?>

                        <tr>

                            <td><?php echo $row['carnet'] ?></td>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['apellido'] ?></td>
                            <td><?php echo $row['direccion'] ?></td>
                            <td><?php echo $row['edad'] ?></td>
                            <td>
                                <a href="editar.php?id=<?php echo $row['id'] ?> " class="btn btn-secondary">
                                    <i class="fa-solid fa-pencil" style="color:aqua"></i>
                                   
                                </a>
                                </td>
                            <td>
                                <a href="eliminar.php?id=<?php echo $row['id'] ?> " class="btn btn-danger">
                                    <i class="fa-solid fa-trash" style="color:black"></i>
                                    
                                       
                            </a>
                            </td>
                           
                        </tr>


                    <?php } ?>



                </tbody>
            </table>

        </div>

    </div>


</div>



<?php include("footer.php"); ?>