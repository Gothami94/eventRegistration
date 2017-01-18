<?php

class buyTicket extends CI_Controller {
  public function buy()
  {
    $this->load->helper('html');
    $this->load->helper('url');
    $this->load->model('BuyModel');
    $val=$this->BuyModel->buy();
    $result=$this->RegisterModel->buy_ticket();
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
