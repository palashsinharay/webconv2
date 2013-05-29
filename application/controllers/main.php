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
                $data['whoweare_links']=$this->Cms->get_page_basedonCatId('aboutus');
                
                $this->load->view('fe/common/header.php',$data);
                $this->load->view('fe/'.$page.'.php',$data);
                $this->load->view('fe/common/footer.php',$data);
    }

    
    
    public function index($id = 1)
    {
		$data['pageDetail'] = $this->Cms->get_page_content($id);
                $data['lowerSlider'] = $this->Cms->get_lowerSlider_content();
                $this->_renderView('index',$data);
    }
    
    public function page($id)
    {
		$data['pageDetail'] = $this->Cms->get_page_content($id);

//		echo "<pre>";
//              print_r($data['pageDetail']);
//		echo "</pre>";
//		die();
                switch ($data['pageDetail']->type) {
                    case 'tender':$this->tender_list();
                        break;
                    case 'job':$this->recruitment();
                        break;
                    default:
                      $this->_renderView('page',$data);
                        break;
                }
 	    
    }

    public function gallery()
    {
		$data['galleryContent'] = $this->Cms->get_gallery_content_all();
                $this->_renderView('gallery',$data);
    }

    public function news_details($id)
    {
		$data['newsContent'] = $this->Cms->get_news_content($id);
                $this->_renderView('news_details',$data);
		
    }
    
    public function news_list()
    {
		$data['newslist'] = $this->Cms->get_news_list();
                $this->_renderView('news_list',$data);
    }	

	
    public function recruitment()
    {
		$data['recruitmentContent'] = $this->Cms->get_recruitment_content_all();
                $this->_renderView('recruitment',$data);
    }	
    
    public function recruitment_details($id)
    {
		$data['recruitmentContent'] = $this->Cms->get_recruitment_content($id);
                $this->_renderView('recruitment_details',$data);
		
    }

// Tender List
    public function tender_list()
    {
        $data['tenderList'] = $this->Cms->get_tender_list();
	$this->_renderView('tender_list',$data);	
    }	
// Tender Detail	
    public function tender_details($id)
    {
	
            
    }
    public function resource_center_list()
    {
	$data['resource_center_list_Areport'] = $this->Cms->get_resource_center_list_all(3,'Annual Report');
	$data['resource_center_list_newsletter'] = $this->Cms->get_resource_center_list_all(4,'News Letter');
	$data['resource_center_list_brochure'] = $this->Cms->get_resource_center_list_all(2,'Brochure');
	
	$this->_renderView('resource_center_list',$data);
    }
    
//for categories
    public function categories($catName) {
        
        $data['categories_items'] =  $this->Cms->get_page_basedonCatId($catName);
        $this->_renderView('categories',$data);
    }

}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */