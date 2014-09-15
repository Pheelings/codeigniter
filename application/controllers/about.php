<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

	// Index method runs automatically if no other method is called2
	public function index() {

		// Get page data
		$pageData = $this->page->getPageData('about');
		
		// Header
		$this->load->view('templates/header', $pageData);

		// About
		$this->load->view('about');

		// Footer
		$this->load->view('templates/footer');


	}

	
}
