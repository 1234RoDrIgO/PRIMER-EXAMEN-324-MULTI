<?php
$sql_t = "SELECT * FROM persona WHERE email = '$email'";
$resultado3 = mysqli_query($con, $sql_t); 
$verificar = mysqli_fetch_array($resultado3);

if($verificar['tipoUsuario'] == 'admin'){
    $sql_t = "SELECT 
    SUM(CASE WHEN departamento = '01' THEN monto END) Chuquisaca,
    SUM(CASE WHEN departamento = '02' THEN monto END) La_Paz,
    SUM(CASE WHEN departamento = '03' THEN monto END) Cochabamba,
    SUM(CASE WHEN departamento = '04' THEN monto END) Oruro,
    SUM(CASE WHEN departamento = '05' THEN monto END) Potosi,
    SUM(CASE WHEN departamento = '06' THEN monto END) Tarija,
    SUM(CASE WHEN departamento = '07' THEN monto END) Santa_Cruz,
    SUM(CASE WHEN departamento = '08' THEN monto END) Beni,
    SUM(CASE WHEN departamento = '09' THEN monto END) Pando
    FROM cuenta";
    
    $resultadoAd = mysqli_query($con, $sql_t); 
    while($filaAd = mysqli_fetch_array($resultadoAd)){        
        echo "<tr>";
        echo "<td>" . $filaAd['Chuquisaca'] . "</td>";
        echo "<td>" . $filaAd['La_Paz'] . "</td>";
        echo "<td>" . $filaAd['Cochabamba'] . "</td>";
        echo "<td>" . $filaAd['Oruro'] . "</td>";
        echo "<td>" . $filaAd['Potosi'] . "</td>";
        echo "<td>" . $filaAd['Tarija'] . "</td>";
        echo "<td>" . $filaAd['Santa_Cruz'] . "</td>";
        echo "<td>" . $filaAd['Beni'] . "</td>";        
        echo "<td>" . $filaAd['Pando'] . "</td>";
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