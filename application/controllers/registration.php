<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

	// Index method runs automatically if no other method is called
	public function index() {

		// Form helper
		$this->load->helper('form');

		// Library to help with validation of form
		$this->load->library('form_validation');

		// Rules for validation
		// Set rule for usename
		// arg1 = name of form element
		// arg2 = Part of Error Message
		// arg3 = list of validation steps separated by pipes. First to last
		$this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|is_unique[users.Username]');

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
			//$this->load->view('formsuccess');
			echo 'success';
		}

		// Footer
		$this->load->view('templates/footer');

	}

}