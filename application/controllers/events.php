<?php

class events extends CI_Controller {
    public function getcount() {
        $data['title'] = "Events";
        
        $this->load->model('AdminModel');
        $events = $this->AdminModel->getevent("no");
        $data['countevent'] = $events;
        
        $ticket = $this->AdminModel->getticket();
        $data['countticket'] = $ticket;
        
        $provider = $this->AdminModel->getprovider();
        $data['countprovider'] = $provider;
        
        $today = $this->AdminModel->gettoday();
        $data['counttoday'] = $today;
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/nevigation');
        $this->load->view('admin/index',$data);
        //$this->load->view('template/footer');
    }
    public function getEvents() {
        $data['title'] = "Events";
        
        $this->load->model('AdminModel');
        $events = $this->AdminModel->getevent("no");
        $data['events'] = $events;
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/nevigation');
        $this->load->view('admin/allEvents',$data);
        //$this->load->view('template/footer');
    }

    public function getNewTicket() {
        
        $data['title'] = "New Tickets";
        
        $this->load->model('AdminModel');
        $ticket = $this->AdminModel->getticket();
        $data['countticket'] = $ticket;
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/nevigation');
        $this->load->view('admin/newTickets',$data);
    }
    
    public function getNewProviders() {
        $data['title'] = "New Providers";
        
        $this->load->model('AdminModel');
        $provider = $this->AdminModel->getprovider();
        $data['countprovider'] = $provider;
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/nevigation');
        $this->load->view('admin/newProviders',$data);
        //$this->load->view('template/footer');
    }
    public function getTodayEvents() {
        $data['title'] = "To day events";
        
        $this->load->model('AdminModel');
        $events = $this->AdminModel->gettoday();
        $data['events'] = $events;
        
        $this->load->view('admin/template/header');
        $this->load->view('admin/template/nevigation');
        $this->load->view('admin/allEvents',$data);
        //$this->load->view('template/footer');
    }
    
    
    
    

}

?>
