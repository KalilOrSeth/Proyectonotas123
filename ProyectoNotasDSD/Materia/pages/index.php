<!DOCTYPE html>
<html>
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style="    background-image:  linear-gradient(100deg, #cbffdc 0, #baffdc 16.67%, #abffda 33.33%, #9df2d5 50%, #92e3cf 66.67%, #89d5c9 83.33%, #83c9c4 100%)
">
    <ul class="nav">
        <li class="nav-item " style="background-color: aliceblue; border: solid 1px;position: relative;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >
          <a class="nav-link" href="#">Agregar Materias</a>
           
        </li>
        <li class="nav-item"style="background-color: aliceblue; border: solid 1px;position: relative;
        font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" >
          <a class="nav-link" href="##">Registrar Notas</a>
        </li>
   
    </ul>

    <nav>
    <br>
    <h1>Lista de Materias</h1>
    <div class="container">
        <div class="col-auto mt-5">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                        <th>Id materia</th>
                        <th>Nombre de materia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require_once('../../Conexion.php');
                    require_once('../modelos/material.php');
                    $obj = new Administrador();
                    $datos = $obj->getadmin();
                    
                    if (is_array($datos) || is_object($datos)) 
                        foreach ($datos as $key) {
                            
                            ?>
                            <tr>
                                <td><?php echo $key['Idmateria'] ?></td>
                                <td><?php echo $key['Materia'] ?></td>
                                <td><a href="editar.php?id=<?php echo $key['Idmateria'] ?>" class="btn btn-danger">Actualizar</a></td>
                                <td><a href="eliminar.php?id=<?php echo $key['Idmateria'] ?>" class="btn btn-primary">Eliminar</a></td>
                            </tr>
                            
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</nav>
</body>
</html>



