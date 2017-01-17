
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class BuyModel extends CI_Model
{
  function select_table()
	{
    $this->load->database();
    $result = $this->db->query("SELECT * FROM event ORDER BY event_id");
    return $result;
	}
}
?>
