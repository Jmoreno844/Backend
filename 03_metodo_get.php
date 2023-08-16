

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="03_metodo_get.php" method="post">
Nombre:
<input type="text" name="nombre">
<br>
Fecha:
<input type="date" name="fecha" id="">
<br>
Observacion:
<input type="text" name="obs">
<br>
<input type="submit" value= "Enviar">
</form>
<h2>Informacion enviada</h2>
<?php
print_r($_POST);
?>
</body>
</html>

