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
				$data['news'] = $this->Cms->get_news_list(1);
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

    public function news_details($id)
    {
		$data['newsContent'] = $this->Cms->get_news_content($id);
	    /*echo "<pre>";
		print_r($data['newsContent']);
		echo "</pre>";
		die();*/
        $this->_renderView('news_details',$data);
		//return $data;
    }
    public function news_list()
    {
		$data['newslist'] = $this->Cms->get_news_list();
/*		echo "<pre>";
		print_r($data['recruitmentContent']);
		echo "</pre>";
		die();
*/     $this->_renderView('news_list',$data);
    }	

	
    public function recruitment()
    {
		$data['recruitmentContent'] = $this->Cms->get_recruitment_content_all();
/*		echo "<pre>";
		print_r($data['recruitmentContent']);
		echo "</pre>";
		die();
*/     $this->_renderView('recruitment',$data);
    }	
	public function recruitment_details($id)
    {
		$data['recruitmentContent'] = $this->Cms->get_recruitment_content($id);
	    /*echo "<pre>";
		print_r($data['newsContent']);
		echo "</pre>";
		die();*/
        $this->_renderView('recruitment_details',$data);
		//return $data;
    }

// Tender List
    public function tender_list()
    {
		
    }	
// Tender Detail	
	public function tender_details($id)
    {
	}


	
 // Listing pages for job listing , gallery , resource center ????   



}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */