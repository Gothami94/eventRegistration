
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class PaymentSuccess extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
		$data['plan_id']=$this->input->get('tx');
		//print_r($data['plan_id']);
		$data['member_id']=$this->input->get('item_number');
		//print_r($data['member_id']);
		$data['rate']=$this->input->get('amt');
		//print_r($data['rate']);
		$this->load->model('payment_model');
		$report=$this->payment_model->update_payment($data);
		if ($report==1) {
				print_r("ok");
		} else {
			print_r("fails");
		}
		header('Location: '.base_url().'member_payment_view');
		//redirect("member_payment_view",'refresh');
  
 }
 
 public function pay_by_admin()
 {
		echo "dulya";
 }
 
 
 
 
 
 
}
 
?>