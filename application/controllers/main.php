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
		//$this->load->library('email');
		//$config['protocol'] = 'sendmail';
		//$config['charset'] = 'utf-8';
		//$config['wordwrap'] = TRUE;
		//$config['mailtype'] = 'html';
		//$this->email->initialize($this->config);

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

    public function _renderViewContact($page,$data) {
                
                $data['featured_menu'] = $this->Cms->get_featured_menu();
                $data['news'] = $this->Cms->get_news_list(1);
                $data['whoweare_links']=$this->Cms->get_page_basedonCatId('aboutus');
                
                $this->load->view('fe/common/header_contact.php',$data);
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
    public function recruitment_apply($id)
    {
		$data['recruitmentContent'] = $this->Cms->get_recruitment_content($id);
                $this->_renderView('recruitment_apply',$data);
		
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
	
	public function contact_us()
    {
				
				$data['contact_us_data']=$this->Cms->get_page_content(19);
		        $this->_renderViewContact('contact_us',$data);
    }
 	
        public function job_email()
		{
			//print_r($_FILES['fileField']);
			//die();
			$filepath = $_FILES['fileField']['tmp_name'];
			try
			{
				unset($_POST['action']);
				$posted=array();
				$posted["post_app"]  	= trim($this->input->post("post_app"));
				$posted["sl_no"]  	= trim($this->input->post("sl_no"));
				$posted["name"]  	= trim($this->input->post("name"));
				$posted["mob"]      = trim($this->input->post("mob"));
				$posted["email"]  	= trim($this->input->post("email"));
				$posted["addr"]  	= trim($this->input->post("addr"));
				$posted["state"]  	= trim($this->input->post("state"));	
				$posted["city"]  	= trim($this->input->post("city"));	
				$posted["last_qulifc"]  	= trim($this->input->post("last_qulifc"));	
				$posted["fileField"]  	= trim($this->input->post("fileField"));							
				/*                                echo "hello";
				echo "<pre>";
				print_r($posted);
				echo "</pre>";
				die();
				*/                                
				// Call model and insert data
				//$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
				//$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
				$this->form_validation->set_rules('name', 'name', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mob', 'mob', 'trim|required|xss_clean');
				$this->form_validation->set_message('required', 'Please fill in the fields');
				
				if($this->form_validation->run() == FALSE)/////invalid
				{
				////////Display the add form with posted values within it////
				$this->data["posted"]=$posted;
				}
				else
				{
				// ------------------ email send code start ------------------ //
				
				$message='
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
				"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head></head>
				<body>
				<table>
				<tr><td>Name:</td><td>' .  $posted['name'].'</td></tr>
				<tr><td>Email:</td><td>' . $posted["email"] . '</td></tr>
				<tr><td>Mobile:</td><td>' . $posted["mob"] . '</td></tr>
				<tr><td>Address:</td><td>' . $posted["addr"] . '</td></tr>
				<tr><td>State:</td><td>' . $posted["state"] . '</td></tr>
				<tr><td>Post applied for:</td><td>' . $posted["post_app"] . '</td></tr>
				<tr><td>Serial No(Job Code):</td><td>' . $posted["sl_no"] . '</td></tr>
				<tr><td>Last Qualification :</td><td>' . $posted["last_qulifc"] . '</td></tr>
				</table>
				</body>
				</html>
				';
				//$this->email->attach($posted['fileField']);
				$this->email_send($message,'siddharth@satyajittech.com',$posted["email"],$filepath);
				}								
			}
			catch(Exception $err_obj)
			{
					show_error($err_obj->getMessage());
			}
		}

        public function contactus_email()
		{
			try
			{
				unset($_POST['action']);
				$posted=array();
				$posted["full_name"]  	= trim($this->input->post("full_name"));
				$posted["mob_no"]  	= trim($this->input->post("mob_no"));
				$posted["email"]  	= trim($this->input->post("email"));
				$posted["addr"]      = trim($this->input->post("addr"));
				$posted["state"]  	= trim($this->input->post("state"));
				$posted["comment"]  	= trim($this->input->post("comment"));						
				/*                                echo "hello";
				echo "<pre>";
				print_r($posted);
				echo "</pre>";
				die();
				*/                                
				// Call model and insert data
				//$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
				//$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
				$this->form_validation->set_rules('comment', 'comment', 'trim|required|xss_clean');
				$this->form_validation->set_message('required', 'Please fill in the fields');
				if($this->form_validation->run() == FALSE)/////invalid
				{
				////////Display the add form with posted values within it////
				$this->data["posted"]=$posted;
				}
				else
				{
				// ------------------ email send code start ------------------ //
				
				$message='
				<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
				"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
				<html xmlns="http://www.w3.org/1999/xhtml">
				<head></head>
				<body>
				<table>
				<tr><td>Name:</td><td>' .  $posted['full_name'].'</td></tr>
				<tr><td>Email:</td><td>' . $posted["email"] . '</td></tr>
				<tr><td>Mobile:</td><td>' . $posted["mob_no"] . '</td></tr>
				<tr><td>Address:</td><td>' . $posted["addr"] . '</td></tr>
				<tr><td>State:</td><td>' . $posted["state"] . '</td></tr>
				<tr><td>Message:</td><td>' . nl2br($posted["comment"]) . '</td></tr>
				</table>
				</body>
				</html>
				';
										$this->load->library( 'email' );
										$email_setting  = array('mailtype'=>'html');
										$this->email->initialize($email_setting);
										$email_to    = 'siddharth@satyajittech.com';
                                        $email_from  =  $posted["email"];
                                        $this->email->from($email_from, 'WEBCON');
                                        $this->email->to($email_to);
                                        $this->email->bcc('sahani.bunty9@gmail.com');
                                        $this->email->subject('Contact Us Form WEBCON :');
                                        $this->email->message($message);
                                        
                                        
										if($this->email->send())
                                        {
                                                     echo 'Thank you !  We have received your message. !';
                                        }					
				
				//$this->email_send($message,'siddharth@satyajittech.com',$posted["email"]);
				}								
			}
			catch(Exception $err_obj)
			{
					show_error($err_obj->getMessage());
			}
		}
		
		
		
		
		############# contact us email send function Start #############
        public function email_send($message,$email_to,$email_from,$filepath)
        {
	try
	{
                       
										$this->load->library( 'email' );
										$email_setting  = array('mailtype'=>'html');
										$this->email->initialize($email_setting);
										//$email_to    = 'siddharth@satyajittech.com';
                                        //$email_from  =  $posted["email"];
                                        $this->email->from($email_from, 'WEBCON');
                                        $this->email->to($email_to);
                                        $this->email->bcc('sahani.bunty9@gmail.com');
                                        $this->email->subject('Contact Us Form WEBCON :');
                                        $this->email->message($message);
                                        $this->email->attach($filepath);
                                        if($this->email->send())
                                        {
                                                     echo 'Thank you !  We have received your message. !';
                                        }					

                     // ------------------ email send code end ------------------//
									
			   					
				
	
	}
	catch(Exception $err_obj)
	{
			show_error($err_obj->getMessage());
	}
	
 }
        ############# contact us email send function  End #############
	
	

}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */