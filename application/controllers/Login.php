<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function index()
		{
			$this->load->helper('html');
			$this->load->helper('url');

			//Loading View
			$this->load->view('login');

		}

			public function login_query()
			{
				$this->load->helper('html');
				$this->load->helper('url');

				$this->load->model('LoginModel');
				$val=$this->LoginModel->login();

				//Loading View
				if($val){
					$this->load->model('BuyModel');
					$result=$this->BuyModel->buy();

					$table= array();
					$i = 0;
					foreach ($result->result() as $row) {
						$table[$i] = $row;
						$i +=1;
					}
					$data['table']=$table;

					//print_r($data);

					$this->load->view('buyTicket',$data);
				}
				else {
					$data['message']= 'Login failed. Try again!';
					$this->load->view('login',$data);
				}

		}
}
?>
