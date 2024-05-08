<?php
    include "conexion.inc.php";
    $id = $_GET["idCuenta"];
    $email = $_GET["email"];
    $nroCuenta=$_GET["nroCuenta"];
    $tipoCuenta=$_GET["tipoCuenta"];
    $monto=$_GET["monto"];
    $departamento=$_GET["departamento"];
    $sql = "UPDATE cuenta SET nroCuenta= '".$nroCuenta."', tipoCuenta='".$tipoCuenta."', monto='".$monto."', departamento='".$departamento."' ";
    $sql .= "WHERE idCuenta ='" .$id."' " ;
    $resultado = mysqli_query($con, $sql);
    echo $email;
    header("Location: inicio.php?email=".$email);     

?>