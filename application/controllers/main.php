<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Main extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
        $config['upload_path'] = './assets/uploads/cv';
        $config['allowed_types'] = 'gif|jpg|png|pdf|doc|docx|txt';
        $this->load->library('upload', $config);
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
                $data['whoweare_links']=$this->Cms->get_page_basedonCatId('3,4');
                $data['whatwedo_links'] = $this->Cms->get_category_nameAndId('what_we_do');
                
                $this->load->view('fe/common/header.php',$data);
                $this->load->view('fe/'.$page.'.php',$data);
                $this->load->view('fe/common/footer.php',$data);
    }

    public function _renderViewContact($page,$data) {
                
                $data['featured_menu'] = $this->Cms->get_featured_menu();
                $data['news'] = $this->Cms->get_news_list(1);
                $data['whoweare_links']=$this->Cms->get_page_basedonCatId('3,4');
                $data['whatwedo_links'] = $this->Cms->get_category_nameAndId('what_we_do');
                
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
                    case 'partner':$this->partners();
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
    public function recruitment_apply($id,$message = null)
    {
		$data['recruitmentContent'] = $this->Cms->get_recruitment_content($id);
//                echo "<pre>";
//                print_r($data['recruitmentContent']);
//                echo "</pre>";
//                die();
                $data['message'] = $message ;
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
    public function categories($cat_id) 
    {
        
        $data['categories_items'] =  $this->Cms->get_page_basedonCatId($cat_id);
        $this->_renderView('categories',$data);
    }

	

    public function contact_us()
    {
				
                        $data['contact_us_data']=$this->Cms->get_page_content(19);
		        $this->_renderViewContact('contact_us',$data);
    }
    public function partners()
    {
				
                        $data['partners_data']=$this->Cms->get_page_content(34);
                        $this->_renderViewContact('partners',$data);
    }

    public function job_email()
    {
//                    print_r($_FILES['fileField']);
//                    die();
                    $this->upload->do_upload('fileField');
                    $data = $this->upload->data();

                    try
                    {
                            unset($_POST['action']);
                            $posted=array();
                            $posted["jobid"]  = trim($this->input->post("jobid"));
                            $posted["post_app"]  	= trim($this->input->post("post_app"));
                            $posted["sl_no"]  	= trim($this->input->post("sl_no"));
                            $posted["name"]  	= trim($this->input->post("name"));
                            $posted["mob"]      = trim($this->input->post("mob"));
                            $posted["email"]  	= trim($this->input->post("email"));
                            $posted["addr"]  	= trim($this->input->post("addr"));
                            $posted["state"]  	= trim($this->input->post("state"));	
                            $posted["city"]  	= trim($this->input->post("city"));	
                            $posted["last_qulifc"]  	= trim($this->input->post("last_qulifc"));	
                            $posted["fileField"]  	= $_FILES['fileField']['name'];							
                            /*                               echo "hello";
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
                            $info=array();
                            $info['jobid']    		= $posted['jobid'];
                            $info["post_app"]           = $posted['post_app'];
                            $info["sl_no"]            = $posted['sl_no'];
                            $info["name"]             = $posted['name'];
                            $info["mob"]              = $posted['mob'];
                            $info["email"]            = $posted['email'];
                            $info["addr"]             = $posted['addr'];
                            $info["state"]            = $posted['state'];	
                            $info["city"]             = $posted['city'];	
                            $info["last_qulifc"]  	= $posted['last_qulifc'];	
                            $info["fileField"]  	= $posted['fileField'];							
                             
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
                        // die();
                            //$this->email->attach($posted['fileField']);
                            $status = $this->email_send($message,'siddharth@satyajittech.com',$posted["email"],$data['full_path']);
                           // $status = $this->email_send($message,'enquiry@webcon.in',$posted["email"],$data['full_path']);
                            if($status == 'success'){
                                $i_newid=$this->Cms->add_recruitment_data($info);
                                $this->recruitment_apply($posted["jobid"],'job application successfully submitted');
                            }

                            }								
                    }
                    catch(Exception $err_obj)
                    {
                                    show_error($err_obj->getMessage());
                    }
            }

    public function partners_email()
    {
                    try
                    {
                            unset($_POST['action']);
                            $posted=array();
                            $posted["full_name"]  	= trim($this->input->post("full_name"));
                            $posted["mob_no"]  	= trim($this->input->post("mob_no"));
                            $posted["email"]  	= trim($this->input->post("email"));
                            $posted["detail"]  	= trim($this->input->post("detail"));						
                                                           //echo "hello";
//				echo "<pre>";
//				print_r($posted);
//				echo "</pre>";
//				die();

                            // Call model and insert data
                            //$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
                            //$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('full_name', 'full_name', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('mob_no', 'mob_no', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
                            $this->form_validation->set_rules('detail', 'detail', 'trim|required|xss_clean');
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
                            <tr><td>Message:</td><td>' . nl2br($posted["detail"]) . '</td></tr>
                            </table>
                            </body>
                            </html>
                            ';
                           

                            //$status = $this->email_send($message,'siddharth@satyajittech.com',$posted["email"]);
                            $status = $this->email_send($message,'siddharth@satyajittech.com',$posted["email"]);

                            if($status == 'success'){
                               echo "Thank you for contacting us"; 
                            } else {
                               echo "Message sending failed !"; 
                            }

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


                            //$status = $this->email_send($message,'siddharth@satyajittech.com',$posted["email"]);
                            $status = $this->email_send($message,'contact@webcon.in',$posted["email"]);

                            if($status == 'success'){
                               echo "Thank you for contacting us"; 
                            } else {
                               echo "Message sending failed !"; 
                            }

                            }								
                    }
                    catch(Exception $err_obj)
                    {
                                    show_error($err_obj->getMessage());
                    }
            }

    public function enquiry_email()
    {
			try
			{
				unset($_POST['action']);
				$posted=array();
				$posted["full_name"]  	= trim($this->input->post("full_name"));
				$posted["mob_no"]  	= trim($this->input->post("mob_no"));
				$posted["email"]  	= trim($this->input->post("email"));
				$posted["status"]      = trim($this->input->post("status"));
				$posted["enq_title"]  	= trim($this->input->post("enq_title"));
				$posted["subject1"]  	= trim($this->input->post("subject1"));						
				$posted["enq_detail"]  	= trim($this->input->post("enq_detail"));
				$posted["subject2"]  	= trim($this->input->post("subject2"));						

//                                echo "hello";
//				echo "<pre>";
//				print_r($posted);
//				echo "</pre>";
//				die();
				                                
				// Call model and insert data
				//$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
				//$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('full_name', 'full_name', 'trim|required|xss_clean');
				$this->form_validation->set_rules('mob_no', 'mob_no', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
				$this->form_validation->set_rules('status', 'status', 'trim|required|xss_clean');
				$this->form_validation->set_rules('enq_title', 'enq_title', 'trim|required|xss_clean');
				$this->form_validation->set_rules('subject1', 'subject1', 'trim|required|xss_clean');
				$this->form_validation->set_rules('enq_detail', 'enq_detail', 'trim|required|xss_clean');
                                $this->form_validation->set_rules('subject2', 'subject2', 'trim|required|xss_clean');

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
				<tr><td>Enquiry Status:</td><td>' . $posted["status"] . '</td></tr>
				<tr><td>Enquiry Title:</td><td>' . $posted["enq_title"] . '</td></tr>
				<tr><td>Enquiry Subject:</td><td>' .  $posted['subject1'].'</td></tr>
				<tr><td>Enquiry Detail:</td><td>' . $posted["enq_detail"] . '</td></tr>
				<tr><td>Mode of Contact:</td><td>' . $posted["subject2"] . '</td></tr>
				
				</table>
				</body>
				</html>
				';
                                  			
				
				//$status = $this->email_send($message,'siddharth@satyajittech.com',$posted["email"]);
                                $status = $this->email_send($message,'enquiry@webcon.in',$posted["email"]);
				
                                if($status == 'success'){
                                   echo "Thank you for contacting us"; 
                                } else {
                                   echo "Message sending failed !"; 
                                }
                                
                                }								
			}
			catch(Exception $err_obj)
			{
					show_error($err_obj->getMessage());
			}
		}               
		
		
		
    ############# contact us email send function Start #############
    public function email_send($message,$email_to,$email_from,$filepath = null)
    {
    try
    {

                                    $this->load->library('email');
                                    $email_setting  = array('mailtype'=>'html');
                                    $this->email->initialize($email_setting);
                                    //$email_to    = 'siddharth@satyajittech.com';
                                    //$email_from  =  $posted["email"];
                                    $this->email->from($email_from, 'WEBCON');
                                    $this->email->to($email_to);
                                    $this->email->bcc('sahani.bunty9@gmail.com');
                                    $this->email->subject('WEBCON :');
                                    $this->email->message($message);
                                    if($filepath != NULL){
                                       $this->email->attach($filepath); 
                                      // echo $message;
                                      // echo "test";
                                      // die;
                                    }

                                    if($this->email->send())
                                    {
                                                 return 'success';

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