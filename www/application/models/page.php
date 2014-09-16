<?php

class Page extends CI_Model {

    function __construct()
    {
        parent::__construct();

        // Connect to DB
    	$this->load->database();
    }

    // Function to get page data
    public function getPageData( $pageName ) {

    	// Select from table where Page_Name = $pageName
    	$query = $this->db->get_where('pages', ['Page_Name'=>$pageName]);

    	// Return the result as an assoc
    	return $query->row_array();

    }
}