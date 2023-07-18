<?php
include_once('../modelos/validar.php');
?>

<html lang="en">
<head>
  <title>Eliminar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="/estilos/style.css" type="Text/css">
</head>
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
<body style="background-image:  linear-gradient(100deg, #cbffdc 0, #baffdc 16.67%, #abffda 33.33%, #9df2d5 50%, #92e3cf 66.67%, #89d5c9 83.33%, #83c9c4 100%)
">
     <h2>Sesion Actual: <?php echo $_SESSION["usuario"]?></h2>
    <h1 style="    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    left: 550px;
    position: relative;
    margin: 5px;
    width: 300px;
    height: 55px;
">Eliminar cuenta</h1>
    <br>
    <form  action="../controladores/eliminarusuario.php " method="POST">
      
     <input type="number" id="Id"name="id" class="form-control" placeholder="Id" style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
     <br>
     <input name="values" type="submit"class="form-control" placeholder="Enviar"style="height: 40px;width: 250px;border: solid 1px;left: 550px;position: relative;
   font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
    </form>
    
    
</body>
</html>


