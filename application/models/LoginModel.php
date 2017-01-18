<?php

  defined('BASEPATH') OR exit('No direct script access allowed');

 class LoginModel extends CI_Model
 {

 	function login()
 	{

   	 $this->load->database();
    //leave post request
     if(isset($_POST['sign'])) {
        $user = $_POST['user_name'];
        $pswd = $_POST['password'];
        $user = strval($user);

        $result = $this->db->query("SELECT * FROM customer WHERE user_name='$user' LIMIT 1");

        $result_1 = $result->result();
        $hashed_password=$result_1[0]->password;
        $flag=password_verify($pswd, $hashed_password);
        // echo $hashed_password;
        // echo "********";
        // echo $pswd;
        // echo "********";
        // echo $flag;
        if($flag){
          return 1;
        }else {
          return 0;
        }

      }
  }

 	}

?>
