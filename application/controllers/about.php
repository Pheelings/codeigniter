<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

<<<<<<< HEAD
	// Index method runs automatically if no other method is called
=======
	// Index method runs automatically if no other method is called2
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c
	public function index() {

		// Get page data
		$pageData = $this->page->getPageData('about');
<<<<<<< HEAD

		// Header
		$this->load->view('templates/header', $pageData);

		// Home content
=======
		
		// Header
		$this->load->view('templates/header', $pageData);

		// About
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c
		$this->load->view('about');

		// Footer
		$this->load->view('templates/footer');

<<<<<<< HEAD
	}

}
=======

	}

	
}
>>>>>>> e16bc492da229cc2b0aa7b65d6c4738877fadd0c
