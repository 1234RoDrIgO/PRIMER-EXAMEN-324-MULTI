<?php
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
    /*
    $filaAd = mysqli_fetch_array($resultadoAd);
    print_r ($filaAd['La_Paz']);
    $departamentos = array();
    foreach ($filaAd as $key => $value) {
        // Extraer el nombre del departamento de la clave y reemplazar los guiones bajos por espacios
        $nombre_departamento = str_replace('_', ' ', $key);
        // Convertir el nombre del departamento a mayúsculas
        $nombre_departamento = ucwords(strtolower($nombre_departamento));
        // Agregar el nombre del departamento al arreglo $departamentos
        $departamentos[] = $nombre_departamento;
    }

    print_r($departamentos);

    echo $departamentos[0];
    
*/

    
?>