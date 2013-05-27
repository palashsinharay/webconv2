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
		$this->load->model('Cms');
 
    }
 
    public function index($id = 1)
    {
		$data['pageDetail'] = $this->Cms->get_page_content($id);
		$this->load->view('fe/index.php',$data);    
    }

    public function page($id)
    {
		$data['pageDetail'] = $this->Cms->get_page_content($id);
/*		echo "<pre>";
		print_r($pageDetail);
		echo "</pre>";
		die();
*/		$this->load->view('fe/page.php',$data);     
    }

    public function gallery()
    {
		$data['galleryContent'] = $this->Cms->get_gallery_content_all();
		/*echo "<pre>";
		print_r($data['galleryContent']);
		echo "</pre>";*/
		//die();
		$this->load->view('fe/gallery.php',$data);     
    }

	
 // Listing pages for job listing , gallery , resource center ????   



}
 
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */