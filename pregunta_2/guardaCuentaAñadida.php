<?php
include "conexion.inc.php";
$email= $_GET["email"];
$idUsuario= $_GET["idUsuario"];
$nroCuenta=$_GET["nroCuenta"];
$tipoCuenta=$_GET["tipoCuenta"];
$monto=$_GET["monto"];
$departamento=$_GET["departamento"];
$sql = "INSERT INTO cuenta(nroCuenta, tipoCuenta, departamento, monto, idBanco, idUsuario) 
        VALUES ('$nroCuenta', '$tipoCuenta', '$departamento', '$monto', '1', '$idUsuario')";
$resultado = mysqli_query($con, $sql);
header("Location: inicio.php?email=".$email);
?>