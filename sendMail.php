<?php
$dbc = mysqli_connect('localhost','root','root','elvisdb')
    or die ('No se ha podido conectar con la base de datos');

$consulta = "SELECT * FROM lista_email";
$resultado = mysqli_query($dbc,$consulta);

while ($row = mysqli_fetch_array($resultado)){
    echo $row["Nombre"].", ". $row["Apellidos"].", ". $row["Email"]."<br />";
}
mysqli_close($dbc);
?>