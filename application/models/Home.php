<?php
 /**
  *
  */
 class Home extends CI_Model
 {

 	function upcoming_events()
 	{
 		$this->load->database();
		$query = $this->db->query("SELECT * FROM event ");
		//$row1 = $query->first_row();
		//$row2 = $query->next_row();
		return $query;
 	}
 }



?>
