<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registro Docente</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body style=" background-image: linear-gradient(100deg, #cbffdc 0, #baffdc 16.67%, #abffda 33.33%, #9df2d5 50%, #92e3cf 66.67%, #89d5c9 83.33%, #83c9c4 100%)">
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
      
<center>
<div class="container">
  <h2>Registro Docente</h2>
  <?php
   require_once('../../Conexion.php');
   require_once('../../metodos.php');
   $me = new Consultas();
   ?>
  <form  action="../../docentes/controladores/agregardocente.php" method="POST">

    <div class="form-group">
      <label for="uname"></label>
      <input type="text" class="form-control" id="Nombredoc" name="txtnombre" placeholder="Nombre del docente" name="uname" required style="width: 300px;">
      <div class="valid-feedback"></div>
      <div class="invalid-feedback"></div>
    </div>
    <div class="form-group">
      <label for="uname"></label>
      <input type="text" class="form-control" id="Apellidodoc" name="txtapellido" placeholder="Apellido del Docente  " name="uname" required style="width: 300px;">
      <div class="valid-feedback"></div>
      <div class="invalid-feedback"></div>
    </div>
    <div class="form-group">
      <label for="uname"></label>
      <input type="email" class="form-control" id="Correodoc" name="txtcorreo" placeholder="Correo Docente  " name="uname" required style="width: 300px;">
      <div class="valid-feedback"></div>
      <div class="invalid-feedback"></div>
    </div>
   
    <div class="form-group">
      <label for="uname"></label>
      <input type="number" class="form-control" id="Documentodoc" name="txtdocumento" placeholder="Documento Docente  " name="uname" required style="width: 300px;">
      <div class="valid-feedback"></div>
      <div class="invalid-feedback"></div>
    </div>
  
    
    <div class="form-group">
      <label for="uname"></label>
      <input type="decimal" class="form-control" id="Notas" name="txtnotas" placeholder="Notas " name="uname" required style="width: 300px;">
      <div class="valid-feedback"></div>
      <div class="invalid-feedback"></div>
    </div>

    <div class="form-group">
      
      <select  type="txt" class="form-control" id="Notas" name="txtmateria" placeholder="Materia " name="txtmateria" required style="width: 300px;">
      <option>Seleccionar</option>
      <?php
       $mate =$me->getmaterias();
       if($mate !=null)
       {
         foreach($mate as $ma)
         
       {
       ?>
       <option value="<?php echo $ma['Materia'];?>">
       <?php echo $ma ['Materia'];?></option><?php 
       }
     }
      ?>
 
    </div>

<div class="form-group form-check">
      <label class="form-check-label">
        <input class="form-check-input" type="submit" name="remember" required> Enviar
      </label>
    </div>

  </form>
</div>
</center>

</body>
</html>