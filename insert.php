<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>Liga De Futbol_7 El Pez Feliz</title>
</head>
<body class="container">
<nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
  <img src="imagen2.jpg" alt="" width="80" height="80">  
  <a class="navbar-brand" href="#">
    Marisqueria El Pez Feliz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Lista De Equipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">Insertar Los Equipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="update.php">Actualizar Equipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="delete.php">Eliminar Equipos</a>
        </li>
      </ul>
    </div>
  </div>
</nav> 
 
<div class="row">
    <div class="col-md-12">
        <h2 class="mt-4">Formulario de Registro Para Los Equipos</h2>
        <h2 class="mt-1">Esta Pagina: Fue Desarrollada Por Jesus Alberto Lomas Simon</h2>
        <hr>
        <form method="POST">
            <div class="form-group">
                <label for="equipo">Equipo:</label>
                <input type="text" name="equipo" id="equipo" class="form-control"/>
            </div>
            <br>
            <div class="form-group">
                <label for="rival">Rival:</label>
                <input type="text" name="rival" id="rival" class="form-control"/>
            </div>
            <br>
            <div class="form-group">
                <label for="tiempo">Tiempo:</label>
                <input type="tiempo" name="tiempo" id="tiempo" class="form-control"/>
            </div>
            <br>
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="hora" name="hora" id="hora" class="form-control"/>
            </div>
            <br>
            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" id="estado" class="form-select">
                  <option value="Activado">Activado</option>
                  <option value="Desactivado">Desactivado</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <input type="submit" name="guardar" value="Guardar" class="btn btn-warning"/>
                <a class="btn btn-info" href="index.php">Terminar</a>
            </div>
        </form>
    </div>
</div>
<br>

<?php
    include 'conn.php';

    if($_POST){
        //Mis Variables
        $equipo = $_POST['equipo'];
        $rival = $_POST['rival'];
        $tiempo = $_POST['tiempo'];
        $hora = $_POST['hora'];
        $estado = $_POST['estado'];

        //Comentario
        //echo $nombre, $apellido, $edad, $estado;

        $queryInsert = "INSERT INTO futbol (Equipo, Rival, Tiempo, Hora, Estado) VALUES ('$equipo', '$rival', '$tiempo', '$hora', '$estado')";
        if(!mysqli_query($conn, $queryInsert)){
            //echo "Registro capturado </br>";
            echo "Error: ".$queryInsert, mysqli_error($conn)."</br>";
        }
        else{
            echo "Registro Almacenado con Exito";
        }
    }
?>



</body>
</html>