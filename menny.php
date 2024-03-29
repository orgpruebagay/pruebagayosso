<!DOCTYPE html>
<html>
<head>
   <title>Cotización</title>
    <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Gayyosso</title>

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/miestilo.css">
  <link rel="stylesheet" href="miestilo.css">
  <link rel="stylesheet" href="css/index_cotizacion.css">

</head>

<body>

  <?php
  include 'php/conexiongayosso.php';
  $conexion = new database();
  $conexion->conectarDB();
  $gsent = "SELECT * FROM CLIENTE;";
$gsent->execute();

print("Obtener todas las filas restantes del conjunto de resultados:\n");
$resultado = $gsent->fetchAll();
print_r($resultado);
?>
<div style="background-color:#B6B4B4; width: 100%;">
  <div class="row">
    <div class="col .col-lg-3 .col-md-3 .col-sm-3 .col-xs-3">
       <img src="img/Logo-Gayosso-e1491492627308.png" class="ml-5 lg">
    </div>
    <div class="col .col-lg-6 .col-md-6 .col-sm-6 .col-xs-6">
      <h5 class="fuente1">Grupo Gayosso S.A. de C.V. </h5>
      <h6 class="fuente2">Cotización</h6>
      <h6 class="fuente3">Servicios Funerarios, Cremaciones, Mausoleos y Cementerios</h6>
    </div>
    <div class="col .col-lg-3 .col-md-3 .col-sm-3 .col-xs-3">
    </div>
  </div>
</div>



<br>
<br>

<div class="container" style="background-color:#B6B4B4; margin-top:2%; ">
  <div class="row">
    <div class="col">
      <h6 style="font-size: 25px;">A. Datos del Cliente (Consumidor)</h6>
    </div>
  </div>
</div>

<div class="container cuadrilatero1">
  <div class="row">
    <div class="col fnt">Nombre</div>
    <div class="col fnt">Apellidos</div>
    <div class="col fnt">Dirección</div>
    <div class="col fnt">Telefono</div>
  </div>
</div>



<div class="container" style="background-color:#B6B4B4; margin-top:2%; ">
  <div class="row">
    <div class="col">
      <h6 style="font-size: 25px;">C. Datos de los Bienes y/o Servicios</h6>
    </div>
  </div>
</div>

<div class="container cuadrilatero2"></div>


</center>


   <br>
   <br>
   <br>



  <div class="centrar">
    <div class="d-flex justify-content-between" style="width: 20%">
   <input type="button" class="btn ml-3" style="background-color: #3c5337; color: white" value="Imprimir" onclick="window.print()">
<a href="index_co.php"><button class="btn  ml-3" style="background-color: #3c5337; color: white">Contratar</button></a>
<a href="GAYOSSO_FUNERARIO.html"><button class="btn  ml-3" style="background-color: #3c5337; color: white">Cancelar</button></a>
 </div>
  </div>

  <br>
  <br>

<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/popper.min.js"></script>







</body>
</html>
