<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	// Index method runs automatically if no other method is called2
	public function index() {

		// Get page data from the page model
		$pageData = $this->page->getPageData('home');
	
		// Header html. Send page data for Title, meta etc
		$this->load->view('templates/header', $pageData);

		// Home content
		$this->load->view('home');

		// Footer
		$this->load->view('templates/footer');

	}

}