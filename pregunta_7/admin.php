<?php 
include "cabecera.inc.php"; 
?>
    <table class="tabla-datos">
        <thead>
            <tr>
                <th>Chuquisaca</th>
                <th>La Paz</th>
                <th>Cochabamba</th>
                <th>Oruro</th>
                <th>Potosi</th>
                <th>Tarija</th>
                <th>Santa Cruz</th>                
                <th>Beni</th>
                <th>Pando</th>
            </tr>
        </thead>
        <tbody>

<?php                                                 
include "consulta.inc.php";
include "pie.inc.php";
?>