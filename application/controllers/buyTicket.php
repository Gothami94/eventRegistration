<?php

class buyTicket extends CI_Controller {

  function index()
  {
     $data['item_name']=$this->input->get('tx');
     $data['item_number']=$this->input->get('item_number');
     $data['item_price']=$this->input->get('item_price');
     $data['rate']=$this->input->get('amt');

     //$this->load->model('payment_model');
     //$report=$this->payment_model->update_payment($data);

    //  if ($report==1) {
    //      print_r("ok");
    //  } else {
    //    print_r("fails");
    //  }
     header('Location: '.base_url().'payment_view');
     //redirect("member_payment_view",'refresh');

  }

  public function buy($param)
  {
    $this->load->helper('html');
    $this->load->helper('url');

    $id=$param;

    $this->load->model('BuyModel');
    $result=$this->BuyModel->buy_ticket($id);

    if ($result) {
      $table= array();
      $i = 0;
      foreach ($result->result() as $row) {
        $table[$i] = $row;
        $i +=1;
      }
      $data['table']=$table;
      $data['message']= 'Order is Successful!';

      $this->load->view('payment_view',$data);
		} else {
			header('Location: '.base_url().'member_payment_view');
		}


    // $table= array();
    // $i = 0;
    // foreach ($result->result() as $row) {
    //   $table[$i] = $row;
    //   $i +=1;
    // }
    // $data['table']=$table;
    // if ($val) {
    //   $data['message']= 'Event Registered Successfully!';
    // }
    // $this->load->view('eventReg',$data);

  }

}

?>
