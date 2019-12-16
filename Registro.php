
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gayyosso</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/miestilo.css">
</head>

<body background="img/persons-731514_1280.jpg" style="background-size:cover">
  <header class="container-fluid">
      <div class="row">
          <div class="col header-nav mb-3">
              <nav class="navbar navbar-expand-md navbar-dark">
                  <a class="navbar-brand text-light" href="http://gayosso.uttics.com">
                      <img src="img/LOGOTRANSPARENTE.png" class="logotamañoptimize">
                  </a>
                  <h2 class="centerr text-white">BIENVENIDO</h2>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Menu de Navegacion">
                      <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbar">
                      <ul class="navbar-nav">

                      </ul>

                  </div>
              </nav>
          </div>
      </div>
  </header>


  <?php



  include 'php/conexiongayosso.php';
  $db=new database();
  $db->conectarDB();
  extract($_POST);
  $NOMBRE=$_POST["NOMBRE"];
  $AP=$_POST["AP"];
  $AM=$_POST["AM"];


  $insertar="INSERT INTO EMPLEADO(NOMBRE, AP, AM) values
  ('$NOMBRE', '$AP', '$AM')";


  $db->ejecutaSQL($insertar);

  echo "<br><br><div class='alert alert-success' align='center'><h2>Registro EXITOSO</h2></div>";
  header("refresh:3; index.php");

  $db->desconectarBD();
  ?>


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
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>
<script src="GAYOSSO.js"></script>
</html>
