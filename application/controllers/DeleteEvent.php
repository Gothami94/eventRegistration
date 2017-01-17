<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DeleteEvent extends CI_Controller {

	public function del_event($param)
	{
		$this->load->helper('html');
		$this->load->helper('url');

		$id = $param;
		$this->load->model('DeleteModel');
		$result=$this->DeleteModel->delete_event($id);

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

			$data['message']= 'Event Deleted Successfully!';
			$this->load->view('eventReg',$data);
		}

	}
}
?>
