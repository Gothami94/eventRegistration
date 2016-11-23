<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome2 extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->helper('html');
		$this->load->helper('url');

		$this->load->model('Home');
		$result=$this->Home->upcoming_events();

		$data = array();
		$i = 0;
		foreach ($result->result() as $object) {
			$data[$i] = $object;
			$i +=1;
		}
		//print_r ($data[0]->e_date);
		$data_array['returnData']= $data;
		$this->load->view('index-2',$data_array);

	}
}
