<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		// $this->load->helper('html');
		// $this->load->helper('url');
		//
		// $this->load->view('login');
		//echo "hello controll";

	}

			public function login_query()
			{
				//echo "hello controll";
				$this->load->helper('html');
				$this->load->helper('url');

				$this->load->model('LoginModel');
				$val=$this->LoginModel->login_query();

				echo "val : ".$val;
				//Loading View
				if($val){

					$this->load->view('events');
				}else {
					$data=0;
					$this->load->view('login',$data);
				}

		}
}
?>
