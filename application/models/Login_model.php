<?php

class Login_model extends CI_Model {
	

    public function __construct()
    {
       // Call the Model constructor
        parent::__construct();
        $this->load->database(); 
    }
    public function signup($first_name,$last_name,$user_email,$user_password){

        $sql="SELECT user_email from login where user_email=?";
        $query=$this->db->query($sql,$user_email);
        
        $result= $query->result_array();
        if(count($result)){
           return False;
            }
        else{
            $sql="INSERT INTO login(first_name,last_name,user_email,user_password) values(?,?,?,?)";
            $query=$this->db->query($sql,array($first_name,$last_name,$user_email,$user_password));
            return True;
            }
                
        


        
    }

    public function login($user_email,$user_password){
        $sql="SELECT * FROM login WHERE user_email=? AND user_password = ?";
        $query=$this->db->query($sql,array($user_email,$user_password));

        $result= $query->result_array();

        if($result){
            return $result;
        }
        else{
            return False;
        }

    }

    public function academics($check_user_academics){
        $sql="SELECT * FROM skills WHERE user_id=?";
        $query=$this->db->query($sql,array($check_user_academics));
        $result= $query->result_array();

        if($result){
            return True;
        }
        else{
            return False;
        }


    }

    public function education($user_id,$skills){


        foreach($skills as $skill){
            if($skill){
                $user_id=$_SESSION['user_id'];
                $sql="INSERT into skills(user_id,skills) values(?,?)";
                $query=$this->db->query($sql,array($user_id,$skill));
            }
        }
        return True;
    }

    public function get_all_skills($user_id){
        $sql="SELECT skills from skills where user_id=?";
        $query=$this->db->query($sql,$user_id);
        $result=$query->result_array();
        return $result;
    }
        

    

}
?>