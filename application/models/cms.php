<?php

/*
| ----------------------------------------------
| 
|
|Framework : CodeIgniter
|
| ----------------------------------------------
| Model CMS
| ----------------------------------------------
*/

class Cms extends CI_Model {

	public $_table = 'cms_page';
	public $_meduiatable = 'media_gallery';
	public $result = null;

	function __construct()
	{
		//parent::Model();
		parent::__construct();
	}

	//function get_page_content_front_end($PageUrl)
	function get_page_content($id)
	{
		
		$query = $this->db->get_where($this->_table,array('id =' => $id));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();
		/*echo "<pre>";
		print_r($this->result);
		echo "</pre>";*/
		
		return $this->result[0];
	}	
	


}