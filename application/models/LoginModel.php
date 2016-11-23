<?php
 /**
  *
  */
  defined('BASEPATH') OR exit('No direct script access allowed');

 class LoginModel extends CI_Model
 {
  //  function __construct() {
  //   parent::__construct();
  //   }

 	function login_query()
 	{

    // //$this->db->insert('customer', $data);
 	 $this->load->database();
    // //
    // // //leave post request
    $user = $_POST['user_name'];
    $pswd = $_POST['password'];
    $user = strval($user);
    //echo $user;
    // //
    // //
    $query = $this->db->query("SELECT * FROM customer WHERE user_name='g94'");
    //$result = $query->result();
    //$result1 = $result[0];
    //echo isset($query);
    //echo (($query->password));
    //
    if($query->password==$pswd){
      echo "true";
      //return true;
    }else {
      echo "fal";
      //return false;
    }

    }

 	}

?>
