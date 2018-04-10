<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    class C_Principal extends CI_Controller
    {
    	function __construct()
		{
			parent::__construct();
			$this->load->model('Persona');
		}
    	function index()
		{
			$data = array();
			$data['persona'] = $this->Persona->getRows();
			$this->load->view('Pantalla_Principal',$data);
		}
		
		function adicionar()
		{
			
			if($this->input->post('submit_adicionar'))
			{
				
				$d['Persona'] = $this->input->post('nombre');
				$d['Telefono'] = $this->input->post('telefono');
				
				$insert = $this->Persona->insertar_nuevas_personas($d);
				
				if($insert){
					//$this->session->set_userdata('success_msg','Mensaje agregado');
					//redirect('/mensajes');
					redirect('/C_Principal');
				}else{
					echo 'Mensaje NO agregado';
				}
				
				
			     
			}
			
			$data['titulo'] = "Adicionar";
			$this->load->view('Pantalla_Adicionar',$data);
		}
		
	    function modificar($id_persona)
		{
			if($this->input->post('submit_adicionar'))
			{
			
			    $d['Persona'] = $this->input->post('nombre');
				$d['Telefono'] = $this->input->post('telefono');
				
				$this->Persona->actualizar_dato($id_persona,$d);
				redirect('/C_Principal');
				
			}else
			{
				
				$data['titulo'] = "Modificar";
				$data['persona'] = $this->Persona->getRows($id_persona);
				$this->load->view('Pantalla_Adicionar',$data);
				
			}
			
		}

        function eliminar($id_persona)
        {
        	$this->Persona->model_borrar($id_persona);
			redirect('/C_Principal');
        }

    }
?>