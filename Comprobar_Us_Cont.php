<?php

 include 'conexion2.php';
 $USR=$_POST["user"];
 $PSWD=$_POST["password"];


 
$buscar_usr="SELECT password FROM USUARIOS WHERE user=$USR";

$res=mysqli_query($cnx, $buscar_usr);

if (is_null($res )){

	echo "No se encontro el usuario";
	
}

if ($PSWD == $res){
	header('Location: GAYOSSO_MAIN.html');
} else {
	echo "Error de conexion";
}


##if (!$buscar_usr && !$buscar_pswd) {
  ##  echo "Error de conexion";
##}
mysql_close($cnx);

?>