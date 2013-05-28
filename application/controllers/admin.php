<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Admin extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
 
        /* Standard Libraries of codeigniter are required */
        $this->load->database();
        $this->load->helper('url');
        /* ------------------ */ 
 
        $this->load->library('grocery_CRUD');
 
    }
 
    public function index() {
        echo "<h1>Welcome to the world of Codeigniter</h1>";//Just an example to ensure that we get into the function
        die();
    }
    
    function _example_output($output = null) {
        $this->load->view('example.php',$output);    
    }
 
    public function employees() {

        //$this->grocery_crud->set_table('employees');
        $output = $this->grocery_crud->render();
        $this->_example_output($output);
        //        echo "<pre>";
        //        print_r($output);
        //        echo "</pre>";
        //        die();
    }
    
    function short() {
        $crud = new grocery_CRUD();
        $crud->set_table('employees');
        $crud->columns('lastName','firstName','email','jobTitle');

        $output = $crud->render();

        $this->_example_output($output);
    }
    
    function full() {
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

            ->columns('menutitle','content','date','pid','type','filename')
            
            ->display_as('type','category type')
            ->display_as('menutitle','Title')
            ->display_as('content','Content')
            ->display_as('pid','parent id')
            ->display_as('filename','Banner');
        
        
        //below code is for edit and add

        $crud->fields('menutitle','content','type','filename');
        $crud->required_fields('menutitle','content');
        
        //$crud->set_relation('categories_id','categories','category_name');

        
        //below is validation
        //$crud->set_rules('lastName','last name nnn','numeric|required')
        //     ->set_rules('firstName','first name nnn','integer|required')
        //     ->set_rules('email','email nnn','valid_email|required');
        //below code is for file upload
        $crud->set_field_upload('filename','assets/uploads/files');
        $crud->required_fields('menutitle','content','filename');
        
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

    function featured_menu() {
        $crud = new grocery_CRUD();

        //below code is for datagrid view
        $crud->set_theme('datatables');
        $crud->set_table('featured_menu')
            ->set_subject('Featured menu')
            ->columns('featured_menu_id','id','icon','status')
            ->display_as('featured_menu_id','featured menu id') 
            ->display_as('id','menutitle')
            ->display_as('icon','icon');
            
        
         $crud->set_relation('id','cms_page','menutitle');
        //below code is for edit and add
        //$crud->fields('menutitle','icon');
        //$crud->required_fields('menutitle','content');
        
        
        
        //below is validation
        //$crud->set_rules('lastName','last name nnn','numeric|required')
        //     ->set_rules('firstName','first name nnn','integer|required')
        //     ->set_rules('email','email nnn','valid_email|required');
        //below code is for file upload
        $crud->set_field_upload('icon','assets/uploads/files');
        
        $output = $crud->render();
        $this->_example_output($output);
    }



    function resource_center() {
    $crud = new grocery_CRUD();

    //below code is for datagrid view
    $crud->set_theme('datatables');
    $crud->set_table('resource_center')
        ->set_subject('Resource Center')
        ->columns('title','type','filename','date','status');
        //->display_as('menutitle','Title')
       // ->display_as('content','Content')
       // ->display_as('pid','parent id');


    //below code is for edit and add
    $crud->fields('title','type','date','filename','status');
    //$crud->required_fields('title','email',);



    //below is validation
            $crud->set_rules('title','title ','required')
         ->set_rules('date','date','required')
         ->set_rules('type','type ','required')
         ->set_rules('filename','filename','required');
    //below code is for file upload
    $crud->set_field_upload('filename','assets/uploads/files');

    $output = $crud->render();
    $this->_example_output($output);
}



}
 
/* End of file admin.php */
/* Location: ./application/controllers/admin.php */