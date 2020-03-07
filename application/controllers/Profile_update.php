<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_update extends CI_Controller {

    public function __construct() {

		parent::__construct();
        $this->load->model('login_model');
    }

    public function index(){

        $user_id=$_SESSION['user_id'];

        //echo $user_id;
        // exit;

        $data['get_skills']=$this->login_model->get_all_skills($user_id);
        // print_r($data['get_skills'])

        //  print_r($data['get_skills']);

        if(count($data['get_skills'])==0){
        $this->load->view('profile_update');
        }
        else{
            $this->load->view('profile_update',$data);
        }

    }
    
    public function update_profile(){
        $user_id=$_SESSION['user_id'];
       $skills=$this->input->post('browser[]');
      // print_r($skills);
        $education = $this->login_model->education($user_id,$skills);
        if($education){
        redirect("profile_update");
        }
        else{
            echo "N";
        }

    }

}
?>