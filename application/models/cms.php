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


	//function for getting cms page content
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
        
        //function to get featured menu list
        function get_featured_menu() {
                $this->db->select('*');
                $this->db->from($this->_table);
                $this->db->join('featured_menu', 'featured_menu.id ='.$this->_table.'.id');
                $this->db->where('featured_menu.status', 1); 

                $query = $this->db->get();
            
		$this->result = $query->result();
//		echo "<pre>";
//		print_r($this->result);
//		echo "</pre>";die();
		
		return $this->result;
        }
        
        //function for getting gallery page content
	function get_gallery_content_all()
	{
		
		$query = $this->db->get_where($this->_meduiatable,array());
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();
/*		echo "<pre>";
		print_r($this->result);
		echo "</pre>";
		die();
*/		
		return $this->result;
	}

	}	


		

	


