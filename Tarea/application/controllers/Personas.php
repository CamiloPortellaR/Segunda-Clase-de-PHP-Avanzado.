<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    

    class Personas extends CI_Controller
    {
    	
		function __construct()
		{
			parent::__construct();
			$this->load->model('Persona');
		}
		
    	function index()
		{
			$data = array();
			$data['mensajes'] = $this->Persona->getRows();
			$this->load->view('vista_prueba',$data);
		}
		
		public function insertar($data=array())
		{
			$this->Persona->insertar_nuevas_personas($data);
		}
		
		public function actualizar($phone,$name)
		{
			$this->Persona->actualizar_dato($phone,$name);
		}
		
		public function controller_borrar($phone)
		{
			$this->Persona->model_borrar($phone);
		}
    }

?>