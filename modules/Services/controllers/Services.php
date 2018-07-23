<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends MX_Controller {
	
	function __construct(){

		parent::__construct();

		# Load Library
		$this->load->library('template');

		# Load Helper
		$this->load->helper('url');

		# Load Model 
		$this->load->model('m_services');
	}

	public function index()
	{
		$data = array();

		# Set Layout			
		$this->template->set_layout('v_frontend');
		$this->template->title('Welcome to Services CodeIgniter');
		//$this->template->set_partial('header', 'partials/v_header');
		$this->template->set_partial('navbar', 'partials/v_navbar');
		//$this->template->set_partial('footer', 'partials/v_footer');
		$this->template->build('v_services', $data);	
	}

}


# www.bramsheehan.com
