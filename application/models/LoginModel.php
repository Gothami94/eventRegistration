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

        $sql = $this->db->query("SELECT * FROM customer WHERE user_name='$user' LIMIT 1");

        if($sql->password==$pswd){
          return 1;
        }else {
          return 0;
        }

      }
  }

 	}

?>
