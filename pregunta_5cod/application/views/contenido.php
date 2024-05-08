		<?php		
		
		foreach($cuentas as $cuenta)
		{
			$nombreCompleto = $cuenta->nombre ." ". $cuenta->paterno." ".$cuenta->materno;
			echo "<tr>";
			echo "<td>";			
			echo $nombreCompleto;
			echo "</td>";
			echo "<td>";			
			echo $cuenta->ci;
			echo "</td>";
			echo "<td>";			
			echo $cuenta->email;
			echo "</td>";
			echo "<td>";			
			echo $cuenta->telefono;
			echo "</td>";
			echo "<td>";			
			echo $cuenta->nroCuenta;
			echo "</td>";
			echo "<td>";			
			echo $cuenta->tipoCuenta;
			echo "</td>";	
			echo "<td>";			
			echo $cuenta->monto;
			echo "</td>";
			echo "<td>";			
			echo $cuenta->departamento;
			echo "</td>";
			echo "<td>";			
			echo $cuenta->fCreacion;
			echo "</td>";
			echo "<td>";			
			echo '<a href="' . base_url('welcome/eliminar/' . $cuenta->idCuenta) . '" class = "boton-eliminar" >Eliminar</a>';
			echo "</td>";
			echo "</tr>";
		}		
		
		//print_r($datos2);
		?>
		


