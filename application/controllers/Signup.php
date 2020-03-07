<?php  
defined('BASEPATH') OR exit('No direct script access allowed');  
  
class Signup extends CI_Controller { 
    public function __construct() {

		parent::__construct();
        $this->load->model('login_model');
    } 
      
    public function index()  
    {  
        $this->load->view('signup');  
    }  

    public function signup_access(){
    
        $first_name=$this->input->post('first_name');
        $last_name=$this->input->post('last_name');
        $user_email=$this->input->post('user_email');
        $user_password=$this->input->post('user_password');



        $signup_now=$this->login_model->signup($first_name,$last_name,$user_email,$user_password);

        echo  $signup_now;

        if($signup_now){
            $this->load->view('Login');
        }
        else{
        
            $data['message']="User name taken";
            $this->load->view('signup',$data);

        }




    }
  
}  
?> 