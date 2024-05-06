<?php
include "conexion.inc.php";

$id = $_GET["idCuenta"];
$sql = "DELETE FROM cuenta WHERE idCuenta ='" .$id."'";
$resultado = mysqli_query($con, $sql);
header("Location: index.php");

?>