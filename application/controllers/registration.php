<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

<<<<<<< HEAD
	public function __construct() {

		// call the parent constructor
		parent::__construct();

		$this->load->library('form_validation');
	}

	// Index method runs automatically if no other method is called
	public function index() {

		// Form helper
=======
	// Index method runs automatically if no other method is called2
	public function index() {
		
		// Load Form
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c
		$this->load->helper('form');

		// Library to help with validation of form
		$this->load->library('form_validation');

		// Rules for validation
<<<<<<< HEAD
		// Set rule for usename
		// arg1 = name of form element
		// arg2 = Part of Error Message
		// arg3 = list of validation steps separated by pipes. First to last
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[40]|callback_usernameCheck|is_unique[users.Username]|alpha_dash');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[60]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[8]|max_length[60]|matches[password]');
		$this->form_validation->set_rules('email', 'E-Mail', 'trim|required|valid_email');

		// Get page data
		$pageData = $this->page->getPageData('registration');

		// Header
		$this->load->view('templates/header', $pageData);

		// Run the validation process
		// If FALSE is returned then validation failed
		if ($this->form_validation->run() == FALSE)
		{
			// Show registration form again
			$this->load->view('registration');
		}
		else
		{
			// Load the model
			$this->load->model('Registration_Model');
=======
		// Set rule for username
		// arg1 = name of form
		// arg2 = Part of error message
		// argument 3 = list of validation steps separated by pipes. First to last
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|is_unique[users.Username]|alpha_dash');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|max_length[60]');
		$this->form_validation->set_rules('password2', 'Confirm Password', 'required|min_length[8]|max_length[60]|matches[password]');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

		// Get page data
		$pageData = $this->page->getPageData('registration');
		
		// Header
		$this->load->view('templates/header', $pageData);

			// Run the validation process
		// if FALSE is returned then validation failed
		if( $this->form_validation->run() == FALSE ) {
			// Show registration form again
			$this->load->view('registration');
		} else {
			// Load the model
			$this->load->model('registration_model');
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c

			// Do registration
			$this->Registration_Model->registerAccount();

			//$this->load->view('formsuccess');
			echo 'success';
		}

		// Footer
		$this->load->view('templates/footer');

<<<<<<< HEAD
	}

	public function usernameCheck( $value ) {

		// Check if the username is 'admin'
		if( $value == 'admin' ) {

			// Validation failed
			// prepare message and return false
			$this->form_validation->set_message('usernameCheck', 'Did you think admin is an unused account?');
			return false;

		} else {

			// Validation passed
			// Return true
			return true;

		}

	}

=======

	}
	
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c
}