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
<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
  <img src="imagen3.jpg" alt="" width="80" height="80">  
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
          <a class="nav-link active" href="insert.php">Insertar Los Equipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="">Actualizar Equipos</a>
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
        <h2 class="mt-4">Edición de Registro Busqueda De Equipo</h2>
        <h2 class="mt-1">Esta Pagina: Fue Desarrollada Por Jesus Alberto Lomas Simon</h2>
        <hr>
        <form method="POST">
            <div class="form-group">
                <label for="campo">Campo:</label>
                <select name="campo" id="campo" class="form-select">
                  <option value="id">#ID</option>
                  <option value="equipo">#EQUIPO</option>
                </select>
            </div>    
            <br>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="text" name="valor" id="valor" class="form-control"/>
            </div>   
            <br>
            <div class="form-group">
                <input type="submit" name="buscar" value="Buscar" class="btn btn-warning"/>
                <a class="btn btn-info" href="index.php">Terminar</a>
            </div>
        </form>
    </div>
</div>
<br>
<?php
    if($_POST){
        include 'conn.php';
        //Mis Variables
        $valor = $_POST['valor'];
        $campo = $_POST['campo'];
        
        switch ($campo){
            case "id":
                $querySelect = "SELECT * FROM futbol WHERE Id = $valor";
                break;
            case "equipo":
                $querySelect = "SELECT * FROM futbol WHERE Equipo = '$valor'";
                break;
            case "rival":
                $querySelect = "SELECT * FROM futbol WHERE Rival = '$valor'";
                break;
            case "tiempo":
                $querySelect = "SELECT * FROM futbol WHERE Tiempo = '$valor'";
                break;
            case "hora":
                $querySelect = "SELECT * FROM futbol WHERE Hora = '$valor'";
                break;
            case "estado":
                $querySelect = "SELECT * FROM futbol WHERE Estado = '$valor'";
                break;
        }
        $resultado = mysqli_query($conn, $querySelect);

        if($resultado){
          echo "<table class='table'>
          <thead class='table-warning'>
          <tr>
              <th scope='col'>#ID</th>
              <th scope='col'>#EQUIPO</th>
              <th scope='col'>#RIVAL</th>
              <th scope='col'>#TIEMPO</th>
              <th scope='col'>#HORA</th>
              <th scope='col'>#ESTADO</th>
              <th scope='col'>#ACCIÓN</th>
            </tr>
          </thead>
          <tbody>";
          $ruta = "";
          while($row = mysqli_fetch_assoc($resultado)){
            echo "<tr class='table-light'><th>".$row["Id"].
            "</th><td class='table-primary'>".$row["Equipo"].
            "</td><td  class='table-success'>".$row["Rival"].
            "</td><td class='table-danger'>".$row["Tiempo"].
            "</td><td class='table-info'>".$row["Hora"].
            "</td><td class='table-secondary'>".$row["Estado"].
            "</td><td><a href='update2.php?id=".$row["Id"]."&equipo=".$row["Equipo"]."&rival=".$row["Rival"]."&tiempo=".$row["Tiempo"]."&hora=".$row["Hora"]."&estado=".$row["Estado"]." 'class='btn btn-warning'>Editar</a></td>";
          }
          echo "</tbody>
          </table>";        
        }else{
            echo "No hay Registros con Coinsidencia";
        }
    }
?>
</body>
</html>