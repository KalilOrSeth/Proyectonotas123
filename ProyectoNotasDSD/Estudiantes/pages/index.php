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
<body style="background-image:  linear-gradient(100deg, #cbffdc 0, #baffdc 16.67%, #abffda 33.33%, #9df2d5 50%, #92e3cf 66.67%, #89d5c9 83.33%, #83c9c4 100%)">
    <nav>
        <ul class="nav">
            <li class="nav-item" style="background-color: aliceblue; border: solid 1px;position: relative; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <a class="nav-link" href="#">Materias</a>
            </li>
            <li class="nav-item" style="background-color: aliceblue; border: solid 1px;position: relative; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <a class="nav-link" href="../../docentes/pages/agregar.php">Docentes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="background-color: aliceblue; border: solid 1px;position: relative; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" href="">Estudiantes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" style="background-color: red; border: solid 1px;position: relative; font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" href="#">Cerrar Sesion</a>
            </li>
        </ul>
    </nav>
    <nav>
        <br>
        <h1>Lista de usuarios</h1>
        <div class="container">
            <div class="col-auto mt-5">
                <table class="table table-dark table-hover">
                    <thead>
                        <tr>
                            <th>Id usuario</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th>Usuario</th>
                            <th>Perfil</th>
                            <th>Estado</th>
                            <th>Actualizar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require_once('../../Conexion.php');
                        require_once('../modelos/estudiantes.php');
                        $obj = new Administrador();
                        $datos= $obj->getadmin();

                        foreach ($datos as $key) {
                        ?>
                            <tr>
                                <td><?php echo $key['id_usuario'] ?></td>
                                <td><?php echo $key['Nombreusu'] ?></td>
                                <td><?php echo $key['Apellidousu'] ?></td>
                                 <td><?php echo $key['Usuario'] ?></td>
            <td><?php echo $key['Perfil'] ?></td>
            <td><?php echo $key['Estado'] ?></td>
            <td><a href="editar.php?id=<?php echo $key['id_usuario'] ?>" class="btn btn-danger">Actualizar</a></td>
            <td><a href="eliminar.php?id=<?php echo $key['id_usuario'] ?>" class="btn btn-primary">Eliminar</a></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
</nav>

   
</table>
</div>
</div>
</body>
</html>
</body>
</html>