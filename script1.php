<?php
//1. Crear una estructura html y mostrar en el título <title> el saludo "Hola tu nombre". El nombre debe aparecer mediante una variable
$nombre = 'Rodrigo Sambade Saá';
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
      echo "Hola $nombre";
    ?>
  </title>
</head>
<body>
  
</body>
</html>
