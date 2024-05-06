<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mDatos extends CI_Model {
  function __construct() {
	  parent::__construct();
  }
  
  function consulta_Cuentas()
  {
	$sql="SELECT persona.nombre, persona.paterno, persona.materno, persona.ci, persona.email, persona.telefono, 
  cuenta.idCuenta, cuenta.nroCuenta, cuenta.tipoCuenta, cuenta.monto, cuenta.departamento, persona.fCreacion
  FROM cuenta
  JOIN persona ON cuenta.idUsuario = persona.idUsuario
  ORDER BY cuenta.idUsuario";

	$query=$this->db->query($sql);
	return $query;
  }

  function eliminar($id){
    $sql = "DELETE FROM cuenta WHERE idCuenta = $id";
    $query=$this->db->query($sql);
    return $query;
  }
  
}
?>