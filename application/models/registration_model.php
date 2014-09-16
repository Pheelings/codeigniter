<?php

class Registration_Model extends CI_Model {

    function __construct() {
        
        parent::__construct();

        $this->load->database();
    }

    function registerAccount() {

      // Load the password hashing library
      require APPPATH.'libraries/password.php';

    	// Prepare data for database
    	$data = [
    		'Username' 	=> $this->input->post('username'),
    		'Password' 	=> password_hash( $this->input->post('password'), PASSWORD_BCRYPT ),
    		'Email'		=> $this->input->post('email')
    	];

    	// Insert into DB
    	$this->db->insert('users', $data);

    }
}