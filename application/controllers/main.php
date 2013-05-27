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
    public function _renderView($page,$data) {
                
                $data['featured_menu'] = $this->Cms->get_featured_menu();
                $this->load->view('fe/common/header.php',$data);
		$this->load->view('fe/'.$page.'.php',$data);
                $this->load->view('fe/common/footer.php',$data);
    }




    public function index($id = 1)
    {
		$data['pageDetail'] = $this->Cms->get_page_content($id);
//                $data['featured_menu'] = $this->Cms->get_featured_menu();
                $this->_renderView('index',$data);
    }
    
    public function page($id)
    {
		$data['pageDetail'] = $this->Cms->get_page_content($id);
//                $data['featured_menu'] = $this->Cms->get_featured_menu();
/*		echo "<pre>";
		print_r($pageDetail);
		echo "</pre>";
		die();
*/		$this->_renderView('page',$data);    
    }

    public function gallery()
    {
		$data['galleryContent'] = $this->Cms->get_gallery_content_all();
		/*echo "<pre>";
		print_r($data['galleryContent']);
		echo "</pre>";*/
		//die();
                $this->_renderView('gallery',$data);
    }

	
 // Listing pages for job listing , gallery , resource center ????   



}
 
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */