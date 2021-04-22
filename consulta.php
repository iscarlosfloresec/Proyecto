<?php

$user = "root";
$pass = "";
$host = "localhost";

$connection = mysqli_connect($host, $user, $pass);

if(!$connection) 
        {
            echo "No se ha podido conectar con el servidor";
//mysql_error();
        }
  else
        {
            
        }

$datab = "test";

$db = mysqli_select_db($connection,$datab);

if (!$db)
{
echo "No se ha podido encontrar la Tabla";
}
else
{

};

$consulta = "SELECT * FROM alumno";
$result = mysqli_query($connection,$consulta);
if(!$result) 
{
    echo "No se ha podido realizar la consulta";
}

echo "<table>";
echo "<tr>";
echo "<th><h1>Codigo</h1></th>";
echo "<th><h1>Apellido</h1></th>";
echo "<th><h1>Nombre</h1></th>";
echo "<th><h1>Fecha de Nacimiento</h1></th>";
echo "</tr>";

while ($colum = mysqli_fetch_array($result))
 {
    echo "<tr>";
    echo "<td><h2>" . $colum['Codigo']. "</h2></td>";
    echo "<td><h2>" . $colum['Apellido'] . "</h2></td>";
    echo "<td><h2>" . $colum['Nombre'] . "</h2></td>";
    echo "<td><h2>" . $colum['Fecha_nac'] . "</h2></td>";
    echo "</tr>";
}
echo "</table>";
?>