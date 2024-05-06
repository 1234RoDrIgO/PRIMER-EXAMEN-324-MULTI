<?php
    $sql_t = "SELECT * FROM persona WHERE email = '$email'";
    $resultado3 = mysqli_query($con, $sql_t); 
    $verificar = mysqli_fetch_array($resultado3);

    if($verificar['tipoUsuario'] == 'admin'){
        $sqlAd = "SELECT persona.nombre, persona.paterno, persona.materno, persona.ci, persona.email, persona.telefono, 
        cuenta.nroCuenta, cuenta.tipoCuenta, cuenta.monto, cuenta.departamento, persona.fCreacion
        FROM cuenta
        JOIN persona ON cuenta.idUsuario = persona.idUsuario
        ORDER BY cuenta.idUsuario";
        $resultadoAd = mysqli_query($con, $sqlAd); 
        while($filaAd = mysqli_fetch_array($resultadoAd)){
            $nombreCompleto = $filaAd['nombre'] . " " . $filaAd['paterno'] . " " . $filaAd['materno'];
            echo "<tr>";
            echo "<td>" . $nombreCompleto . "</td>";
            echo "<td>" . $filaAd['ci'] . "</td>";
            echo "<td>" . $filaAd['email'] . "</td>";
            echo "<td>" . $filaAd['telefono'] . "</td>";
            echo "<td>" . $filaAd['nroCuenta'] . "</td>";
            echo "<td>" . $filaAd['tipoCuenta'] . "</td>";
            echo "<td>" . $filaAd['monto'] . "</td>";
            echo "<td>" . $filaAd['departamento'] . "</td>";
            echo "<td>" . $filaAd['fCreacion'] . "</td>";

            echo "</tr>";
        }
    }else{
        $sqlAd = "SELECT  c.idCuenta, c.nroCuenta, c.tipoCuenta, c.departamento, c.monto, p.fCreacion 
            FROM PERSONA p JOIN CUENTA c 
            ON p.idUsuario = c.idUsuario 
            WHERE p.email = '$email'";
        $resultadoAd = mysqli_query($con, $sqlAd);
        while($filaAd = mysqli_fetch_array($resultadoAd)){            
            echo "<tr>";
            echo "<td>" . $filaAd['nroCuenta'] . "</td>";
            echo "<td>" . $filaAd['tipoCuenta'] . "</td>";
            echo "<td>" . $filaAd['monto'] . "</td>";
            echo "<td>" . $filaAd['departamento'] . "</td>";
            echo "<td>" . $filaAd['fCreacion'] . "</td>";
            echo "</tr>";
        }
    }

    
?>