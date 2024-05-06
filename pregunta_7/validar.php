<?php

$usuario = $_POST['usuario'];
$contraseña = $_POST['contraseña'];

$contraseñaDes = sha1($contraseña);

session_start();
$_SESSION['usuario'] = $usuario;

$conexion=mysqli_connect("127.0.0.1:3307", "root", "", "BDRodrigo");

$consulta= "SELECT * FROM persona WHERE persona.email='$usuario' AND persona.contraseña = '$contraseñaDes' ";
$resultado = mysqli_query($conexion, $consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['tipoUsuario'] == 'admin'){
    header("location:admin.php?email=". urlencode($usuario));
}else{    
    header("location:index.php");
}
mysqli_free_result($resultado);
mysqli_close($con);
?>