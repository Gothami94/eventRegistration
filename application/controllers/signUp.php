<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

	public function index()
	{
		// $this->load->helper('html');
		// $this->load->helper('url');
		//
		// $this->load->view('signUp');
		//echo "hello controll";
	}

		// $data = array(
		// 	'cus_name' => $_POST['cus_name'],
		// 	'user_name' => $_POST['user_name'],
		// 	'password' => $_POST['password'],
		// 	'contact' => $_POST['contact_nmbr'],
		// 	'email' => $_POST['email'],
		// 	'provider' => $_POST['provider']
		//
		//
		//
		// );
		// $name = $data->'cus_name';
    // $user =$data->'user_name';
    // $pswd = $data->'password';
    // $nmbr = $data->'contact_nmbr';
    // $email = $data->'email';
    // $provider = $data->'provider';

		// $data = array(
		// 	'cus_name' => $this->input->post('cus_name'),
		// 	'user_name' => $this->input->post('user_name'),
		// 	'password' => $this->input->post('password'),
		// 	'contact' => $this->input->post('contact_nmbr'),
		// 	'email' => $this->input->post('email'),
		// 	'provider' => $this->input->post('provider')
		// 	);
			//Transfering data to Model

		public function sign()
		{
			//echo "hello sign";
			$this->load->helper('html');
			$this->load->helper('url');

			$this->load->model('SignUpModel');
			$val=$this->SignUpModel->sign();

			//echo $val;
			//Loading View
			if($val){

				$data['message']= 'Customer added Successfully!';
				$this->load->view('signUp',$data);
			}

	}
}
?>
