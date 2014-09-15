<?php

class Page extends CI_Model {

  // Constructor is optional
  // Only needed if you want to load a resource globally
  function __construct()
  {
    // REQUIRED! withut this we destroy the parent model class
    parent::__construct();
    
  }

  

  // Function to get page data
  public function getPageData( $pageName) {

  	// Connect to DB
    $this->load->database();

  	// Select from table where Page_Name = $pageName
    // get where:
    // arg 1 = name of table
    // arg 2 = array with keys as column names and values as value to look for
  	$query = $this->db->get_where('pages', ['Page_Name'=>$pageName]);

  	// Return the result as an associative array
  	return $query->row_array();

  	

  }


}