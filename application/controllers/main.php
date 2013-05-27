<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index()
    {
        //echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        //die();
		$this->load->view('fe/index.php');    
		
		
    }
    



}
 
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */