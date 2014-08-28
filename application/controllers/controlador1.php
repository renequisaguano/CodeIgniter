<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class controlador1 extends CI_Controller {

	function __construct()
	{
		parent::__construct();

	}

	function index(){
		$this->load->view('prueba1/header');
		$this->load->view('prueba1/bienvenido');
	}

	function holaMundo(){

		$this->load->view('prueba1/bienvenido');
	}




}

?>

