<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class DeleteModel extends CI_Model
{

	function delete_event($id)
	{
		$this->load->database();
		$e_id=$id;
		$result = $this->db->query("DELETE FROM event WHERE event_id=$e_id LIMIT 1");
		return $result;
	}
}
?>
