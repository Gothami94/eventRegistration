<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class signUp extends CI_Controller {

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
		$this->load->model('signUp');

		$data = array(
			'cus_name' => $this->input->post('cus_name'),
			'user_name' => $this->input->post('user_name'),
			'password' => $this->input->post('password'),
			'contact' => $this->input->post('contact_nmbr'),
			'email' => $this->input->post('email'),
			'provider' => $this->input->post('provider')
			);
			//Transfering data to Model
		$this->signUp->sign($data);
		$data['message'] = 'Customer added Successfully!';
		//Loading View
		$this->load->view('signUp', $data);
		

	}
}
