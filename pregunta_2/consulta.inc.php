<?php
    $sql = "SELECT p.nombre, p.paterno, p.materno, c.idCuenta, c.nroCuenta, c.tipoCuenta, c.departamento, c.monto, p.fCreacion 
    FROM PERSONA p JOIN CUENTA c 
    ON p.idUsuario = c.idUsuario 
    WHERE p.email = '$email'";
    $resultado2 = mysqli_query($con, $sql);   
    $ass = mysqli_fetch_array($resultado2);
    $resultado3 = mysqli_query($con, $sql);   
    echo "<a href= 'añadir.php?idCuenta=" . $ass['idCuenta']. " ' >AÑADIR CUENTA</a>";
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
        echo "<a href= 'eliminar.php?idCuenta=" . $fila2['idCuenta'] . "?email=" . $email . "'>Eliminar</a>";
        echo " ";
        echo "<a href= 'editar.php?idCuenta=" . $fila2['idCuenta']. " ' >Editar</a>";
        echo "</td>";
        echo "</tr>";
    }    
?>