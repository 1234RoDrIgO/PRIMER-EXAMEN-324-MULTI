<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('mDatos', '', TRUE);
		

	}	
	public function index()
	{
		//echo $id; 
		//$datos["identificador"]=$id;
		$datos["cuentas"]=$this->mDatos->consulta_Cuentas()->result();
		//$datos["cuentaEliminar"]=$this->mDatos->consulta_eliminar($cuentas->idCuenta)->result();
		$this->load->view('cabecera');
		$this->load->view('contenido', $datos);
		$this->load->view('pie');
	}

	public function eliminar($idCuenta){
		//echo $idCuenta;
		$this->mDatos->eliminar($idCuenta);
		redirect('welcome');
	}
	
}
