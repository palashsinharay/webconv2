<?php



class Cms extends CI_Model {

	public $_table = 'cms_page';
	public $_meduiatable = 'media_gallery';
	public $_newstable = 'news';
	public $_job = 'job';
        public $_tender = 'tender';
	public $_resource_center = 'resource_center';

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
	
        //function for getting gallery page content
	function get_news_list($limit=50)
	{
		
		//$query = $this->db->where($this->_newstable,array('limit'=>1));
		$query = $this->db->get($this->_newstable, $limit);
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
	
	//function for getting cms page content
	function get_news_content($id)
	{

		$query = $this->db->get_where($this->_newstable,array('id =' => $id));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();
		/*echo "<pre>";
		print_r($this->result);
		echo "</pre>";*/
		
		return $this->result[0];

	}
	
        //function for getting gallery page content
	function get_recruitment_content_all()
	{
		
		$query = $this->db->get_where($this->_job,array());
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
	function get_recruitment_content($id)
	{

		$query = $this->db->get_where($this->_job,array('id =' => $id));
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();
		/*echo "<pre>";
		print_r($this->result);
		echo "</pre>";*/
		
		return $this->result[0];

	}
        function get_tender_list(){
            
            $query = $this->db->get_where($this->_tender,array());
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
	
        //function for getting gallery page content
	function get_resource_center_list_all($limit,$type)
	{
		
		$query = $this->db->where('type', $type);
		$query = $this->db->order_by("date", "desc"); 
		$query = $this->db->get($this->_resource_center, $limit);
		
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
        
        ############# contact us email send function Start #############
        public function email_send()
        {
	try
	{
                                unset($_POST['action']);
                                $posted=array();
                                $posted["fname"]  	= trim($this->input->post("fname"));
                                $posted["lname"]  	= trim($this->input->post("lname"));
                                $posted["email"]  	= trim($this->input->post("email"));
                                $posted["message"]      = trim($this->input->post("message"));
                                $posted["phone"]  	= trim($this->input->post("phone"));					
                                //echo "hello";
                                //echo "<pre>";
                                //print_r($posted);
                                //echo "</pre>";
                                // Call model and insert data
				//$this->form_validation->set_rules('fname', 'fname', 'trim|required|xss_clean');
				//$this->form_validation->set_rules('lname', 'lname', 'trim|required|xss_clean');
				$this->form_validation->set_rules('email', 'email', 'trim|required|xss_clean');
				$this->form_validation->set_rules('message', 'message', 'trim|required|xss_clean');
				$this->form_validation->set_message('required', 'Please fill in the fields');
				if($this->form_validation->run() == FALSE)/////invalid
			   {
				////////Display the add form with posted values within it////
				$this->data["posted"]=$posted;
			   }
			   else
			   {
				$info=array();
				$info['fname']    			=   $posted['fname'];
				$info['lname']    			=   $posted['lname'];
				$info['email']    			=   $posted['email'];
				$info['message']    		=   $posted['message'];
				$info['phone']    			=   $posted['phone'];
				$info["send_date"] 			= 	date("Y-m-d H:i:s");
				//$i_newid = $this->Bcms->send_email_contact_details($info);
			   }					
				// ------------------ email send code start ------------------ //
				
				if($i_newid!='')
				{	
					
					
					$message='
					<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
					"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
					<head></head>
					<body>
					<table>
					<tr><td>Name:</td><td>' .  $posted["fname"].''.$posted["lname"] . '</td></tr>
					<tr><td>Email:</td><td>' . $posted["email"] . '</td></tr>
					<tr><td>Message:</td><td>' . nl2br($posted["message"]) . '</td></tr>
					</table>
					</body>
					</html>
					';
					
                                        $email_to    = 'sahani.bunty9@gmail.com';
                                        $email_from  =  $posted["email"];
                                        $this->email->from($email_from, 'IEM CMS');
                                        $this->email->to($email_to);
                                        $this->email->bcc('siddharth@satyajittech.com');
                                        $this->email->subject('Contact Us Form IEM CMS :');
                                        $this->email->message($message);
                                        if($this->email->send())
                                        {
                                                     echo 'Thank you !  We have received your message. !';
                                        }					

                     // ------------------ email send code end ------------------//

				}	
	}
	catch(Exception $err_obj)
	{
			show_error($err_obj->getMessage());
	}
	
 }
        ############# contact us email send function  End #############

	}	


		

	


