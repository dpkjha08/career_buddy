<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_next extends CI_Controller {

    public function __construct() {

		parent::__construct();
        $this->load->model('login_model');
    }

    public function index(){


        $user_id=$_SESSION['user_id'];

        $data['get_skills']=$this->login_model->get_all_skills($user_id);
    //print_r($data['get_skills']);

        $this->load->view('profile_next',$data);

    }

    public function calc(){

        $user_id=$_SESSION['user_id'];
        $data['get_skills']=$this->login_model->get_all_skills($user_id);

        $data['designation']=$this->input->post("designation");

        // echo $data['designation'];
        // exit;

        $this->load->view('profile_next',$data);
        
    }
    

}
?>