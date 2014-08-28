<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper('mihelper');

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

