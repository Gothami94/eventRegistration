<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function upd_event()
	{
		$this->load->helper('html');
		$this->load->helper('url');

		$this->load->model('UpdateModel');
		$result=$this->UpdateModel->update_event();

		if($result){
			$this->load->model('RegisterModel');
			$result=$this->RegisterModel->select_table();

			$table= array();
			$i = 0;
			foreach ($result->result() as $row) {
				$table[$i] = $row;
				$i +=1;
			}
			$data['table']=$table;
			//Loading View

			$data['message']= 'Event Updated Successfully!';
			$this->load->view('eventReg',$data);
		}
	}
	public function sel_event($param)
	{
		//echo "hello";
		$this->load->helper('html');
		$this->load->helper('url');

		$id = $param;

		$this->load->model('UpdateModel');
		$sel_result=$this->UpdateModel->select_event($id);

		$table= array();
		$i = 0;
		foreach ($sel_result->result() as $row) {
			$table[$i] = $row;
			$i +=1;
		}
		$data['table']=$table;
		//Loading View

		$data['message']= 'Event Updated Successfully!';

		$this->load->view('updateEvent',$data);

	}

}
?>
