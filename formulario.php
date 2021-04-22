<?php
 $coneccion=mysqli_connect('localhost','root','','test') or die('Error en el servidor');
 $insertar="INSERT INTO alumno VALUES('".$_POST["Codigo"]."','".$_POST["Apellido"]."','".$_POST["Nombre"]."','".$_POST["Fecha_nac"]."')";
 $resultado=mysqli_query($coneccion,$insertar) or die('Error al ingresar');
 mysqli_close($coneccion);
 echo "Registro Ingresado";
?>