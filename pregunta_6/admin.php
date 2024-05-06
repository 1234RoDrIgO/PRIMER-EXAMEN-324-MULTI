<?php 
include "cabecera.inc.php"; 
?>
    <table class="tabla-datos">
        <thead>
            <tr>
                <th>Nombre Completo</th>
                <th>Carnet</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Número de Cuenta</th>
                <th>Tipo de Cuenta</th>
                <th>Monto</th>                
                <th>Cod. Depto.</th>
                <th>Fecha de Creación</th>
            </tr>
        </thead>
        <tbody>

<?php                                                 
include "consulta.inc.php";
include "pie.inc.php";
?>