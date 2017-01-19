
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class BuyModel extends CI_Model
{
  function buy()
	{
    $this->load->database();
    $result = $this->db->query("SELECT * FROM event JOIN ticket ON event.ticket_id=ticket.ticket_id  ORDER BY event_id");
    return $result;
	}

  function buy_ticket($param)
	{
    $this->load->database();
    $id=$param;
    $result = $this->db->query("SELECT * FROM event JOIN ticket ON event.ticket_id=ticket.ticket_id  where event_id= $id");
    return $result;
	}
}
?>
