<?php

include 'cv.php';

$userUsuario=$_POST['us'];
$userContraseña=$_POST['passw'];

$loginUsuario = new controlLogin($userUsuario,$userContraseña);

$loginUsuario->loginUsuario();
header('Location: https://ignaciojordi.alwaysdata.net/p44/cv.php');

?>