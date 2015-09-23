<?php 
$dbc = mysqli_connect('localhost','root','root','elvisdb')
    or die ('No se ha podido conectar a la base de datos');

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];
  


$miConsulta = "INSERT INTO lista_email (nombre, apellidos, email)
                VALUES ('$nombre','$apellidos','$email')";

echo "Consulta generada:"."<br />";
echo $miConsulta."<br />";

$resultSet = mysqli_query($dbc,$miConsulta) or die ('Error al insertar las filas');
    
$row = mysqli_num_rows($resultSet);
echo $row;
    
mysqli_close($dbc);

    $msg='Buenas, me llamo '.$nombre;
    $msg.=' '.$apellidos;
    $msg.=', deseo recibir el aviso de mi compra en "'.$email.'".';
    
    echo "<br />";
    echo $msg;
?>