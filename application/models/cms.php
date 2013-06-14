<?php



class Cms extends CI_Model {

	public $_cms = 'cms_page';
        public $_site = 'site_configure';
	public $_meduiatable = 'media_gallery';
	public $_newstable = 'news';
	public $_job = 'job';
        public $_tender = 'tender';
	public $_resource_center = 'resource_center';
	public $_categories = 'categories';
	public $_lowerSlider = 'lower_slider';
        public $_user = 'users';
        public $_carreer = 'carreer';
	public $result = null;

	function __construct()
	{
		//parent::Model();
		parent::__construct();
	}
        
        //function for getting site details
        function site_details() {
            $query = $this->db->get_where($this->_site, array('id' => 1));
                $this->result = $query->result();
                return $this->result[0];
                
//                if($this->result != NULL){
//                    return $this->result[0];
//                }else{
//                    return FALSE;
//                }
        }

        
        //function for getting cms page content
	function get_login($username)
	{

            	$query = $this->db->get_where($this->_user, array('username' => $username));
                $this->result = $query->result();
                if($this->result != NULL){
                    return $this->result[0];
                }else{
                    return FALSE;
                }
                
                

	}

	//function for getting cms page content
	function get_page_content($id)
	{

		$query = $this->db->get_where($this->_cms,array('id =' => $id));
		$this->result = $query->result();
		/*echo "<pre>";
		print_r($this->result);
		echo "</pre>";*/
		return $this->result[0];

	}
        function get_siteConfigure_content()
	{

		$query = $this->db->get($this->_site);
		$this->result = $query->result();
//		echo "<pre>";
//		print_r($this->result);
//		echo "</pre>";
//                die();
		return $this->result[0];

	}	
	function get_all_page_sitemap()
	{

		$query = $this->db->get($this->_cms);
		$this->result = $query->result();
//		echo "<pre>";
//		print_r($this->result);
//		echo "</pre>";
		return $this->result;

	}
	        
 
        //function to get featured menu list
        function get_featured_menu() {
                $this->db->select('*');
                $this->db->from($this->_cms);
                $this->db->join('featured_menu', 'featured_menu.id ='.$this->_cms.'.id');
                $this->db->where('featured_menu.status', 1); 
                $query = $this->db->get();
            	
                $this->result = $query->result();
		
                return $this->result;
        }
        
        //function for getting gallery page content
	function get_gallery_content_all()
	{
		$query = $this->db->get_where($this->_meduiatable,array());
		//echo $this->db->last_query();
		//die();
		$this->result = $query->result();

		return $this->result;
	}
	
        //function for getting gallery page content
	function get_news_list($limit=50)
	{
                $query = $this->db->get($this->_newstable, $limit);
		
		$this->result = $query->result();
	
		return $this->result;
	}	
	
	//function for getting cms page content
	function get_news_content($id)
	{
		$query = $this->db->get_where($this->_newstable,array('id =' => $id));
		
		$this->result = $query->result();
		
		return $this->result[0];
	}
	
        //function for getting gallery page content
	function get_recruitment_content_all()
	{
		$query = $this->db->get_where($this->_job,array());
		
		$this->result = $query->result();

		return $this->result;
	}
	function get_recruitment_content($id)
	{
		$query = $this->db->get_where($this->_job,array('id =' => $id));
		
		$this->result = $query->result();
		
                return $this->result[0];

	}
        function get_tender_list()
        {
            
            $query = $this->db->get_where($this->_tender,array());
	
            $this->result = $query->result();

            return $this->result;
        }
	
        //function for getting gallery page content
	function get_resource_center_list_all($limit,$type)
	{
		$query = $this->db->where('type', $type);
		$query = $this->db->order_by("date", "desc"); 
		$query = $this->db->get($this->_resource_center, $limit);
		
		$this->result = $query->result();

		return $this->result;
	}
        
        function get_page_basedonCatId($cat_ids) 
        {
 		
                //get list of all page based on cat_id s
                
		$query = $this->db->where_in('categories_id', explode(',',$cat_ids));
		//$query = $this->db->order_by("date", "desc"); 
		$query = $this->db->get($this->_cms);
		
		$this->result = $query->result();
	
		return $this->result;

		   
        }
   /*
    * get caterory name and id based on type
    */     
        function get_category_nameAndId($cat_type) 
        {
 		
		$query = $this->db->where('type', $cat_type);
		//$query = $this->db->order_by("date", "desc"); 
		$query = $this->db->get($this->_categories);
		
		$this->result = $query->result();       
		
		return $this->result;

		   
        }
		
        public function get_lowerSlider_content()
        {

        $query = $this->db->get($this->_lowerSlider);

        $this->result = $query->result();

        foreach($this->result as $values){
         $object_cms = $this->get_page_content($values->id);
         $object_cms->image = $values->image;
         $object_cms->short_title = $values->short_title;
         $data[] = $object_cms;
   
        }
        $this->result = $data;

        return $this->result;


        }
        
        
public function add_recruitment_data($info)
    {
        try
        {
       	  $i_ret_=0; ////Returns false
            if(!empty($info))
            {
                                $s_qry="Insert Into ".$this->_carreer." Set ";
                                $s_qry.=" names=? ";
                                $s_qry.=", address=? ";
                                $s_qry.=", email=? ";
                                $s_qry.=", city=? ";
				$s_qry.=", state=? ";
				$s_qry.=", phone=? ";
				$s_qry.=", qualification=? ";
				$s_qry.=", post=? ";
				$s_qry.=", path=? ";
                                $this->db->query($s_qry,array(
                                $info["name"],
                                $info["addr"],
                                $info["email"],
                                $info["city"],
                                $info["state"],
                                $info["mob"],
                                $info["last_qulifc"],
                                $info["post_app"],
                                $info["fileField"],
             ));
                //echo $this->db->last_query();
                                $i_ret_=$this->db->insert_id();     
                
            }
            unset($s_qry, $info );
            return $i_ret_;
		
			
        }
        catch(Exception $err_obj)
        {
            show_error($err_obj->getMessage());
        }          
    }        
        

	}	


		

	


