<?php

class AdminModel extends CI_Model {

    public function getevent($st) {
        $this->db->where('status', $st);
        $quary = $this->db->get('event');
        return $quary->result();
    }
    public function getticket() {
       
        $quary = $this->db->get('ticket');
        return $quary->result();
    }
     public function getprovider() {
       
        $quary = $this->db->get('other_party');
        return $quary->result();
    }
    public function gettoday() {
       $this->db->where('e_date',date("Y-m-d"));
       $quary = $this->db->get('event');
       //$query = $this->db->query('select count(event_id) from event');
        //$query = $this->db->query("select count(event_id) from event where e_date=CURDATE();");
        return $quary->result();
    }

    public function getcount() {
        
    }

    public function getinfodb2() {
        $this->db->select_max('cus_id');
        $quary = $this->db->get('customer');

        return $quary->result();
    }

}
?>

