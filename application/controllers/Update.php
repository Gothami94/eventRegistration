<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Update extends CI_Controller {

	public function event($param)
	{
		//echo "hello";
		$this->load->helper('html');
		$this->load->helper('url');


		$id = $param;
		//echo "$id";
		$result = false;
		$result = mysqli_query($conn,"SELECT * FROM event WHERE event_id=$id");
		$row = $result->fetch_object()


		$this->load->model('UpdateModel');
		$val=$this->UpdateModel->update_event();

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
?>
