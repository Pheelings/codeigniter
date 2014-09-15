<?php

class Page extends CI_Model {

  function __construct()
  {
    parent::__construct();
  }

  // Function to get page data
  public function getPageData( $pageName) {

  	// Connect to DB
  	$this->load->database();

  	// Select from table where Page_Name = $pageName
  	$query = $this->db->get_where('pages', ['Page_Name'=>$pageName]);

  	// Return the result as an associative array
  	return $query->row_array();

  	

  }


}