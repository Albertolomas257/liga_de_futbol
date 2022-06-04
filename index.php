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
<nav class="navbar navbar-expand-lg navbar-light bg-success">
  <div class="container-fluid">
  <img src="imagen1.jpg" alt="" width="80" height="80">  
  <a class="navbar-brand" href="#">
    Marisqueria El Pez Feliz</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Lista De Equipos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="insert.php">Insertar Los Equipos</a>
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

<h1>Equipos De La Liga De Futbol_7 Del Pez Feliz</h1>
<h1 class="mt-0">Esta Pagina: Fue Desarrollada Por Jesus Alberto Lomas Simon</h1>
<table class="table">
  <thead class="table-warning">
  <tr>
      <th scope="col">#ID</th>
      <th scope="col">#EQUIPO</th>
      <th scope="col">#RIVAL</th>
      <th scope="col">#TIEMPO</th>
      <th scope="col">#HORA</th>
      <th scope="col">#ESTADO</th>
    
    </tr>
  </thead>
  <tbody>
    <?php
   
        include 'conn.php';
        $querySQL = "Select * From futbol";
        $result = mysqli_query($conn, $querySQL);
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr class='table-light'><th>".$row["Id"].
                "</th><td class='table-primary'>".$row["Equipo"].
                "</td><td class='table-success'>".$row["Rival"].
                "</td><td class='table-danger'>".$row["Tiempo"].
                "</td><td class='table-info'>".$row["Hora"].
                "</td><td class='table-secondary'>".$row["Estado"]."</td>";
                
            }
        }
        else{
            echo "La Tabla no tiene registros";
        }
        
    ?>
  </tbody>
</table>
</body>
</html>