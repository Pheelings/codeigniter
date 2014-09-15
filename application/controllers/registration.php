<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	// Index method runs automatically if no other method is called2
	public function index() {
		
		// Load Form
		$this->load->helper('form');

		// Get page data
		$pageData = $this->page->getPageData('registration');
		
		// Header
		$this->load->view('templates/header', $pageData);

		// Register
		$this->load->view('registration');

		// Footer
		$this->load->view('templates/footer');


	}

	public function doRegistration() {

		$this->load->library('form_validation');

		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.Username]');

		if( $this->form_validation->run() == FALSE ) {
			$this->load->view('registration');
		} else {
			//$this->load->view('formsuccess');
			echo 'success';
		}
		
	}

	
}
