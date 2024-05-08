<?php
    $sql = "SELECT p.nombre, p.paterno, p.materno, c.idCuenta, c.nroCuenta, c.tipoCuenta, c.departamento, c.monto, p.fCreacion 
    FROM PERSONA p JOIN CUENTA c 
    ON p.idUsuario = c.idUsuario 
    WHERE p.email = '$email'";
    $resultado2 = mysqli_query($con, $sql);   
    $ass = mysqli_fetch_array($resultado2);    
    $resultado3 = mysqli_query($con, $sql);  
    $urlA = 'añadir.php?idCuenta=' . $ass['idCuenta'] . '&email=' . $email; 
    echo "<a href='". $urlA ."' class='boton-anadir'>AÑADIR CUENTA</a>";

    echo "<br>";
    echo "<br>";
    
    while($fila2 = mysqli_fetch_array($resultado3)){
          
        echo "<tr>";                       
        echo "<td>" . $fila2['nroCuenta'] . "</td>";
        echo "<td>" . $fila2['tipoCuenta'] . "</td>";
        echo "<td>" . $fila2['monto'] . "</td>";
        echo "<td>" . $fila2['departamento'] . "</td>";
        echo "<td>" . $fila2['fCreacion'] . "</td>";
        echo "<td>";
        $url = 'eliminar.php?idCuenta=' . $fila2['idCuenta'] . '&email=' . $email;
        echo "<a href='" . $url . "' class='boton-eliminar'>Eliminar</a>";
        //echo "<a href='eliminar.php?idCuenta=" . $fila2['idCuenta'] . "&email=" . $email . "' class='boton-eliminar'>Eliminar</a>";
        echo " ";
        $url2 = 'editar.php?idCuenta=' . $fila2['idCuenta'] . '&email=' . $email;
        echo "<a href='" . $url2 . "' class='boton-editar'>Editar</a>";
        echo "</td>";
        echo "</tr>";
    }    
?>