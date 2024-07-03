<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Modifica tu cuenta </title>
</head>
<body>
  <?php
  $conexion=mysqli_connect("localhost","root","")or die("problemas en la conexión");
  mysqli_select_db($conexion,"salamovie")or die("problemas en la conexión de la base de datos");
   $nombre=$_POST['nombre'];
   $correo=$_POST['correo'];
   $contraseña=$_POST['contraseña'];

    $sql="UPDATE registrar SET nombre='$nombre', correo='$correo', contraseña='$contraseña' WHERE correo='$correo' ";
    $con=mysqli_query($conexion, $sql);
  
   mysqli_close($conexion);
  ?>
  </body>
</html>