<?php
 /**
  *
  */
 class signUp extends CI_Model
 {
   function __construct() {
    parent::__construct();
    }

 	function sign($data)
 	{
    $this->db->insert('customer', $data);
 	// 	$this->load->database();
    //
    // //leave post request
    //     $name = $data->'cus_name';
    //     $user =$data->'user_name';
    //     $pswd = $data->'password';
    //     $nmbr = $data->'contact_nmbr';
    //     $email = $data->'email';
    //     $provider = $data->'provider';
    //
    //
    //     $query = $this->db->query("INSERT INTO customer (cus_name,user_name,password,contact_nmbr,email,provider) VALUES ('$name','$user','$pswd','$nmbr','$email','$provider')");

    }

 	}

?>
