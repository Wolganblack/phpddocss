<?php include("../includes/header.php") ?>


<div class="row">
    <div class="col-sm-6">
        <h3>Lista de Artículos</h3>
    </div> 
    <div class="col-sm-4 offset-2">
        <a href="crear_articulo.php" class="btn btn-success w-100"><i class="bi bi-plus-circle-fill"></i> Nuevo Artículo</a>
    </div>    
</div>
<div class="row mt-2 caja">
    <div class="col-sm-12">
            <table id="tblArticulos" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Titulo</th>
                        <th>Imagen</th> 
                        <th>Texto</th>
                        <th>Fecha de creación</th>              
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
             
                    <tr>
                        <td>1</td>
                        <td>test</td>
                        <td>
                            <img class="img/articulos/" style="width:180px;">
                        </td>
                        <td>test</td>
                        <td>test</td>                      
                        <td>
                        <a href="editar_articulo.php" class="btn btn-warning"><i class="bi bi-pencil-fill"></i></a>                       
                        </td>
                    </tr>
               
                </tbody>       
            </table>
    </div>
</div>
<?php include("../includes/footer.php") ?>

<script>
    $(document).ready( function () {
        $('#tblArticulos').DataTable();
    });
</script>