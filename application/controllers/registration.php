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

	// Method runs when registration form is submitted
	public function doRegistration() {

		// Library to help with validation of form
		$this->load->library('form_validation');

		// Rules for validation
		// Set rule for username
		// arg1 = name of form
		// arg2 = Part of error message
		// argument 3 = list of validation steps separated by pipes. First to last
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.Username]');

		// Run the validation process
		// if FALSE is returned then validation failed
		if( $this->form_validation->run() == FALSE ) {
			// Show registration form again
			$this->load->view('registration');
		} else {
			//$this->load->view('formsuccess');
			echo 'success';
		}
		
	}

	
}
