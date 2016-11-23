<?php
 /**
  *
  */
  defined('BASEPATH') OR exit('No direct script access allowed');
 class SignUpModel extends CI_Model
 {
  //  function __construct() {
  //   parent::__construct();
  //   }

 	function sign()
 	{
    //$this->db->insert('customer', $data);
 	  $this->load->database();
    //
    // //leave post request
      $name = $_POST['cus_name'];
			$user = $_POST['user_name'];
			$pswd = $_POST['password'];
			$nmbr = $_POST['contact_nmbr'];
			$email = $_POST['email'];
			$provider = $_POST['provider'];

    //echo $name;

        // $name = $data->'cus_name';
        // $user =$data->'user_name';
        // $pswd = $data->'password';
        // $nmbr = $data->'contact_nmbr';
        // $email = $data->'email';
        // $provider = $data->'provider';
    //
    //
    $query = $this->db->query("INSERT INTO customer (cus_name,user_name,password,contact_nmbr,email,provider) VALUES ('$name','$user','$pswd','$nmbr','$email','$provider')");
    return 1;
    

  }


 	}

?>
