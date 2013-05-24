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
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        die();
    }
    
    function _example_output($output = null)

    {
        $this->load->view('example.php',$output);    
    }
 
    public function employees()
    {

        //$this->grocery_crud->set_table('employees');
        $output = $this->grocery_crud->render();
        $this->_example_output($output);
        //        echo "<pre>";
        //        print_r($output);
        //        echo "</pre>";
        //        die();
    }
    
    function short()
    {
        $crud = new grocery_CRUD();
        $crud->set_table('employees');
        $crud->columns('lastName','firstName','email','jobTitle');

        $output = $crud->render();

        $this->_example_output($output);
    }
    function full()
    {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('employees')
            ->set_subject('employees_bal')
            ->columns('lastName','firstName','email','jobTitle','file_url')
            ->display_as('lastName','LName')
            ->display_as('firstName','FName');
        
        
        //below code is for edit and add
        $crud->fields('lastName','firstName','email','file_url');
        //$crud->required_fields('lastName','firstName');
        
        
        
        //below is validation
        $crud->set_rules('lastName','last name nnn','numeric|required')
             ->set_rules('firstName','first name nnn','integer|required')
             ->set_rules('email','email nnn','valid_email|required');
        //below code is for file upload
        $crud->set_field_upload('file_url','assets/uploads/files');
        
        $output = $crud->render();

        $this->_example_output($output);
    }
    
    function cms_page() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('cms_page')
            ->set_subject('CMS PAGE')
            ->columns('menutitle','content','date','pid')
            ->display_as('menutitle','Title')
            ->display_as('content','Content')
            ->display_as('pid','parent id');
        
        
        //below code is for edit and add
        $crud->fields('menutitle','content');
        $crud->required_fields('menutitle','content');
        
        
        
        //below is validation
        //$crud->set_rules('lastName','last name nnn','numeric|required')
        //     ->set_rules('firstName','first name nnn','integer|required')
        //     ->set_rules('email','email nnn','valid_email|required');
        //below code is for file upload
        //$crud->set_field_upload('file_url','assets/uploads/files');
        
        $output = $crud->render();
        $this->_example_output($output);
    }

   function tender() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('tender')
            ->set_subject('TENDER PAGE')
            ->columns('post_date','submission_date','description','filename');
            //->display_as('menutitle','Title')
           // ->display_as('content','Content')
           // ->display_as('pid','parent id');
        
        
        //below code is for edit and add
        $crud->fields('post_date','submission_date','description','filename');
        $crud->required_fields('post_date','submission_date');
        
        
        
        //below is validation
        //$crud->set_rules('lastName','last name nnn','numeric|required')
        //     ->set_rules('firstName','first name nnn','integer|required')
        //     ->set_rules('email','email nnn','valid_email|required');
        //below code is for file upload
        $crud->set_field_upload('filename','assets/uploads/files');
        
        $output = $crud->render();
        $this->_example_output($output);
    }
	
	function  news() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('news')
            ->set_subject('News PAGE')
            ->columns('title','description','date');
            //->display_as('menutitle','Title')
           // ->display_as('content','Content')
           // ->display_as('pid','parent id');
        
        
        //below code is for edit and add
        $crud->fields('title','description','date');
        $crud->required_fields('title','description');
        
        
        
        //below is validation
        //$crud->set_rules('lastName','last name nnn','numeric|required')
        //     ->set_rules('firstName','first name nnn','integer|required')
        //     ->set_rules('email','email nnn','valid_email|required');
        //below code is for file upload
        //$crud->set_field_upload('filename','assets/uploads/files');
        
        $output = $crud->render();
        $this->_example_output($output);
    }


	function  job() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('job')
            ->set_subject('Jobs PAGE')
            ->columns('title','email','desc','filename','post_date');
            //->display_as('menutitle','Title')
           // ->display_as('content','Content')
           // ->display_as('pid','parent id');
        
        
        //below code is for edit and add
        $crud->fields('title','email','desc','filename','post_date');
        //$crud->required_fields('title','email',);
        
        
        
        //below is validation
		$crud->set_rules('title','title ','required')
             ->set_rules('email','email','valid_email|required')
             ->set_rules('desc','description ','required')
			 ->set_rules('post_date','Post Date ','required');
        //below code is for file upload
        $crud->set_field_upload('filename','assets/uploads/files');
        
        $output = $crud->render();
        $this->_example_output($output);
    }


	function  media_gallery() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('media_gallery')
            ->set_subject('Media Library')
            ->columns('id','Mediatitle','Mediadetails','mediaimage','date','status');
            //->display_as('menutitle','Title')
           // ->display_as('content','Content')
           // ->display_as('pid','parent id');
        
        
        //below code is for edit and add
        $crud->fields('Mediatitle','Mediadetails','mediaimage','date','status');
        //$crud->required_fields('title','email',);
        
        
        
        //below is validation
		$crud->set_rules('Mediatitle','Mediatitle ','required')
             ->set_rules('Mediadetails','Mediadetails','required')
             ->set_rules('mediaimage','mediaimage ','required')
			 ->set_rules('date','date','required');
        //below code is for file upload
        $crud->set_field_upload('mediaimage','assets/uploads/files');
        
        $output = $crud->render();
        $this->_example_output($output);
    }




}
 
/* End of file main.php */
/* Location: ./application/controllers/main.php */