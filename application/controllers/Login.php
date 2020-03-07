<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct() {

		parent::__construct();
        $this->load->model('login_model');
    }

    public function index(){
        
        $this->load->view('login');

    }
    public function give_access(){
        $user_email=$this->input->post('user_email');
        $user_password=$this->input->post('user_password');

     $check_login = $this->login_model->login($user_email,$user_password);

     if($check_login){
         
        $check_academics=$this->login_model->academics($check_login[0]['user_id']);

            $_SESSION['user_id']=$check_login[0]['user_id'];
            redirect('profile_update');
            

     }
     else{
         $data['message']="Invalid user name or password";
         $this->load->view('login',$data);
     }

    }

}
?>