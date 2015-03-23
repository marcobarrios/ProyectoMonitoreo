<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>Datos Guardados</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Marco Barrios
 * Date: 25/02/2015
 * Time: 3:25 PM
 */
echo ("Datos Guardados Correctamente!");
sleep(2);
echo ("Espere mientras cerramos su sesión");
sleep(2);
echo ("Redireccionando a pagina de inicio....");
sleep(2);
header('Location: index.php');
?>
</body>
</html>