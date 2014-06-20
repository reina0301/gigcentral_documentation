<?php
//gig_student_list.php is a codeigniter controller
class Gig_student_list extends CI_Controller
{  
	 function __construct(){
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->database();
		$this->load->helper('url');	
		$this->load->helper('form');
		$this->load->model('Gig_student_model');
		
		}//end constructor
   public function index()
   {//here we're making data available header and footer  	
   $this->load->model('Gig_student_model'); 
   	 $data['query'] = $this->Gig_student_model->get_student_list();
   	 $this->config->set_item('style','cerulean.css');
     $data['title']= "Here is our title tag!";
  $data['style']= "cerulean.css";
     $data['banner']= "Here is Student List !";
     $data['copyright']= "copyright goes here!";
   $data['base_url']= base_url();
     $this->load->view('header',$data);
     $this->load->view('gig/view_student_list',$data);
     $this->load->view('footer',$data);
   	
   }//end index()
  public function view($id)
   {//here will show us the data from a single page.
   $this->load->model('Gig_student_model');
   	 $data['query'] = $this->Gig_student_model->get_id($id);
   	  $this->config->set_item('style','cerulean.css');
     $data['title']= "Here is our title tag!";
   $data['style']= "cerulean.css";
     $data['banner']= "Here is our Web Site !";
     $data['copyright']= "copyright goes here!";
    $data['base_url']= base_url();
     $this->load->view('header',$data);
     $this->load->view('gig/view_student_list_detail',$data);
     $this->load->view('footer',$data);
   	
   }//end view()
  public function add()
  {//add is a for to add a new record
	 $this->load->helper('form');
     $data['title']= "Adding a student!";
      $this->config->set_item('style','cerulean.css');
    $data['style']= "cerulean.css";
     $data['banner']= "Adding a student !";
     $data['copyright']= "copyright goes here!";
    $data['base_url']= base_url();
     $this->load->view('header',$data);
     $this->load->view('gig/add_student_list',$data);
     $this->load->view('footer',$data);
	
  }//end add()
  public function insert()
  {//will insert the data entered via add()
  $this->load->model('Gig_student_model');
	$this->load->library('form_validation');
	$this->load->helper('url');	
	
	$this->form_validation->set_rules('EmailAddress','Email','trim|required|valid_email');
	$this->form_validation->set_rules('FirstName','First Name','trim|required'); 
	$this->form_validation->set_rules('LastName','Last Name','trim|required'); 	  
	$this->form_validation->set_rules('Password','Password','trim|required');     
	$this->form_validation->set_rules('PasswordValidation','Password Validation','trim|required');         
  //echo "Insert clicked!";
	  /*echo '<pre>';
	  var_dump($_POST);
	  echo '</pre>';*/	  
	//must have at least on validation rule to test.		  
	  if($this->form_validation->run() == FALSE){
		 //failed validation - send back to form 
		
	 $this->load->helper('form');
     $data['title']= "Adding a record!";
    $data['style']= "cerulean.css";
     $data['banner']= "Data Entry Error !";
     $data['copyright']= "copyright goes here!";
    $data['base_url']= base_url();
     $this->load->view('header',$data);
     $this->load->view('gig/add_student_list',$data);
     $this->load->view('footer',$data);
		  
		 echo "Insert Failed!";
		  
		  }else{//insert data
			  $post = array(
			   
			  	'FirstName'=>$this->input->post('FirstName'),
			  	'LastName'=> $this->input->post('LastName'),
			  	'EmailAddress'=> $this->input->post('EmailAddress'),
			  	'Password' => $this->input->post('Password'),
			  	'PasswordValidation' => $this->input->post('PasswordValidation'),
			  	'Phone' => $this->input->post('Phone'),
			  	'Portfolio' => $this->input->post('Portfolio'),
			  	'LinkedIn' => $this->input->post('LinkedIn'),
			  	'GitHub' => $this->input->post('GitHub'),
			  	'Facebook' => $this->input->post('Facebook'),
			  	//'AreasInterest' => $this->input->post('AreasInterest'),
			  	'EducationLevel' => $this->input->post('EducationLevel'),
			  	'AdditionInfor' => $this->input->post('AdditionInfor'),
			  	
			  
			  );
			 $interests = $this->input->post('AreasInterest');
			if(sizeof($interests) > 0) {
				$interests = implode(",",$interests);
			};
			$form_data['AreasInterest'] = $interests;
			
			 $id = $this->Gig_student_model->insert($post);
			 // echo "Data Inserted?";
			 redirect('/gig_student_list/view/' . $id);
			  }
	  
	}//end insert()
 
}

?>