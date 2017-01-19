<?php
class payment_model extends CI_Model {

    function update_payment($data)
      {
      $this->load->database();
      $id=$data;
      $sql1 = $this->db->query("SELECT available from ticket WHERE ticket_id=$id");
      $result = $sql->result();
      $av=intval($result[0])-1;
      $sql = $this->db->query("UPDATE ticket SET available='$av' WHERE ticket_id=$id");
      return 1;

    }
}
?>
