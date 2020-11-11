<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
 <form name="formulario" method="post" action="programacion.php">

Nombre: <input type="text" name="nombre" value="">

<input type="submit" />

</form>
</body>
</html>




  <?

$nombre = $_POST['nombre'];

echo $nombre;

?> 
