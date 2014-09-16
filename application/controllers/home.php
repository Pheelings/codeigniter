<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

<<<<<<< HEAD
	// Index method runs automatically if no other method is called
=======
	// Index method runs automatically if no other method is called2
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c
	public function index() {

		// Get page data from the page model
		$pageData = $this->page->getPageData('home');
<<<<<<< HEAD

		// Header HTML. Send page data for Title, meta etc
=======
		
		// Header html. Send page data for Title, meta etc
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c
		$this->load->view('templates/header', $pageData);

		// Home content
		$this->load->view('home');

<<<<<<< HEAD
		// Footer HTML
=======
		// Footer
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c
		$this->load->view('templates/footer');

	}

}