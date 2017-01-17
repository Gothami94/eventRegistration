<?php
 /**
  *
  */
  defined('BASEPATH') OR exit('No direct script access allowed');
 class SignUpModel extends CI_Model
 {
 	function sign()
 	{
 	   $this->load->database();
    //leave post request
      $name = $_POST['cus_name'];
			$user = $_POST['user_name'];
			$pswd = $_POST['password'];
			$nmbr = $_POST['contact_nmbr'];
			$email = $_POST['email'];
			$provider = $_POST['provider'];

    $query = $this->db->query("INSERT INTO customer (cus_name,user_name,password,contact_nmbr,email,provider) VALUES ('$name','$user','$pswd','$nmbr','$email','$provider')");
    return 1;
  }
 }

?>
