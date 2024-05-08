<?php
include "conexion.inc.php";
$email = $_GET["email"];
$id = $_GET["idCuenta"];
$sql = "DELETE FROM cuenta WHERE idCuenta ='" .$id."'";
$resultado = mysqli_query($con, $sql);
header("Location: inicio.php?email=".$email);

?>