<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function event()
	{
		$this->load->helper('html');
		$this->load->helper('url');
		$this->load->model('RegisterModel');
		$val=$this->RegisterModel->reg_event();
		$result=$this->RegisterModel->select_table();
		$table= array();
		$i = 0;
		foreach ($result->result() as $row) {
			$table[$i] = $row;
			$i +=1;
		}
		$data['table']=$table;
		if ($val) {
			$data['message']= 'Event Registered Successfully!';
		}
		$this->load->view('eventReg',$data);

	}
}
?>
