
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gayyosso</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/miestilo.css">
  <link rel="stylesheet" href="css/otroestilo.css">
  <link rel="stylesheet" href="miestilo.css">
  <link rel="stylesheet" href="css/buscar_cli.css">

</head>

<body >


  <header class="container-fluid">
      <div class="row">
          <div class="col header-nav mb-3">
              <nav class="navbar navbar-expand-md navbar-dark">
                  <a class="navbar-brand text-light" href="http://gayosso.uttics.com">
                      <img src="img/LOGOTRANSPARENTE.png" class="logotamañoptimize">
                  </a>
                  <h2 class="centerr text-white">BUSCAR CLIENTE</h2>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <ul class="navbar-nav ml-auto acomodo">
                    <li class="nav-item">
                      <div class="dropdown">
                  <button class="btn btn-outline-gayosso dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Menú Gayosso
                  </button>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="GAYOSSO_MAIN.php">Inicio</a>
                  <a class="dropdown-item" href="cerrarsesion.php">Cerrar Sesión</a>
                  </div>
                  </div>
                      </li>
                    </ul>
              </nav>
              <div class="collapse navbar-collapse" id="navbar">
                  <ul class="navbar-nav">

                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item">
                        <a class="btn btn-outline-secondary text-light nav-link" href="GAYOSSO_MAIN.php">Inicio</a>
                        <a class="btn btn-outline-secondary text-light nav-link" href="GAYOSSO_login.html">Cerrar Sesión</a>
                      </li>
                  </ul>
              </div>
          </div>
      </div>
  </header>


  <?php

  include 'php/conexiongayosso.php';
  $conexion = new database();
  $conexion->conectarDB();

  echo "<div class='container'>
          <div class='col .col-lg-6 .col-md-6 .col-sm-6 .col-xs-6'>
                    <form action='index_cli.php' method='post'>
                    <div class='alert alert-success d-flex justify-content-center mt-3'  role='alert'>
                    <h4 class='title'>Cliente:</h4>
                    <input class='input1' type='text' name='busq' placeholder='Buscar cliente' id='nombre1' required>
                    <input type='submit' class='btn search1' value='Buscar' >
                    <a href='index_cli.php' type='button' class='btn search2'>Nueva busqueda</a>'


                    </div>
                      </form>
                  </div>

  </div>";


    if($_POST)
    {
      extract($_POST);
      $name = $_POST['busq'];
      //echo $newID;
    $consulta = "SELECT NOMBRE,AP,AM,DIRECCION,TELEFONO FROM CLIENTE WHERE NOMBRE = '$name'";
    $tabla = $conexion->seleccionar($consulta);
    echo "
           <table class='table table-gayosso table-striped table-bordered' id='lista'>
                 <thead>
         <tr>
         <th>NOMBRE</th><th>AP</th><th>AM</th><th>DIRECCION</th><th>TELEFONO</th>
         </tr>
         </thead>
         <tbody>";


     if($tabla == null)
     {
     echo "<center><h1>Sin resultados</center></h1>";
     }

     if ($tabla ==! null)
     {
       foreach ($tabla as $fila)
           {

             echo "<tr>";
             echo "<td>" . $fila['NOMBRE'] . "</td>";
             echo "<td>" . $fila['AP'] . "</td>";
             echo "<td>" . $fila['AM'] . "</td>";
             echo "<td>" . $fila['DIRECCION'] . "</td>";
             echo "<td>" . $fila['TELEFONO'] . "</td>";
             echo "</tr>";
           }
     }

    echo "</tbody>
          <table>";
        }
    $conexion->desconectarBD();
    ?>


 <br><br>
 <br><br>
 <footer class="container-fluid">
     <div class="row border-top py-1 justify-content-center">
         <div class="col-12 text-light text-center justify-content-center">
             <p class="footerUDSR">GAYOSSO® | TODOS LOS DERECHOS RESERVADOS | 2019</p>
             <p class="footerUDSR">EMPRESA: GAYOSSO</p>
             <p class="footerUDSR">CONTACTO: 8711785736</p>
             <p class="footerUDSR">CREADO POR &copy; UJMD </p>
             <a href="#" class="text-white">Ir a TOP</a>
         </div>
     </div>
 </footer>
</body>
</html>


<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
