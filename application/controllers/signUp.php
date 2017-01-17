<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SignUp extends CI_Controller {

		public function sign()
		{
			$this->load->helper('html');
			$this->load->helper('url');
			$this->load->model('SignUpModel');
			$val=$this->SignUpModel->sign();
			//Loading View
			if($val){
				$data['message']= 'Customer added Successfully!';
				$this->load->view('signUp',$data);
			}
	}
}
?>
