<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('mihelper');
		$this->load->helper('form');
		$this->load->model('prueba1_model');

	}

	function index(){
		$this->load->library('menu',array('Inicio','Contacto','Curso'));
		$data['miMenu']=$this->menu->construirMenu();
		$this->load->view('prueba1/header');
		$this->load->view('prueba1/bienvenido',$data);
	}

	function holaMundo(){

		$this->load->view('prueba1/bienvenido');
	}



}

?>

